<?php
!function_exists('readover') && exit('Forbidden');

Class DB_ERROR {

	function DB_ERROR($msg) {
		global $db_bbsname,$db_obstart,$REQUEST_URI;
		$sqlerror = mysql_error();
		$sqlerrno = mysql_errno();
		ob_end_clean();
		$db_obstart==1 ? ob_start('ob_gzhandler') : ob_start();
		echo"<html><head><title>$db_bbsname</title><style type='text/css'>P,BODY{FONT-FAMILY:tahoma,arial,sans-serif;FONT-SIZE:11px;}A { TEXT-DECORATION: none;}a:hover{ text-decoration: underline;}TD { BORDER-RIGHT: 1px; BORDER-TOP: 0px; FONT-SIZE: 16pt; COLOR: #000000;}</style><body>\n\n";
		echo"<table style='TABLE-LAYOUT:fixed;WORD-WRAP: break-word'><tr><td>$msg";
		echo"<br><br><b>The URL Is</b>:<br>http://$_SERVER[HTTP_HOST]$REQUEST_URI";
		echo"<br><br><b>MySQL Server Error</b>:<br>$sqlerror  ( $sqlerrno )";
		echo"<br><br><b>You Can Get Help In</b>:<br><a target=_blank href=http://www.qhdinfo.com><b>http://www.qhdinfo.com</b></a>";
		echo"</td></tr></table>";
		exit;
	}
}
?>