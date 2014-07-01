<?php
/**
*
* acp_profile [persian]
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'فیلد سفارشی پروفایل با موفقیت اضافه شد',
	'ALPHA_ONLY'			=> 'فقط اعداد و حروف',
	'ALPHA_SPACERS'			=> 'فقط اعداد و حروف و خط فاصله',
	'ALWAYS_TODAY'			=> 'همیشه تاریخ کنونی',

	'BOOL_ENTRIES_EXPLAIN'	=> 'گزینه ها را وارد کنید',
	'BOOL_TYPE_EXPLAIN'		=> 'نوع آن یعنی چک باکس و یا رادیو باکس بودن آن را مشخص کنید. چک باکس فقط به کاربران به کاربرانی نمایش داده می شود که زبان <strong>دوم</strong> موجود باشد،از رادیو باکس بدون در نظر گرفتن مقدار آن می شود استفاده کرد.',

	'CHANGED_PROFILE_FIELD'		=> 'فیلد پروفایل با موفقیت تغییر یافت.',
	'CHARS_ANY'					=> 'هرنوع کاراکتر',
	'CHECKBOX'					=> 'چک باکس',
	'COLUMNS'					=> 'ستون',
	'CP_LANG_DEFAULT_VALUE'		=> 'مقدار پیشفرض',
	'CP_LANG_EXPLAIN'			=> 'توضیحات فیلد',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'این توضیحات به کاربران نمایش داده خواهد شد.',
	'CP_LANG_NAME'				=> 'نام/عنوان فیلد به کاربران نمایش داده می شود',
	'CP_LANG_OPTIONS'			=> 'گزینه ها',
	'CREATE_NEW_FIELD'			=> 'ایجاد فیلد جدید',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'حداقل یکی از فیلد های سفارشی ترجمه نشده است،لطفا برای این کار بر روی لینک "ترجمه" کلیک کنید.',

	'DEFAULT_ISO_LANGUAGE'			=> 'زبان پیشفرض [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'داده ای برای این فیلد در بسته زبانی موجود نیست.',
	'DEFAULT_VALUE'					=> 'مقدار پیشفرض',
	'DELETE_PROFILE_FIELD'			=> 'حذف فیلد پروفایل',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'آیا از حذف این فیلد مطمئن هستید ؟',
	'DISPLAY_AT_PROFILE'			=> 'نمایش در کنترل پنل کاربر',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'کاربر می تواند این فیلد را در کنترل پنل کاربر تغییر دهد.',
	'DISPLAY_AT_REGISTER'			=> 'نمایش در صفحه ثبت نام',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'اگر این گزینه فعال شود،این فیلد در صفحه ثبت نام نمایش داده خواهد شد.',
	'DISPLAY_ON_VT'					=> 'نمایش در صفحه مشاهده موضوع',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'اگر این گزینه فعال شود فیلد در پروفایل کوچکی که در صفحه مشاهده موضوع وجود دارد،نمایش داده خواهد شد.',
	'DISPLAY_PROFILE_FIELD'			=> 'فیلد پروفایل برای عموم قابل نمایش باشد',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'فیلد پروفایل در تمامی صفحاتی که در تنظیمات بارگزاری معین شده است نمایش داده خواهد شد،اگر این گزینه در "نه" تنظیم شده باشد،فیلد در صفحات موضوعات،پروفایل و در لیست اعضا نمایش داده نخواهد شد.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'گزینه های خود را وارد کنید،هر گزینه را در خط جداگانه ای وارد کنید.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'لطفا توجه داشته باشید که می توانید متن این گزینه ها را تغییر دهید و یا گزینه ای را تغییر دهید. اضافه کردن یک گزینه بین دو گزینه توصیه نمی شود و ممکن است موجب انتخاب اشتباه گزینه ها شود،همین موضوع برای حذف کردن گزینه ای از بین دو گزینه هم صدق می کند.',
	'EMPTY_FIELD_IDENT'				=> 'شناسایی فیلد خالی',
	'EMPTY_USER_FIELD_NAME'			=> 'لطفا عنوان/تیتر فیلد را وارد کنید',
	'ENTRIES'						=> 'داده ها',
	'EVERYTHING_OK'					=> 'همگی مورد قبول',

	'FIELD_BOOL'				=> 'بولی (بله/نه)',
	'FIELD_DATE'				=> 'تاریخ',
	'FIELD_DESCRIPTION'			=> 'توضیحات فیلد',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'توضیحات این فیلد به کاربران نمایش داده خواهد شد.',
	'FIELD_DROPDOWN'			=> 'منوی کشویی',
	'FIELD_IDENT'				=> 'شناسایی فیلد',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'شناسایی فیلد انتخاب شده در حال حاض موجود می باشد،لطفا شناسایی دیگری را انتخاب کنید.',
	'FIELD_IDENT_EXPLAIN'		=> 'شناسایی فیلد نامی است که هویت فیلد را در پایگاه داده و قالب مشخص می کند.',
	'FIELD_INT'					=> 'اعداد',
	'FIELD_LENGTH'				=> 'طول جغبه فیلد',
	'FIELD_NOT_FOUND'			=> 'فیلد پروفایل یافت نشدو',
	'FIELD_STRING'				=> 'فیلد متن',
	'FIELD_TEXT'				=> 'محیط متن  (textarea)',
	'FIELD_TYPE'				=> 'نوع فیلد',
	'FIELD_TYPE_EXPLAIN'		=> 'نمیتوانید بعدا نوع فیلد را تغییر دهید.',
	'FIELD_VALIDATION'			=> 'تایید فیلد',
	'FIRST_OPTION'				=> 'اولین گزینه',

	'HIDE_PROFILE_FIELD'			=> 'مخفی کردن فیلد پروفایل',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'این گزینه فیلد را از دید عموم به جز کسانی که هم اکنون می توانند این فیلد را ببینند،مخفی می کند.اگر نمایش فیلد در کنترل پنل کاربر غیرفعال باشد،هیچ کاربری نمی تواند این فیلد را ببیند و یا در آن تغییراتی اعمال کند و در این صورت فیلد توسط مدیران قابل مشاهده و ویرایش خواهد بود.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'شناسایی فیلد فقط می تواند حاوی حروف کوچک لاتین و _ باشد',
	'INVALID_FIELD_IDENT_LEN'	=> 'طول شناسایی فیلد فقط می تواند 17 کاراکتر باشد',
	'ISO_LANGUAGE'				=> 'زبان [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'گزینه تخصصی زبان [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'حداکثر تعداد کاراکتر',
	'MAX_FIELD_NUMBER'		=> 'بزرگترین عدد مورد قبول',
	'MIN_FIELD_CHARS'		=> 'حداقل تعداد کاراکتر',
	'MIN_FIELD_NUMBER'		=> 'کوچکترین عدد مورد قبول',

	'NO_FIELD_ENTRIES'			=> 'داده ای مشخص نشده است',
	'NO_FIELD_ID'				=> 'id فیلد مشخص نشده است',
	'NO_FIELD_TYPE'				=> 'نوع فیلد مشخص نشده است.',
	'NO_VALUE_OPTION'			=> 'مقداری در گزینه مشخص نشده است.',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'مقدار برای فیلدی که داده ای در آن وارد نشود.اگر پر کردن فیلد ضروری باشد و کاربر آن فیلد را پر نکند،خطایی برای وی نمایش داده خواهد شد.',
	'NUMBERS_ONLY'				=> 'فقط اعداد (1-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'گزینه های ساده',
	'PROFILE_FIELD_ACTIVATED'	=> 'فیلد پروفایل با موفقیت فعال شد.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'فیلد پروفایل با موفقیت غیرفعال شد.',
	'PROFILE_LANG_OPTIONS'		=> 'گزینه های اختصاصی زبان',
	'PROFILE_TYPE_OPTIONS'		=> 'گزینه های اختصاصی پروفایل',

	'RADIO_BUTTONS'				=> 'دکمه های رادیو  (radio buttons)',
	'REMOVED_PROFILE_FIELD'		=> 'فیلد پروفایل با موفقیت حذف شد',
	'REQUIRED_FIELD'			=> 'فیلد ضروری',
	'REQUIRED_FIELD_EXPLAIN'	=> 'اگر فیلد ضروری باشد،باید کاربران و مدیران آن را تکمیل کنند،اگر نمایش فیلد در حین ثبت نام غیرفعال شود،پر کردن فیلد فقط هنگامی ضروری مس شود که کاربر پروفایل خود را ویرایش کند.',
	'ROWS'						=> 'ردیف',

	'SAVE'							=> 'ذخیره',
	'SECOND_OPTION'					=> 'گزینه دوم',		'SHOW_NOVALUE_FIELD'			=> 'نمایش فیلد درصورت وارد نشدن داده',		'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'مشخص کنید که آیا درصورت وارد نشدن داده در فیلدها، این فیلدها در پروفایل کاربر نمایش داده شوند یا خیر.',
	'STEP_1_EXPLAIN_CREATE'			=> 'در این بخش می توانید اولین پارامتر ساده فیلد پروفایل را وارد کنید. این اطلاعات در مرحله دوم مورد نیاز خواهد بود.',
	'STEP_1_EXPLAIN_EDIT'			=> 'در این بخش می توانید پارامتر های ساده فیلد پروفایل را تغییر دهید.اطلاعات جدید برای مرحله دوم محاسبه خواهند شد.',
	'STEP_1_TITLE_CREATE'			=> 'اضافه کردن فیلد پروفایل',
	'STEP_1_TITLE_EDIT'				=> 'ویرایش فیلد پروفایل',
	'STEP_2_EXPLAIN_CREATE'			=> 'در این بخش می توانید گزینه های عمومی را تنظیم کنید.',
	'STEP_2_EXPLAIN_EDIT'			=> 'در این بخش میتوانید گزینه های عمومی را تنظیم کنید.<br /><strong>توجه داشته باشید که این تغییرات در فیلد های پروفایلی که توسط کاربران ایجاد شده اند اعمال نخواهد شد.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'گزینه های اختصاصی نوع پروفایل',
	'STEP_2_TITLE_EDIT'				=> 'گزینه های اختصاصی نوع پروفایل',
	'STEP_3_EXPLAIN_CREATE'			=> 'اگر بیش از یک زیان در تالارتان نصب شده باشد. باید سایر موارد زبان را نیز تکمیل کنید. فیلد پروفایل با زبان پیشفرض سازگار خواهد بود، می توانید سایر زبان ها را هم تکمیل کنید. you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'			=> 'اگر بیش از یک زبان در تالارتان نصب باشد،می توانید تغییرات را در سایر زبان ها هم اعمال کنید. فیلد های پروفایل با زبان پیشفرض سازگاری دارند.',
	'STEP_3_TITLE_CREATE'			=> 'تعریف زبان های باقی مانده',
	'STEP_3_TITLE_EDIT'				=> 'تعریف زبان',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'عبارت پیشفرضی را برای نمایش وارد کنید.برای نمایش خالی آن در اولین مکان عبارتی وارد نکنید.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'عبارت پیشفرضی را برای نمایش وارد کنید.برای نمایش خالی آن در اولین مکان عبارتی وارد نکنید.',
	'TRANSLATE'						=> 'ترجمه',

	'USER_FIELD_NAME'	=> 'نام فیلد/عنوان که به کاربران نمایش داده می شود',

	'VISIBILITY_OPTION'				=> 'گزینه های نمایش',
));

?>