<?php
require("config.inc.php");
if($_SESSION['username']==ADMIN_USER)
{
    $fid=$_POST['fid'];
	$tid=$_POST['tid'];
	$sql="update forum_topic set sticky='0' where tid='$tid'";
	$result=mysql_query($sql);

if($result)
{
	header("Location:view_topic.php?fid=$fid&tid=$tid");
}else{
	ExitMessage("数据库操作失败");
	}
}else{
	ExitMessage("你没有权限");
}
?>
