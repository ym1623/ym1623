<?php header("content-Type: text/html; charset=utf-8");
ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>比特福短网址压缩，免费网址压缩！快速、稳定！|u.bitefu.net</title>
<meta name="keywords" content="网址压缩,短网址压缩,url压缩" />
<meta name="description" content="比特福短网址压缩u.bitefu.net，是国内专业的网址压缩网站，免注册！快速、稳定。做最好的网站压缩网站！" />
<style type="text/css">
body {font-family:Geneva, Arial, Helvetica, sans-serif;font-size:0.9em;text-align:center;}
a, a:hover, a:visited {color:#d20000;}
form {padding:15px;margin:0;border:1px solid #dddddd;width:75%;}
form label {font-weight:bold;padding-right:10px;}
form input {border:1px solid #dddddd;border-right:2px solid #cccccc;border-bottom:2px solid #cccccc;padding:4px;}
form input.button {background-color:#D20000;font-weight:bold;font-size:0.8em;color:#ffffff;border:1px solid #FF0505;border-right-color:#9E0000;border-bottom-color:#9E0000;font-family:Verdana, Arial, Helvetica, sans-serif;}
</style>
</head>
<body>

<?php
/*
location of file to store URLS
*/
$file= 'urls.txt';/* 
use mod_rewrite: 0 - no or 1 - yes
*/
$use_rewrite= 1;/*
language/style/output variables
*/
$l_url= 'URL';$l_nourl= '<strong>没有输入URL地址</strong>';
$l_yoururl= '<strong>你的短网址:</strong>';
$l_invalidurl= '<strong>无效的URL.</strong>';
$l_createurl= '生成短网址';//////////////////// NO NEED TO EDIT BELOW ////////////////////
$dir= dirname($_SERVER['PHP_SELF']);
if(!is_writable($file) || !is_readable($file))
{die('Cannot write or read from file. Please CHMOD the url file (urls.txt) by default to 777 and make sure it is uploaded.');}

$action= trim($_GET['id']);$action= (empty($action) || $action== '') ? 'create' : 'redirect';
$valid= "^(https?|ftp)\:\/\/([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?[a-z0-9+\$_-]+(\.[a-z0-9+\$_-]+)*(\:[0-9]{2,5})?(\/([a-z0-9+\$_-]\.?)+)*\/?(\?[a-z+&\$_.-][a-z0-9;:@/&%=+\$_.-]*)?(#[a-z_.-][a-z0-9+\$_.-]*)?\$";$output= '';
if($action== 'create'){
	if(isset($_POST['create'])){$url= trim($_POST['url']);
	$urlsarr= file($file);foreach($urlsarr as $v){$urls[]=trim($v);}$urlsid=array_search($url,$urls);
	if($urlsid){$urlid=$urlsid+1;
	$shorturl= ($use_rewrite== 1) ? "http://{$_SERVER['HTTP_HOST']}{$dir}/{$urlid}" : "http://{$_SERVER['HTTP_HOST']}{$dir}{$filename}?id={$urlid}";
	$output= "{$l_yoururl} <a href='{$shorturl}' target='_blank'>{$shorturl}</a>";
	}else{if($url== ''){$output= $l_nourl;}
	else{if(eregi($valid, $url))
		{$fp= fopen($file, 'a');fwrite($fp, "{$url}\r\n");fclose($fp);$id= count(file($file));$filename= explode('/', $_SERVER['PHP_SELF']);$filename= $filename[(count($filename) - 1)];$shorturl= ($use_rewrite== 1) ? "http://{$_SERVER['HTTP_HOST']}{$dir}{$id}" : "http://{$_SERVER['HTTP_HOST']}{$dir}{$filename}?id={$id}";$output= "{$l_yoururl} <a href='{$shorturl}' target='_blank'>{$shorturl}</a>";}
			else{$output= $l_invalidurl;}
	}}}
}
if($action== 'redirect')
{
	$urls= file($file);$id= trim($_GET['id']) - 1;
	if(isset($urls[$id]))
	{header("Location: {$urls[$id]}");exit;}else{die('Script error');}
}
//////////////////// FEEL FREE TO EDIT BELOW ////////////////////
?>
<div align="center" style="margin-top:100px;">
<h2><a href="http://www.bitefu.net" target="_blank" title="比特福免费短网址压缩">比特福免费短网址压缩</a></h2>
<p>短网址服务可以帮助你把一个长网址缩短，方便你在社交网络和微博上分享链接。</p>
<!-- start html output -->
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<p class="response"><?=$output?></p>
<p><label for="s-url">请输入URL地址:</label>
	<input name="url" type="text" id="s-url" size="60" />
<input type="submit" class="button" name="create" value="<?=$l_createurl?>" /></p></form>
<p><script type="text/javascript">alimama_pid="mm_16329643_2337872_9044351";alimama_type="g";alimama_tks={};alimama_tks.style_i=1;alimama_tks.lg_i=0;
alimama_tks.w_i=572;alimama_tks.h_i=45;alimama_tks.btn_i=1;alimama_tks.txt_s="";alimama_tks.hot_i=0;alimama_tks.hc_c="0065FF";alimama_tks.cid_i=0;alimama_tks.c_i=0;</script><script type="text/javascript" src="http://a.alimama.cn/inf.js"></script><br>
<a href="http://www.bitefu.net" target="_blank">比特福精品汇聚</a> <a href="http://www.hbwanghai.com" target="_blank">网站建设</a>
<br><?=date("Y")?> <a href="http://www.bitefu.net" target="_blank">@ bitefu.net</a>
</p></div>
<!-- end html output -->
<div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/3729735.js"></script></div>
</html>
<?php ob_end_flush();?>