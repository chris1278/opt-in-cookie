<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/


namespace chris1278\cookie\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\install_bbcodes'];
	}

	public function update_data()
	{
		return [
			['config.add',['cookie_manager_version', '1.0.0']],
		];
	}

	public function revert_schema()
	{
		return [
			['config.remove', ['cookie_manager_version', '']],
		];
	}
}
