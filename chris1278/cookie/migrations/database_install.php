<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\migrations;

class database_install extends \phpbb\db\migration\migration
	{

	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\v_1_0_2'];
	}

	public function update_schema()
	{
		return [
			'add_tables'	=> [
				$this->table_prefix . 'chris1278_cookie'	=> [
					'COLUMNS'		=> [
						'chris1278_name'	=>	['VCHAR:255', ''],
						'chris1278_value'	=>	['VCHAR:255', ''],
						'is_dynamic'	=>	['BOOL',  0],
					],
					'PRIMARY_KEY'	=>	['chris1278_name'],
					'KEYS'	=> [
						'is_dynamic'	=>	['INDEX', 'is_dynamic'],
					],

				],
			]
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables'		=> [
				$this->table_prefix . 'chris1278_cookie',
			],
		];
	}
}
