<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */
  
  /* LENGUAJE ESPAÑOL */

// TITLES
define('WELCOME', 'Bienvenido a');

// MENSAJES CRITICOS
define('ERROR_REF', 'Acceso o solicitud invalida, usa la pagina principal de <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> para subir imagenes.');
define('CANT_RUN', 'Imposible subir imagenes, Chevereto esta mal configurado o no puede correr en este servidor.');
define('CRITIC_ERROR_INPUT', 'error critico, comprueba los datos de entrada');
define('ERROR_UPLOADING', 'Error subiendo la imagen');

// MISC
define('ANDTEXT', 'y');
define('AT', 'en');

// TITLE HTTP ERRORS
define('TITLE_400', 'Solicitud incorrecta (400)');
define('TITLE_401', 'No autorizado (401)');
define('TITLE_403', 'Prohibido (403)');
define('TITLE_404', 'No encontrado (404)');
define('TITLE_500', 'Error interno del servidor (500)');
define('TITLE_503', 'Servicio no disponible (503)');
// DESC HTTP ERRORS
define('DESC_400', 'Has solicitado de manera incorrecta el recurso que buscas, favor de revisar');
define('DESC_401', 'No esta autorizado para ver este recurso, necesita usuario y contraseña para acceder a el');
define('DESC_403', 'No tiene acceso a este recurso, es más, esta prohibido su acceso');
define('DESC_404', 'El recurso especificado no existe o no se puede encontrar en el servidor');
define('DESC_500', 'Error interno del servidor');
define('DESC_503', 'No se puede prestar el servicio');
// ACCESO A DIRECTORIOS
define('TITLE_DIR_NO', 'Acceso deshabilitado en "'.$page.'"');
define('DESC_DIR_NO', 'Disculpa, no puedes acceder directamente a este directorio');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', 'debes completar parte del formulario para continuar');
define('TITLE_FORM_INCOMPLETE', 'Formulario incompleto');
define('DOBLE_POSTED', 'No puedes enviar url y local al mismo tiempo');
define('FATAL_ERROR_TITLE', 'Error fatal');
define('INVALID_EXT', 'Tipo de archivo invalido, soportamos JPG, PNG, GIF y BMP');
define('INVALID_TITLE', 'Tipo de archivo invalido');
define('INVALID_CORRUPT', 'tipo de archivo invalido o corrupto');
define('NOTHING_TO_RESIZE', 'No hay nada que redimensionar');
define('INPUT_ERROR', 'Error de entrada');
define('NO_ID', 'Ninguna ID especificada');
define('NO_ID_TITLE', 'Ninguna ID de imagen especificada');
define('NO_SELF_UPLOAD', 'No subo archivos propios de la pagina');
define('CANT_UPLOAD_TITLE', 'No se puede subir');
define('TOO_HEAVY','archivo demasiado pesado');
define('JUST_NUMBERS', 'debes introducir solo el valor numerico del ancho deseado');
define('UPLOADED_BUT_NOT_RESIZED', 'Imagen subida (pero no redimensionada)');
define('OVER_RESIZE_ERROR', 'el redimensionamiento no trabaja en valores superiores al ancho de la imagen original');
define('RESIZE_LIMITS', 'el resimensionamiento solo funciona entre los valores');

// INPUT TEXT
define('ENTER_WIDTH', 'Introduce el ancho que deseas para tu imagen');

// OK MESSAGES
define('UPLOAD_OK', 'Imagen subida con exito');
define('UPLOAD_AND_RESIZED', 'Imagen subida y redimensionada con exito');

// VIEWVING
define('SEEING', 'Viendo imagen');
define('NOT_EXISTS', 'No existe tal imagen en el servidor');
define('NOT_EXISTS_TITLE', 'La imagen solicitada no existe');
define('FULL_SIZE', 'tamaño completo');

// TXT
define('TXT_PREFERENCES', 'preferencias');
define('TXT_TINYURL', 'Acortar URL usando '.$tiny_service);
define('TXT_CLOSE_PREF', 'cerrar pref.');
define('TXT_LOCAL', 'escoge la imagen que quieres subir desde tu computador');
define('TXT_REMOTE', 'introduce la <abbr title="http://sitio-donde-es-ta-la-imagen.com/imagen.jpg">url</abbr> de la imagen que deseas subir');
define('TXT_UPLOADING', 'Subiendo imagen...');
define('TXT_REMOTE_RR', 'Esta es la <abbr title="http://sitio-donde-es-ta-la-imagen.com/imagen.jpg">url</abbr> de la imagen que deseas subir');
define('TXT_TEMP_SAVE', '<abbr title="la borraremos despues">temporalmente</abbr> guardaremos tu imagen, así podrás volver a redimensionar');
define('TXT_REZ_AGAIN', 'Redimensionando denuevo...');
define('TXT_TEMP_PLACE', 'Aquí quedo tu imagen <span>temporalmente</span>');
define('TXT_SEEING', 'estas viendo');
define('TXT_AND_RESIZE', 'y redimensionar');
define('TXT_DID', 'acabas de subir');
// SHARE
define('SHARE_THUMB_VIEWER', 'Miniatura + enlace <u>visualizador</u>');
define('SHARE_FORUMS', 'Mostrar en foros');
define('SHARE_DIRECT', 'Muestra directamente esta imagen');
define('SHARE_VIEWER', 'Visualizador');
define('SHARE_SOCIAL', 'Socializa esta imagen');
define('SHARE_NETWORKS', 'Redes sociales');
define('SHARE_TWITTER', 'Twittea esta imagen');
define('SHARE', 'compartir');
// RESIZE
define('RESIZE_DSC', 'sube tu imagen automaticamente en otro tamaño');
define('RESIZE_WIDTH', 'Ancho deseado');
define('RESIZE_PIXELS', 'en pixels');
define('RESIZE_KEEP', '*mantenemos la proporción');

?>