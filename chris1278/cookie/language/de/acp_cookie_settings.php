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
	'ACP_CM_SETTINGS_SETTINGS'						=>	'Einstellungen',
	'ACP_CM_SETTINGS_PAGE_TITLE'					=>	'Cookie Manager',
	'ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'			=>	'Hier können Sie die Einstellungen vornehmen um Ihr Script anzupassen.<br><br> Wählen Sie hier aus welche Schalter den Besuchern des Forums angezeigt werden sollen.',
	'ACP_CM_SWITCH_SET_TITLE'						=>	'Anzuzeigende Schalter',
	'CM_COOKIE_UPDATE'								=>	'Die Opt-In Cookie Manager by klaro Script-Einstellungen wurden erfolgreich übernommen!',
	'YOUTUBE_BBCODE_SWITCH'							=>	'Youtube',
	'YOUTUBE_BBCODE_SWITCH_EXPLAIN'					=>	'Dieser Schalter ermöglicht das Setzen für Cookie Auswahl für Youtube Viedeos!',
	'GOOGLE_TRANSLATOR_SWITCH'						=>	'Google Translator',
	'GOOGLE_TRANSLATOR_SWITCH_EXPLAIN'				=>	'Mit diesem Schalter aktivieren Sie die Auswahl für die Extension <a href="https://www.phpbb.com/customise/db/extension/google_translator/"><b>Google Translator</b></a>',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER'				=>	'Google Analitycs ohne Tagmanger',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER_EXPLAIN'		=>	'Hier kannst du den Schalter aktivieren um die Wahlmöglichkeit der Google Analitycs ohne Tagmanger zu nutzen aktivieren.',
	'GOOGLE_ANALYTICS_ID'							=>	'Google ID',
	'GOOGLE_ANALYTICS_ID_EXPLAIN'					=>	'Hier bitte die Google-ID eintragen',
	'ACP_GOOGLE_ANALYTICS_ID'						=>	'Beispiel für eine Google ID - G-8FK05BPM2N',
]);
