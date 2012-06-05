<?php
require("config.inc.php");
if(!$_SESSION['username'])
{
	include("header.inc.php");
?>
  <h2>创建新帖</h2>
  <fieldset>
<legend>未注册用户</legend>

<p>对不起，请<a href="create_user.php">注册</a>新用户,
或者<a href="logon_forum.php">登陆</a>.
</p>
</fieldset>
<?php
}else{
	$tid=$_POST['tid'];
	$fid=$_POST['fid'];
    $rid=$_POST['rid'];
	
    $reply_detail=$_POST['detail'];
    if(!$reply_detail)
	{
		ExitMessage("请输入正文");
	}

if($reply_detail)
{
	$sql="update `forum_reply` set reply_detail='$reply_detail' where tid='$tid' and fid='$fid' and rid='$rid'";
	$result=mysql_query($sql);
	header("Location:view_topic.php?fid=$fid&tid=$tid");
}
else
{
	ExitMessage("记录不存在");

}
	
}
?>
