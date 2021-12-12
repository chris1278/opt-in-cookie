<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\migrations;

class database_update extends \phpbb\db\migration\migration
	{

	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\database_install'];
	}

	public function update_data()
	{
		return [

			['custom', [[$this, 'import_optin']]],

		];
	}

	public function import_optin()
	{
		$sql_ary = array(
			'chris1278_name'	=> 'cs_1_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_2_enable',
			'chris1278_value'	=> 'klaro',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_3_enable',
			'chris1278_value'	=> 'klaro',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_4_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_5_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_6_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_7_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_8_enable',
			'chris1278_value'	=> '120',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_10_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_11_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_12_enable',
			'chris1278_value'	=> '0',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);

		$sql_ary = array(
			'chris1278_name'	=> 'cs_13_enable',
			'chris1278_value'	=> '1',
			'is_dynamic'		=> '0',
		);

		$sql = ('INSERT INTO ' . $this->table_prefix . 'chris1278_cookie ' . $this->db->sql_build_array('INSERT', $sql_ary));
		$this->db->sql_query($sql);
	}
}
