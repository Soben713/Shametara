<?php
/**
*
* viewtopic [persian]
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
	'ATTACHMENT'						=> 'پیوست',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'بخش پیوست غیرفعال شده است.',

	'BOOKMARK_ADDED'		=> 'موضوع با موفقیت به علایق اضافه شد',
	'BOOKMARK_ERR'			=> 'اضافه کردن موضوع به علایق موفقیت آمیز نبود',
	'BOOKMARK_REMOVED'		=> 'موضوع انتخاب شده با موفقیت از علایق حذف شد',
	'BOOKMARK_TOPIC'		=> 'اضافه کردن موضوع به علایق',
	'BOOKMARK_TOPIC_REMOVE'	=> 'حذف موضوع از علایق',
	'BUMPED_BY'				=> 'آخرین بار توسط %1$s در %2$s بامپ (Bump) شده است.',
	'BUMP_TOPIC'			=> 'بامپ (Bump) موضوع',

	'CODE'					=> 'کد',
	'COLLAPSE_QR'			=> 'پاسخ سریع را مخفی کن',

	'DELETE_TOPIC'			=> 'حذف موضوع',
	'DOWNLOAD_NOTICE'		=> 'سطح دسترسی لازم برای مشاهده فایل های پیوست شده در این پست را ندارید.',

	'EDITED_TIMES_TOTAL'	=> 'آخرین بار توسط %1$s در %2$s ویرایش شده است، در کل %3$d بار ویرایش شده است.',
	'EDITED_TIME_TOTAL'		=> 'آخرین بار توسط %1$s در %2$s ویرایش شده است، در کل %3$d بار ویرایش شده است.',
	'EMAIL_TOPIC'			=> 'ارسال به دوست',
	'ERROR_NO_ATTACHMENT'	=> 'پیوست انتخاب شده موجود نمیباشد.',

	'FILE_NOT_FOUND_404'	=> 'فایل <strong>%s</strong> موجود نمیباشد.',
	'FORK_TOPIC'			=> 'کپی موضوع',
	'FULL_EDITOR'			=> 'ویرایشگر کامل',
	
	'LINKAGE_FORBIDDEN'		=> 'سطح دسترسی لازم برای مشاهده،دانلود ویا دادن لینک از/به را ندارید.',
	'LOGIN_NOTIFY_TOPIC'	=> 'این موضوع ابلاغ شده است،لطفا برای مشاهده وارد شوید.',
	'LOGIN_VIEWTOPIC'		=> 'برای مشاهده موضوع ها باید ثبت نام کرده و یا وارد شوید.',

	'MAKE_ANNOUNCE'				=> 'تغییر به “اطلاعیه”',
	'MAKE_GLOBAL'				=> 'تغییر به “سراسری”',
	'MAKE_NORMAL'				=> 'تغییر به “موضوع استاندارد”',
	'MAKE_STICKY'				=> 'تغییر به “مهم”',
	'MAX_OPTIONS_SELECT'		=> 'میتوانید تا <strong>%d</strong> گزینه انتخاب کنید.',
	'MAX_OPTION_SELECT'			=> 'میتوانید تا <strong>1</strong> گزینه انتخاب کنید.',
	'MISSING_INLINE_ATTACHMENT'	=> 'پیوست <strong>%s</strong> موجود نمیباشد.',
	'MOVE_TOPIC'				=> 'انتقال موضوع',

	'NO_ATTACHMENT_SELECTED'=> 'پیوستی را برای بارگیری و یا مشاهده کردن انتخاب نکرده اید.',
	'NO_NEWER_TOPICS'		=> 'در این انجمن موضوع جدیدی وجود ندارد.',
	'NO_OLDER_TOPICS'		=> 'در این انجمن موضوعات قدیمی تری وجود ندارد.',
	'NO_UNREAD_POSTS'		=> 'در این موضوع پست خوانده نشده ای وجود ندارد.',
	'NO_VOTE_OPTION'		=> 'برای رای دادن باید ابتدا گزینه ای را مشخص کنید.',
	'NO_VOTES'				=> 'بدون رای',

	'POLL_ENDED_AT'			=> 'نظرسنجی در %s اتمام خواهد یافت',
	'POLL_RUN_TILL'			=> 'نظرسنجی تا %s ادامه خواهد داشت.',
	'POLL_VOTED_OPTION'		=> 'به این گزینه رای داده اید.',
	'PRINT_TOPIC'			=> 'حالت پرینت',

	'QUICK_MOD'				=> 'ابزار دسترسی سریع',
	'QUICKREPLY'			=> 'پاسخ سریع',
	'QUOTE'					=> 'نقل قول',

	'REPLY_TO_TOPIC'		=> 'پاسخ به موضوع',
	'RETURN_POST'			=> '%sبازگشت به پست',

	'SHOW_QR'				=> 'پاسخ سریع',
	'SUBMIT_VOTE'			=> 'ارسال رای',

	'TOTAL_VOTES'			=> 'مجموع آرا',

	'UNLOCK_TOPIC'			=> 'باز کردن قفل موضوع',

	'VIEW_INFO'				=> 'جزئیات پست',
	'VIEW_NEXT_TOPIC'		=> 'موضوع بعدی',
	'VIEW_PREVIOUS_TOPIC'	=> 'موضوع قبلی',
	'VIEW_RESULTS'			=> 'مشاهده نتایج',
	'VIEW_TOPIC_POST'		=> '1 پست',
	'VIEW_TOPIC_POSTS'		=> '%d پست',
	'VIEW_UNREAD_POST'		=> 'اولین پست خوانده نشده',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'رای شما به نظرسنجی اضافه شد.',
	'VOTE_CONVERTED'		=> 'تغییر رای در نظرسنجی های تغییر شده ممکن نمیباشد.',

));

?>