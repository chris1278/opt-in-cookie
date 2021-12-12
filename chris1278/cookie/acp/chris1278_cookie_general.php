<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\cookie\acp;

class chris1278_cookie_general
{

	protected $user;
	protected $request;
	protected $template;
	protected $phpbb_container;
	protected $md_manager;
	public $u_action;

	public function main()
	{
		global $user, $request, $template, $phpbb_admin_path, $phpEx, $phpbb_container;

		$this->user 				=	$user;
		$this->request				=	$request;
		$this->template 			=	$template;
		$this->language				= 	$phpbb_container->get('language');
		$this->phpbb_admin_path 	=	$phpbb_admin_path;
		$this->php_ext 				=	$phpEx;
		$this->ext_cookie	 		=	$phpbb_container->get('chris1278.cookie.ext_cookie');
		$this->md_manager 			=	$phpbb_container->get('ext.manager')->create_extension_metadata_manager('chris1278/cookie');
		$ext_display_name 			=	$this->md_manager->get_metadata('display-name');
		$ext_display_ver 			=	$this->md_manager->get_metadata('version');
		$ext_lang_min_ver 			=	$this->md_manager->get_metadata()['extra']['lang-min-ver'];
		$lang_ver 					= 	($this->language->lang('CM_LANG_EXT_VER') !== 'CM_LANG_EXT_VER') ? $this->language->lang('CM_LANG_EXT_VER') : '0.0.0';
		$notes 						=	'';
		$this->tpl_name 			=	'acp_cm_general';
		$this->page_title 			=	$this->language->lang('ACP_CM_COOKIE') . ' - ' . $this->language->lang('ACP_CM_GENERAL');
		$this->language->add_lang( 'acp_cookie_general', 'chris1278/cookie');
		add_form_key('chris1278_cookie');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_cookie'))
			{
				trigger_error('FORM_INVALID');
			}
			$this->ext_cookie->set('window_position', $this->request->variable('window_position', 0));
			$this->ext_cookie->set('name_of_cookie', $this->request->variable('name_of_cookie', ''));
			$this->ext_cookie->set('klaro_div_container', $this->request->variable('klaro_div_container', ''));
			$this->ext_cookie->set('klaro_hidden_windows', $this->request->variable('klaro_hidden_windows', 0));
			$this->ext_cookie->set('html_code_processing', $this->request->variable('html_code_processing', 0));
			$this->ext_cookie->set('group_formation', $this->request->variable('group_formation', 0));
			$this->ext_cookie->set('save_all_button', $this->request->variable('save_all_button', 0));
			$this->ext_cookie->set('cookie_runtime', $this->request->variable('cookie_runtime', ''));
			$this->ext_cookie->set('show_decline_button', $this->request->variable('show_decline_button', 0));
			$this->ext_cookie->set('to_the_cookie_settings', $this->request->variable('to_the_cookie_settings', 0));
			$this->ext_cookie->set('window_fix_in_the_middle', $this->request->variable('window_fix_in_the_middle', 0));
			$this->ext_cookie->set('klaro_note', $this->request->variable('klaro_note', 0));
			$this->ext_cookie->set('storage_version', $this->request->variable('storage_version', '', true));

			trigger_error($this->language->lang('CM_COOKIE_UPDATE') . adm_back_link($this->u_action));
		}

		if (!phpbb_version_compare($lang_ver, $ext_lang_min_ver, '>='))
		{
			$this->add_note($notes, $this->language->lang('CM_MSG_LANGUAGEPACK_OUTDATED'));
		}

		$template->assign_vars([
			'CM_EXT_NAME'				=>	$ext_display_name,
			'CM_EXT_VER'				=>	$ext_display_ver,
			'CM_NOTES'					=>	$notes,
			'WINDOW_POSITION'			=>	$this->ext_cookie['window_position'],
			'NAME_OF_COOKIE'			=>	$this->ext_cookie['name_of_cookie'],
			'KLARO_DIV_CONTAINER'		=>	$this->ext_cookie['klaro_div_container'],
			'KLARO_HIDDEN_WINDOWS'		=>	$this->ext_cookie['klaro_hidden_windows'],
			'HTML_CODE_PROCESSING'		=>	$this->ext_cookie['html_code_processing'],
			'GROUP_FORMATION'			=>	$this->ext_cookie['group_formation'],
			'SAVE_ALL_BUTTON'			=>	$this->ext_cookie['save_all_button'],
			'COOKIE_RUNTIME'			=>	$this->ext_cookie['cookie_runtime'],
			'SHOW_DECLINE_BUTTON'		=>	$this->ext_cookie['show_decline_button'],
			'TO_THE_COOKIE_SETTINGS'	=>	$this->ext_cookie['to_the_cookie_settings'],
			'WINDOW_FIX_IN_THE_MIDDLE'	=>	$this->ext_cookie['window_fix_in_the_middle'],
			'KLARO_NOTE'				=> 	$this->ext_cookie['klaro_note'],
			'STORAGE_VERSION'			=> 	$this->ext_cookie['storage_version'],
			'U_COOKIE_BANNER'			=>	append_sid("{$this->phpbb_admin_path}index.$this->php_ext" ,'i=acp_board&amp;mode=cookie'),
			'U_ACTION'					=>	$this->u_action,
		]);
	}
	private function add_note(string &$notes, $msg)
	{
		$notes .= (($notes != '') ? "\n" : "") . sprintf('<p>%s</p>', $msg);
	}
}
