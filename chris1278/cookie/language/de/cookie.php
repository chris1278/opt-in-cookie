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
	'CHRIS1278_CORE_CHRIS_CONFIG_PHP_ERROR'	=>	'dies ist ein test für sprachvariabel in der core/config_php', //eingebaut zum testen der core datei chris1278_config

	//Error Warning for ext.php
	'PHPBB_VERSION_WRONG'		=>	'Für das Benutzen dieser Extension must du mindestens die nachfolgend angezeigte PHPBB_Version haben:',
	//Translation the content of the box
	'TRUE'						=>	'true',
	'FALSE'						=>	'false',
	'ALL_ACCEPT'				=>	'Alle Akzeptieren',
	'ACCEPT'					=>	'Akzeptieren',
	'ACCEPT_SELECTED'			=>	'Ausgewählte akzeptieren',
	'DECLINE'					=>	'Ablehnen',
	'SAVE'						=>	'Speichern',
	'CLOSE'						=>	'Schließen',
	'POWERD_BY'					=>	'Realisiert mit Klaro!',
	'FIRST_INFOS'				=>	'Um bestimmte Funktionen nutzen zu können sind ein paar Einstellungen nötig. Damit wird gesteuert ob ein Dienst Cookies setzen darf oder nicht. <br><br>Es werden Cookies gesetzt für folgende Dienste:<br><br>{purposes}. <br><br>Die Einstellungen können später zu jedem Zeitpunkt geändert werden.<br><br>',
	'THE_COOKIE_SETTTINGS'		=>	'Zu den Cookie-Einstellungen',
	'ALL_SWITCH_EXPLAIN'		=>	'Mit diesem Schalter kannst Du alle Dienste aktivieren oder deaktivieren.',
	'ALL_SWITCH'				=>	'Alle Dienste aktivieren oder deaktivieren',
	'OPTOUT_INFO'				=>	'Diese Dienste werden standardmäßig geladen (Du kannst diese jedoch deaktivieren)',
	'KLARO_PURPOSE'				=>	'Zweck',
	'KLARO_PURPOSES'			=>	'Zwecke',
	'ALWAYS_REQUIRED_SERVICE'	=>	'Dieser Service ist immer erforderlich',
	'ALWAYS_REQUIRED'			=>	'(immer erforderlich)',
	'KLARO_SERVICE'				=>	'Dienst',
	'KLARO_SERVICES'			=>	'Dienste',
	'SETTINGS_FOR_COOKIE'		=>	'<i class="opt-in-cookie-icon cookie-box-icon"></i>Einstellungen für unsere Cookie´s',
	'SECOND_INFOS'				=>	'Hier können die Einstellungen für Cookies vorgenommen werden die evtl. gesetzt werden.<br><br> Allgemeine Hinweise und Informationen entnehme bitte unserer <a href="%1$s"><strong>Datenschutzerklärung</strong></a> bzw. <a href="%2$s"><strong>Nutzungsbedingungen</strong></a>.',
	'COOKIES_MUST_HAVE'			=>	'Diese Cookies sind voreingestellte Werte und müssen akzeptiert werden, da diese für den Betrieb der Webseite erforderlich sind.',
	'TECHNICAL_COOKIES'			=>	'Technisch notwendige Cookies',
	'EXTERN_COOKIES_EXPLAIN'	=>	'Hier können Cookies eingestellt werden die durch externe Medien wie z.B. Youtube, Facebook etc. erstellt werden',
	'NEW_CHANGES'				=>	'Seit deinem letzten Besuch gab es Änderungen, bitte erneuere deine Zustimmung.',
	'EXTERN_COOKIES'			=>	'Externe Medien',
	'LOAD_EXTERNAL_CONTENT'		=>	'Möchtest Du externe Inhalte laden, die von {title} bereitgestellt werden?',
	'ALLOW_ONCE'				=>	'Einmalig erlauben',
	'PERMIT_PERMANENTLY'		=>	'Dauerhaft erlauben (Du kannst die Einstellungen jederzeit ändern!)',
	'TOOLS'						=>	'Tools',
	'TOOLS_COOKIES'				=>	'Hier sind Dienste vorhanden wie z.B. Google Translator oder Google Search',
	'YT_VIDEOLINK_HELP'			=>	'[youtube]Videolink[/youtube]',
	'OPT_IN_COKKIE_INFO'		=>	'Cookie-Einstellungen',
]);
