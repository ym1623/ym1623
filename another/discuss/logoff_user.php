<?php
require("config.inc.php");
$_SESSION=array();
session_unset();
//清空SESSION
session_destroy();
header("Location:index.php");
?>
