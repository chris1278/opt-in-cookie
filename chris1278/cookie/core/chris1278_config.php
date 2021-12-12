<?php
/**
*
* @copyright (c) 2021 Mike-on-Tour and (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\cookie\core;

class chris1278_config implements \ArrayAccess, \IteratorAggregate, \Countable
{

	protected $ext_cookie;

	public function __construct(
		$ext_cookie
	)
	{
		$this->ext_cookie = $ext_cookie;
	}

	public function getIterator()
	{
		return new \ArrayIterator($this->ext_cookie);
	}

	public function offsetExists($key)
	{
		return isset($this->ext_cookie[$key]);
	}

	public function offsetGet($key)
	{
		return (isset($this->ext_cookie[$key])) ? $this->ext_cookie[$key] : '';
	}

	public function offsetSet($key, $value)
	{
		$this->ext_cookie[$key] = $value;
	}

	public function offsetUnset($key)
	{
		trigger_error($this->language->lang(''), E_USER_ERROR);
	}

	public function count()
	{
		return count($this->ext_cookie);
	}

	public function delete($key, $use_cache = true)
	{
		unset($this->ext_cookie[$key]);
	}

	public function set($key, $value, $use_cache = true)
	{
		$this->ext_cookie[$key] = $value;
	}

	public function set_atomic($key, $old_value, $new_value, $use_cache = true)
	{
		if (!isset($this->ext_cookie[$key]) || $this->ext_cookie[$key] == $old_value)
		{
			$this->ext_cookie[$key] = $new_value;
			return true;
		}
		return false;
	}

	function increment($key, $increment, $use_cache = true)
	{
		if (!isset($this->ext_cookie[$key]))
		{
			$this->ext_cookie[$key] = 0;
		}

		$this->ext_cookie[$key] += $increment;
	}
}
