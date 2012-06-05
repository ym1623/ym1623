<?php
require("config.inc.php");
if($_SESSION['username']==ADMIN_USER)
{
	
    $fid=$_POST['fid'];
	$tid=$_POST['tid'];
    $id=$_POST['tidarray'];
    
//删除帖子   
    $result1=mysql_query("delete from forum_topic where tid=$tid");
    $result2=mysql_query("delete from forum_reply where tid=$tid");

    $query = mysql_query("select aid,filepath from forum_attachment where tid=$tid");
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
    
    
//循环删除帖子	
	foreach($id as $ide){
    $result1=mysql_query("delete from forum_topic where tid=$ide");
    $result2=mysql_query("delete from forum_reply where tid=$ide");
	
	$query = mysql_query("select aid,filepath from forum_attachment where tid=$ide");
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
}

//更新帖子总条数
$sql="select count(tid) as MaxReplyId from `forum_topic` where fid='$fid'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$post=$row[0];
mysql_query("update `forum_forum` set post='$post' where id='$fid'");


if($result1 AND $result2)
{
	header("Location:main_forum.php?fid=$fid");
}
else{
	ExitMessage("数据库操作失败");
	}
}else{
	ExitMessage("你没有权限");
}

?>
