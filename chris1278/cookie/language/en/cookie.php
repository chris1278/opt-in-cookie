<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'COOKIE_INFO'				=> 'You must allow the cookie consent setting for external media on the Youtube switch so that Youtube videos can be displayed and played in posts!',
	'ADJUST_COOKIE'				=> 'Adjust the Cookie-Consent-Settings',
	'OPT_IN_COKKIE_INFO'		=> 'Adjust the Cookie-Settings',
));
