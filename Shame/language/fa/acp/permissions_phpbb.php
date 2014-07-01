<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [persian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'عملیات',
		'content'		=> 'محتوا',
		'forums'		=> 'انجمن ها',
		'misc'			=> 'متفرقه',
		'permissions'	=> 'سطوح دسترسی',
		'pm'			=> 'پیغام های خصوصی',
		'polls'			=> 'نظرسنجی ها',
		'post'			=> 'پست',
		'post_actions'	=> 'عملیات پست',
		'posting'		=> 'ارسالات',
		'profile'		=> 'پروفایل',
		'settings'		=> 'تنظیمات',
		'topic_actions'	=> 'عملیات موضوعات',
		'user_group'	=> 'کاربران و گروه ها',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'سطوح دسترسی کاربران',
		'a_'			=> 'سطوح دسترسی مدیران',
		'm_'			=> 'سطوح دسترسی مدیران انجمن ها',
		'f_'			=> 'سطوح دسترسی انجمن',
		'global'		=> array(
			'm_'			=> 'سطوح دسترسی مدیران انجمن های سراسری',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'می تواند پروفایل ها،لیست افراد آنلاین و لیست اعضا را ببیند', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'می تواند نام کاربری را تغییر دهد', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'می تواند کلمه عبور را تغییر دهد', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'می تواند آدرس ایمیل را تغییر دهد', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'می تواند آواتار را تغییر دهد', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'می تواند گروه کاربری پیشفرض را تغییر دهد', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'می تواند فایل پیوست ارسال کند', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'می تواند فایل ها را بارگیری کند', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'می تواند پیش نویس ها را ذخیره کند', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'می تواند سانسور کلمات را غیرفعال کند', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'می تواند از امضا استفاده کند', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'می تواند پیغام خصوصی ارسال کند', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'می تواند یک پیغام خصوصی را به چندین کاربر ارسال کند', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'می تواند یک پیغام خصوصی را به گروه ها ارسال کند', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'می تواند پیغام های خصوصی را بخواند', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'می تواند پیغام های خصوصی خودش را ویرایش کند', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'می تواند پیغام های خصوصی خودش را از پوشه ها حذف کند', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'می تواند پیغام خصوصی ریافت شده را به دیگران ارسال کند', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'می تواند پیغام خصوصی را ایمیل کند', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'می تواند از پیغام خصوصی پرینت بگیرد', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'می تواند همراه با پیغام خصوصی پیوست ارسال کند', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'می تواند فایل ها را از پیغام خصوصی بارگیری کند', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'می تواند از BBCode در پیغام خصوصی استفاده کند.', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'می تواند در پیغام های خصوصی از شکلک ها استفاده کند', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'می تواند از تگ BBCode [img] در پیغام های خصوصی استفاده کند', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'می تواند از تگ BBCode [flash] در پیغام های خصوصی استفاده کند', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'می تواند ایمیل ارسال کند', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'می تواند پیغام فوری ارسال کند', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'می تواند محدودیت زمانی ارسالات را لغو کند', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'می تواند حالت آنلاین بودن را مخفی کند', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'می تواند کاربران آنلاین مخفی را مشاهده کند', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'می تواند در تالار جستجو کند', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'می تواند انجمن را ببیند', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'می تواند انجمن را بخواند', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'می تواند موضوع جدیدی شروع کند', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'می تواند به موضوعات پاسخ دهد', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'می تواند از آیکون های پست/موضوع استفاده کند', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'می تواند اطلاعیه ارسال کند', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'می تواند موضوع مهم ارسال کند', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'می تواند نظرسنجی ایجاد کند', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'می تواند به نظرسنجی ها رأی دهد', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'می تواند رأی خود را تغییر دهد', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'می تواند فایل پیوست ارسال کند', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'می تواند فایل ها را بارگیری کند', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'می تواند از امضا استفاده کند', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'می تواند از BBCode استفاده کند', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'می تواند از شکلک ها استفاده کند', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'می تواند از تگ BBCode [img] استفاده کند', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'می تواند از تگ BBCode [flash] استفاده کند', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'می تواند پست های خودش را ویرایش کند', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'می تواند پست های خودش را حذف کتد', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'می تواند مضوع های خودش را قفل کند', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'می تواند موضوعات را بامپ (Bump) کند', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'می تواند پست ها را گزارش دهد', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'می تواند در انجمن عضو شودm', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'می تواند موضوعات را پرینت کند', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'می تواند موضوعات را ایمیل کند', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'می تواند رد انجمن جستجو کند', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'می تواند محدودیت زمانی را لغو کند', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'افزایش شمارنده پست<br /><em>لطفا توجه داشته باشید که این گزینه فقط در پست های جدید مؤثر است</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Can post without approval', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'می تواند پست ها را ویرایش کند', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'می تواند پست ها را حذف کند', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'می تواند پست ها را تأیید کند', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'می تواند گزارش ها را حذف کند و یا ببندد', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'می تواند نویسنده پست را تغییر دهد', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'می تواند موضوعات را انتقال دهد', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'می تواند موضوعات را قفل کند', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'می تواند موضوعات را دو تکه کند', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'می تواند موضوعات را ادغام کند', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'می تواند جزئیات پست ها را ویرایش کند', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'می تواند هشدار بفرستد<br /><em>این تنظیم سراسری است و وابسته به انجمن ها نیست</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'می تواند تحریم ها را مدیریت کند<br /><em>این تنظیم سراسری می باشد و وابسته به انجمن نیست</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'می تواند تنظیمات تالار را تغییر دهد/بروزرسانی ها را کنترل کند', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'می تواند تنظیمات سرور/ارتباطات را تغییر دهد', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'می تواند تنظیمات Jabber را تغییر دهد', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'می تواند تنظیمات php را تغییر دهد', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'می تواند انجمن ها را مدیریت کند', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'می تواند انجمن های جدیدی اضافه کند', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'می تواند انجمن ها حذف مند', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'می تواند انجمن ها را هرس کند', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'می تواند شکلک های/آیکون های موضوعات/پست ها را مدیریت کند', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'می تواند کلمات سانسور شده را تغییر دهد', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'می تواند تگ های BBCode را مشحص کند', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'می تواند تنظیمات مربوط به پیوست ها را تغییر دهد', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'می تواند کاربران را مدیریت کند<br /><em>شامل مشاهده نوع مرورگر کاربران در لیست افراد آنلاین می شود</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'می تواند کاربران را حذف/هرس کند', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'می تواند گروه ها را مدیریت کند', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'می تواند گروه های جدیدی اضافه کند', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'می تواند گروه ها را حذف کند', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'می تواند رتبه ها را مدیریت کند', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'می تواند فیلد های سفارشی پروفایل را مدیریت کند', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'می تواند نام های غیرمجاز را مدیریت کند', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'می تواند تحریم ها را مدیریت کند', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'می تواند ماسک سطوح دسترسی را مشاهده کند', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'می تواند سطوح دسترسی را برای گروه های مختلف تغییر دهد', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'می تواند سطوح دسترسی را برای کاربران مختلف تغییر دهد', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'می تواند سطوح دسترسی class را تغییر دهد', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'می تواند سطوح دسترسی class مدیران انجمن را تغییر دهد', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'می تواند سطوح دسترسی class مدیران انجمن را تغییر دهد', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'می تواند سطوح دسترسی class کاربران را تغییر دهد', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'می تواند نقش ها را مدیریت کند', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'می تواند از سطوح دسترسی دیگران استفاده کند', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'می تواند قالب ها را مدیریت کند', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'می تواند رویداد ها را مدیریت کند', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'می تواند رویداد ها را پاک کند', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'می تواند افزونه ها را مدیریت کند', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'می تواند بسته های زبانی را مدیریت کند', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'می تواند ایمیل های دسته جمعی بفرستد', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'می تواند روبات ها را مدیریت کند', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'می تواند دلایل گزارش ها را مدیریت کند', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'می تواند از پایگاه داده پشتیبانگیری کند و یا آن را بازگرداند', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'می تواند تنظیمات مرجع جستجو را مدیریت کند', 'cat' => 'misc'),
));

?>