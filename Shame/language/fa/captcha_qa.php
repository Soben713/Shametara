<?php
/**
*
* captcha_qa [persian]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'سوال و پاسخ',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'این سوالات از ارسال هرزنامه به سایت شما جلوگیری خواهند کرد',
	'CONFIRM_QUESTION_WRONG'	=> 'پاسخی که برای این سوال مطرح کرده اید نادرست است',

	'QUESTION_ANSWERS'			=> 'پاسخ ها',
	'ANSWERS_EXPLAIN'			=> 'لطفا جواب معتبری را وارد کنید.در هر خط یک پاسخ',
	'CONFIRM_QUESTION'			=> 'سوال',

	'ANSWER'					=> 'جواب',
	'EDIT_QUESTION'				=> 'ویرایش سوال',
	'QUESTIONS'					=> 'سوال ها',
	'QUESTIONS_EXPLAIN'			=> 'در همه ی فرم هایی که این افزونه فعال باشد،از کاربران یکی از سوالات زیر پرسیده خواهد شد. برای استفاده از این افزونه باید حداقل یک سوال در زبان پیشفرض تعریف شده باشد.این سوالات باید آسان باشند و در حد توانایی پاسخ گویی از جانب موتو های جستجوگر گوگل™ باشند. پرسش سوالات ثابت و همیشگی عملکرد این افزونه را بالا خواهد برد.اگر سوال شما حاوی حالت های مخلوط،علایم نگارشی و خط فاصله باشد،باید تنظیمات دقیق را فعال کنید.',
	'QUESTION_DELETED'			=> 'سوال حذف شد',
	'QUESTION_LANG'				=> 'زبان',
	'QUESTION_LANG_EXPLAIN'		=> 'زبانی که سوال و جواب در آن زبان مطرح میشوند.',
	'QUESTION_STRICT'			=> 'کنترل سختی',
	'QUESTION_STRICT_EXPLAIN'	=> 'فعال سازی حالت مخلوط،علایم نگارشی و خط فاصله',

	'QUESTION_TEXT'				=> 'سوال',
	'QUESTION_TEXT_EXPLAIN'		=> 'سوالی که به کاربر مطرح می شود',

	'QA_ERROR_MSG'				=> 'لطفا همه فیلد ها را پر کنید و حداقل یک سوال را وارد کنید.',
	'QA_LAST_QUESTION'			=> 'در حین فعال بودن این افزونه،نمی توانید همه ی سوالات را حذف کنید.',

));

?>