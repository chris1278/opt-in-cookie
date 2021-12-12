<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace chris1278\cookie\migrations;

class v_1_0_4 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\v_1_0_3'];
	}

	public function update_data()
	{
		return [
			['config.remove', ['cookie_manager_version']],
			['custom', [[$this, 'import_optin']]],
		];
	}

	public function import_optin()
	{
		$sql_ary = [
			'chris1278_name' => 'window_position',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_1_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'name_of_cookie',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_2_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'klaro_div_container',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_3_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'klaro_hidden_windows',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_4_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'html_code_processing',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_5_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'group_formation',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_6_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'save_all_button',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_7_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'cookie_runtime',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_8_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'show_decline_button',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_10_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'to_the_cookie_settings',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_11_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'window_fix_in_the_middle',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_12_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name' => 'klaro_note',
		];

		$sql = 'UPDATE ' . $this->table_prefix . 'chris1278_cookie
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE chris1278_name = "cs_13_enable"';
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name'	=> 'google_analytics_id',
			'chris1278_value'	=> '',
			'is_dynamic'		=> '0',
		];
		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = [
			'chris1278_name'	=> 'storage_version',
			'chris1278_value'	=> 'cookie',
			'is_dynamic'		=> '0',
		];

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);
	}
}
