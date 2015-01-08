<?php
/**
*
* @package Global announcement on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ALLOW_EVENTS'						=> 'Permitir eventos de plantilla',
	'ALLOW_EVENTS_EXPLAIN'				=> 'Permitir el uso de eventos de plantilla en los anuncios.<br />Desactive esta opción si otros eventos de plantilla están causando problemas y/o ve resultados no deseados.',
	'ALLOW_GUESTS'						=> 'Permitir a invitados ver anuncios',
	'ALLOW_GUESTS_EXPLAIN'				=> 'Permitir a los invitados ver los anuncios',

	'GLOBAL_ON_INDEX'					=> 'Anuncios en el Índice',
	'GLOBAL_ON_INDEX_ENABLE'			=> 'Habilitar anuncios',
	'GLOBAL_ON_INDEX_EXPLAIN' 			=> 'Gestionar las opciones de anuncios.',
	'GLOBAL_ON_INDEX_LOG'				=> '<strong>Ajustes de anuncios en el índice actualizados</strong>',
	'GLOBAL_ON_INDEX_MANAGE'			=> 'Gestionar anuncios',
	'GLOBAL_ON_INDEX_OPTIONS'			=> 'Opciones de anuncios',

	'SHOW_ANNOUNCEMENTS'				=> 'Mostrar anuncios',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'		=> 'Mostrar todos los anuncios en la página índice.',
	'SHOW_GLOBALS'						=> 'Mostrar anuncios globales',
	'SHOW_GLOBALS_EXPLAIN'				=> 'Mostrar todos los anuncios globales en la página índice.',
));

?>