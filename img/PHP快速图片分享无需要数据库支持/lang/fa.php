<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>
  TRANSLATION  By PersianScript.ir
  ----------------------------------------- */
  
  /* LENGUAJE PERSA-Farsi */

// TITLES
define('WELCOME', 'Welcome to');

// MENSAJES CRITICOS
define('ERROR_REF', 'Invalid access, use the home page of <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> to upload images.');
define('CANT_RUN', 'Impossible to upload images, Chevereto is not well configured or can not run on this server.');
define('CRITIC_ERROR_INPUT', 'خطا.مشکلی برای سیستم پیش امده است!');
define('ERROR_UPLOADING', 'خطا در هنگام آپلود تصویر');

// MISC
define('ANDTEXT', 'و');
define('AT', 'در');

// TITLE HTTP ERRORS
define('TITLE_400', 'Bad Request (400)');
define('TITLE_401', 'Unauthorized (401)');
define('TITLE_403', 'Forbidden (403)');
define('TITLE_404', 'Not Found (404)');
define('TITLE_500', 'Internal Server Error (500)');
define('TITLE_503', 'Service Unavailable (503)');
// DESC HTTP ERRORS
define('DESC_400', 'The server did not understand the request');
define('DESC_401', 'The requested page needs a username and a password');
define('DESC_403', 'Access is forbidden to the requested page ');
define('DESC_404', 'The server can not find the requested page ');
define('DESC_500', 'The request was not completed. The server met an unexpected condition');
define('DESC_503', 'The request was not completed. The server is temporarily overloading or down');
// ACCESO A DIRECTORIOS
define('TITLE_DIR_NO', 'امکان دسترسی وجود ندارد "'.$page.'"');
define('DESC_DIR_NO', 'Sorry, you can not directly access this directory');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', 'برای آپلود تصویر باید تمامی فیلد های مورد نیاز را کامل نمائید');
define('TITLE_FORM_INCOMPLETE', 'Form incomplete');
define('DOBLE_POSTED', 'Can not send url and local at the same time');
define('FATAL_ERROR_TITLE', 'خطا');
define('INVALID_EXT', 'پسوند فایل غیر مجاز می باشد, فایل های مجاز JPG, PNG, GIF و BMP');
define('INVALID_TITLE', 'پسوند فایل غیر مجاز می باشد');
define('INVALID_CORRUPT', 'invalid or corrupted file');
define('NOTHING_TO_RESIZE', 'این تصویر تغییر اندازه پیدا نکرد');
define('INPUT_ERROR', 'Input error');
define('NO_ID', 'No ID specified');
define('NO_ID_TITLE', 'No image ID given');
define('NO_SELF_UPLOAD', 'Cant upload images that this domain already host');
define('CANT_UPLOAD_TITLE', 'نمیتوان آپلود کرد');
define('TOO_HEAVY', 'the file is too heavy');
define('JUST_NUMBERS', 'Just enter the numeric value of the desired width');
define('UPLOADED_BUT_NOT_RESIZED', 'تصویر آپلود شد (اما تغییر اندازه نکرد)');
define('OVER_RESIZE_ERROR', 'تغییر اندازه تصویر کار نکرد.اندازه درخواستی شما از اندازه اصلی تصویر بزرگتر می باشد!');
define('RESIZE_LIMITS', 'The resize only works between');

// INPUT TEXT
define('ENTER_WIDTH', 'Enter the width that you desire to your image');

// OK MESSAGES
define('UPLOAD_OK', 'تصویر با موفقیت آپلود شد');
define('UPLOAD_AND_RESIZED', 'تصویر با موفقیت آپلود شد و تغییر اندازه پیدا کرد');

// VIEWVING
define('SEEING', 'در حال بازدید تصویر');
define('NOT_EXISTS', 'تصویر وجود ندارد');
define('NOT_EXISTS_TITLE', 'تصویر درخواستی شما وجود ندارد');
define('FULL_SIZE', 'اندازه اصلی');

// TXT
define('TXT_PREFERENCES', 'تنظیمات');
define('TXT_TINYURL', 'ایجاد لینک کوتاه شده از '.$tiny_service);
define('TXT_CLOSE_PREF', 'خروج');
define('TXT_LOCAL', 'تصویر مورد نظرتان را انتخاب کنید');
define('TXT_REMOTE', 'آدرس اینترنتی تصویر مورد نظر شما برای آپلود را وارد نمائید');
define('TXT_UPLOADING', 'در حال آپلود...لطفا کمی صبر کنید');
define('TXT_REMOTE_RR', 'This is the <abbr title="http://where-is-the-image.com/image.jpg">url</abbr> of the image you would like to upload');
define('TXT_TEMP_SAVE', 'we <abbr title="we will delete it later">temporally</abbr> store your image, so you can resize it again');
define('TXT_REZ_AGAIN', 'تغيير اندازه دوباره');
define('TXT_TEMP_PLACE', 'Here is your image <span>just temporally</span>');
define('TXT_SEEING', 'viewing');
define('TXT_AND_RESIZE', 'و تغییر اندازه پیدا کرد');
define('TXT_DID', 'تصویر');
// SHARE
define('SHARE_THUMB_VIEWER', 'لینک و تصویر کوچک شده');
define('SHARE_FORUMS', 'تالار گفتگو');
define('SHARE_DIRECT', 'نمایش تصویر در لینک های مستقیم');
define('SHARE_VIEWER', 'نمایش دهنده تصویر');
define('SHARE_SOCIAL', 'اشتراک گذاری این تصویر');
define('SHARE_NETWORKS', 'ارسال به');
define('SHARE_TWITTER', 'Twitt');
define('SHARE', 'اشتراک گذاری');
// RESIZE
define('RESIZE_DSC', 'تغییر اندازه تصویر شما به اندازه دلخواه');
define('RESIZE_WIDTH', 'اندازه تصویر');
define('RESIZE_PIXELS', 'در pixel');
define('RESIZE_KEEP', '* we keep proportions');

?>