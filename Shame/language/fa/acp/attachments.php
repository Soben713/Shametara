<?php
/**
*
* acp_attachments [pesian]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'در این بخش میتوانید تنظیمات موجود برای پیوست ها را ویرایش و بررسی کنید.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'در اینجا میتوانید گروه های الحاقات را اضافه،ویرایش و یا حذف کنید. در گزینه ها میتوانید تنظیمات بیشتری بر روی الحاقات ها اعمال کنید. میتوانید روش های بارگیری را مشخص کرده و آیکون آپلود هر گروه را تایین کنید.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'در این بخش میتوانید الحاقات های مورد قبول را ویرایش کنید. برای فعال سازی الحاقات ها،لطفا به پنل مدیریت گروه الحاقات ها مراجعه کنید. به شدت توصیه میکنیم که از الحاقات های برنامه نویسی استفاده نکنید. (مانند <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, و غیره …).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'در این بخش میتوانید فایل های بدون صاحب را مشاهده کنید. این فایل ها زمانی پدیدار میشوند که کاربری فایلی را به پست پیوست کرده ولی آن پست را ارسال نمیکند. میتوانید این فایل ها را حذف کنید و یا به پست های موجود پیوست کنید. پیوست ابن فایل ها نیازمن ID پست معتبری است، باید این ID را شما وارد کنید. این کار فایل را به پستی که وارد کرده اید، پیوست میکند.',
	'ADD_EXTENSION'						=> 'اضافه کردن الحاقات',
	'ADD_EXTENSION_GROUP'				=> 'اضافه کردن گروه الحاقات',
	'ADMIN_UPLOAD_ERROR'				=> 'خطا هایی که در حین پیوست فایل رخ داد : “%s”.',
	'ALLOWED_FORUMS'					=> 'انجمن های مورد قبول',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'پذیرفتن ارسال الحاقات در انجمن های انتخاب شده (ویا اگر همه انتخاب شده باشند،در همه انجمن ها)',
	'ALLOWED_IN_PM_POST'				=> 'پذیرفته شده',
	'ALLOW_ATTACHMENTS'					=> 'پذیرفتن پیوست ',
	'ALLOW_ALL_FORUMS'					=> 'پذیرفتن همه انجمن ها',
	'ALLOW_IN_PM'						=> 'پذیرفتن در پیغام خصوصی ها',
	'ALLOW_PM_ATTACHMENTS'				=> 'پذیرفتن پیوست در پیغام های خصوصی',
	'ALLOW_SELECTED_FORUMS'				=> 'فقط انجمن هایی که در زیر انتخاب شده اند',
	'ASSIGNED_EXTENSIONS'				=> 'الحاقات تعیین شده',
	'ASSIGNED_GROUP'					=> 'گروه الحاقات تایین شده',
	'ATTACH_EXTENSIONS_URL'				=> 'الخاقات',
	'ATTACH_EXT_GROUPS_URL'				=> 'گروه های الحاقات',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'حداکثر حجم فایل',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'حداکثر حجم فایل ها،اگر 0 را وارد کنید این حجم تا مقدار قابل قبول پیکربندی php نامحدود خواهد بود.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'حداکثر حجم پیغام خصوصی',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'حداکثر حجم هر فایل که در پیغام خصوصی پیوست میشود،برای نامحدود کردن 0 را وارد کنید.',
	'ATTACH_ORPHAN_URL'					=> 'پیوست ها بدون صاحب',
	'ATTACH_POST_ID'					=> 'ID پست',
	'ATTACH_QUOTA'						=> 'سهمیه ی کلی پیوست ها',
	'ATTACH_QUOTA_EXPLAIN'				=> 'حداکثر حجم در دسترس برای پیوست ها در کل تالار، برای نامحدود کردن 0 را وارد کنید.',
	'ATTACH_TO_POST'					=> 'پیوست فایل به پست',

	'CAT_FLASH_FILES'			=> 'فایل های فلش',
	'CAT_IMAGES'				=> 'تصاویر',
	'CAT_QUICKTIME_FILES'		=> 'فایل های رسانه ای QuickTime',
	'CAT_RM_FILES'				=> 'فایل های رسانه ای RealMedis',
	'CAT_WM_FILES'				=> 'فایل های رسانه ای Windows Media',
	'CHECK_CONTENT'				=> 'کنترل فایل های پیوست',
	'CHECK_CONTENT_EXPLAIN'		=> 'بعضی از مرورگر ها ممکن هست دچار اشتباه شوند و آپلود بعضی از فایل های نامجاز را که نوع فرمت آنها (mimetype) تغییر یافته است،قبول کنند. این گزینه باعث اطمینان از این نوع فایل ها خواهد شد.',
	'CREATE_GROUP'				=> 'ایجاد گروه جدید',
	'CREATE_THUMBNAIL'			=> 'ایجاد تصویر کوچک',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'ایجاد تصویر کوچک در هر حالت ممکن',

	'DEFINE_ALLOWED_IPS'			=> 'شناسایی IP/hostname های مجاز',
	'DEFINE_DISALLOWED_IPS'			=> 'شناسایی IP/hostname غیر مجاز',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'برای مشخص کردن چندین IP و یا hostname،هر یک از آن ها را در سطر های جداگانه وارد کنید. برای مشخص کردن بازه ای از IP ها، IP آغازی و پایانی را با خط تیره (-) مشخص کنید. برای مشخص کردن کلمات از (*) استفاده کنید.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'با ادغام ماوس و صفحه کلید کامپیوتر می توانید و با کمک گرفتن از مرورگر میتوانید  IP های بیشتری را انتخاب کنید. IP های انتخاب نشده با رنگ آبی نمای داده خواهند شد.',
	'DISPLAY_INLINED'				=> 'نمایش خطی تصاویر',
	'DISPLAY_INLINED_EXPLAIN'		=> 'اگر تصویر پیوست بر روی نه تنظیم شده باشد،پیوست ها به صورت لینک نمایش داده خواهند شد.',
	'DISPLAY_ORDER'					=> 'ترتیب نمایش پیوست ها',
	'DISPLAY_ORDER_EXPLAIN'			=> 'نمایش پیوست ها به ترتیب زمان',

	'EDIT_EXTENSION_GROUP'			=> 'ویرایش گروه الحاقات',
	'EXCLUDE_ENTERED_IP'			=> 'در صورت فعال کردن این گزینه، IP/hostname وارد شده محسوب نخواهند شد.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'جدا کردن IP/hostname ها مجاز از سایر IP ها',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'جدا کردن IP/hostname های غیر مجاز از سایر IP ها',
	'EXTENSIONS_UPDATED'			=> 'الحاقات با موفقیت بروز شدند.',
	'EXTENSION_EXIST'				=> 'الحاق %s در حال حاضر موجود است.',
	'EXTENSION_GROUP'				=> 'گروه الحاقات',
	'EXTENSION_GROUPS'				=> 'گروه های الحاقات',
	'EXTENSION_GROUP_DELETED'		=> 'گروه الحاقات با موفقیت حذف شد.',
	'EXTENSION_GROUP_EXIST'			=> 'گروه الحاق %s در حال حاضر موجود می باشد',

	'EXT_GROUP_ARCHIVES'			=> 'آرشیو',
	'EXT_GROUP_DOCUMENTS'			=> 'اسناد',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'فایل های قابل بارگیری',
	'EXT_GROUP_FLASH_FILES'			=> 'فایل های فلش',
	'EXT_GROUP_IMAGES'				=> 'تصاویر',
	'EXT_GROUP_PLAIN_TEXT'			=> 'متن ساده',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'GO_TO_EXTENSIONS'		=> 'به صفحه مدیریت الحاقات رجوع کنید.',
	'GROUP_NAME'			=> 'نام گروه',

	'IMAGE_LINK_SIZE'			=> 'ابعاد تصویر لینک',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'اگر تصویر نمایش داده شده بزرگتر از قالب تالار باشد در آن صورت به صورت لینکی مکایش داده خواهد شد. برای غیر فعال کردن این ویژگی، داده های 0 px و 0 px را وارد کنید',
	'IMAGICK_PATH'				=> 'Imagemagick مسیر ',
	'IMAGICK_PATH_EXPLAIN'		=> 'مسیر کامل به نرم افزار تبدیل Imagemagic. برای مثال <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'حداکثر تعداد پیوست در هر پست',
	'MAX_ATTACHMENTS_PM'			=> 'حداکثر تعداد پیوست در هر پیغام خصوصی',
	'MAX_EXTGROUP_FILESIZE'			=> 'حداکثر حجم فایل',
	'MAX_IMAGE_SIZE'				=> 'حداکثر ابعاد تصویر',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'حداکثر ابعاد پیوست تصویر.برای غیر فعال کردن کنترل ابعاد، در هر دو فیلد 0 px و 0 px وارد کنید.',
	'MAX_THUMB_WIDTH'				=> 'حداکثر عرض تصویر کوچک به پیکسل',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'تصویر کوچک ساخته شده از این ابعاد تجاوز نخواهد کرد',
	'MIN_THUMB_FILESIZE'			=> 'حداقل حجم تصویر کوچک',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'برای تصاویر کوچکتر از این، تصویر کوچک ایجاد نمی شود',
	'MODE_INLINE'					=> 'به ترتیب',
	'MODE_PHYSICAL'					=> 'فیزیکی',

	'NOT_ALLOWED_IN_PM'			=> 'فقط در پست ها مورد قبول است',
	'NOT_ALLOWED_IN_PM_POST'	=> 'مورد قبول نیست',
	'NOT_ASSIGNED'				=> 'شناسایی نشد',
	'NO_EXT_GROUP'				=> 'هیچکدام',
	'NO_EXT_GROUP_NAME'			=> 'نام گروهی وارد نشده است.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'گروه الحاقی انتخاب نشده است.',
	'NO_FILE_CAT'				=> 'هیچکدام',
	'NO_IMAGE'					=> 'تصویری نیست',
	'NO_THUMBNAIL_SUPPORT'		=> 'پشتیبانی از تصویر کوچک غیرفعال شده است. برای عملکرد کامل باید از افزونه GD پشتیبانی شود و یا Image magic فعال باشد که هیچکدام از این دو مورد یافت نشد.',
	'NO_UPLOAD_DIR'				=> 'دایرکتوری upload انتخاب شده موجود نیست',
	'NO_WRITE_UPLOAD'			=> 'دایرکتوری upload قابل نوشتن نیست،لطفا سطوح دسترسی آن را تغییر دهید تا سرور بتواند بر روی آن بنویسد.',

	'ONLY_ALLOWED_IN_PM'	=> 'فقط در پیغام های خصوصی مورد قبول است.',
	'ORDER_ALLOW_DENY'		=> 'پذیرفتن',
	'ORDER_DENY_ALLOW'		=> 'رد کردن',

	'REMOVE_ALLOWED_IPS'		=> 'IP/hostnam های <em> مجاز </em> را حذف کرده و یا قبول کنید.',
	'REMOVE_DISALLOWED_IPS'		=> 'IP/hostnam های <em>غیر مجاز</em> را حذف کرده و یا قبول کنید.',

	'SEARCH_IMAGICK'				=> 'جستجو برای Imagemagic',
	'SECURE_ALLOW_DENY'				=> 'پذیرفتن/رد کردن لیست',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'در صورتی که بارگیری امن فعال باشد، در لیست مجاز/غیر مجاز یک <strong>لیست سفید</strong> (مجاز) و یا <strong>لیست سیاه</strong> (Deny) را مدیریت کنید.',
	'SECURE_DOWNLOADS'				=> 'فعال سازی بارگیری امن',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'اگر این گزینه فعال باشد، بارگیری ها به IP/hostname های مشخص شده محدود می شوند.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'بارگیری امن فعال نیست،تنظیمات زیر بعد از فعال شدن این ویژگی اعمال خواهند شد.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'لیست IP با موفقیت بروز شد.',
	'SECURE_EMPTY_REFERRER'			=> 'به مرجع خالی اجازه داده شود',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'بارگیری امن بر پایه ی مرجع ها شکل گرفته است. آیا می خواهید که بارگیری برای این مرجع ها در دسترس باشد ؟',
	'SETTINGS_CAT_IMAGES'			=> 'تنظیمات گروه تصویر',
	'SPECIAL_CATEGORY'				=> 'گروه خاص',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'گروه خاص از حالت های نمایش داده شده در پست متفاوت می باشد.',
	'SUCCESSFULLY_UPLOADED'			=> 'با موفقیت بروزرسانی شد.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'گروه الحاقات با موفقیت اضافه شدند.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'گروه الحاقات با موفقیت بروز شدند.',

	'UPLOADING_FILES'				=> 'آپلود فایل ها',
	'UPLOADING_FILE_TO'				=> 'آپلود فایل “%1$s” به پست شماره %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'سطح دسترسی آپلود فایل به “%s” را ندارید.',
	'UPLOAD_DIR'					=> 'دایرکتوری آپلود',
	'UPLOAD_DIR_EXPLAIN'			=> 'مسیر ذخیره پیوست ها. لطفا توجه داشته باشید که اگر این مسیر را تغییر دهید،باید فایل های پیوست کنونی را به صورت دستی به مسیر جدید انتقال دهید.',
	'UPLOAD_ICON'					=> 'آیکون آپلود',
	'UPLOAD_NOT_DIR'				=> 'محل مشخص شده برای آپلود به نظر نمی رسد که یک دایرکتوری باشد.',
));

?>