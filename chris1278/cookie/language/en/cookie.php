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
	'A1'						=> 'All accept',
	'A2'						=> 'Accept',
	'A3'						=> 'Accept selected ',
	'A4'						=> 'Decline',
	'A5'						=> 'Save',
	'PB'						=> 'Realized with Klaro!',
	'D1'						=> 'A few settings are required to be able to use certain functions. This controls whether a service is allowed to set cookies or not. <br><br>Cookies are set for the following services:<br><br>{purposes}. <br><br>The settings can be changed later at any time.<br><br>',
	'ZC'						=> 'To the cookie settings',
	'D2'						=> 'With this switch you can activate or deactivate all services.',
	'T1'						=> 'Activate or deactivate all services',
	'O1'						=> 'These services are loaded by default (but you can disable them)',
	'P1'						=> 'purpose',
	'P2'						=> 'purposes',
	'D3'						=> 'This service is always required',
	'T2'						=> '(always required)',
	'S1'						=> 'service',
	'S2'						=> 'services',
	'T3'						=> 'Settings for our cookies',
	'D4'						=> 'The settings for cookies can be made here, which may be set. There are many settings, but that does not mean that all services are used. This script is a predefined universal script for selecting cookies.<br><br> For general notes and information, please refer to our <a href="%1$s"><strong>Privacy Policy</strong></a> or <a href="%2$s"><strong>Terms of Use</strong></a>, which we have linked in the footer of the page.',
	'D5'						=> 'These cookies are preset values and must be accepted as they are required for the website to operate.',
	'T4'						=> 'Technically necessary cookies',
	'D6'						=> 'Cookies can be set here that are sent through external media such as Youtube, Facebook etc. can be created',
	'T5'						=> 'External media',
	'VIDEOLINK'					=> 'Video link',
	'YT_VIDEOLINK_HELP'			=> '[youtube]Video link[/youtube]',
	'COOKIE_INFO'				=> 'You must allow the cookie consent setting for external media on the Youtube switch so that Youtube videos can be displayed and played in posts!',
	'ADJUST_COOKIE'				=> 'Adjust the Cookie-Consent-Settings',
	'OPT_IN_COKKIE_INFO'		=> 'Adjust the Cookie-Settings',
));
