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

InitUpload();

if (isset($_GET["action"])){
	$sAction = strtoupper($_GET["action"]);
}else{
	$sAction = "";
}


switch ($sAction){
case "REMOTE":
	DoCreateNewDir();
	DoRemote();
	break;
case "SAVE":
	ShowForm();
	DoCreateNewDir();
	DoSave();
	break;
default:
	ShowForm();
	break;
}


function  ShowForm() {
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>eWebEditor</TITLE>
<script language="javascript" src="../dialog/dialog.js"></script>
<link href='../language/<?=$GLOBALS["sLanguage"]?>.css' type='text/css' rel='stylesheet'>
<link href='../dialog/dialog.css' type='text/css' rel='stylesheet'>
</head>
<body class=upload>

<form action="?action=save&type=<?=$GLOBALS["sType"]?>&style=<?=$GLOBALS["sStyleName"]?>&language=<?=$GLOBALS["sLanguage"]?>" method=post name=myform enctype="multipart/form-data">
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="<?=($GLOBALS["nAllowSize"]*1024);?>"> 
<input type=file name="uploadfile" size=1 style="width:100%">
</form>

<script language=javascript>

var sAllowExt = "<?=$GLOBALS["sAllowExt"]?>";

function  CheckUploadForm() {
	if (!IsExt(document.myform.uploadfile.value,sAllowExt)){
		parent.UploadError('lang["ErrUploadInvalidExt"]+":'+sAllowExt+'"');
		return false;
	}
	return true
}

var oForm = document.myform ;
oForm.attachEvent("onsubmit", CheckUploadForm) ;
if (! oForm.submitUpload) oForm.submitUpload = new Array() ;
oForm.submitUpload[oForm.submitUpload.length] = CheckUploadForm ;
if (! oForm.originalSubmit) {
	oForm.originalSubmit = oForm.submit ;
	oForm.submit = function () {
		if (this.submitUpload) {
			for (var i = 0 ; i < this.submitUpload.length ; i++) {
				this.submitUpload[i]() ;
			}
		}
		this.originalSubmit() ;
	}
}

try {
	parent.UploadLoaded();
}
catch(e){
}

</script>

</body>
</html>

<?php
}  


function DoSave(){

	if($_FILES['uploadfile']['error'] > 0){
		switch((int)$_FILES['uploadfile']['error']){
		case UPLOAD_ERR_NO_FILE:
			OutScript("parent.UploadError('lang[\"ErrUploadInvalidFile\"]')");
			break;
		case UPLOAD_ERR_FORM_SIZE: 
			OutScript("parent.UploadError('lang[\"ErrUploadSizeLimit\"]+\":".$GLOBALS["nAllowSize"]."KB\"')");
			break;
		}
		exit;
	}
	preg_match("/\.([a-zA-Z0-9]{2,4})$/",$_FILES['uploadfile']['name'],$exts);
	CheckValidExt($exts[1]);
	$GLOBALS["sSaveFileName"] = GetRndFileName(strtolower($exts[1]));
	$GLOBALS["sOriginalFileName"] = $_FILES['uploadfile']['name'];
	$sFileName = str_replace('\\','\\\\',realpath($GLOBALS["sUploadDir"]))."/";
	$sFileName .= $GLOBALS["sSaveFileName"];
	if(!move_uploaded_file($_FILES['uploadfile']['tmp_name'],$sFileName)){
		OutScript("parent.UploadError('Error')");
		exit;
	}


	$s_SmallImageFile = getSmallImageFile($GLOBALS["sSaveFileName"]);
	$s_SmallImagePathFile = "";
	$s_SmallImageScript = "";
	if (makeImageSLT($GLOBALS["sUploadDir"], $GLOBALS["sSaveFileName"], $s_SmallImageFile)){
		makeImageSY($GLOBALS["sUploadDir"], $s_SmallImageFile);
		makeImageSY($GLOBALS["sUploadDir"], $GLOBALS["sSaveFileName"]);
		$s_SmallImagePathFile = $GLOBALS["sContentPath"].$s_SmallImageFile;
		$s_SmallImageScript = "try{obj.addUploadFile('".$GLOBALS["sOriginalFileName"]."', '".$s_SmallImageFile."', '".$s_SmallImagePathFile."');} catch(e){} ";
	}else{
		$s_SmallImageFile = "";
		makeImageSY($GLOBALS["sUploadDir"], $GLOBALS["sSaveFileName"]);
	}

	$GLOBALS["sPathFileName"] = $GLOBALS["sContentPath"].$GLOBALS["sSaveFileName"];
	OutScript("parent.UploadSaved('".$GLOBALS["sPathFileName"]."','".$s_SmallImagePathFile."');var obj=parent.dialogArguments.dialogArguments;if (!obj) obj=parent.dialogArguments;try{obj.addUploadFile('".$GLOBALS["sOriginalFileName"]."', '".$GLOBALS["sSaveFileName"]."', '".$GLOBALS["sPathFileName"]."');} catch(e){} ".$s_SmallImageScript);

}


function makeImageSY($s_Path, $s_File){
	if($GLOBALS["nSYFlag"] == 0){return false;}
	if(!isValidSLTSYExt($s_File)){return false;}

	switch($GLOBALS["nSLTSYObject"]){
	case 0:
		$groundImage = $s_Path.$s_File;
		if(!file_exists($groundImage)){return false;}
        $ground_info = getimagesize($groundImage); 
        $ground_w = $ground_info[0];
        $ground_h = $ground_info[1];
		if($GLOBALS["nSYMinSize"] > $ground_w){return false;}
        switch($ground_info[2]){
            case 1:
				$ground_im = imagecreatefromgif($groundImage);
				break; 
            case 2:
				$ground_im = imagecreatefromjpeg($groundImage);
				break;
            case 3:
				$ground_im = imagecreatefrompng($groundImage);
				break;
            default:
				return false; 
        }
		imagealphablending($ground_im, true);


		switch($GLOBALS["nSYFlag"]){
		case 1:
			if($GLOBALS["sSYFontName"]){
				$s_SYText = gb2utf8($GLOBALS["sSYText"]);

				$fontSize = imagettfbbox($GLOBALS["nSYFontSize"], 0, $GLOBALS["sSYFontName"], $s_SYText);
				$n_SYWidth = $fontSize[2] - $fontSize[0];
				$n_SYHeight = $fontSize[1] - $fontSize[7];
			}

			if($GLOBALS["sSYShadowColor"]==""){
				$GLOBALS["sSYShadowColor"] = "ffffff";
			}
			$R = hexdec(substr($GLOBALS["sSYShadowColor"],0,2));
			$G = hexdec(substr($GLOBALS["sSYShadowColor"],2,2));
			$B = hexdec(substr($GLOBALS["sSYShadowColor"],4));
			$textcolor = imagecolorallocate($ground_im, $R, $G, $B);
			if($GLOBALS["sSYFontName"]){
				imagettftext($ground_im, $GLOBALS["nSYFontSize"], 0, 5+$GLOBALS["nSYShadowOffset"], 5+$n_SYHeight+$GLOBALS["nSYShadowOffset"], $textcolor, $GLOBALS["sSYFontName"],  $s_SYText);
			}else{
				imagestring($ground_im, $GLOBALS["nSYFontSize"], 5+$GLOBALS["nSYShadowOffset"], 5+$GLOBALS["nSYShadowOffset"], $GLOBALS["sSYText"], $textcolor);
			}

			if($GLOBALS["sSYFontColor"]==""){
				$GLOBALS["sSYFontColor"] = "000000";
			}
			$R = hexdec(substr($GLOBALS["sSYFontColor"],0,2));
			$G = hexdec(substr($GLOBALS["sSYFontColor"],2,2));
			$B = hexdec(substr($GLOBALS["sSYFontColor"],4));
			$textcolor = imagecolorallocate($ground_im, $R, $G, $B);
			if($GLOBALS["sSYFontName"]){
				imagettftext($ground_im, $GLOBALS["nSYFontSize"], 0, 5, 5+$n_SYHeight, $textcolor, $GLOBALS["sSYFontName"],  $s_SYText);
			}else{
				imagestring($ground_im, $GLOBALS["nSYFontSize"], 5, 5, $GLOBALS["sSYText"], $textcolor);
			}
			break;

		case 2:
			$waterImage = $GLOBALS["sSYPicPath"];
			if(!file_exists($waterImage)){return false;}
			$water_info = getimagesize($waterImage); 
			$water_w = $water_info[0];
			$water_h = $water_info[1];

			switch($water_info[2]){
				case 1:
					$water_im = imagecreatefromgif($waterImage);
					break;
				case 2:
					$water_im = imagecreatefromjpeg($waterImage);
					break;
				case 3:
					$water_im = imagecreatefrompng($waterImage);
					break;
				default:
					return false;
			}
			if(($ground_w<$water_w)||($ground_h<$water_h)){return false;}
			imagecopy($ground_im, $water_im, 0, 0, 0, 0, $water_w, $water_h);
			break;
		}

		//@unlink($groundImage);
		switch($ground_info[2]){
			case 1:
				imagegif($ground_im,$groundImage);
				break;
			case 2:
				imagejpeg($ground_im,$groundImage);
				break;
			case 3:
				imagepng($ground_im,$groundImage);
				break;
		}

		if(isset($water_info)) unset($water_info);
		if(isset($water_im)) imagedestroy($water_im);
		unset($ground_info);
		imagedestroy($ground_im);
		break;

	default:
		break;
	}
	return true;
}

function makeImageSLT($s_Path, $s_File, $s_SmallFile){
	if($GLOBALS["nSLTFlag"] == 0){echo("aaa");return false;}
	if(!isValidSLTSYExt($s_File)){echo("bbb");return false;}

	switch($GLOBALS["nSLTSYObject"]){
	case 0:
		$s_Ext = substr(strrchr($s_File, "."), 1);
		switch($s_Ext){
		case "png":
			$im = imagecreatefrompng($s_Path.$s_File);
			break;
		case "gif":
			$im = imagecreatefromgif($s_Path.$s_File);
			break;
		default:
			$im = imagecreatefromjpeg($s_Path.$s_File);
			break;
		}
		if(!$im){return false;}

		$n_OriginalWidth = imagesx($im);
		$n_OriginalHeight = imagesy($im);
		if(($n_OriginalWidth < $GLOBALS["nSLTMinSize"]) && ($n_OriginalHeight < $GLOBALS["nSLTMinSize"])) {return false;}
		if($n_OriginalWidth > $n_OriginalHeight){
			$n_Width = $GLOBALS["nSLTOkSize"];
			$n_Height = ($GLOBALS["nSLTOkSize"] / $n_OriginalWidth) * $n_OriginalHeight;
		}else{
			$n_Height = $GLOBALS["nSLTOkSize"];
			$n_Width = ($GLOBALS["nSLTOkSize"] / $n_OriginalHeight) * $n_OriginalWidth;
		}
		if(function_exists("imagecopyresampled")){
			$newim = imagecreatetruecolor($n_Width, $n_Height);
			imagecopyresampled($newim, $im, 0, 0, 0, 0, $n_Width, $n_Height, $n_OriginalWidth, $n_OriginalHeight);
		}else{
			$newim = imagecreate($n_Width, $n_Height);
			imagecopyresized($newim, $im, 0, 0, 0, 0, $n_Width, $n_Height, $n_OriginalWidth, $n_OriginalHeight);
		}
		
		switch($s_Ext){
		case "png":
			imagepng($newim,$s_Path.$s_SmallFile);
			break;
		case "gif":
			imagegif($newim,$s_Path.$s_SmallFile);
			break;
		default:
			imagejpeg($newim,$s_Path.$s_SmallFile);
			break;
		}

		imagedestroy($newim);
		imagedestroy($im);
		break;

	default:
		break;
	}

	return true;
}



function isValidSLTSYExt($s_File){
	$sExt = substr(strrchr($s_File, "."), 1);
	$aExt = explode('|',strtoupper($GLOBALS["sSLTSYExt"]));
	if(!in_array(strtoupper($sExt),$aExt)){
		return false;
	}
	return true;
}

function getSmallImageFile($s_File){
	$exts = explode(".",$s_File);
	return $exts[0]."_s.".$exts[1];
}

function DoRemote(){
	if (isset($_POST["eWebEditor_UploadText"])){
		$sContent = stripslashes($_POST["eWebEditor_UploadText"]);
	}else{
		$sContent = "";
	}
	If (($GLOBALS["sAllowExt"] != "")&&($sContent!="")) {
		$sContent = ReplaceRemoteUrl($sContent, $GLOBALS["sAllowExt"]);
	}

	echo "<HTML><HEAD><TITLE>eWebEditor</TITLE><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body>".
		"<input type=hidden id=UploadText value=\"".htmlspecialchars($sContent)."\">".
		"</body></html>";

	OutScriptNoBack("parent.setHTML(UploadText.value);try{parent.addUploadFile('".$GLOBALS["sOriginalFileName"]."', '".$GLOBALS["sSaveFileName"]."', '".$GLOBALS["sPathFileName"]."');} catch(e){} parent.remoteUploadOK();");

}


function DoCreateNewDir(){
	switch ($GLOBALS["nAutoDir"]){
	Case 1:
		$sCreateDir = date("Y");
		break;
	Case 2:
		$sCreateDir = date("Ym");
		break;
	Case 3:
		$sCreateDir = date("Ymd");
		break;
	default:
		return;
	}
	$GLOBALS["sUploadDir"] = $GLOBALS["sUploadDir"].$sCreateDir."/";
	$GLOBALS["sContentPath"] = $GLOBALS["sContentPath"].$sCreateDir."/";
	
	mkdir_p($GLOBALS["sUploadDir"]);

}

function mkdir_p($target){
	if (is_dir($target)||empty($target)) return 1;
	if (file_exists($target) && !is_dir($target)) return 0;
	if (mkdir_p(substr($target,0,strrpos($target,'/'))))
		return mkdir($target);
	return 0;
}

function GetRndFileName($sExt){
	return date("YmdHis").rand(1,999).".".$sExt;
}

function  OutScriptNoBack($str){
	echo "<script language=javascript>".$str."</script>";
}

function OutScript($str){
	echo "<script language=javascript>".$str.";history.back()</script>";
}

function CheckValidExt($sExt){
	$aExt = explode('|',$GLOBALS["sAllowExt"]);
	if(!in_array(strtoupper($sExt),$aExt)){
		OutScript("parent.UploadError('lang[\"ErrUploadInvalidExt\"]+\":".$GLOBALS["sAllowExt"]."\"')");
		exit;
	}
}

function  InitUpload(){
	global $sType, $sStyleName, $sLanguage;
	global $sAllowExt, $nAllowSize, $sUploadDir, $nUploadObject, $nAutoDir, $sBaseUrl, $sContentPath;
	global $sFileExt, $sOriginalFileName, $sSaveFileName, $sPathFileName, $nFileNum;
	global $nSLTFlag, $nSLTMinSize, $nSLTOkSize, $nSYFlag, $sSYText, $sSYFontColor, $nSYFontSize, $sSYFontName, $sSYPicPath, $nSLTSYObject, $sSLTSYExt, $nSYMinSize, $sSYShadowColor, $nSYShadowOffset;

	$sType = toTrim("type");
	$sStyleName = toTrim("style");
	$sLanguage = toTrim("language");

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
		OutScript("parent.UploadError('lang[\"ErrInvalidStyle\"]')");
	}

	$sBaseUrl = $aStyleConfig[19];
	$nUploadObject = (int)$aStyleConfig[20];
	$nAutoDir = (int)$aStyleConfig[21];

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
	case "REMOTE":
		$sAllowExt = $aStyleConfig[10];
		$nAllowSize = (int)$aStyleConfig[15];
		break;
	case "FILE":
		$sAllowExt = $aStyleConfig[6];
		$nAllowSize = (int)$aStyleConfig[11];
		break;
	case "MEDIA":
		$sAllowExt = $aStyleConfig[9];
		$nAllowSize = (int)$aStyleConfig[14];
		break;
	case "FLASH":
		$sAllowExt = $aStyleConfig[7];
		$nAllowSize = (int)$aStyleConfig[12];
		break;
	default:
		$sAllowExt = $aStyleConfig[8];
		$nAllowSize = (int)$aStyleConfig[13];
		break;
	}

	$sAllowExt = strtoupper($sAllowExt);

	$nSLTFlag = (int)$aStyleConfig[29];
	$nSLTMinSize = (int)$aStyleConfig[30];
	$nSLTOkSize = (int)$aStyleConfig[31];
	$nSYFlag = (int)$aStyleConfig[32];
	$sSYText = $aStyleConfig[33];
	$sSYFontColor = $aStyleConfig[34];
	$nSYFontSize = (int)$aStyleConfig[35];
	$sSYFontName = $aStyleConfig[36];
	$sSYPicPath = $aStyleConfig[37];
	$nSLTSYObject = (int)$aStyleConfig[38];
	$sSLTSYExt = $aStyleConfig[39];
	$nSYMinSize = (int)$aStyleConfig[40];
	$sSYShadowColor = $aStyleConfig[41];
	$nSYShadowOffset = (int)$aStyleConfig[42];

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

function ReplaceRemoteUrl($sHTML, $sExt){

	$s_Content = $sHTML;
	$s_Match = "/(http|https|ftp|rtsp|mms):(\/\/|\\\\){1}(([A-Za-z0-9_-])+[.]){1,}(net|com|cn|org|cc|tv|[0-9]{1,3})(\S*\/)((\S)+[.]{1}(".$sExt."))/i";
	if (!preg_match_all($s_Match, $s_Content, $a_Matches)){
		return $s_Content;
	};

	for ($i=0; $i< count($a_Matches[0]); $i++) {
		$a_RepeatRemote[] = $a_Matches[0][$i];
	}
	$a_RemoteUrl = array_unique($a_RepeatRemote);


	$nFileNum = 0;
	for ($i=0; $i< count($a_RemoteUrl); $i++) {

		$SaveFileType = substr($a_RemoteUrl[$i], strrpos($a_RemoteUrl[$i], ".") + 1);
		$SaveFileName = GetRndFileName($SaveFileType);

		if (SaveRemoteFile($SaveFileName, $a_RemoteUrl[$i])) {
			$nFileNum = $nFileNum + 1;
			if ($nFileNum > 0) {
				$GLOBALS["sOriginalFileName"] .= "|";
				$GLOBALS["sSaveFileName"] .= "|";
				$GLOBALS["sPathFileName"] .= "|";
			}
			$GLOBALS["sOriginalFileName"] .= substr($a_RemoteUrl[i], strrpos($a_RemoteUrl[i], "/") + 1);
			$GLOBALS["sSaveFileName"] .= $SaveFileName;
			$GLOBALS["sPathFileName"] .= $GLOBALS["sContentPath"].$SaveFileName;
			$s_Content = str_replace($a_RemoteUrl[$i], $GLOBALS["sContentPath"].$SaveFileName, $s_Content);
		}
	}

	return $s_Content;
}

function SaveRemoteFile($s_LocalFileName, $s_RemoteFileUrl) { 
	$fp = @fopen($s_RemoteFileUrl, "rb");
	if (!$fp) {return false;}
	$cont = "";
	while(!feof($fp)) {
		$cont.= fread($fp, 2048);
	}
	fclose($fp);

	if (strlen($cont) > $GLOBALS["nAllowSize"]*1024) {
		return false;
	}
	$fp2 = @fopen($GLOBALS["sUploadDir"].$s_LocalFileName,"w");
	fwrite($fp2,$cont);
	fclose($fp2);
	return true;
} 

function gb2utf8($gb){
	if(!trim($gb)){return $gb;}
	$filename="gb2312.txt";
	$tmp=file($filename);
	$codetable=array();
	while(list($key,$value)=each($tmp))
	$codetable[hexdec(substr($value,0,6))]=substr($value,7,6);

	$utf8="";
	while($gb){
		if (ord(substr($gb,0,1))>127){
			$tthis=substr($gb,0,2);
			$gb=substr($gb,2,strlen($gb)-2);
			$utf8.=u2utf8(hexdec($codetable[hexdec(bin2hex($tthis))-0x8080]));
		}else{
			$tthis=substr($gb,0,1);
			$gb=substr($gb,1,strlen($gb)-1);
			$utf8.=u2utf8($tthis);
		}
	}

	return $utf8;
}

function u2utf8($c){
	$str="";
	if ($c < 0x80){
		$str.=$c;
	}else if ($c < 0x800){
		$str.=chr(0xC0 | $c>>6);
		$str.=chr(0x80 | $c & 0x3F);
	}else if ($c < 0x10000){
		$str.=chr(0xE0 | $c>>12);
		$str.=chr(0x80 | $c>>6 & 0x3F);
		$str.=chr(0x80 | $c & 0x3F);
	}else if ($c < 0x200000){
		$str.=chr(0xF0 | $c>>18);
		$str.=chr(0x80 | $c>>12 & 0x3F);
		$str.=chr(0x80 | $c>>6 & 0x3F);
		$str.=chr(0x80 | $c & 0x3F);
	}
	return $str;
}
?>