<?php
require('../config/conn.php');
//生成详细页
if(isset($_GET['type'])){
$type=$_GET['type'];
$sqlType = mysql_query("SELECT * FROM `type` WHERE `type` = '$type'");
$rows2=mysql_fetch_assoc($sqlType);


$sqlNum = mysql_query("select * from news where type='$type'");
$num = mysql_num_rows($sqlNum);
if(!$num)echo "<script>alert('没有内容可更新');location=('/admin/')</script>";
$pages=($num-1)/$pagesize+1;
$pages=intval($pages);


	for($j=1;$j<=$pages;$j++){
		$root=$_SERVER['DOCUMENT_ROOT'];
		$url=$_SERVER['HTTP_HOST'];
		$url1="http://".$url."/xiang.php?type=".$type."&page=".$j;
		$aaaaa=file_get_contents($url1);
		$newsfile=$root."/newslist/".$rows2['entype']."/".$j.".htm";
		$fp=fopen($newsfile,"w");
		fwrite($fp,$aaaaa);
		echo "<script>alert('更新成功');location=('/admin/')</script>";
	}
}
?>