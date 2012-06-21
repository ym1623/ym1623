<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title><?php echo $title; ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common.css"/>
<?php 
foreach ($css as $_css):
    echo $_css;
endforeach;
 ?>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/effects-20090707.js"></script>

<script type="text/javascript">
function checkKC()
{
	if ($("#viewkc").get(0).checked==true){$(".p_kc").show();$("#viewbyKC").addClass("viewindex_curr");createCookie("viewkc",1);}
	else{$(".p_kc").hide();$("#viewbyKC").removeClass("viewindex_curr");createCookie("viewkc",0);}
}
$(function(){
	//compare();
	showSort("SortList");
	/*Select*/
	$(".Select a").click(function(){
		var tagANum=this.parentNode.parentNode.getElementsByTagName("a");
		for (var i=0;i<tagANum.length;i++){
			tagANum[i].className="";
		}
		this.className="curr";
	})
	/*ViewMode*/
	$(".viewindex").click(function(){
		$(this).siblings().each(function(){$(this).removeClass("viewindex_curr");})
		if (this.className=="viewindex"&&this.id!="viewbyKC"){$(this).toggleClass("viewindex_curr");}else{return;}
	});
   $(".viewindex dl").hover(function(){$(this).addClass('hover');},function(){$(this).removeClass('hover');});
  
   $(".viewindex dd").hover(function(){$(this).css({background:"#FFF3BF"});},function(){$(this).css({background:"#ffffff"});}).click(function(){$(this).parent().get(0).className="";if ($(this).parent().parent().attr("id")=="viewbyKC"){createCookie("viewkc",1);}
	});

   $("#viewkc").click(function(){checkKC();})
   if (readCookie("viewkc")==1){$("#viewkc").get(0).checked=true;checkKC();}
   var url = window.location.href ;
   var param = url.split("-")[11];
   if(param=="4" && url.split("-")[2]!="0")
   {
     $(".p_Review span").each(function(){
	   if ($(this).attr("rel")!=0)
	   {
	     $(this).show();
	   }
	 });
   }
});

function search(id){
    var selKey=document.getElementById(id).value;
    //window.location='<?php echo site_url('home')?>'+selKey;
}
function login(){
    //location.href="<?php echo site_url('home')?>";
    return false;
}


//Nav背景切换
var NavIndex = '<?php echo $nav_index; ?>';
$(function(){
  $("#Nav li:nth-child("+NavIndex+ ")").siblings().removeClass("curr").end().addClass("curr");
});

</script>
</head>
<body>
<div style="z-index: 10000;"><div id="Container"></div></div>
<?php
$CI = get_instance();
$CI->load->model('category_model');
$level_1 = $CI->category_model->find_by_level(1);
?>
<div class="Header">
  <div id="Logo">
    <a href="<?php echo site_url('home')?>">
     <!--<img src="<?php echo base_url()?>images/logo.gif" alt="京东商城" width="167" height="46">-->
	 <img src="<?php echo base_url()?>images/logo.gif">
   </a>
  </div><!-- logo end -->
  <div class="head_box1">
     <div id="Tip">
	   <span id="vtip1"> 
	     <?php if (!$this->session->userdata('user_in')){  ?>
		 您好，欢迎来到XX商城！
		 <span>想继续购物之旅？
		   <a href="<?php echo site_url('login')?>">[请登录]</a>，新用户？
		   <a href="<?php echo site_url('login')?>">[免费注册]</a>
	     </span> 
		 <?php }else{ ?>
		 您好，<?php echo $this->session->userdata('user_name');?>！欢迎您来到xx商城！<a href="<?php echo site_url('login/logout')?>">[退出]</a> 
		 <?php  }?>
      </span>
    </div><!-- tip end -->  
    <div id="MiniToolBar">
		<ul>
		  <li id="My360buy"><a  href="<?php echo site_url('customer')?>">用户中心</a></li>
		  <li class="line">|</li>
		  <li><a href="">xxx1</a></li>
		  <li class="line">|</li>
		  <li class="lpk"><a  href="">xxx2</a></li>
		  <li class="line">|</li>
		  <li><a  href="">xxx3</a></li>
		  <li class="line line-1">|</li>
		  <li class="hsub">
		  <dl id="ServiceCenter">
		    <dt><a href=""  href="">帮助中心</a></dt>
		    <dd><a href="" >订单中心</a></dd>
		    <dd><a  href="" >返修中心</a></dd>
		    <dd><a href="" >投诉中心</a></dd>
		  </dl>
		  </li>
		</ul>
    </div><!-- MiniToolBar end  -->
    <div class="clear"></div>
    <ul id="Nav">
		<li class="curr"><span class="Nav_first"><a href="<?php echo site_url('home')?>"  onfocus="this.blur()">首页</a></span></li>
		<?php foreach($level_1 as $key_1 => $value_1): ?>
		<li><span><a href="<?php echo site_url('category/index_1/cat_id/'.$value_1['id'])?>" onfocus="this.blur()"><?php echo $value_1['name']; ?></a></span></li>
		<?php endforeach ?>
		<!--<li id="exchange"><a href="" onfocus="this.blur()">xxxx</a></li>-->
	</ul><!-- Nav end -->
  </div><!-- head_box1 -->

  <div class="clear"></div>
  <div class="head_box2">
    <div class="head_box2_left"></div>
    <div class="head_box2_right"></div>
    <div id="HotKeyword">
	  <strong>热门搜索：</strong>
	  <a href="">商品一</a><a href="">商品二</a><a href="">商品三</a><a href="">商品四</a>
    </div>
	<ul id="Search">
      <li><strong><a href=""  style="color: rgb(255, 255, 255);">商品搜索</a>：</strong></li>
      <li class="S_input"><input value="xxxxx" onclick="this.value='';this.style.color='#444444'" autocomplete="off" class="S_input1" id="keyword" onkeydown="javascript:if(event.keyCode==13)search('keyword');" type="text">
      <div id="Se_tip"></div></li>
      <li class="S_go">
      <img src="<?php echo base_url()?>images/search_submit.jpg"class="S_input2" onfocus="this.blur()" onclick="search('keyword');return false;"></li>
    </ul><!-- Search end -->
    <ul id="Cart">
      <li class="C_num"><div id="CartSwitch_wrap"><img src="<?php echo base_url()?>images/head3_18.gif" id="CartSwitch" width="14" height="15"><a href="<?php echo site_url('shopping_cart')?>" >购物车</a></div></li>
      <li class="C_bal"><a href="<?php echo site_url('order')?>" >去结算</a></li>
      <li class="C_ord"><a href="<?php echo site_url('customer/order')?>" >我的订单</a></li>
    </ul><!-- Cart end -->
  </div>
</div> <!-- 顶部内容结束 -->
<div style="" id="MyCart"><div class="MyCart_List"><div class="MyCart_Tip"></div></div></div>
