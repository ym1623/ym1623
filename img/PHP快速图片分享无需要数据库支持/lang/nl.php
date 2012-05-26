<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */
  
  /* LENGUAJE DANES */

// TITLES
define('WELCOME', 'Welkom op');

// MENSAJES CRITICOS
define('ERROR_REF', 'Ongeldige toegang, gebruik de home pagina van <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> om een foto te uploaden.');
define('CANT_RUN', 'Onmogelijk om de foto te uploaden, Chevereto is niet goed geconfigureerd of werkt niet op deze server.');
define('CRITIC_ERROR_INPUT', 'Kritieke fout, kijk uw data na');
define('ERROR_UPLOADING', 'Fout bij het uploaden van de foto');

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
define('TITLE_DIR_NO', 'Toegang niet toegelaten op "'.$page.'"');
define('DESC_DIR_NO', 'Sorry, u heeft geen toegan tot deze directory');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', 'u moet een gedeelte van het formulier invullen om te kunnen verder gaan');
define('TITLE_FORM_INCOMPLETE', 'Formulier onvolledig');
define('DOBLE_POSTED', 'Onmogelijk om url en local te versturen op hetzelfde ogenblik');
define('FATAL_ERROR_TITLE', 'Kritieke fout');
define('INVALID_EXT', 'Ongeldige extensie, toegelaten extensies JPG, PNG, GIF en BMP');
define('INVALID_TITLE', 'Ongeldige extensie');
define('INVALID_CORRUPT', 'ongeldige of corrupte file');
define('NOTHING_TO_RESIZE', 'Er is niks om te resizen');
define('INPUT_ERROR', 'Input fout');
define('NO_ID', 'Geen ID gespecifieërd');
define('NO_ID_TITLE', 'Geen foto ID opgegeven');
define('NO_SELF_UPLOAD', 'Onmogelijk om een foto te uploaden welke al gehost zijn');
define('CANT_UPLOAD_TITLE', 'Upload niet mogelijk');
define('TOO_HEAVY', 'De file is te groot');
define('JUST_NUMBERS', 'Geef de numerieke waarde in van de gewenste breedte');
define('UPLOADED_BUT_NOT_RESIZED', 'Foto geüpload (maar niet geresized)');
define('OVER_RESIZE_ERROR', 'resizing werkt niet met hogere waarden dan de originele breedte van de foto');
define('RESIZE_LIMITS', 'De resize werkt alleen tussen');

// INPUT TEXT
define('ENTER_WIDTH', 'Geef de gewenste breedte in voor uw foto');

// OK MESSAGES
define('UPLOAD_OK', 'Foto upload gelukt');
define('UPLOAD_AND_RESIZED', 'Foto upload en resizing gelukt');

// VIEWVING
define('SEEING', 'Bekijk foto');
define('NOT_EXISTS', 'Foto bestaat niet');
define('NOT_EXISTS_TITLE', 'De gevraagde foto bestaat niet');
define('FULL_SIZE', 'volledige grootte');

// TXT
define('TXT_PREFERENCES', 'voorkeuren');
define('TXT_TINYURL', 'Maak korte URLs met '.$tiny_service);
define('TXT_CLOSE_PREF', 'sluit voorkeuren.');
define('TXT_LOCAL', 'kies een foto welke u wenst te uploaden van uw computer');
define('TXT_REMOTE', 'geef de <abbr title="http://where-is-the-image.com/image.jpg">url</abbr> in van de foto welke u wil uploaden');
define('TXT_UPLOADING', 'Foto aant uploaden...');
define('TXT_REMOTE_RR', 'Dit is de <abbr title="http://where-is-the-image.com/image.jpg">url</abbr> van de foto welke u wenst te uploaden');
define('TXT_TEMP_SAVE', 'we slaan <abbr title="we will delete it later">tijdelijk</abbr> uw foto op, zodat u hem opnieuw kan resizen');
define('TXT_REZ_AGAIN', 'Opnieuw aant resizen...');
define('TXT_TEMP_PLACE', 'Hier is uw foto <span>maar enkel tijdelijk</span>');
define('TXT_SEEING', 'bekijken');
define('TXT_AND_RESIZE', 'en geresized');
define('TXT_DID', 'enkel uploaden');
// SHARE
define('SHARE_THUMB_VIEWER', 'Thumbnail + <u>viewer</u> link');
define('SHARE_FORUMS', 'Forums');
define('SHARE_DIRECT', 'Toon deze foto onmiddelijk');
define('SHARE_VIEWER', 'Viewer');
define('SHARE_SOCIAL', 'Socialize deze foto');
define('SHARE_NETWORKS', 'Sociale Networken');
define('SHARE_TWITTER', 'Twitter deze foto');
define('SHARE', 'delen');
// RESIZE
define('RESIZE_DSC', 'upload automatisch uw foto in een andere afmeting');
define('RESIZE_WIDTH', 'Breedte');
define('RESIZE_PIXELS', 'in pixels');
define('RESIZE_KEEP', '* verhoudingen');

?>