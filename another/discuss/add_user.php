<?php
require("config.inc.php");
$username=ClearSpecialChars($_POST['username']);
$password=$_POST['password'];
$email=ClearSpecialChars($_POST['email']);
$realname=ClearSpecialChars($_POST['realname']);
$qq=$_POST['qq'];
if(!$username){
	ExitMessage('请输入用户名');
}
if(!$password){
	ExitMessage('请输入密码');
}
if(!$email){
	ExitMessage('请输入邮箱地址');
}
if(!$qq){
	ExitMessage('请输入QQ号');
}
elseif(!checkEmail($email)){
	ExitMessage('邮箱地址格式错误');
}

$password=md5($_POST['password']);

$sql="select * from forum_user where username='$username'";
$result=mysql_query($sql);
$num_rows=mysql_num_rows($result);

if($num_rows>0){
	ExitMessage('用户名存在');
}

$sql="insert into forum_user (username, password, email,realname,qq,regdate) values('$username','$password','$email','$realname','$qq',NOW())";
$result=mysql_query($sql);

if($result){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>论坛</title>
  <h2>创建用户</h2>

<p>账号已建立，单击<a href="logon_forum.php">这里</a>登陆.</p>
<?php
}else{

	ExitMessage("数据库错误");
}

?>
