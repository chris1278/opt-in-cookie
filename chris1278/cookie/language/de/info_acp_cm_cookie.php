<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	// language pack author
	'CM_LANG_DESC'									=>	'Deutsch (Du)',
	'CM_LANG_EXT_VER' 								=>	'1.0.4',
	'CM_LANG_AUTHOR' 								=>	'Chris1278',
	'CM_CONFIG_DESC' 								=>	'Hier können die Einstellungen für die Erweiterung „%1$s“ (v%2$s) geändert werden.',
	'CM_MSG_LANGUAGEPACK_OUTDATED'					=>	'Hinweis: Das Sprachpaket dieser Erweiterung ist nicht mehr aktuell.',
	//ACP Translation
	'ACP_CM_COOKIE'									=>	'Cookie Manager',
	'ACP_CM_GENERAL'								=>	'Allgemeine Einstellungen',
	'ACP_CM_SETTINGS'								=>	'Einstellungen für Schalter/Dienste',
]);
