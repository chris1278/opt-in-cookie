<?php
/**
*
* @copyright (c) 2021 Mike-on-Tour and (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\cookie\core;

/**
* Configuration container class
*/
class chris1278_db extends \chris1278\cookie\core\chris1278_config
{

	protected $cache;
	protected $db;
	protected $table;

	public function __construct(
		\phpbb\db\driver\driver_interface $db,
		\phpbb\cache\driver\driver_interface $cache,
		$table
	)
	{
		$this->db = $db;
		$this->cache = $cache;
		$this->table = $table;

		if (($ext_cookie = $cache->get('ext_cookie')) !== false)
		{
			$sql = 'SELECT chris1278_name, chris1278_value
				FROM ' . $this->table . '
				WHERE is_dynamic = 1';
			$result = $this->db->sql_query($sql);

			while ($row = $this->db->sql_fetchrow($result))
			{
				$ext_cookie[$row['chris1278_name']] = $row['chris1278_value'];
			}
			$this->db->sql_freeresult($result);
		}
		else
		{
			$ext_cookie = $ext_cookie_cached = [];

			$sql = 'SELECT chris1278_name, chris1278_value, is_dynamic
				FROM ' . $this->table;
			$result = $this->db->sql_query($sql);

			while ($row = $this->db->sql_fetchrow($result))
			{
				if (!$row['is_dynamic'])
				{
					$ext_cookie_cached[$row['chris1278_name']] = $row['chris1278_value'];
				}

				$ext_cookie[$row['chris1278_name']] = $row['chris1278_value'];
			}
			$this->db->sql_freeresult($result);

			$cache->put('ext_cookie', $ext_cookie_cached);
		}

		parent::__construct($ext_cookie);
	}

	public function delete($key, $use_cache = true)
	{
		$sql = 'DELETE FROM ' . $this->table . "
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'";
		$this->db->sql_query($sql);

		unset($this->ext_cookie[$key]);

		if ($use_cache)
		{
			$this->cache->destroy('ext_cookie');
		}
	}

	public function set($key, $value, $use_cache = true)
	{
		$this->set_atomic($key, false, $value, $use_cache);
	}

	public function set_atomic($key, $old_value, $new_value, $use_cache = true)
	{
		$sql = 'UPDATE ' . $this->table . "
			SET chris1278_value = '" . $this->db->sql_escape($new_value) . "'
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'";

		if ($old_value !== false)
		{
			$sql .= " AND chris1278_value = '" . $this->db->sql_escape($old_value) . "'";
		}

		$this->db->sql_query($sql);

		if (!$this->db->sql_affectedrows() && isset($this->ext_cookie[$key]))
		{
			return false;
		}

		if (!isset($this->ext_cookie[$key]))
		{
			$sql = 'INSERT INTO ' . $this->table . ' ' . $this->db->sql_build_array('INSERT', [
				'chris1278_name'	=> $key,
				'chris1278_value'	=> $new_value,
				'is_dynamic'	=> ($use_cache) ? 0 : 1]);
			$this->db->sql_query($sql);
		}

		if ($use_cache)
		{
			$this->cache->destroy('ext_cookie');
		}

		$this->ext_cookie[$key] = $new_value;
		return true;
	}

	function increment($key, $increment, $use_cache = true)
	{
		if (!isset($this->ext_cookie[$key]))
		{
			$this->set($key, '0', $use_cache);
		}

		$sql_update = $this->db->cast_expr_to_string($this->db->cast_expr_to_bigint('chris1278_value') . ' + ' . (int) $increment);

		$this->db->sql_query('UPDATE ' . $this->table . '
			SET chris1278_value = ' . $sql_update . "
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'");

		if ($use_cache)
		{
			$this->cache->destroy('ext_cookie');
		}

		$this->ext_cookie[$key] += $increment;
	}
}
