<?php
/**
*
* acp_modules [persian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'در این بخش می توانید افزونه های موجود را مدیریت کنید. توجه داشته باشید که منوی کنترل پنل مدیریت سه مرحله دارد .(گروه -> گروه -> افزونه) ولی منوی سایر بخش ها دو مرحله دارد. (گروه -> افزونه) لطفا توجه داشته باشید که اگر افزونه هایی مربوط به مدیریت را حذف و یا غیرفعال کنید احتمال غغیرفعال شدن و در بن بست قرار گرفتن اختیارات شما موجود است.',
	'ADD_MODULE'					=> 'اضافه کردن افزونه',
	'ADD_MODULE_CONFIRM'			=> 'آیا از اضافه کردن افزونه انتخاب شده با روش انتخاب شده مطمئن هستید ؟',
	'ADD_MODULE_TITLE'				=> 'اضافه کردن افزونه',

	'CANNOT_REMOVE_MODULE'	=> 'افزونه حذف نشد زیرا با سایر زیرگروه ها در ارتباط است لطفا ابتدا این زیرگروه ها را حذف کنید و یا آن را انتقال دهید.',
	'CATEGORY'				=> 'گروه',
	'CHOOSE_MODE'			=> 'انتخاب حالت افزونه',
	'CHOOSE_MODE_EXPLAIN'	=> 'انتخاب افزونه های استفاده شده',
	'CHOOSE_MODULE'			=> 'انتخاب افزونه',
	'CHOOSE_MODULE_EXPLAIN'	=> 'فایل درخواست شده توسط این افزونه را انتخاب کنید.',
	'CREATE_MODULE'			=> 'ایجاد افزونه جدید',

	'DEACTIVATED_MODULE'	=> 'غیرفعال کردن افزونه',
	'DELETE_MODULE'			=> 'حذف افزونه',
	'DELETE_MODULE_CONFIRM'	=> 'آیا از حذف افزونه مطمئن هستید ؟',

	'EDIT_MODULE'			=> 'ویرایش افزونه',
	'EDIT_MODULE_EXPLAIN'	=> 'تنظیمات خاص افزونه را می توانید در این بخش اعمال کنید. ',

	'HIDDEN_MODULE'			=> 'مخفی کردن افزونه',

	'MODULE'					=> 'افزونه',
	'MODULE_ADDED'				=> 'افزونه با موفقیت اضافه شد.',
	'MODULE_DELETED'			=> 'افزونه با موفقیت حذف شد.',
	'MODULE_DISPLAYED'			=> 'افزونه نمایش داده شد.',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'اگر نمی خواهید که این افزونه نمایش داده شود ولی مایل به استفاده از ان هستید،لطفا بر روی گزینه نه کلیک کنید.',
	'MODULE_EDITED'				=> 'افزونه با موفقیت ویرایش شد.',
	'MODULE_ENABLED'			=> 'افزونه فعال شود',
	'MODULE_LANGNAME'			=> 'نام زبان افزونه',
	'MODULE_LANGNAME_EXPLAIN'	=> 'نام نمایشی افزونه را وارد کنید. اگر این نام در فایل زبانی موجود استفاز آن استفاده کنید.',
	'MODULE_TYPE'				=> 'نوع افزنه',

	'NO_CATEGORY_TO_MODULE'	=> 'تبدیل گروه در افزونه صورت نگرفت. لطفا ابتدا زیرگروه ها را حذف کنید و یا انتقال دهید.',
	'NO_MODULE'				=> 'افزونه ای یافت نشد.',
	'NO_MODULE_ID'			=> 'id افزونه مشخص نشده است.',
	'NO_MODULE_LANGNAME'	=> 'نام زیان افزونه مشخص نشده است.',
	'NO_PARENT'				=> 'بدون ریشه',

	'PARENT'				=> 'ریشه',
	'PARENT_NO_EXIST'		=> 'ریشه موجود نیست',

	'SELECT_MODULE'			=> 'افزونه ای را انتخاب کنید.',
));

?>