
var isIe=(window.ActiveXObject)?true:false;
var pageLinkUrl="";
var ajaxUrl="";
function g(nodeId)
{
   return document.getElementById(nodeId);
}
function setInnerHtml(objName,dcontent)
{
   if(g(objName)!=null)
   {g(objName).innerHTML=dcontent;}
}
function getPos(obj){
	this.Left=0;
	this.Top=0;
	this.Height=obj.offsetHeight;
	this.Width=obj.offsetWidth;
	var tempObj=obj;
	while (tempObj.tagName.toLowerCase()!="body" && tempObj.tagName.toLowerCase()!="html"){
		this.Left+=tempObj.offsetLeft;
		this.Top+=tempObj.offsetTop;
		tempObj=tempObj.offsetParent;
	}
}
function getNullPos()
{
   return {Left:0,Top:0}
}
function getMousePos(ev)
{
	if(ev.pageX || ev.pageY)
	{
		return {Left:ev.pageX, Top:ev.pageY};
	}
	return {
		Left:ev.clientX + document.documentElement.scrollLeft,Top:ev.clientY + document.documentElement.scrollTop
		}; 
}
function clearWaitInfo()
{
   var newd=g("waitInfo");
   if(newd!=null)
   {
      newd.parentNode.removeChild(newd);
   }
}
function setGrowHidden(obj,intAlphaStep,intTimeStep)
{
    
    try{
        if(obj==null){return;}
        if(isIe) 
        { 
            try{
            obj.filters.alpha.opacity-=intAlphaStep; 
            if (obj.filters.alpha.opacity>0) { 
            setTimeout(function(){setGrowHidden(obj,intAlphaStep,intTimeStep);},intTimeStep); 
            } 
            else {closeWindow();}
            }catch(e){closeWindow();}
        } 
        else 
        { 
            var curOpacity=obj.style.opacity;
            curOpacity-=intAlphaStep/100; 
            if (curOpacity>0) { 
            obj.style.opacity =curOpacity; 
            setTimeout(function(){setGrowHidden(obj,intAlphaStep,intTimeStep);},intTimeStep); 
            } 
            else {closeWindow();} 
        }
    }catch(e){}
}
function showMessageBox(content,pos,wWidth)
{
   closeWindow();
   var bWidth=parseInt(document.documentElement.scrollWidth);
    var bHeight=parseInt(document.documentElement.scrollHeight);
	var mesW=document.createElement("div");
	mesW.id="mesWindow";
	mesW.innerHTML=content;
	if(bWidth-pos.Left<wWidth)
	{
	   styleStr="left:"+(pos.Left-wWidth)+"px;";
	}
	else
	{
	   styleStr="left:"+(pos.Left)+"px;";
	}
	styleStr+="top:"+pos.Top+"px;position:absolute;width:"+wWidth+"px;";
	mesW.style.cssText=styleStr;
	document.body.appendChild(mesW);
		
}
function closeWindow()
{
    if(g('mesWindow')!=null)
    {  
       g('mesWindow').parentNode.removeChild(g('mesWindow'));
    }
}
//页面定位
function setScroll(objId)
{
   if(g(objId))
   {
      
      var objPos=new getPos(g(objId));
      scroll(0,objPos.Top);
   }
}
//ajax通用方法
function createXmlHttp(){
  var ajaxObj=null;
  if(window.ActiveXObject)
  {
     ajaxObj=new ActiveXObject("Microsoft.XMLHTTP");
  }else{
    if(window.XMLHttpRequest){
    ajaxObj=new XMLHttpRequest();
    }
  }
  return ajaxObj;
}
function setAjax_getRes(requst,resObjId)
{
   setAjax("GET",requst,null,false,null,resObjId,null);
}
function setAjax_runCode(requst,runCode)
{
   setAjax("GET",requst,null,false,null,null,runCode);
}
function setAjax_runCodeAndBtn(requst,curBtn,runCode)
{
   setAjax("GET",requst,null,false,curBtn,null,runCode);
}
function setAjax_getResAndRunCode(requst,resObjId,runCode)
{
   setAjax("GET",requst,null,false,null,resObjId,runCode);
}
function setAjax(postType,requst,postXml,isXml,curBtn,resObjId,runCode)
{   
    setAjaxBase(postType,requst,postXml,isXml,curBtn,resObjId,runCode,null);
}
function setAjaxBase(postType,requst,postXml,isXml,curBtn,resObjId,runCode,onOverRunCode)
{   
    
    if(curBtn!=null){curBtn.disabled=true;}
    var xmlHttp=createXmlHttp();
    xmlHttp.onreadystatechange=function(){backAjaxValue(xmlHttp,curBtn,resObjId,runCode,onOverRunCode)};
    if(postType=="GET"){
		xmlHttp.open(postType,pageLinkUrl+ajaxUrl+'?roid='+Math.random()+'&'+requst);
		xmlHttp.send(null);
    }else
    {
        xmlHttp.open(postType,pageLinkUrl+ajaxUrl+'?roid='+Math.random()+'&'+requst,true);
       if(!isXml){xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");}
       xmlHttp.send(postXml);
    }
}
function backAjaxValue(xmlHttp,curBtn,resObjId,runCode,onOverRunCode)
{
 
   if(xmlHttp.readyState==4)
   {
        clearWaitInfo();
		if(curBtn!=null){curBtn.disabled=false;}
		
		if(onOverRunCode!=null)eval(onOverRunCode);
		
		if(xmlHttp.status==200)
		{
		    var backValue=xmlHttp.responseText;
		    if(!checkErrorFromBackValue(backValue))
		    {
		       return;
		    }
		    if(resObjId!=null && g(resObjId)!=null)
		    {
		        g(resObjId).innerHTML=xmlHttp.responseText;
		    }
		    if(runCode!=null)
		    {
		    var backValue=xmlHttp.responseText;
		    eval(runCode);}
		    
		}
	}
}
function checkErrorFromBackValue(bakValue)
{
   if(bakValue!=null)
   {
      if(bakValue.indexOf('error_')==0)
      {
         if(bakValue.length>6)
         {bakValue=bakValue.substr(6);}
         else{bakValue='程序发生了未知错误，请再次尝试！';}
         alert(bakValue);
         return false;
      }
       return true;
   }
   return true;
}








function getFormXmlBySign(sign)
{
  var xmlDoc="";
    var eList=document.getElementsByTagName("input");
    for(var i=0;i<eList.length;i++)
    {                  
		if(isDataControl(eList[i].id,sign))
		{
		    var columnName=getDataColumnName(eList[i].id,sign);
		    if(eList[i].type=="checkbox" || eList[i].type=="radio")
		    {
		       if(eList[i].checked)
			   {
			      xmlDoc+="<"+columnName+">1</"+columnName+">";
			   }else
			   {  xmlDoc+="<"+columnName+">0</"+columnName+">";}
		    }else
		    {
				
				xmlDoc+="<"+columnName+"><![CDATA["+eList[i].value+"]]></"+columnName+">";		    
				columnName=null;
			}
		}			
    }
    eList=document.getElementsByTagName("select");
    for(var i=0;i<eList.length;i++)
    {                  
		if(isDataControl(eList[i].id,sign))
		{
		    var columnName=getDataColumnName(eList[i].id,sign);
			xmlDoc+="<"+columnName+"><![CDATA["+eList[i].value+"]]></"+columnName+">";		    
			columnName=null;
		}			
    }
    eList=document.getElementsByTagName("textarea");
    for(var i=0;i<eList.length;i++)
    {                  
		if(isDataControl(eList[i].id,sign))
		{
		    var columnName=getDataColumnName(eList[i].id,sign);
			xmlDoc+="<"+columnName+"><![CDATA["+eList[i].value+"]]></"+columnName+">";		    
			columnName=null;
		}			
    }
	return xmlDoc;   
}
function getFormXml()
{   
    return getFormXmlBySign('t_');
}
function isDataControl(controlId,sign){if(controlId.substring(0,sign.length)==sign){return true;}else{return false;}}
function getDataColumnName(controlId,sign){return controlId.substr(sign.length);} 

//非法字符过滤
function is_forbid(temp_str)
{
    temp_str=trimTxt(temp_str);
	temp_str = temp_str.replace('*',"@");
	temp_str = temp_str.replace('--',"@");
	temp_str = temp_str.replace('/',"@");
	temp_str = temp_str.replace('+',"@");
	temp_str = temp_str.replace('\'',"@");
	temp_str = temp_str.replace('\\',"@");
	temp_str = temp_str.replace('$',"@");
	temp_str = temp_str.replace('^',"@");
	temp_str = temp_str.replace('.',"@");
	//temp_str = temp_str.replace('(',"@");
	//temp_str = temp_str.replace(')',"@");
	//temp_str = temp_str.replace(',',"@");
	temp_str = temp_str.replace(';',"@");
	temp_str = temp_str.replace('<',"@");
	temp_str = temp_str.replace('>',"@");
	//temp_str = temp_str.replace('?',"@");
	temp_str = temp_str.replace('"',"@");
	temp_str = temp_str.replace('{',"@");
	temp_str = temp_str.replace('}',"@");
	//temp_str = temp_str.replace('[',"@");
	//temp_str = temp_str.replace(']',"@");
	var forbid_str=new String('@,%,~,&');
	var forbid_array=new Array();
	forbid_array=forbid_str.split(',');
	for(i=0;i<forbid_array.length;i++)
	{
		if(temp_str.search(new RegExp(forbid_array[i])) != -1)
		return false;
	}
	return true;
}
function checknumber(String) 
{ 
    if(trimTxt(String)=="")
    {
       return false;
    }
    var Letters = "1234567890"; 
    var i; 
    var c; 
    for( i = 0; i < String.length; i ++ ) 
    { 
        c = String.charAt( i ); 
        if (Letters.indexOf( c ) ==-1) 
        { 
           return false; 
        } 
    } 
    return true; 
} 
function trimTxt(txt)
{
   return txt.replace(/(^\s*)|(\s*$)/g, "");
}
//检查是否为空
function isEmpty(inputId)
{
   if(trimTxt(g(inputId).value)==''){return true}
   return false;
}
//设置是否可显示
function setDisplay(nodeId,state)
{
   if(g(nodeId)!=null){g(nodeId).style.display=state;}
}
//删除元素
function removeNode(nodeId)
{
   if(g(nodeId)!=null){g(nodeId).parentNode.removeChild(g(nodeId));}
}

//显示提示信息
function showAlert(info,obj,infoSign)
{
   if(g(infoSign)!=null){return;}
   var newd=document.createElement("span");
   newd.id=infoSign;
   newd.className='alertInfo';
   newd.innerHTML=info;
   obj.appendChild(newd);
}
//删除提示信息
function removeAlert(infoSign)
{
   if(g(infoSign)==null){return;}
   g(infoSign).parentNode.removeChild(g(infoSign));
}
//显示等待信息
function showWaitInfo(info,obj)
{
   try{
   if(obj==null)return;
   clearWaitInfo();
   var newd=document.createElement("span");
   newd.className='waitInfo';
   newd.id='waitInfo';
   newd.innerHTML=info;
   obj.parentNode.appendChild(newd);
   }catch(e){}
}
function showWaitInfoOnInner(info,obj)
{
   try{
   if(obj==null)return;
   clearWaitInfo();
   var newd=document.createElement("span");
   newd.className='waitInfo';
   newd.id='waitInfo';
   newd.innerHTML=info;
   obj.innerHTML='';
   obj.appendChild(newd);
   }catch(e){}
}
function clearWaitInfo()
{
   try{
   if(g('waitInfo')!=null){g('waitInfo').parentNode.removeChild(g('waitInfo'));}
   }catch(e){}
}
//检查短日期格式
function checkDateFormat(str) 
{ 
  var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
  if(r==null)return false; 
   var d= new Date(r[1], r[3]-1, r[4]); 
   return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]); 
} 
function checkDoubleFormat(str)
{
  var myReg=/^[\-\+]?([0-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)(\.\d+)?$/;
  return myReg.test(str);
}
//设置radio的默认值
function setRadioDefaultItem(radioName,valueId)
{
   var rList=document.getElementsByName(radioName);
   if(rList.length==0){return;}
   for(var i=0;i<rList.length;i++)
   {
      if(rList[i].checked)
      {
      　　if(g(valueId)!=null)g(valueId).value=rList[i].value;
          return;
      }
   }
   rList[0].click();
   if(g(valueId)!=null)g(valueId).value=rList[0].value;
}

function TimeSpan(secs)
{
   this.hour=Math.floor(secs/3600);
   this.minute=Math.floor((secs-3600*this.hour)/60);
   this.second=(secs-3600*this.hour-60*this.minute)%60;
}

function ToLogin()
{
    document.location="http://passport.360buy.com/login.aspx?ReturnUrl="+escape(location.href);
}


