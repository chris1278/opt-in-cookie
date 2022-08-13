<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'				=>	'load_language_on_setup',
			'core.page_header_after'		=> 	'show_oic_cookie',
		];
	}

	protected $config;
	protected $template;
	protected $user;
	protected $root_path;
	protected $php_ext;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		$root_path,
		$php_ext
	)
	{
		$this->config		= $config;
		$this->template		= $template;
		$this->language		= $language;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
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
		$google_adsense_switch					=	$this->config['google_adsense_switch'];
		$google_adsense_id						=	$this->config['google_adsense_id'];
		$matomo_switch							=	$this->config['matomo_switch'];
		$matomo_url								=	$this->config['matomo_url'];
		$google_webfont_switch 					=	$this->config['google_webfont_switch'];
		$youtube_bbcode_switch 					=	$this->config['youtube_bbcode_switch'];
		$vimeo_bbcode_switch 					=	$this->config['vimeo_bbcode_switch'];
		$spotify_bbcode_switch 					=	$this->config['spotify_bbcode_switch'];
		$google_translator_switch 				=	$this->config['google_translator_switch'];
		$google_analytics_no_tm_switch	 		=	$this->config['google_analytics_no_tm_switch'];
		$google_analytics_id 					=	$this->config['google_analytics_id'];
		$window_position						=	$this->config['window_position'];
		$name_of_cookie 						=	$this->config['name_of_cookie'];
		$klaro_div_container 					=	$this->config['klaro_div_container'];
		$storage_version						=	$this->config['storage_version'];
		$klaro_hidden_windows 					=	$this->config['klaro_hidden_windows'];
		$html_code_processing 					=	$this->config['html_code_processing'];
		$group_formation 						=	$this->config['group_formation'];
		$save_all_button 						=	$this->config['save_all_button'];
		$cookie_runtime 						=	$this->config['cookie_runtime'];
		$cookie_domain							=	$this->config['cookie_domain'];
		$show_decline_button 					=	$this->config['show_decline_button'];
		$to_the_cookie_settings 				=	$this->config['to_the_cookie_settings'];
		$window_fix_in_the_middle 				= 	$this->config['window_fix_in_the_middle'];
		$klaro_note 							=	$this->config['klaro_note'];
		$klarostyle 							=	$this->config['klarostyle'];
		$u_privacy_link							=	append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=privacy');
		$u_terms_link							=	append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=terms');

		if ($this->config['matomo_in_out'] == 1)
		{
			$matomodescription				=	$this->language->lang('DS_MATOMO_EXTERN');
		}
		else
		{
			$matomodescription				=	sprintf($this->language->lang('DS_MATOMO_INTERN'), 'https://' . $this->config['matomo_url']);
		}

		if (empty($this->config['matomo_side_id']))
		{
			$matomosideid					=	'1';
		}
		else
		{
			$matomosideid					=	$this->config['matomo_side_id'];
		}

		if ($this->config['cookie_icon_selection'] == 1)
		{
			$cookie_icon_selection				=	$this->language->lang('FONTAWESOME_FOR_COOKIE');
			$new_line							=	'';
		}
		else
		{
			$cookie_icon_selection				=	$this->language->lang('SVG_FOR_COOKIE');
			$new_line							=	$this->language->lang('NEW_LINE');
		}

		if ($this->config['google_webfont_switch'] == 1 && $this->config['allow_cdn'] == 1 ||
			$this->config['google_webfont_switch'] == 0 && $this->config['allow_cdn'] == 0 ||
			$this->config['google_webfont_switch'] == 1 && $this->config['allow_cdn'] == 0)
		{
			$cookie_cdn_gwf = false;

		}
		else if ($this->config['google_webfont_switch'] == 0 && $this->config['allow_cdn'] == 0||
				 $this->config['google_webfont_switch'] == 0 && $this->config['allow_cdn'] == 1)
		{
			$cookie_cdn_gwf = true;
		}

		$web_path = generate_board_url() . '/';

		if ($this->config['google_webfont_switch'] == 1)
		{
			$cookie_tquery = false;
		}
		else
		{
			$cookie_tquery = !empty($this->config['allow_cdn']) && !empty($this->config['load_jquery_url']) ? $this->config['load_jquery_url'] : "{$web_path}assets/javascript/jquery-3.6.0.min.js?assets_version=" . $this->config['assets_version'];
		}


		$this->template->assign_vars([
			/* Hide the standard cookie notice from phpbb forum */
			'S_COOKIE_NOTICE'						=>	false,
			/* End */
			/* Prevents the loading of google services that are available by default in the Prosilver style. */
			'S_ALLOW_CDN'							=>	$cookie_cdn_gwf,
			'T_JQUERY_LINK'							=>	false,
			'T_JQUERY_LINK'							=>  $cookie_tquery,
			/* End */
			'COOKIE'								=>	sprintf($this->language->lang('SECOND_INFOS'), $u_privacy_link, $u_terms_link),
			'MATOMO_URL'							=>	$matomo_url,
			'MATOMO_SIDE_ID'						=>	$matomosideid,
			'MATOMO_SWITCH'							=>	$matomo_switch,
			'MATOMO_DESCRIPTION'					=>	$matomodescription,
			'VIMEO_BBCODE_SWITCH'					=>	$vimeo_bbcode_switch,
			'SPOTIFY_BBCODE_SWITCH'					=>	$spotify_bbcode_switch,

			'GOOGLE_ADSENSE_SWITCH'					=>	$google_adsense_switch,
			'GOOGLE_ADSENSE_PUB_ID'					=>	$google_adsense_id,

			'GOOGLE_WEBFONT_SWITCH'					=>	$google_webfont_switch,
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
			'COOKIE_ICON_SELECTION'					=>	$cookie_icon_selection,
			'NEW_LINE'								=>	$new_line,
			'SAVE_ALL_BUTTON'						=>	$save_all_button,
			'COOKIE_RUNTIME'						=>	$cookie_runtime,
			'COOKIE_DOMAIN'							=>	$cookie_domain,
			'SHOW_DECLINE_BUTTON'					=>	$show_decline_button,
			'TO_THE_COOKIE_SETTINGS'				=>	$to_the_cookie_settings,
			'WINDOW_FIX_IN_THE_MIDDLE'				=>	$window_fix_in_the_middle,
			'KLARO_NOTE'							=>	$klaro_note,
			'KLAROSTYLE'							=>	$klarostyle,
			'GOOGLE_ANALYTICS_ID'					=>	$google_analytics_id,
		]);
	}
}
