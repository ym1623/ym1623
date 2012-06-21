// JavaScript Document
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
//menu.className=i==cursel?"hover":"";
menu.style.backgroundPosition=i==cursel?"0px 0px":"0px -34px";
con.style.display=i==cursel?"block":"none";
}
}
