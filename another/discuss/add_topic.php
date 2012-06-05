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
	$username=$_SESSION['username'];
	
	$sql="select * from `forum_user` where username='$username'";
	$result=mysql_query($sql);
	$info=mysql_fetch_array($result);
	
	$email=$info['email'];
	
	$fid=$_POST['fid'];
    $topic=$_POST['topic'];
	$detail=$_POST['detail'];
	
	$email=$info['email'];
	$sticky=$_POST['sticky'];
	$locked=$_POST['locked'];
    
    
    $logid=$_POST['logid'];

    echo $logid;
    
    
    
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
	



//插入帖子
    mysql_query("insert into `forum_topic`(tid,fid,topic,detail,name,email,datetime,locked,sticky,filename,path)" . "values('','$fid','$topic','$detail','$username','$email',NOW(),'$locked','$sticky','$filename','$path')");
//附件与贴子关联
    $sql="select * from forum_topic where tid in (select max(tid) from forum_topic)";
    $result=mysql_query($sql);
    $row=mysql_fetch_row($result);
    $tid=$row[0];
    mysql_query("UPDATE forum_attachment SET tid='$tid',blogid =0 WHERE blogid='$logid'");


//删除无用的表与附件
$query = mysql_query("select aid,filepath from forum_attachment where tid=0");
while($attach=mysql_fetch_array($query)){

		if (file_exists($attach['filepath'])) {
			$fpath = str_replace('thum-', '', $attach['filepath']);
			if ($fpath != $attach['filepath']) {
				@ unlink($fpath) or ExitMessage("删除附件失败!");
			}
			@ unlink($attach['filepath']) or ExitMessage("删除附件失败!");
			mysql_query("delete from forum_attachment where aid='$attach[0]'");
		
		}
}

//更新帖子总条数
$sql="select count(tid) as MaxReplyId from `forum_topic` where fid='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$post=$row[0];

if($result)
{
mysql_query("update `forum_forum` set post='$post' where id='$fid'");
header("Location:main_forum.php?fid=$fid");
}
else
{
	ExitMessage("记录不存在");
}
	
}	
?>




