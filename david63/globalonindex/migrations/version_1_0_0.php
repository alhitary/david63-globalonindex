<?php
/**
*
* @package Global announcement on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\globalonindex\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('global_announce_announce', '0')),
			array('config.add', array('global_announce_event', '1')),
			array('config.add', array('global_announce_guest', '0')),
			array('config.add', array('global_announce_index', '0')),
			array('config.add', array('global_on_index', '0')),
			array('config.add', array('version_globalonindex', '1.0.0')),

		// Add the ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'GLOBAL_ON_INDEX')),

			array('module.add', array(
				'acp', 'GLOBAL_ON_INDEX', array(
					'module_basename'	=> '\david63\globalonindex\acp\globalonindex_module',
					'modes'				=> array('manage'),
				),
			)),
		);
	}
}
