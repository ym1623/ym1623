// JScript 文件
var GiftCardWid=null;
function getGift(wid){
	var oDiv = document.createElement("DIV");             
	oDiv.id = "changeCard";
	oDiv.style.width = "600px";
	oDiv.style.height = "550px";
	oDiv.className="Tip360";              
	document.body.appendChild(oDiv);
	showTip2('#changeCard');
	document.getElementById("changeCard").innerHTML='数据读取中...';
    $.getJSON("http://www.360buy.com/giftAjax.aspx?getGift=get&wid="+wid+"&jsoncallback=?",
		function(json){
          if(json.info!="")
          {
              document.getElementById("changeCard").innerHTML=json.info;
          }
    });
}

function setGift(){
    var array = document.getElementById("changeCard").getElementsByTagName("input");
    var wid;
    for(var i=0;i<array.length;i++)
    {
      if(array[i].type=='radio' && array[i].checked ){
        wid = array[i].value;  
        break;
      }
    }
    var to =document.getElementById("To").value;
    var form = document.getElementById("From").value;
    var msg = document.getElementById("Message").value;
    to = to.replace(/<[\s\S]*?>/,"");
    form =form.replace(/<[\s\S]*?>/,"");
    msg = msg.replace(/<[\s\S]*?>/,""); 

	GiftCardWid=wid;

    if(wid=="" || wid==null){ 
     alert("请选择贺卡样式！"); 
     return false;
    }
    if(to==""||to==null){
     alert("请填写贺卡收件人！"); 
     return false;
    }
    if(msg==""||msg==null){ 
    alert("请填写贺卡内容！"); 
    return false;
    }
	if(msg.length>80)
	{
		alert("贺卡内容长度不能超过80！目前已经输入"+msg.length);
		return false;
	}
    if(form==""||form==null){
     alert("请填写贺卡发件人！");
     return false;
    }
	$.getJSON("http://www.360buy.com/giftAjax.aspx?getGift=set&wid="+wid+"&To="+to+"&From="+form+"&msg="+msg+"&jsoncallback=?",
		function(json){
          if(json.info!="")
          {
            if(json.info=="true")
            {
               hidTip();
               if(CardUrl!=null)window.location.href=CardUrl;
               else if(CardFun!=null)eval(CardFun);
            }
            else
              alert("保存信息失败！");

          }
    });
}
var CardUrl=null;
var CardFun=null;
function Card()
{
  this.Wid=0;
  this.Url='';
  this.Fun='';
  this.Show=function()
  {
     CardUrl=this.Url;
     CardFun=this.Fun;
     getGift(this.Wid);
  }  
}
