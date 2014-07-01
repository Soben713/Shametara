<?php
/**
*
* acp_bots [English]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'مدیریت روبات ها',
	'BOTS_EXPLAIN'		=> '"روبات ها"،"عنکبوت ها"،"خزندگان" محبوب ترین بازرسانی هستند که موتور های جستجو از انها برای بروزرسانی پایگاه های داده شان استفاده می کنند. به علت نشستی که این بازرسان دارند، می توانند تعداد افراد آنلاین را تحریف کرده و سرعت بارگذاری سایت را پایین بیاورند. همچنین ممکن است مشکلاتی را در شاخص های تالار به وجود آورند. در این بخش می توانید این کاربران ویژه را در گروه های خاص قرار دهید تا بتوانید این مشکلات را برطرف کنید.',
	'BOT_ACTIVATE'		=> 'فعال',
	'BOT_ACTIVE'		=> 'روبات فعال',
	'BOT_ADD'			=> 'اضافه کردن روبات',
	'BOT_ADDED'			=> 'روبات جدید با موفقیت اضافه شد.',
	'BOT_AGENT'			=> 'تطبیق بازرس',
	'BOT_AGENT_EXPLAIN'	=> 'رشته ای که روبات و بازرسان را تشخیص می دهد.داده وارد شده می تواند قسمتی از نتیجه احتمالی باشد.',
	'BOT_DEACTIVATE'	=> 'غیرفعال',
	'BOT_DELETED'		=> 'روبات با موفقیت حذف شد.',
	'BOT_EDIT'			=> 'ویرایش روبات ها',
	'BOT_EDIT_EXPLAIN'	=> 'در این صفحه می توانید روبات های موجود را ویرایش کنید. ممکن است بخواهید رشته ای را برای روبات وارد کنید و/و یا IP و یا بازه ای از IP ها را تعریف کنید. هنگام تعیین رشته و آدرس های بازرسان دقت کنید. همچنین ممکن است قالب و زبان پیشفرض را برای روبات ها تعریف کنید. اگر قالب کم حجمی را وارد کنید این کار استفاده از منابع سرور را کاهش خواهد داد. سطح دسترسی مناسبی را برای گروه های روبات وارد کنید.',
	'BOT_LANG'			=> 'زبان روبات',
	'BOT_LANG_EXPLAIN'	=> 'زبانی که برای روبات ها در حین جستجو تعریف خواهد شد.',
	'BOT_LAST_VISIT'	=> 'آخرین بازدید',
	'BOT_IP'			=> 'آدرس IP روبات',
	'BOT_IP_EXPLAIN'	=> 'داده وارد شده می تواند قسمتی از نتیجه احتمالی باشد،آدرس ها را با کاما جدا کنید.',
	'BOT_NAME'			=> 'نام روبات',
	'BOT_NAME_EXPLAIN'	=> 'فقط برای اطلاعات شما استفاده خواهد شد.',
	'BOT_NAME_TAKEN'	=> 'هم اکنون از این نام در تالارتان استفاده می شود، و دیگر نمیتواند به عنوان نامی برای روبات مورد استفاده قرار بگیرد.',
	'BOT_NEVER'			=> 'هرگز',
	'BOT_STYLE'			=> 'قالب روبات',
	'BOT_STYLE_EXPLAIN'	=> 'قالبی که روبات در تالار از آن استفاده خواهد کرد.',
	'BOT_UPDATED'		=> 'روبات موجود با موفقیت بروزرسانی شد.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'به نظر می رسد که بازرس روبات وارد شده، در حال حاضر موجود می باشد،لطفا تنظیمات را کنترل کنید.',
	'ERR_BOT_NO_IP'				=> 'آدرس IP وارد شده غیرمعتبر می باشد و یا نام هاست قابل تشخیص نیست.',
	'ERR_BOT_NO_MATCHES'		=> 'برای تظبیق روبات باید حداقل آدرس IP و یا بازرس را مضخص کنید.',

	'NO_BOT'		=> 'روباتی با ID مشخص شده یافت نشد.',
	'NO_BOT_GROUP'	=> 'گروه روباتی یافت نشد.',
));

?>