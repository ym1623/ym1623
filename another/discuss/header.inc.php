<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>论坛</title>
<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script charset="utf-8" src="editor/kindeditor.js"></script>
<style type="text/css" media="all">
body{margin:0px;padding:0px; font:12px verdana,arial,helvetica,sans-serif;}
td,legend{font-size:14px;line-height:16px;}
p{font-size:12px;}

#Header{margin:10px 0px 10px 0px;padding:10px 8px 8px 20px;border-style:solid;
	border-color:#eee;font-size:14px;height:14px;}
#Content{margin:5px;width:100%;padding:10px;}
</style>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;unooo音响</h2>
<div id="Header">
<?php
if($_SESSION['username'])
{
?>
<strong><?php echo $_SESSION['username'];?>,欢迎登陆</strong> | &nbsp;
<a href="index.php">首页</a> | &nbsp;
<a href="edit_profile.php">个人资料</a> | &nbsp;
<a href="logoff_user.php">退出论坛</a>
<?php
}else{
?>
<a href="index.php">首页</a> | &nbsp;
<a href="create_user.php">注册</a> | &nbsp;
<a href="logon_forum.php">登陆</a>
<?php
}
?>
<br/>
</div>
