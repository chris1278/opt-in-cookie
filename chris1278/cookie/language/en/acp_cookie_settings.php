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
	'ACP_CM_SETTINGS_SETTINGS'						=>	'Settings',
	'ACP_CM_SETTINGS_PAGE_TITLE'					=>	'Cookie Manager',
	'ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'			=>	'Here you can make the settings to adapt your script.<br><br> Select here which switches should be displayed to the visitors of the forum.',
	'ACP_CM_SWITCH_SET_TITLE'						=>	'Switches to be displayed',
	'CM_COOKIE_UPDATE'								=>	'The opt-in cookie manager by klaro script settings have been successfully adopted!',
	'YOUTUBE_BBCODE_SWITCH'							=>	'Youtube',
	'YOUTUBE_BBCODE_SWITCH_EXPLAIN'					=>	'This switch allows you to set the cookie selection for Youtube videos!',
	'GOOGLE_TRANSLATOR_SWITCH'						=>	'Google Translator',
	'GOOGLE_TRANSLATOR_SWITCH_EXPLAIN'				=>	'With this switch you activate the selection for the extension<a href="https://www.phpbb.com/customise/db/extension/google_translator/"><b>Google Translator</b></a>',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER'				=>	'Google Analitycs without Tagmanger',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER_EXPLAIN'		=>	'Here you can activate the switch so that you can use Google Analytics without a tag manager.',
	'GOOGLE_ANALYTICS_ID'							=>	'Google ID',
	'GOOGLE_ANALYTICS_ID_EXPLAIN'					=>	'Please enter your Google ID here',
	'ACP_GOOGLE_ANALYTICS_ID'						=>	'Example of a Google ID - G-8FK05BPM2N',
]);
