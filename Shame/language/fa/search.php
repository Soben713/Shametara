<?php
/**
*
* search [English]
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
	'ALL_AVAILABLE'			=> 'همه موارد در دسترس',
	'ALL_RESULTS'			=> 'همه نتیجه ها',

	'DISPLAY_RESULTS'		=> 'نمایش نتایج در',

	'FOUND_SEARCH_MATCH'		=> '%d مورد مطابق',
	'FOUND_SEARCH_MATCHES'		=> '%d مورد مطابق',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'بیش از %d مورد مطابق یافت شد.',

	'GLOBAL'				=> 'اطلاعیه سراسری',

	'IGNORED_TERMS'			=> 'نادیده گرفته شده',
	'IGNORED_TERMS_EXPLAIN'	=> 'این کلمات در نتیجه جستجو نادیده گرفته شد،زیرا این کلمات بسیار عمومی هستند : <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'پرش به پست',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'برای مشاهده پست های خودتان باید ثبت نام کرده و وارد شوید.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'برای مشاهده پست های خوانده نشده باید ثبت نام کرده و وارد شوید.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'برای مشاهده پست های جدید از آخرین بازدیدتان باید ثبت نام کرده و وارد شوید.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'برای جستجو کلمات زیادی را تایین کرده اید.حداکثر %1$d کلمه میتوانید وارد کنید.',

	'NO_KEYWORDS'			=> 'برای جستجو باید حداقل یک کلمه ای را انتخاب کنید. هر کلمه باید حداقل حاوی %d کاراکتر باشد و کاراکتر های بیشتر از %d مورد قبول نخواهد بود.',
	'NO_RECENT_SEARCHES'	=> 'اخیرا جستجو ای صورت نگرفته است.',
	'NO_SEARCH'				=> 'با عرض پوزش نمیتوانید از بخش جستجو استفاده کنید.',
	'NO_SEARCH_RESULTS'		=> 'نتیجه مناسبی یافت نشد.',
	'NO_SEARCH_TIME'		=> 'در حال حاضر نمیتوانید جسجویی را انجام دهید،لطفا بعد از چند دقیقه دوباره امتحان کنید.',
	'NO_SEARCH_UNREADS'		=> 'با عرض پوزش جستجوی پست های خوانده نشده در این تالار غیرفعال شده است.',
	'WORD_IN_NO_POST'		=> 'پستی یافت نشد زیرا کلمه <strong>%s</strong> در هیچ پستی وجود ندارد.',
	'WORDS_IN_NO_POST'		=> 'پستی یافت نشد زیرا کلمات<strong>%s</strong> در هیچ پستی وجود ندارند.',

	'POST_CHARACTERS'		=> 'کاراکتر پست (این تعداد کاراکتر موجود در ابتدای پست بررسی خواهد شد)',

	'RECENT_SEARCHES'		=> 'جستجو های اخیر',
	'RESULT_DAYS'			=> 'آرشیو',
	'RESULT_SORT'			=> 'مرتب کردن نتایج براساس',
	'RETURN_FIRST'			=> 'اولین کاراکترهای پست',
	'RETURN_TO_SEARCH_ADV'	=> 'بازگشت به جستجوی پیشرفته',

	'SEARCHED_FOR'				=> 'عبارت استفاده شده در جستجو',
	'SEARCHED_TOPIC'			=> 'موضوع جستجو شده',
	'SEARCHED_QUERY'			=> 'سوال جستجو شده',
	'SEARCH_ALL_TERMS'			=> 'جستجوی همه مطالب و یا موارد مشخص شده',
	'SEARCH_ANY_TERMS'			=> 'جستجوی هرگونه مطلب',
	'SEARCH_AUTHOR'				=> 'جستجو بر اساس نویسنده',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'اگر کلمه وارد شده قسمتی از نتیجه احتمالی است،لطفا * را وارد کنید.',
	'SEARCH_FIRST_POST'			=> 'فقط اولین پست موضوع',
	'SEARCH_FORUMS'				=> 'جستجو در انجمن ها',
	'SEARCH_FORUMS_EXPLAIN'		=> 'انجمن و یا انجمن هایی را که میخواهید جستجو کنید را وارد کنید.تا زمانی که جستجوی زیر انجمن ها را غیرفعال نکرده باشید، زیرانجمن ها به طور خودکار جستجو خواهند شد',
	'SEARCH_IN_RESULTS'			=> 'جستجوی این نتایج',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'علامت <strong>+</strong> در مقابل کلمه ای قرار دهید که باید یافت شود و علامت <strong>-</strong> را در مقابل کلمه ای قرار دهید که باید یافت نشود. اگر میخواهید یکی از کلمات وارد شده یافت شود،آن کلمات را با استفاده از علامت <strong>|</strong> از یکدیگر جدا کنید. اگر کلمه وارد شده قسمتی از نتیجه احتمالی باشد آن را با * مشخص کنید.',
	'SEARCH_MSG_ONLY'			=> 'فقط متن پیغام',
	'SEARCH_OPTIONS'			=> 'گزینه های جستجو',
	'SEARCH_QUERY'				=> 'کلمه مورد جستجو',
	'SEARCH_SUBFORUMS'			=> 'جستجوی زیرانجمن ها',
	'SEARCH_TITLE_MSG'			=> 'ارسال عناوین و متن پیغام ها',
	'SEARCH_TITLE_ONLY'			=> 'فقط عنوان موضوع',
	'SEARCH_WITHIN'				=> 'جستجو درون',
	'SORT_ASCENDING'			=> 'صعودی',
	'SORT_AUTHOR'				=> 'نویسنده',
	'SORT_DESCENDING'			=> 'نزولی',
	'SORT_FORUM'				=> 'انجمن',
	'SORT_POST_SUBJECT'			=> 'عنوان پست',
	'SORT_TIME'					=> 'تاریخ پست',

	'TOO_FEW_AUTHOR_CHARS'	=> 'حداقل باید %d کاراکتر از نام نویسنده را مشخص کنید.',
));

?>