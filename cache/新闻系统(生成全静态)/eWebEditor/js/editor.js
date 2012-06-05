/*
*######################################
* eWebEditor v3.80 - Advanced online web based WYSIWYG HTML editor.
* Copyright (c) 2003-2006 eWebSoft.com
*
* For further information go to http://www.ewebsoft.com/
* This copyright notice MUST stay intact for use.
*######################################
*/

var sCurrMode = null;
var bEditMode = null;
var oLinkField = null;

var BrowserInfo = new Object() ;
BrowserInfo.MajorVer = navigator.appVersion.match(/MSIE (.)/)[1] ;
BrowserInfo.MinorVer = navigator.appVersion.match(/MSIE .\.(.)/)[1] ;
BrowserInfo.IsIE55OrMore = BrowserInfo.MajorVer >= 6 || ( BrowserInfo.MajorVer >= 5 && BrowserInfo.MinorVer >= 5 ) ;
config.IsSP2 = (navigator.userAgent.indexOf("SV1") != -1);

window.onresize = initWidths;

var yToolbars = new Array();

var bInitialized = false;
function document.onreadystatechange(){
	if (document.readyState!="complete") return;
	if (bInitialized) return;
	bInitialized = true;

	initWidths();

	oLinkField = parent.document.getElementsByName(sLinkFieldName)[0];

	if (!BrowserInfo.IsIE55OrMore){
		config.InitMode = "TEXT";
	}
	
	if (ContentFlag.value=="0") { 
		ContentEdit.value = oLinkField.value;
		ContentLoad.value = oLinkField.value;
		ModeEdit.value = config.InitMode;
		ContentFlag.value = "1";
	}

	setMode(ModeEdit.value);
	setLinkedField() ;
}

function initWidths(){
	var i, curr;
	for (i=0; i<document.body.all.length;i++){
		curr=document.body.all[i];
		if (curr.className == "yToolbar"){
			InitTB(curr);
			yToolbars[yToolbars.length] = curr;
		}
	}
}

function InitBtn(btn) {
	btn.onmouseover = BtnMouseOver;
	btn.onmouseout = BtnMouseOut;
	btn.onmousedown = BtnMouseDown;
	btn.onmouseup = BtnMouseUp;
	btn.ondragstart = YCancelEvent;
	btn.onselectstart = YCancelEvent;
	btn.onselect = YCancelEvent;
	btn.YUSERONCLICK = btn.onclick;
	btn.onclick = YCancelEvent;
	btn.YINITIALIZED = true;
	return true;
}

function InitTB(y) {
	y.TBWidth = 0;
	if (! PopulateTB(y)) return false;
	y.style.posWidth = y.TBWidth;
	return true;
}

function YCancelEvent() {
	event.returnValue=false;
	event.cancelBubble=true;
	return false;
}

function BtnMouseOver() {
	if (event.srcElement.tagName != "IMG") return false;
	var image = event.srcElement;
	var element = image.parentElement;
	
	if (image.className == "Ico") element.className = "BtnMouseOverUp";
	else if (image.className == "IcoDown") element.className = "BtnMouseOverDown";

	event.cancelBubble = true;
}

function BtnMouseOut() {
	if (event.srcElement.tagName != "IMG") {
		event.cancelBubble = true;
		return false;
	}

	var image = event.srcElement;
	var element = image.parentElement;
	yRaisedElement = null;
	
	element.className = "Btn";
	image.className = "Ico";

	event.cancelBubble = true;
}

function BtnMouseDown() {
	if (event.srcElement.tagName != "IMG") {
		event.cancelBubble = true;
		event.returnValue=false;
		return false;
	}

	var image = event.srcElement;
	var element = image.parentElement;

	element.className = "BtnMouseOverDown";
	image.className = "IcoDown";

	event.cancelBubble = true;
	event.returnValue=false;
	return false;
}

function BtnMouseUp() {
	if (event.srcElement.tagName != "IMG") {
		event.cancelBubble = true;
		return false;
	}

	var image = event.srcElement;
	var element = image.parentElement;

	if (element.YUSERONCLICK) eval(element.YUSERONCLICK + "anonymous()");

	element.className = "BtnMouseOverUp";
	image.className = "Ico";

	event.cancelBubble = true;
	return false;
}

function PopulateTB(y) {
	var i, elements, element;

	elements = y.children;
	for (i=0; i<elements.length; i++) {
		element = elements[i];
		if (element.tagName == "SCRIPT" || element.tagName == "!") continue;
		
		switch (element.className) {
		case "Btn":
			if (element.YINITIALIZED == null) {
				if (! InitBtn(element)) {
					alert("Problem initializing:" + element.id);
					return false;
				}
			}
			
			element.style.posLeft = y.TBWidth;
			y.TBWidth += element.offsetWidth + 1;
			break;
			
		case "TBGen":
			element.style.posLeft = y.TBWidth;
			y.TBWidth += element.offsetWidth + 1;
			break;
			
		case "TBSep":
			element.style.posLeft = y.TBWidth + 2;
			y.TBWidth += 5;
			break;
			
		case "TBHandle":
			element.style.posLeft = 2;
			y.TBWidth += element.offsetWidth + 7;
			break;
			
		default:
			alert("Invalid class: " + element.className + " on Element: " + element.id + " <" + element.tagName + ">");
			return false;
		}
	}

	y.TBWidth += 1;
	return true;
}


function setLinkedField() {
	if (! oLinkField) return ;
	var oForm = oLinkField.form ;
	if (!oForm) return ;

	oForm.attachEvent("onsubmit", AttachSubmit) ;
	if (! oForm.submitEditor) oForm.submitEditor = new Array() ;
	oForm.submitEditor[oForm.submitEditor.length] = AttachSubmit ;
	if (! oForm.originalSubmit) {
		oForm.originalSubmit = oForm.submit ;
		oForm.submit = function() {
			if (this.submitEditor) {
				for (var i = 0 ; i < this.submitEditor.length ; i++) {
					this.submitEditor[i]() ;
				}
			}
			this.originalSubmit() ;
		}
	}

	oForm.attachEvent("onreset", AttachReset) ;
	if (! oForm.resetEditor) oForm.resetEditor = new Array() ;
	oForm.resetEditor[oForm.resetEditor.length] = AttachReset ;
	if (! oForm.originalReset) {
		oForm.originalReset = oForm.reset ;
		oForm.reset = function() {
			if (this.resetEditor) {
				for (var i = 0 ; i < this.resetEditor.length ; i++) {
					this.resetEditor[i]() ;
				}
			}
			this.originalReset() ;
		}
	}
}

function AttachSubmit() { 
	var oForm = oLinkField.form ;
	if (!oForm) return;
	
	var html = getHTML();
	ContentEdit.value = html;
	if (sCurrMode=="TEXT"){
		html = HTMLEncode(html);
	}
	splitTextField(oLinkField, html);
} 

function doSubmit(){
	var oForm = oLinkField.form ;
	if (!oForm) return ;
	oForm.submit();
}

function AttachReset() {
	if(bEditMode){
		eWebEditor.document.body.innerHTML = ContentLoad.value;
	}else{
		eWebEditor.document.body.innerText = ContentLoad.value;
	}
}

function onHelp(){
	showDialog('help.htm');
	return false;
}

function onPaste() {
	if (sCurrMode=="VIEW") return false;

	if (sCurrMode=="EDIT"){
		var sHTML = GetClipboardHTML() ;
		if ((config.AutoDetectPasteFromWord=="1") && BrowserInfo.IsIE55OrMore) {
			var re = /<\w[^>]* class="?MsoNormal"?/gi ;
			if ( re.test(sHTML)){
				if ( confirm( lang["MsgPasteWordConfirm"] ) ){
					cleanAndPaste( sHTML ) ;
					return false ;
				}
			}
		}
		return true;
	}else{
		eWebEditor.document.selection.createRange().pasteHTML(HTMLEncode( clipboardData.getData("Text"))) ;
		return false;
	}
	
}

function onKeyDown(event){
	var key = String.fromCharCode(event.keyCode).toUpperCase();

	// F2
	if (event.keyCode==113){
		showBorders();
		return false;
	}
	if (event.ctrlKey){
		// Ctrl+Enter
		if (event.keyCode==10){
			doSubmit();
			return false;
		}
		// Ctrl++
		if (key=="+"){
			sizeChange(300);
			return false;
		}
		// Ctrl+-
		if (key=="-"){
			sizeChange(-300);
			return false;
		}
		// Ctrl+1
		if (key=="1"){
			setMode("CODE");
			return false;
		}
		// Ctrl+2
		if (key=="2"){
			setMode("EDIT");
			return false;
		}
		// Ctrl+3
		if (key=="3"){
			setMode("TEXT");
			return false;
		}
		// Ctrl+4
		if (key=="4"){
			setMode("VIEW");
			return false;
		}
	}

	switch(sCurrMode){
	case "VIEW":
		return true;
		break;
	case "EDIT":
		if (event.ctrlKey){
			// Ctrl+D
			if (key == "D"){
				PasteWord();
				return false;
			}
			// Ctrl+R
			if (key == "R"){
				findReplace();
				return false;
			}
			// Ctrl+Z
			if (key == "Z"){
				goHistory(-1);
				return false;
			}
			// Ctrl+Y
			if (key == "Y"){
				goHistory(1);
				return false;
			}
		}
		if(!event.ctrlKey && event.keyCode != 90 && event.keyCode != 89) {
			if (event.keyCode == 32 || event.keyCode == 13){
				saveHistory()
			}
		}
		return true;
		break;
	default:
		if (event.keyCode==13){
			var sel = eWebEditor.document.selection.createRange();
			sel.pasteHTML("<BR>");
			event.cancelBubble = true;
			event.returnValue = false;
			sel.select();
			sel.moveEnd("character", 1);
			sel.moveStart("character", 1);
			sel.collapse(false);
			return false;
		}
		if (event.ctrlKey){
			// Ctrl+B,I,U
			if ((key == "B")||(key == "I")||(key == "U")){
				return false;
			}
		}

	}
}

function GetClipboardHTML() {
	var oDiv = document.getElementById("eWebEditor_Temp_HTML")
	oDiv.innerHTML = "" ;
	
	var oTextRange = document.body.createTextRange() ;
	oTextRange.moveToElementText(oDiv) ;
	oTextRange.execCommand("Paste") ;
	
	var sData = oDiv.innerHTML ;
	oDiv.innerHTML = "" ;
	
	return sData ;
}

function cleanAndPaste( html ) {
	html = html.replace(/<\/?SPAN[^>]*>/gi, "" );
	html = html.replace(/<(\w[^>]*) class=([^ |>]*)([^>]*)/gi, "<$1$3") ;
	html = html.replace(/<(\w[^>]*) style="([^"]*)"([^>]*)/gi, "<$1$3") ;
	html = html.replace(/<(\w[^>]*) lang=([^ |>]*)([^>]*)/gi, "<$1$3") ;
	html = html.replace(/<\\?\?xml[^>]*>/gi, "") ;
	html = html.replace(/<\/?\w+:[^>]*>/gi, "") ;
	html = html.replace(/&nbsp;/, " " );
	
	insertHTML( html ) ;
}

function insertHTML(html) {
	if (isModeView()) return false;
	eWebEditor.focus();
	if (eWebEditor.document.selection.type.toLowerCase() != "none"){
		eWebEditor.document.selection.clear() ;
	}
	if (sCurrMode!="EDIT"){
		html=HTMLEncode(html);
	}
	eWebEditor.document.selection.createRange().pasteHTML(html) ; 
}

function setHTML(html) {
	ContentEdit.value = html;
	switch (sCurrMode){
	case "CODE":
		eWebEditor.document.designMode="On";
		eWebEditor.document.open();
		eWebEditor.document.write(getStyleEditorHeader());
		eWebEditor.document.body.innerText=html;
		eWebEditor.document.body.contentEditable="true";
		eWebEditor.document.close();
		bEditMode=false;
		break;
	case "EDIT":
		eWebEditor.document.designMode="On";
		eWebEditor.document.open();
		eWebEditor.document.write(getStyleEditorHeader()+html);
		eWebEditor.document.body.contentEditable="true";
		eWebEditor.document.execCommand("2D-Position",true,true);
		eWebEditor.document.execCommand("MultipleSelection", true, true);
		eWebEditor.document.execCommand("LiveResize", true, true);
		eWebEditor.document.close();
		doZoom(nCurrZoomSize);
		bEditMode=true;
		eWebEditor.document.onselectionchange = function () { doToolbar();}
		break;
	case "TEXT":
		eWebEditor.document.designMode="On";
		eWebEditor.document.open();
		eWebEditor.document.write(getStyleEditorHeader());
		eWebEditor.document.body.innerText=html;
		eWebEditor.document.body.contentEditable="true";
		eWebEditor.document.close();
		bEditMode=false;
		break;
	case "VIEW":
		eWebEditor.document.designMode="off";
		eWebEditor.document.open();
		eWebEditor.document.write(getStyleEditorHeader()+html);
		eWebEditor.document.body.contentEditable="false";
		eWebEditor.document.close();
		bEditMode=false;
		break;
	}

	eWebEditor.document.body.onpaste = onPaste ;
	eWebEditor.document.body.onhelp = onHelp ;
	eWebEditor.document.onkeydown = new Function("return onKeyDown(eWebEditor.event);");
	eWebEditor.document.oncontextmenu=new Function("return showContextMenu(eWebEditor.event);");

	if ((borderShown != "0")&&bEditMode) {
		borderShown = "0";
		showBorders();
	}

	initHistory();
}

function getHTML() {
	var html;
	if((sCurrMode=="EDIT")||(sCurrMode=="VIEW")){
		html = eWebEditor.document.body.innerHTML;
	}else{
		html = eWebEditor.document.body.innerText;
	}
	if (sCurrMode!="TEXT"){
		if ((html.toLowerCase()=="<p>&nbsp;</p>")||(html.toLowerCase()=="<p></p>")){
			html = "";
		}
	}
	return html;
}

function appendHTML(html) {
	if (isModeView()) return false;
	if(sCurrMode=="EDIT"){
		eWebEditor.document.body.innerHTML += html;
	}else{
		eWebEditor.document.body.innerText += html;
	}
}

function PasteWord(){
	if (!validateMode()) return;
	eWebEditor.focus();
	if (BrowserInfo.IsIE55OrMore)
		cleanAndPaste( GetClipboardHTML() ) ;
	else if ( confirm( lang["MsgNotCompatiblePaste"] ) )
		format("paste") ;
	eWebEditor.focus();
}

function PasteText(){
	if (!validateMode()) return;
	eWebEditor.focus();
	var sText = HTMLEncode( clipboardData.getData("Text") ) ;
	insertHTML(sText);
	eWebEditor.focus();
}

function validateMode() {
	if (sCurrMode=="EDIT") return true;
	alert(lang["MsgOnlyInEditMode"]);
	eWebEditor.focus();
	return false;
}

function isModeView(){
	if (sCurrMode=="VIEW"){
		alert(lang["MsgCanotSetInViewMode"]);
		return true;
	}
	return false;
}

function format(what,opt) {
	if (!validateMode()) return;
	eWebEditor.focus();
	if (opt=="RemoveFormat") {
		what=opt;
		opt=null;
	}
	if (opt==null) eWebEditor.document.execCommand(what);
	else eWebEditor.document.execCommand(what,"",opt);
	eWebEditor.focus();
}

function VerifyFocus() {
	if ( eWebEditor )
		eWebEditor.focus();
}

function setMode(NewMode){
	if (NewMode!=sCurrMode){
		
		if (!BrowserInfo.IsIE55OrMore){
			if ((NewMode=="CODE") || (NewMode=="EDIT") || (NewMode=="VIEW")){
				alert(lang["MsgNotCompatibleHtml"]);
				return false;
			}
		}

		if (NewMode=="TEXT"){
			if (sCurrMode==ModeEdit.value){
				if (!confirm(lang["MsgHtmlToText"])){
					return false;
				}
			}
		}

		var sBody = "";
		switch(sCurrMode){
		case "CODE":
			if (NewMode=="TEXT"){
				eWebEditor_Temp_HTML.innerHTML = eWebEditor.document.body.innerText;
				sBody = eWebEditor_Temp_HTML.innerText;
			}else{
				sBody = eWebEditor.document.body.innerText;
			}
			break;
		case "TEXT":
			sBody = eWebEditor.document.body.innerText;
			sBody = HTMLEncode(sBody);
			break;
		case "EDIT":
		case "VIEW":
			if (NewMode=="TEXT"){
				sBody = eWebEditor.document.body.innerText;
			}else{
				sBody = eWebEditor.document.body.innerHTML;
			}
			break;
		default:
			sBody = ContentEdit.value;
			break;
		}

		try{
			document.all["eWebEditor_CODE"].className = "StatusBarBtnOff";
			document.all["eWebEditor_EDIT"].className = "StatusBarBtnOff";
			document.all["eWebEditor_TEXT"].className = "StatusBarBtnOff";
			document.all["eWebEditor_VIEW"].className = "StatusBarBtnOff";
			document.all["eWebEditor_"+NewMode].className = "StatusBarBtnOn";
			}
		catch(e){
			}
		
		sCurrMode = NewMode;
		ModeEdit.value = NewMode;
		setHTML(sBody);
		disableChildren(eWebEditor_Toolbar);

	}
}

function disableChildren(obj){
	if (obj){
		obj.disabled=(!bEditMode);
		for (var i=0; i<obj.children.length; i++){
			disableChildren(obj.children[i]);
		}
	}
}


function showDialog(url, optValidate){
	var sName;
	var nIndex = url.indexOf(".");
	if (nIndex<0){
		sName = url;
		url = url + ".htm";
	}else{
		sName = url.substring(0, nIndex);
	}
	url = "dialog/" + url;
	sName = sName.toLowerCase();
	url = url.toLowerCase();

	if (optValidate) {
		if (!validateMode()) return;
	}
	eWebEditor.focus();
	//var arr = showModalDialog(url, window, "dialogWidth:" + lang["UI"+sName+"Width"] + "px;dialogHeight:" + lang["UI"+sName+"Height"] + "px;help:no;scroll:no;status:no");
	var arr = showModalDialog(url, window, "dialogWidth:0px;dialogHeight:0px;help:no;scroll:no;status:no");
	eWebEditor.focus();

}


function Maximize() {
	if (!validateMode()) return;
	window.open("dialog/fullscreen.htm?style="+config.StyleName, 'FullScreen'+sLinkFieldName, 'toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,fullscreen=yes');
}

function createLink(){
	if (!validateMode()) return;
	
	if (eWebEditor.document.selection.type == "Control") {
		var oControlRange = eWebEditor.document.selection.createRange();
		if (oControlRange(0).tagName.toUpperCase() != "IMG") {
			alert(lang["MsgHylnkLimit"]);
			return;
		}
	}
	
	showDialog("hyperlink.htm", true);
}

function HTMLEncode(text){
	text = text.replace(/&/g, "&amp;") ;
	text = text.replace(/"/g, "&quot;") ;
	text = text.replace(/</g, "&lt;") ;
	text = text.replace(/>/g, "&gt;") ;
	text = text.replace(/\ /g,"&nbsp;");
	text = text.replace(/\n/g,"<br>");
	text = text.replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;");
	return text;
}

function insert(what) {
	if (!validateMode()) return;
	eWebEditor.focus();
	var sel = eWebEditor.document.selection.createRange();

	switch(what){
	case "excel":
		insertHTML("<object classid='clsid:0002E510-0000-0000-C000-000000000046' id='Spreadsheet1' codebase='file:\\Bob\software\office2000\msowc.cab' width='100%' height='250'><param name='HTMLURL' value><param name='HTMLData' value='&lt;html xmlns:x=&quot;urn:schemas-microsoft-com:office:excel&quot;xmlns=&quot;http://www.w3.org/TR/REC-html40&quot;&gt;&lt;head&gt;&lt;style type=&quot;text/css&quot;&gt;&lt;!--tr{mso-height-source:auto;}td{black-space:nowrap;}.wc4590F88{black-space:nowrap;font-family:Verdana,Arial,Helvetica,sans-serif;mso-number-format:General;font-size:auto;font-weight:auto;font-style:auto;text-decoration:auto;mso-background-source:auto;mso-pattern:auto;mso-color-source:auto;text-align:general;vertical-align:bottom;border-top:none;border-left:none;border-right:none;border-bottom:none;mso-protection:locked;}--&gt;&lt;/style&gt;&lt;/head&gt;&lt;body&gt;&lt;!--[if gte mso 9]&gt;&lt;xml&gt;&lt;x:ExcelWorkbook&gt;&lt;x:ExcelWorksheets&gt;&lt;x:ExcelWorksheet&gt;&lt;x:OWCVersion&gt;9.0.0.2710&lt;/x:OWCVersion&gt;&lt;x:Label Style='border-top:solid .5pt silver;border-left:solid .5pt silver;border-right:solid .5pt silver;border-bottom:solid .5pt silver'&gt;&lt;x:Caption&gt;Microsoft Office Spreadsheet&lt;/x:Caption&gt; &lt;/x:Label&gt;&lt;x:Name&gt;Sheet1&lt;/x:Name&gt;&lt;x:WorksheetOptions&gt;&lt;x:Selected/&gt;&lt;x:Height&gt;7620&lt;/x:Height&gt;&lt;x:Width&gt;15240&lt;/x:Width&gt;&lt;x:TopRowVisible&gt;0&lt;/x:TopRowVisible&gt;&lt;x:LeftColumnVisible&gt;0&lt;/x:LeftColumnVisible&gt; &lt;x:ProtectContents&gt;False&lt;/x:ProtectContents&gt; &lt;x:DefaultRowHeight&gt;210&lt;/x:DefaultRowHeight&gt; &lt;x:StandardWidth&gt;2389&lt;/x:StandardWidth&gt; &lt;/x:WorksheetOptions&gt; &lt;/x:ExcelWorksheet&gt;&lt;/x:ExcelWorksheets&gt; &lt;x:MaxHeight&gt;80%&lt;/x:MaxHeight&gt;&lt;x:MaxWidth&gt;80%&lt;/x:MaxWidth&gt;&lt;/x:ExcelWorkbook&gt;&lt;/xml&gt;&lt;![endif]--&gt;&lt;table class=wc4590F88 x:str&gt;&lt;col width=&quot;56&quot;&gt;&lt;tr height=&quot;14&quot;&gt;&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/body&gt;&lt;/html&gt;'> <param name='DataType' value='HTMLDATA'> <param name='AutoFit' value='0'><param name='DisplayColHeaders' value='-1'><param name='DisplayGridlines' value='-1'><param name='DisplayHorizontalScrollBar' value='-1'><param name='DisplayRowHeaders' value='-1'><param name='DisplayTitleBar' value='-1'><param name='DisplayToolbar' value='-1'><param name='DisplayVerticalScrollBar' value='-1'> <param name='EnableAutoCalculate' value='-1'> <param name='EnableEvents' value='-1'><param name='MoveAfterReturn' value='-1'><param name='MoveAfterReturnDirection' value='0'><param name='RightToLeft' value='0'><param name='ViewableRange' value='1:65536'></object>");
		break;
	case "nowdate":
		var d = new Date();
		insertHTML(d.toLocaleDateString());
		break;
	case "nowtime":
		var d = new Date();
		insertHTML(d.toLocaleTimeString());
		break;
	case "br":
		insertHTML("<br>")
		break;
	case "code":
		insertHTML('<table width=95% border="0" align="Center" cellpadding="6" cellspacing="0" style="border: 1px Dotted #CCCCCC; TABLE-LAYOUT: fixed"><tr><td bgcolor=#FDFDDF style="WORD-WRAP: break-word"><font style="color: #990000;font-weight:bold">'+lang["HtmlCode"]+'</font><br>'+HTMLEncode(sel.text)+'</td></tr></table>');
		break;
	case "quote":
		insertHTML('<table width=95% border="0" align="Center" cellpadding="6" cellspacing="0" style="border: 1px Dotted #CCCCCC; TABLE-LAYOUT: fixed"><tr><td bgcolor=#F3F3F3 style="WORD-WRAP: break-word"><font style="color: #990000;font-weight:bold">'+lang["HtmlQuote"]+'</font><br>'+HTMLEncode(sel.text)+'</td></tr></table>');
		break;
	case "big":
		insertHTML("<big>" + sel.text + "</big>");
		break;
	case "small":
		insertHTML("<small>" + sel.text + "</small>");
		break;
	default:
		alert(lang["ErrParam"]);
		break;
	}
	sel=null;
}

var borderShown = config.ShowBorder;
function showBorders() {
	if (!validateMode()) return;
	
	var allForms = eWebEditor.document.body.getElementsByTagName("FORM");
	var allInputs = eWebEditor.document.body.getElementsByTagName("INPUT");
	var allTables = eWebEditor.document.body.getElementsByTagName("TABLE");
	var allLinks = eWebEditor.document.body.getElementsByTagName("A");

	// form
	for (a=0; a < allForms.length; a++) {
		if (borderShown == "0") {
			allForms[a].runtimeStyle.border = "1px dotted #FF0000"
		} else {
			allForms[a].runtimeStyle.cssText = ""
		}
	}

	// input
	for (b=0; b < allInputs.length; b++) {
		if (borderShown == "0") {
			if (allInputs[b].type.toUpperCase() == "HIDDEN") {
				allInputs[b].runtimeStyle.border = "1px dashed #000000"
				allInputs[b].runtimeStyle.width = "15px"
				allInputs[b].runtimeStyle.height = "15px"
				allInputs[b].runtimeStyle.backgroundColor = "#FDADAD"
				allInputs[b].runtimeStyle.color = "#FDADAD"
			}
		} else {
			if (allInputs[b].type.toUpperCase() == "HIDDEN")
				allInputs[b].runtimeStyle.cssText = ""
		}
	}

	// table
	for (i=0; i < allTables.length; i++) {
			if (borderShown == "0") {
				allTables[i].runtimeStyle.border = "1px dotted #BFBFBF"
			} else {
				allTables[i].runtimeStyle.cssText = ""
			}

			allRows = allTables[i].rows
			for (y=0; y < allRows.length; y++) {
			 	allCellsInRow = allRows[y].cells
					for (x=0; x < allCellsInRow.length; x++) {
						if (borderShown == "0") {
							allCellsInRow[x].runtimeStyle.border = "1px dotted #BFBFBF"
						} else {
							allCellsInRow[x].runtimeStyle.cssText = ""
						}
					}
			}
	}

	// A
	for (a=0; a < allLinks.length; a++) {
		if (borderShown == "0") {
			if (allLinks[a].href.toUpperCase() == "") {
				allLinks[a].runtimeStyle.borderBottom = "1px dashed #000000"
			}
		} else {
			allLinks[a].runtimeStyle.cssText = ""
		}
	}

	if (borderShown == "0") {
		borderShown = "1"
	} else {
		borderShown = "0"
	}

	scrollUp()
}

function scrollUp() {
	eWebEditor.scrollBy(0,0);
}

var nCurrZoomSize = 100;
var aZoomSize = new Array(10, 25, 50, 75, 100, 150, 200, 500);
function doZoom(size) {
	eWebEditor.document.body.runtimeStyle.zoom = size + "%";
	nCurrZoomSize = size;
}

function findReplace(){
	showDialog('findreplace.htm', true)
}

function absolutePosition(){
	var objReference	= null;
	var RangeType		= eWebEditor.document.selection.type;
	if (RangeType != "Control") return;
	var selectedRange	= eWebEditor.document.selection.createRange();
	for (var i=0; i<selectedRange.length; i++){
		objReference = selectedRange.item(i);
		if (objReference.style.position != 'relative') {
			objReference.style.position='relative';
		}else{
			objReference.style.position='static';
		}
	}
}

function zIndex(action){
	var objReference	= null;
	var RangeType		= eWebEditor.document.selection.type;
	if (RangeType != "Control") return;
	var selectedRange	= eWebEditor.document.selection.createRange();
	for (var i=0; i<selectedRange.length; i++){
		objReference = selectedRange.item(i);
		if (action=='forward'){
			objReference.style.zIndex  +=1;
		}else{
			objReference.style.zIndex  -=1;
		}
		objReference.style.position='relative';
	}
}

function isControlSelected(tag){
	if (tag){
		if (eWebEditor.document.selection.type == "Control") {
			var oControlRange = eWebEditor.document.selection.createRange();
			if (oControlRange(0).tagName.toUpperCase() == tag) {
				return true;
			}	
		}
	}
	return false;
}

function findParentElement(tag) {
	var el = null;
	if (eWebEditor.document.selection.type != "Control") {
		el = eWebEditor.document.selection.createRange().parentElement();
		while (el.tagName.toUpperCase() != tag){
			el = el.parentElement;
			if (el == null){
                break;
			}
		}
	}
	return el;
}

function sizeChange(size){
	if (!BrowserInfo.IsIE55OrMore){
		alert(lang["MsgNotCompatibleFunc"]);
		return false;
	}
	for (var i=0; i<parent.frames.length; i++){
		if (parent.frames[i].document==self.document){
			var obj=parent.frames[i].frameElement;
			var height = parseInt(obj.offsetHeight);
			if (height+size>=300){
				obj.height=height+size;
			}
			break;
		}
	}
}

function mapEdit(){
	if (!validateMode()) return;
	
	var b = false;
	if (eWebEditor.document.selection.type == "Control") {
		var oControlRange = eWebEditor.document.selection.createRange();
		if (oControlRange(0).tagName.toUpperCase() == "IMG") {
			b = true;
		}
	}
	if (!b){
		alert(lang["MsgMapLimit"]);
		return;
	}

	window.open("dialog/map.htm", "mapEdit"+sLinkFieldName, "toolbar=no,location=no,directories=no,status=not,menubar=no,scrollbars=no,resizable=yes,width=450,height=300");
}

function paragraphAttr(){
	if (!validateMode()) return;
	eWebEditor.focus();

	if (!tagInSelection("P")){
		alert(lang["MsgNotParagraph"]);
		return;
	}

	showDialog('paragraph.htm', true);
}


function tagInSelection(tag){
	var sel = eWebEditor.document.selection.createRange();
	sel.type = eWebEditor.document.selection.type;
	if (sel.type!="Control"){
		var oBody = eWebEditor.document.body;
		var aAllEl = oBody.getElementsByTagName(tag);
		var aSelEl = new Array();
		var oRngTemp = oBody.createTextRange();

		for(var i=0;i<aAllEl.length;i++){
			oRngTemp.moveToElementText(aAllEl(i));
			if (sel.inRange(oRngTemp)){
				aSelEl[aSelEl.length] = aAllEl[i];
			}else{
				if ( ((sel.compareEndPoints("StartToEnd",oRngTemp)<0)&&(sel.compareEndPoints("StartToStart",oRngTemp)>0)) || ((sel.compareEndPoints("EndToStart",oRngTemp)>0)&&(sel.compareEndPoints("EndToEnd",oRngTemp)<0)) ){
					aSelEl[aSelEl.length] = aAllEl[i];
				}
			}
		}

		if (aSelEl.length>0){
			return true;
		}
		
	}
	return false;
}

function addUploadFile(originalFileName, saveFileName, savePathFileName){
	doInterfaceUpload(sLinkOriginalFileName, originalFileName);
	doInterfaceUpload(sLinkSaveFileName, saveFileName);
	doInterfaceUpload(sLinkSavePathFileName, savePathFileName);
}

function doInterfaceUpload(strLinkName, strValue){
	if (strValue=="") return;

	if (strLinkName){
		var objLinkUpload = parent.document.getElementsByName(strLinkName)[0];
		if (objLinkUpload){
			if (objLinkUpload.value!=""){
				objLinkUpload.value = objLinkUpload.value + "|";
			}
			objLinkUpload.value = objLinkUpload.value + strValue;
			objLinkUpload.fireEvent("onchange");
		}
	}
}

function splitTextField(objField, html) { 
	objField.value = html;

	if (config.ServerExt != "asp") return;

	var strFieldName = objField.name;
	var objForm = objField.form;
	var objDocument = objField.document;
	var FormLimit = 50000 ;

	for (var i=1;i<objDocument.getElementsByName(strFieldName).length;i++) {
		objDocument.getElementsByName(strFieldName)[i].value = "";
	}

	if (html.length > FormLimit) { 
		objField.value = html.substr(0, FormLimit) ;
		html = html.substr(FormLimit) ;

		while (html.length > 0) { 
			var objTEXTAREA = objDocument.createElement("TEXTAREA") ;
			objTEXTAREA.name = strFieldName ;
			objTEXTAREA.style.display = "none" ;
			objTEXTAREA.value = html.substr(0, FormLimit) ;
			objForm.appendChild(objTEXTAREA) ;

			html = html.substr(FormLimit) ;
		} 
	}
} 

var sEventUploadAfter;
function remoteUpload(strEventUploadAfter) { 
	if (config.AutoRemote!="1") return;
	if (sCurrMode=="TEXT") return;
	
	sEventUploadAfter = strEventUploadAfter;
	var objField = document.getElementsByName("eWebEditor_UploadText")[0];
	splitTextField(objField, getHTML());

	divProcessing.style.top = (document.body.clientHeight-parseFloat(divProcessing.style.height))/2;
	divProcessing.style.left = (document.body.clientWidth-parseFloat(divProcessing.style.width))/2;
	divProcessing.style.display = "";
	eWebEditor_UploadForm.submit();
} 

function remoteUploadOK() {
	divProcessing.style.display = "none";
	if (oLinkField){
		if (sEventUploadAfter){
			eval("parent."+sEventUploadAfter);
		}
	}
}

var history = new Object;
history.data = [];
history.position = 0;
history.bookmark = [];

function saveHistory() {
	if (bEditMode){
		if (history.data[history.position] != eWebEditor.document.body.innerHTML){
			var nBeginLen = history.data.length;
			var nPopLen = history.data.length - history.position;
			for (var i=1; i<nPopLen; i++){
				history.data.pop();
				history.bookmark.pop();
			}

			history.data[history.data.length] = eWebEditor.document.body.innerHTML;

			if (eWebEditor.document.selection.type != "Control"){
				history.bookmark[history.bookmark.length] = eWebEditor.document.selection.createRange().getBookmark();
			} else {
				var oControl = eWebEditor.document.selection.createRange();
				history.bookmark[history.bookmark.length] = oControl[0];
			}

			if (nBeginLen!=0){
				history.position++;
			}
		}
	}
}

function initHistory() {
	history.data.length = 0;
	history.bookmark.length = 0;
	history.position = 0;
}

function goHistory(value) {
	saveHistory();
	// undo
	if (value == -1){
		if (history.position > 0){
			eWebEditor.document.body.innerHTML = history.data[--history.position];
			setHistoryCursor();
		}
	// redo
	} else {
		if (history.position < history.data.length -1){
			eWebEditor.document.body.innerHTML = history.data[++history.position];
			setHistoryCursor();
		}
	}
}

function setHistoryCursor() {
	if (history.bookmark[history.position]){
		r = eWebEditor.document.body.createTextRange()
		if (history.bookmark[history.position] != "[object]"){
			if (r.moveToBookmark(history.bookmark[history.position])){
				r.collapse(false);
				r.select();
			}
		}
	}
}

function doToolbar(){
	if (bEditMode){
		saveHistory();
	}
}

function getStyleEditorHeader(){
	if ((sCurrMode=="EDIT") || (sCurrMode=="VIEW")){
		return config.StyleEditorHeader1 + sExtCSS + config.StyleEditorHeader2;
	}else{
		return config.StyleEditorHeader1 + config.StyleEditorHeader2;
	}
}