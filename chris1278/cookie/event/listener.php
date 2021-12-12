<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	protected $ext_cookie;
	protected $config;
	protected $template;
	protected $user;
	protected $root_path;
	protected $php_ext;

	public function __construct(
		\chris1278\cookie\core\chris1278_db $ext_cookie,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		$root_path,
		$php_ext
	)
	{
		$this->ext_cookie	= $ext_cookie;
		$this->config		= $config;
		$this->template		= $template;
		$this->language		= $language;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'				=>	'load_language_on_setup',
			'core.page_header_after'		=> 	'show_oic_cookie',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'chris1278/cookie',
			'lang_set'	=> 'cookie',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function show_oic_cookie()
	{
		$youtube_bbcode_switch 					=	$this->ext_cookie['youtube_bbcode_switch'];
		$google_translator_switch 				=	$this->ext_cookie['google_translator_switch'];
		$google_analytics_no_tm_switch	 		=	$this->ext_cookie['google_analytics_no_tm_switch'];
		$google_analytics_id 					=	$this->ext_cookie['google_analytics_id'];
		$window_position						=	$this->ext_cookie['window_position'];
		$name_of_cookie 						=	$this->ext_cookie['name_of_cookie'];
		$klaro_div_container 					=	$this->ext_cookie['klaro_div_container'];
		$storage_version						=	$this->ext_cookie['storage_version'];
		$klaro_hidden_windows 					=	$this->ext_cookie['klaro_hidden_windows'];
		$html_code_processing 					=	$this->ext_cookie['html_code_processing'];
		$group_formation 						=	$this->ext_cookie['group_formation'];
		$save_all_button 						=	$this->ext_cookie['save_all_button'];
		$cookie_runtime 						=	$this->ext_cookie['cookie_runtime'];
		$cookie_domain							=	$this->config['cookie_domain'];
		$show_decline_button 					=	$this->ext_cookie['show_decline_button'];
		$to_the_cookie_settings 				=	$this->ext_cookie['to_the_cookie_settings'];
		$window_fix_in_the_middle 				= 	$this->ext_cookie['window_fix_in_the_middle'];
		$klaro_note 							=	$this->ext_cookie['klaro_note'];
		$u_privacy_link							=	append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=privacy');
		$u_terms_link							=	append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=terms');

		$this->template->assign_vars([
		/** Hide the standard cookie notice from phpbb forum */
			'S_COOKIE_NOTICE'						=>	false,
		/** End */
			'COOKIE'								=>	sprintf($this->language->lang('SECOND_INFOS'), $u_privacy_link, $u_terms_link),
			'YOUTUBE_BBCODE_SWITCH'					=>	$youtube_bbcode_switch,
			'GOOGLE_TRANSLATOR_SWITCH'				=>	$google_translator_switch,
			'GOOGLE_ANALYTICS_NO_TM_SWITCH'			=>	$google_analytics_no_tm_switch,
			'WINDOW_POSITION'						=>	$window_position,
			'NAME_OF_COOKIE'						=>	$name_of_cookie,
			'KLARO_DIV_CONTAINER'					=>	$klaro_div_container,
			'STORAGE_VERSION'						=>	$storage_version,
			'KLARO_HIDDEN_WINDOWS'					=>	$klaro_hidden_windows,
			'HTML_CODE_PROCESSING'					=>	$html_code_processing,
			'GROUP_FORMATION'						=>	$group_formation,
			'SAVE_ALL_BUTTON'						=>	$save_all_button,
			'COOKIE_RUNTIME'						=>	$cookie_runtime,
			'COOKIE_DOMAIN'							=>	$cookie_domain,
			'SHOW_DECLINE_BUTTON'					=>	$show_decline_button,
			'TO_THE_COOKIE_SETTINGS'				=>	$to_the_cookie_settings,
			'WINDOW_FIX_IN_THE_MIDDLE'				=>	$window_fix_in_the_middle,
			'KLARO_NOTE'							=>	$klaro_note,
			'GOOGLE_ANALYTICS_ID'					=>	$google_analytics_id,
		]);
	}
}
