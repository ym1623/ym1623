/*
Version Number:    V-20100127-L1
*/
(function($){
$.extend($.browser,{
client:function(){return{width:document.documentElement.clientWidth,height:document.documentElement.clientHeight,bodyWidth:document.body.clientWidth,bodyHeight:document.body.clientHeight};},
scroll:function(){return{width:document.documentElement.scrollWidth,height:document.documentElement.scrollHeight,bodyWidth:document.body.scrollWidth,bodyHeight:document.body.scrollHeight,left:document.documentElement.scrollLeft,top:document.documentElement.scrollTop};},
screen:function(){return{width:window.screen.width,height:window.screen.height};},
isIE6:$.browser.msie&&$.browser.version==6,
isMinW:function(val){return Math.min($.browser.client().bodyWidth,$.browser.client().width)<=val;},
isMinH:function(val){return $.browser.client().height<=val;}});
$.widthForIE6=function(option){
var s=$.extend({max:null,min:null,padding:0},option||{});
var init=function(){
var w=$(document.body);
if($.browser.client().width>=s.max+s.padding){w.width(s.max+"px");}
else if($.browser.client().width<=s.min+s.padding){w.width(s.min+"px");}
else{w.width("auto");}}
init();$(window).resize(init);}
$.fn.hoverForIE6=function(option){
var s=$.extend({
current:"hover"},option||{});
var obj=this;
$.each(this,function(){
$(this).bind("mouseover",function(){
$(this).addClass(s.current);}).bind("mouseleave",function(){
$(this).removeClass(s.current);})})}
$.fn.jdSonny=function(option,callback){
var s=$.extend({current:"curr",delay:100,timer:null,index:null},option||{});
var obj=this;
$.each(this,function(n){
$(this).bind("mouseover",function(){
if(s.timer!=null)clearTimeout(s.timer);
s.index=(s.index==null)?0:s.index;
s.timer=setTimeout(function(){obj.eq(s.index).removeClass(s.current);s.index=n;obj.eq(s.index).addClass(s.current);},s.delay);})})}
$.fn.jdTab=function(option,callback){
$.each(this,function(){
var s=$.extend({event:"mouseover",delay:100,current:"curr",dom:"ul > li > a".split(" > "),attr:"href",timer:null,index:null},option||{});
var child1=$(this).find(s.dom[1]),child2=$(this).find(s.dom[2]),content=[];
child2.each(function(){
content.push($($(this).attr(s.attr)));});
child2.each(function(n){
if(s.action!="click"){$(this).click(function(){return false;})}
$(this).bind(s.event,function(){
clearTimeout(s.timer);
s.index=(s.index==null)?0:s.index;
s.timer=setTimeout(function(){child1.eq(s.index).removeClass(s.current);content[s.index].hide();s.index=n;child1.eq(s.index).addClass(s.current);content[s.index].show();},s.delay);})})})}})(jQuery);
(function($) {
    $.extend({
        _jsonp: {
            scripts: {},
            charset: 'utf-8',
            counter: 1,
            head: document.getElementsByTagName("head")[0],
            name: function(callback) {
                var name = '_jsonp_' + (new Date).getTime() + '_' + this.counter;
                this.counter++;
                var cb = function(json) {
                    eval('delete ' + name);
                    callback(json);
                    $._jsonp.head.removeChild($._jsonp.scripts[name]);
                    delete $._jsonp.scripts[name];
                };
                eval(name + ' = cb');
                return name;
            },
            load: function(url, name) {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.charset = this.charset;
                script.src = url;
                this.head.appendChild(script);
                this.scripts[name] = script;
            }
        },

        getJSONP: function(url, callback) {
            var name = $._jsonp.name(callback);
            var url = url.replace(/{callback}/, name);
            $._jsonp.load(url, name);
            return this;
        }
    });
})(jQuery);


var initScrollY=0;
var proIDs=new Array();
function compare(){
if($("#compare").get(0)==null){
$("body").append("<div id='compare'><h6><a title='清空' class='close' onclick='clearCompare()'></a>商品比较</h6><div class='comPro'><ul id='comProlist'></ul><img src='http://www.360buy.com/images/compare_15.gif' id='compareImg' onclick='openCompare()'/></div></div>")
$("#compare").css({position:"absolute",top:"220px",right:"0px"});
isCoo();}
if($.browser.msie){
var defaultY=document.documentElement.scrollTop;
var perceH=0.3*(defaultY-initScrollY);
if(perceH>0){perceH=Math.ceil(perceH);}
else{perceH=Math.floor(perceH);}
$("#compare").get(0).style.top=parseInt($("#compare").get(0).style.top)+perceH+"px";
initScrollY=initScrollY+perceH;
setTimeout("compare()",50)}else{
window.onscroll=function(){
$("#compare").get(0).style.top=parseInt($("#compare").get(0).style.top)+"px";
$("#compare").get(0).style.position="fixed";}}}
function clearCompare(){
$("#comProlist").empty();
$("#compare").hide();
createCookie("compare","");
proIDs=new Array();}
function addToCompare(checkobj,checkid,checkProName){
$("#compare").show();
$(".comPro").show();
var proIDsTemp=proIDs.join(".");
if(proIDsTemp.indexOf(checkid)==-1){
if(proIDs.length<3){
proIDs.push(checkid);
$("#comProlist").append("<li id='check_"+checkid+"'><a title='删除' class='close' onclick='reduceCompare("+checkid+")'></a>"+checkProName+"</li>");
writeCompare(checkid,checkProName);}else{
alert("对不起，最多可以选择三种商品进行对比！");}}else{
alert("对不起，您已经选择此商品！");
return;}}
function reduceCompare(checkid){
$("#check_"+checkid).remove();
$.each(proIDs,function(i,n){
if(checkid==n){
proIDs.splice(i,1);}});
var coo=readCookie("compare");
var idindexstart=coo.indexOf(checkid);
var idindexend=coo.indexOf("|||",idindexstart)+3;
var delStr=coo.substring(idindexstart,idindexend);
var innerStr=coo.replace(delStr,"")
createCookie("compare",innerStr);
if(proIDs.length==0){$(".comPro").hide();}}
function openCompare(){
switch(proIDs.length){
case 1:
alert("对不起，最少选择两种商品进行对比！");
break;
case 2:
window.open("http://www.360buy.com/pcompare.aspx?s1="+proIDs[0]+"&s2="+proIDs[1]);
break;
case 3:
window.open("http://www.360buy.com/pcompare.aspx?s1="+proIDs[0]+"&s2="+proIDs[1]+"&s3="+proIDs[2]);
break;
default:
alert("请选择2-3件商品进行对比！");
return;}}
function writeCompare(checkid,checkProName){
var compareList=readCookie("compare");
if(compareList==null){compareList="";}
compareList+=checkid+"||"+escape(checkProName)+"|||";
createCookie("compare",compareList);}
function isCoo(){
var coo=readCookie("compare");
if(coo){
var cootemp=coo.split("|||");
var compareListTemp="";
for(var i=0;i<cootemp.length-1;i++){
compareListTemp+="<li id='check_"+cootemp[i].split("||")[0]+"'><a title='删除' class='close' onclick='reduceCompare("+cootemp[i].split("||")[0]+")'></a>"+unescape(cootemp[i].split("||")[1])+"</li>";
proIDs.push(cootemp[i].split("||")[0]);}
$("#comProlist").html(compareListTemp);
$("#compare").show();
$(".comPro").show();}}
function createCookie(name,value,days,Tdom){
var Tdom=(Tdom)?Tdom:"/";
if(days){
var date=new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires="; expires="+date.toGMTString();}else{
var expires="";}
document.cookie=name+"="+value+expires+"; path="+Tdom;}
function readCookie(name){
var nameEQ=name+"=";
var ca=document.cookie.split(';');
for(var i=0;i<ca.length;i++){
var c=ca[i];
while(c.charAt(0)==' '){c=c.substring(1,c.length);}
if(c.indexOf(nameEQ)==0){return c.substring(nameEQ.length,c.length);}}
return null;}
var timera=null;
var tag=1;
var Stag="stop";
var marqueeHeight;
var maxTop;
var minTop;
var marqueeObj;
var dpps;
var originalObj;
var cloneObj;
function marquee(Mtimes,mH,dP){
marqueeHeight=mH;
dpps=dP;
clearTimeout(timera);
Mtimes=Mtimes?Mtimes:2;
marqueeObj=document.getElementById("NewProduct").getElementsByTagName("ul");
maxTop=-marqueeHeight*Mtimes;
minTop=marqueeHeight*Mtimes;
if(marqueeObj.length==1){
originalObj=marqueeObj[0];
cloneObj=originalObj.cloneNode(true);
originalObj.parentNode.appendChild(cloneObj);
marqueeObj[0].style.top=0+"px";
marqueeObj[1].style.top=minTop+"px";}
if((tag==0&&marqueeObj[0].offsetTop==0)||marqueeObj[0].offsetTop/tag==-marqueeHeight){
tag++;
Stag="stop";
clearTimeout(timera);
timera=setTimeout("marquee("+Mtimes+","+mH+","+dP+")",5000);}else{
Stag="continue";
marqueeObj[0].style.top=marqueeObj[0].offsetTop-dpps+"px"
marqueeObj[1].style.top=marqueeObj[1].offsetTop-dpps+"px"
if(marqueeObj[0].offsetTop==maxTop){
marqueeObj[0].style.top=minTop+"px";
tag=-Mtimes;;}
if(marqueeObj[1].offsetTop==maxTop){
marqueeObj[1].style.top=minTop+"px";}
timera=setTimeout("marquee("+Mtimes+","+mH+","+dP+")",30)}}
function SwitchTab(IDprefix,order,TagAmount,status){
switch(status){
case "S1":
var TagObj=OOO(IDprefix+"Option","li");
var TagArr=new Array();
for(var i=0;i<TagObj.length;i++){
TagArr.push(TagObj[i].id.split("_Option_")[1]);}
for(var i=0;i<TagArr.length;i++){
OOO(IDprefix+"Option_"+TagArr[i]).className=(TagArr[i]==order)?"curr":"";
OOO(IDprefix+"Con_"+TagArr[i]).style.display=(TagArr[i]==order)?"":"none";}
break;
default:
for(var i=0;i<TagAmount;i++){
OOO(IDprefix+"Option_"+i).className=(i==order)?"curr":"";
OOO(IDprefix+"Con_"+i).className=(i==order)?"default":"disNone";}
return;}}
function showSort(obj){
$("#"+obj+" h3").click(function(){
this.className=(this.className=="open")?"":"open";
$("#EFF_ul_"+this.id.substr(7)).get(0).className=(this.className=="open")?"open":"";});}
function OOO(obj,ele){
if(obj&&!ele){return document.getElementById(obj);}
else if(obj&&ele){return document.getElementById(obj).getElementsByTagName(ele);}
else{return false;}}
var Dtimer=null;
var Dtimer2=null;
var Mdisplay=false;
var hideDiv;
var Container;
var button;
var jqShowObj;
var offset;
var height;
var width;
var btnHeight;
var btnWidth;

function initDMenu(obj,showobj,Dtimeout,Dspeed){
hideDiv=$("<div style='z-index:10000;'></div>");
Container=$("<div id=\"Container\"></div>");
hideDiv.append(Container);
button=$(obj);
jqShowObj=$(showobj);
offset=button.offset();
height=jqShowObj.height();
width=jqShowObj.width();
btnHeight=button.height();
btnWidth=button.width();
$(document.body).prepend(hideDiv);}


function showDMenu(){
if(Mdisplay==true){
return false;}else{
Mdisplay=true;
Container.css({margin:"0 auto",width:btnWidth+"px",height:btnHeight+"px"});
hideDiv.css({position:"absolute",top:offset.top+16+"px",left:button.offset().left-35+"px",height:height+"px",width:width+"px"}).show();
Container.css({border:"1px solid #666666"});
Container.animate({marginTop:10,height:height+4,width:width+4,opacity:'100'},100,function(){
jqShowObj.show();
Container.append(jqShowObj);
Container.css({border:"0px"});
jqShowObj.mouseover(function(){
clearTimeout(Dtimer);clearTimeout(Dtimer2);}).mouseout(function(){
hideDMenu();});});}}

function hideDMenu(){
  clearTimeout(Dtimer);
  clearTimeout(Dtimer2);
  Dtimer=setTimeout(function(){
    Container.css({border:"1px solid #666666"});
    $(document.body).prepend(jqShowObj);
    jqShowObj.hide();
    Container.empty();
    Container.animate({width:btnWidth,height:btnHeight,marginTop:'0',opacity:'0'},100,function(){
      Container.hide();
      hideDiv.hide();
      Mdisplay=false;});
   },100);
}

var display=false;
var display2=false;
var display3=false;
function showTip(proobj){
var TipDivW=$(proobj).width();
var TipDivH=$(proobj).height();
var TipDiv=$("<div id='c01tip' style='z-index:20000;position:absolute;width:"+eval(TipDivW+5)+"px;height:"+eval(TipDivH+5)+"px;'><div style='position:absolute;margin:5px 0 0 5px;width:"+TipDivW+"px;height:"+TipDivH+"px;background:#BCBEC0;z-index:20001;'></div></div>")
if(display==false){
TipDiv.append($(proobj));
$(document.body).prepend(TipDiv);
$(proobj).show();
display=true;}else{
$("#c01tip").show();}
$("#c01tip").css({top:parseInt(document.documentElement.scrollTop+(document.documentElement.clientHeight-$("#c01tip").height())/2 )+"px",left:(document.documentElement.clientWidth-$("#c01tip").width())/2+"px"})
$("#Tip_viewCart,#Tip_continue,.Tip_Close").click(function(){
$("#c01tip").fadeOut();});}
function showTip2(proobj){
var TipDivW=$(proobj).width();
var TipDivH=$(proobj).height();
var TipDiv=$("<div id='c02tip' style='z-index:20000;position:absolute;width:"+eval(TipDivW+5)+"px;height:"+eval(TipDivH+5)+"px;'><div style='position:absolute;margin:5px 0 0 5px;width:"+TipDivW+"px;height:"+TipDivH+"px;background:#BCBEC0;z-index:20001;'></div></div>")
if(display2==false){
TipDiv.append($(proobj));
$(document.body).prepend(TipDiv);
$(proobj).show();
display2=true;}else{
$("#c02tip").show();}
$("#c02tip").css({top:parseInt(document.documentElement.scrollTop+(document.documentElement.clientHeight-$("#c02tip").height())/2 )+"px",left:(document.documentElement.clientWidth-$("#c02tip").width())/2+"px"})
$(".Tip_Close").click(function(){
$("#c02tip").fadeOut();});
timer_5=setTimeout("showTime()",1000);}
function showTip3(proobj){
var TipDivW=$(proobj).width();
var TipDivH=$(proobj).height();
var TipDiv=$("<div id='c03tip' style='z-index:20000;position:absolute;width:"+eval(TipDivW+5)+"px;height:"+eval(TipDivH+5)+"px;'><div style='position:absolute;margin:5px 0 0 5px;width:"+TipDivW+"px;height:"+TipDivH+"px;background:#BCBEC0;z-index:20001;'></div></div>")
if(display3==false){
TipDiv.append($(proobj));
$(document.body).prepend(TipDiv);
$(proobj).show();
display3=true;}else{
$("#c03tip").show();}
$("#c03tip").css({top:parseInt(document.documentElement.scrollTop+(document.documentElement.clientHeight-$("#c03tip").height())/2 )+"px",left:(document.documentElement.clientWidth-$("#c03tip").width())/2+"px"})
$("#Tip_notice,.Tip_Close").click(function(){
$("#c03tip").fadeOut();});}
function showTime(){
clearTimeout(timer_5);
var overtime=parseInt($("#timer_5").html())-1;
if(overtime==0){
$("#c02tip").fadeOut();
return;}
$("#timer_5").html(overtime);
timer_5=setTimeout("showTime()",1000)}
function showNotice(obj,noticetype,offX,offY){
var noticeX=$(obj).offset().left;
var noticeT=$(obj).offset().top;
var noticeW=$(obj).width();
var noticeH=$(obj).height();
var offX=(!offX)?60:offX;
var offY=(!offY)?2:offY;
if($("#"+noticetype).get(0)==null){
var newNotice=document.createElement("span");
$(newNotice).attr("id",noticetype)
$(newNotice).css({position:"absolute",top:noticeT+noticeH+offY+"px",left:noticeX-offX+"px",background:"#FFF9D9","z-index":"50000",padding:"5px",border:"1px solid #F88E00"});
$(document.body).prepend($(newNotice));
$(newNotice).html(obj.name);}else{
$("#"+noticetype).css({top:noticeT+noticeH+offY+"px",left:noticeX-offX+"px"});
$("#"+noticetype).show();}}
function opennewWin(url,newwinT,newwinW,newwinH){
window.open(url,newwinT,"width="+newwinW+",height="+newwinH+",toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no");}
function defineW(i){
if($("#suitP"+i).width()>$("#suitPWrap"+i).width()){
$("#suitPWrap"+i).get(0).style.overflowX="scroll";}
var suitW=(Swidth>=1280)?708:472;
if($("#suitP"+i).width()<suitW){
$("#suitPWrap"+i).get(0).style.width=$("#suitP"+i).width()+"px";}}
function buyFitting(obj){
var newHref=obj.href;
obj.getElementsByTagName("img")[0].src="http://www.360buy.com/images/appendToCart_4.gif";
obj.parentNode.innerHTML=obj.innerHTML;
if($.browser.msie){
window.open(newHref);
return false;}}
function gotop(){
window.onscroll=function(){
if(document.documentElement.scrollTop==0&&document.body.scrollTop==0){
$("#gotop").get(0).style.display="none";}else{
$("#gotop").get(0).style.display="";
if($.browser.msie&&$.browser.version<"7.0"){
$("#gotop").get(0).style.position="absolute";
$("#gotop").get(0).style.top=getPosition(180);}}}}
function getPosition(currObjH){
return document.documentElement.scrollTop+document.documentElement.clientHeight-currObjH+"px";}
$(function(){
$("#My360buy,#ServiceCenter").mouseover(function(){
this.className="dis";}).bind("mouseleave",function(){
this.className="";})

$("#Nav li").click(function(){
$(this).siblings().removeClass("curr");
this.className="curr";});

//提示购物车中无商品
initDMenu("#CartSwitch_wrap","#MyCart");
$("#CartSwitch_wrap").mouseover(function(){
clearTimeout(Dtimer);
height=$("#MyCart").height();
Dtimer=setTimeout("showDMenu()",100);}).bind("mouseleave",function(){
clearTimeout(Dtimer);
if(Mdisplay==true){
Dtimer2=setTimeout("hideDMenu()",100);}});})

function ResumeError(){return true;}
window.onerror=ResumeError;
if($.browser.msie&&$.browser.version<"7.0"){
try{document.execCommand("BackgroundImageCache",false,true);}
catch(err){}}
//call uri
var calluri = "http://fairyservice.360buy.com/WebService.asmx/MarkEx?callback=?";
//callback function
callback1 = function(data) {
    ;
}
//mark
mark = function(sku, type) {
    $.getJSON(
            calluri,
            { sku: sku, type: type },
            callback1
        );
}