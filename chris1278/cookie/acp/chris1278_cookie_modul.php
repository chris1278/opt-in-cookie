<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\acp;

class chris1278_cookie_modul
{
	function module()
	{
		return [
			'filename'	=>	'\chris1278\cookie\acp\chris1278_cookie_general',
			'title'		=>	'ACP_CM_COOKIE',
			'version'	=>	'1.0.0',
			'modes'		=>	[
				'settings'		=>	[
					'title'		=>	'ACP_CM_COOKIE_GENERAL',
					'auth'		=>	'ext_chris1278/cookie && acl_a_board',
					'cat'		=>	['ACP_CM_COOKIE'],
				],
			],
		];
		return [
			'filename'	=>	'\chris1278\cookie\acp\chris1278_cookie_settings',
			'title'		=>	'ACP_CM_COOKIE',
			'version'	=>	'1.0.0',
			'modes'		=>	[
				'settings2'		=>	[
					'title'		=>	'ACP_CM_COOKIE_SETTINGS',
					'auth'		=>	'ext_chris1278/cookie && acl_a_board',
					'cat'		=>	['ACP_CM_COOKIE'],
				],
			],
		];
	}
}
