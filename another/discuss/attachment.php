<?php
require("config.inc.php");
require("function.php");
$username=$_SESSION['username'];
$action = $_GET['action'];
$logid = $_GET['logid'];

//上传表单显示
if ($action == 'selectFile') {
	$attachnum = 0;

	if ($logid) {
		$sql = "SELECT * FROM forum_attachment where blogid=$logid";
		$query=mysql_query($sql);
		$attachnum = mysql_num_rows($query);
	}
	$maxsize = '30MB';
	//允许附件类型
	$att_type_str = 'rar zip gif jpg jpeg png bmp';
    
    require_once("upload.php");
}
//上传附件


    if ($action == 'upload') {

    $logid=$_POST['logid'];
    $attach = $_FILES['attach'];
	if ($attach) {
		for ($i = 0; $i < count($attach['name']); $i++) {
			if ($attach['error'][$i] != 4) {
				$upfname = uploadFile($attach['name'][$i], $attach['error'][$i], $attach['tmp_name'][$i], $attach['size'][$i], getAttType(),$username);
				//写入附件信息
				$query="INSERT INTO forum_attachment (blogid,filename,filesize,filepath,addtime) values ($logid,'".$attach['name'][$i]."','".$attach['size'][$i]."','".$upfname."','".time()."')";
				mysql_query($query);
				//mysql_query("UPDATE forum_topic SET attnum=attnum+1 WHERE tid=$logid");
			}
		}
	}

    header("Location: attachment.php?action=attlib&logid=$logid");
}
//附件库
if ($action == 'attlib') {
    $logid = $_GET['logid'];
	$sql="SELECT * FROM forum_attachment where blogid=$logid ";
	$query=mysql_query($sql);
	$attachnum = mysql_num_rows($query);
	$attach = array();
	while ($dh=mysql_fetch_array($query)) {
		$attsize = $dh['filesize'];
		$filename = htmlspecialchars($dh['filename']);

		$attach[] = array(
		'attsize'=>$attsize,
		'aid'=>$dh['aid'],
		'filepath'=>$dh['filepath'],
		'filename'=>$filename
		);
	}
require_once("attlib.php");
}
//删除附件
if ($action == 'del_attach') {
	$aid = $_GET['aid'];
	$query=mysql_query("select filepath,blogid from forum_attachment where aid=$aid ");
	$attach=mysql_fetch_array($query);
	$logid = $attach['blogid'];

	if (file_exists($attach['filepath'])) {
		$fpath = str_replace('thum-', '', $attach['filepath']);
		if ($fpath != $attach['filepath']) {
			@unlink($fpath) or emMsg("删除附件失败!");
		}
		@unlink($attach['filepath']) or emMsg("删除附件失败!");
	}
//	$query=mysql_query("SELECT blogid FROM forum_attachment where aid=$aid");
//	$row = mysql_fetch_array($query);
//	mysql_query("UPDATE forum_topic SET attnum=attnum-1 WHERE gid={$row['blogid']}");
	mysql_query("DELETE FROM forum_attachment where aid=$aid ");
    
    header("Location: attachment.php?action=attlib&logid=$logid");
}
?>