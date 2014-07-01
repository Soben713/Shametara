<?php
/**
*
* acp_common [persian]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'مدیران',
	'ACP_ADMIN_LOGS'			=> 'رویداد های مدیریت',
	'ACP_ADMIN_ROLES'			=> 'نقش های مدیریت',
	'ACP_ATTACHMENTS'			=> 'پیوست ها',
	'ACP_ATTACHMENT_SETTINGS'	=> 'تنظیمات پیوست',
	'ACP_AUTH_SETTINGS'			=> 'تایید',
	'ACP_AUTOMATION'			=> 'تنظیم خودکار',
	'ACP_AVATAR_SETTINGS'		=> 'تنظیمات آواتار',

	'ACP_BACKUP'				=> 'پشتیبان گیری',
	'ACP_BAN'					=> 'تحریم',
	'ACP_BAN_EMAILS'			=> 'تحریم ایمیل',
	'ACP_BAN_IPS'				=> 'تحریم IP',
	'ACP_BAN_USERNAMES'			=> 'تحریم نام کاربری',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'پیکربندی تالار',
	'ACP_BOARD_FEATURES'		=> 'ویژگی های تالار',
	'ACP_BOARD_MANAGEMENT'		=> 'مدیریت تالار',
	'ACP_BOARD_SETTINGS'		=> 'تنظیمات تالار',
	'ACP_BOTS'					=> 'عنکبوت ها/روبات ها',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'پایگاه داده',
	'ACP_CAT_DOT_MODS'			=> 'افزونه ها',
	'ACP_CAT_FORUMS'			=> 'انجمن ها',
	'ACP_CAT_GENERAL'			=> 'عمومی',
	'ACP_CAT_MAINTENANCE'		=> 'حالت نگهداری',
	'ACP_CAT_PERMISSIONS'		=> 'سطوح دسترسی',
	'ACP_CAT_POSTING'			=> 'ارسالات',
	'ACP_CAT_STYLES'			=> 'قالب ها',
	'ACP_CAT_SYSTEM'			=> 'سیستم',
	'ACP_CAT_USERGROUP'			=> 'کاربران و گروه ها',
	'ACP_CAT_USERS'				=> 'کاربران',
	'ACP_CLIENT_COMMUNICATION'	=> 'ارتباط با کاربران',
	'ACP_COOKIE_SETTINGS'		=> 'تنظیمات کوکی',
	'ACP_CRITICAL_LOGS'			=> 'رویداد های خظا ها',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'فیلد های سفارشی پروفایل',

	'ACP_DATABASE'				=> 'مدیریت پایگاه داده',
	'ACP_DISALLOW'				=> 'نپذیرفتن',
	'ACP_DISALLOW_USERNAMES'	=> 'نام کاربری غیرمجاز',

	'ACP_EMAIL_SETTINGS'		=> 'تنظیمات ایمیل',
	'ACP_EXTENSION_GROUPS'		=> 'مدیریت گروه های الحاقات',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'سطوح دسترسی متکی به انجمن',
	'ACP_FORUM_LOGS'				=> 'رویداد های انجمن',
	'ACP_FORUM_MANAGEMENT'			=> 'مدیریت انجمن',
	'ACP_FORUM_MODERATORS'			=> 'مدیران انجمن',
	'ACP_FORUM_PERMISSIONS'			=> 'سطوح دسترسی انجمن',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'کپی کردن سطوح دسترسی',
	'ACP_FORUM_ROLES'				=> 'نقش های انجمن',

	'ACP_GENERAL_CONFIGURATION'		=> 'پیکربندی عمومی',
	'ACP_GENERAL_TASKS'				=> 'وظایف عمومی',
	'ACP_GLOBAL_MODERATORS'			=> 'مدیران انجمن ها',
	'ACP_GLOBAL_PERMISSIONS'		=> 'سطوح دسترسی سراسری',
	'ACP_GROUPS'					=> 'گروه ها',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'سطوح دسترسی انجمن ها برای گروه ها',
	'ACP_GROUPS_MANAGE'				=> 'مدیریت گروه ها',
	'ACP_GROUPS_MANAGEMENT'			=> 'مدیریت گروه',
	'ACP_GROUPS_PERMISSIONS'		=> 'سطوح دسترسی گروه ها',

	'ACP_ICONS'					=> 'آیکون های موضوعات',
	'ACP_ICONS_SMILIES'			=> 'آیکون های/شکلک های موضوعات',
	'ACP_IMAGESETS'				=> 'مجموعه تصاویر',
	'ACP_INACTIVE_USERS'		=> 'کاربران غیرفعال',
	'ACP_INDEX'					=> 'صفحه اصلی کنترل پنل مدیریت',

	'ACP_JABBER_SETTINGS'		=> 'تنظیمات Jabber',

	'ACP_LANGUAGE'				=> 'مدیریت زبان',
	'ACP_LANGUAGE_PACKS'		=> 'بسته های زبانی',
	'ACP_LOAD_SETTINGS'			=> 'تنظیمات بارگذاری',
	'ACP_LOGGING'				=> 'ورود',

	'ACP_MAIN'					=> 'صفحه اصلی کنترل پنل مدیریت',
	'ACP_MANAGE_EXTENSIONS'		=> 'مدیریت الحاقات',
	'ACP_MANAGE_FORUMS'			=> 'مدیریت انجمن ها',
	'ACP_MANAGE_RANKS'			=> 'مدیریت رتبه ها',
	'ACP_MANAGE_REASONS'		=> 'مدیریت گزارش ها/دلایل تحریم',
	'ACP_MANAGE_USERS'			=> 'مدیریت کاربران',
	'ACP_MASS_EMAIL'			=> 'ایمیل دسته جمعی',
	'ACP_MESSAGES'				=> 'پیغام ها',
	'ACP_MESSAGE_SETTINGS'		=> 'تنظیمات پیغام های خصوصی',
	'ACP_MODULE_MANAGEMENT'		=> 'مدیریت افزونه ها',
	'ACP_MOD_LOGS'				=> 'مدیریت رویداد ها',
	'ACP_MOD_ROLES'				=> 'مدیریت نقش ها',

	'ACP_NO_ITEMS'				=> 'هیچ موردی وجود ندارد.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'پیوست های بدون صاحب',

	'ACP_PERMISSIONS'			=> 'سطوح دسترسی',
	'ACP_PERMISSION_MASKS'		=> 'ماسک های سطوح دسترسی',
	'ACP_PERMISSION_ROLES'		=> 'نقش های سطوح دسترسی',
	'ACP_PERMISSION_TRACE'		=> 'یافتن سطوح دسترسی',
	'ACP_PHP_INFO'				=> 'اطلاعات PHP',
	'ACP_POST_SETTINGS'			=> 'تنظیمات پست',
	'ACP_PRUNE_FORUMS'			=> 'هرس کردن انجمن ها',
	'ACP_PRUNE_USERS'			=> 'هرس کردن کاربران',
	'ACP_PRUNING'				=> 'هرس کردن',

	'ACP_QUICK_ACCESS'			=> 'دسترسی سریع',

	'ACP_RANKS'					=> 'رتبه ها',
	'ACP_REASONS'				=> 'گزارش ها/دلایل تحریم',
	'ACP_REGISTER_SETTINGS'		=> 'تنظیمات ثبت نام کاربران',

	'ACP_RESTORE'				=> 'بازیابی',

	'ACP_FEED'					=> 'مدیریت خوراک',
	'ACP_FEED_SETTINGS'			=> 'تنظیمات خوراک',

	'ACP_SEARCH'				=> 'پیکربندی جستجو',
	'ACP_SEARCH_INDEX'			=> 'شاخص های جستجو',
	'ACP_SEARCH_SETTINGS'		=> 'تنظیمات جستجو',

	'ACP_SECURITY_SETTINGS'		=> 'تنظیمات امنیتی',
	'ACP_SEND_STATISTICS'		=> 'ارسال اطلاعات آماری',
	'ACP_SERVER_CONFIGURATION'	=> 'پیکربندی سرور',
	'ACP_SERVER_SETTINGS'		=> 'تنظیمات سرور',
	'ACP_SIGNATURE_SETTINGS'	=> 'تنظیمات امضا',
	'ACP_SMILIES'				=> 'شکلک ها',
	'ACP_STYLE_COMPONENTS'		=> 'اجزاء قالب',
	'ACP_STYLE_MANAGEMENT'		=> 'مدیریت قالب',
	'ACP_STYLES'				=> 'قالب ها',

	'ACP_SUBMIT_CHANGES'		=> 'ارسال تغییرات',

	'ACP_TEMPLATES'				=> 'قالب های اصلی',
	'ACP_THEMES'				=> 'تم ها',

	'ACP_UPDATE'					=> 'بروزرسانی',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'سطوح دسترسی انجمن ها برای کاربران',
	'ACP_USERS_LOGS'				=> 'رویداد های کاربران',
	'ACP_USERS_PERMISSIONS'			=> 'سطوح دسترسی کاربران',
	'ACP_USER_ATTACH'				=> 'پیوست ها',
	'ACP_USER_AVATAR'				=> 'آواتار',
	'ACP_USER_FEEDBACK'				=> 'بازخورد',
	'ACP_USER_GROUPS'				=> 'گروه ها',
	'ACP_USER_MANAGEMENT'			=> 'مدیریت قالب ها',
	'ACP_USER_OVERVIEW'				=> 'بررسی کلی',
	'ACP_USER_PERM'					=> 'سطوح دسترسی',
	'ACP_USER_PREFS'				=> 'ترجیحات',
	'ACP_USER_PROFILE'				=> 'پروفایل',
	'ACP_USER_RANK'					=> 'رتبه',
	'ACP_USER_ROLES'				=> 'نقش های کاربر',
	'ACP_USER_SECURITY'				=> 'امنیت کاربران',
	'ACP_USER_SIG'					=> 'امضا',
	'ACP_USER_WARNINGS'				=> 'هشدار ها',

	'ACP_VC_SETTINGS'					=> 'مقابله با هرزنامه ها',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'پیش نمایش تصویر CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'کنترل وجود بروزرسانی جدید',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'مشاهده سطوح دسترسی مدیریت',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'شماهده سطوح دسترسی مدیران انجمن',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'مشاهده سطوح دسترسی برای انجمن ها',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'مشاهده سطوح دسترسی مدیران سراری',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'مشاهده سطوح دسترسی برای کاربران',

	'ACP_WORDS'					=> 'سانسور کلمات',

	'ACTION'				=> 'عمل',
	'ACTIONS'				=> 'عملیات',
	'ACTIVATE'				=> 'فعال کردن',
	'ADD'					=> 'اضافه کردن',
	'ADMIN'					=> 'مدیریت',
	'ADMIN_INDEX'			=> 'صفحه اصلی مدیریت',
	'ADMIN_PANEL'			=> 'کنترل پنل مدیریت',

	'ADM_LOGOUT'			=> 'خروج از&nbsp;کنترل پنل مدیریت',
	'ADM_LOGGED_OUT'		=> 'با موفقیت از کنترل پنل مدیریت خارج شدید.',

	'BACK'					=> 'بازگشت',

	'COLOUR_SWATCH'			=> ' تغییر رنگ Web-safe swatch',
	'CONFIG_UPDATED'		=> 'پیکربندی با موفقیت بروزرسانی شد.',

	'DEACTIVATE'				=> 'غیرفعال سازی',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'مسیر وارد شده “%s” ، موجود نمی باشد.',
	'DIRECTORY_NOT_DIR'			=> 'مسیر وارد شده “%s” ، دایرکتوری نمی باشد.',
	'DIRECTORY_NOT_WRITABLE'	=> 'مسیر وارد شده “%s” ،قابل نوشتن نیست.',
	'DISABLE'					=> 'غیرفعال',
	'DOWNLOAD'					=> 'بارگیری',
	'DOWNLOAD_AS'				=> 'بارگیری به',
	'DOWNLOAD_STORE'			=> 'بارگیری و یا ذخیره فایل',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'می توانید مستقیما فایل را بارگیری کنید و یا در پوشه <samp>store/</samp> ذخیره کنید.',

	'EDIT'					=> 'ویرایش',
	'ENABLE'				=> 'فعال',
	'EXPORT_DOWNLOAD'		=> 'بارگیری',
	'EXPORT_STORE'			=> 'ذخیره',

	'GENERAL_OPTIONS'		=> 'گزینه های عمومی',
	'GENERAL_SETTINGS'		=> 'تنظیمات عمومی',
	'GLOBAL_MASK'			=> 'مایک سطوح دسترسی سراسری',

	'INSTALL'				=> 'نصب',
	'IP'					=> 'IP کاربر',
	'IP_HOSTNAME'			=> 'آدرس IP و یا نام هاست (hostname)',

	'LOGGED_IN_AS'			=> 'وارد شده با نام :',
	'LOGIN_ADMIN'			=> 'برای مدیریت تالار، باید کاربر تایید شده ای باشید.',
	'LOGIN_ADMIN_CONFIRM'	=> 'برای مدیریت تالار باید مجددا خودتان را تایید کنید',
	'LOGIN_ADMIN_SUCCESS'	=> 'با موفقیت تایید شدید و هم اکنون به کنترل پنل مدیریت انتقال داده می شوید.',
	'LOOK_UP_FORUM'			=> 'انجمنی را انتخاب کنید',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'می توانید بیش از یک انجمن را انتخاب کنید.',

	'MANAGE'				=> 'مدیریت',
	'MENU_TOGGLE'			=> 'مخفی کردن و یا نمایش دادن نوار کناری',
	'MORE'					=> 'بیشتر',			// Not used at the moment
	'MORE_INFORMATION'		=> 'اطلاعات بیشتر »',
	'MOVE_DOWN'				=> 'انتقال به پایین',
	'MOVE_UP'				=> 'انتقال به بالا',

	'NOTIFY'				=> 'اطلاعیه',
	'NO_ADMIN'				=> 'اجازه مدیریت این تالار را ندارید',
	'NO_EMAILS_DEFINED'		=> 'آدرس ایمیل معتبری یافت نشد.',
	'NO_PASSWORD_SUPPLIED'	=> 'برای دسترسی به کنترل پنل مدیریت، باید کلمه عبور خود را وارد کنید.',

	'OFF'					=> 'بسته',
	'ON'					=> 'باز',

	'PARSE_BBCODE'						=> 'تجزیه BBCode',
	'PARSE_SMILIES'						=> 'تجزیه شکلک ها',
	'PARSE_URLS'						=> 'تجزیه لینک ها',
	'PERMISSIONS_TRANSFERRED'			=> 'سطوح دسترسی انتقال یافت',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'اخیرا سطح دسترسی %1$s را دارید. می توانید با سطوح دسترسی این کاربر در تالار گردش کنید. ولی تا زمانی که سطوح دسترسی مدیریت انتقال نشود، به کنترل پنل مدیریت دسترسی نخواهید داشت. در هر زمانی می توانید <a href="%2$s">.<strong>به سطوح دسترسی خود برگردید</strong></a>',
	'PROCEED_TO_ACP'					=> '%sرفتن به کنترل پنل مدیریت%s',

	'REMIND'							=> 'یادآوری',
	'RESYNC'							=> 'انطباق (syncorise)',
	'RETURN_TO'							=> 'بازگشت به …',

	'SELECT_ANONYMOUS'		=> 'اتخاب کاربر بی نام',
	'SELECT_OPTION'			=> 'انتخاب گزینه',

	'SETTING_TOO_LOW'		=> 'داده وارد شده به “%1$s” بسیار کم است. حداقل داده مورد قبول  %2$d می باشد.',
	'SETTING_TOO_BIG'		=> 'داده وارد شده به “%1$s” بسیار بالا است. حداکثر داده مورد قبول %2$d می باشد.',
	'SETTING_TOO_LONG'		=> 'داده وارد شده به “%1$s” بسیار دراز است. حداکثر درازای مورد قبول %2$d می باشد.',
	'SETTING_TOO_SHORT'		=> 'داده وارد شده به “%1$s” بسیار کوتاه است. حداقل درازای مورد قبول %2$d می باشد.',

	'SHOW_ALL_OPERATIONS'	=> 'نمایش همه عملیات',

	'UCP'					=> 'کنترل پنل کاربر',
	'USERNAMES_EXPLAIN'		=> 'هر نام کاربری را در سطر جداگانه ای قرار دهید.',
	'USER_CONTROL_PANEL'	=> 'کنترل پنل کاربر',

	'WARNING'				=> 'هشدار',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'این صفحه اطلاعات و جزئیات نسخه PHP نصب شده در سرور را نمایش می دهد و شامل ماژول های بارگذاری شده، داده های در دسترس و تنظیمات پیشفرض می باشد. این اطلاعات در حین حل مشکلات ممکن است سودمند واقع شود. ممکن است بعضی از شرکت های هاستینگ اطلاعات نمایشی را به دلایل امنیتب محدود کنند. توصیه می شود که اطلاعات موجود در این صفحه را به هیچکس جزء <a href="http://www.phpbb.com/about/team/">اعضای تیم رسمی</a> بازگو نکنید.',

	'NO_PHPINFO_AVAILABLE'	=> 'اطلاعات پیکربندی PHP شما قابل تشخیص نیست. Phpinfo() برای دلایل امنیتی بسته شده است.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'این لیست حاوی همگی عملیات صورت گرفته توسط مدیران تالار می باشد. می توانید بر اساس نام کاربری،IP،تاریخ و عملیات صورت گرفته مرتب سازی کنید.  اگر سطح دسترسی کافی داشته باشید می توانید عملیاتی و یا کل رویداد ها را حذف کنید.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'این لیست حاوی عملیات صورت گرفته در تالار است. از اطلاعات این لیست می توانید در حل کردن بعضی از مشکلات مانند ایمیل های ارسال نشده استفاده کنید. می توانید براساس نام کاربری،IP، تاریخ و عملیات صورت گرفته مرتب سازی کنید. اگر سطح دسترسی کافی داشته باشید می توانید عملیاتی و یا کل رویداد ها را حذف کنید.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'این لیست حاوی همگی عملیات صورت گرفته در انجمن ها، موضوعات و پست ها می باشد و همچنین حاوی اطلاعات عملیات صورت گرفته توسط مدیران انجمن بر روی کاربران است. این اطلاعات شامل تحریم کاربران نیز می شود. می توانید براساس نام کاربری،IP، تاریخ و عملیات صورت گرفته مرتب سازی کنید. اگر سطوح دسترسی کافی داشته باشید می توانید عملیاتی و یا کل رویداد ها را حذف کنید.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'این لیست حاوی اطلاعات عملیات صورت گرفته بر روی کاربران و یا توسط کاربران است (شامل گزارش ها،هشدار ها و یادداشت های کاربران)',
	'ALL_ENTRIES'				=> 'همه ی داده ها',

	'DISPLAY_LOG'	=> 'نمایش داده ها از آخر',

	'NO_ENTRIES'	=> 'هیچ رویدادی در این بازه وجود ندارد',

	'SORT_IP'		=> 'آدرس IP',
	'SORT_DATE'		=> 'تاریخ',
	'SORT_ACTION'	=> 'عملیات رویداد',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'از انتخاب phpBB متشکریم. این صفحه اطلاعات جامع و سریعی را از آمار تالار در اختیارتان قرار می دهد. لینک های موجود در سمت راست صفحه به شما این امکان را می دهد تا تالارتان را به صورت جامع مدیریت کنید. هر صفحه حاوی دستور العمل های نحوه کارکرد تنظیمات می باشد.',
	'ADMIN_LOG'					=> 'عملیات صورت گرفته توسط مدیران',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'این بخش 5 عملیات اخیر صورت گرفته توسط مدیران را نمایش می دهد. همه ی رویدادها در منوی مربوطه و یا از لینک زیر در دسترس است.',
	'AVATAR_DIR_SIZE'			=> 'حجم دایرکتوری آواتار',

	'BOARD_STARTED'		=> 'تاریخ شروع فعالیت تالار',
	'BOARD_VERSION'		=> 'نسخه تالار',

	'DATABASE_SERVER_INFO'	=> 'سرور پایگاه داده',
	'DATABASE_SIZE'			=> 'حجم پایگاه داده',		'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'تابع اضافه بار به طور نامناسب پیکربندی شده است',	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> باید 0 یا 4 انتخاب شود، می توانید داده را از صفحه <samp>اطلاعات PHP</samp> کنترل کنید.',	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding به طور نامناسب پیکربندی شده است',	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> باید به 0 تنظیم شود . می توانید داده را از صفحه <samp>اطلاعات PHP</samp> کنترل کنید.',	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input character conversion به طور نامناسب پیکربندی شده است',	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input/var> باید به <samp>pass</samp> تنظیم شود. می توانید داده را از صفحه <samp>اطلاعات PHP</samp> کنترل کنید.',	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion به طور نامناسب پیکربندی شده است',	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var>باید به <samp>pass</samp> تنظیم شود. می توانید داده را از صفحه <samp>اطلاعات PHP</samp> کنترل کنید.',

	'FILES_PER_DAY'		=> 'تعداد پیوست در هر روز',
	'FORUM_STATS'		=> 'آمار تالار',

	'GZIP_COMPRESSION'	=> 'GZip فشرده ساز',

	'NOT_AVAILABLE'		=> 'در دسترس نیست',
	'NUMBER_FILES'		=> 'تعداد پیوست ',
	'NUMBER_POSTS'		=> 'تعداد پست ',
	'NUMBER_TOPICS'		=> 'تعداد موضوعات',
	'NUMBER_USERS'		=> 'تعداد کاربران',
	'NUMBER_ORPHAN'		=> 'پیوست های بدون صاحب',

	'PHP_VERSION_OLD'	=> 'این نسخه PHP دیگر در نسخه های بعدی phpBB پشتیبانی نخواهد شد. %sجزئیات%s',

	'POSTS_PER_DAY'		=> 'تعداد پست در هر روز',

	'PURGE_CACHE'			=> 'پاکسازی cache',
	'PURGE_CACHE_CONFIRM'	=> 'آیا از پاکسازی cache مطمئن هستید ؟',
	'PURGE_CACHE_EXPLAIN'	=> 'پاکسازی همه ی cache ها شامل cache قالب و پرس و جو ها.',

	'PURGE_SESSIONS'			=> 'پاکسازی همه نشست ها',
	'PURGE_SESSIONS_CONFIRM'	=> 'آیا از پاکسازی همه ی نشست ها مطمئن هستید ؟ این کار موجب خروج همه کاربران خواهد شد.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'پاکسازی نشست ها. این کار با خالی کردن جدول نشست ها موجب خروج کاربران خواهد شد.',

	'RESET_DATE'					=> 'بازیابی تاریخ شروع فعالیت تالار',
	'RESET_DATE_CONFIRM'			=> 'آیا از بازیابی تاریخ شروع تالار مطمئن هستید ؟',
	'RESET_ONLINE'					=> 'بازیابی بیشترین تعداد افراد آنلاین',
	'RESET_ONLINE_CONFIRM'			=> 'آیا از بازیابی بیشترین تعداد افراد آنلاین مطمئن هستید',
	'RESYNC_POSTCOUNTS'				=> 'انظباق (resync)شمارش پست ها',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'فقط پست های جدید مورد بررسی قرار خواهند گرفت و پست های هرس شده محسوب نخواهند شد.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'آیا از انظباق (resync)شمارش پست ها مطمئن هستید ؟',
	'RESYNC_POST_MARKING'			=> 'انطباق موضوعات تقطه گذاری شده (dotted)',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'آیا از انطباق موضوعات تقطه گذاری شده (dotted) مطمئن هستید ؟',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'اول علامت تیک را از همه موضوعات بردارید و سپس موضوعاتی را که در 6 ماه گذشته فعال بودند علامت گذاری کنید.',
	'RESYNC_STATS'					=> 'انطباق (resync) آمار',
	'RESYNC_STATS_CONFIRM'			=> 'آیا از انطباق (resync) آمار مطمئن هستید ؟',
	'RESYNC_STATS_EXPLAIN'			=> 'بازشماری تعداد پست ها،موضوعات،کاربران و فایل ها.',
	'RUN'							=> 'اجرا',

	'STATISTIC'					=> 'آمار',
	'STATISTIC_RESYNC_OPTIONS'	=> 'انطباق (resync) و یا بازیابی آمار',

	'TOPICS_PER_DAY'	=> 'موضوعات در هر روز',

	'UPLOAD_DIR_SIZE'	=> 'حجم پیوست های ارسال شده',
	'USERS_PER_DAY'		=> 'تعداد کاربران در هر روز',

	'VALUE'						=> 'مقدار',
	'VERSIONCHECK_FAIL'			=> 'دریافت اطلاعات آخرین نسخه موفقیت آمیط نبود !',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'کنترل دوباره ی نسخه',
	'VIEW_ADMIN_LOG'			=> 'مشاهده رویداد های مدیریت',
	'VIEW_INACTIVE_USERS'		=> 'مشاهده کاربران غیرفعال',

	'WELCOME_PHPBB'			=> 'به phpBB خوش آمدید',
	'WRITABLE_CONFIG'		=> 'فایل پیکربندی (config.php) قابل نوشتن است. به شدّت توصیه می کنیم که سطح دسترسی آن را به 640 و یا حداقل به 644 تغییر دهید. (برای مثال : <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'تاریخ عدم فعالیت',
	'INACTIVE_REASON'				=> 'دلیل',
	'INACTIVE_REASON_MANUAL'		=> 'اکانت توسط مدیر غیرفعال شده است',
	'INACTIVE_REASON_PROFILE'		=> 'جزئیات پروفایل تغییر یافت',
	'INACTIVE_REASON_REGISTER'		=> 'اکانت هایی که به تازگی ثبت نام کرده اند',
	'INACTIVE_REASON_REMIND'		=> 'کاربر مجبور به فعال سازی دوباره اکانت خود خواهد شد.',
	'INACTIVE_REASON_UNKNOWN'		=> 'نامعلوم',
	'INACTIVE_USERS'				=> 'کاربرن غیرفعال',
	'INACTIVE_USERS_EXPLAIN'		=> 'این لیستی از کاربران ثبت نام شده می باشد که اخیرا غیرفعال هستند. می توانید این کاربران را فعال،حذف کنید و یا به آنها ایمیلی به منظور یادآوری ارسال کنید.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'این لیستی از 10 کاربر اخیر ثبت نام کرده می باشد که اکانت آن ها غیرفعال هست. اکانت ها ممکن است به دلیل عدم فعال سازی اکانت ویا توسط مدیران غیرفعال شده باشند، لیست کامل در منوی مربوطه و یا در لینک زیر در دسترس می باشد که در آن جا می توانید این کاربران را فعال و یا حذف کنید و همچنین می توانید به آنها ایمیل یادآوری ارسال کنید.',

	'NO_INACTIVE_USERS'	=> 'کاربر غیرفعالی وجود ندارد',

	'SORT_INACTIVE'		=> 'تاریخ عدم فعالیت',
	'SORT_LAST_VISIT'	=> 'آخرین بازدید',
	'SORT_REASON'		=> 'دلیل',
	'SORT_REG_DATE'		=> 'تاریخ ثبت نام',
	'SORT_LAST_REMINDER'=> 'آخرین یادآوری',
	'SORT_REMINDER'		=> 'یادآور ارسال شد',

	'USER_IS_INACTIVE'		=> 'کاربر غیرفعال می باشد',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'لطفا اطلاعات سرور و پیکربندی تالارتان را به phpBB به منظور آنالیز آنها،ارسال کنید. تمام اطلاعاتی که ممکن است حاوی هویت شما باشد،حذف خواهند شد. - اطلاعات کاملا <strong>بی نام</strong>خواهند بود. این اطلاعات برای عموم قابل دسترسی است و ما براساس این اطلاعات در مورد نسخه های بعدی phpBB تصمیم گیری می کنیم.همچنین این آمار با پروژه PHP که زبان برنامه نویسی phpBB هست نیز به اشتراک گذاشته خواهد شد.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'با استفاده از دکمه زیر می توانید تمامی اطلاعاتی را که منتقل خواهند شد، ببینید.',
	'DONT_SEND_STATISTICS'		=> 'اگر مایل به ارسال آمار به phpBB نیستید، به کنترل پنل مدیریت بازگردید.',
	'GO_ACP_MAIN'				=> 'بازگشت به صفحه شروع کنترل پنل مدیریت.',
	'HIDE_STATISTICS'			=> 'مخفی کردن جزئیات',
	'SEND_STATISTICS'			=> 'ارسال اطلاعات آماری',
	'SHOW_STATISTICS'			=> 'نمایش جزئیات',
	'THANKS_SEND_STATISTICS'	=> 'از ارسال این اطلاعات به ما متشکریم',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>سطوح دسترسی کاربران ویرایش و یا اضافه شدند.</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>سطوح دسترسی گروه ها ویرایش و یا اضافه شدند.</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>سطوح دسترسی مدیریت سراسری کاربران ویرایش و یا اضافه شدند.</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>سطوح دسترسی مدیریت سراسری گروه ها ویرایش و یا اضافه شدند.</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>سطوح دسترسی مدیریت کاربران ویرایش و یا اضافه شدند.</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>سطوح دسترسی مدیریت گروه ها ویرایش و یا اضافه شدند.</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>مدیران ویرایش و یا اضافه شدند </strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>مدیران انجمن ها ویرایش و یا اضافه شدند.</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>دسترسی کاربران به انجمن ویرایش و یا اضافه شدند</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>دسترسی کاربران به مدیریت انجمن ویرایش و یا اضافه شدند</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>دسترسی گروه ها به انجمن ویرایش و یا اضافه شدند</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>دسترسی گروه ها به مدیریت انجمن ویرایش و یا اضافه شدند</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>مدیران انجمن ویرایش و یا اضافه شدند</strong> از %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>سطوح دسترسی انجمن ویرایش و یا اضافه شدند</strong> از %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>حذف مدیران</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>حذف مدیران انجمن ها</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>حذف مدیران انجمن</strong> از %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>حذف سطوح دسترسی کاربران/گروه ها به انجمن</strong> از %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>سطوح دسترسی از</strong><br />» %s منتقل شدند.',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>سطوح دسترسی بازنگری شدند</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>ورود به مدیریت موفقیت آمیز نبود</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>ورود به مدیریت موفقیت آمیز بود</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>پیوست های کاربر حذف شدند</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>الحاقات پیوست ویرایش و یا حذف شدند</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>الحاقات پیوست حذف شدند</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>الحاقات پیوست بروزرسانی شدند</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>گروه الحاقات اضافه شدند</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>گروه الحاقات ویرایش شدند</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>گروه الحاقات حذف شدند</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>فایل بدون صاحب به پستی با ای ID اضافه شد :</strong><br />» %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>فایل بدون صاحب حذف شد</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>تحریم کاربر لغو شد</strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>تحریم IP لغو شد </strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>تحریم ایمیل لغو شد</strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>کاربر تحریم شد</strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP تحریم شد</strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>ایمیل تحریم شد</strong> به دلیل “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>تحریم کاربر لغو شد</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>تحریم IP لغو شد</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>تحریم ایمیل لغو شد</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>BBCode جدیدی اضافه شد</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode ویرایش شد</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode حذف شد</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>روبات جدیدی اضافه شد</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>روبات حذف شد</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>روبات کنونی بروزرسانی شد</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>رویدادهای مدیریت پاک شدند</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>رویدادهای خطاها پاک شدند</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>رویدادهای مدیران انجمن پاک شدند</strong>',
	'LOG_CLEAR_USER'		=> '<strong>رویدادهای کاربر پاک شد</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>رویدادهای کاربران پاک شدند</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>تنظیمات پیوست تغییر یافتند</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>تنظیمات تایید تغییر یافتند</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>تنظیمات آواتار تغییر یافتند</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>تنظیمات کوکی تغییر یافتند</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>تنظیمات ایمیل تغییر یافتند</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>ویژگی های تالار تغییر یافتند</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>تنظیمات بارگذاری تغییر یافتند</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>تنظیمات پیغام های خصوصی تغییر یافتند</strong>',
	'LOG_CONFIG_POST'			=> '<strong>تنظیمات پست تغییر یافتند</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>تنظیمات ثبت نام کاربران تغییر یافتند</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>تنظیمات خوراک تغییر یافتند</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>تنظیمات جستجو تغییر یافتند</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>تنظیمات امنیت تغییر یافتند</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>تنظیمات سرور تغییر یافتند</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>تنظیمات تالار تغییر یافتند</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>تنظیمات امضا تغییر یافتند</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>تنظیمات کد تایید تغییر یافتند</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>موضوع تایید شد</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>موضوع کاربر بامپ (bump) شد</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>پست حذف شد</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>موضوع سایه دار حذف شد</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>موضوع حذف شد</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>موضوع کپی شد</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>موضوع قفل شد</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>پست قفل شد</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>پست ها در این موضوع ادغام شدند</strong><br />» %s',
	'LOG_MOVE'					=> '<strong>موضوع انتقال داده شد</strong><br />» از %1$s به %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>گزارش پیغام خصوصی بسته شد</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>گزارش پیغام خصوصی حذف شد</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>پست تایید شد</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>پست “%1$s” به دلیل زیر تایید نشد</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>ویرایش پست</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>گزارش بسته شد</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>گزارش حذف شد</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>پست های دوبخشی منقل شدند</strong><br />» به %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>پست های دوبخشی</strong><br />» از %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>موضوع تایید شد</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>موضوع “%1$s” به دلیل زیر تایید نشد</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>انطباق (resync) شمارنده موضوع</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>نوع موضوع تغییر یافت</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>قفل موضوع باز شد</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>قفل پست باز شد</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>نام کاربری غیرمجاز اضافه شد</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>نام کاربری غیرمجاز حذف شد</strong>',

	'LOG_DB_BACKUP'			=> '<strong>پشتیبان گیری از پایگاه داده</strong>',
	'LOG_DB_DELETE'			=> '<strong>پشتیبان پایگاه داده حذف شد</strong>',
	'LOG_DB_RESTORE'		=> '<strong>در پشتیبان پایگاه داده بازنگری شد</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/hostname از لیست بارگیری لغو شد</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP/hostname به لیست بارگیری اضافه شد</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/hostname از لیست بارگیری حذف شد</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>خطای jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>خطای ایمیل</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>انجمن جدید ایجاد شد</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>سطوح دسترسی انجمن </strong> از %1$s کپی شدند<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>انجمن حذف شذ</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>انجمن و زیرانجمن های آن حذف شدند</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>انجمن حذف شد و زیرانجمن های آن </strong> به %1$s منتقل شدند<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>انجمن حذف شد و پست های آن </strong> به %1$s منتقل شدند<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>انجمن و زیرانجمن های آن حذف شدند و پست ها</strong> به %1$s منتقل شدند<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>انجمن حذف شد و پست ها</strong> به %1$s منتقل شدند <strong>و زیرانجمن ها نیز</strong> به %2$s منتقل شدند<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>انجمن و پست های آن حذف شدند</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>انجمن همراه با زیرانجمن ها و پست های آن حذف شدند </strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>انجمن و پست های ان حذف شدند و زیرانجمن های آن نیز</strong> به %1$s منتقل شدند<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>جزئیات انجمن ویرایش شد</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>انجمن</strong> %1$s به <strong>زیر</strong> %2$s منقل شد',
	'LOG_FORUM_MOVE_UP'						=> '<strong>انجمن</strong> %1$s به <strong>بالای</strong> %2$s منقل شد',
	'LOG_FORUM_SYNC'						=> '<strong>انجمن منطبق (resync) شد</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>خطایی عمومی رخ داد</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>گروه کاربری جدیدی ایجاد شد</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>گروه “%1$s” به عنوان گروه پیشفرض برای کاربران تایید شد</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>گروه کاربری حدف شد</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>رتبه رهبران گروه کاربری در</strong> %1$s تنزیل شد<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>رتبه کاربران  گروه کاربری در </strong> %1$s ارتقاء یافت<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>اعضا از گروه کاربری</strong> %1$s حذف شدند<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>جزئیات گروه کاربری بروزرسانی شد</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>رهبران جدید به گروه کاربری </strong> %1$s اضافه شدند<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>اعضای جدید به گروه کاربری</strong> %1$s اضافه شدند<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>اعضا در گروه کاربری</strong> %1$s تایید شدند<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>کاربران دخواست عضویت در گروه “%1$s” ارسال کرده اند که نیازمند تایید می باشد</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>خطایی در حین ایجاد تصویر روی داد</strong><br />» خطا رد %1$s و خط %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>مجموعه تصاویر جدید به پایگاه داده اضافه شد</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>مجموعه تصاویر جدیدی به سیستم فایل اضافه شد</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>مجموعه تصاویر حذف شد</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>جزئیات مجموعه تصاویر ویرایش شد</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>مجموعه تصاویر ویرایش شد</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>مجموعه تصاویر به بیرون برده شد</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>مجموعه تصاویر موجود در “%2$s” گم شده است</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>بخش “%2$s” مجموعه تصاویر دوباره بارگیری شد</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>بارگیری دوباره مجموعه تصاویر</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>کاربران غیرفعال،فعال شدند</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>کاربران غیرفعال، حذف شدند</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>ایمیل یادآوری به کاربران غیرفعال ارسال شد</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>از %1$s به phpBB %2$s تبدیل شد</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s نصب شد</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>کنترل نشست IP،مرورگر و X_FORWARDED_FOR شکست خورد</strong><br />»IP کاربر “<em>%1$s</em>” در IP نشست “<em>%2$s</em>” کنترل شد , حلقه مرورگر کاربر “<em>%3$s</em>” در نشست حلقه مرورگر “<em>%4$s</em>” کنترل شد و X_FORWARDED_FOR string کاربر “<em>%5$s</em>” در حلقه نشست X_FORWARDED_FOR “<em>%6$s</em>” کنترل شد.',

	'LOG_JAB_CHANGED'			=> '<strong>اکانت Jabeer تغییر یافت</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>کلمه عبور Jabber تغییر یافت</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>اکانت Jabber ثبت نام شد</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>تنظیمات Jabber تغییر یافت</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>بسته زبانی حذف شد</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>بسته زبانی نصب شد</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>جزئیات بسته زبانی بروزرسانی شد</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>فایل های زبان جایگزین شدند</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>فایل زبان ارسال و در پوشه مورد نظر ذخیره شد</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>ایمیل های دسته جمعی ارسال شدند</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>ارسال کننده در موضوع “%1$s” تغییر یافت </strong><br />» از %2$s به %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>افزونه غیرفعال شد</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>افزونه فعال شد</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>افزونه به پایین انتقال یافت</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>افزونه به بالا انتقال یافت</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>افزونه حذف شد</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>افزونه اضافه شد</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>افزونه ویرایش شد</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>نقش مدیریت اضافه شد</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>نقش مدیریت ویرایش شد</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>نقش مدیریت حذف شد</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>نقش انجمن اضافه شد</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>نقش انجمن ویرایش شد</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>نقش انجمن حذف شد</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>نقش مدیر انجمن اضافه شد</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>نقش مدیر انجمن ویرایش شد</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>نقش مدیر انجمن حذف شذ</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>نقش کاربر اضافه شد</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>نقش کاربر ویرایش شد</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>نقش کاربر حذف شد</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>فیلد پروفایل فعال شد</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>فیلد پروفایل اضافه شد</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>فیلد پروفایل غیرفعال شد</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>فیلد پروفایل تغییر یافت</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>فیلد پروفایل حذف شد</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>انجمن ها هرس شدند</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>انجمن ها به صورت خودکار هرس شدند</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>کاربران غیرفعال شدند</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>کاربران هرس شده و پست ها حذف شدند/strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>کاربران هرس شده و پست ها حفظ شدند</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>پاکسازی شدند cach</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>نشست ها پاکسازی شدند</strong>',


	'LOG_RANK_ADDED'		=> '<strong>رتبه جدیدی اضافه شد</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>رتبه حذف شد</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>رتبه بروزرسانی شد</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>گزارش/دلیل تحریم اضافه شد</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>گزارش/دلیل تحریم حذف شد</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>گزارش/دلیل تحریم بروزرسانی</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>تایید رجوع کننده موفقیت آمیز نبود</strong><br />»رجوع کننده “<em>%1$s</em>” بود که درخواست آن رد شده و نشست بسته شد',
	'LOG_RESET_DATE'			=> '<strong>تاریخ شروع فعالیت تالار بازیابی شد</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>بیشترین تعداد افراد آنلاین بازیابی شد</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>شمارنده پست کاربر منطبق(resync) شد</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>موضوعات نقطه گذاری شده (dotted) منطبق (resync) شد</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>آمار کاربران،موضوعات و پست ها منطبق (resync) شدند</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>شاخص جستجو ایجاد شد</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>شاخص جستجو حذف شد</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>قالب جدید اضافه شد</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>قالب حذف شد</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>قالب ویرایش شد</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>قالب به بیرون برده شد</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>مجموعه قالب جدیدی به پایگاه داده اضافه شد</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>مجموعه قالب جدیدی به سیستم فایل اضافه شد</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>نسخه های cach پایگاه داده برای مجموعه فالب، حذف شد <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>مجموعه قالب حذف شد</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>مجموعه قالب <em>%1$s</em> ویرایش شد</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>جزئیات قالب ویرایش شد</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>مجموعه قالب به بیرون برده شد</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>مجموعه قالب بروزرسانی شد</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>تم جدیدی به پایگاه داده اضافه شد</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>تم جدیدی به سیستم فایل اضافه شد</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>تم حذف شد</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>جزئیات تم ویرایش شد</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>تم <em>%1$s</em> ویرایش شد </strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>تم <em>%1$s</em> ویرایش شد </strong><br />» فایل <em>%2$s</em> تغییر یافت ',
	'LOG_THEME_EXPORT'			=> '<strong>تم به بیرون برده شد</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>تم بروزرسانی شد</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>پایگاه داده از نسخه %1$s به نسخه %2$s بروزرسانی شد</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB از نسخه %1$s به نسخه %2$s بروزرسانی شد.</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>کاربر فعال شد</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>کاربر توسط مدیریت اعضا</strong> به دلیل “<em>%1$s</em>” تحریم شد <br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP توسط مدیریت اعضا</strong> به دلیل “<em>%1$s</em>” تحریم شد <br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>ایمیل توسط مدیریت اعضا</strong> به دلیل “<em>%1$s</em>” تحریم شد <br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>کاربر حذف شد</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>همه ی پیوست های متعلق به کاربر حذف شد</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>آواتار کاربر حذف شد</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>صندوق خروجی کاربر تخلیه شد</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>همه ی پست های متعلق به کاربر حذف شد</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>امضای کاربر حذف شد</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>کاربر غیرفعال شد</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>پست های کاربر منتقل شدند</strong><br />» پست های متعلق به “%1$s” به انجمن “%2$s” منتقل شدند',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>کلمه عبور کاربر تغییر یافت</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>اکنون کاربر مجبور به فعال سازی دوباره اکانت خود می باشد</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>بیان کاربر جدید از کاربر حذف شد</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>ایمیل کاربر “%1$s” </strong><br />» از “%2$s” به “%3$s” تغییر یافت',
	'LOG_USER_UPDATE_NAME'	=> '<strong>نام کاربری</strong><br />» از “%1$s” به “%2$s” تغییر یافت',
	'LOG_USER_USER_UPDATE'	=> '<strong>جزئیات کاربر بروزرسانی شد</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>اکانت کاربر فعال شد</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>آواتار کاربر حذف شد</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>امضای کاربر حذف شد</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>بازخورد به کاربر اضافه شد</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>داده اضافه شد :</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>اکانت کاربر غیرفعال شد</strong>',
	'LOG_USER_LOCK'				=> '<strong>کاربر موضوع خود را قفل کرد</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>همه پست ها به انجمن</strong>» %s منتقل شدند',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>اکنون کاربر مجبور به فعال سازی مجدد اکانت خود می باشد</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>کاربر قفل موضوع خود را باز کرد</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>هشدار به کاربر اضافه شد</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>هشدار مقابل به کاربر ارسال شد</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>کاربر گروه پیشفرضش را تغییر داد</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>رتبه رهبری کاربر در گروه کاربری تنزل یافت</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>کاربر در گروه عضو شد</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>کاربر در گروه عضو شد و نیازمند تایید است</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>عضویت کاربر در گروه لغو شد</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>هشدار کاربر حذف شد</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>%2$s هشدار کاربر حذف شد</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>همگی هشدار های کاربر حذف شدند</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>سانسور کلمه اضافه شد</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>سانسور کلمه حذف شد</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>سانسور کلمه ویرایش شد</strong><br />» %s',
));

?>