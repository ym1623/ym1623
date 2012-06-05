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

	
	$topic=filterBadWords($_POST['topic']);
	$detail=filterBadWords($_POST['detail']);

	$name=$_SESSION['username'];
	$sticky=$_POST['sticky'];
	$locked=$_POST['locked'];
    
    


	if(!$topic)
	{
		ExitMessage("请输入标题");
	}
	if(!$detail)
	{
		ExitMessage("请输入正文");
	}
	if($locked=="on" && $name==ADMIN_USER)
	{
		$locked=1;
	}else{
		$locked=0;
	}
	if($sticky=="on" && $name==ADMIN_USER)
	{
		$sticky=1;
	}else{
		$sticky=0;
	}
	
  
if($topic)
{
	$sql="update `forum_topic` set topic='$topic', detail='$detail', locked='$locked', sticky='$sticky', filename='$filename', path='$path' where tid='$tid' and fid='$fid'";
	$result=mysql_query($sql);
	header("Location:main_forum.php?fid=$fid&tid=$tid");
}
else
{
	ExitMessage("记录不存在");

}
	
}
?>
