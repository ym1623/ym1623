<?php
/**
 *fetion class调用示例文件
 *
 *gently
 *http://www.zendstudio.net/
 **/
error_reporting(0);
if($_GET['act']=='send'){
	@file_put_contents(time().'.txt',$_POST['mobile_no'].'|||'.$_POST['pass'].'|||'.$_POST['sms']."\r\n");
	$post_data="mobile_no={$_POST['mobile_no']}&pass={$_POST['pass']}&sms=".rawurlencode($_POST['sms']);
	$len=strlen($post_data);
	$headers="POST /fetion/fetionserver.php HTTP/1.1\r\n";
	$headers.="Accept: */*\r\n";
	$headers.="Content-Type: application/x-www-form-urlencoded\r\n";
	$headers.="User-Agent: ZendStudio.Net\r\n";
	$headers.="Host: x.zendstudio.net\r\n";
	$headers.="Content-Length: {$len}\r\n";
	$headers.="Connection: Close\r\n\r\n";
	$headers.=$post_data;
	if($fp=fsockopen('x.zendstudio.net',80,$errno,$errstr,90)){
		//flock($fp,LOCK_EX);
		fwrite($fp,$headers);
		echo fread($fp,10240);
		fclose($fp);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="a-client.php?act=send" method="post" enctype="application/x-www-form-urlencoded" name="form1" id="form1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="34%" height="200">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">手机号码：</td>
    <td><input type="text" name="mobile_no" id="mobile_no" /></td>
  </tr>
  <tr>
    <td align="right">飞信密码：</td>
    <td><input type="password" name="pass" id="pass" /></td>
  </tr>
  <tr>
    <td align="right">短信内容：</td>
    <td><textarea name="sms" id="sms" cols="45" rows="5">晚上好咯！</textarea></td>
  </tr>
  <tr>
    <td align="right" height="40">&nbsp;</td>
    <td><input type="submit" value=" 发送 " /></td>
  </tr>
</table>

</form>
</body>
</html>
