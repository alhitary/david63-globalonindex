<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\announceonindex\controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
* Admin controller
*/
class admin_controller implements admin_interface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var ContainerInterface */
	protected $container;

	/** @var string Custom form action */
	protected $u_action;

	/**
	* Constructor for admin controller
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\request\request		$request	Request object
	* @param \phpbb\template\template	$template	Template object
	* @param \phpbb\user				$user		User object
	* @param ContainerInterface			$container	Service container interface
	* @return \phpbb\boardrules\controller\admin_controller
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user, ContainerInterface $container)
	{
		$this->config		= $config;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->container	= $container;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		// Create a form key for preventing CSRF attacks
		$form_key = 'announce_on_index';
		add_form_key($form_key);

		// Is the form being submitted
		if ($this->request->is_set_post('submit'))
		{
			// Is the submitted form is valid
			if (!check_form_key($form_key))
			{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// If no errors, process the form data
			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$phpbb_log = $this->container->get('log');
			$phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'GLOBAL_ON_INDEX_LOG');

			// Option settings have been updated and logged
			// Confirm this to the user and provide link back to previous page
			trigger_error($this->user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		// Set output vars for display in the template
		$this->template->assign_vars(array(
			'ALLOW_EVENTS'				=> isset($this->config['announce_event']) ? $this->config['announce_event'] : '',
			'ALLOW_GUESTS'				=> isset($this->config['announce_guest']) ? $this->config['announce_guest'] : '',
			'ANNOUNCE_ON_INDEX_ENABLED'	=> isset($this->config['announce_on_index_enable']) ? $this->config['announce_on_index_enable'] : '',
			'SHOW_ANNOUNCEMENTS'		=> isset($this->config['announce_announcement_on_index']) ? $this->config['announce_announcement_on_index'] : '',
			'SHOW_GLOBALS'				=> isset($this->config['announce_global_on_index']) ? $this->config['announce_global_on_index'] : '',

			'U_ACTION' => $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('announce_announcement_on_index', $this->request->variable('announce_announcement_on_index', 0));
		$this->config->set('announce_event', $this->request->variable('announce_event', 0));
		$this->config->set('announce_global_on_index', $this->request->variable('announce_global_on_index', 0));
		$this->config->set('announce_guest', $this->request->variable('announce_guest', 0));
		$this->config->set('announce_on_index_enable', $this->request->variable('announce_on_index_enable', 0));
	}
}
