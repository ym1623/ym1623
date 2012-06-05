<?php header("content-Type: text/html; charset=utf-8");
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

require("config.php");

InitParam();
OutScript(GetList());



function GetList(){
	$s_List = "";
	$s_Url = "";

	if ($GLOBALS["sDir"] != "") {
		if (strrpos($GLOBALS["sDir"], "/") !== false) {
			$s_Url = substr($GLOBALS["sDir"], 0, strrpos($GLOBALS["sDir"], "/"));
		}else{
			$s_Url = "";
		}

		$s_List = $s_List."<tr onclick='doRowClick(this)' onmouseover='doRowOver(this)' onmouseout='doRowOut(this)' isdir='true' path='".$s_Url."'>".
			"<td><img border=0 src='../sysimage/file/parentfolder.gif'></td>".
			"<td>..</td>".
			"<td>&nbsp;</td>".
			"</tr>";
	}

	if ($handle = opendir($GLOBALS["sCurrDir"])) {
		while (false !== ($file = readdir($handle))) {
			$sFileType = filetype($GLOBALS["sCurrDir"]."/".$file);
			switch ($sFileType){
			case "dir":
				if (($file!=".")&&($file!="..")){
					$oDirs[] = $file;
				}
				break;
			case "file":
				$oFiles[] = $file;
				break;
			default:
			}
		}
	}

	if (isset($oDirs)){
		foreach( $oDirs as $oDir){
			if($GLOBALS["sDir"] == ""){
				$s_Url = $oDir;
			}else{
				$s_Url = $GLOBALS["sDir"]."/".$oDir;
			}

			$s_List = $s_List . "<tr onclick='doRowClick(this)' onmouseover='doRowOver(this)' onmouseout='doRowOut(this)' isdir='true' path='" . $s_Url . "'>" .
			"<td><img border=0 src='../sysimage/file/closedfolder.gif'></td>" .
			"<td noWrap>" . $oDir . "</td>" .
			"<td>&nbsp;</td>" .
			"</tr>";			
		}
	}

	if (isset($oFiles)){
		$nFileNum = count($oFiles);
	}else{
		$nFileNum = 0;
	}

	if ($nFileNum>0){
		foreach( $oFiles as $oFile){
			$sFileName = $GLOBALS["sCurrDir"].$oFile;
			if(CheckValidExt($oFile)){
				if($GLOBALS["sDir"] == ""){
					$s_Url = $GLOBALS["sContentPath"] . $oFile;
				}else{
					$s_Url = $GLOBALS["sContentPath"] . $GLOBALS["sDir"] . "/" . $oFile;
				}

				$s_List = $s_List . "<tr onclick='doRowClick(this)' onmouseover='doRowOver(this)' onmouseout='doRowOut(this)' url='" . $s_Url . "'>" .
					"<td>" . FileName2Pic($oFile) . "</td>" .
					"<td noWrap>" . $oFile . "</td>" .
					"<td align=right>" . GetSizeUnit(filesize($sFileName)) . "</td>" .
					"</tr>";
			}
		}
	}
	
	if($GLOBALS["sDir"] == ""){
		$s_Url = "/";
	}else{
		$s_Url = "/" . $GLOBALS["sDir"] . "/";
	}

	$s_List = $s_List . "</table>";
	$s_List = HTML2JS($s_List);
	$s_List = "parent.setDirList(\"" . $s_List . "\", \"" . $s_Url . "\")";
	return $s_List;
}


function OutScript($str){
	echo "<HTML><HEAD><meta http-equiv='Content-Type' content='text/html; charset=utf-8'><TITLE>eWebEditor</TITLE></head><body>";
	echo "<script language=javascript>".$str."</script>";
	echo "</body></html>";
	exit;
}

function CheckValidExt($s_FileName){
	if($GLOBALS["sAllowExt"] == ""){
		return true;
	}
	preg_match("/\.([a-zA-Z0-9]{2,4})$/",$s_FileName,$exts);
	$sExt = $exts[1];
	$aExt = explode('|',$GLOBALS["sAllowExt"]);
	if(!in_array(strtoupper($sExt),$aExt)){
		return false;
	}
	return true;
}

function  InitParam(){
	global $sType, $sStyleName;
	global $sCurrDir, $sDir;
	global $sAllowExt, $sUploadDir, $sBaseUrl, $sContentPath, $sAllowBrowse;

	$sType = toTrim("type");
	$sStyleName = toTrim("style");

	$bValidStyle = false;
	$numElements = count($GLOBALS["aStyle"]);
	for($i=1; $i<=$numElements; $i++){
		$aStyleConfig = explode("|||", $GLOBALS["aStyle"][$i]);
		if (strtolower($sStyleName)==strtolower($aStyleConfig[0])){
			$bValidStyle = true;
			break;
		}
	}

	if ($bValidStyle == false) {
		OutScript("alert('Invalid Style!')");
	}

	$sBaseUrl = $aStyleConfig[19];
	$sAllowBrowse = $aStyleConfig[43];

	if($sAllowBrowse!="1"){
		OutScript("alert('Do not allow browse!')");
	}

	$sUploadDir = $aStyleConfig[3];
	if (substr($sUploadDir, 0, 1) != "/"){
		$sUploadDir = "../".$sUploadDir;
	}

	switch ($sBaseUrl){
	case "0":
		$sContentPath = $aStyleConfig[23];
		break;
	case "1":
		$sContentPath = RelativePath2RootPath($sUploadDir);
		break;
	case "2":
		$sContentPath = RootPath2DomainPath(RelativePath2RootPath($sUploadDir));
		break;
	}

	switch (strtoupper($sType)){
	case "FILE":
		$sAllowExt = "";
		break;
	case "MEDIA":
		$sAllowExt = "rm|mp3|wav|mid|midi|ra|avi|mpg|mpeg|asf|asx|wma|mov";
		break;
	case "FLASH":
		$sAllowExt = "swf";
		break;
	default:
		$sAllowExt = "bmp|jpg|jpeg|png|gif";
		break;
	}

	$sAllowExt = strtoupper($sAllowExt);

	$sCurrDir = $sUploadDir;

	$sDir = toTrim("dir");
	if ($sDir != "") {
		if (is_dir($sUploadDir.$sDir)) {
			$sCurrDir = $sUploadDir.$sDir."/";
		}else{
			$sDir = "";
		}
	}

}

function toTrim($p){
	if (isset($_GET[$p])){
		return trim($_GET[$p]);
	}else{
		return "";
	}
}

function RelativePath2RootPath($url){
	$sTempUrl = $url;
	if (substr($sTempUrl, 0, 1) == "/"){
		return $sTempUrl;
	}

	if (isset($_SERVER["REQUEST_URI"])){
		$sWebEditorPath = $_SERVER["REQUEST_URI"];
	}else{
		$sWebEditorPath = $_SERVER["SCRIPT_NAME"];
	}

	$sWebEditorPath = substr($sWebEditorPath, 0, strrpos($sWebEditorPath, "/"));
	while (substr($sTempUrl, 0, 3) == "../"){
		$sTempUrl = substr($sTempUrl, 3, strlen($sTempUrl));
		$sWebEditorPath = substr($sWebEditorPath, 0, strrpos($sWebEditorPath, "/"));
	}
	return $sWebEditorPath."/".$sTempUrl;
}

function RootPath2DomainPath($url){
	$sProtocol = explode("/", $_SERVER["SERVER_PROTOCOL"]);
	$sHost = strtolower($sProtocol[0])."://".$_SERVER["HTTP_HOST"];
	$sPort = $_SERVER["SERVER_PORT"];
	if ($sPort != "80") {
		$sHost = $sHost.":".$sPort;
	}
	return $sHost.$url;
}

function FileName2Pic($sFileName){
	$sExt = strtoupper(substr($sFileName, strrpos($sFileName, ".")+1));
	switch ($sExt){
	case "TXT":
		$sPicName = "txt.gif";
		break;
	case "CHM":
	case "HLP":
		$sPicName = "hlp.gif";
		break;
	case "DOC":
		$sPicName = "doc.gif";
		break;
	case "PDF":
		$sPicName = "pdf.gif";
		break;
	case "MDB":
		$sPicName = "mdb.gif";
		break;
	case "GIF":
		$sPicName = "gif.gif";
		break;
	case "JPG":
		$sPicName = "jpg.gif";
		break;
	case "BMP":
		$sPicName = "bmp.gif";
		break;
	case "PNG":
		$sPicName = "pic.gif";
		break;
	case "ASP":
	case "JSP":
	case "JS":
	case "PHP":
	case "PHP3":
	case "ASPX":
		$sPicName = "code.gif";
		break;
	case "HTM":
	case "HTML":
	case "SHTML":
		$sPicName = "htm.gif";
		break;
	case "ZIP":
		$sPicName = "zip.gif";
		break;
	case "RAR":
		$sPicName = "rar.gif";
		break;
	case "EXE":
		$sPicName = "exe.gif";
		break;
	case "AVI":
		$sPicName = "avi.gif";
		break;
	case "MPG":
	case "MPEG":
	case "ASF":
		$sPicName = "mp.gif";
		break;
	case "RA":
	case "RM":
		$sPicName = "rm.gif";
		break;
	case "MP3":
		$sPicName = "mp3.gif";
		break;
	case "MID":
	case "MIDI":
		$sPicName = "mid.gif";
		break;
	case "WAV":
		$sPicName = "audio.gif";
		break;
	case "XLS":
		$sPicName = "xls.gif";
		break;
	case "PPT":
	case "PPS":
		$sPicName = "ppt.gif";
		break;
	case "SWF":
		$sPicName = "swf.gif";
		break;
	default:
		$sPicName = "unknow.gif";
		break;
	}
	return "<img border=0 src='../sysimage/file/".$sPicName."'>";
}

function GetSizeUnit($n_Size){
	if($n_Size >= 1024*1024){
		return number_format(($n_Size / 1024 / 1024), 2) . "M";
	}else{
		return number_format(($n_Size / 1024), 2) . "K";
	}
}

function HTML2JS($s_HTML){
	$s_JS = str_replace("\r\n", "", $s_HTML);
	$s_JS = str_replace("\\", "\\\\", $s_JS);
	$s_JS = str_replace("\"", "\\\"", $s_JS);
	return $s_JS;
}

?>