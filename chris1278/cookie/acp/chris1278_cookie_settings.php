<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\acp;

class chris1278_cookie_settings
{

	protected $user;
	protected $request;
	protected $template;
	protected $phpbb_container;
	protected $md_manager;
	public $u_action;

	public function main()
	{
		global $request, $template, $phpbb_container;

		$this->request				=	$request;
		$this->template 			=	$template;
		$this->language				=	$phpbb_container->get('language');
		$this->ext_cookie	 		=	$phpbb_container->get('chris1278.cookie.ext_cookie');
		$this->md_manager 			=	$phpbb_container->get('ext.manager')->create_extension_metadata_manager('chris1278/cookie');
		$ext_display_name 			=	$this->md_manager->get_metadata('display-name');
		$this->tpl_name 			=	'acp_cm_settings';
		$this->page_title			=	$this->language->lang('ACP_CM_COOKIE') . ' - ' . $this->language->lang('ACP_CM_SETTINGS');
		$this->language->add_lang( 'acp_cookie_settings', 'chris1278/cookie');
		add_form_key('chris1278_cookie');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_cookie'))
			{
				trigger_error('FORM_INVALID');
			}
			$this->ext_cookie->set('youtube_bbcode_switch', $this->request->variable('youtube_bbcode_switch', 0));
			$this->ext_cookie->set('google_translator_switch', $this->request->variable('google_translator_switch', 0));
			$this->ext_cookie->set('google_analytics_no_tm_switch', $this->request->variable('google_analytics_no_tm_switch', 0));
			$this->ext_cookie->set('google_analytics_id', $this->request->variable('google_analytics_id', ''));

			trigger_error($this->language->lang('CM_COOKIE_UPDATE') . adm_back_link($this->u_action));
		}

		$template->assign_vars([
			'CM_EXT_NAME'								=>	$ext_display_name,
			'YOUTUBE_BBCODE_SWITCH'						=>	$this->ext_cookie['youtube_bbcode_switch'],
			'GOOGLE_TRANSLATOR_SWITCH'					=>	$this->ext_cookie['google_translator_switch'],
			'GOOGLE_ANALYTICS_NO_TM_SWITCH'				=>	$this->ext_cookie['google_analytics_no_tm_switch'],
			'GOOGLE_ANALYTICS_ID'						=>	$this->ext_cookie['google_analytics_id'],
			'U_ACTION'									=>	$this->u_action,
		]);
	}
}
