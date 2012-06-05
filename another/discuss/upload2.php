<?php   $logid = $_GET['logid']; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>upload</title>
<link href="css/css-att.css" type=text/css rel=stylesheet>
<script>
function uploadfile()
{
	var as_logid = parent.document.getElementById('as_logid').value
	document.upload.action = "attachment2.php?action=upload&logid="+as_logid;
	document.upload.submit();
}

function addattachfrom() {
	var newnode = document.getElementById('attachbodyhidden').firstChild.cloneNode(true);
	document.getElementById('attachbody').appendChild(newnode);
}
function removeattachfrom() {
	document.getElementById('attachbody').childNodes.length > 1 && document.getElementById('attachbody').lastChild ? document.getElementById('attachbody').removeChild(document.getElementById('attachbody').lastChild) : 0;
}
</script>
<body>
<div id="media-upload-header">
	<span id="curtab"><a href="attachment2.php?action=selectFile&logid=<?php echo $logid; ?>">上传附件</a></span>
	<span><a href="attachment2.php?action=attlib&logid=<?php echo $logid; ?>">附件库（<?php echo @$attachnum; ?>）</a></span>
</div>

<form enctype="multipart/form-data" method="post" name="upload" action="">
<input type="hidden" name="logid" value="<?php echo $logid;?>"/>
<div id="media-upload-body">
	<p>(单个附件最大：<?php echo @$maxsize ;?>，允许类型：<?php echo @$att_type_str; ?>)
	<div id="attachbodyhidden" style="display:none"><span><input type="file" name="attach[]"></span></div>
	<div id="attachbody"><span><input type="file" name="attach[]"></span></div>
	<input type="button" name="html-upload" value="上传" onclick="uploadfile();"/>
	<span style="margin-left:10px">
    <a id="attach" title="增加附件" onclick="addattachfrom()" href="javascript:;" name="attach">[ + ]</a> 
    <a id="attach" title="减少附件" onclick="removeattachfrom()" href="javascript:;" name="attach">[ - ]</a>
    </span>
	</p>
</div>
</form>
</body>
</html>
