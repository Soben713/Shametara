<?php
/**
*
* acp_search [persian]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'در این بخش می توانید مرجع های جستجو را مدیریت کنید،اگر تنها از یک مرجع استفاده می کنید،باید شاخص های سایر مراجع را حذف کنید،تغییر تنظیمات جستجو عملکرد جستجو را بالا خواهد برد.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'در این بخش می توانید انتخاب کنید که از کدام مرجع جستجو برای شاخص بندی استفاده شود.',

	'COMMON_WORD_THRESHOLD'					=> 'آستانه کلمات عمومی',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'کلماتی که در درصد بیشتری از پست ها حضور داشته باشند جزو کلمات عمومی محسوب خواهند شد،این کلمات در نتایج جستجو محسوب نمی شوند،اگر کلمه ای در بیش از 100 پست وجود داشته باشد این تنظیم برای آن کلمه فعال خواهد شد.برای وارد کردن کلمات به طور دستی باید شاخص جستجو را از نو ایجاد کنید.',
	'CONFIRM_SEARCH_BACKEND'				=> 'آیا از تغییر دادن مرجع جستجو مطمئن هستید ؟ بعد از تغییر دادن مرجع باید شاخص جدیدی برای آن ایجاد کنید،همچنین می توانید شاخص های قدیمی را حذف کنید.',
	'CONTINUE_DELETING_INDEX'				=> 'ادامه فرآیند حذف شاخص گذشته',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'فرآیند حذف شاخص شروع شد،برای دسترسی به صفحه شاخص جستجو باید این فرآیند تکمیل شده و یا لغو شود.',
	'CONTINUE_INDEXING'						=> 'ادامه فرآیند شاخص بندی گذشته',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'فرآیند  شاخص بندی آغاز شد،برای دسترسی به صفحه شاخص جستجو باید این فرآیند تکمیل شده و یا لغو شود.',
	'CREATE_INDEX'							=> 'ایجاد شاخص',

	'DELETE_INDEX'							=> 'حذف شاخص',
	'DELETING_INDEX_IN_PROGRESS'			=> 'حذف شاخص در حال اجرا می باشد',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'در حال حاضر مرجع جستجو شاخص خود را پاکسازی می کند،این فرآیند ممکن است چند دقیقه به طول انجامد.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'مرجع متنی MYAQL فقط قابل اجرا در نسخه MYSQL4 و یا بالاتر می باشد.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'شاخص های متنی فقط در MySQL همراه با جداول MyISAM یا InnoDB استفاده میشود. MySQL 5.6.4 یا بالاتر نیاز به شاخص های متنی کامل از جداول InnoDB میباشند.',

	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'تعداد کل پست های شاخص بندی شده',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'پشتیبانی از کاراکتر های غیر لاتین و UTF-8 با استفاده از mbstring :',
	'FULLTEXT_MYSQL_PCRE'					=> 'پشتیبانی از کاراکتر های غیر لاتین و UTF-8 با استفاده از PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'اگر PCRE از خواص کاراکتر پشتیبانی نکند،به طور خودکار از mbstring استفاده خواهد شد.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'این مرجع جستجو نیازمند یونی کد PCRE می باشد،این ویژگی فقط در PHP 4.4، PHP 5.1 و بالاتر موجود می باشد.این گزینه جستجوی کاراکتر های غیر لاتین را تحصیل می کند.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'کلماتی حداقل با این تعداد کاراکتر در جستجو ها محسوب خواهند شد،این تعداد کاراکتر از تنظیمات پیکربندی MYSQL قابل تغییر است.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'کلماتی که بیشتر از این تعداد کاراکتر باشند در جستجو ها محسوب خواهند شد،این رقم از تنظیمات پیکربندی MYSQL قابل تغییر است.',

	'GENERAL_SEARCH_SETTINGS'				=> 'تنظیمات عمومی جستجو',
	'GO_TO_SEARCH_INDEX'					=> 'رفتن به صفحه اصلی جستجو',

	'INDEX_STATS'							=> 'آمار شاخص',
	'INDEXING_IN_PROGRESS'					=> 'ضاخص بندی در حال اجرا می باشد',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'مرجع جستجو در حال شاخص بندی تمامی پست های تالار می باشد،این فرآیند ممکن است بسته به حجم تالار بین چند دقیقه تا چند ساعت به طول بیانجامد.',

	'LIMIT_SEARCH_LOAD'						=> 'محدودیت بارگذاری صفحه جستجو',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'اگر بارگذاری صفحه جستجو بیش از 1 دقیقه طول بکشد،صفحه آفلاین خواهد شد. 1.0 معادل 100% مصرف یک پردازنده می باشد. این عملکرد فقط در سرور های UNIX فعال است.',

	'MAX_SEARCH_CHARS'						=> 'حداکثر تعداد کاراکتر کلمات برای شاخص بندی شدن در جستجو',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'کلماتی که بیشتر از این تعداد کاراکتر نباشند،در جستجو شاخص بندی خواهند شد.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'بیشترین تعداد مورد قبول کلمات کلیدی',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'بیشترین تعداد کلمه ای که کاربران می توانند جستجو کنند،برای جستجوی نامحدود 0 را وارد کنید.',
	'MIN_SEARCH_CHARS'						=> 'حداقل تعداد کاراکتر کلمات برای شاخص بندی شدن در جستجو',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'کلماتی که کمتر از ایت تعداد کاراکتر باشند در جستجو شاخص بندی خواهند شد.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'حداقل تعداد کاراکتر برای جستجوی نام نویسنده',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'در جستجوی قسمتی از نام نویسنده کاربر باید حداقل این تعداد کاراکتر را وارد کند،اگر نام نویسنده ای کوتاه تر از این تعداد کاراکتر باشد باز هم اگر نام کامل وی در جستجو درج شود،پست های او نمایش داده خواهند شدو',

	'PROGRESS_BAR'							=> 'نوار پیشرفت',

	'SEARCH_GUEST_INTERVAL'					=> 'محدودیت زمانی جستجو برای مهمان ها',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'تعدا ثانیه هایی که مهمانان باید بین دو جستجو صبر کنند،اگر مهمانی جستجویی را انجام دهد،مهمانان دیگر باید این تعداد ثانیه صبر کنند تا بتوانند جستجوی دیگری را انجام دهند.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'همه پست ها تا id %1$d از بین %2$d پست در این مرحله شاخص بندی شدند.<br /رتبه شاخص بندی کنونی تقریبا %3$در ثانیه می باشد.<br />شاخص بندی در حال اجرا است.',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'همه پست ها تا id %1$d از شاخص جستجو حذف شدند.<br />حذف پست ها از شاخص در حال اجرا است.',
	'SEARCH_INDEX_CREATED'					=> 'با موفقیت تمامی پست ها در پایگاه داده شاخص بندی شدند.',
	'SEARCH_INDEX_REMOVED'					=> 'با موفقیت شاخص این مرجع جستجو حذف شد.',
	'SEARCH_INTERVAL'						=> 'محدودیت زمانی برای جستجوی کاربران',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'تعداد ثانیه هایی که کاربر باید بین دوجستجو صبر کند،این زمان برای هر کاربر مستقل می باشد.',
	'SEARCH_STORE_RESULTS'					=> 'درازای cache برای نتایج جستجو',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'cache نتایج جستجو بعد از این مدت زمان (ثانیه) حذف خواهد شد،برای غیرفعال کردن این ویژگی 0 را وارد کنید.',
	'SEARCH_TYPE'							=> 'مرجع جستجو',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB به شما این اجازه را می دهد تا مرجع جستجوی خود را انتخاب کنید،به صورت پیشفرض از مرجع جستجوی متنی phpBB استفاده می شود.',
	'SWITCHED_SEARCH_BACKEND'				=> 'مرجع جستجو را تغییر داده اید،برای استفاده از مرجع جستجو باید مطمئن باشید که شاخصی برای این مرجع وجود داشته باشد.',

	'TOTAL_WORDS'							=> 'تعداد کل کلمات شاخص بندی شده',
	'TOTAL_MATCHES'							=> 'تعدا کل کلماتی که در ارتباط با پست شاخص بندی شده اند',

	'YES_SEARCH'							=> 'فعال سازی امکانات جستجو',
	'YES_SEARCH_EXPLAIN'					=> 'فعال سازی نمای جستجو شامل جستجوی اعضا',
	'YES_SEARCH_UPDATE'						=> 'فعال سازی بروزرسانی متنی',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'هنگام ارسال پست های جدید،شاخص جستجو را بروزرسانی می کند،اگر جستجو غیرفعال باشد این گزینه عملکردی نخواهد داشت.',
));

?>