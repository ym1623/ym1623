<?php
require("config.inc.php");
if(!$_SESSION['username'])
{
	ExitMessage("请<b>登录</b>后在执行","logon_forum.php");
}

if (is_uploaded_file($_FILES['upfile']['tmp_name'])){

$upfile=$_FILES["upfile"];

$name = $upfile["name"];
$type = $upfile["type"];
$size = $upfile["size"];
$tmp_name = $upfile["tmp_name"];
$error = $upfile["error"];

}
switch ($type) {
	case 'image/pjpeg' : $ok=1;
		break;
	case 'image/jpeg' : $ok=1;
		break;
	case 'image/gif' : $ok=1;
		break;
	case 'image/png' : $ok=1;
		break;
}

$dir=$_SESSION['username'];

mkdir('up/'.$dir);


if($ok && $error=='0'){
	
   move_uploaded_file($tmp_name,'up/'."$dir".'/'.$name);

}


$username=$_SESSION['username'];
$email=ClearSpecialChars($_POST['email']);
$realname=ClearSpecialChars($_POST['realname']);
$password=$_POST['password'];
$path=('up/'."$dir".'/'.$name);
$qq=$_POST['qq'];
if(!$password)
{
	$sql="update forum_user set email='$email',realname='$realname',qq='$qq',path='$path'" .
			" where username='$username'";
}else{
	$password=md5($password);
		$sql="update forum_user set email='$email',realname='$realname',password='$password',qq='$qq',path='$path'" .
			" where username='$username'";
}

$result=mysql_query($sql);
if($result)
{
?>

  <h2>个人资料更新成功</h2>
<p>
你的个人资料已被更新
请<a href="index.php">返回</a>论坛首页
</p>
<?php
}else{

	ExitMessage("记录不存在");
}
?>

