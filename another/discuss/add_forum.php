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
    $topic=filterBadWords($_POST['topic']);
	$detail=filterBadWords($_POST['detail']);

    if(!$topic)
	{
		ExitMessage("请输入标题");
	}
	if(!$detail)
	{
		ExitMessage("请输入正文");
	}


	$sql="insert into forum_forum(topic,detail,datetime)" .
			"values('$topic','$detail',NOW())";
	$result=mysql_query($sql);

	if($result)
	{
		header("Location:index.php");
	}
	else{
		ExitMessage("数据库错误");
	}
}
?>
