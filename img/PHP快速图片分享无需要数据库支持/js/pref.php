<?
/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */
  
$valueurl = $_GET['url'];
if ($valueurl=='0') { setcookie('prefurl', '', time() - 3600, '/', $_SERVER['SERVER_NAME']);}
if ($valueurl=='1') { setcookie('prefurl','tinyurl', 0, '/', $_SERVER['SERVER_NAME']);}

?>