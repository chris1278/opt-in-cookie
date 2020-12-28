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
	'A1'						=> 'Alle Akzeptieren',
	'A2'						=> 'Akzeptieren',
	'A3'						=> 'Ausgewählte akzeptieren',
	'A4'						=> 'Ablehnen',
	'A5'						=> 'Speichern',
	'PB'						=> 'Realisiert mit Klaro!',
	'D1'						=> 'Um bestimmte Funktionen nutzen zu können sind ein paar Einstellungen nötig. Damit wird gesteuert ob ein Dienst Cookies setzen darf oder nicht. <br><br>Es werden Cookies gesetzt für folgende Dienste:<br><br>{purposes}. <br><br>Die Einstellungen können später zu jedem Zeitpunkt geändert werden.<br><br>',
	'ZC'						=> 'Zu den Cookie-Einstellungen',
	'D2'						=> 'Mit diesem Schalter können Sie alle Dienste aktivieren oder deaktivieren.',
	'T1'						=> 'Alle Dienste aktivieren oder deaktivieren',
	'O1'						=> 'Diese Dienste werden standardmäßig geladen (Sie können dies jedoch deaktivieren',
	'P1'						=> 'Zweck',
	'P2'						=> 'Zwecke',
	'D3'						=> 'Dieser Service ist immer erforderlich',
	'T2'						=> '(immer erforderlich)',
	'S1'						=> 'Dienst',
	'S2'						=> 'Dienste',
	'T3'						=> 'Einstellungen für unsere Cookie´s',
	'D4'						=> 'Hier können die Einstellungen für Cookies vorgenommen werden die evtl. gesetzt werden. Es sind viele Einstellungen da, das heißt aber nicht das auch alle Dienste verwendet werden. Es handelt sich bei diesem Script um ein Vordefiniertes universelles Script zum Auswählen von Cookies.<br><br> Allgemeine Hinweise und Informationen entnehme bitte unserer <a href="%1$s"><strong>Datenschutzerklärung</strong></a> bzw. <a href="%2$s"><strong>Nutzungsbedingungen</strong></a>.',
	'D5'						=> 'Diese Cookies sind voreingestellte Werte und müssen akzeptiert werden, da diese für den Betrieb der Webseite erforderlich sind.',
	'T4'						=> 'Technisch notwendige Cookies',
	'D6'						=> 'Hier können Cookies eingestellt werden die durch externe Medien wie z.B. Youtube, Facebook etc. erstellt werden',
	'T5'						=> 'Externe Medien',
	'VIDEOLINK'					=> 'Videolink',
	'YT_VIDEOLINK_HELP'			=> '[youtube]Videolink[/youtube]',
	'COOKIE_INFO'				=> 'Sie müssen die Cookie-Consent-Einstellung für Externe Medien bei dem Schalter Youtube zulassen, damit Youtube-Videos in Beiträgen angezeigt und abgespielt werden können!',
	'ADJUST_COOKIE'				=> 'Cookie-Consent-Einstellungen anpassen',
	'OPT_IN_COKKIE_INFO'		=> 'Cookie-Einstellungen',
));
