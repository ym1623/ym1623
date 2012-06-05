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


require("private.php");


$sPosition = $sPosition."上传文件管理";

eWebEditor_Header();
eWebEditor_Content();
eWebEditor_Footer();


function eWebEditor_Content(){

	InitParam();

	switch ($GLOBALS["sAction"]){
	case "DELALL":
		DoDelAll();
		break;
	case "DEL":
		DoDel();
		break;
	case "DELFOLDER":
		DoDelFolder();
		break;
	}

	ShowList();
}

function ShowList(){
	echo "<table border=0 cellspacing=1 align=center class=navi>".
		"<form action='?' method=post name=queryform>".
		"<tr><th>".$GLOBALS["sPosition"]."</th></tr>".
		"<tr><td align=right><b>选择样式目录：</b><select name='id' size=1 onchange=\"location.href='?id='+this.options[this.selectedIndex].value\">".InitSelect($GLOBALS["sStyleID"], "选择...")."</select></td></tr>".
		"</form></table><br>";
	
	if ($GLOBALS["sCurrDir"] == "") {
		return;
	}

	echo "<table border=0 cellspacing=1 class=list align=center>".
		"<form action='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&action=del' method=post name=myform>".
		"<tr align=center>".
			"<th width='10%'>类型</th>".
			"<th width='40%'>文件地址</th>".
			"<th width='10%'>大小</th>".
			"<th width='15%'>最后访问</th>".
			"<th width='15%'>上传日期</th>".
			"<th width='10%'>删除</th>".
		"</tr>";

	$sCurrPage = toTrim("page");
	$nPageSize = 20;
	if (($sCurrPage == "") || !is_numeric($sCurrPage)) {
		$nCurrPage = 1;
	}else{
		$nCurrPage = (int)$sCurrPage;
	}

	if (!is_dir($GLOBALS["sCurrDir"])) {
		echo "<tr><td colspan=6>无效的目录！</td></tr></table>";
		exit;
	}
	
	if ($GLOBALS["sDir"] != "") {
		echo "<tr align=center>".
			"<td><img border=0 src='../sysimage/file/folderback.gif'></td>".
			"<td align=left colspan=5><a href=\"?id=".$GLOBALS["sStyleID"]."&dir=";
		if (strrpos($GLOBALS["sDir"], "/") !== false) {
			echo substr($GLOBALS["sDir"], 0, strrpos($GLOBALS["sDir"], "/"));
		}
		echo "\">返回上一级目录</a></td></tr>";
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
			echo "<tr align=center>".
				"<td><img border=0 src='../sysimage/file/folder.gif'></td>".
				"<td align=left colspan=4><a href=\"?id=".$GLOBALS["sStyleID"]."&dir=";
			if ($GLOBALS["sDir"] != "") {
				echo $GLOBALS["sDir"]."/";
			}
			echo $oDir."\">".$oDir."</a></td>".
				"<td><a href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&action=delfolder&foldername=".$oDir."'>删除</a></td></tr>";
		}
	}

	if (isset($oFiles)){
		$nFileNum = count($oFiles);
	}else{
		$nFileNum = 0;
	}
	$nPageNum = (int)($nFileNum / $nPageSize);
	if (($nFileNum % $nPageSize) > 0) {
		$nPageNum = $nPageNum+1;
	}
	if ($nCurrPage > $nPageNum) {
		$nCurrPage = 1;
	}

	if ($nFileNum>0){
		$i = 0;
		foreach( $oFiles as $oFile){
			$i = $i + 1;
			if (($i > ($nCurrPage - 1) * $nPageSize) && ($i <= $nCurrPage * $nPageSize)) {
				$sFileName = $GLOBALS["sCurrDir"].$oFile;
				echo "<tr align=center>".
					"<td>".FileName2Pic($oFile)."</td>".
					"<td align=left><a href=\"".$sFileName."\" target=_blank>".$oFile."</a></td>".
					"<td>".filesize($sFileName)." B </td>".
					"<td>".date("Y-m-d", fileatime($sFileName))."</td>".
					"<td>".date("Y-m-d", filectime($sFileName))."</td>".
					"<td><input type=checkbox name='delfilename[]' value=\"".$oFile."\"></td></tr>";
			}elseif($i > $nCurrPage * $nPageSize){
				break;
			}
		}
	}

	if ($nFileNum <= 0) {
		echo "<tr><td colspan=6>指定目录下现在还没有文件！</td></tr>";
	}
	

	if ($nFileNum > 0) {
		echo "<tr><td colspan=6><table border=0 cellpadding=3 cellspacing=0 width='100%'><tr><td>";
		if ($nCurrPage > 1) {
			echo "<a href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&page=1'>首页</a>&nbsp;&nbsp;<a href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&page=".($nCurrPage - 1)."'>上一页</a>&nbsp;&nbsp;";
		}else{
			echo "首页&nbsp;&nbsp;上一页&nbsp;&nbsp;";
		}
		if ($nCurrPage < $i / $nPageSize) {
			echo "<a href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&page=".($nCurrPage + 1)."'>下一页</a>&nbsp;&nbsp;<a href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&page=".$nPageNum."'>尾页</a>";
		}else{
			echo "下一页&nbsp;&nbsp;尾页";
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;共<b>".$nFileNum."</b>个&nbsp;&nbsp;页次:<b><span class=highlight2>".$nCurrPage."</span>/".$nPageNum."</b>&nbsp;&nbsp;<b>".$nPageSize."</b>个文件/页";
		echo "</td><td align=right><input type=submit name=b value=' 删除选定的文件 '> <input type=button name=b1 value=' 清空所有文件 ' onclick=\"javascript:if (confirm('你确定要清空所有文件吗？')) {location.href='?id=".$GLOBALS["sStyleID"]."&dir=".$GLOBALS["sDir"]."&action=delall';}\"></td></tr></table></td></tr>";
	}

	echo "</form></table>";


}


function DoDel(){
	if (isset($_POST["delfilename"])){
		foreach($_POST["delfilename"] as $sFileName){
			$sMapFileName = $GLOBALS["sCurrDir"].$sFileName;
			if(file_exists($sMapFileName)){
				unlink($sMapFileName);
			}
		}
	}
}

function DoDelAll(){
	$dir = dir($GLOBALS["sCurrDir"]);
	while(false !== ($sFileName=$dir->read())){
		$sMapFileName = $GLOBALS["sCurrDir"].$sFileName;
		if(file_exists($sMapFileName)){
			if (filetype($sMapFileName)=="file"){
				unlink($sMapFileName);
			}
		}
	}
	$dir->close();
}

function DoDelFolder(){
	$sFolderName = $GLOBALS["sCurrDir"].toTrim("foldername");
	deldir($sFolderName);
}

function deldir($dir)
{
  $handle = opendir($dir);
  while (false!==($FolderOrFile = readdir($handle)))
  {
     if($FolderOrFile != "." && $FolderOrFile != "..") 
     {  
       if(is_dir("$dir/$FolderOrFile")) 
       { deldir("$dir/$FolderOrFile"); }  // recursive
       else
       { unlink("$dir/$FolderOrFile"); }
     }  
  }
  closedir($handle);
  if(rmdir($dir))
  { $success = true; }
  return $success;  
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

function InitSelect($v_InitValue, $s_AllName){
	$s_Result = "";
	if ($s_AllName != "") {
		$s_Result = $s_Result."<option value=''>".$s_AllName."</option>";
	}
	for ($i=1;$i<=count($GLOBALS["aStyle"]);$i++){
		$aTemp = explode("|||", $GLOBALS["aStyle"][$i]);
		$s_Result = $s_Result."<option value='".$i."'";
		if ((string)$i == (string)$v_InitValue) {
			$s_Result = $s_Result." selected";
		}
		$s_Result = $s_Result.">样式：".htmlspecialchars($aTemp[0])."---目录：".htmlspecialchars($aTemp[3])."</option>";
	}
	return $s_Result;
}

function InitParam(){
	global $sStyleID, $sUploadDir, $sCurrDir, $sDir;
	
	$sStyleID = toTrim("id");
	$sUploadDir = "";
	if (is_numeric($sStyleID)) {
		if ((int)($sStyleID) <= count($GLOBALS["aStyle"])) {
			$sUploadDir = explode("|||", $GLOBALS["aStyle"][$sStyleID]);
			$sUploadDir = $sUploadDir[3];
		}
	}
	if ($sUploadDir == "") {
		$sStyleID = "";
	}else{
		$sUploadDir = str_replace("\\", "/", $sUploadDir);
		if (substr($sUploadDir, -1) != "/") {
			$sUploadDir = $sUploadDir."/";
		}
		if (substr($sUploadDir, 0, 1) != "/") {
			$sUploadDir = "../".$sUploadDir;
		}
	}
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



?>