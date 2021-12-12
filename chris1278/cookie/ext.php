<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$phpbb_min_ver		= '3.2.10';
		$phpbb_below_ver	= '3.4.0@dev';
		$php_min_ver		= '7.0.0';
		$php_below_ver		= '9.0.0';

		$valid_phpbb = phpbb_version_compare(PHPBB_VERSION, $phpbb_min_ver, '>=') && phpbb_version_compare(PHPBB_VERSION, $phpbb_below_ver, '<');
		$valid_php = phpbb_version_compare(PHP_VERSION, $php_min_ver, '>=') && phpbb_version_compare(PHP_VERSION, $php_below_ver, '<');
		return $valid_phpbb && $valid_php;
	}
}
