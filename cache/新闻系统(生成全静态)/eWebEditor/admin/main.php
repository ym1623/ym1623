<?php
/*
*######################################
* eWebEditor v3.80 - Advanced online web based WYSIWYG HTML editor.
* Copyright (c) 2003-2006 eWebSoft.com
*
* For further information go to http://www.ewebsoft.com/
* This copyright notice MUST stay intact for use.
*######################################
*/
?>

<?php

require("private.php");

$sPosition = $sPosition."后台管理首页";

eWebEditor_Header();
eWebEditor_Content();
eWebEditor_Footer();


function eWebEditor_Content(){
	?>

	<table border=0 cellspacing=1 align=center class=navi>
	<tr><th><?=$GLOBALS["sPosition"]?></th></tr>
	</table>

	<br>

	<table border=0 cellspacing=1 align=center class=list>
	<tr><th colspan=2>eWebEditor 3.8 版权、常用联系方法、技术支持</th></tr>
	<tr>
		<td width="15%">软件版本：</td>
		<td width="85%">eWebEditor Version 3.8 简体中文专业版</td>
	</tr>
	<tr>
		<td width="15%">版权所有：</td>
		<td width="85%"><a href="http://www.ewebsoft.com" target="_blank">eWebSoft.com</a>&nbsp;&nbsp;已获得国家版权局颁发的《计算机软件著作权登记证书》,登记号:2004SR06549</td>
	</tr>
	<tr>
		<td width="15%">程序制作：</td>
		<td width="85%">eWeb开发团队</td>
	</tr>
	<tr>
		<td width="15%">主页地址：</td>
		<td width="85%"><a href="http://www.eWebSoft.com" target=_blank>http://www.eWebSoft.com</a>&nbsp;&nbsp;&nbsp;<a href="http://www.webasp.net" target=_blank>http://www.webasp.net</a></td>
	</tr>
	<tr>
		<td width="15%">产品介绍：</td>
		<td width="85%"><a href="http://www.eWebEditor.net" target=_blank>http://www.eWebEditor.net</a></td>
	</tr>
	<tr>
		<td width="15%">论坛地址：</td>
		<td width="85%"><a href="http://bbs.webasp.net" target=_blank>http://bbs.webasp.net</a></td>
	</tr>
	<tr>
		<td width="15%">联系方式：</td>
		<td width="85%">OICQ:589808&nbsp;&nbsp;&nbsp;&nbsp;Email:<a href="mailto:service@ewebsoft.com">service@ewebsoft.com</a></td>
	</tr>
	</table>

	<br>

	<table border=0 cellspacing=1 align=center class=list>
	<tr><th colspan=2>服务器的有关参数</th><th colspan=2>组件支持有关参数</th></tr>
	<tr>
		<td width="15%">服务器名：</td>
		<td width="45%"><?=$_SERVER["SERVER_NAME"]?></td>
		<td width="20%">mysql数据库：</td>
		<td width="20%"><?=showResult(function_exists("mysql_close"))?></td>
	</tr>
	<tr>
		<td width="15%">服务器IP：</td>
		<td width="45%"><?=$_SERVER["LOCAL_ADDR"]?></td>
		<td width="20%">odbc数据库：</td>
		<td width="20%"><?=showResult(function_exists("odbc_close"))?></td>
	</tr>
	<tr>
		<td width="15%">服务器端口：</td>
		<td width="45%"><?=$_SERVER["SERVER_PORT"]?></td>
		<td width="20%"> SQL Server数据库：</td>
		<td width="20%"><?=showResult(function_exists("mssql_close"))?></td>
	</tr>
	<tr>
		<td width="15%">服务器时间：</td>
		<td width="45%"><?=date("Y年m月d日H点i分s秒")?></td>
		<td width="20%">msql数据库：</td>
		<td width="20%"><?=showResult(function_exists("msql_close"))?></td>
	</tr>
	<tr>
		<td width="15%">PHP版本：</td>
		<td width="45%"><?=PHP_VERSION?></td>
		<td width="20%">SMTP：</td>
		<td width="20%"><?=showResult(get_magic_quotes_gpc("smtp"))?></td>
	</tr>
	<tr>
		<td width="15%">WEB服务器版本：</td>
		<td width="45%"><?=$_SERVER["SERVER_SOFTWARE"]?></td>
		<td width="20%">图形处理 GD Library：</td>
		<td width="20%"><?=showResult(function_exists("imageline"))?></td>
	</tr>

	<tr>
		<td width="15%">服务器操作系统：</td>
		<td width="45%"><?=PHP_OS?></td>
		<td width="20%">XML：</td>
		<td width="20%"><?=showResult(get_magic_quotes_gpc("XML Support"))?></td>
	</tr>
	<tr>
		<td width="15%">脚本超时时间：</td>
		<td width="45%"><?=get_cfg_var("max_execution_time")?> 秒</td>
		<td width="20%">FTP：</td>
		<td width="20%"><?=showResult(get_magic_quotes_gpc("FTP support"))?></td>
	</tr>
	<tr>
		<td width="15%">站点物理路径：</td>
		<td width="45%"><?=realpath("../")?></td>
		<td width="20%">Sendmail：</td>
		<td width="20%"><?=showResult(get_magic_quotes_gpc("Internal Sendmail Support for Windows 4"))?></td>
	</tr>
	<tr>
		<td width="15%">脚本上传文件大小限制：</td>
		<td width="45%"><?=get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件"?></td>
		<td width="20%">显示错误信息：</td>
		<td width="20%"><?=showResult(get_cfg_var("display_errors"))?></td>
	</tr>
	<tr>
		<td width="15%">POST提交内容限制：</td>
		<td width="45%"><?=get_cfg_var("post_max_size")?></td>
		<td width="20%">使用URL打开文件：</td>
		<td width="20%"><?=showResult(get_cfg_var("allow_url_fopen"))?></td>
	</tr>
	<tr>
		<td width="15%">服务器语种：</td>
		<td width="45%"><?=getenv("HTTP_ACCEPT_LANGUAGE")?></td>
		<td width="20%">压缩文件支持(Zlib)：</td>
		<td width="20%"><?=showResult(function_exists("gzclose"))?></td>
	</tr>
	<tr>
		<td width="15%">脚本运行时可占最大内存：</td>
		<td width="45%"><?=get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无"?></td>
		<td width="20%">ZEND支持(1.3.0)：</td>
		<td width="20%"><?=showResult(function_exists("zend_version"))?></td>
	</tr>	
	</table>

	
<?php
}


function showResult($v){
	if($v==1){
		echo'<b>√</b>&nbsp;<font class=gray>支持</font>';
	}else{
		echo'<font class=red><b>×</b></font>&nbsp;<font class=gray>不支持</font>';
	}
}

?>