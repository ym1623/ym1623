<?php $this->load->view('_header') ?>
<script type="text/javascript">
function mycarousel_initCallback(carousel){
	$("#mycarousel li").mouseover(function(){
		$("#Product_BigImage img")[0].src=this.getElementsByTagName("img")[0].name;
		$("#Product_BigImage img")[0].jqimg=this.getElementsByTagName("img")[0].name;
		$(this).siblings().each(function(){
			this.getElementsByTagName("img")[0].className="";
		})
		this.getElementsByTagName("img")[0].className="curr";

	})
};

$(function(){
	if ($.browser.msie){
	 mycarousel_initCallback();
	}else{
      jQuery("#mycarousel").jcarousel({initCallback:mycarousel_initCallback});
	}

    
	//if (!$.browser.msie){
      $(".jqzoom").jqueryzoom({
		xzoom:403,
		yzoom:260,
		offset:10,
		position:"right",
        preload:1,
		lens:1
	  });
	//}

	$("#rank-tab-1").jdTab();
	$("#rank-con-1 li").jdSonny();
	$("#rank-con-2 li").jdSonny();
	$("#rank-con-3 li").jdSonny();
	

});
</script>

<div class="Main">
  <div id="Position" class="margin_b6">
    <a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_1/cat_id/'.$level_1['id'])?>"><?php echo $level_1['name']; ?>首页</a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_2/cat_id/'.$level_2['id'])?>"><?php echo $level_2['name']; ?></a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_3/cat_id/'.$category['id'])?>"><?php echo $category['name']; ?></a>&nbsp;&gt;&nbsp;
	<?php if(!empty($brand))  {?>
    <a href="<?php echo site_url('brand/single/brand_id/'.$brand['id'])?>"><?php echo $brand['name']; ?></a>&nbsp;&gt;&nbsp;
	<?php   }?>
    <a href="<?php echo site_url('product/single/product_id/'.$product['id'])?>"><?php echo $product['short_name']; ?></a>
  </div>
		
  <div class="right">
    <!--[if !IE]>商品简介开始<![endif]-->
	<div class="Product_Intro">
	  <!--[if !IE]>商品简介左部开始<![endif]-->
      <div class="Product_Name">
	    <h1><?php echo $product['name']; ?></h1>
		<font color="#ff0000"><?php echo $product['short_desc']; ?></font>
	  </div>      
	  <div id="Product_Intro_Left">
	    <div id="Product_BigImage" class="jqzoom" onclick="window.open('')"><img onerror="this.src='<?php echo base_url()?>images/none_347.gif'" alt="<?php echo $product['name']; ?>" src="<?php echo base_url().UPLOADS.$product_images[0]['image_name'].'_347'.$product_images[0]['file_ext']  ;?>" jqimg="<?php echo base_url().UPLOADS.$product_images[0]['file']  ;?>" width="349"></div>
        <div id="Product_LittleImage">
		  <div class="jcarousel-skin-tango">
            <div style="display: block;" class="jcarousel-container jcarousel-container-horizontal">
		      <div disabled="true" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal"></div>
			  <div disabled="true" style="display: block;" class="jcarousel-next jcarousel-next-horizontal jcarousel-next-disabled jcarousel-next-disabled-horizontal"></div>
			  <div class="jcarousel-clip jcarousel-clip-horizontal">
			    <ul style="width: 192px; left: 0pt;" id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
				  <?php  foreach($product_images as $key => $image): ?>
			      <li jcarouselindex="<?php echo ($key+1); ?>" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-<?php echo ($key+1); ?>  jcarousel-item-<?php echo ($key+1); ?>-horizontal">
			        <img onerror="this.src='<?php echo base_url()?>images/none_50.gif'" alt="<?php echo $product['name']; ?>" src="<?php echo base_url().UPLOADS.$image['image_name'].'_50'.$image['file_ext']  ;?>" name="<?php echo base_url().UPLOADS.$image['image_name'].'_347'.$image['file_ext']  ;?>">
				  </li>
				  <?php  endforeach;  ?>				  
			    </ul>
              </div>
			</div>
		  </div>
		</div><!-- Product_LittleImage -->
		<!--<div id="Product_Opp">
		  <img alt="点此看大图" src="<?php echo base_url()?>images/zoom.gif">&nbsp; <a class="link_1" onerror="this.src='<?php echo base_url()?>images/none_150.gif'" target="_blank" href="">点此看大图</a>&nbsp;&nbsp;&nbsp;&nbsp;<img alt="推荐给好友" src="<?php echo base_url()?>images/ico_tuijian.gif" width="14" height="14"><a href="" class="link_1" target="_blank">推荐给好友</a>
		</div>-->
      </div>
	  <!--[if !IE]>商品简介左部结束<![endif]-->
	  <!--[if !IE]>商品简介右部开始<![endif]-->
	  <div id="Product_Intro_Right">
	    <ul class="Pro_baseinfo">
	      <li>市&nbsp;场&nbsp;价：<em class="m_line">￥<?php echo $product['market_price']; ?></em>&nbsp;&nbsp;&nbsp;&nbsp;<em class="grey">商品编号：(待做)</em></li>
	      <li>本&nbsp;店&nbsp;价：<em style="color:red">￥<?php echo $product['price']; ?></em></li>
	      <li style="" id="storeinfocontainer">库&nbsp;&nbsp;&nbsp;&nbsp;存：<em ><?php echo $product['stock']; ?></em></li>
          <li>商品评分：(待做)</li>
	      <li id="cx" style="display: ;"></li>
	      <li id="liLargess" class="largess" style="display:;"></li>
	      <li id="nocoupon" style="display: ;"></li>
	    </ul>
	    <div class="Pro_wrap1">
		  <div class="Pro_buttons">
		    <a onclick="mark(198091,2);" href="<?php echo site_url('shopping_cart/add/product_id/'.$product['id'])?>"><img src="<?php echo base_url()?>images/appendToCart.gif" id="gouwuche" alt="添加到购物车" width="132" height="32"></a>
			<!--
		    <span id="pShowSkuId" style="display: none;">198091</span>
		    <span id="fqPanel" onclick="mark(198091,3);"><a href="#none" onclick="showTip100('#Fqfk_Tip');"><img src="<?php echo base_url()?>images/fqfk.gif"></a></span>-->
		    <img src="<?php echo base_url()?>images/coll.gif" id="coll198091" onclick="mark(198091,4);" alt="" width="77" height="26">
		  </div>
	    </div>
	    <div class="clear"></div>
	    <div id="carriage">运  费：<!--<a href="#none" class="link-cal" onclick="showShipBarDt(198091)">计算运费及到货时间<img src="/arrow_30.gif"></a>&nbsp;&nbsp;30城市满100元，其它主要城市满400元免运费&nbsp;&nbsp;<a href="http://www.360buy.com/help/kdexpress.aspx" target="_blank">运费说明</a>-->（待做）</div>
	    <div id="shipBarPanel" style="display: none;"></div>
	  </div><!--[if !IE]>商品简介右部结束<![endif]-->
    </div><!--[if !IE]>商品简介结束<![endif]-->

	<!--[if !IE]>相关配件开始<![endif]-->
	<!--<div id="divService"><div class="sbox_1"><h2><em></em>推荐服务(略)</h2></div></div>-->
	<!--[if !IE]>相关配件结束<![endif]-->

	 <ul class="Tab" id="EFF_PINFO_Option">
	   <li id="EFF_PINFO_Option_0" class="curr" onclick="SwitchTab('EFF_PINFO_','0','','S1')"><em>商品介绍</em></li>
	   <li id="EFF_PINFO_Option_1" onclick="SwitchTab('EFF_PINFO_','1','','S1')"><em>规格参数</em></li>
	   <!--<li id="EFF_PINFO_Option_2" onclick="SwitchTab('EFF_PINFO_','2','','S1')"><em>包装清单</em></li>
	   <li id="EFF_PINFO_Option_11" onclick="SwitchTab('EFF_PINFO_','11','','S1')"><em>售后服务</em></li>-->
     </ul>

	 <div class="sbox_3" id="EFF_PINFO_Con_0">
	   <ul class="Detail1">
	     <li class="w100" title="海尔XQB50-7288">商品名称：<?php echo $product['short_name']; ?></li>
		 <li>生产厂家：<a target="_blank" href=""></a></li>
		 <li>商品产地：</li>
		 <li>商品毛重：</li>
		 <li>上架时间：<?php echo $product['on_sale_at']; ?></li>
	  </ul>
      <!--<div class="ProInfo">xxx</div>
	  <div class="State">xxx</div>-->
	</div>
	<div class="sbox_3" id="EFF_PINFO_Con_1" style="display: none;">
		<table class="Ptable" border="0" cellpadding="0" cellspacing="1" width="100%"><tbody>
		<tr><th class="tdTitle" colspan="2">主体</th></tr>
		<tr></tr>
		<tr><td class="tdTitle">品牌</td><td><?php echo $brand['name']; ?></td></tr>
		<tr><td class="tdTitle">型号</td><td></td></tr>
		<tr><th class="tdTitle" colspan="2">属性</th></tr>
		<tr></tr>
		<?php foreach($product_attr_values as $value): ?>
		<tr><td class="tdTitle"><?php echo $value['attr_name']?></td><td><?php echo $value['attr_value']?></td></tr>
		<?php endforeach; ?>
		
		</tbody></table>
	</div>
    <!--<div class="sbox_3" id="EFF_PINFO_Con_2" style="display: none;">（略）</div>
	<div class="sbox_3" id="EFF_PINFO_Con_11" style="display: none;">（略）</div>-->

	<div id="suit"></div>
			
	<ul class="Tab" id="EFF_PINFOs2_Option">
	  <li id="EFF_PINFOs2_Option_0" name="0" class="curr" onclick="SwitchTab('EFF_PINFOs2_','0','','S1')"><em>评价(<a href="#">198</a>)</em>(待做)</li>
      <!--<li id="EFF_PINFOs2_Option_1" name="5" onclick="SwitchTab('EFF_PINFOs2_','1','','S1')"><em>好评(<a href="#">184</a>)</em></li>
	  <li id="EFF_PINFOs2_Option_2" name="3" onclick="SwitchTab('EFF_PINFOs2_','2','','S1')"><em>中评(<a href="#">13</a>)</em></li>
	  <li id="EFF_PINFOs2_Option_3" name="1" onclick="SwitchTab('EFF_PINFOs2_','3','','S1')"><em>差评(<a href="#">1</a>)</em></li>-->
	</ul>

	<div class="Review_List" id="EFF_PINFOs2_Con_0">
	  <!--<div class="reviewInfo">
	    <div class="rI_l"></div>
		<div class="rI_c"></div>
		<div class="rI_r"></div>
	  </div>
	  <?php for($i=0;$i<5;$i++){ ?>
	  <ul class="PR_list">
	    <li name="xiao700183" class="PR_list_l"><a href="" target="_blank"><img src="<?php echo base_url()?>images/56.gif"></a><div><a href="" class="link_1" target="_blank">xiao700183</a></div><div>铁牌会员</div><div style="color: Green;">(广东)</div></li>
		<li class="PR_list_r">
		  <div class="re_topic">
		    <span class="float_Right">2010-03-18 22:49</span>
		    <span class="topic"><a href="" class="link_1" target="_blank">非常满意</a></span>
			<img src="<?php echo base_url()?>images/prg_005.jpg" width="72" height="12">
		  </div>
		  <div class="re_con">
		    <dl><dt>优点：</dt><dd>价格实惠，售后服务非常好！</dd></dl>
			<dl><dt>不足：</dt><dd>暂时还没发现缺点</dd></dl>
			<dl><dt>总结：</dt><dd>十分满意！</dd></dl>
			<div class="re_con_buttons">
			  <span id="8e554ac7-2b75-4159-a987-543f6a7c4956" class="float_Right">这条评价对您有用吗？&nbsp;<input name="agree" class="btn1" value="有用(0)" title="0" type="button">&nbsp;<input name="oppose" class="btn1" value="没用(0)" title="0" type="button"></span>
			  <input class="btn1" value="回复(0)"onclick=""type="button">&nbsp;&nbsp;购买日期：2010-03-12
			</div>
	      </div>
		</li>
	  </ul>
	  <?php  }?>
	  <div class="refer_info"><span class="float_Right">共<em>198</em>条&nbsp;&nbsp; <a href="" class="link_1" target="_blank">浏览所有用户评价&gt;&gt;</a></span>只有购买过该商品的用户才能进行评价。&nbsp;&nbsp;<a id="comment0" name="" href="#none" class="link_FF7403">[发表评价]</a>&nbsp;&nbsp;<a href="" class="link_1" target="_blank">[最新评价]</a></div>-->
	</div>
	
  </div><!--  right -->

  <div class="left">

    <div id="sortlist" class="m">
	  <h2><?php echo $level_2['name']; ?></h2>
	  <div class="mc">
	  <ul>
	    <?php foreach($levels_3 as $level_3): ?>
	    <li><a href="<?php echo site_url('category/index_3/cat_id/'.$level_3['id'])?>"><?php echo $level_3['name']; ?></a></li>
		<?php endforeach; ?>
	  </ul>
	  </div>
	</div>

	<!--[if !IE]>同类品牌开始<![endif]-->
	<div id="congener" class="m">
	  <h2>同类品牌</h2>
	  <div class="mc">待做
	    <!--<ul>
		  <li><a href="">三洋</a></li> 
        </ul>-->
	  </div>
	</div><!--[if !IE]>同类品牌结束<![endif]-->

	<!--[if !IE]>同类热卖商品开始<![endif]-->
	<div class="m rank-sale">
	  <h2>洗衣机销售排行</h2>
	  <div class="mc">待做
	    <!--<ul class="tab" id="rank-tab-1">
		  <li class="curr"><a href="#rank-con-1">同类别</a></li>
		  <li><a href="#rank-con-2">同品牌</a></li>
		  <li><a href="#rank-con-3">同价位</a></li>
		</ul>
		<ul class="i-mc" id="rank-con-1">
		  <li class="fore curr">
		    <span>1</span>
			<div class="p-img"><a href="">
			<img onerror="this.src='<?php echo base_url()?>images/none_150.gif'" src="<?php echo base_url()?>images/product/c5b0a3ac-8480-4e83-b23b-2724b943c009.jpg"></a></div>
			<div class="i-li">
			  <p class="p-name"><a href="">小鸭XPB20-2008</a></p>
			  <p class="p-price"><img onerror="this.src='<?php echo base_url()?>images/no2.gif'" src="<?php echo base_url()?>images/product/PA7C58676ED60074F57D6A77D6241690D1.png"></p>
			</div>
		  </li>
		</ul>
		<ul class="i-mc nodis" id="rank-con-2">
		  <li class="fore curr">
		    <span>1</span>
		    <div class="p-img"><a href=""><img onerror="<?php echo base_url()?>images/none_150.gif'" src="<?php echo base_url()?>images/product/d2f34860-b275-4634-9a8e-699fb7e55c93_002.jpg"></a></div>
		    <div class="i-li"><p class="p-name"><a href="">海尔XQB50-7288</a></p><p class="p-price"><img onerror="this.src='<?php echo base_url()?>images/no2.gif'" src="PCD2B14F431B3B4867B50F74DE0595E151.png"></p></div>
		  </li>
        </u>
		<ul class="i-mc nodis" id="rank-con-3">
		  <li class="fore curr">
		    <span>1</span>
			<div class="p-img"><a href="">
			<img onerror="this.src='<?php echo base_url()?>images/none_150.gif'" src="<?php echo base_url()?>images/product/c5b0a3ac-8480-4e83-b23b-2724b943c009.jpg"></a></div>
			<div class="i-li">
			  <p class="p-name"><a href="">小鸭XPB20-2008</a></p>
			  <p class="p-price"><img onerror="this.src='<?php echo base_url()?>images/no2.gif'" src="<?php echo base_url()?>images/product/PA7C58676ED60074F57D6A77D6241690D1.png"></p>
			</div>
		  </li>
        </u>-->
		<!--[if !IE]>同类热卖商品结束<![endif]-->
	  </div>
	</div>
	<div id="Recentness_View" class="Product_List_S5 m">            
	  <h2><em><a href="#none" id="clearRec" class="more_white">清空</a></em>最近浏览过的商品</h2>待做
	  <!--<ul>
	    <li><dl><dt><a href=""><img src="<?php echo base_url()?>images/product/d2f34860-b275-4634-9a8e-699fb7e55c93_003.jpg"></a></dt><dd class="p_Name"><a href="">海尔+XQB50-7288直供+波轮洗衣机（神童王系列）</a></dd></dl></li>
	  </ul>-->
	</div>

	<div class="AD_L">广告</div>

  </div>
  
</div>
	
<?php $this->load->view('_footer') ?>