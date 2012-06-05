<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_server = 'localhost';
$db_user = 'root';
$db_psword = '';
$db_name = 'news';
$conn = mysql_connect($db_server,$db_user,$db_psword);
mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_name,$conn);
if(!$conn)echo 'mysql die';

$pagesize = 2;
?>