<?php
/**
*
* @package Inline BBCode
* @copyright (c) 2017 Kirk - http://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 
namespace chris1278\cookie\migrations;

class install_bbcodes extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'install_cookiebbcode'))),
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(array(&$this, 'cookiebbcode_behind'))),
		);
	}

	/**
	* cookiebbcode left behind, hides the bbcode buttons on posting
	*
	* @param array $bbcode_tags Array of cookiebbcode tags to hide
	* @return null
	* @access public
	*/
	public function cookiebbcode_behind($bbcode_tags)
	{
		/**
		 * @var array An array of cookiebbcode (tags) to be left behind
		 */
		$bbcode_tags = array('inlinecode');

		// set to null the display on posting
		$sql = 'UPDATE ' . BBCODES_TABLE . '
				SET display_on_posting = 0
				WHERE ' . $this->db->sql_in_set('bbcode_tag', $bbcode_tags);
		$this->db->sql_query($sql);
	}

	/**
	* Installs BBCodes, used by migrations to perform add/updates
	*
	* @param array $bbcode_data Array of BBCode data to install
	* @return null
	* @access public
		*/
	public function install_cookiebbcode($bbcode_data)
	{
			// Load the acp_bbcode class
			if (!class_exists('acp_bbcodes'))
			{
				include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
			}

			$bbcode_tool = new \acp_bbcodes();

		/**
		* @var array An array of bbcodes data to install
		*/
		$bbcode_data = array(
			'inline_bbcode=' => array(
				'bbcode_match'		=> '[youtube]https://{IDENTIFIER2}.youtube.com/watch?v={IDENTIFIER}[/youtube]',
				'bbcode_tpl'			=> '<div class="videoCConsentContainer" data-source="{IDENTIFIER}">
											<div class="ccMessageContainer embed-responsive embed-responsive-16by9">
											<div class="rules">
											<p>Video: https://{IDENTIFIER2}.youtube.com/watch?v={IDENTIFIER}<br><br>{L_COOKIE_INFO}</p>
											<a class="btn btn-primary" onclick="return klaro.show();">{L_ADJUST_COOKIE}</a>
											</div>
											</div>
											<div class="videoLayer embed-responsive embed-responsive-16by9 vimvid"></div>
											</div>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 1,
			),
		);

		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
					// Build the BBCodes
					$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl']);

					$bbcode_array += array(
						'bbcode_tag'			=> $data['bbcode_tag'],
						'first_pass_match'		=> $data['first_pass_match'],
						'first_pass_replace'	=> $data['first_pass_replace'],
						'second_pass_match'		=> $data['second_pass_match'],
						'second_pass_replace'	=> $data['second_pass_replace']
					);

				$sql = 'SELECT bbcode_id
						FROM ' . BBCODES_TABLE . "
						WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
						OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
				$result = $this->db->sql_query($sql);
				$row_exists = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				if ($row_exists)
				{
					// Update existing BBCode
					$bbcode_id = $row_exists['bbcode_id'];

					$sql = 'UPDATE ' . BBCODES_TABLE . '
							SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
							WHERE bbcode_id = ' . $bbcode_id;
					$this->db->sql_query($sql);
				}
				else
				{
					// Create new BBCode
					$sql = 'SELECT MAX(bbcode_id) AS max_bbcode_id
							FROM ' . BBCODES_TABLE;
					$result = $this->db->sql_query($sql);
					$max_bbcode_id = $this->db->sql_fetchfield('max_bbcode_id');
					$this->db->sql_freeresult($result);

					if ($max_bbcode_id)
					{
						$bbcode_id = $max_bbcode_id + 1;

						// Make sure it is greater than the core BBCode ids...
						if ($bbcode_id <= NUM_CORE_BBCODES)
						{
							$bbcode_id = NUM_CORE_BBCODES + 1;
						}
					}
					else
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}

					if ($bbcode_id <= BBCODE_LIMIT)
					{
						$bbcode_array['bbcode_id'] = (int) $bbcode_id;
						$bbcode_array['display_on_posting'] = ((int) $bbcode_array['display_on_posting']);
						$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
					}
				}
		}
	}
}