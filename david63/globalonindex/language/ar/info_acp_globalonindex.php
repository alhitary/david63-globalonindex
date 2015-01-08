<?php
/**
*
* @package Global announcement on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
	'ALLOW_EVENTS'						=> 'السماح بقالب الأحداث ',
	'ALLOW_EVENTS_EXPLAIN'				=> 'السماح باستخدام قالب الأحداث في الإعلانات.<br />اختار "لا" في حالة وجود مشكلة أو نتائج غير مرغوبة بسبب قالب أحداث آخر.',
	'ALLOW_GUESTS'						=> 'عرض الإعلانات للزائرين ',
	'ALLOW_GUESTS_EXPLAIN'				=> 'السماح للزائرين مُشاهدة الإعلانات.',

	'GLOBAL_ON_INDEX'					=> 'الإعلانات على الصفحة الرئيسية',
	'GLOBAL_ON_INDEX_ENABLE'			=> 'تفعيل الإعلانات',
	'GLOBAL_ON_INDEX_EXPLAIN' 			=> 'من هنا تستطيع ضبط الخيارات.',
	'GLOBAL_ON_INDEX_LOG'				=> '<strong>تم تحديث الإعدادات بنجاح </strong>',
	'GLOBAL_ON_INDEX_MANAGE'			=> 'الإعدادات',
	'GLOBAL_ON_INDEX_OPTIONS'			=> 'الخيارات',

	'SHOW_ANNOUNCEMENTS'				=> 'عرض الإعلانات ',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'		=> 'إظهار كل الإعلانات في الصفحة الرئيسية للمنتدى.',
	'SHOW_GLOBALS'						=> 'عرض الإعلانات العامة ',
	'SHOW_GLOBALS_EXPLAIN'				=> 'إظهار كل الإعلانات العامة في الصفحة الرئيسية للمنتدى.',
));

?>
