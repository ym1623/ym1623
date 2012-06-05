<?php
require("config.inc.php");
    
    $fid=$_POST['fid'];
	$tid=$_POST['tid'];

if(!$_SESSION['username'])
{
	ExitMessage("请<b>登录</b>后在执行","logon_forum.php");
}


$sql="select * from forum_topic where tid='$tid'";
$result=mysql_query($sql);
$topic_info=mysql_fetch_array($result);
if(!$topic_info)
{
	ExitMessage("该贴不存在","main_forum.php");
}
if($topic_info['locked']==1)
{
	ExitMessage("该贴已被锁定,不允许回复");
}

$username=$_SESSION['username'];
$sql="select * from forum_user where username='$username'";
$result=mysql_query($sql);
$user_info=mysql_fetch_array($result);

$reply_name=$_SESSION['username'];
$reply_email=$user_info['email'];
$reply_detail=$_POST['detail'];

if(!$reply_detail)
{
	ExitMessage("没有回帖记录","main_forum.php");
}

$sql="select Count(rid) as MaxReplyId from forum_reply where tid='$tid'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);

if($row)
{
	$rid=$row[0]+1;
}
else
{
	$rid=1;

}
$sql="insert into forum_reply (id,fid,tid,rid,reply_name,reply_email,reply_detail,reply_datetime)" .
		" values ('','$fid','$tid','$rid','$reply_name','$reply_email','$reply_detail',NOW())";
$result=mysql_query($sql);

if($result)
{
	$sql="update forum_topic set reply='$rid' where tid='$tid'";
	$result=mysql_query($sql);

}


$sql="select Count(rid) as MaxReplyId from forum_reply where fid='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$reply=$row[0];

if($row)
{
	$sql="update forum_forum set reply='$reply' where id='$fid'";
	$result=mysql_query($sql);
	header("Location:view_topic.php?fid=$fid&tid=$tid");
}
else
{
	ExitMessage("记录不存在");

}
?>
