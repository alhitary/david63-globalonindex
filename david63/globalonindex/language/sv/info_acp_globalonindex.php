<?php
/**
*
* @package Global announcement on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Swedish translation by Holger (http://www.maskinisten.net)
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

$lang = array_merge($lang, array(
	'ALLOW_EVENTS'						=> 'Tillåt template events',
	'ALLOW_EVENTS_EXPLAIN'				=> 'Tillåt användning av template events i anslagen.<br />Deaktivera detta om andra template events orsakar problem eller oväntade resultat.',
	'ALLOW_GUESTS'						=> 'Tillåt gäster att se anslagen',
	'ALLOW_GUESTS_EXPLAIN'				=> 'Tillåter gäster att se anslagen.',

	'GLOBAL_ON_INDEX'					=> 'Anslag på index (startsidan)',
	'GLOBAL_ON_INDEX_ENABLE'			=> 'Aktivera anslag',
	'GLOBAL_ON_INDEX_EXPLAIN' 			=> 'Hantera inställningarna för anslag.',
	'GLOBAL_ON_INDEX_LOG'				=> '<strong>Inställningarna för anslag på index har aktualiserats</strong>',
	'GLOBAL_ON_INDEX_MANAGE'			=> 'Hantera anslag',
	'GLOBAL_ON_INDEX_OPTIONS'			=> 'Inställningar för anslag',

	'SHOW_ANNOUNCEMENTS'				=> 'Visa anslag',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'		=> 'Visa alla anslag på index (startsidan).',
	'SHOW_GLOBALS'						=> 'Visa globala anslag',
	'SHOW_GLOBALS_EXPLAIN'				=> 'Visa alla globala anslag på index (startsidan).',
));

?>