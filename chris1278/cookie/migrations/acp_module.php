<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\migrations;

class acp_module extends \phpbb\db\migration\migration
	{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\database_install'];
	}

	public function update_data()
	{
		return [

		['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_CM_COOKIE'
			]],
			['module.add',[
				'acp', 'ACP_CM_COOKIE', [
					'module_basename'	=> '\chris1278\cookie\acp\chris1278_cookie_general',
					'module_langname'	=> 'ACP_CM_GENERAL',
					'module_mode'		=> 'overview',
					'module_auth'		=>  'ext_chris1278/cookie && acl_a_board',
			]]],
			['module.add', [
				'acp', 'ACP_CM_COOKIE', [
					'module_basename'	=> '\chris1278\cookie\acp\chris1278_cookie_settings',
					'module_langname'	=> 'ACP_CM_SETTINGS',
					'module_mode'		=> 'main',
					'module_auth'		=> 'ext_chris1278/cookie && acl_a_board',
			]]],
		];
	}

	public function revert_schema()
	{
		return [

		['module.remove', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_CM_COOKIE'
			]],
			['module.remove',[
				'acp', 'ACP_CM_COOKIE', [
					'module_basename'	=> '\chris1278\cookie\acp\chris1278_cookie_general',
					'module_langname'	=> 'ACP_CM_GENERAL',
					'module_mode'		=> 'overview',
					'module_auth'		=>  'ext_chris1278/cookie && acl_a_board',
			]]],
			['module.remove', [
				'acp', 'ACP_CM_COOKIE', [
					'module_basename'	=> '\chris1278\cookie\acp\chris1278_cookie_settings',
					'module_langname'	=> 'ACP_CM_SETTINGS',
					'module_mode'		=> 'main',
					'module_auth'		=> 'ext_chris1278/cookie && acl_a_board',
			]]],
		];
	}
}
