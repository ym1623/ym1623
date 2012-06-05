<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require('../config/conn.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
}
$sqlType = mysql_query("SELECT * FROM `type` WHERE `id` = $id");
$row = mysql_fetch_array($sqlType);
$path = $_SERVER['DOCUMENT_ROOT'].'/newslist/'.$row['entype'];

//删除目录下 所有文件及目录
function delDirAndFile( $dirName ){
	if ( $handle = opendir( "$dirName" ) ) {
		while ( false !== ( $item = readdir( $handle ) ) ) {
			if ( $item != "." && $item != ".." ) {
				if ( is_dir( "$dirName/$item" ) ) {
					delDirAndFile( "$dirName/$item" );
				} else {
					if( unlink( "$dirName/$item" ) )echo "成功删除文件： $dirName/$item<br />\n";
				}
			}
		}
	closedir( $handle );
	if( rmdir( $dirName ) )echo "成功删除目录： $dirName<br />\n";
	}
}
delDirAndFile($path);

$delTypeNews = mysql_query("DELETE FROM `news` WHERE `type` = '$row[type]'");
$delType = mysql_query("DELETE FROM `type` WHERE `id` = $id");
echo "<script>alert('删除成功');window.location=('/admin/')</script>";
?>