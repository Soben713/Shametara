<?php
/**
*
* recaptcha [persian]
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
	'RECAPTCHA_LANG'				=> 'fa',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'برای استفاده از recaptcha اکانتی را در <a href="http://recaptcha.net">reCaptcha.net</a> باز کنید.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'کد تایید وارد شده اشتباه می باشد.',

	'RECAPTCHA_PUBLIC'				=> 'Public reCaptcha key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'public recaptcha key در <a href="http://recaptcha.net">reCaptcha.net</a> موجود است',
	'RECAPTCHA_PRIVATE'				=> 'Private reCaptcha key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'private recaptcha key در <a href="http://recaptcha.net">reCaptcha.net</a> موجود است.',

	'RECAPTCHA_EXPLAIN'				=> 'برای جلوگیری از ورودی های خودکار،هر دو کلمه موجود در فیلد را وارد کنید.',
));

?>