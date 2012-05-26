<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */

// Language
define('LANG', 'cn'); // en - English | es - Espa駉l | fa - Farsi | fr - Fran鏰is | nl - Dutch | cn - ZH-CN (Chinese)

// App
define('APP_NAME', '分享您的图片|Share Your Images'); // Your image hosting name
define('TAG_LINE', 'Image Hosting'); // Your tagline (for doctitles and logo)
define('DESCRIPTION', '免费快速分享您的图片'); // For meta description
define('KEYWORDS', '免费快速, 免费分享, 图片分享, Share Your Images, 快速分享'); // For meta keywords

// Folders
/* If you change this, you also must change the folders name. */
define('DIR_UP','up/');
define('DIR_IM','images/'); // Change this to have something like /X/filename.jpg - where "X/" is the folder name. 
define('DIR_WORKING',DIR_UP.'working/');
define('DIR_TEMP',DIR_UP.'temp/');
define('DIR_TH','thumbs/');

// Min-Max values -> php.ini rules the nation...
$max_mb = '2'; // Max. image size (Mbytes)
$max_by = $max_mb*1048576; // (bytes)
$max_name = '10'; // Max. file name lenght.

// Thumbs
$mini_ancho = '150'; // Thumb width (pixels)
$mini_alto = '150'; // Thumb height (pixels)

// Resize
$lowres = '16'; // Min. resize value (pixels)
$higres = '1280'; // Max. resize value (pixels)

// Options
$lim_act = true; // true: Allows uploading just for your domain - false: Allows upload from anywhere (post from another website)
$debug_mode = false; // false: Debug OFF - true: Debug ON.
$cut_url = true; // true: Short URLs (TinyURL tr.im etc.) - false: normal url (http://mysite.com/images/image.jpg).
$cut_url_service = 'tinyurl'; // tinyurl
$cut_url_user = true; // If $cut_url = true -> true: Allows your users to cut their urls (preference) - false: Users can't choose to cut or not.
$allow_over_resize = false; // true: Allows over resize images - false: Don't allow over resize.


///////////////////////////////////////////////////////////////////
///// DO NOT EDIT BELOW THIS - (do it if the script can't run) ////
///////////////////////////////////////////////////////////////////

/* We get this value with $_SERVER. If your server doesn't resolve this value, the script will not work.
   If the script doesn't work, you must manually set this value. (look the example) */

$DOM_SCRIPT = $_SERVER['SERVER_NAME']; // --> EXAMPLE: $DOM_SCRIPT = 'mysite.com';

///////////////////////////////
/// DO NOT TOUCH BELOW THIS ///
///////////////////////////////

// PATH
/* Uhhh.. Can't touch this!. */
$path = dirname($_SERVER['PHP_SELF']);
if (strlen($path)>1) { 
	define('PATH_SCRIPT', $path.'/');
} else {
	define('PATH_SCRIPT', $path);
}

// URL
/* Uhhh... Uhhh.. Can't touch this!. */
define('URL_SCRIPT', 'http://'.$DOM_SCRIPT.PATH_SCRIPT);

?>