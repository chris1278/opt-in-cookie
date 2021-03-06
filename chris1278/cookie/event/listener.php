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

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var string phpbb_root_path */
	protected $root_path;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $language, $root_path, $php_ext, \phpbb\collapsiblecategories\operator\operator $operator = null)
	{
		$this->auth			= $auth;
		$this->config		= $config;
		$this->db			= $db;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->language		= $language;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
		$this->operator		= $operator;
}
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
			'core.page_header_after' => 'add_vaiable',
		);
	}

/**
	* Load language during user setup
	*
	* @param object $event The event object
	* @return null
	*/
	public function load_language_on_setup($event)
	{
	$lang_set_ext = $event['lang_set_ext'];
	$lang_set_ext[] = array(
		'ext_name'   => 'chris1278/cookie',
		'lang_set'   => 'cookie',
	);

	$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_vaiable()
	{
		$u_privacy_link			= append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=privacy');
		$u_terms_link			= append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=terms');
		$this->template->assign_vars(array(
			'COOKIE'		=> sprintf($this->language->lang('D4'), $u_privacy_link, $u_terms_link),
		));
	}
}
