<?php   $logid = $_GET['logid']; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>upload</title>
<link href="css/css-att.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div id="media-upload-header">
	<span><a href="attachment2.php?action=selectFile&logid=<?php echo $logid; ?>">上传附件</a></span>
	<span id="curtab"><a href="attachment2.php?action=attlib&logid=<?php echo $logid; ?>">附件库（<?php echo @$attachnum; ?>）</a></span>
</div>
<div id="media-upload-body">
<?php if(@!$attach): ?>
<p id="attmsg">该日志没有附件</p>
<?php else:
foreach($attach as $key=>$value):
	$extension  = strtolower(substr(strrchr($value['filepath'], "."),1));
	$atturl = substr(str_replace('thum-','',$value['filepath']),0);
	$emImageType = array('gif', 'jpg', 'jpeg', 'png', 'bmp');//支持的图片类型
	if($extension == 'zip' || $extension == 'rar'){
		$imgpath = "images/tar.gif";
		$embedlink = '';
	}elseif (in_array($extension, $emImageType)) {
		$imgpath = $value['filepath'];
		$ed_imgpath = substr($imgpath,0);
		//echo $ed_imgpath;
		
		$embedlink = "<a href=\"javascript: parent.addattach('$atturl','$ed_imgpath',{$value['aid']});\">嵌入 </a>";
	}else {
		$imgpath = "images/tar.gif";
		$embedlink = '';
	}
?>
	<li id="attlist"><a href="<?php echo $atturl; ?>" target="_blank" title="<?php echo $value['filename']; ?>"><img src="<?php echo $imgpath; ?>" width="60" height="60" border="0" align="absmiddle"/></a>
	<br><a href="javascript: em_confirm(<?php echo $value['aid']; ?>, 'att');">删除</a> <?php echo $embedlink; ?></li>
<?php endforeach; endif; ?>
</div>
</body>
</html>