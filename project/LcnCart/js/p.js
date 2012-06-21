/*
Version Number:    V-20100317-L1
*/
/*gift*/
var GiftCardWid=null;
function getGift(wid){$.jdThickBox({type:"json",width:600,height:530,title:"选择贺卡样式",source:"http://www.360buy.com/giftAjax.aspx?getGift=get&wid="+wid+"&jsoncallback=?"},function(url,ele){$.getJSON(url,function(json){if(json.info!=""){ele.html(json.info);}});})}
function setGift(){
var array=document.getElementById("changeCard").getElementsByTagName("input");
var wid;
for(var i=0;i<array.length;i++){
if(array[i].type=='radio'&&array[i].checked){
wid=array[i].value;
break;}}
var to=document.getElementById("To").value;
var form=document.getElementById("From").value;
var msg=document.getElementById("Message").value;
to=to.replace(/<[\s\S]*?>/,"");
form=form.replace(/<[\s\S]*?>/,"");
msg=msg.replace(/<[\s\S]*?>/,"");
GiftCardWid=wid;
if(wid==""||wid==null){
alert("请选择贺卡样式！");
return false;}
if(to==""||to==null){
alert("请填写贺卡收件人！");
return false;}
if(msg==""||msg==null){
alert("请填写贺卡内容！");
return false;}
if(msg.length>80){
alert("贺卡内容长度不能超过80！目前已经输入"+msg.length);
return false;}
if(form==""||form==null){
alert("请填写贺卡发件人！");
return false;}
$.getJSON("http://www.360buy.com/giftAjax.aspx?getGift=set&wid="+wid+"&To="+to+"&From="+form+"&msg="+msg+"&jsoncallback=?",
function(json){
if(json.info!=""){
if(json.info=="true"){
if(CardUrl!=null)window.location.href=CardUrl;
else if(CardFun!=null)eval(CardFun);}
else
alert("保存信息失败！");}});}
var CardUrl=null;
var CardFun=null;
function Card(){
this.Wid=0;
this.Url='';
this.Fun='';
this.Show=function(){
CardUrl=this.Url;
CardFun=this.Fun;
getGift(this.Wid);}}
/*forminicart_fq*/
var isIe=(window.ActiveXObject)?true:false;
var display4=false;
function showTip100(proobj){
var TipDivW=$(proobj).width();
var TipDivH=$(proobj).height();
var TipDiv=$("<div id='c04tip' style='z-index:20000;position:absolute;width:"+eval(TipDivW+5)+"px;height:"+eval(TipDivH+5)+"px;'><div style='position:absolute;margin:5px 0 0 5px;width:"+TipDivW+"px;height:"+TipDivH+"px;background:#BCBEC0;z-index:20001;'></div></div>")
if(display4==false){
TipDiv.append($(proobj));
$(document.body).prepend(TipDiv);
$(proobj).show();
display4=true;}else{
$("#c04tip").show();}
$("#c04tip").css({top:parseInt(document.documentElement.scrollTop+(document.documentElement.clientHeight-$("#c04tip").height())/2 )+"px",left:(document.documentElement.clientWidth-$("#c04tip").width())/2+"px"})
$("#Tip_apply,#Tip_continue,.Tip_Close").click(function(){
$("#c04tip").fadeOut();});}
var fq_serverSite="http://jd2008.360buy.com/purchase/";
var fq_serverUrl="ajaxServer/ForMiniCart_fq.aspx";
var fq_btnPanel="fqPanel"
var fq_skuId="";
var fq_TipHtml="";
var isFqOpen=true;
var isYbOpen=true;
if(isFqOpen){
if(!isIe){
try{fq_init();}catch(e){document.addEventListener('DOMContentLoaded',fq_init,null);}}else{
fq_init();}}
function fq_init(){
fq_skuId=document.getElementById('pShowSkuId').innerHTML;
if(fq_skuId!="")fq_showFq(fq_skuId);}
if(isYbOpen){
if(!isIe){
try{yb_init();}catch(e){document.addEventListener('DOMContentLoaded',yb_init,null);}}else{
yb_init();}}
function yb_init(){
fq_skuId=document.getElementById('pShowSkuId').innerHTML;
if(fq_skuId!="")yb_showYb(fq_skuId);}
function fq_showFq(skuId){
var js=document.createElement('script');
js.type='text/javascript';
js.src=fq_serverSite+fq_serverUrl+'?roid='+Math.random()+'&action=getFqInfo&id='+skuId;
document.getElementsByTagName('head')[0].appendChild(js);}
function yb_showYb(skuId){
var js=document.createElement('script');
js.type='text/javascript';
js.src=fq_serverSite+fq_serverUrl+'?roid='+Math.random()+'&action=getYBInfo&id='+skuId;
document.getElementsByTagName('head')[0].appendChild(js);}
function fq_showFq_html(obj){
if(obj!=null){
if(obj.json.length==0){
return;}else{
if(obj.json.length==0)return;
if(obj.json[0].error!=null){
return;}
document.getElementById(fq_btnPanel).innerHTML="<a href='#none' onclick=\"showTip100('#Fqfk_Tip');\"><img src='"+fq_serverSite+"skin/images/fqfk.gif' /></a>";
var t=document.getElementById('Fqfk_Tip');
t.style.width="500px";
var str="";
str+="<div class='Tip_Title'><em><img src='"+fq_serverSite+"skin/images/tip_close.jpg' class='Tip_Close'/></em>分期付款</div>";
str+="<div class='Tip_Content'><div style='text-align:left;'>本商品支持以下银行信用卡分期付款：</div>";
str+="<div>";
str+="<table width='100%' cellpadding='0' cellspacing='1' bgcolor='#C0C0C0'>";
str+="<tr style='background:#EBF4FB'><th>银行</th><th>3期</th><th>6期</th><th>12期</th><th>24期</th></tr>";
for(var i=0;i<obj.json.length;i++){
str+="<tr style='background:#fff'><td><img src='"+fq_serverSite+"skin/images/ins_bank/fqfk_bank_"+obj.json[i].Id+".jpg' border='0' /></td>";
str+="<td>"+((obj.json[i].p3!="-")?"<strong>"+obj.json[i].p3+"元</strong>×3期":"-")+"</td>";
str+="<td>"+((obj.json[i].p6!="-")?"<strong>"+obj.json[i].p6+"元</strong>×6期":"-")+"</td>";
str+="<td>"+((obj.json[i].p12!="-")?"<strong>"+obj.json[i].p12+"元</strong>×12期":"-")+"</td>";
str+="<td>"+((obj.json[i].p24!="-")?"<strong>"+obj.json[i].p24+"元</strong>×24期":"-")+"</td></tr>";}
str+='</table>';
str+='</div>';
str+="<div style='text-align:left;padding:7px 0 0 3px'>招商银行信用卡在线分期，无需人工审核，可以更快速、更放心的分期支付方式。</div>";
str+="</div>";
str+="<div style='padding:9px;padding-bottom:13px'><img src='"+fq_serverSite+"skin/images/fqflow.gif' /></div>";
str+="<div class='Tip_Submit'><a  style='border:none' href='"+fq_serverSite+"ShoppingCart_fqInit.aspx?skuId="+fq_skuId+"&skuCount=1' id='Tip_apply'><img src='"+fq_serverSite+"skin/images/fqstart.gif' /></a><a class='link_1' style='margin-right:210px;border:none;color:#000' href='http://www.360buy.com/help/dividedpay.aspx' target='_blank'>查看分期付款帮助</a></div>";
t.innerHTML=str;}}}
var buyBtnLink;
function fq_showYb_html(obj){
var sDiv=document.getElementById('divService');
var strHtml="";
if(sDiv!=null){
strHtml+="<div class='sbox_1'>";
strHtml+="<h2><em><a href='#top' style='display:none'><img src='http://www.360buy.com/images/totop.gif' alt='回到顶部' width='9' height='9'/></a></em>推荐服务</h2>";
strHtml+="<div style='padding-left:15px;'><b>京东贺卡服务</b> - 好礼附贺卡，心意尽传达！</div>";
strHtml+="<div class='otherService' style='padding-left:20px;margin-bottom:11px;'>·精美贺卡（可自行填写贺卡内容）&nbsp;&nbsp;<a href='#none' onclick=\"Card_buy();\"><img src='http://jd2008.360buy.com/purchase/skin/images/buy020.gif'/></a></div>";
if(obj!=null&&obj.json.length>0&&obj.json[0].error==null){
var strYb="";
for(var i=0;i<obj.json.length;i++){
if(obj.json[i].Type!="0")continue;
strYb+="<div class='otherService' style='padding-left:20px'>·<a target='_blank' class='link_1' href='http://www.360buy.com/help/"+obj.json[i].HName+"'>"+obj.json[i].Name+"</a>";
strYb+="<font color='red' style='margin-right:12px'>"+obj.json[i].Message+"</font><strong style='color:red'>￥"+obj.json[i].Price+"</strong>&nbsp;&nbsp;";
strYb+="<a target='_blank' href='http://www.360buy.com/help/"+obj.json[i].HName+"' class='link_1'>[详细说明]</a>";
strYb+="&nbsp;&nbsp;<a href='"+fq_serverSite+"InitCart.aspx?pid="+fq_skuId+"&pcount=1&ptype=1&ybId="+obj.json[i].Id+"' class='link_1'><img alt='点击加入购物车' src=\"" + fq_serverSite + "skin/images/buy020.gif\" style='display:inline;' /></a></div>";}
if(strYb!=""){
strHtml+="<div style='padding-left:15px;'><b>购买延保服务</b> - 保修时间更长、保修范围更广、多项意外保障，使用更安心！</div>";
strHtml+=strYb;}
var strQx="";
for(var i=0;i<obj.json.length;i++){
if(obj.json[i].Type!="1")continue;
strQx+="<div class='otherService' style='padding-left:20px'>·<a href='http://www.360buy.com/product/"+obj.json[i].Id+".html' target='_blank'  class='link_1'>"+obj.json[i].Name+"</a><font color='red' style='margin-right:12px'>"+obj.json[i].Message+"</font><strong style='color:red'>￥"+obj.json[i].Price+"</strong>&nbsp;&nbsp;";
strQx+="<a href='"+fq_serverSite+"InitCart.aspx?pid="+obj.json[i].Id+"&pcount=1&ptype=1' class='link_1'><img alt='点击加入购物车' src=\"" + fq_serverSite + "skin/images/buy020.gif\" style='display:inline;' /></a>";
strQx+="&nbsp;&nbsp;<a href='http://www.360buy.com/help/special/index.aspx' target='_blank' class='link_1'>[服务帮助]</a>";
strQx+="</div>";}
if(strQx!=""){
if(strYb!=""){
strHtml+="<div style='border-top:#eee 1px solid;padding-top:10px;margin-top:4px;'></div>";}
strHtml+="<div style='padding-left:15px;'><b>清洗服务</b> - 清洗家电不再愁，生活更舒心</div>";
strHtml+=strQx;}
strDiy="";
for(var i=0;i<obj.json.length;i++){
if(obj.json[i].Type!="2")continue;
strDiy+="<div class='otherService' style='padding-left:20px'>·<a href='http://www.360buy.com/product/"+obj.json[i].Id+".html' target='_blank'  class='link_1'>"+obj.json[i].Name+"</a><font color='red' style='margin-right:12px'>"+obj.json[i].Message+"</font><strong style='color:red'>￥"+obj.json[i].Price+"</strong>&nbsp;&nbsp;";
strDiy+="<a href='"+fq_serverSite+"InitCart.aspx?pid="+obj.json[i].Id+"&pcount=1&ptype=1' class='link_1'><img alt='点击加入购物车' src=\"" + fq_serverSite + "skin/images/buy020.gif\" style='display:inline;' /></a>";
strDiy+="&nbsp;&nbsp;<a href='http://www.360buy.com/help/special/index.aspx' target='_blank' class='link_1'>[服务帮助]</a>";
strDiy+="</div>";}
if(strDiy!=""){
if(strYb!=""||strQx!=""){
strHtml+="<div style='border-top:#eee 1px solid;padding-top:10px;margin-top:4px;'></div>";}
strHtml+="<div style='padding-left:15px;'><b>上门DIY服务</b> - 京东上门帮您DIY，装机更轻松！</div>";
strHtml+=strDiy;}}
strHtml+="</div>";
sDiv.innerHTML=strHtml;}}
function yb_sel(obj){
var chks=document.getElementsByName('ybChk');
for(var i=0;i<chks.length;i++){
if(obj!=chks[i]){chks[i].checked=false;}}
var cartLink=document.getElementById('gouwuche').parentNode;
if(obj.checked){cartLink.href=buyBtnLink+"&ybId="+obj.value;}
else{cartLink.href=buyBtnLink;}}
function Card_buy(){
var card=new Card();
card.Fun="Card_buy_finish('"+fq_skuId+"');";
card.Url=null;
card.Show();}
function Card_buy_finish(mainSkuId){
this.location='http://jd2008.360buy.com/purchase/InitCart.aspx?pid='+mainSkuId+'&pcount=1&ptype=1&addId='+GiftCardWid;}
/*comment*/
var clubServiceUrl="http://club.360buy.com/clubservice.aspx?callback=?";
refreshComments("Product",0);
refreshComments("Club",0);
function refreshComments(referenceType,parameter){
var referenceId=$.query.get("id");
if(referenceId==""){
referenceId=$.query.get("wid");}
if(referenceId==""){
var result=location.href.match(/(\d+)(.html)/);
if(result!=null){
referenceId=result[1];}}
if(referenceId!=""){
var url="";
if(referenceType=="Product"){
url="http://club.360buy.com/clubservice.aspx?callback=getCommentSummaryWithComments&method=GetCommentSummaryWithComments&referenceId={0}&referenceType={1}&score={2}".format(referenceId,referenceType,parameter);}
else if(referenceType=="Club"||referenceType=="User"||referenceType=="Question"||referenceType=="Order"||referenceType=="Friend"){
url="http://club.360buy.com/clubservice.aspx?callback=getCommentSummaryWithComments&method=GetCommentSummaryWithComments&referenceId={0}&referenceType={1}".format(referenceId,referenceType,parameter);}
$.getJSONP(
url,
getCommentSummaryWithComments);}}
$("#EFF_PINFOs2_Option_0, #EFF_PINFOs2_Option_1, #EFF_PINFOs2_Option_2, #EFF_PINFOs2_Option_3").livequery("click",function(){
refreshComments("Product",$(this).attr("name"));});
$("#EFF_PINFOs3_Option_0, #EFF_PINFOs3_Option_1, #EFF_PINFOs3_Option_2, #EFF_PINFOs3_Option_3, #EFF_PINFOs3_Option_4").livequery("click",function(){
var referenceType="Club";
if($(this).attr("name")==1){
referenceType="User";}
else if($(this).attr("name")==2){
referenceType="Question";}
else if($(this).attr("name")==3){
referenceType="Friend";}
else if($(this).attr("name")==4){
referenceType="Order";}
refreshComments(referenceType,0);});
$(":input[name=agree][enabled!=true], :input[name=oppose][enabled!=true]").livequery("click",function(){
var current=$(this);
$.login({
complete:
function(result){
if(result.IsAuthenticated){
var commentId=$(current).parent().attr("id");
var isUseful=$(current).attr("name")=="agree";
$.getJSON(
"http://club.360buy.com/clubservice.aspx?callback=?",{
method:"VoteForComment",
commentId:commentId,
isUseful:isUseful},
function(result){
$(current).attr("enabled","true");
if(result.Result){
var count=parseInt($(current).attr("title"))+1;
$(current).attr("title",count);
if(isUseful){
$(current).val("有用({0})".format(count));}
else{
$(current).val("没用({0})".format(count));}}});}}}); mark(location.href.match(/(\d+).html/)[1],5);});
$("#saveComment, #topComment, a[id^=comment], a[id^=userComment]").livequery(
"click",
function(){
$.login({
returnUrl:$(this).attr("name"),
complete:
function(result){
if(result.IsAuthenticated){
location.href=this.returnUrl;}}});});
function getCommentSummaryWithComments(result){
if(result.GetCommentSummary!=null&&result.GetCommentSummaryWithComments!=null){
$("#Product_Intro_Right span[id^=pf]").html(result.GetCommentSummary.process(result));
$("#EFF_PINFOs2_Option_0 em a").text(result.CommentSummary.CommentCount);
$("#EFF_PINFOs2_Option_1 em a").text(result.CommentSummary.GoodCount);
$("#EFF_PINFOs2_Option_2 em a").text(result.CommentSummary.GeneralCount);
$("#EFF_PINFOs2_Option_3 em a").text(result.CommentSummary.PoorCount);
if(result.Score==0){
$("#EFF_PINFOs2_Con_0").html(result.GetCommentSummaryWithComments.process(result));}
else if(result.Score>=4){
$("#EFF_PINFOs2_Con_1").html(result.GetCommentSummaryWithComments.process(result));}
else if(result.Score>=2&&result.Score<=3){
$("#EFF_PINFOs2_Con_2").html(result.GetCommentSummaryWithComments.process(result));}
else if(result.Score==1){
$("#EFF_PINFOs2_Con_3").html(result.GetCommentSummaryWithComments.process(result));}}
else if(result.GetCommentSummaryWithUserComments!=null){
if(result.ReferenceType==0){
$("#EFF_PINFOs3_Con_0").html(result.GetCommentSummaryWithUserComments.process(result));}
else if(result.ReferenceType==1){
$("#EFF_PINFOs3_Con_1").html(result.GetCommentSummaryWithUserComments.process(result));}
else if(result.ReferenceType==2){
$("#EFF_PINFOs3_Con_2").html(result.GetCommentSummaryWithUserComments.process(result));}
else if(result.ReferenceType==3){
$("#EFF_PINFOs3_Con_3").html(result.GetCommentSummaryWithUserComments.process(result));}
else if(result.ReferenceType==4){
$("#EFF_PINFOs3_Con_4").html(result.GetCommentSummaryWithUserComments.process(result));}}}
/*consultation*/
var consultationServiceUrl="http://club.360buy.com/consultationservice.aspx?callback=?";
var referServiceUrl="http://search.360buy.com/sayword?callback=?";
$("#ReferList").before("<ul class='column_wxts'><li class='column_wxts_ss'><a name='rs'></a><strong>咨询前请先搜索，方便又快捷：</strong><input type='text' class='input1' id='txbReferSearch' this.style.color='#444444'; value='请输入咨询关键词' style='color: rgb(68, 68, 68);' /><input type='button' class='btn1' id='btnReferSearch' value='' /></li><li class='column_wxts_ts'><div><strong>温馨提示:</strong>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复仅对提问者3天内有效，其他网友仅供参考！若由此给您带来不便请多多谅解，谢谢！</div></li></ul><div class='refer_info' id='column_wxts_ssjg' style='display:none'></div>");
$.fn.pagination.options={
items_per_page:8,
num_display_entries:5,
current_page:0,
num_edge_entries:0,
link_to:"#rs",
prev_text:"上一页",
next_text:"下一页",
ellipse_text:"...",
prev_show_always:false,
next_show_always:false,
callback:pageSelected};
function pageSelected(page_id,jq){
$.fn.pagination.options.current_page=page_id;
refreshReferList();}
function refreshReferList(){
var productId=parseInt($.query.get("id"));
if(isNaN(productId)||productId==0){
var result=location.href.match(/(\d+)(.html)/);
if(result!=null){
productId=parseInt(result[1]);}}
if(productId>0){
$.getJSON(
referServiceUrl,{
wid:productId,
keyword:encodeURI($("#txbReferSearch").val()),
page:$.fn.pagination.options.current_page+1,
ps:$.fn.pagination.options.items_per_page},
function(result){
$(".refer, #ReferPagenation").wrapAll("<div id='tempRefer'></div>");
$("#tempRefer").empty().remove();
var list=result[0].list;
var count=result[0].total>=40?40:result[0].total;
$("#column_wxts_ssjg").css("display","block").html("共搜索到<em>"+count+"</em>条相关咨询<span id='noneRefer' style='display:none;'>，试试更简短的关键词或更换关键词</span>&nbsp;&nbsp;&nbsp;&nbsp;<a class='link_1' href='#none' id='backConsultations'>返回</a><span style='color:#D75509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;声明：以下回复仅对提问者3天内有效，其他网友仅供参考！</span>");
if(list.length==0){
$("#noneRefer").show();}
else{
for(var element in list){
var d1=list[element].sindate.substring(0,list[element].sindate.lastIndexOf(":"));
var d2=list[element].sindate2.substring(0,list[element].sindate2.lastIndexOf(":"));
var s2=list[element].sword2?list[element].sword2:"";
$("#ReferList .refer_info").before("<div class='refer'><div class='r_info'>网友："+list[element].nickname+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+d1+"</div><dl class='ask'><dt>资讯内容：</dt><dd>"+list[element].sword+"</dd></dl><dl class='answer'><dt>京东回复：</dt><dd>"+s2+"</dd></dl><div class='r_info' id='"+list[element].sid+"'>您对我们的回复：<a class='link_1' href='#none' name='2'>满意</a>(<span>"+list[element].zantong+"</span>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='link_1' href='#none' name='2'>不满意</a>(<span>"+list[element].fd+"</span>)</div></div>");}
$("#ReferList .refer:odd").addClass("refer_bg");
$("#ReferList .refer_info").before("<div id='ReferPagenation' class='Pagination'></div>")
$("#ReferPagenation").pagination(count,$.fn.pagination.options);}});}}
refreshConsultations(1);
function refreshConsultations(pType){
var productId=parseInt($.query.get("id"));
if(isNaN(productId)||productId==0){
var productId=parseInt($.query.get("wid"));
if(isNaN(productId)||productId==0){
var result=location.href.match(/(\d+)(.html)/);
if(result!=null){
productId=parseInt(result[1]);}}}
if(productId>0){
$.getJSONP(
"http://club.360buy.com/consultationservice.aspx?callback=getConsultations&method=GetConsultations&productId="+productId+"&pType="+pType,
getConsultations);}}
$("#EFF_PINFOs4_Option_0, #EFF_PINFOs4_Option_2, #EFF_PINFOs4_Option_3, #EFF_PINFOs4_Option_4, #EFF_PINFOs4_Option_5").click(function(){
if($(this).attr("id")=="EFF_PINFOs4_Option_0"){
refreshConsultations(1);}
else if($(this).attr("id")=="EFF_PINFOs4_Option_2"){
refreshConsultations(2);}
else if($(this).attr("id")=="EFF_PINFOs4_Option_3"){
refreshConsultations(3)}
else if($(this).attr("id")=="EFF_PINFOs4_Option_4"){
refreshConsultations(4);}
else if($(this).attr("id")=="EFF_PINFOs4_Option_5"){
refreshConsultations(5);}});
$("#btnReferSearch").livequery(
"click",
function(){
$.fn.pagination.options.current_page=0;
refreshReferList();});
$("#txbReferSearch").livequery(
"keydown",
function(event){
if(event.keyCode==13){
$("#btnReferSearch").click();}});
$("#txbReferSearch").livequery(
"click",
function(){
this.value="";});
$("#backConsultations").livequery(
"click",
function(){
$("#column_wxts_ssjg").css("display","none");
$("#txbReferSearch").val("请输入咨询关键词");
refreshConsultations(1);});
$("#consultation").livequery(
"click",
function(){
$.login({
returnUrl:$(this).attr("name"),
complete:
function(result){
if(result.IsAuthenticated){
location.href=this.returnUrl;}}});});
$("#login").livequery(
"click",
function(){
$.login();});
$(".r_info a").livequery(
"click",
function(){
var current=$(this);
$.login({
complete:
function(result){
if(result.IsAuthenticated!=null&&result.IsAuthenticated){
var productId=parseInt($.query.get("id"));
if(isNaN(productId)||productId==0){
var result=location.href.match(/(\d+)(.html)/);
if(result!=null){
productId=parseInt(result[1]);}}
var consultationId=$(current).parent().attr("id");
var score=parseInt($(current).attr("name"));
if(productId>0){
$.getJSON(
consultationServiceUrl,{
method:"VoteForConsultation",
productId:productId,
consultationId:consultationId,
score:score},
function(result){
if(result.Result){
$(current).text("已投票");
$(current).next("span").text(parseInt($(current).next("span").text())+1);}
else{
$(current).text("已投票");}});}}}}); mark(location.href.match(/(\d+).html/)[1],5);});
function getConsultations(result){
if(result.GetConsultations!=null){
switch(result.SearchParameter.PType){
case 0:
$("#ReferList").html(result.GetConsultations.process(result));
refreshUsers("#ReferList em[id=level]");
break;
case 2:
$("#ReferList2").html(result.GetConsultations.process(result));
refreshUsers("#ReferList2 em[id=level]");
break;
case 3:
$("#ReferList3").html(result.GetConsultations.process(result));
refreshUsers("#ReferList3 em[id=level]");
break;
case 4:
$("#ReferList4").html(result.GetConsultations.process(result));
refreshUsers("#ReferList4 em[id=level]");
break;
case 5:
$("#ReferList5").html(result.GetConsultations.process(result));
refreshUsers("#ReferList5 em[id=level]");
break;
default:
$("#ReferList").html(result.GetConsultations.process(result));
refreshUsers("#ReferList em[id=level]");
break;}}}
function getLevelColor(level){
var result="#999999";
if(level==62){
result="#088000";}
else if(level==63||level==88){
result="#ff0000";}
return result;}
function getUser(result){
if(result.User!=null){
$("em[name={0}]".format(result.User.Unicknme)).html("<em style=\"color:{0};\">{1}</em>".format(getLevelColor(result.User.upic),result.User.Uclass));}}
function refreshUsers(divContent){
$(divContent).each(
function(){
$.ajax({
url:"http://passport.360buy.com/userservice.aspx",
dataType:"jsonp",
jsonp:"getUser",
data:{
callback:"getUser",
method:"GetUser",
userId:$(this).attr("name")},
cache:true});});}
/*jqueryzoom&&jcarousel*/
(function($){
$.fn.jqueryzoom=function(options){
var settings={
xzoom:200,
yzoom:200,
offset:10,
position:"right",
lens:1,
preload:1};
if(options){
$.extend(settings,options);}
var noalt='';
$(this).hover(function(){
var imageLeft=$(this).offset().left;
var imageTop=$(this).offset().top;
var imageWidth=$(this).children('img').get(0).offsetWidth;
var imageHeight=$(this).children('img').get(0).offsetHeight;
noalt=$(this).children("img").attr("alt");
var bigimage=$(this).children("img").attr("jqimg");
$(this).children("img").attr("alt",'');
if($("div.zoomdiv").get().length==0){
$(this).after("<div class='zoomdiv'><img class='bigimg' src='"+bigimage+"'/></div>");
$(this).append("<div class='jqZoomPup'>&nbsp;</div>");}
if(settings.position=="right"){
if(imageLeft+imageWidth+settings.offset+settings.xzoom>screen.width){
leftpos=imageLeft-settings.offset-settings.xzoom;}else{
leftpos=imageLeft+imageWidth+settings.offset;}}else{
leftpos=imageLeft-settings.xzoom-settings.offset;
if(leftpos<0){
leftpos=imageLeft+imageWidth+settings.offset;}}
$("div.zoomdiv").css({top:imageTop,left:leftpos});
$("div.zoomdiv").width(settings.xzoom);
$("div.zoomdiv").height(settings.yzoom);
$("div.zoomdiv").show();
if(!settings.lens){
$(this).css('cursor','crosshair');}
$(document.body).mousemove(function(e){
mouse=new MouseEvent(e);
var bigwidth=$(".bigimg").get(0).offsetWidth;
var bigheight=$(".bigimg").get(0).offsetHeight;
var scaley='x';
var scalex='y';
if(isNaN(scalex)|isNaN(scaley)){
var scalex=(bigwidth/imageWidth);
var scaley=(bigheight/imageHeight);
$("div.jqZoomPup").width((settings.xzoom)/(scalex*1));
$("div.jqZoomPup").height((settings.yzoom)/(scaley*1));
if(settings.lens){
$("div.jqZoomPup").css('visibility','visible');}}
xpos=mouse.x-$("div.jqZoomPup").width()/2-imageLeft;
ypos=mouse.y-$("div.jqZoomPup").height()/2-imageTop;
if(settings.lens){
xpos=(mouse.x-$("div.jqZoomPup").width()/2 < imageLeft ) ? 0 : (mouse.x + $("div.jqZoomPup").width()/2>imageWidth+imageLeft)?(imageWidth-$("div.jqZoomPup").width()-2):xpos;
ypos=(mouse.y-$("div.jqZoomPup").height()/2 < imageTop ) ? 0 : (mouse.y + $("div.jqZoomPup").height()/2>imageHeight+imageTop)?(imageHeight-$("div.jqZoomPup").height()-2):ypos;}
if(settings.lens){
$("div.jqZoomPup").css({top:ypos,left:xpos});}
scrolly=ypos;
$("div.zoomdiv").get(0).scrollTop=scrolly*scaley;
scrollx=xpos;
$("div.zoomdiv").get(0).scrollLeft=(scrollx)*scalex;});},function(){
$(this).children("img").attr("alt",noalt);
$(document.body).unbind("mousemove");
if(settings.lens){
$("div.jqZoomPup").remove();}
$("div.zoomdiv").remove();});
count=0;
if(settings.preload){
$('body').append("<div style='display:none;' class='jqPreload"+count+"'>360buy</div>");
$(this).each(function(){
var imagetopreload=$(this).children("img").attr("jqimg");
var content=jQuery('div.jqPreload'+count+'').html();
jQuery('div.jqPreload'+count+'').html(content+'<img src=\"'+imagetopreload+'\">');});}}})(jQuery);
function MouseEvent(e){
this.x=e.pageX;
this.y=e.pageY;}
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(9($){$.1v.C=9(o){z 4.1b(9(){3p r(4,o)})};8 q={Z:F,25:1,21:1,u:7,1c:3,15:7,1K:\'2X\',2c:\'2Q\',1q:0,B:7,1j:7,1G:7,2F:7,2B:7,2z:7,2x:7,2v:7,2s:7,2p:7,1S:\'<P></P>\',1Q:\'<P></P>\',2m:\'2l\',2k:\'2l\',1O:7,1L:7};$.C=9(e,o){4.5=$.16({},q,o||{});4.Q=F;4.D=7;4.H=7;4.t=7;4.U=7;4.R=7;4.N=!4.5.Z?\'1H\':\'26\';4.E=!4.5.Z?\'24\':\'23\';8 a=\'\',1e=e.K.1e(\' \');1r(8 i=0;i<1e.I;i++){6(1e[i].2y(\'C-2w\')!=-1){$(e).1E(1e[i]);8 a=1e[i];1p}}6(e.2t==\'3o\'||e.2t==\'3n\'){4.t=$(e);4.D=4.t.19();6(4.D.1o(\'C-H\')){6(!4.D.19().1o(\'C-D\'))4.D=4.D.B(\'<P></P>\');4.D=4.D.19()}10 6(!4.D.1o(\'C-D\'))4.D=4.t.B(\'<P></P>\').19()}10{4.D=$(e);4.t=$(e).3h(\'>2o,>2n,P>2o,P>2n\')}6(a!=\'\'&&4.D.19()[0].K.2y(\'C-2w\')==-1)4.D.B(\'<P 3g=" \'+a+\'"></P>\');4.H=4.t.19();6(!4.H.I||!4.H.1o(\'C-H\'))4.H=4.t.B(\'<P></P>\').19();4.R=$(\'.C-11\',4.D);6(4.R.u()==0&&4.5.1Q!=7)4.R=4.H.1z(4.5.1Q).11();4.R.V(4.K(\'C-11\'));4.U=$(\'.C-17\',4.D);6(4.U.u()==0&&4.5.1S!=7)4.U=4.H.1z(4.5.1S).11();4.U.V(4.K(\'C-17\'));4.H.V(4.K(\'C-H\'));4.t.V(4.K(\'C-t\'));4.D.V(4.K(\'C-D\'));8 b=4.5.15!=7?1k.1P(4.1m()/4.5.15):7;8 c=4.t.32(\'1F\');8 d=4;6(c.u()>0){8 f=0,i=4.5.21;c.1b(9(){d.1I(4,i++);f+=d.S(4,b)});4.t.y(4.N,f+\'T\');6(!o||o.u===J)4.5.u=c.u()}4.D.y(\'1y\',\'1A\');4.U.y(\'1y\',\'1A\');4.R.y(\'1y\',\'1A\');4.2G=9(){d.17()};4.2b=9(){d.11()};4.1U=9(){d.2q()};6(4.5.1j!=7)4.5.1j(4,\'2a\');6($.2A.28){4.1f(F,F);$(27).1u(\'2I\',9(){d.1t()})}10 4.1t()};8 r=$.C;r.1v=r.2H={C:\'0.2.3\'};r.1v.16=r.16=$.16;r.1v.16({1t:9(){4.A=7;4.G=7;4.X=7;4.13=7;4.14=F;4.1d=7;4.O=7;4.W=F;6(4.Q)z;4.t.y(4.E,4.1s(4.5.21)+\'T\');8 p=4.1s(4.5.25);4.X=4.13=7;4.1i(p,F);$(27).22(\'2E\',4.1U).1u(\'2E\',4.1U)},2D:9(){4.t.2C();4.t.y(4.E,\'3u\');4.t.y(4.N,\'3t\');6(4.5.1j!=7)4.5.1j(4,\'2D\');4.1t()},2q:9(){6(4.O!=7&&4.W)4.t.y(4.E,r.M(4.t.y(4.E))+4.O);4.O=7;4.W=F;6(4.5.1G!=7)4.5.1G(4);6(4.5.15!=7){8 a=4;8 b=1k.1P(4.1m()/4.5.15),N=0,E=0;$(\'1F\',4.t).1b(9(i){N+=a.S(4,b);6(i+1<a.A)E=N});4.t.y(4.N,N+\'T\');4.t.y(4.E,-E+\'T\')}4.1c(4.A,F)},3s:9(){4.Q=1h;4.1f()},3r:9(){4.Q=F;4.1f()},u:9(s){6(s!=J){4.5.u=s;6(!4.Q)4.1f()}z 4.5.u},3q:9(i,a){6(a==J||!a)a=i;6(4.5.u!==7&&a>4.5.u)a=4.5.u;1r(8 j=i;j<=a;j++){8 e=4.L(j);6(!e.I||e.1o(\'C-1a-1D\'))z F}z 1h},L:9(i){z $(\'.C-1a-\'+i,4.t)},2u:9(i,s){8 e=4.L(i),20=0,2u=0;6(e.I==0){8 c,e=4.1B(i),j=r.M(i);1n(c=4.L(--j)){6(j<=0||c.I){j<=0?4.t.2r(e):c.1X(e);1p}}}10 20=4.S(e);e.1E(4.K(\'C-1a-1D\'));1R s==\'3l\'?e.3k(s):e.2C().3j(s);8 a=4.5.15!=7?1k.1P(4.1m()/4.5.15):7;8 b=4.S(e,a)-20;6(i>0&&i<4.A)4.t.y(4.E,r.M(4.t.y(4.E))-b+\'T\');4.t.y(4.N,r.M(4.t.y(4.N))+b+\'T\');z e},1V:9(i){8 e=4.L(i);6(!e.I||(i>=4.A&&i<=4.G))z;8 d=4.S(e);6(i<4.A)4.t.y(4.E,r.M(4.t.y(4.E))+d+\'T\');e.1V();4.t.y(4.N,r.M(4.t.y(4.N))-d+\'T\')},17:9(){4.1C();6(4.O!=7&&!4.W)4.1T(F);10 4.1c(((4.5.B==\'1Z\'||4.5.B==\'G\')&&4.5.u!=7&&4.G==4.5.u)?1:4.A+4.5.1c)},11:9(){4.1C();6(4.O!=7&&4.W)4.1T(1h);10 4.1c(((4.5.B==\'1Z\'||4.5.B==\'A\')&&4.5.u!=7&&4.A==1)?4.5.u:4.A-4.5.1c)},1T:9(b){6(4.Q||4.14||!4.O)z;8 a=r.M(4.t.y(4.E));!b?a-=4.O:a+=4.O;4.W=!b;4.X=4.A;4.13=4.G;4.1i(a)},1c:9(i,a){6(4.Q||4.14)z;4.1i(4.1s(i),a)},1s:9(i){6(4.Q||4.14)z;6(4.5.B!=\'18\')i=i<1?1:(4.5.u&&i>4.5.u?4.5.u:i);8 a=4.A>i;8 b=r.M(4.t.y(4.E));8 f=4.5.B!=\'18\'&&4.A<=1?1:4.A;8 c=a?4.L(f):4.L(4.G);8 j=a?f:f-1;8 e=7,l=0,p=F,d=0;1n(a?--j>=i:++j<i){e=4.L(j);p=!e.I;6(e.I==0){e=4.1B(j).V(4.K(\'C-1a-1D\'));c[a?\'1z\':\'1X\'](e)}c=e;d=4.S(e);6(p)l+=d;6(4.A!=7&&(4.5.B==\'18\'||(j>=1&&(4.5.u==7||j<=4.5.u))))b=a?b+d:b-d}8 g=4.1m();8 h=[];8 k=0,j=i,v=0;8 c=4.L(i-1);1n(++k){e=4.L(j);p=!e.I;6(e.I==0){e=4.1B(j).V(4.K(\'C-1a-1D\'));c.I==0?4.t.2r(e):c[a?\'1z\':\'1X\'](e)}c=e;8 d=4.S(e);6(d==0){3f(\'3e: 3d 1H/26 3c 1r 3b. 3a 39 38 37 36 35. 34...\');z 0}6(4.5.B!=\'18\'&&4.5.u!==7&&j>4.5.u)h.33(e);10 6(p)l+=d;v+=d;6(v>=g)1p;j++}1r(8 x=0;x<h.I;x++)h[x].1V();6(l>0){4.t.y(4.N,4.S(4.t)+l+\'T\');6(a){b-=l;4.t.y(4.E,r.M(4.t.y(4.E))-l+\'T\')}}8 n=i+k-1;6(4.5.B!=\'18\'&&4.5.u&&n>4.5.u)n=4.5.u;6(j>n){k=0,j=n,v=0;1n(++k){8 e=4.L(j--);6(!e.I)1p;v+=4.S(e);6(v>=g)1p}}8 o=n-k+1;6(4.5.B!=\'18\'&&o<1)o=1;6(4.W&&a){b+=4.O;4.W=F}4.O=7;6(4.5.B!=\'18\'&&n==4.5.u&&(n-k+1)>=1){8 m=r.Y(4.L(n),!4.5.Z?\'1l\':\'1N\');6((v-m)>g)4.O=v-g-m}1n(i-->o)b+=4.S(4.L(i));4.X=4.A;4.13=4.G;4.A=o;4.G=n;z b},1i:9(p,a){6(4.Q||4.14)z;4.14=1h;8 b=4;8 c=9(){b.14=F;6(p==0)b.t.y(b.E,0);6(b.5.B==\'1Z\'||b.5.B==\'G\'||b.5.u==7||b.G<b.5.u)b.2j();b.1f();b.1M(\'2i\')};4.1M(\'31\');6(!4.5.1K||a==F){4.t.y(4.E,p+\'T\');c()}10{8 o=!4.5.Z?{\'24\':p}:{\'23\':p};4.t.1i(o,4.5.1K,4.5.2c,c)}},2j:9(s){6(s!=J)4.5.1q=s;6(4.5.1q==0)z 4.1C();6(4.1d!=7)z;8 a=4;4.1d=30(9(){a.17()},4.5.1q*2Z)},1C:9(){6(4.1d==7)z;2Y(4.1d);4.1d=7},1f:9(n,p){6(n==J||n==7){8 n=!4.Q&&4.5.u!==0&&((4.5.B&&4.5.B!=\'A\')||4.5.u==7||4.G<4.5.u);6(!4.Q&&(!4.5.B||4.5.B==\'A\')&&4.5.u!=7&&4.G>=4.5.u)n=4.O!=7&&!4.W}6(p==J||p==7){8 p=!4.Q&&4.5.u!==0&&((4.5.B&&4.5.B!=\'G\')||4.A>1);6(!4.Q&&(!4.5.B||4.5.B==\'G\')&&4.5.u!=7&&4.A==1)p=4.O!=7&&4.W}8 a=4;4.U[n?\'1u\':\'22\'](4.5.2m,4.2G)[n?\'1E\':\'V\'](4.K(\'C-17-1w\')).1J(\'1w\',n?F:1h);4.R[p?\'1u\':\'22\'](4.5.2k,4.2b)[p?\'1E\':\'V\'](4.K(\'C-11-1w\')).1J(\'1w\',p?F:1h);6(4.U.I>0&&(4.U[0].1g==J||4.U[0].1g!=n)&&4.5.1O!=7){4.U.1b(9(){a.5.1O(a,4,n)});4.U[0].1g=n}6(4.R.I>0&&(4.R[0].1g==J||4.R[0].1g!=p)&&4.5.1L!=7){4.R.1b(9(){a.5.1L(a,4,p)});4.R[0].1g=p}},1M:9(a){8 b=4.X==7?\'2a\':(4.X<4.A?\'17\':\'11\');4.12(\'2F\',a,b);6(4.X!==4.A){4.12(\'2B\',a,b,4.A);4.12(\'2z\',a,b,4.X)}6(4.13!==4.G){4.12(\'2x\',a,b,4.G);4.12(\'2v\',a,b,4.13)}4.12(\'2s\',a,b,4.A,4.G,4.X,4.13);4.12(\'2p\',a,b,4.X,4.13,4.A,4.G)},12:9(a,b,c,d,e,f,g){6(4.5[a]==J||(1R 4.5[a]!=\'2h\'&&b!=\'2i\'))z;8 h=1R 4.5[a]==\'2h\'?4.5[a][b]:4.5[a];6(!$.2W(h))z;8 j=4;6(d===J)h(j,c,b);10 6(e===J)4.L(d).1b(9(){h(j,4,d,c,b)});10{1r(8 i=d;i<=e;i++)6(i!==7&&!(i>=f&&i<=g))4.L(i).1b(9(){h(j,4,i,c,b)})}},1B:9(i){z 4.1I(\'<1F></1F>\',i)},1I:9(e,i){8 a=$(e).V(4.K(\'C-1a\')).V(4.K(\'C-1a-\'+i));a.1J(\'2V\',i);z a},K:9(c){z c+\' \'+c+(!4.5.Z?\'-2U\':\'-Z\')},S:9(e,d){8 a=e.2g!=J?e[0]:e;8 b=!4.5.Z?a.1x+r.Y(a,\'2f\')+r.Y(a,\'1l\'):a.2e+r.Y(a,\'2d\')+r.Y(a,\'1N\');6(d==J||b==d)z b;8 w=!4.5.Z?d-r.Y(a,\'2f\')-r.Y(a,\'1l\'):d-r.Y(a,\'2d\')-r.Y(a,\'1N\');$(a).y(4.N,w+\'T\');z 4.S(a)},1m:9(){z!4.5.Z?4.H[0].1x-r.M(4.H.y(\'2T\'))-r.M(4.H.y(\'2S\')):4.H[0].2e-r.M(4.H.y(\'2R\'))-r.M(4.H.y(\'3i\'))},2P:9(i,s){6(s==J)s=4.5.u;z 1k.2O((((i-1)/s)-1k.2N((i-1)/s))*s)+1}});r.16({3m:9(d){z $.16(q,d||{})},Y:9(e,p){6(!e)z 0;8 a=e.2g!=J?e[0]:e;6(p==\'1l\'&&$.2A.28){8 b={\'1y\':\'1A\',\'2M\':\'2L\',\'1H\':\'1q\'},1Y,1W;$.29(a,b,9(){1Y=a.1x});b[\'1l\']=0;$.29(a,b,9(){1W=a.1x});z 1W-1Y}z r.M($.y(a,p))},M:9(v){v=2K(v);z 2J(v)?0:v}})})(3v);',62,218,'||||this|options|if|null|var|function||||||||||||||||||||list|size||||css|return|first|wrap|jcarousel|container|lt|false|last|clip|length|undefined|className|get|intval|wh|tail|div|locked|buttonPrev|dimension|px|buttonNext|addClass|inTail|prevFirst|margin|vertical|else|prev|callback|prevLast|animating|visible|extend|next|circular|parent|item|each|scroll|timer|split|buttons|jcarouselstate|true|animate|initCallback|Math|marginRight|clipping|while|hasClass|break|auto|for|pos|setup|bind|fn|disabled|offsetWidth|display|before|block|create|stopAuto|placeholder|removeClass|li|reloadCallback|width|format|attr|animation|buttonPrevCallback|notify|marginBottom|buttonNextCallback|ceil|buttonPrevHTML|typeof|buttonNextHTML|scrollTail|funcResize|remove|oWidth2|after|oWidth|both|old|offset|unbind|top|left|start|height|window|safari|swap|init|funcPrev|easing|marginTop|offsetHeight|marginLeft|jquery|object|onAfterAnimation|startAuto|buttonPrevEvent|click|buttonNextEvent|ol|ul|itemVisibleOutCallback|reload|prepend|itemVisibleInCallback|nodeName|add|itemLastOutCallback|skin|itemLastInCallback|indexOf|itemFirstOutCallback|browser|itemFirstInCallback|empty|reset|resize|itemLoadCallback|funcNext|prototype|load|isNaN|parseInt|none|float|floor|round|index|swing|borderTopWidth|borderRightWidth|borderLeftWidth|horizontal|jcarouselindex|isFunction|normal|clearTimeout|1000|setTimeout|onBeforeAnimation|children|push|Aborting|loop|infinite|an|cause|will|This|items|set|No|jCarousel|alert|class|find|borderBottomWidth|append|html|string|defaults|OL|UL|new|has|unlock|lock|10px|0px|jQuery'.split('|'),0,{}))
function showKaixinDlg(para)
{
	var _top = (window.screen.height - 420)/2;
	var _left = (window.screen.width - 545)/2; 
	window.showModalDialog('http://www.kaixin001.com/rshare/share.php?rpara='+para+'&r='+Math.random(),'','dialogWidth=552px;dialogHeight=400px;scroll=no;center=1;titlebar:no;toolbar:no;menubar:no;location:no;directories:no');
}