<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */
  
  /* LENGUAJE INGLES */

// TITLES
define('WELCOME', 'Welcome to');

// MENSAJES CRITICOS
define('ERROR_REF', 'Invalid access, use the home page of <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> to upload images.');
define('CANT_RUN', 'Impossible to upload images, Chevereto is not well configured or can not run on this server.');
define('CRITIC_ERROR_INPUT', 'fatal error, check your data');
define('ERROR_UPLOADING', 'Error uploading the image');

// MISC
define('ANDTEXT', 'and');
define('AT', 'at');

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
define('TITLE_DIR_NO', 'Access denied in "'.$page.'"');
define('DESC_DIR_NO', 'Sorry, you can not directly access this directory');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', 'you must complete part of the form in order to continue');
define('TITLE_FORM_INCOMPLETE', 'Form incomplete');
define('DOBLE_POSTED', 'Can not send url and local at the same time');
define('FATAL_ERROR_TITLE', 'Fatal error');
define('INVALID_EXT', 'Invalid file type, allowed JPG, PNG, GIF and BMP');
define('INVALID_TITLE', 'Invalid file type');
define('INVALID_CORRUPT', 'invalid or corrupted file');
define('NOTHING_TO_RESIZE', 'There is noting to resize');
define('INPUT_ERROR', 'Input error');
define('NO_ID', 'No ID specified');
define('NO_ID_TITLE', 'No image ID given');
define('NO_SELF_UPLOAD', 'Cant upload images that this domain already host');
define('CANT_UPLOAD_TITLE', 'Can not upload');
define('TOO_HEAVY', 'the file is too heavy');
define('JUST_NUMBERS', 'Just enter the numeric value of the desired width');
define('UPLOADED_BUT_NOT_RESIZED', 'Image uploaded (but no resized)');
define('OVER_RESIZE_ERROR', 'resizing does not work in higher values to the width of the original image');
define('RESIZE_LIMITS', 'The resize only works between');

// INPUT TEXT
define('ENTER_WIDTH', 'Enter the width that you desire to your image');

// OK MESSAGES
define('UPLOAD_OK', 'Image uploaded successfully');
define('UPLOAD_AND_RESIZED', 'Image uploaded and resized successfully');

// VIEWVING
define('SEEING', 'Viewing image');
define('NOT_EXISTS', 'Image does not exist');
define('NOT_EXISTS_TITLE', 'The image requested does not exist');
define('FULL_SIZE', 'full size');

// TXT
define('TXT_PREFERENCES', 'preferences');
define('TXT_TINYURL', 'Create short URLs using '.$tiny_service);
define('TXT_CLOSE_PREF', 'close pref.');
define('TXT_LOCAL', 'choose the image you would like to upload from your computer');
define('TXT_REMOTE', 'enter the <abbr title="http://where-is-the-image.com/image.jpg">url</abbr> of the image you would like to upload');
define('TXT_UPLOADING', 'Uploading image...');
define('TXT_REMOTE_RR', 'This is the <abbr title="http://where-is-the-image.com/image.jpg">url</abbr> of the image you would like to upload');
define('TXT_TEMP_SAVE', 'we <abbr title="we will delete it later">temporally</abbr> store your image, so you can resize it again');
define('TXT_REZ_AGAIN', 'Resizing again...');
define('TXT_TEMP_PLACE', 'Here is your image <span>just temporally</span>');
define('TXT_SEEING', 'viewing');
define('TXT_AND_RESIZE', 'and resized');
define('TXT_DID', 'just upload');
// SHARE
define('SHARE_THUMB_VIEWER', 'Thumbnail + <u>viewer</u> link');
define('SHARE_FORUMS', 'BBCode (Forums)');
define('SHARE_DIRECT', 'Show directly this image');
define('SHARE_VIEWER', 'Viewer');
define('SHARE_SOCIAL', 'Socialize this image');
define('SHARE_NETWORKS', 'Social Networks');
define('SHARE_TWITTER', 'Twitt this image');
define('SHARE', 'share');
// RESIZE
define('RESIZE_DSC', 'automatically upload your image in another size');
define('RESIZE_WIDTH', 'Desired width');
define('RESIZE_PIXELS', 'in pixels');
define('RESIZE_KEEP', '*we keep proportions');

?>