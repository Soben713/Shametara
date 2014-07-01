<?php
/**
*
* memberlist [persian]
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
	'ABOUT_USER'			=> 'پروفایل',
	'ACTIVE_IN_FORUM'		=> 'فعال تربن انجمن',
	'ACTIVE_IN_TOPIC'		=> 'فعال ترین موضوع',
	'ADD_FOE'				=> 'به عنوان دشمن ثبت کن',
	'ADD_FRIEND'			=> 'به عنوان دوست ثبت کن',
	'AFTER'					=> 'بعد',

	'ALL'					=> 'همه',

	'BEFORE'				=> 'قبل',

	'CC_EMAIL'				=> 'کپی این ایمیل را به خودتان ارسال کنید.',
	'CONTACT_USER'			=> 'لیست تماس',

	'DEST_LANG'				=> 'زبان',
	'DEST_LANG_EXPLAIN'		=> 'زبان مناسبی را (اگر در دسترس بود) برای گیرنده این پیغام تعریف کنید.',

	'EMAIL_BODY_EXPLAIN'	=> 'این پیغام به صورت متن ساده ای ارسال خواهد شد و نمیتوانید در آن از HTML ویا BBCode استفاده کنید. آدرس بازگشت این پیغام ایمیلی است که در حین عضویت در سایت آن را تعریف کرده بودید.',
	'EMAIL_DISABLED'		=> 'با عرض پوزش،تمامی عملکرد های مربوط به ایمیل غیر فعال شده اند.',
	'EMAIL_SENT'			=> 'ایمیل ارسال شد.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'این پیغام به صورت متن ساده ای ارسال خواهد شد و نمیتوانید از HTML ویا BBCode استفاده کنید. توجه داشته باشید که اطلاعات موضوع در پیغام ذکر شده است. آدرس بازگشت این پیغام ایمیلی است که در حین عضویت در سایت آن را تعریف کرده بودید.',
	'EMPTY_ADDRESS_EMAIL'	=> 'باید ایمیل معتبری را برای گیرنده وارد کنید.',
	'EMPTY_MESSAGE_EMAIL'	=> 'باید پیغامی را برای ارسال ایمیل وارد کنید.',
	'EMPTY_MESSAGE_IM'		=> 'باید پیغامی را برای ارسال وارد کنید.',
	'EMPTY_NAME_EMAIL'		=> 'باید نام واقعی گیرنده را وارد کنید.',
	'EMPTY_SUBJECT_EMAIL'	=> 'باید عنوانی را برای ایمیل وارد کنید.',
	'EQUAL_TO'				=> 'برابر با',

	'FIND_USERNAME_EXPLAIN'	=> 'برای جستجوی کاربر مشخصی از این فرم استفاده کنید.لازم نیست که همه ی فیلد ها را پر کنید. برای اطلاعاتی که بخشی از آن جزو نتیجه است، از * استفاده کنید. تاریخ ها را با استفاده از فرمت <kbd>YYYY-MM-DD</kbd> وارد کنید، برای مثال <samp>2004-02-29</samp>. برای اتخاب چند نام کاربری،بر روی چک باکس علامت بگذارید (بر اساس فرم ممکن است چند نام کاربری مورد قبول باشد) و بر علامت گذاری بر روی دکمه انتخاب شده کلیک کنید.',
	'FLOOD_EMAIL_LIMIT'		=> 'فعلا نمیتوانید ایمیل دیگری بفرستید،لطفا دوباره امتحان کنید.',

	'GROUP_LEADER'			=> 'مدیر گروه',

	'HIDE_MEMBER_SEARCH'	=> 'جستجوی کاربران را مخفی کن',

	'IM_ADD_CONTACT'		=> 'اضافه کردن لیست تماس',
	'IM_AIM'				=> 'توجه داشته باشید که برای استفاده از این ویژگی باید AOL Instant Messenger نصب شده باشد.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'بارگیری برنامه',
	'IM_ICQ'				=> 'لطفا توجه داشته باشید که ممکن است کاربران عدم دریافت پیغام های سریع ناخواسته را انتخاب کرده باشند. ',
	'IM_JABBER'				=> 'لطفا توجه داشته باشید که ممکن است کاربران عدم دریافت پیغام های سریع ناخواسته را انتخاب کرده باشند.',
	'IM_JABBER_SUBJECT'		=> 'این یک پیغام خودکار هست،لطفا جواب ندهید! ارسال شده توسط %1$s در %2$s.',
	'IM_MESSAGE'			=> 'پیغام شما',
	'IM_MSNM'				=> 'لطفا توجه داشته باشید که برای استفاده از این ویژگی باید Windows Messenger نصب شده باشد.',
	'IM_MSNM_BROWSER'		=> 'مرورگر شما این را پشتیبانی نمیکند.',
	'IM_MSNM_CONNECT'		=> 'اتصال با MSNM صورت نگرفت \n برای ادامه باید به MSNM وصل شوید.',
	'IM_NAME'				=> 'نام شما',
	'IM_NO_DATA'			=> 'اطلاعات تماس مناسبی در مورد این کاربر وجود ندارد.',
	'IM_NO_JABBER'			=> 'با عرض پوزش،کاربران به طور مستقیم نمیتوانند با یکدیگر از طریق Jabber در این تالار حرف بزنند. برای این کار باید Jabber client بر روی سیستم شما نصب شده باشد.',
	'IM_RECIPIENT'			=> 'گیرنده',
	'IM_SEND'				=> 'ارسال پیغام',
	'IM_SEND_MESSAGE'		=> 'ارسال پیغام',
	'IM_SENT_JABBER'		=> 'پیغام شما به %1$s با موفقیت ارسال شد.',
	'IM_USER'				=> 'ارسال پیغام سریع',

	'LAST_ACTIVE'				=> 'آخرین فعالیت',
	'LESS_THAN'					=> 'کمتر از',
	'LIST_USER'					=> '1 کاربر',
	'LIST_USERS'				=> '%d کاربر',
	'LOGIN_EXPLAIN_LEADERS'		=> 'برای مشاهده تیم پشتیبانی باید ثبت نام کرده و وارد شوید.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'برای مشاهده اعضای تالار باید ثبت نام کرده و وارد شوید.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'برای جستجوی کاربران باید ثبت نام کرده و وارد شوید.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'برای مشاهده پروفایل ها باید ثبت نام کرده و وارد شوید.',

	'MORE_THAN'				=> 'بیشتر از',

	'NO_EMAIL'				=> 'اجازه ارسال ایمیل به این کاربر را ندارید.',
	'NO_VIEW_USERS'			=> 'اجازه مشاهده لیست اعضا و پروفایل ها را ندارید.',
	'REAL_NAME'				=> 'نام گیرنده',
	'RECIPIENT'				=> 'گیرنده',
	'REMOVE_FOE'			=> 'حذف دشمنی',
	'REMOVE_FRIEND'			=> 'حذف دوستی',

	'SELECT_MARKED'			=> 'انتخاب علامت گذاری شده ها',
	'SELECT_SORT_METHOD'	=> 'انتخاب روش مرتب سازی',
	'SEND_AIM_MESSAGE'		=> 'ارسال پیغام AIM',
	'SEND_ICQ_MESSAGE'		=> 'ارسال پیغام ICQ',
	'SEND_IM'				=> 'پیغام سریع',
	'SEND_JABBER_MESSAGE'	=> 'ارسال پیغام Jabber',
	'SEND_MESSAGE'			=> 'پیغام',
	'SEND_MSNM_MESSAGE'		=> 'ارسال پیغام MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'ارسال پیغام YIM',
	'SORT_EMAIL'			=> 'ایمیل',
	'SORT_LAST_ACTIVE'		=> 'آخرین فعالیت',
	'SORT_POST_COUNT'		=> 'تعداد ارسال',

	'USERNAME_BEGINS_WITH'	=> 'نام کاربری شروع شونده با',
	'USER_ADMIN'			=> 'مدیریت کاربر',
	'USER_BAN'				=> 'تحریم',
	'USER_FORUM'			=> 'آمار کاربر',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'در حال حاضر یادآوری وجود نداد',
		1		=> '%1$d یادآور فرستاده شد<br />» %2$s',
	),
	'USER_ONLINE'			=> 'آنلاین',
	'USER_PRESENCE'			=> 'حضور در تالار',

	'VIEWING_PROFILE'		=> 'مشاهده پروفایل - %s',
	'VISITED'				=> 'آخرین بازدید',

	'WWW'					=> 'وبسایت',
));

?>