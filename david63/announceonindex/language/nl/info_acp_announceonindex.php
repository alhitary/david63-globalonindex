<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
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
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALLOW_EVENTS'					=> 'Sta template events toe',
	'ALLOW_EVENTS_EXPLAIN'			=> 'Sta het gebruik van template events toe in de aankondigingen.<br />Schakel deze optie uit als andere template events problemen geven of andere ongewenste resultaten veroorzaken.',
	'ALLOW_GUESTS'					=> 'Sta gasten toe om de aankondigingen te zien',
	'ALLOW_GUESTS_EXPLAIN'			=> 'Sta gasten toe om de aankondigingen te zien.',

	'ANNOUNCE_ON_INDEX'				=> 'Aankondigingen op het forumoverzicht',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'Aankondigingen toestaan',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'Aankondigingsopties beheren.',
	'ANNOUNCE_ON_INDEX_LOG'			=> '<strong>Instellingen aankondigingen op het forumoverzicht succesvol bijgewerkt </strong>',
	'ANNOUNCE_ON_INDEX_MANAGE'		=> 'Beheer aankondigingen',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'Aankondigingsopties',

	'SHOW_ANNOUNCEMENTS'			=> 'Aankondigingen weergeven',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'Alle aankondigingen op het forumoverzicht weergeven.',
	'SHOW_GLOBALS'					=> 'Globale aankondigingen weergeven',
	'SHOW_GLOBALS_EXPLAIN'			=> 'Alle globale aankondigingen op het forumoverzicht weergeven.',
));
