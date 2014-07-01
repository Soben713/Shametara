<?php
/**
*
* groups [persian]
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
	'ALREADY_DEFAULT_GROUP'		=> 'گروه انتخاب شده،گروه پیشفرض می باشد.',
	'ALREADY_IN_GROUP'			=> 'در حال حاضر در این گروه عضو هستید.',
	'ALREADY_IN_GROUP_PENDING'	=> 'درخواست عضویت در این گروه را داده اید.',

	'CANNOT_JOIN_GROUP'			=> 'نمی توانید در این گروه عضو شوید،فقط می توانید در گروه هایی که عضویت در آن ها آزاد است عضو شوید.',
	'CANNOT_RESIGN_GROUP'		=> 'نمی توانید از این گروه استعفا دهید،فقط می توانید از گروه های آزاد استعفا دهید.',
	'CHANGED_DEFAULT_GROUP'		=> 'گروه پیشفرض با موفقیت تغییر یافت.',

	'GROUP_AVATAR'						=> 'آواتار گروه',
	'GROUP_CHANGE_DEFAULT'				=> 'آیا از تغییر عضویتتان از گروه پیشفرض به “%s” مطمئن هستید ؟',
	'GROUP_CLOSED'						=> 'پسته شده',
	'GROUP_DESC'						=> 'توضیحات گروه',
	'GROUP_HIDDEN'						=> 'مخفی',
	'GROUP_INFORMATION'					=> 'اطلاعات گروه کاربری',
	'GROUP_IS_CLOSED'					=> 'این گروه،گروهی بسته می باشد و فقط با دعوت نامه مدیر گروه به کاربری ،آن کاربر میتواند در گروه عضو شود.',
	'GROUP_IS_FREE'						=> 'این گروه،گروهی باز می باشد و تمامی کاربران میتوانند عضو شوند.',
	'GROUP_IS_HIDDEN'					=> 'این گروه،گروهی مخفی است و فقط اعضای گروه میتوانند لیست اعضا را ببینند.',
	'GROUP_IS_OPEN'						=> 'این گروه،گروهی باز میباشد و تمامی کاربران میتوانند عضو شوند.',
	'GROUP_IS_SPECIAL'					=> 'این گروه،گروهی ویژه میباشد که به وسیله مدیر تالار مدیریت میگردد.',
	'GROUP_JOIN'						=> 'عضویت در گروه',
	'GROUP_JOIN_CONFIRM'				=> 'آیا از عضویت در گروه انتخاب شده مطمئن هستید ؟',
	'GROUP_JOIN_PENDING'				=> 'درخواست عضویت در گروه',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'آیا از ارسال درخواست نامه برای عضویت در این گروه مطمئن هستید ؟',
	'GROUP_JOINED'						=> 'با موفقیت در گروه انتخاب شده عضو شدید',
	'GROUP_JOINED_PENDING'				=> 'درخواست نامه عضویت در گروه با موفقیت ارسال شد.منتظر تایید از جانب مدیر گروه باشید.',
	'GROUP_LIST'						=> 'مدیریت کاربران',
	'GROUP_MEMBERS'						=> 'اعضای گروه',
	'GROUP_NAME'						=> 'نام گروه',
	'GROUP_OPEN'						=> 'باز',
	'GROUP_RANK'						=> 'رتبه گروه',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'لغو عضویت در گروه',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'آیا از لغو عضویت در گروه مطمئن هستید ؟',
	'GROUP_RESIGN_PENDING'				=> 'لغو عضویت در گروه مورد انتظار',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'آیا از لغو عضویت در گروه مورد انتظار مطمئن هستید ؟',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'با موفقیت از گروه انتخاب شده حذف شدید.',
	'GROUP_RESIGNED_PENDING'			=> 'انتظار عضویتتان در گروه با موفقیت از گروه حذف شد.',
	'GROUP_TYPE'						=> 'نوع گروه',
	'GROUP_UNDISCLOSED'					=> 'گروه مخفی',
	'FORUM_UNDISCLOSED'					=> 'مدیریت انجمن های مخفی',

	'LOGIN_EXPLAIN_GROUP'	=> 'برای مشاهده جزئیات گروه باید وارد شوید.',

	'NO_LEADERS'					=> 'مدیر گروهی نیستید.',
	'NOT_LEADER_OF_GROUP'			=> 'عملیات مشخص شده صورت نگرفت زیرا مدیر گروه نیستید',
	'NOT_MEMBER_OF_GROUP'			=> 'عملیات درخواست شده صورت نگرفت،زیرا هنوز در ان گروه عضو نیستید و یا عضویت شما عنوز تایید نشده است.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'اجازه لغو عضویت از گروه پیشفرضتان را ندارید',
	
	'PRIMARY_GROUP'		=> 'گروه اولیه',

	'REMOVE_SELECTED'		=> 'حذف انتخاب شده ها',

	'USER_GROUP_CHANGE'			=> 'از گروه “%1$s” به “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'تنزیل رتبه ی مدیریت',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'آیا از تنزیل رتبه مدیریت از گروه مشخص شده مطمئن هستید ؟',
	'USER_GROUP_DEMOTED'		=> 'با موفقیت از گروه مشخص شده تنزیل شدید.',
));

?>