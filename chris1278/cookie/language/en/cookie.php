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
	'TRUE'						=>	'true',
	'FALSE'						=>	'false',
	'ALL_ACCEPT'				=>	'Accept All',
	'ACCEPT'					=>	'Accept',
	'ACCEPT_SELECTED'			=>	'Accept selected',
	'DECLINE'					=>	'Decline',
	'SAVE'						=>	'Save',
	'CLOSE'						=>	'Close',
	'POWERD_BY'					=>	'Realized with Klaro!',
	'FIRST_INFOS'				=>	'A few settings are required to be able to use certain functions. This controls whether a service is allowed to set cookies or not.<br><br>Cookies are set for the following services:<br><br>{purposes}. <br><br>The settings can be changed later at any time.<br><br>',
	'THE_COOKIE_SETTTINGS'		=>	'To the Cookie-Settings',
	'ALL_SWITCH_EXPLAIN'		=>	'With this switch you can activate or deactivate all services.',
	'ALL_SWITCH'				=>	'Activate or deactivate all services',
	'OPTOUT_INFO'				=>	'These services are loaded by default (but you can disable them)',
	'KLARO_PURPOSE'				=>	'Purpose',
	'KLARO_PURPOSES'			=>	'Purposes',
	'ALWAYS_REQUIRED_SERVICE'	=>	'This service is always required!',
	'ALWAYS_REQUIRED'			=>	'(always required)',
	'KLARO_SERVICE'				=>	'Service',
	'KLARO_SERVICES'			=>	'Services',
	'SETTINGS_FOR_COOKIE'		=>	'<i class="opt-in-cookie-icon cookie-box-icon"></i> Settings for the Cookie´s',
	'SECOND_INFOS'				=>	'The settings for cookies can be made here, which may be set.<br><br> For general notes and information, please refer to our <a href="%1$s"><strong>Data protection</strong></a> respectively <a href="%2$s"><strong> Terms of Use</strong></a>.',
	'COOKIES_MUST_HAVE'			=>	'These cookies are preset values and must be accepted as they are necessary for the website to operate.',
	'TECHNICAL_COOKIES'			=>	'Technically necessary cookies',
	'EXTERN_COOKIES_EXPLAIN'	=>	'Cookies can be set here that are created by external media such as YouTube, Facebook, etc.',
	'NEW_CHANGES'				=>	'There have been changes since your last visit, please renew your consent.',
	'EXTERN_COOKIES'			=>	'External Media',
	'LOAD_EXTERNAL_CONTENT'		=>	'Would you like to load external content provided by {title}?',
	'ALLOW_ONCE'				=>	'Allow once',
	'PERMIT_PERMANENTLY'		=>	'Permit permanently (you can change the settings at any time!)',
	'TOOLS'						=>	'Tools',
	'TOOLS_COOKIES'				=>	'Services such as Google Translator or Google Search are available here',
	'YT_VIDEOLINK_HELP'			=>	'[youtube]Videolink[/youtube]',
	'OPT_IN_COKKIE_INFO'		=>	'Cookie-Settings',
	'CS_TECH_COOKIE'			=>	'Login, Session Cookies',
	'CS_YOUTUBE'				=>	'Youtube',
	'CS_GOOGLE_TRANSLATOR'		=>	'Google Translator',
	'CS_GOOGLE_ANALYTICS'		=>	'Google Analytics',
	'CS_KLAROSTYLE'				=>	'light',
]);
