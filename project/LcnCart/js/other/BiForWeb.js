var biForWebLock_Fit = false;
var biForWebLock_Maybe = true;



function setLinkCountNew(mainId,skuId,key)
{
   try{
       if(mainId!=null)
       {
           var js=document.createElement('script');
           js.type='text/javascript';
           //alert('buyLink_'+mainId+'_'+skuId);
           js.src='http://counter.360buy.com/aclk.aspx?key='+key+'_'+mainId+'_'+skuId;
           //js.charset='UTF-8';
           document.getElementsByTagName('head')[0].appendChild(js);
       }
   }catch(e){}
}


//给购物车提供--------您可能还需要以下商品
function GetWByUUid(tag,wid) 
{
    document.getElementById(tag).innerHTML="数据读取中。。。";
    $.getJSON(
	    "http://simigoods.360buy.com/GetWByUid.aspx?jsoncallback=?&wid="+wid,
	    function(json) {
		    GetWByUUidHtml(json,tag,wid);		   
	    }			
    );
    
}
function GetWByUUidHtml(json,tag,wid)
{
    var html="";
    if(json!=undefined&&json!=""&&json.length>0 && biForWebLock_Maybe)
    {
        html+="<ul>";
        for(var i=0;i<json.length;i++)
        {
            html+="<li>";
            html+="<dl>";
			html+="<dt><a href=\"http://www.360buy.com/product/"+ json[i].Wid +".html\" onclick=\"setLinkCountNew('"+wid+"','"+json[i].Wid+"','cartFairy')\"><img onerror=\"this.src=imgOnError_small\" src=\"http://img10.360buyimg.com/s4/"+ json[i].ImageUrl +"\" alt=\""+json[i].Wname+"\" width=\"100\" height=\"75\" /></a></dt>";
			html+="<dd>";
			html+="<div class=\"p_Name\"><a href=\"http://www.360buy.com/product/"+ json[i].Wid +".html\">"+json[i].Wname+"</a></div>";
			html+="<div class=\"p_Price\"><em><img src=\""+json[i].PriceImg+"\" /></em><span>￥"+json[i].WMaprice+"</span></div>";
            html+="<div class=\"p_Opp\"><a onclick=\"AddProduct('"+json[i].Wid+"',this);mark('"+json[i].Wid+"', 2);\" href=\"#none\"><img src=\"http://www.360buy.com/purchase/skin/images/minicart/addcart.gif\" width=\"94\" height=\"24\" /></a></div>";
			html+="</dd>";
			html+="</dl>";
			html+="</li>";
        }
        html+="</ul>";
        document.getElementById(tag).innerHTML=html;
    }
    else
    {
        //document.getElementById(tag).innerHTML="<div style='height:30px;line-height:30px;'>暂时没有相关的商品！<div>";
        var removeElement = document.getElementById(tag).previousSibling;
        var tempcount = 0;
	    while(removeElement.innerHTML != "您可能还需要以下商品")
	    {
		    removeElement = removeElement.previousSibling;
		    tempcount = tempcount+1;
			if(tempcount > 10)
			{
				break;
			}
	    }
	    removeElement.style.display = "none";
	    document.getElementById(tag).style.display = "none";
    }
}


//购买该商品的用户还购买了 Begin

//data为从Server读取到的JSON数据,tagId为要放入数据的HTML标记的ID
function GetWByWid(wid,tagId){   
document.getElementById(tagId).style.display="";
document.getElementById(tagId).innerHTML="数据读取中。。。";
     $.getJSON(     
    "http://simigoods.360buy.com/GetWByWid.aspx?wid="+wid+"&jsoncallback=?",
	    function(json) {
		    BuildAlsoBuyGoods(json,tagId);		   
	    }			
    );
}
function BuildAlsoBuyGoods(json,tagId){
     if(json == undefined || json == "" || tagId == "" || tagId == undefined || json.length < 1 ) {     
        document.getElementById(tagId).innerHTML="<div style='height:30px;line-height:30px;'>暂时没有相关的商品！<div>";
        return;
     }
     var html = "";
     html+="<ul>";
     for(var i = 0;i < json.length; i++) {
        html+="<li>";
        html+="<dl>";
		html+="<dt><a href=\"http://www.360buy.com/union/union_default.asp?union_Id=196&Pagetype=4&directtype="+ json[i].Wid +"\" onclick=\"setLinkImgCount('"+json[i].Wid+"','"+json[i].Wid+"')\"><img src=\"http://img10.360buyimg.com/s4/"+json[i].ImageUrl+"\" alt=\""+ json[i].Wname +"\" width=\"100\" height=\"75\" /></a></dt>";
		html+="<dd>";
		html+="<div class=\"p_Name\"><a href=\"http://www.360buy.com/union/union_default.asp?union_Id=196&Pagetype=4&directtype="+ json[i].Wid +"\" onclick=\"setLinkCount('"+json[i].Wid+"','"+json[i].Wid+"')\">"+ json[i].Wname +"</a></div>";
		html+="<div class=\"p_Price\"><em><img src=\""+ json[i].PriceImg +"\" /></em><span>￥"+json[i].WMaprice+"</span></div>";
		html+="<div class=\"p_Opp\"><a href=\"#none\" onclick=\"AddProduct('"+json[i].Wid+"',this);mark('"+json[i].Wid+"', 2);\"><img src=\"http://www.360buy.com/purchase/skin/images/minicart/addcart.gif\" width=\"94\" height=\"24\" /></a></div>";
		html+="</dd>";
		html+="</dl>";
		html+="</li>";
     }  
     html+="</ul>";
     
    document.getElementById(tagId).innerHTML=html;
}

//购买该商品的用户还购买了 end



//给我的京东提供开始
function GetWByPin(pin,tag)
{
   $.getJSON(
	    "http://simigoods.360buy.com/GetWByPin.aspx?pin="+pin+"&jsoncallback=?",
	    function(json) {
		    GetWByPinHTML(json,tag);
	    }			
    );
}
function GetWByPinHTML(json,tag)
{
    var html="";
    if(json!=undefined&&json!=""&&json.length>0)
    {
        html+="<ul>";
        for(var i=0;i<json.length;i++)
        {
            html+="<li>";
            html+="<dl>";
            html+="<dt><a href='http://www.360buy.com/product/"+json[i].Wid+".html'><img onerror='ERRORimg(this)' src='http://img10.360buyimg.com/s3/"+json[i].ImageUrl+"' alt='"+json[i].Wname+"'></a></dt>";
            html+="<dd class='p_Name'><a href='http://www.360buy.com/product/"+json[i].Wid+".html'>"+json[i].Wname+"</a></dd>";
            html+="<dd class='p_Price'>京东价：<img src ='"+json[i].PriceImg+"'/></dd>";
            html+="</dl>";
            html+="</li>";
        }
        html+="</ul>";
    }
    document.getElementById(tag).innerHTML=html;
}
//给我的京东提供结束

//还浏览了
function SimiGoods(wid,tag)
{
 $.getJSON(
	    "http://simigoods.360buy.com/desgoods.aspx?id="+wid+"&jsoncallback=?",
	    function(json) {
		    SimiGoodsHtml(json,tag);
	    }			
    );
}
function SimiGoodsHtml(json,tag)
{
    var html="";
    if(json!=undefined&&json!="")
    {
        if(json.length>0)
        {
            html+="<div id='similarSale' class='sbox_1 Product_List_S3'>";
            html+="<h2>浏览了该商品的用户还浏览了</h2>";
            html+="<ul>";
            for(var i=0;i<json.length;i++)
            {
               html+="<li><dl>";
               html+="<dt><a href='http://www.360buy.com/union/union_default.aspx?union_Id=173&website_id=110011&eu_id=dddssede&Pagetype=4&directtype=" +json[i].Wid+ "&union_mon=100' target='_blank'><img src='http://img10.360buyimg.com/S4/" + json[i].ImageUrl+ "' /></a></dt>";
               html+="<dd class='p_Name'><a href='http://www.360buy.com/union/union_default.aspx?union_Id=173&website_id=110011&eu_id=dddssede&Pagetype=4&directtype=" + json[i].Wid + "&union_mon=100' target='_blank'>" + json[i].Wname + "<font color='red'>" + json[i].WareTitle + "</font></a></dd>";
               html+="<dd class='p_Price'>京东价：<img src ='"+json[i].PriceImg+"'/></dd>";
               html+="</dl></li>";
            }
            html+="</ul></div>";
        }
    }
    document.getElementById(tag).innerHTML=html;
}
//还浏览了结束

//推荐配件数据
function GetFitByWid(wid, showContainer){
    document.getElementById(showContainer).innerHTML="数据读取中。。。";
    $.getJSON(
	    "http://simigoods.360buy.com/GetFitByWid.aspx?wid="+ wid +"&jsoncallback=?",
	    function(json) {
	        //alert(json);
		    GetFitByWidHtml(json,showContainer);
	    }
    );
}

//推荐配件html
function GetFitByWidHtml(data,container){
    var html = "";
    if(data!=undefined&&data!=""&&data.length>0&&biForWebLock_Fit)
    {
        html += "<ul id=\"reco_part\">";
        for(var i=0;i<data.length;i++)
        {
            html += "<li>";
            html += "<div><a href=\""+ data[i].LinkUrl +"\"><img src=\""+ data[i].ImageUrl +"\" alt=\""+ data[i].FittingName +"\" width=\"100\" height=\"75\" /></a></div>";
			html += "<div class=\"p_Name\"><a href=\""+ data[i].LinkUrl +"\">"+ data[i].FittingName +"</a></div>";
			html += "<div class=\"p_Price\"><img src=\""+ data[i].PriceImg +"\" /></div>";
			html += "<div class=\"p_Opp\"><a href=\"#none\" onclick=\"AddProduct('"+data[i].FittingWareId+"',this);mark('"+data[i].FittingWareId+"', 2);\"><img src=\"http://www.360buy.com/purchase/skin/images/minicart/addcart.gif\" width=\"94\" height=\"24\" /></a></div>";
			html += "</li>";
        }
        html += "</ul>";
        document.getElementById(container).innerHTML=html;
    }
    else
    {
        //html += "<div style='height:30px;line-height:30px;'>暂时没有推荐的配件！<div>";
        var removeElement = document.getElementById(container).previousSibling;
        var tempcount = 0;
	    while(removeElement.innerHTML != "推荐配件")
	    {
		    removeElement = removeElement.previousSibling;
		    tempcount = tempcount+1;
			if(tempcount > 10)
			{
				break;
			}
	    }
	    removeElement.style.display = "none";
	    document.getElementById(container).style.display = "none";
    }
}