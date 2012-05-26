<?
/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>
  Traduction FR by AlainR

  ----------------------------------------- */
  
  /* LENGUAJE FRANCES */

// TITLES
define('WELCOME', 'Bienvenue à');

// MENSAJES CRITICOS
define('ERROR_REF', 'Accès invalide, utilisez la page <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> pour charger des images.');
define('CANT_RUN', 'Impossible de charger des images, Chevereto n\'est pas correctement configuré ou ne peut être exécuté sur ce serveur.');
define('CRITIC_ERROR_INPUT', 'erreur, vérifiez vos données');
define('ERROR_UPLOADING', 'Erreur de chargement de l\'image');;

// MISC
define('ANDTEXT', 'et');
define('AT', 'à');

// TITLE HTTP ERRORS
define('TITLE_400', 'Requete impossible (400)');
define('TITLE_401', 'Non autorisé (401)');
define('TITLE_403', 'Interdit (403)');
define('TITLE_404', 'Non trouvé (404)');
define('TITLE_500', 'Erreur interne du serveur (500)');
define('TITLE_503', 'Service indisponible (503)');
// DESC HTTP ERRORS
define('DESC_400', 'Le serveur ne comprend pas la requête');
define('DESC_401', 'La page désirée nécessite un nom d\'utilisateur et un mot de passe');
define('DESC_403', 'Accès interdit à la pagée désirée ');
define('DESC_404', 'Le serveur ne trouve pas la pagée désirée ');
define('DESC_500', 'La demande n\'a pas été effectuée. Le serveur a rencontré une condition inattendue');
define('DESC_503', 'La demande n\'a pas été effectuée. Le serveur est temporairement en surcharge.');

// ACCESO A DIRECTORIOS
define('FORM_INCOMPLETE', 'vous devez compléter le formulaire pour continuer');
define('TITLE_FORM_INCOMPLETE', 'Formulaire incomplet');
define('DOBLE_POSTED', 'Can not send url and local at the same time');
define('FATAL_ERROR_TITLE', 'Erreur');
define('INVALID_EXT', 'Type de fichier incorrect, seuls JPG, PNG, GIF et BMP sont autorisés');
define('INVALID_TITLE', 'Type de fichier incorrect');
define('INVALID_CORRUPT', 'fichier invalide ou corrompu');
define('NOTHING_TO_RESIZE', 'Il n\'y a rien à redimensionner');
define('INPUT_ERROR', 'Input error');
define('NO_ID', 'Aucun ID specifié');
define('NO_ID_TITLE', 'Aucun ID image donné');
define('NO_SELF_UPLOAD', 'Il n\'est pas possible de charger des images déjéà hébergée sur ce serveur');
define('CANT_UPLOAD_TITLE', 'Chargement impossible');
define('TOO_HEAVY', 'le fichier est trop lourd');
define('JUST_NUMBERS', 'Il suffit d\'entrer la valeur numérique de la largeur désirée');
define('UPLOADED_BUT_NOT_RESIZED', 'Image téléchargée (mais pas redimensionnée)');
define('OVER_RESIZE_ERROR', 'le redimensionnement ne fonctionne pas pour des valeurs supérieures à la largeur de l\'image originale');
define('RESIZE_LIMITS', 'Le redimensionnement ne fonctionne qu\'entre');

// INPUT TEXT
define('ENTER_WIDTH', 'Entrez la largeur désirée pour votre image');

// OK MESSAGES
define('UPLOAD_OK', 'Image téléchargé avec succès');
define('UPLOAD_AND_RESIZED', 'Image téléchargée et redimensionnée avec succès');

// VIEWVING
define('SEEING', 'Affichage de l\'image');
define('NOT_EXISTS', 'L\'image n\'existe pas');
define('NOT_EXISTS_TITLE', 'L\'image demandée n\'existe pas');
define('FULL_SIZE', 'plein taille');

// TXT
define('TXT_PREFERENCES', 'préférences');
define('TXT_TINYURL', 'Créer des URLs courts en utilisant '.$tiny_service);
define('TXT_CLOSE_PREF', 'fermer pref.');
define('TXT_LOCAL', 'choisissez l\'image que vous souhaitez télécharger depuis votre ordinateur');
define('TXT_REMOTE', 'entrer l\'<abbr title="http://where-is-the-image.com/image.jpg">url</abbr> de l\'image que vous souhaitez télécharger');
define('TXT_UPLOADING', 'Transfert de l\'image...');
define('TXT_REMOTE_RR', 'Ceci est l\'<abbr title="http://where-is-the-image.com/image.jpg">url</abbr> de l\'image que vous souhaitez télécharger');
define('TXT_TEMP_SAVE', 'nous stockons <abbr title="nous la supprimerons plus tard">temporairement</abbr> votre image, de sorte que vous puissiez la redimensionner à nouveau');
define('TXT_REZ_AGAIN', 'Nouevau redimensionnement...');
define('TXT_TEMP_PLACE', 'Voici votre image <span>temporaire</span>');
define('TXT_SEEING', 'affichage');
define('TXT_AND_RESIZE', 'et redimensionnée');
define('TXT_DID', 'téléchargée');

// SHARE
define('SHARE_THUMB_VIEWER', 'Lien miniature + <u>affichage</u>');
define('SHARE_FORUMS', 'Forums');
define('SHARE_DIRECT', 'Afficher directement l\'image');
define('SHARE_VIEWER', 'Afficher');
define('SHARE_SOCIAL', 'Socialiser cette image');
define('SHARE_NETWORKS', 'Réseaux Sociaux');
define('SHARE_TWITTER', 'Twitt cette image');
define('SHARE', 'share');

// RESIZE
define('RESIZE_DSC', 'automatique de votre image dans une autre taille');
define('RESIZE_WIDTH', 'Largeur');
define('RESIZE_PIXELS', 'en pixels');
define('RESIZE_KEEP', '* proportions respectées');

?>