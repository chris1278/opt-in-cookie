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
	'COOKIE_INFO'				=> 'Sie müssen die Cookie-Consent-Einstellung für Externe Medien bei dem Schalter Youtube zulassen, damit Youtube-Videos in Beiträgen angezeigt und abgespielt werden können!',
	'ADJUST_COOKIE'				=> 'Cookie-Consent-Einstellungen anpassen',
	'OPT_IN_COKKIE_INFO'		=> 'Cookie-Einstellungen',
));
