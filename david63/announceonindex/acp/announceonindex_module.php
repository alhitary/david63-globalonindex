<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\announceonindex\acp;

class announceonindex_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'announce_on_index';
		$this->page_title	= $user->lang('ANNOUNCE_ON_INDEX');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.announceonindex.admin.controller');

		$admin_controller->display_options();
	}
}
