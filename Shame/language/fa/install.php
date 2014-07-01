<?php
/**
*
* install [persian]
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
	'ADMIN_CONFIG'				=> 'پیکربندی مدیر',
	'ADMIN_PASSWORD'			=> 'کلمه عبور مدیر',
	'ADMIN_PASSWORD_CONFIRM'	=> 'تایید کلمه عبور مدیر',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'کلمه عبور باید بین 6 تا 30 کاراکتر باشد.',
	'ADMIN_TEST'				=> 'کنترل تنظیمات مدیر',
	'ADMIN_USERNAME'			=> 'نام کاربری مدیر',
	'ADMIN_USERNAME_EXPLAIN'	=> 'نام کاربری باید بین 3 تا 20 کاراکتر باشد. ',
	'APP_MAGICK'				=> 'پشتیبانی Imagemagic [ پیوست ها ]',
	'AUTHOR_NOTES'				=> 'یادداشت های نویسنده<br />» %s',
	'AVAILABLE'					=> 'در دسترس',
	'AVAILABLE_CONVERTORS'		=> 'تبدیل کننده های در دسترس',

	'BEGIN_CONVERT'					=> 'شروع تبدیل',
	'BLANK_PREFIX_FOUND'			=> 'بررسی جداول پایگاه داده شما نشان میدهد که هیچ پیشوندی در جداول موجود نمیباشند.',
	'BOARD_NOT_INSTALLED'			=> 'phpBB نصب نشده است.',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB Unified Convertor Framework نیازمند نسخه پیشفرض phpBB3 است. <a href="%s">شروع نصب phpBB3</a>.',	'BACKUP_NOTICE'					=> 'لطفا قبل از اجرای بروزرسانی، پشتیبانی از تالارتان تهیه کنید تا اگر مشکلی در طی این فرآیند پیش آمد، اطلاعات قابل بازیابی باشند.',	

	'CATEGORY'					=> 'گروه',
	'CACHE_STORE'				=> 'تغییر گونه',
	'CACHE_STORE_EXPLAIN'		=> 'جایگاه فیزیکی که فایل ها در آن cache میشوند. فایل سیستم ترجیح داده میشود.',
	'CAT_CONVERT'				=> 'تبدیل',
	'CAT_INSTALL'				=> 'نصب',
	'CAT_OVERVIEW'				=> 'بررسی کلی',
	'CAT_UPDATE'				=> 'بروزرسانی',
	'CHANGE'					=> 'تغییر',
	'CHECK_TABLE_PREFIX'		=> 'لطفا پیشوند جداول را کنترل کرده و دوباره امتحان کنید',
	'CLEAN_VERIFY'				=> 'تمیز کردن و تایید ساختار نهایی',
	'CLEANING_USERNAMES'		=> 'تمیز کردن متم های کاربری',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> نام کاربری تمیزی برای این :',
	'COLLIDING_USERNAMES_FOUND'	=> 'در تالار قدیمی شما نام های کاربری به هم خورده ای یافت شد. برای تکمیل فرآیند تبدیل لطفا این نام های کاربری را حذف و یا تغییر نام دهید تا بدین ترتین برای هر نام کاربری قدیمی یک نام کاربری تمیزی وجود داشته باشد.',
	'COLLIDING_USER'			=> '» کاربر id: <strong>%d</strong> نام کاربری : <strong>%s</strong> (%d پست)',
	'CONFIG_CONVERT'			=> 'تبدیل پیکربندی',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'امکان نوشتن فایل پیکربندی وجود ندارد. راه های دیگر برای ایجاد این فایل در زیر ذکر شده است.',
	'CONFIG_FILE_WRITTEN'		=> 'فایل پیکربندی نوشته شد. میتوانید به مرحله بعدی نصب بروید.',
	'CONFIG_PHPBB_EMPTY'		=> 'متغیر phpBB3 config برای “%s” خالی است.',
	'CONFIG_RETRY'				=> 'دوباره',
	'CONTACT_EMAIL_CONFIRM'		=> 'تایید ایمیل تماس',
	'CONTINUE_CONVERT'			=> 'ادامه تبدیل',
	'CONTINUE_CONVERT_BODY'		=> 'قبلا فرایند تبدیل انجام گرفته است. حال میتوانید فرآیند تبدیل جدیدی را شروع کنید و یا فرآیند انجام شده را ادامه دهید.',
	'CONTINUE_LAST'				=> 'آخرین توضیحات را ادامه بده',
	'CONTINUE_OLD_CONVERSION'	=> 'فرآیند تبدیل قبلی را ادامه بده',
	'CONVERT'					=> 'تبدیل',
	'CONVERT_COMPLETE'			=> 'فرآیند تبدیل اتمام یافت',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'با موفقیت تالارتان را به نسخه phpBB 3.0\'a تبدیل کردید،هم اکنون میتوانید وارد شوید و به <a href="../">تالارتان دسترسی پیدا کنید</a>. قبل از حذف کردن پوشه install و فعال سازی تالار، مطمئن شوید که تمامی تنظیمات با موفقیت منتقل شده اند. به یاد داشته باشید که میتوانید از <a href="https://www.phpbb.com/support/documentation/3.0/">Documentation</a> phpBB و <a href="https://www.phpbb.com/community/viewforum.php?f=46">انجمن های پشتیبانی</a>کمک بگیرید.',
	'CONVERT_INTRO'				=> 'به phpBB Unified Convertor Framework خوش آمدید',
	'CONVERT_INTRO_BODY'		=> 'در این بخش میتوانید اطلاعات را از سایر سیستم های تالار (نصب شده) انتقال دهید. لیست زیر تمامی افزونه های موجود را نمایش میدهد. اگر افزونه سیستم شما در لیست موجود نمی باشد،لطفا برای جزئیات بیشتر و بارگیری سایر افزونه های به سایتمان مراجعه کنید.',
	'CONVERT_NEW_CONVERSION'	=> 'تبدیل جدید',
	'CONVERT_NOT_EXIST'			=> 'تبدیل کننده انتخاب شده موجود نمی باشد',
	'CONVERT_OPTIONS'			=> 'گزینه ها',
	'CONVERT_SETTINGS_VERIFIED'	=> 'اطلاعات وارد شده تایید شدند،لطفا برای شروع فرآیند بر روی دکمه زیر کلیک کنید.',
	'CONV_ERR_FATAL'			=> 'خطای مهلک تبدیل ',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'در تالار قدیمی،آپلود FTP برای پیوست ها فعال می باشد. لطفا آپلود پیوست با FTP را غیر فعال کنید و مطمئن باشید که دایرکتوری مشخصی برای آپلود تایین شده است. و سپس تمام پیوست ها را به این دایرکتوری قابل دسترس آپلود کرده و تبدیل گر را دوباره فعال کنید.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'اطلاعات پیکربندی برای تبدیل گر وجود ندارد.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'اطلاعات دسترسی به انجمن دریافت نمیشود.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'گروه ها دریافت نمیشوند.',
	'CONV_ERROR_GET_CONFIG'				=> 'پیکربندی تالار بازیابی نمیشود.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'دسترسی/خواندن “%s” مقدور نیست.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'اطلاعات احزار هویت گروه ها دریافت نمیشوند.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'در جدول گروه ها درون add_bots() ناسازگاری هایی وجود دارد. - باید همگی گروه های ویژه را دستی وارد کنید.',
	'CONV_ERROR_INSERT_BOT'				=> 'قرار دادن ربات ها در جدول کاربران مقدور نیست.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'قرار دادن ربات ها در جدول ربات ها مقدور نیست.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'قرار دادن کاربران در جدول user_group مقدور نیست.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'خطای پیغام تجزیه کننده',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'قابل توجه توسعه دهندگان : باید $convertor[\'avatar_path\'] را برای استفاده %s مشخص کنید.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'مسیر مربوطه به تالار منبع مشخص نشده است.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'قابل توجه توسعه دهندگان : باید $convertor[\'avatar_gallery_path\'] را برای استفاده %s مشخص کنید.',
	'CONV_ERROR_NO_GROUP'				=> 'گروه “%1$s” در %2$s یافت نشد.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'قابل توجه توسعه دهندگان : باید $convertor[\'ranks_path\'] را برای استفاده %s مشخص کنید.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'قابل توجه توسعه دهندگان : باید $convertor[\'smilies_path\'] را برای استفاده %s مشخص کنید.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'قابل توجه توسعه دهندگان : باید $convertor[\'upload_path\'] را برای %s مشخص کنید.',
	'CONV_ERROR_PERM_SETTING'			=> 'درج/بروزرسانی سطوح دسترسی مقدور نیست.',
	'CONV_ERROR_PM_COUNT'				=> 'انتخاب پوشه شمار پیغام خصوصی مقدور نیست.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'اضافه کردن انجمن جدید به جای گروه قدیمی مقدور نیست',
	'CONV_ERROR_REPLACE_FORUM'			=> 'اضافه کردن انجمن جدید به جای انجمن قدیمی مقدور نیست.',
	'CONV_ERROR_USER_ACCESS'			=> 'دریافت تاًییدیه اطلاعات کاربران مقدور نیست.',
	'CONV_ERROR_WRONG_GROUP'			=> 'گروه “%1$s” به اشتباه در %2$s مشخص شد.',
	'CONV_OPTIONS_BODY'					=> 'این صفحه اطلاعات لازم برای دسترسی به تالار منبع را فراههم می کند. جزئیات پایگاه داده تالار قبلی را وارد کنید؛ تبدیل گر هیچ مطلبی را به پایگاه داده وارد شده اضافه نخواهد کرد،برای پایداری فرآیند تبدیل باید تالار منبع را غیرفعال کنید.',
	'CONV_SAVED_MESSAGES'				=> 'پیغام های ذخیره شده',

	'COULD_NOT_COPY'			=> 'فایل <strong>%1$s</strong> به <strong>%2$s</strong> کپی نمیشود<br /><br />لطفا کنترل کنید که دایرکتوری هدف موجود و قابل نوشته شدن است',
	'COULD_NOT_FIND_PATH'		=> 'مسیر تالار سابق شما یافت نشد، لطفا تنظیمات را کنترل کرده و دوباره امتحان کنید.<br />» %s به عنوان مسیر مشخص شده است. ',

	'DBMS'						=> 'نوع پایگاه داده',
	'DB_CONFIG'					=> 'پیکربندی پایگاه داده',
	'DB_CONNECTION'				=> 'اتصال پایگاه داده',
	'DB_ERR_INSERT'				=> ' خطا در پردازش پرس و جوی <code>INSERT</code>. ',
	'DB_ERR_LAST'				=> 'خطا در پردازش <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'خطا در پردازش <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'خطا در پردازش <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'خطا در اجرای پرس و جوی <code>SELECT</code> .',
	'DB_HOST'					=> 'نام هاست سرور (hostname) و یا DSN پایگاه داده',
	'DB_HOST_EXPLAIN'			=> 'DSN مخفف Data Source Name می باشد و مربوط به نصب ODBC هست. در PostgreSQL, از localhost برای اتصال به سرور محلی با سوکت UNIX domain استفاده کنید و از 127.0.0.1 برای اتصال به TCP استفاده کنید.',
	'DB_NAME'					=> 'نام پایگاه داده',
	'DB_PASSWORD'				=> 'کلمه عبور پایگاه داده',
	'DB_PORT'					=> 'درگاه (پورت،port) پایگاه داده',
	'DB_PORT_EXPLAIN'			=> 'این فیلد را تا زمانی که مطمئن باشید که درگاه سرور استاندارد نیست،خالی بگذارید.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'با عرض پوزش بروزرسانی این اسکریپت از نسخه  “%1$s”به قبل ممکن نیست. نسخه کنونی اسکریپت نصب شده “%2$s”می باشد. لطفا قبل از اجرای این اسکریپت آن را به نسخه های پیشین بروزرسانی کنید. کمک های مربوطه در انجمن های phpbb.com موجود است.',
	'DB_USERNAME'				=> 'نام کاربری پایگاه داده',
	'DB_TEST'					=> 'آزمایش اتصال',
	'DEFAULT_LANG'				=> 'زبان پیشفرض تالار',
	'DEFAULT_PREFIX_IS'			=> 'تبدیل گر قادر به دریافت جداول با پیشوند خاص نیست. لطفا اطمینان حاصل کنید که اطلاعات تالار قبلی را به درستی وارد کرده اید. پیشوند پیشفرض برای %1$s ،<strong>%2$s</strong>می باشد.',
	'DEV_NO_TEST_FILE'			=> 'مقداری برای متغیر test_file در تبدیل گر وارد نشده است. اگر کاربری از تبدیل گر هستیدنباید این خطا را ببینید.لطفا با نویسنده تبدیل گر تماس بگیرید. اگر نویسنده تبدیل گر هستید،باید نام فایلی را در تالار قبلی مشخص کنید که مسیر تایید را مشخص می کند.',
	'DIRECTORIES_AND_FILES'		=> 'دایرکتوری و نصب فایل',
	'DISABLE_KEYS'				=> 'کلید ها بسته میشوند',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'پشتیبانی راه دور FTP [ نصب ]',
	'DLL_GD'					=> 'GD گرافیک پشتیبانی [ تایید مجازی ]',
	'DLL_MBSTRING'				=> 'Multi-byte پشتیبانی کاراکتر',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ همراه ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL همراه افزونه MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML پشتیبانی [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib پشتیبانی فشرده ساز [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'پیکرباندی بارگیری',
	'DL_CONFIG_EXPLAIN'			=> 'ممکن است بخواهید config.php را به کامپیوترتان بارگیری کنید. در این صورت باید این فایل را به طور دستی آپلود کرده و جایگزین config.php موجود در دایرکتوری phpBB 3 کنید. لطفا توجه داشته باشید که با فرمت ASCII آپلود کنید.(اگر از نحوه دریافت این فایل مطمئن نیستید،به مستندات برنامه FTP تان مراجعه کنید).هنگامی که config.php آپلود کردید بر روی “انجام شد” کلیک کنید تا به مرحله بعد هدایت شوید.',
	'DL_DOWNLOAD'				=> 'بارگیری',
	'DONE'						=> 'انجام شد',

	'ENABLE_KEYS'				=> 'فعال سازی مجدد کلید ها. ممکن است کمی طول بکشد.',

	'FILES_OPTIONAL'			=> 'فایل ها و دایرکتوری های اختیاری',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>اختیاری</strong> - این فایل ها،دایرکتوری ها و سطوح دسترسی ضروری نمیباشند. اگر این فایل ها وجود نداشته باشند و یا قابل نوشتن نباشند،سیستم از تکنیک های متفاوتی برای ایجاد آنها استفاده خواهد کرد. با این وجود، حضور این اطلاعات سرعت نصب را افزایش خواهد داد.',
	'FILES_REQUIRED'			=> 'فایل ها و دایرکتوری ها',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>ضروری</strong> - برای عملکرد کامل phpBB وجود و قابل نوشتن بودن این فایل ها و دایرکتوری ها ضروری است. اگر “یافت نشد” را ببینید،این بدان معنا است که فایل و یا دایرکتوری مورد نظر باید ایجاد شود. اگر “غیر قابل نوشتن” را ببینید،این بدان معنا است که باید سطح دسترسی فایل و یا دایرکتوری را عوض کنید تا قابل نوشتن باشند.',
	'FILLING_TABLE'				=> 'جدول پر شده <strong>%s</strong>',
	'FILLING_TABLES'			=> 'جدول های پر شده',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'دیگر phpBB از Firebird/Interbase تا نسخه 2.1 پشتیبانی نمی کند.لطفا حداقل از نسحه 2.1.0 استفاده کنید.',

	'FINAL_STEP'				=> 'پردازش مرحله آخر',
	'FORUM_ADDRESS'				=> 'آدرس تالار',
	'FORUM_ADDRESS_EXPLAIN'		=> 'این آدر URL تالار سابقتان می باشد، برای مثال <samp>http://www.example.com/phpBB2/</samp>. اگر در این فیلد آدرسی وارد شود و خالی باقی نماند، آدرس وارد شده جایگزین آدرس قبلی خواهد شد و تمامی پیغام های،پیغام های خصوصی و امضا ها مطابق آن تنظیم خواهند شد.',
	'FORUM_PATH'				=> 'مسیر تالار',
	'FORUM_PATH_EXPLAIN'		=> 'این <strong>مسیری است که از نصب کنونی phpBB</strong> به مسیر <strong>مرتبط با تالار قبلیتان وصل میشود.</strong>.',
	'FOUND'						=> 'یافت شد',
	'FTP_CONFIG'				=> 'پیکربندی انتقال به وسیله FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB وجود ماژول FTP در این سرور را یافت کرده است.ممکن است بخواهید فایل config.php را به این وسیله نصب کنید. برای این کار باید موارد زیر را فراهم کنید. به یاد داشته باشید که کلمه عبور و نام کاربری،همان کلمه عبور و نام کاربری سرورتان است. .(اگر از این موارد آگاهی کامل ندارید،با شرکت هاستینگ خود تماس بگیری)',
	'FTP_PATH'					=> 'مسیر FTP',
	'FTP_PATH_EXPLAIN'			=> 'این مسیری است از روت (root) تا phpBB. برای مثال .<samp>htdocs/phpBB3/</samp>',
	'FTP_UPLOAD'				=> 'آپلود',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'پیکربندی ابتدایی',
	'INITIAL_CONFIG_EXPLAIN'	=> 'سیستم نصب به این نتیجه رسیده است که سرور شما میتواند phpBB را اجرا کند. ولی ابتدا باید اطلاعات مشخصی را وارد کنید. اگر از نحوه اتصال به پایگاه داده اطلاعی ندارید،با شرکت هاستینگ خود تماس بگیرید. .(در وحله اوِل) و یا از انجمن های پشتیبانی phpBB استفاده کنید. قبل از ورود اطلاعات از درستی آن ها اطمینان حاصل کنید.',
	'INSTALL_CONGRATS'			=> 'تبریک !',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		با موفقیت phpBB %1$s را نصب کردید. با انتخاب یکی از گزینه های زیر به مرحله بعدی بروید :</p>
		<h2>تبدیل تالار موجود به phpBB3 </h2>
		<p>تبدیل گر phpBB از تبدیل phpBB2 و سایر تالار ها به phpBB3 پشتیبانی می کند. اگر تالاری دارید که میخواهید آن را تبدیل کنید، لطفا <a href="%2$s">به تبدیل گر مراجعه کنید</a>.</p>
		<h2>با phpBB3 راه خود ادامه دهید !</h2>
		<p>بعد از کلیک بر روی یکی از دو گزینه زیر به صفحه کنترل پنل مدیریت هدایت خواهید شد که در آنجا با فرمی رو به رو میشوید. اگر این فرم را پر کنید از شما سپاسگزار خواهیم شد.بعد از همه این ها باید کمی وقت صرف کنید تا با گزینه های مدیریت آشنا شوید. به یا داشته باشید که میتوانید از <a href="https://www.phpbb.com/support/documentation/3.0/">مستندات</a>, <a href="%3$s">README</a> و <a href="https://www.phpbb.com/community/viewforum.php?f=46">انجمن های پشتیبانی</a> کمک بگیرید. </p><p><strong>لطفا قبل از استفاده از تالا، پوشه install را حذف،تغییرنام و یا انتقال دهید. اگر این پوشه موجود باشد،فقط بخش کنترل پنل مدیر در دسترس خواهد بود.</strong>',
	'INSTALL_INTRO'				=> 'به نصب خوش آمدید',

	'INSTALL_INTRO_BODY'		=> 'در این بخش می توانید phpBB را در سرورتان نصب کنید.</p><p>برای ادامه مراحل، به تنظیمات پایگاه داده نیاز خواهید داشت. اگر از تنظیمات پایگاه داده اطلاعی ندارید،لطفا با شرکت هاستینگ خود تماس بگیرید تا شما را راهنمایی کنند. بدون این تنظیمات نمیتوانید مراحل نصب را تکمیل کنید؛به این موارد نیاز دارید :</p>

	<ul>
		<li>نوع پایگاه داده - پایگاه داده ای که از آن استفاده میکنید.</li>
		<li>نام هاست سرور پایگاه داده (database hostname) و یا DSN - آدرس سرور پایگاه داده.</li>
		<li>بندرگاه (پورت،port) - پورت سرور پایگاه داده .(اغلب موارد به این گزینه نیاز نیست)</li>
		<li>نام پایگاه داده - نام پایگاه داده در سرور</li>
		<li>نام کاربری و کلمه عبور پایگاه داده - اطلاعات ورود برای دسترسی به پایگاه داده.</li>
	</ul>

	<p><strong>توجه :</strong> اگر نصب را با استفاده از SQLite انجام میدهید، باید مسیر کامل به پایگاه داده را در فیلد DSN وارد کنید و فیلد های کلمه عبور و نام کاربری را خالی بگذارید. برای دلایل امنیتی باید مطمئن باشید که پایگاه داده در محلی ذخیره نشده باشد که از وب قابل دسترسی باشد.</p>

	<p>phpBB این پایگاه های داده را پشتیبانی می کند :</p>
	<ul>
		<li>MySQL 3.23 یا بالاتر (MySQLi پشتیبانی)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 یا بالاتر (به طور مستقیم و یا به وسیله ی ODBC)</li>
		<li>MS SQL Server 2005 یا بالاتر (native)</li>
		<li>Oracle</li>
	</ul>

	<p>فقط پایگاه های داده پشتیبان شده در سرورتان نمایش داده خواهند شد.',
	'INSTALL_INTRO_NEXT'		=> 'برای شروع نصب،لطفا بر روی دکمه زیر کلیک کنید.',
	'INSTALL_LOGIN'				=> 'ورود',
	'INSTALL_NEXT'				=> 'مرحله بعد',
	'INSTALL_NEXT_FAIL'			=> 'بعضی از آزمایش ها با شکست روبرو شد، قبل از رفتن به مرحله بعد،باید این مشکلات را برطرف کنید. نتیجه نصب ناقص میتواند نا موفق باشد.',
	'INSTALL_NEXT_PASS'			=> 'تمامی مراحل آزمون های ابتدایی موفقیت آمیز بود.میتوانید به مرحله بعدی بروید. اگر بعضی سطوح دسترسی،ماژول ها و ... را تغییر دادید میتواند از طریق زیر آزمون را دوباره انجام دهید.',
	'INSTALL_PANEL'				=> 'پنل نصب',
	'INSTALL_SEND_CONFIG'		=> 'Unfortunately phpBB could not write the configuration information directly to your config.php. This may be because the file does not exist or is not writable. A number of options will be listed below enabling you to complete installation of config.php.',
	'INSTALL_START'				=> 'شروع نصب',
	'INSTALL_TEST'				=> 'آزمون دوباره',
	'INST_ERR'					=> 'خطای نصب',
	'INST_ERR_DB_CONNECT'		=> 'اتصال به پایگاه زیر ممکن نیست.خطا های زیر را کنترل کنید.',
	'INST_ERR_DB_FORUM_PATH'	=> 'فایل پایگاه داده مشخص شده در دایرکتوری تالار قرار دارد. این فایل را باید در مکانی قرار دهید که از وب قابل دسترس نباشد.',	'INST_ERR_DB_INVALID_PREFIX'=> 'پیشوند وارد شده معتبر نمی باشد، پیشوند ها باید فقط شامل حروف باشند و اعداد و کاراکتر ها مورد قبول نیستند.',
	'INST_ERR_DB_NO_ERROR'		=> 'خطایی روی نداد.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'نسخه MYSQL گزینه  نصب شده در این دستگاه با “MySQL همراه با افزونه MySQLi ” که انتخاب کرده اید، ناسازگار است. لطفا گزینه “MySQL” را انتخاب کنید.',
	'INST_ERR_DB_NO_SQLITE'		=> 'نسخه افزونه نصب شده SQLite قدیمی می باشد. باید حداقل به نسخه 2.8.2 بروزرسانی شود.',
	'INST_ERR_DB_NO_ORACLE'		=> 'نسخه Oracle نصب شده در این ماشین از شما میخواهد تا پارامتر <var>NLS_CHARACTERSET</var> به <var>UTF8</var> تغییر دهید.سیستم نصب را به 9.2+ ارتقاء دهید و یا پارامتر را تغییر دهید.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'نسخه Firebird نصب شده در دستگاه، قدیمی تر از 2.1 می باشد، لطفا آن را به نسخه جدیدتری ارتقاء دهید.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'پایگاه انتخاب شده برای دارای صفحه ای کمتر از حجم 8192 است، باید حداقل 8192 باشد.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'پایگاه داده انتخاب شده در قالب (encoding) <var>UNICODE</var> یا <var>UTF8</var> ایجاد شده است. لطفا نصب پایگاه داده در قالب (encoding) <var>UNICODE</var> یا <var>UTF8</var> امتحان کنید.',
	'INST_ERR_DB_NO_NAME'		=> 'نام پایگاه داده مشخص نشده است.',
	'INST_ERR_EMAIL_INVALID'	=> 'آدرس ایمیل وارد شده معتبر نمی باشد.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'دو ایمیل وارد شده یکسان نمیباشند.',
	'INST_ERR_FATAL'			=> 'خطای مهلک نصب',
	'INST_ERR_FATAL_DB'			=> 'خطای مهلک و غیر قابل اصلاح پایگاه داده روی داد. شاید به این دلیل باشد که کاربر مشخص شده سط دسترسی برای <code>CREATE TABLES</code> یا <code>INSERT</code> اطلاعات و ... را ندارد. در قسمت زیر میتوانید جزئیاتی را مشاهده کنید. لطفا در وحله اول با شرکت هاستینگ خود تماس بگیرید،میتوانید به انجمن های پشتیبانی phpBB هم مراجعه کنید.',
	'INST_ERR_FTP_PATH'			=> 'اعمال تغییر در دایرکتوری وارد شده مقدور نیست،لطفا مسیر وارد شده را کنترل کنید.',
	'INST_ERR_FTP_LOGIN'		=> 'ورد به سرور FTP صورت نگرفت. نام کاربری و کلمه عبور را کنترل کنید.',
	'INST_ERR_MISSING_DATA'		=> 'باید همگی فیلد های موجود در این بلوک را پر کنید.',
	'INST_ERR_NO_DB'			=> 'بارگذاری ماژول PHP در این نوع پایگاه داده مقدور نیست.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'دو کلمه عبور وارد شده یکسان نمیشوند.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'کلمه عبور وارد شده بسیار طولانی می باشد. حداکثر درازای کلمه عبور باید 30 کاراکتر باشد.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'کلمه عبور وارد شده بسیار کوتاه می باشد. حداقل درازای کلمه عبور باید 6 کاراکتر باشد.',
	'INST_ERR_PREFIX'			=> 'جداولی با این پیشوند موجود می باشد،لطفا آن را تغییر دهید.',
	'INST_ERR_PREFIX_INVALID'	=> 'پیشوند انتخاب شده برای پایگاه داده شما معتبر نمی باشد. لطفا یکی دیگر را امتحان کنید،بعضی کاراکتر ها مانند خط تیره (-) را حذف کنید.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'پیشوند انتخاب شده بسیار طولانی است. حداکثر کاراکتر مجاز %d می باشد.',
	'INST_ERR_USER_TOO_LONG'	=> 'نام کاربری وارد شده بسیار طولانی می باشد. حداکثر درازا 20 کاراکتر می باشد.',
	'INST_ERR_USER_TOO_SHORT'	=> 'نام کاربری وارد شده بسیار کوتاه می باشد. حداقل کااکتر، 3 می باشد.',
	'INVALID_PRIMARY_KEY'		=> 'کلید اولیه غیر معتبر : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'لطفا توجه داشته باشید که ممکن است مدتی طول بکشد.... لطفا اسکریپت را توقف نکنید.',

	// mbstring
	'MBSTRING_CHECK'						=> 'کنترل افزونه <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>ضروری</strong> - <samp>mbstring</samp> افزونه PHP است که توابع رشته ای چند بایتی ایجاد می کند. بعضی از ویژگی های mbstring با phpBB سازگار نیست و باید غیرفعال باشد.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'تابع بارگذاری بیش از حد',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> باید به 0 یا 4 تنظیم شده باشد.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'قالب بندی (encoding) شفاف کاراکتر',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> باید به 0 تنظیم شده باشد.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> باید به <samp>pass</samp> تنظیم شده باشد.',
	'MBSTRING_HTTP_OUTPUT'					=> 'تبدیل کاراکتر محصول HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> باید به <samp>pass</samp> نظیم شده باشد.',

	'MAKE_FOLDER_WRITABLE'		=> 'لطفا اطمینان حاصل کنید که این پوشه موجود و توسط سرور قابل نوشتن است :<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'لطفا اطمینان حاصل کنید که این پوشه ها موجود و توسط سرور قابل نوشتن هستند :<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'طرح MYSQL شما برای phpBB منسوخ می باشد. phpBB طرحی را برای MySQL 3.x/4.x تشخیص داده است. ولی سرور در MYSWL %2$s اجرا میشود.<br /><strong>قبل از انجام فرآیند بروزرسانی، باید طرح (schema) را ارتقاء دهید</strong><br /><br />لطفا به <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a> مراجعه کنید. اگر مشکل ادامه داشت، لطفا با <a href="https://www.phpbb.com/community/viewforum.php?f=46">انجمن های پشتیبانی ما</a> تماس بگیرید.',

	'NAMING_CONFLICT'			=> 'تضاد در نام گذاری : %s و %s با هم تضاد دارند.<br /><br />%s',
	'NEXT_STEP'					=> 'اقدام به مرحله بعدی',
	'NOT_FOUND'					=> 'یافت نشد',
	'NOT_UNDERSTAND'			=> ' %s #%d درک نمیشود، جدول %s (“%s”)',
	'NO_CONVERTORS'				=> 'تبدیل گری برای استفاده در دسترس نیست',
	'NO_CONVERT_SPECIFIED'		=> 'تبدیل گری مشخص نشده است.',
	'NO_LOCATION'				=> 'مکان تشخیش داده نشد. اگر میدانید که Imagemagick نصب شده است، میتوانید بعدا در کنترل پنل مدیریت مسیر آن را وارد کنید.',
	'NO_TABLES_FOUND'			=> 'No tables found.',

	'OVERVIEW_BODY'				=> 'به phpBB3 خوش آمدید !<br /><br />phpBB™ محبوب ترین تالار بازمتن در سطح جهانی است. phpBB3 آخرین محصول بسته ای است که ساخت آن از سال 2000 شروع شده است. phpBB3 مانند اجدادش،غنی از امکانات است و کاربر پسند می باشد، phpBB3 به طور کامل توسط تیم پشتیبانی phpBB پشتیبانی میشود. phpBB3 تا حد زیادی همه امکاناتی را که phpBB2 را محبوب کرده بود را ارتقاء داده و بعضی امکاناتی را که در نسخه های قبلی وجود نداشت،اضافه کرده است. امیدواریم فراتر از انتظارات شما را برآورده کند.<br /><br />این سیستم نصب شما را در نصب phpBB3 ، بروزرسانی آن به آخرین نسخه phpBB3 و تبدیل سایر سیستم های تالارگفتگو (شامل phpBB2 ) به phpBB3 راهنمایی خواهد کرد. برای اطلاعات بیشتر به  <a href="../docs/INSTALL.html"> راهنمای نصب</a> مراجعه کنید. <br /><br />برای خواندن لایسنس phpBB لطفا گزینه مربوط را در منوی کناری انتخاب کنید. برای ادامه از قسمت بالا گزینه مناسب را انتخاب کنید.(نصب یا تبدیل)',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 پشتیبانی',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'اگر PHP با UTF-8 سازگار نباشد و از افزونه PCRE پشتیبانی نکند،در آن صورت phpBB  .<strong>اجرا نمی شود</strong>',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'تابع phpBB getimagesize() در دسترس است',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>ضروری</strong> - برای این که phpBB عملکرد درستی داشته باشد، باید تابع getimagesize در دسترس باشد.',
	'PHP_OPTIONAL_MODULE'			=> 'ماژول های اختیاری',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>اختیاری</strong> - این ماژول ها و یا برنامه ها اختیاری میباشند. با این وجود اگر فعال باشند،ویژگی های بیشتری در دسترس خواهد بود.',
	'PHP_SUPPORTED_DB'				=> 'پایگاه های داده پشتیبانی شده',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>ضروری</strong> - حداقل باید یک پایگاه داده در سرور پشتیبانی شود. اگر هیچ ماژول پایگاه داده ای نشان داده نشود،برای فعال سازی و جزئیات باید با شرکت خدمات هاستینگ خود تماس بگیرید. ویا توضیحات مربوطه را در مستندات PHP بخوانید. ',
	'PHP_REGISTER_GLOBALS'			=> 'تنظیم PHP <var>register_globals</var> غیرفعال است',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'اگر این گزینه فعال باشد،phpBB اجرا خواهد شد ولی در صورت امکان، به دلایل امنیتی بهتر است register_globals در نصب phpBB غیر فعال شود.',
	'PHP_SAFE_MODE'					=> 'حالت امن',
	'PHP_SETTINGS'					=> 'نسخه PHP و تنظیمات',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>ضروری</strong> - برای نصب phpBB باید حداقل نسخه 4.3.3 PHP بر روی سرور نصب باشد. اگر در قسمت زیر <var>حالت امن</var> نمایش داده شود، PHP در این حالت نصب خواهد شد. این ویژگی به مدیریت از راه دور و مواردی از این قبیل محدودیت هایی اجرا خواهد کرد.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'گزینه PHP <var>allow_url_fopen</var> فعال است',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>اختیاری</strong> - این گزینه اختیاری است،با این وجود عدم وجود این گزینه موجب میشود تا بعضی از ویژگی های phpBB مانند آواتار سایت-بسته به درستی عمل نکند. ',
	'PHP_VERSION_REQD'				=> 'نسخه PHP >= 4.3.3',
	'POST_ID'						=> 'ID پست',
	'PREFIX_FOUND'					=> 'بررسی جداول پایگاه داده نشان می دهد که استفاده از پیشوند <strong>%s</strong> در فرآیند نصب معتبر می باشد.',
	'PREPROCESS_STEP'				=> 'اجرای پیش پردازش تابع ها/پرس و جو ها (queries)',
	'PRE_CONVERT_COMPLETE'			=> 'همه مراحل پیش پردازش با موفقیت اتمام یافت. ممکن است بخواهید مراحل اصلی پرداش تبدیل گر را شروع کنید. میتوان چند گزینه را به طور دستی تنظیم کنید. بعد از فرایند تبدیل، سطوح دسترسی را تنظیم کنید. شاخص های جستجو را که تبدیل نشده اند را بازسازی کنید و اطمینان حاصل کنید که فایل ها به درستی کپی شده اند، برای مثال آواتار ها و شکلک ها. ',
	'PROCESS_LAST'					=> 'پردازش بیانیه ی قبلی',

	'REFRESH_PAGE'				=> 'برای ادامه فرآیند تبدیل،صفحه را مجددا بارگزاری کنید. ',
	'REFRESH_PAGE_EXPLAIN'		=> 'اگر بله انتخاب شود،تبدیل گر بعد از اتمام هر مرحله صفحه را به طور خودکار مجددا بارگیری خواهد کرد. اگر این اولین باری است که از تبدیل گر استفاده میکنید و فقط میخواهید از این بخش به عنوان آزمایش استفاده کنید،به شما توصیه میکنیم که نه را انتخاب کنید. و هرگونه خطای موجود را تشخیص دهید',
	'REQUIREMENTS_TITLE'		=> 'سازگری نصب',
	'REQUIREMENTS_EXPLAIN'		=> 'قبل از پردازش نصب اصلی phpBB چندین آزمایش بر روی سطوح دسترسی و فایل های سرور صورت میگیرد تا از نصب کامل phpBB اطمینان حاصل شود. لطفا نتایج را با دقت بخوانید و قبل از فرآهم کردن نتایج،به مرحله بعدی نروید. اگر میخواهید بعضی از ویژگی های جانبی را که در بلوک های مربوطه ذکر شده است؛ داشته باشید، باید آنها را نیز فرآهم کنید.',
	'RETRY_WRITE'				=> 'تلاش دوباره برای نوشتن config.php',
	'RETRY_WRITE_EXPLAIN'		=> 'میتوانید سطوح دسترسی config.php را تغییر دهید تا phpBB بتواند آن را بنویسد. بعد از اعمال این تغییرات بر روی تلاش دوباره کلیک کنید. بعد از نصب phpBB سطح دسترسی این فایل را به حالت قبل برگردانید.',

	'SCRIPT_PATH'				=> 'مسیر اسکریپت',
	'SCRIPT_PATH_EXPLAIN'		=> 'مسیری که با توجه به دامنه، phpBB در آن قرار دارد. برای مثال .<samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'انتخاب زبان',
	'SERVER_CONFIG'				=> 'پیکربندی سرور',
	'SEARCH_INDEX_UNCONVERTED'	=> 'شاخص جستجو تبدیل نشد.',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'شاخص جستجوی قبلی تبدیل نشد. جستجو همواره بی نتیجه خواهد بود. برای ایجاد شاخص جدید جستجو به کنترل پنل مدیریت بروید بر روی نگهداری کلیک کرده و سپس در زیرمنو ظاهر شده بر روی شاخص جستجو کلیک کنید.',
	'SOFTWARE'					=> 'نرم افزار تالار',
	'SPECIFY_OPTIONS'			=> 'گزینه تبدیل گر را مشخص کنید',
	'STAGE_ADMINISTRATOR'		=> 'جزئیات مدیر',
	'STAGE_ADVANCED'			=> 'تنظیمات پیشرفته',
	'STAGE_ADVANCED_EXPLAIN'	=> 'این تنظیمات را فقط هنگامی که چیزی خارج از حالت پیشفرض را خواستید وارد کنید. اگر از این تنظیمات مطمئن نیستید بدون تغییر آنها به مرحله بعد بروید،بعدا از کنترل پنل مدیریت میتوانید این تنظیمات را تغییر دهید.',
	'STAGE_CONFIG_FILE'			=> 'پیکربندی فایل',
	'STAGE_CREATE_TABLE'		=> 'ایجاد جداول پایگاه داده',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'جداول پایگاه داده phpBB 3.0 ایجاد و بعضی از اطلاعات قبلی هم جایگزاری شدند. برای اتمام نصب phpBB به مرحله بعدی مراجعه کنید.',
	'STAGE_DATABASE'			=> 'تنظیمات پایگاه داده',
	'STAGE_FINAL'				=> 'مرحله نهایی',
	'STAGE_INTRO'				=> 'مقدمه',
	'STAGE_IN_PROGRESS'			=> 'فرآیند تبدیل در حال پردازش است',
	'STAGE_REQUIREMENTS'		=> 'موارد مورد نیاز',
	'STAGE_SETTINGS'			=> 'تنظیمات',
	'STARTING_CONVERT'			=> 'شروع پردازش فرآیند تبدیل',
	'STEP_PERCENT_COMPLETED'	=> 'مرحله <strong>%d</strong> از <strong>%d</strong>',
	'SUB_INTRO'					=> 'مقدمه',
	'SUB_LICENSE'				=> 'لایسنس',
	'SUB_SUPPORT'				=> 'پشتیبانی',
	'SUCCESSFUL_CONNECT'		=> 'اتصال موفقیت آمیز',
	'SUPPORT_BODY'				=> 'پشتیبانی کامل و بدون هزینه ای از نسخه اخیر phpBB صورت میگیرد. این پشتیبانی شامل موارد زیر می باشد :</p><ul><li>نصب</li><li>پیکربندی</li><li>سوالات فنی</li><li>مشکلات مربوط به وجود باگ در نرم افزار</li><li>بروزرسانی از نسخه های قدیمی تر به نسخه جدید</li><li>تبدیل از phpBB 2.0.x به phpBB3</li><li>تبدیل سایر سیستم های تالار به phpBB3 (لطفا از <a href="https://www.phpbb.com/community/viewforum.php?f=65">انجمن تبدیل گرها</a> بازدید کنید)</li></ul><p>به کاربرانی که هنوز از نسخه آزمایشی phpBB3 استفاده میکنند،توصیه میکنیم که ان را به نسخه جدید بروزرسانی کنند.</p><h2>افزونه ها / قالب ها</h2><p>برای مسائل مربوط به افزونه ها میتوانید در <a href="https://www.phpbb.com/community/viewforum.php?f=81">انجمن افزونه ها</a> بحث کنید.<br /> برای مسائل مربوط به قالب ها میتوانید در <a href="https://www.phpbb.com/community/viewforum.php?f=80">انحمن قالب ها</a> بحث کنید.<br /><br />اگر در مورد بسته ای سؤال دارید میتوانید مستقیما از انجمن هایی که به این زمینه ها اختصاص داده شده اند بپرسید.</p><h2>اخذ پشتیبانی</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">بسته خوش آمد گویی phpBB</a><br /><a href="https://www.phpbb.com/support/">بخش پشتیبانی</a><br /><a href="https://www.phpbb.com/support/documentation/3.0/quickstart/">راهنمای شروع سریع</a><br /><br />برای آگاهی از آخرین اخبار و بروزرسانی های phpBB میتوانید در <a href="https://www.phpbb.com/support/">لیست ایمیل ما عضو شوید</a>.<br /><br />',
	'SYNC_FORUMS'				=> 'شروع انطباق انجمن ها',
	'SYNC_POST_COUNT'			=> 'انطباق post_counts',
	'SYNC_POST_COUNT_ID'		=> 'انطباق post_counts از <var>ورودی</var> %1$s به %2$s.',
	'SYNC_TOPICS'				=> 'شروع انطباق موضوعات',
	'SYNC_TOPIC_ID'				=> 'انطباق موضوعات از <var>topic_id</var> %1$s به %2$s.',

	'TABLES_MISSING'			=> 'این جداول یافت نشدند<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'پیشوند جداول پایگاه داده',		'TABLE_PREFIX_EXPLAIN'		=> 'پیشوند باید فقط حاوی حروف باشد و اعداد و کاراکتر ها مورد قبول نیستند.',
	'TABLE_PREFIX_SAME'			=> 'باید پیشوند نرم افزار قبلی ای باشد که میخواهید آن را تبدیل کنید.<br />» پیشوند مشخص شده %s بود.',
	'TESTS_PASSED'				=> 'آزمایش ها موفقیت آمیز بودند',
	'TESTS_FAILED'				=> 'آزمایش ها موفقیت آمیز نبودند',

	'UNABLE_WRITE_LOCK'			=> 'نوشتن فایل قفل شده مقدور نمی باشد',
	'UNAVAILABLE'				=> 'خارج از دسترس',
	'UNWRITABLE'				=> 'غیر قابل نوشتن',
	'UPDATE_TOPICS_POSTED'		=> 'تولید اطلاعات ثبت شده در موضوعات',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'خطایی در تولید اطلاعات ثبت شده روی داد. میتوانید پس از پایان فرآیند تبدیل این مرحله را در کنترل پنل مدیریت دوباره امتحان کنید.',
	'VERIFY_OPTIONS'			=> 'تایید گزینه های تبدیل',
	'VERSION'					=> 'نسخه',

	'WELCOME_INSTALL'			=> 'به نصب phpBB 3 خوش آمدید',
	'WRITABLE'					=> 'قابل نوشتن',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'همه فایل ها بروز و مطابق آخرین نسخه phpBB هستند. حال باید به <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">تالارتان وارد شوید</a> و کنترل کنید که همه چیز به درستی کار میکند. حذف،ویرایش و یا انتقال پوشه install را فراموش نکنید.لطفا اطلاعات برورزی را در مورد سرور و پیکربندی تالارتان از طریق <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">ارسال آمار</a> که در کنترل پنل مدیریت واقع هست،به ما ارسال کنید.',
	'ARCHIVE_FILE'				=> 'فایل منبع در آرشیو',

	'BACK'				=> 'بازگشت',
	'BINARY_FILE'		=> 'فایل مضاعف',
	'BOT'				=> 'عنکبوت/روبات',

	'CHANGE_CLEAN_NAMES'			=> 'روش مورد استفاده در جلوگیری استفاده از یک نام کاربری توسط چند کاربر، تغییر یافت. کاربرانی وجود دارند که بنا به تشخیص این روش نام کاربری یکسانی را دارا می باشند. باید این کاربران را تغییر نام دهید و یا حذف کنید تا مطمئن شوید که هر کاربر فقط یک نام کاربری مشخصی دارد.',
	'CHECK_FILES'					=> 'کنترل فایل ها',
	'CHECK_FILES_AGAIN'				=> 'کنترل دوباره فایل ها',
	'CHECK_FILES_EXPLAIN'			=> 'در مرحله بعدی همگی فایل برای بروزرسانی کنترل خواهند شد - اگر این اولین کترل فایل باشد،میتواند کمی طول بکشد.',
	'CHECK_FILES_UP_TO_DATE'		=> 'بنا به تشخیص پایگاه داده، phpBB شما بروز می باشد. با کنترل فایل ها می توایند بفهمید که آیا واقعاً نرم افزار بروز است یا نه .',
	'CHECK_UPDATE_DATABASE'			=> 'ادامه بروزرسانی',
	'COLLECTED_INFORMATION'			=> 'اطلاعات فایل',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'لیست زیر فایل هایی را که باید بروزرسانی شوند،نمایش میدهد. لطفا در بلوک مربوطه اطلاعات فایل را بخوانید و پس از بررسی حالت فایل، اقدامات لازم برای بروزرسانی موفق را انجام دهید.',
	'COLLECTING_FILE_DIFFS'			=> 'Collecting file differences',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'حال باید <a href="../ucp.php?mode=login">وارد تالارتان</a> شوید. حذف،تغییر نام و یا انتقال پوشه install را فراموش نکنید!',
	'CONTINUE_UPDATE_NOW'			=> 'ادامه پردازش بروزرسانی',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'ادامه بروزرسانی',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'تضاد های موجود در کد - فایل اصلی قبلی',
	'CURRENT_VERSION'				=> 'نسخه کنونی',

	'DATABASE_TYPE'						=> 'نوع پایگاه داده',
	'DATABASE_UPDATE_INFO_OLD'			=> 'فایل بروزرسانی در پوشه install وجود ندارد. لطفا اطمینان حاصل کنید که نسخه جدید فایل را آپلود کرده اید.',
	'DELETE_USER_REMOVE'				=> 'کاربر و پست هایش را حذف کن',
	'DELETE_USER_RETAIN'				=> 'کاربر را حذف کن ولی پست هایش را نگهدار',
	'DESTINATION'						=> 'فایل مقصد',
	'DIFF_INLINE'						=> 'درون خط',
	'DIFF_RAW'							=> 'متحد کردن تفاوت های خام',
	'DIFF_SEP_EXPLAIN'					=> 'بلوک کد موجود در فابل بروز شده و یا فایل جدید.',
	'DIFF_SIDE_BY_SIDE'					=> 'کنار یکدیگر',
	'DIFF_UNIFIED'						=> 'متحد کردن تفاوت ها',
	'DO_NOT_UPDATE'						=> 'این فابل را بروزرسانی نکنید',
	'DONE'								=> 'انجام شد',
	'DOWNLOAD'							=> 'بارگیری',
	'DOWNLOAD_AS'						=> 'بارگیری در',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'بارگیری فایل های تغییر یافته (توصیه میشود)',
	'DOWNLOAD_CONFLICTS'				=> 'بارگیری تضاد های این فایل',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'جستجوی &lt;&lt;&lt; to برای یافتن تضاد ها',
	'DOWNLOAD_UPDATE_METHOD'			=> 'بارگیری فایل های تغییر یافته',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'هنگامی که دانلود شد باید از حالت فشردگی خارج کنید، در این بسته فایل هایی را که باید به روت (root) phpBB آپلود کنید،خواهید یافت. این فایل ها را به مکان های مشخص شده آپلود کرده و سپس بر روی دکمه کنترل دوباره فایل ها کلیک کنید. ',

	'ERROR'			=> 'خطا',
	'EDIT_USERNAME'	=> 'ویرایش نام کاربری',

	'FILE_ALREADY_UP_TO_DATE'		=> 'فایل در حال حاضر بروز است',
	'FILE_DIFF_NOT_ALLOWED'			=> 'فایل قابل مقایسه نیست.',
	'FILE_USED'						=> 'اطلاعات استفاده شده از',			// Single file
	'FILES_CONFLICT'				=> 'فایل های متضاد',
	'FILES_CONFLICT_EXPLAIN'		=> 'فایل های مقابل عوض شدند و فایلی از نسخه قبلی جایگزین آن ها نشد. اگر فایل ها انطباق شدن را امتحان کرده باشند،phpBB به این نتیجه رسیده است که این دو فایل با یکدیگر سازگاری ندارند. لطفا تضاد ها را بررسی و سعی کنید که به صورت دستی این تضاد ها را انطباق دهید و یا روش انطباق سازی را انتخاب کنید. اگر این تضاد ها را به طور دستی اصلاح کردید،دوباره فایل ها را کنترل کنید. همچنین میتوانید روش های منطبق سازی توصیه شده را برای همه فایل ها به کار گیرید. اولی نتیجه گم شدن سطر های متضاد در فایل قدیمی خواهد بود. دومی نتیجه گم شدن تغییرات در فایل جدید خواهد بود.',
	'FILES_MODIFIED'				=> 'فایل های تغییر یافته',
	'FILES_MODIFIED_EXPLAIN'		=> 'فایل های مقابل تغییر یافتند و هیچ فایلی از تالار قبلی جایگزین آنها نشد. فایل بروز شده با توسط شما با فایل های جدید ادغام خواهد شد.',
	'FILES_NEW'						=> 'فایل های جدید',
	'FILES_NEW_EXPLAIN'				=> 'فایل های مقابل در بخش نصب وجود ندارند.این فایل ها به بخش نصب اضافه خواهند شد.',
	'FILES_NEW_CONFLICT'			=> 'فایل های متضاد جدید',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'فایل های مقابل در نسخه جدید وجود دارند ولی به نظر می رسد که فایلی با همان  نام و مکان در سرورتان وجود دارند، این فایل با فایل های جدید تعویض خواهد شد.',
	'FILES_NOT_MODIFIED'			=> 'فایل های تغییر نیافته',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'فایل های مقابل تغییر نیافتند و اصل این فایل ها در phpBB و نسخه جدید آن یکی هستند.',
	'FILES_UP_TO_DATE'				=> 'فایل ها در حال حاضر بروز میباشند.',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'فایل های مقابل بروز هستند و نیازی به بروزرسانی ان ها نیست.',
	'FTP_SETTINGS'					=> 'تنظیمات FTP',
	'FTP_UPDATE_METHOD'				=> 'آپلود FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'فایل های بروزرسانی یافت شده با نسخه کنونی شما سازگار نیستند. نسخه نصب شده شما %1$s می باشد و نسخه مورد نیاز برای بروزرسانی phpBB بین %2$s تا %3$s می باشد.',
	'INCOMPLETE_UPDATE_FILES'		=> 'بروزرسانی فایل ها اتمام نیافت',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'بروزرسانی پایگاه داده با موفقیت به اتمام رسید، حال باید فرآیند بروزرسانی را ادامه دهید.',

	'KEEP_OLD_NAME'		=> 'نگه داشتن نام کاربری',

	'LATEST_VERSION'		=> 'جدیدترین نسخه',
	'LINE'					=> 'سطر',
	'LINE_ADDED'			=> 'اضافه شد',
	'LINE_MODIFIED'			=> 'تغییر یافت',
	'LINE_REMOVED'			=> 'حذف شد',
	'LINE_UNMODIFIED'		=> 'تغییر نیافت',
	'LOGIN_UPDATE_EXPLAIN'	=> 'برای بروزرسانی نصبتان، ابتدا باید وارد شوید.',

	'MAPPING_FILE_STRUCTURE'	=> 'برای سهولت آپلود، این ها محل های فایل هایی هستند که نقشه نصب phpBB را تشکیل میدهند.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'ادغام تغییرات',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'ادغام نکنید - از فایل جدیدی استفاده کنید',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'ادغا نکنید - از فایل نصب شده کنونی استفاده کنید',
	'MERGE_MOD_FILE_OPTION'		=> 'ادغام تغییرات (کد جدید phpBB را از بلوک تضاد ها حذف کنید)',
	'MERGE_NEW_FILE_OPTION'		=> 'ادغام تغییرات (کد تغییر داده شده را از بلوک تضاد ها حذف کنید)',
	'MERGE_SELECT_ERROR'		=> 'حالت ادغام فایل های متضاد به درستی انتخاب نشده است',
	'MERGING_FILES'				=> 'ادغام تفاوت ها',
	'MERGING_FILES_EXPLAIN'		=> 'آخربن تغییرات به فایل ها اعمال می شود<br /><br />لطفا تا زمانی که phpBB اعمال تغییرات را به اتمام برساند، صبر کنید.',

	'NEW_FILE'						=> 'پایان تضاد',
	'NEW_USERNAME'					=> 'نام کاربری جدید',
	'NO_AUTH_UPDATE'				=> 'اجازه بروزرسانی وجود ندارد',
	'NO_ERRORS'						=> 'بدون خطا',
	'NO_UPDATE_FILES'				=> 'فایل های مقابل بروزرسانی نشدند.',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'فایل های مقابل جدید و یا تغییر یافته هستند، ولی این فایل ها در دایرکتوری و مسیر خود قرار نگرفته اند. اگر این فایل ها در دایرکتوری هایی خارج از language/ و یا  styles/ قرار گرفته باشند،میتوانید ساختار این دایرکتوری ها را تغییر دهید و ممکن است بروزرسانی به اتمام نرسد.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'دایرکتوری معتبری یافت نشد، لطفا اطمینان حاصل کنید که فایل های مربوطه را آپلود کرده اید.<br /><br />به نظر می رسد که نصب شما بروز .<strong>نیست</strong>  بروزرسانی ها برای نسخه کنونی phpBB %1$s شما موجود هستند، لطفا از <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> بازدید کنید تا بسته مناسبی را برای بروزرسانی از نسخه %2$s به نسخه %3$s بدست آورید.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'نسخه شما بروز می باشد و نیازی به اعمال ابزار بروزرسانی نیست. اگر می خواهید از بروز بودن تمامی فایل های موجود اطمینان حاصل کنید،از فایل های مناسب برای بروزرسانی استفاده کنید.',
	'NO_UPDATE_INFO'				=> 'اطلاعات فایل بروزرسانی یافت نشد.',
	'NO_UPDATES_REQUIRED'			=> 'بروزرسانی مورد نیاز نیست',
	'NO_VISIBLE_CHANGES'			=> 'تغییرات قابل مشاهده ای وجود ندارد',
	'NOTICE'						=> 'هشدار',
	'NUM_CONFLICTS'					=> 'تعداد تضاد ها',
	'NUMBER_OF_FILES_COLLECTED'		=> 'تضاد های بین دو فایل %1$d و %2$d کنترل شد.<br />لطفا تا کنترل تمامی فایل ها صبر کنید.',

	'OLD_UPDATE_FILES'		=> 'فایل های بروزرسانی قدیمی هستند. فایل های بروزرسانی برای بروز کردن phpBB از نسخه %1$s به نسخه phpBB %2$s هستند،ولی آخرین نسخه، phpBB %3$s می باشد.',

	'PACKAGE_UPDATES_TO'				=> 'بروزرسانی های کنونی بسته برای این نسخه',
	'PERFORM_DATABASE_UPDATE'			=> 'اعمال بروزرسانی پایگاه داده',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'دکمه مربوطه برای بروزرسانی پایگاه داده در قسمت زیر واقع می باشد. بروزرسانی پایگاه داده ممکن است کمی طول بکشد،لطفا این عملیات را متوقف نکنید. بعد از بروزرسانی پایگاه داده دستور العمل ها را پیگیری کنید تا به مرحله بعدی بروزرسانی هدایت شوید.',
	'PREVIOUS_VERSION'					=> 'نسخه قبلی',
	'PROGRESS'							=> 'پردازش',

	'RESULT'					=> 'نتیجه',
	'RUN_DATABASE_SCRIPT'		=> 'پایگاه داده ام را هم اکنون بروز کن',

	'SELECT_DIFF_MODE'			=> 'حالت تفاوت را انتخاب کنید',
	'SELECT_DOWNLOAD_FORMAT'	=> 'فرمت بارگیری آرشیو را انتخاب کنید',
	'SELECT_FTP_SETTINGS'		=> 'تنظیمات FTP را وارد کنید',
	'SHOW_DIFF_CONFLICT'		=> 'نمایش تفاوت ها/تضاد ها',
	'SHOW_DIFF_FINAL'			=> 'نمایش نتایج فایل',
	'SHOW_DIFF_MODIFIED'		=> 'نمایش ادغام تفاوت ها',
	'SHOW_DIFF_NEW'				=> 'نمایش محتوای فایل',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'نمایش تفاوت ها',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'نمایش تفاوت ها',
	'SOME_QUERIES_FAILED'		=> 'بعضی از پرس و جو ها (queries) موفقیت آمیز نبودند. خطا های مربوطه در لیست زیر نمایش داده شده اند.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'نگران نباشید،بروزرسانی ادامه خواهد یافت. اگر دوباره با این خطا مواجه شدید، میتوانید از انجمن های پشتیبانی ما کمک بگیرید. برای اطلاع از چگونگی درخواست پشتیبانی میتوانید از See <a href="../docs/README.html">README</a>بازدید کنید.',
	'STAGE_FILE_CHECK'			=> 'کنترل فایل ها',
	'STAGE_UPDATE_DB'			=> 'بروزرسانی پایگاه داده',
	'STAGE_UPDATE_FILES'		=> 'بروزرسانی فایل ها',
	'STAGE_VERSION_CHECK'		=> 'کنترل نسخه',
	'STATUS_CONFLICT'			=> 'تضاد در فایل تغییر یافته',
	'STATUS_MODIFIED'			=> 'فایل تغییر یافته',
	'STATUS_NEW'				=> 'فایل جدید',
	'STATUS_NEW_CONFLICT'		=> 'تضاد در فایل جدید',
	'STATUS_NOT_MODIFIED'		=> 'فایل بدون تغییر',
	'STATUS_UP_TO_DATE'			=> 'فایل بروز شده',

	'TOGGLE_DISPLAY'			=> 'مشاهده/مخفی کردن لیست قایل',
	'TRY_DOWNLOAD_METHOD'		=> 'ممکن است بخواهید از روش بارگیری فایل های تغییر یافته استفاده کنید.<br />این روش همیشه کارآمد بوده و برای بروزرسانی مسیر phpBB توصیه می شود.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'هم اکنون این روش را امتحان کنید',

	'UPDATE_COMPLETED'				=> 'بروزرسانی اتمام یافت',
	'UPDATE_DATABASE'				=> 'بروزرسانی پایگاه داده',
	'UPDATE_DATABASE_EXPLAIN'		=> 'در مرحله بعدی پایگاه داده بروز خواهد شد',
	'UPDATE_DATABASE_SCHEMA'		=> 'بروزرسانی قالب (schema) پایگاه داده',
	'UPDATE_FILES'					=> 'بروزرسانی فایل ها',
	'UPDATE_FILES_NOTICE'			=> 'لطفا اطمینان حاصل کنید که فایل های تالارتان را بروز کرده اید. زیرا این فایل فقط پایگاه داده را بروز می کند.',
	'UPDATE_INSTALLATION'			=> 'بروزرسانی نصب phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'با این گرینه میتوانید نصب phpBB را به اخرین نسخه موجود بروز کنید.<br />در طول این فرایند همگی فایل ها به طور کامل کنترل خواهند شد. قبل از بروزرسانی می توانید تمامی تفاوت ها را بررسی کنید.<br /><br />بروزرسانی فایل به دو روش امکان پذیر است.</p><h2>بروزرسانی دستی</h2><p>که در این روش فایل های تغییر یافته را می توانید بارگیری کنید. بعد از بارگیری باید فایل ها را به مسیر درستشان اتقال دهید. بعد از اتمام این کار ها میتوانید از این صفحه دوباره کنترل کنید که آیا فایل های بروزرسانی را به درستی به مسیرشان انتقال داده ای یا نه .</p><h2>بروزرسانی خودکار به وسیله FTP</h2><p>این روش،شبیه روش قبلی می باشد با این تفاوت که نیازی نیست فایل های تغییر یافته را بارگیری کرده و سپس آن ها را آپلود کنید. همه این کارها به طور خودکار برای شما انجام خواهد گرفت. برای استفاده از این روش باید اطلاعات ورود FTP را بدانید. بعد از اتمام فرآیند به صفحه ای منتقل خواهید شد و از آنجا میتوانید کنترل کنید که آیا همه چیز به درستی بروز شده است یا نه.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>اطلاعیه ی انتشار</h1>

		<p>لطفا <a href="%1$s" title="%1$s"><strong>اطلاعیه ی انتشار نسخه جدید</strong> را قبل از بروزرسانی بخوانید. </a> ممکن است حاوی اطلاعات مفیدی باشد. همچنین در آنجا لینک کامل بارگیری و لیست تغییرات موجود است.</p>

		<br />

		<h1>نحوه بروزرسانی نصب با استفاده از بسته های خودکار بروزرسانی</h1>

		<p>روش های توصیه شده برای بروزرسانی نصب فقط برای نصب خودکار معتبر است. بروزرسانی را می توانید با استفاده از روش هایی که در  INSTALL.html ذکر شده است نیزانجام دهید. مرحله های بروزرسانی خودکار phpBB :</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>به <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com صفحه بارگیری</a> بروید و آرشیو "Automatic Update Package" را بارگیری کنید.<br /><br /></li>
			<li>آرشیو را از حالت فشردگی خارج کنید<br /><br /></li>
			<li>پوشه install را بدون فشردگی و حالت زیپ، به روت phpBB آپلود کنید .(جایی که config.php وجود دارد)<br /><br /></li>
		</ul>

		<p>هنگامی که پوشه install اپلود شود، تالار برای کاربران معمولی غیرفعال خواهد بود.<br /><br />
		<strong><a href="%2$s" title="%2$s">حال با استفاده از مرورگرتان به پوشه نصبتان بروید.</a></strong><br />
		<br />
		در طول مراحل بروزرسانی راهنمایی خواهید شد و هنگامی که بروزرسانی پایان یابد،اطلاع داده میشود.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>تشخیص بروزرسانی ناقص</h1>

		<p>phpBB بروزرسانی خودکار ناقصی را شناسایی کرده است. لطفا اطمینان حاصل کنید که همه مراحل موجود در بروزرسانی خودکار را انجام داده اید. در قسمت پایین می توانید لینک را دوباره مشاهده کنید و یا میتوانید مستقیم به پوشه install بروید.</p>
	',
	'UPDATE_METHOD'					=> 'روش بروزرسانی',
	'UPDATE_METHOD_EXPLAIN'			=> 'روش بروزرسانی دلخواه خود را انتخاب کنید. اگر از آپلود FTP استفاده کنید در آن صورت به صفحه ای انتقال خواهید شد که از شما اطلاعات ورود به FTPرا خواهد خواست. در این روش فایل های بروزرسانی به طور خودکار آپلود خواهند شد و پشتیبانی از فایل های قبلی با وند اضافه شده .bak ایجاد می شود. اگر روش بارگیری فایل های تغییر یافته را انتخاب کنید، در آن صورت در هر زمانی می توانید این فایل ها را به سرورتان آپلود کنید.',
	'UPDATE_REQUIRES_FILE'			=> 'برای بروزرسانی باید فایل مقابل وجود داشته باشد : %s',
	'UPDATE_SUCCESS'				=> 'بروزرسانی با موفقیت انجام شد',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'فایل ها با موفقیت بروز شدند. در مرحله بعدی میتوانید درستی فایل های اپلود شده را کنترل کنید.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'بروزرسانی نسخه و بهینه سازی جداول',
	'UPDATING_DATA'					=> 'بروزرسانی داده ها',
	'UPDATING_TO_LATEST_STABLE'		=> 'بروزرسانی پایگاه داده به جدیدترین نسخه',
	'UPDATED_VERSION'				=> 'نسخه بروز شده',
	'UPGRADE_INSTRUCTIONS'			=> 'ویژگی جدید <strong>%1$s</strong> انتشار شده و در دسترس است. لطفا <a href="%2$s" title="%2$s"><strong>اطلاعیه انتشار</strong></a> را برای دریافت جزئیات و نحوه ارتقاء بخوانید. ',
	'UPLOAD_METHOD'					=> 'روش آپلود',

	'UPDATE_DB_SUCCESS'				=> 'بروزرسانی پایگاه داده موفقیت آمیز بود',
	'USER_ACTIVE'					=> 'کاربر فعال',
	'USER_INACTIVE'					=> 'کاربر غیرفعال',

	'VERSION_CHECK'					=> 'کنترل نسخه',
	'VERSION_CHECK_EXPLAIN'			=> 'لطفا بروز بودن نسخه نصب phpBB را کنترل کنید.',
	'VERSION_NOT_UP_TO_DATE'		=> 'phpBB شما بروز نمی باشد. لطفا فرایند بروزرسانی را ادامه دهید.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB شما بروز نمی باشد.<br />در لینک زیر اطلاعیه انتشار نسخه موجود می باشد، از آنجا می توانید اطلاعات بیشتری به دست آورید و از جزئیات بروزرسانی آگاه شوید.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'نصب phpBB بروز نیست.',
	'VERSION_UP_TO_DATE'			=> 'نصب phpBB بروز نیست. با این وجود نسخه جدیدی هم در دسترس نیست،برای اعتبار سنجی فایل ها می توانید ادامه دهید',
	'VERSION_UP_TO_DATE_ACP'		=> 'نصب phpBB بروز می باشد. در حال حاضر نسخه جدیدتری در دسترس نیست.',
	'VIEWING_FILE_CONTENTS'			=> 'مشاهده محتوای فایل',
	'VIEWING_FILE_DIFF'				=> 'مشاهده تفاوت های فایل',

	'WRONG_INFO_FILE_FORMAT'	=> 'اطلاعات اشتباه فرمت فایل',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'با تشکر، مدیریت',
	'CONFIG_SITE_DESC'				=> 'متن کوتاهی در توضیح تالارتان',
	'CONFIG_SITENAME'				=> 'دامنه شما.com',

	'DEFAULT_INSTALL_POST'			=> 'این پستی آزمایشی می باشد. به نظر می رسد که همه چیز به درستی کار می کند. اگر بخواهید می توانید این پست را حذف کنید و برای سازماندهی انجمنتان دست به کار شوید. در طول فرایند نصب، اولین گروه و اولین انجمنتان تشکیل شدند و سطوح دسترسی آن ها با توجه به گروه های کاربری پیشفرض یعنی مدیران،روبات ها،مدیران انجمن،مهمانان،کاربران عضو شده و کاربران عضو شده COPPA تنظیم شدند. همچنین میتوانید اولین گروه و اولین انجمنتان را نیز حذف کنید. لطفا تنظیم سطوح دسترسی را در هنگام ایجاد انجمن ها و گروه ها، برای گروه های کاربری  فراموش نکنید. توصیه میشود اولین گروه و اولین انجمن را حذف نکرده و فقط تغییر نام دهید تا هنگام ایجاد انجمن ها و گروه های جدید سطوح دسترسی این دو را به آنها کپی کنید.لذّت ببرید!',

	'FORUMS_FIRST_CATEGORY'			=> 'اولین گروه شما',
	'FORUMS_TEST_FORUM_DESC'		=> 'توضیحات اولین انجمن شما',
	'FORUMS_TEST_FORUM_TITLE'		=> 'اولین انجمن شما',

	'RANKS_SITE_ADMIN_TITLE'		=> 'مدیر سایت',
	'REPORT_WAREZ'					=> 'پست به نرم افزاری غیر قانونی و یا دزدی لینک دارد.',
	'REPORT_SPAM'					=> 'پست گزارش شده فقط به هدف تبلیغ وبسایت و یا محصولی ایجاد شده است. ',
	'REPORT_OFF_TOPIC'				=> 'پست گزارش شده خارج از موضوع است',
	'REPORT_OTHER'					=> 'پست گزارش شده شامل هیچکدام از موارد بالا نمی باشد،لطفا از فیلد اطلاعات بیش تر استفاده کنید.',

	'SMILIES_ARROW'					=> 'پیکان',
	'SMILIES_CONFUSED'				=> 'سردرگم',
	'SMILIES_COOL'					=> 'خون سرد',
	'SMILIES_CRYING'				=> 'گریه می کند و یا خیلی ناراحت است',
	'SMILIES_EMARRASSED'			=> 'خجالتی',
	'SMILIES_EVIL'					=> 'بد و یا خبلی عصبانی',
	'SMILIES_EXCLAMATION'			=> 'فریاد',
	'SMILIES_GEEK'					=> 'عجیب',
	'SMILIES_IDEA'					=> 'فکر',
	'SMILIES_LAUGHING'				=> 'می خندد',
	'SMILIES_MAD'					=> 'عصبانی',
	'SMILIES_MR_GREEN'				=> 'آقای سبز',
	'SMILIES_NEUTRAL'				=> 'بدون طرف',
	'SMILIES_QUESTION'				=> 'سؤال',
	'SMILIES_RAZZ'					=> 'مسخره باز',
	'SMILIES_ROLLING_EYES'			=> 'چشم های چرخان',
	'SMILIES_SAD'					=> 'غمگین',
	'SMILIES_SHOCKED'				=> 'شوکه',
	'SMILIES_SMILE'					=> 'لبخند',
	'SMILIES_SURPRISED'				=> 'سوپرایز',
	'SMILIES_TWISTED_EVIL'			=> 'خیلی بد',
	'SMILIES_UBER_GEEK'				=> 'خیلی عجیب',
	'SMILIES_VERY_HAPPY'			=> 'خیلی خوشحال',
	'SMILIES_WINK'					=> 'چشمک',

	'TOPICS_TOPIC_TITLE'			=> 'به phpBB3 خوش آمدید',
));

?>