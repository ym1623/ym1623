<?php
   $authorized = FALSE;

   if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
      $authFile = file("./password.txt");

      foreach ($authFile as $login) {
         list($username, $password) = explode(":", $login);
         $password = trim($password);
         if (($username == $_SERVER['PHP_AUTH_USER']) && ($password == md5($_SERVER['PHP_AUTH_PW']))) {
            $authorized = TRUE;
            break;
         }
      }
   }

   // If not authorized, display authentication prompt or 401 error
   if (! $authorized) {
      header('WWW-Authenticate: Basic Realm="Secret Stash"');
      header('HTTP/1.0 401 Unauthorized');
      print('You must provide the proper credentials!');
      exit;
   }

?>


<!-- 
password.txt
joe:60d99e58d66a5e0f4f89ec3ddd1d9a80
-->