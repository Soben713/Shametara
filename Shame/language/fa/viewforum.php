<?php
/**
*
* viewforum [persian]
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
	'ACTIVE_TOPICS'			=> 'موضوعات فعال',
	'ANNOUNCEMENTS'			=> 'اطلاعیه ها',

	'FORUM_PERMISSIONS'		=> 'سطوح دسترسی انجمن',

	'ICON_ANNOUNCEMENT'		=> 'اطلاعیه ها',
	'ICON_STICKY'			=> 'مهم',

	'LOGIN_NOTIFY_FORUM'	=> 'این انجمن ابلاغ شده است،لطفا برای مشاهده انجمن وارد شوید.',

	'MARK_TOPICS_READ'		=> 'علامت گذاری موضوعات به عنوان خوانده شده',

	'NEW_POSTS_HOT'			=> 'پست های جدید [ محبوب ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'پست های جدید [ قفل شده ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'بدون پست جدید [ محبوب ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'بدون پست جدید [ قفل شده ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'اجازه خواندن این انجمن را ندارید.',
	'NO_UNREAD_POSTS_HOT'		=> 'بدون پست خوانده شده [ محبوب ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'بدون پست خوانده شده [ قفل شده ]',

	'POST_FORUM_LOCKED'		=> 'انجمن بسته است.',

	'TOPICS_MARKED'			=> 'موضوعات این انجمن به عنوان خوانده شده علامت گذاری شد',

	'UNREAD_POSTS_HOT'		=> 'پست های خوتنده نشده [ محبوب ]',
	'UNREAD_POSTS_LOCKED'	=> 'پست های خوانده نشده [ قفل شده ]',

	'VIEW_FORUM'			=> 'مشاهده انجمن',
	'VIEW_FORUM_TOPIC'		=> '1 موضوع',
	'VIEW_FORUM_TOPICS'		=> '%d موضوع',
));

?>