<?php
/**
*
*  Copyright (c) 2003-06  PHPWind.net. All rights reserved.
*  Support : http://www.phpwind.net
*  This software is the proprietary information of PHPWind.com.
*
*/
!defined('R_P') && exit('Forbidden');

unset($_ENV,$HTTP_ENV_VARS,$_REQUEST,$HTTP_POST_VARS,$HTTP_GET_VARS,$HTTP_POST_FILES,$HTTP_COOKIE_VARS);
if(!get_magic_quotes_gpc()){
	Add_S($_POST);
	Add_S($_GET);
	Add_S($_FILES);
	Add_S($_COOKIE);
}

foreach($_POST as $_key=>$_value){
	!ereg("^\_",$_key) && !isset($$_key) && $$_key=$_POST[$_key];
}
foreach($_GET as $_key=>$_value){
	!ereg("^\_",$_key) && !isset($$_key) && $$_key=$_GET[$_key];
}  
include_once(D_P."data/sql_config.php");
include_once(R_P.'require/db_mysql.php');
 
//数据库连接
 
$db = new DB($dbhost, $dbuser, $dbpw, $dbname, $pconnect);
unset($dbhost, $dbuser, $dbpw, $dbname, $pconnect);

 
 
 

function Cookie($ck_Var,$ck_Value,$ck_Time='F'){
	global $cookietime;
	if($ck_Time=='F') $ck_Time = $cookietime;
	$S=$_SERVER['SERVER_PORT']=='443' ? 1:0;
	setCookie($ck_Var,$ck_Value,$ck_Time,'/','',$S);
}
function GetCookie($Var){
    return $_COOKIE[$Var];
}
function Add_S(&$array){
	if($array){
		foreach($array as $key=>$value){
			if(!is_array($value)){
				$array[$key]=addslashes($value);
			}else{
				Add_S($array[$key]);
			}
		}
	}
}
function HtmlConvert(&$array){
	if(is_array($array)){
		foreach($array as $key => $value){
			if(!is_array($value)){
				$array[$key]=htmlspecialchars($value);
			}else{
				HtmlConvert($array[$key]);
			}
		}
	} else{
		$array=htmlspecialchars($array);
	}
}
function substrs($content,$length){
	global $db_charset;
	if($length && strlen($content)>$length){
		if($db_charset!='utf-8'){
			$retstr='';
			for($i = 0; $i < $length - 2; $i++) {
				$retstr .= ord($content[$i]) > 127 ? $content[$i].$content[++$i] : $content[$i];
			}
			return $retstr.' ..';
		}else{
			return utf8_trim(substr($content,0,$length)).' ..';
		}
	}
	return $content;
}
function utf8_trim($str) {
	$len = strlen($str);
	for($i=strlen($str)-1;$i>=0;$i-=1){
		$hex .= ' '.ord($str[$i]);
		$ch   = ord($str[$i]);
		if(($ch & 128)==0)	return substr($str,0,$i);
		if(($ch & 192)==192)return substr($str,0,$i);
	}
	return($str.$hex);
}
   
function StrCode($string,$action='ENCODE'){
	$key	= substr(md5($_SERVER["HTTP_USER_AGENT"].$GLOBALS['db_hash']),8,18);
	$string	= $action == 'ENCODE' ? $string : base64_decode($string);
	$len	= strlen($key);
	$code	= '';
	for($i=0; $i<strlen($string); $i++){
		$k		= $i % $len;
		$code  .= $string[$i] ^ $key[$k];
	}
	$code = $action == 'DECODE' ? $code : base64_encode($code);
	return $code;
}
function gets($filename,$value)
{
	if($handle=@fopen($filename,"rb")){
		flock($handle,LOCK_SH);
		$getcontent=fread($handle,$value);//fgets调试
		fclose($handle);
	}
	return $getcontent;
}
function P_unlink($filename){
	strpos($filename,'..')!==false && exit('Forbidden');
	@unlink($filename);
}
function readover($filename,$method="rb"){
	strpos($filename,'..')!==false && exit('Forbidden');
    if($handle=@fopen($filename,$method)){
        flock($handle,LOCK_SH);
        $filedata=@fread($handle,filesize($filename));
        fclose($handle);
    }
    return $filedata;
}
function writeover($filename,$data,$method="rb+",$iflock=1,$check=1,$chmod=1){
	$check && strpos($filename,'..')!==false && exit('Forbidden');
	touch($filename);
	$handle=fopen($filename,$method);
	if($iflock){
		flock($handle,LOCK_EX);
	}
	fwrite($handle,$data);
	if($method=="rb+") ftruncate($handle,strlen($data));
	fclose($handle);
	$chmod && @chmod($filename,0777);
}
function openfile($filename,$style='Y')
{
	if($style=='Y'){
		$filedata=readover($filename);
		$filedata=str_replace("\n","\n<:wind:>",$filedata);
		$filedb=explode("<:wind:>",$filedata);
		//array_pop($filedb);
		$count=count($filedb);
		if($filedb[$count-1]==''||$filedb[$count-1]=="\r"){unset($filedb[$count-1]);}
		if(empty($filedb)){$filedb[0]="";}
		return $filedb;
	}else{
		$filedb=file($filename);
		return $filedb;
	}
}
function GetLang($lang,$EXT="php"){
	global $tplpath;
	if($lang == 'email' || $lang == 'log' || $lang == 'bbscode'){
		$path=R_P."template/$tplpath/lang_$lang.$EXT";
		!file_exists($path) && $path=R_P."template/wind/lang_$lang.$EXT";
		return $path;
	} else{
		$L_P =  eregi('^c_',$lang) ? C_P : R_P;
		$adminpath=file_exists($L_P."template/admin_$tplpath") ? "admin_$tplpath" : 'admin';		$path=$L_P."template/$adminpath/cp_lang_$lang.$EXT";
	}
	return $path;
}
function adminmsg($msg,$jumpurl='',$t=2)
{
	extract($GLOBALS, EXTR_SKIP);
	!$basename && $basename=$REQUEST_URI;
	if($jumpurl!=''){
		$ifjump="<META HTTP-EQUIV='Refresh' CONTENT='$t; URL=$jumpurl'>";
	}
	require_once GetLang('cpmsg');
	$lang[$msg] && $msg=$lang[$msg];
	include PrintEot('message');exit;
}
function Char_cv($msg){
	$msg = str_replace("\t","",$msg);
	$msg = str_replace("<","&lt;",$msg);  
	$msg = str_replace(">","&gt;",$msg);
	$msg = str_replace("\r","",$msg);
	$msg = str_replace("\n","<br />",$msg);
	$msg = str_replace("   "," &nbsp; ",$msg);#编辑时比较有效
	return $msg;
}
function ieconvert($msg){
	$msg = str_replace("\t","",$msg);
	$msg = str_replace("\r","",$msg);
	$msg = str_replace("   "," &nbsp; ",$msg);#编辑时比较有效
	return $msg;
}
function Quot_cv($msg){
	$msg = str_replace('"','&quot;',$msg);
	return $msg;       
}
function deldir($path){
	if (file_exists($path)){
		if(is_file($path)){
			P_unlink($path);
		} else{
			$handle = opendir($path);
			while ($file = readdir($handle)) {
				if (($file!=".") && ($file!="..") && ($file!="")){
					if (is_dir("$path/$file")){
						deldir("$path/$file");
					} else{
						P_unlink("$path/$file");
					}
				}
			}
			closedir($handle);
			rmdir($path);
		}
	}
}
  
 
function F_L_count($filename,$offset)
{
	global $onlineip;
	$count=0;
	if($fp=@fopen($filename,"rb")){
		flock($fp,LOCK_SH);
		fseek($fp,-$offset,SEEK_END);
		$readb=fread($fp,$offset);
		fclose($fp);
		$readb=trim($readb);
		$readb=explode("\n",$readb);
		$count=count($readb);$count_F=0;
		for($i=$count-1;$i>0;$i--){
			if(strpos($readb[$i],"|Logging Failed|$onlineip|")===false){
				break;
			}
			$count_F++;
		}
	}
	return $count_F;
}
function get_date($timestamp,$timeformat=''){
	global $db_datefm,$db_timedf,$_datefm,$_timedf;
	$date_show=$timeformat ? $timeformat : ($_datefm ? $_datefm : $db_datefm);
	if($_timedf){
		$offset = $_timedf=='111' ? 0 : $_timedf;
	}else{
		$offset = $db_timedf=='111' ? 0 : $db_timedf;
	}
	return gmdate($date_show,$timestamp+$offset*3600);
}
 
function PrintEot($template,$EXT="htm")
{
	global $tplpath;
	$L_P =  eregi('^c_',$template) ? C_P : R_P;
	///cms
	if($template=='bbscode' || $template=='c_header' || $template=='c_footer'){
		$path=$L_P."template/$tplpath/$template.$EXT";
		!file_exists($path) && $path=$L_P."template/wind/$template.$EXT";
		return $path;
	}
	///cms
	$adminpath=file_exists($L_P."template/admin_$tplpath") ? "admin_$tplpath" : 'admin';
	if(!$template) $template='N';
	$path=$L_P."template/$adminpath/$template.$EXT";
	return $path;
}
function readlog($filename,$offset=1024000)
{
	$readb=array();
	if($fp=@fopen($filename,"rb")){
		flock($fp,LOCK_SH);
		$size=filesize($filename);
		$size>$offset ? fseek($fp,-$offset,SEEK_END): $offset=$size;
		$readb=fread($fp,$offset);
		fclose($fp);
		$readb=str_replace("\n","\n<:wind:>",$readb);
		$readb=explode("<:wind:>",$readb);
		$count=count($readb);
		if($readb[$count-1]==''||$readb[$count-1]=="\r"){unset($readb[$count-1]);}
		if(empty($readb)){$readb[0]="";}
	}
	return $readb;
}

function checkselid($selid){
	if(is_array($selid)){
		$ret='';
		foreach($selid as $key => $value){
			if(!is_numeric($value)){
				return false;
			}
			$ret .= $ret ? ','.$value : $value;
		}
		return $ret;
	} else{
		return '';
	}
}
function ObHeader($URL){
	echo "<meta http-equiv='refresh' content='0;url=$URL'>";exit;
}
    
function CheckVar($var){
	if(is_array($var)){
		foreach($var as $key=>$value){
			if(!in_array($key,array('module'))){
				CheckVar($value);
			}
		}
	}else{
		$tar = array('<iframe','<meta','<script');
		foreach($tar as $k=>$v){
			if(strpos(strtolower($var),$v)!==false){
				global $basename;
				$basename="javascript:history.go(-1);";
				adminmsg('word_error');				
			}
		}
	}
}
function PostLog($log){
	foreach($log as $key=>$val){
		if(is_array($val)){
			$data .= "$key=array(".PostLog($val).")";
		}else{
			$val = str_replace(array("\n","\r","|"),array('','','&#124;'),$val);
			$data .= "$key=$val, ";
		}
	}
	return $data;
}
function GdConfirm($code){
	Cookie('cknum','',0);
	if(!$code || !SafeCheck(explode("\t",StrCode(GetCookie('cknum'),'DECODE')),$code,'cknum',300)){
		return false;
	}else{
		return true;
	}
}
 
?>