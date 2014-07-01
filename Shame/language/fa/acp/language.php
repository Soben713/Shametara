<?php
/**
*
* acp_language [persian]
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
	'ACP_FILES'						=> 'فایل های زبانی مدیریت',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'در این بخش می توانید بسته های زبانی را حذف/نصب کنید. بسته زبانی پیشفرض با * مشخص شده است.',

	'EMAIL_FILES'			=> 'قالب های ایمیل',

	'FILE_CONTENTS'				=> 'محتویات فایل',
	'FILE_FROM_STORAGE'			=> 'فایل از پوشه ذخیره',

	'HELP_FILES'				=> 'فایل های راهنما',

	'INSTALLED_LANGUAGE_PACKS'	=> 'بسته های زبانی نصب شده.',
	'INVALID_LANGUAGE_PACK'		=> 'به نظر می رسد که بسته زبانی انتخاب شده معتبر نمی باشد،لطفا دوباره امتحان کنید و اگر مقدور باشد آن را مجددا آپلود کنید.',
	'INVALID_UPLOAD_METHOD'		=> 'روش آپلود مشخص شده معتبر نیست،لطفا روش دیگری را انتخاب کنید.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'جزئیات زبان با موفقیت ویرایش شدند.',
	'LANGUAGE_ENTRIES'					=> 'داده های زبان',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'در این بخش می توانید فایل زبانی را ویرایش کنید و یا موارد ترجمه نشده را ترجمه کنید.<br /><strong>توجه :</strong> تغییرات اعمال شده در فایلی مجزا ذخیره می شوند و برای اعمال تغییرات باید این فایل ذخیره شده را بارگیری نمایید و سپس آن را با فایل های اصلی زبان در فضای هاست جایگزین کنید(با آپلود کردن این فایل ها).',
	'LANGUAGE_FILES'					=> 'فایل های زبان',
	'LANGUAGE_KEY'						=> 'کلید زبان',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'این بسته زبانی نصب شده است.',
	'LANGUAGE_PACK_DELETED'				=> 'بسته زبانی <strong>%s</strong> با موفقیت حذف شد. زبان کاربرانی که از این بسته زبانی استفاده می کرند به زبان پیشفرض تالار تغییر یافت.',
	'LANGUAGE_PACK_DETAILS'				=> 'جزئیات بسته زبانی',
	'LANGUAGE_PACK_INSTALLED'			=> 'بسته زبانی <strong>%s</strong> با موفقیت نصب شد.',	'LANGUAGE_PACK_CPF_UPDATE'			=> 'تابع های زبانی فیلد های سفارشی از زبان پیشفرض کپی می شوند،در صورت نیاز آنها را تغییر دهید.',	
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'نام محلی',
	'LANGUAGE_PACK_NAME'				=> 'نام',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'بسته زبانی انتخاب شده موجود نیست.',
	'LANGUAGE_PACK_USED_BY'				=> 'استفاده شده توسط(شامل روبات ها)',
	'LANGUAGE_VARIABLE'					=> 'متغیر های زبان',
	'LANG_AUTHOR'						=> 'نویسنده بسته زبانی',
	'LANG_ENGLISH_NAME'					=> 'نام انگلیسی',
	'LANG_ISO_CODE'						=> 'کد ISO',
	'LANG_LOCAL_NAME'					=> 'نام محلی',

	'MISSING_LANGUAGE_FILE'		=> 'فایل زبانی گم شده : <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'متغیر های بسته زبانی گم شده است',
	'MODS_FILES'				=> 'فایل های زبانی افزونه ها',

	'NO_FILE_SELECTED'				=> 'فایل زبانی را مشخص نکرده اید.',
	'NO_LANG_ID'					=> 'بسته زبانی را مشخص نکرده اید.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'نمی توانید بسته زبانی پیشفرض را حذف کنید.<br />اگر مایل به حذف این بسته زبانی هستید ابتدا بسته زبانی پیشفرض تالارتان را تغییر دهید.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'هیچ بسته زبانی حذف نشده است.',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'از پوشه ذخیره حذف شود',

	'SELECT_DOWNLOAD_FORMAT'	=> 'فرمت بارگیری را مشخص کنید',
	'SUBMIT_AND_DOWNLOAD'		=> 'ارسال و بارگیری فایل',
	'SUBMIT_AND_UPLOAD'			=> 'ارسال و آپلود فایل',

	'THOSE_MISSING_LANG_FILES'			=> 'فایل های مقابل از بسته زبانی %s گم شده اند',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'متغیر های زبانی مقابل از بسته زبانی <strong>%s</strong> گم شده اند',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'بسته های زبانی حذف شده',

	'UNABLE_TO_WRITE_FILE'		=> 'نوشتن فایل در %s مقدور نیست.',
	'UPLOAD_COMPLETED'			=> 'آپلود با موفقیت اتمام یافت',
	'UPLOAD_FAILED'				=> 'به دلایل نامشخص آپلود موفقیت آمیز نبود.باید به روش دستی آپلود کنید.',
	'UPLOAD_METHOD'				=> 'روش آپلود',
	'UPLOAD_SETTINGS'			=> 'تنظیمات آپلود',

	'WRONG_LANGUAGE_FILE'		=> 'فایل زبانی انتخاب شده معتبر نیست.',
));

?>