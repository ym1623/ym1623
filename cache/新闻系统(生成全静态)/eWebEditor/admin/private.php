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


@session_start();
if(empty($_SESSION["eWebEditor_User"])){
	echo "<script language=javascript>top.location.href='login.php';</script>";
	exit;
}

require("../php/config.php");
require("button.php");

$sAction = strtoupper(toTrim("action"));
$sPosition = "当前位置：";


function eWebEditor_Header(){
	echo "<html><head>";
	
	echo "<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>"
		."<meta name='Author' content='Andy.m'>"
		."<link rev=MADE href='mailto:webmaster@webasp.net'>"
		."<title>eWebEditor在线编辑器 - 后台管理</title>"
		."<link rel='stylesheet' type='text/css' href='private.css'>"
		."<script language='javascript' src='private.js'></script>";

	echo "</head>";
	echo "<body>";
	echo "<a name=top></a>";
}

function eWebEditor_Footer(){
	echo "<table border=0 cellpadding=0 cellspacing=0 align=center width='100%'>"
		."<tr><td height=40></td></tr>"
		."<tr><td><hr size=1 color=#000000 width='60%' align=center></td></tr>"
		."<tr>"
			."<td align=center>Copyright  &copy;  2003-2006  <b>webasp<font color=#CC0000>.net</font></b> <b>eWebSoft<font color=#CC0000>.com</font></b>, All Rights Reserved .</td>"
		."</tr>"
		."<tr>"
			."<td align=center><a href='mailto:service@ewebsoft.com'>service@ewebsoft.com</a></td>"
		."</tr>"
		."</table>";

	echo "</body></html>";
}

function IsSafeStr($str){
	$aBadstr = array("'", "|", "\"");
	for ($i=0;$i<count($aBadstr);$i++){
		if (strpos($str, $aBadstr[$i]) !== false) {
			return false;
		}
	}
	return true;
}

function GoError($str){
	echo "<script language=javascript>alert('".$str."\\n\\n系统将自动返回前一页面...');history.back();</script>";
	exit;
}

function toTrim($name){
	if (isset($_GET[$name])){
		return trim($_GET[$name]);
	}
	if (isset($_POST[$name])){
		return trim($_POST[$name]);
	}
	return "";
}


function WriteConfig(){

	$sConfig = "<"."?php\n";
	$sConfig = $sConfig."\n";
	$sConfig = $sConfig."$"."sUsername = \"".$GLOBALS["sUsername"]."\";\n";
	$sConfig = $sConfig."$"."sPassword = \"".$GLOBALS["sPassword"]."\";\n";
	$sConfig = $sConfig."\n";

	$nConfigStyle = 0;
	$sConfigStyle = "";
	$nConfigToolbar = 0;
	$sConfigToolbar = "";

	for ($i=1;$i<=count($GLOBALS["aStyle"]);$i++){
		if ($GLOBALS["aStyle"][$i] != "") {
			$aTmpStyle = explode("|||", $GLOBALS["aStyle"][$i]);
			if ($aTmpStyle[0] != "") {
				$nConfigStyle = $nConfigStyle + 1;
				$sConfigStyle = $sConfigStyle."$"."aStyle[".$nConfigStyle."] = \"".$GLOBALS["aStyle"][$i]."\";\n";

				$s_Order = "";
				$s_ID = "";
				for ($n=1;$n<=count($GLOBALS["aToolbar"]);$n++){
					if ($GLOBALS["aToolbar"][$n] != ""){
						$aTmpToolbar = explode("|||", $GLOBALS["aToolbar"][$n]);
						if ($aTmpToolbar[0] == $i) {
							if ($s_ID != ""){
								$s_ID = $s_ID."|";
								$s_Order = $s_Order."|";
							}
							$s_ID = $s_ID.$n;
							$s_Order = $s_Order.$aTmpToolbar[3];
						}
					}
				}

				if ($s_ID != ""){
					$a_ID = explode("|", $s_ID);
					$a_Order = explode("|", $s_Order);

					$a_ID = doSort($a_ID, $a_Order);

					for ($n=0;$n<count($a_ID);$n++){
						$nConfigToolbar = $nConfigToolbar + 1;
						$aTmpToolbar = explode("|||", $GLOBALS["aToolbar"][$a_ID[$n]]);
						$sTmpToolbar = $nConfigStyle."|||".$aTmpToolbar[1]."|||".$aTmpToolbar[2]."|||".$aTmpToolbar[3];
						$sConfigToolbar = $sConfigToolbar."$"."aToolbar[".$nConfigToolbar."] = \"".$sTmpToolbar."\";\n";
					}
				}

			}
		}
	}
	$sConfig = $sConfig.$sConfigStyle."\n".$sConfigToolbar."\n?".">";

	WriteFile("../php/config.php", $sConfig);

}

function WriteFile($s_FileName, $s_Text){
	if (!$handle = fopen($s_FileName, 'w')) {
		exit;
	}
	if (fwrite($handle, $s_Text) === FALSE) {
		exit;
	}
	fclose($handle);
}

function doSort($aryValue, $aryOrder){
	$KeepChecking = true;
	while ($KeepChecking == true){
		$KeepChecking = false;
		for ($i=0; $i<count($aryOrder);$i++){
			if ($i == count($aryOrder)-1){
				break 1;
			}
			if ($aryOrder[$i] > $aryOrder[$i+1]){
				$FirstOrder = $aryOrder[$i];
				$SecondOrder = $aryOrder[$i+1];
				$aryOrder[$i] = $SecondOrder;
				$aryOrder[$i+1] = $FirstOrder;
				$FirstValue = $aryValue[$i];
				$SecondValue = $aryValue[$i+1];
				$aryValue[$i] = $SecondValue;
				$aryValue[$i+1] = $FirstValue;
				$KeepChecking = true;
			}
		}
	}
	return $aryValue;
}

function GoUrl($url){
	echo "<script language=javascript>location.href=\"".$url."\";</script>";
	exit;
}

?>