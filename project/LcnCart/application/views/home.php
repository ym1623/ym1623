<?php $this->load->view('_header') ?>

<?php
$CI = get_instance();
$CI->load->model('category_model');
$level_1 = $CI->category_model->find_by_level(1);

?>
<div class="Main">

  <div class="left">
    <div class="m" id="allsort">
      <h2><em><a href="<?php echo site_url('category')?>">全部分类</a></em><strong>商品分类</strong></h2>
      <div class="mc">
	  <?php foreach($level_1 as $key_1 => $value_1): ?>
	    <h3><a href="<?php echo site_url('category/index_1/cat_id/'.$value_1['id'])?>"><?php echo $value_1['name']; ?></a></h3>
		<?php  $level_2 = $CI->category_model->find_by_level(2,$value_1['id']); ?>
		<?php foreach($level_2 as $key_2 => $value_2): ?>
        <div class="item">		  
          <span>
		    <h4><a href="<?php echo site_url('category/index_2/cat_id/'.$value_2['id'])?>"><?php echo $value_2['name']; ?></a></h4>
			<?php  $level_3 = $CI->category_model->find_by_level(3,$value_2['id']); ?>
			<?php foreach($level_3 as $key_3 => $value_3): ?>
		    <ins>&nbsp;-&nbsp;<?php echo $level_3[0]['name']; ?>&nbsp;&nbsp;<?php echo $level_3[1]['name']; ?>...</ins>
		    <?php endforeach; ?>
		  </span>
	      <div><dl><dt></dt><dd>
		    <?php foreach($level_3 as $key_3 => $value_3): ?>
		    <em><a href="<?php echo site_url('category/index_3/cat_id/'.$value_3['id'])?>"><?php echo $value_3['name']; ?></a></em>
			<?php endforeach; ?>
          </dd></dl></div>
        </div>
		<?php endforeach; ?>
	  <?php endforeach; ?>		
        <div class="extra"><a target="_blank" href="<?php echo site_url('product')?>" class="link_1">全部商品&gt;&gt;</a></div>
      </div><!-- mc -->
    </div><!-- allsort  -->
	        <!--[if gte IE 6]>
            <script type="text/javascript">$("#allsort .item").hoverForIE6();</script>
            <![endif]-->
    <div class="m" id="brandstore">
      <h2>品牌专卖店</h2>
      <div id="brandmarket">
	    <em>&gt;</em>
		<div><dl><dt></dt><dd>
		  <?php foreach($all_brands as $_brand): ?>
          <em><a target="_blank" href="<?php echo site_url('brand/single/brand_id/'.$_brand['id'])?>"><?php echo $_brand['name']; ?></a></em>
		  <?php endforeach; ?>
        </dd></dl></div>
      </div>
      <div class="mc">
        <ul>
		  <?php foreach($hot_brands as $hot_brand): ?>
		  <li><a href="<?php echo site_url('brand/single/brand_id/'.$hot_brand['id'])?>"target="_blank"><img alt="<?php echo $hot_brand['name']; ?>" src="<?php echo base_url().UPLOADS.$hot_brand['logo']?>" width="88" height="31" /></a></li>
		 <?php endforeach; ?>
	    </ul>
        <div class="more"><a href="<?php echo site_url('brand')?>"><b></b>更多&gt;&gt;</a></div>
      </div>
    </div><!-- brandstore -->
		<!--[if gte IE 6]>
		<script type="text/javascript">$("#brandmarket").hoverForIE6();</script>
		<![endif]-->
    <!--<div class="margin_b6">
     <a href="" target="_blank"><img src="<?php echo base_url()?>images/other/button_78.gif" width="211" height="90"></a><h1 style="color:red">（广告板块）</h1>
    </div>-->

	<!--<div class="column_zxpj">
	  <h2>最热评价</h2>
	  <ul>
	  <?php for($i=0;$i<3;$i++){?>
	  <li>
	    <h5>
	      <span style="color: rgb(255, 153, 0); font-weight: bold;">[晒单]</span>
          <a href=""class="link_1">不用不知道，用了好奇妙</a>
		</h5>
		<div class="text1">
		  <a href=""><img src="<?php echo base_url()?>images/product/9e18363f-3460-4abc-bccf-213bfbeaf23f.jpg"></a>
		  <a href="">用这个洗面奶已经一段时间了，也算是比较有发言权啊，我的评价就是：很好用！用着也舒服！每次用一点，就可以起很多的泡沫，有是磨砂的，每次洗完都感觉很清爽的感觉！洗的很干...</a>
		</div>
		<div class="text2">
		  <a href=""class="float_Right link_1"><strong>疯狂的指南针</strong></a>
		  <span style="color: rgb(18, 160, 0);">共69条回复</span>
		</div>
	  </li>
	  <?php }?><h1 style="color:red">（待做）</h1>
	  </ul>
	</div>--><!-- column_zxpj -->
    
	<!--<div id="votemiaozhen">
	  <div class="margin_b6">
	    <a href="" target="_blank"><img src="<?php echo base_url()?>images/other/button_304.jpg"width="211" height="88"></a>
	  </div>
	</div>-->

    <!--<div id="Link">
      <div id="LinkBox">
	    <ul>
		  <li class="li1">XX商城各地分公司：</li>
		  <li class="li1">
		  	<?php for($i=0;$i<32;$i++){?>
		    <a class="link_1" target="_blank" href="">北京</a>
			<?php }?><h1 style="color:red">(待做)</h1>
		  </li>
        </ul>
       <div class="li2">&nbsp;&nbsp;以上城市全部提供上门自提、货到付款、POS机刷卡和售后上门服务。</div>
	 </div>
    </div>-->           

  </div><!-- left  -->

  <div class="right">

    <div class="right_box1_left">

	  <div id="Focus_Img">
	    <div id="Curr_image">
	    <script language='javascript'>
		linkarr = new Array();
		picarr = new Array();
		textarr = new Array();
		var swf_width=546;
		var swf_height=120;
		var files = "";
		var links = "";
		var texts = "";
		//这里设置调用标记
		picarr[1]  = "";
	    textarr[1] = "";
		picarr[1]  = "<?php echo base_url()?>images/banner/banner_145.jpg";
		picarr[2]  = "<?php echo base_url()?>images/banner/banner_146.jpg";
		picarr[3]  = "<?php echo base_url()?>images/banner/banner_147.jpg";
		picarr[4]  = "<?php echo base_url()?>images/banner/banner_148.jpg";
		picarr[5]  = "<?php echo base_url()?>images/banner/banner_149.jpg";
		picarr[6]  = "<?php echo base_url()?>images/banner/banner_cd.jpg";
		picarr[7]  = "<?php echo base_url()?>images/banner/banner_144.jpg";
		for(i=1;i<picarr.length;i++){
		  if(files=="") files = picarr[i];
		  else files += "|"+picarr[i];
		}
		for(i=1;i<linkarr.length;i++){
		  if(links=="") links = linkarr[i];
		  else links += "|"+linkarr[i];
		}
		for(i=1;i<textarr.length;i++){
		  if(texts=="") texts = textarr[i];
		  else texts += "|"+textarr[i];
		}
		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
		document.write('<param name="movie" value="<?php echo base_url()?>images/bcastr3.swf"><param name="quality" value="high">');
		document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
		document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
		document.write('<embed src="<?php echo base_url()?>images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
        </script>
	    </div>
	  </div>   
	  <div id="ScareBuying">
	    <h2><img src="<?php echo base_url()?>images/column_fcqg.jpg" alt="疯狂抢购" width="122" height="27"></h2>
		<!--<div class="Product_List_S3">
          <ul>
		    <?php for($i=0;$i<3;$i++){?>
            <li><dl>
			<dt><a onclick="setWebBILinkCount('index_crazy_left')" target="_blank" href=""><div>￥3969</div>
			<img src="<?php echo base_url()?>images/product/3b815d9d-9972-429b-b400-b13b1f8fe75f.jpg"alt="宏碁（Acer）Aspire 4736ZG-442G32MN  14英寸笔记本电脑 （T4400 2G 320G D刻 512 独显摄像头 HDMI）"></a></dt>
			<dd class="p_Price">京东价：<em>￥3969.00</em></dd>
			<dd class="p_Name"><a onclick="setWebBILinkCount('index_crazy_left')" target="_blank" href="">宏碁（Acer）Aspire 4736ZG-442G32MN  14英寸笔记本电脑 （T4400 2G 320G D刻 512 独显 摄像头 HDMI）</a></dd>
			</dl></li>			
			<?php }?>
		  </ul>
        </div>-->
		
        <div class="Product_List_S2">
          <ul>
		    <?php foreach($hot_products as $hot_product): ?>
            <li><dl>
			<dt><a target="_blank"  href="<?php echo site_url('product/single/product_id/'.$hot_product['id'])?>">
			<img src="<?php echo base_url().UPLOADS.$hot_product['base_image']['image_name'].'_50'.$hot_product['base_image']['file_ext']  ;?>" alt="<?php echo $hot_product['name']; ?>"></a></dt>
			<dd class="p_Name"><a  target="_blank" title="<?php echo $hot_product['name']; ?>" href="<?php echo site_url('product/single/product_id/'.$hot_product['id'])?>"><?php echo $hot_product['name']; ?></a></dd>
			<dd>·<a  target="_blank" title="<?php echo $hot_product['short_desc']; ?>" href="<?php echo site_url('product/single/product_id/'.$hot_product['id'])?>"><?php echo $hot_product['short_desc']; ?></a></dd>
			<dd style="color:red;text-align:center">￥<?php echo $hot_product['price']; ?></dd>
			</dl></li>
			<?php endforeach; ?>
		  </ul>
        </div>
	  </div>
	</div><!-- right_box1_left  -->
	<div class="right_box1_right">
	  <div id="report" class="m">
		<h2>商城快报(待做)</h2>
		<div class="mc">
          <ul>
		  <?php for($i=0;$i<8;$i++){?>
          <li>·<a target="_blank" href="">山东开通8个城市货到付款！</a></li>
		  <?php }?>
          </ul>
          <div class="more"><a href=""><b></b>更多&gt;&gt;</a></div>
        </div>
      </div>
      <!--
	  <div class="m da-w211">
	    <a href="" target="_blank"><img src="<?php echo base_url()?>images/other/button_79.gif" width="211" height="90"></a>
	  </div>
      -->
	  <!--<div id="sale" class="m">
	    <h2>拍卖商品（待做）</h2>
		<div class="mc">
		  <ul>
		  <li class="recommend"><dl>
		    <dt><a target="_blank" href=""><img onerror="this.src='<?php echo base_url()?>images/none_150.gif'" src="<?php echo base_url()?>images/product/3fa4d072-0d75-440c-85d3-d34f77533d90.jpg"alt="诺基亚 1682  GSM手机（黑色） 移动定制机(北京备件库拍卖会)"></a></dt>
			<dd class="p_Name"><a target="_blank" href=""><font color="#ff0000">诺基亚 1682  GSM手机（黑色） 移动定制机(北京备件库拍卖会)</font></a></dd>
			<dd class="p_Price">起拍价：1 元 </dd>
          </dl></li>
		  <li>·<a target="_blank" href=""><font color="#ff0000">诺基亚 N97 mini 3G手机（黑色） WCDMA/GSM 非定制(北京备件库拍卖会)</font></a></li>
		  <li>·<a target="_blank" href=""><font color="#ff0000">诺基亚 6300 GSM手机（褐色）非移动定制版(北京备件库拍卖会)</font></a></li>
		  <li>·<a target="_blank" href=""><font color="#ff0000">爱国者 F639PLUS 4G MP5 多媒体播放器 （粉色）(北京备件库拍卖会)</font></a></li>
		  <li>·<a target="_blank" href="">影驰 9500GT 战斗版 256M/128位 DDR2 PCI-E 显卡(北京备件库拍卖会)</a></li>
		  <li>·<a target="_blank" href="">TP-LINKWN550G无线PCI网卡（54M）(北京备件库拍卖会)</a></li>
		  </ul>
		  <div class="more"><a href=""><b></b>更多&gt;&gt;</a></div>
		</div>
	  </div>--><!--拍卖区域-->
	</div><!-- right_box1_right  -->

    <div class="clear"></div>
    
	<!-- 新品上架  -->
	<div id="NewProduct" class="float_Left">
      <h2>
	    <!--<em><a onclick="setWebBILinkCount('index_newproduct_more')" href="" class="link_1">更多新品&gt;&gt;</a></em>-->
		<img src="<?php echo base_url()?>images/column_xpsj.jpg"alt="新品上架" width="122" height="27">		
	  </h2>
      <div class="Product_List_S3">
        <ul style="top: -156px;">
		  <?php foreach($new_products as $new_product): ?>
          <li><dl>
		  <dt><a  target="_blank" href="<?php echo site_url('product/single/product_id/'.$new_product['id'])?>">
		  <img src="<?php echo base_url().UPLOADS.$new_product['base_image']['image_name'].'_100'.$new_product['base_image']['file_ext']  ;?>" alt="<?php echo $new_product['name']; ?>"alt="<?php echo $new_product['name']; ?>"></a></dt>
		  <dd class="p_Name"><a  target="_blank" href="<?php echo site_url('product/single/product_id/'.$new_product['id'])?>"><?php echo $new_product['name']; ?><font color="#ff0000"><?php echo $new_product['short_desc']; ?></font></a></dd>
          <dd class="p_Price">本店价：<em>￥<?php echo $new_product['price']; ?></em></dd>
		  </dl></li>
		  <?php endforeach; ?>
	    </ul>
        <ul style="top: 156px;">
		  <?php foreach($new_products as $new_product): ?>
          <li><dl>
		  <dt><a target="_blank" href="<?php echo site_url('product/single/product_id/'.$new_product['id'])?>"><img src="<?php echo base_url().UPLOADS.$new_product['base_image']['image_name'].'_100'.$new_product['base_image']['file_ext']  ;?>" alt="<?php echo $new_product['name']; ?>"></a></dt>
		  <dd class="p_Name"><a  target="_blank" href=""><?php echo $new_product['name']; ?><font color="#ff0000"><?php echo $new_product['short_desc']; ?></font></a></dd><dd class="p_Price">本店价：<em>￥<?php echo $new_product['price']; ?></em></dd>
		  </dl></li>
		 <?php endforeach; ?>
        </ul>
	  </div>
	  <script defer="defer" type="text/javascript">
		$(function(){
			setTimeout("marquee(2,156,12)",2000);
			$("#NewProduct").hover(function(){
				if (Stag=="stop"){
				   clearTimeout(timera);
			   }
			},function(){
			   if (Stag=="stop"){
				  timera=setTimeout("marquee(2,156,12)",1000);
			   }
		   })
		})
	  </script>
    </div><!-- NewProduct -->

	<!-- 右侧广告
    <div class="right_box1_right">
      <div class="AD_R margin_b6">
        <div id="miaozhen7888">
	      <div style="position: absolute; width: 211px; height: 90px; cursor: pointer; " onclick="javascript:window.open('')"></div>
		  <img src="<?php echo base_url()?>images/other/button_406.jpg" width="211" height="90">
	    </div>
      </div>
      <div class="AD_R margin_b6">
        <div id="miaozhen7889">
		  <div style="position: absolute; width: 211px; height: 90px; cursor: pointer; " onclick="javascript:window.open('','_blank')"></div>
		 <img src="<?php echo base_url()?>images/other/button_214.gif" width="211" height="90">
		</div>
      </div>
    </div> 右侧广告结束 -->

    <div class="clear"></div>

	<h2 class="tjzq margin_b6">
	  <!--<em><a href="" class="link_1">全部特价商品&gt;&gt;</a></em>-->
	  <img src="<?php echo base_url()?>images/column_tjzq.jpg" alt="特价专区" width="122" height="27">	  
	</h2>
	<div class="Special_Product float_Left">
	  <!--<h2>
        <div class="SP_cornor_left">
          <img src="<?php echo base_url()?>images/column_dq_bh.jpg" alt="家用电器/日用百货" width="147" height="16">(待做)
        </div>
        <div class="SP_cornor_right">
          <em><a onclick="setWebBILinkCount('index_tejia1_more')" href="" class="link_1">更多商品&gt;&gt;</a></em>
        </div>
      </h2>-->
	  <div class="Product_List_S3">
        <ul>
		  <?php foreach($special_price_products as $special_price_product): ?>
		  <li><dl>
		  <dt><a  target="_blank" href="<?php echo site_url('product/single/product_id/'.$special_price_product['id'])?>"><img src="<?php echo base_url().UPLOADS.$special_price_product['base_image']['image_name'].'_100'.$special_price_product['base_image']['file_ext']  ;?>" alt="<?php echo $special_price_product['name']; ?>"></a></dt>
		  <dd class="p_Price">本店价：<em>￥<span><?php echo $special_price_product['price']; ?></span></em></dd>
		  <dd class="p_Name"><a  target="_blank" href="<?php echo site_url('product/single/product_id/'.$special_price_product['id'])?>"><?php echo $special_price_product['name']; ?><font color="#ff0000"><?php echo $special_price_product['short_desc']; ?></font></a></dd>
		  </dl></li>
		  <?php endforeach; ?>
		</ul>
	  </div>
	</div>

	<div class="right_box1_right">
      <!-- 抢购1
      <div class="Rank_Sale margin_b6">
	    <div id="hasQiangGou536" style="">
		  <h3>家用电器限时抢购(待做)</h3>
		  <div class="timeBox" id="time536">剩余<strong>3</strong>小时<strong>14</strong>分<strong>26</strong>秒</div>
		  <div class="Product_List_S3" id="qianggou536">
		    <ul>
			  <li class="first"><dl>
			  <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/b739901d-3332-4460-ab73-5205b95e469b.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt>
			  <dd class="p_Name"><a target="_blank" href="">格兰仕2100W德国黑晶面板电磁炉CH2176J(赠汤锅+炒锅)<font color="#ff0000">带汤锅、炒锅！</font></a></dd>
			  <dd class="p_Price1">市场价：<em>￥299.00</em>&nbsp;&nbsp;&nbsp;</dd>
			  <dd class="p_Price">抢购价：<strong>￥172.00</strong> (5.8折)</dd>
			  </dl></li>
			  <li><dl>
			  <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/b4e282ed-49bd-44df-9d78-75bdc4f7e00a.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt>
			  <dd class="p_Name"><a target="_blank" href="">欧普 浴霸D06<font color="#ff0000"></font></a></dd>
			  <dd class="p_Price1">市场价：<em>￥229.00</em>&nbsp;&nbsp;&nbsp;仅剩<strong>19</strong>件</dd>
			  <dd class="p_Price">抢购价：<strong>￥189.00</strong>(8.3折)</dd>
			  </dl></li>
			</ul>
		  </div>
		</div> 
	  </div>
       抢购1-->
	  <!-- 抢购2
      <div class="Rank_Sale">
        <div id="hasQiangGou538" style="">
		  <h3>日用百货限时抢购(待做)</h3>
		  <div class="timeBox" id="time538">剩余<strong>1</strong>小时<strong>15</strong>分<strong>6</strong>秒</div>
		  <div class="Product_List_S3" id="qianggou538">
		    <ul><li class="first"><dl>
			<dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/3eb5267b-0e67-4d58-b366-caab43bea248.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt>
			<dd class="p_Name"><a target="_blank" href="">益盾防辐射抗疲劳电脑护目镜粉色半框<font color="#ff0000"></font></a></dd><dd class="p_Price1">市场价：<em>￥258.00</em>&nbsp;&nbsp;&nbsp;</dd><dd class="p_Price">抢购价：<strong>￥58.00</strong> (2.2折)</dd>
			</dl></li>
			<li><dl>
			<dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/df9707f6-28c5-49b7-b165-6ac7a20c8b38.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt><dd class="p_Name"><a target="_blank" href="">欧司朗柏林系列单臂33W卤素节能台灯<font color="#ff0000">疯狂抢购</font></a></dd><dd class="p_Price1">市场价：<em>￥298.00</em>&nbsp;&nbsp;&nbsp;</dd><dd class="p_Price">抢购价：<strong>￥199.00</strong> (6.7折)</dd></dl></li>
			</ul>
		  </div>
		</div>
	  </div>
	   抢购2-->
	</div><!-- right_box1_right(抢购) -->

	<div class="clear margin_b6"></div>

	<!--通栏广告
    <div class="AD_R_1 float_Left">
	  <div id="miaozhen7890">
		<div style="position: absolute; width: 546px; height: 90px; cursor: pointer; " onclick="javascript:window.open('')"></div>
		<img src="<?php echo base_url()?>images/other/banner_tl_503.gif" width="546" height="90">
	  </div>
	</div>
	<div class="AD_R float_Right">
	  <div id="miaozhen8300">
	    <div style="position: absolute; width: 211px; height: 90px; cursor: pointer; " onclick="javascript:window.open('')"></div>
		<img src="<?php echo base_url()?>images/other/button_404.gif" width="211" height="90">
	  </div>
	</div>-->

	<div class="clear margin_b6"></div>

	<!--<div class="Special_Product float_Left">
      <h2>
	    <div class="SP_cornor_left">
          <img src="<?php echo base_url()?>images/column_dl_sm.jpg" alt="电脑产品/手机数码" width="147" height="16">(待做)
        </div>
        <div class="SP_cornor_right">
		  <em><a onclick="setWebBILinkCount('index_tejia2_more')" href="" class="link_1">更多商品&gt;&gt;</a></em>
        </div>
      </h2>
	  <div class="Product_List_S3">
        <ul>
		  <?php for($i=0;$i<12;$i++){?>
		  <li><dl>
		  <dt><a onclick="setWebBILinkCount('index_tejia2_all')" target="_blank" href=""><img src="<?php echo base_url()?>images/product/7a2b08da-a0a8-412e-bc39-d8e2dad49b93.jpg" alt="诺基亚3208c  GSM手机(珍珠白)  仅售1039！"></a></dt>
		  <dd class="p_Price">京东价：<em>￥<span>1039.00</span></em></dd>
		  <dd class="p_Name"><a onclick="setWebBILinkCount('index_tejia2_all')" target="_blank" href="">诺基亚3208c  GSM手机(珍珠白)  仅售1039！<font color="#ff0000">自在手写，畅快书怀! 送正版迪士尼手机袋和TF卡读卡器！</font></a></dd>
		  </dl></li>
		  <?php  }?>
	    </ul>
	  </div>
	</div>-->

	<div class="right_box1_right">
	  <!-- 抢购3
	  <div class="Rank_Sale margin_b6">
	    <div id="hasQiangGou535" style="">
		  <h3>电脑产品限时抢购(待做)</h3>
		  <div class="timeBox" id="time535">剩余<strong>1</strong>小时<strong>13</strong>分<strong>33</strong>秒</div>
		  <div class="Product_List_S3" id="qianggou535">
		    <ul>
			  <li class="first"><dl>
			  <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/1228c805-60d1-4926-8a27-eaedd10c59cc.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt>
			  <dd class="p_Name"><a target="_blank" href="">TP-LINK TL-R402 SOHO宽带路由器<font color="#ff0000"></font></a></dd>
			  <dd class="p_Price1">市场价：<em>￥79.00</em>&nbsp;&nbsp;&nbsp;</dd>
			  <dd class="p_Price">抢购价：<strong>￥57.00</strong> (7.2折)</dd></dl></li>
			  <li class=""><dl>
			  <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/1228c805-60d1-4926-8a27-eaedd10c59cc.jpg"></a><img src="<?php echo base_url()?>images/icon_qiang.gif" class="q"></dt>
			  <dd class="p_Name"><a target="_blank" href="">TP-LINK TL-R402 SOHO宽带路由器<font color="#ff0000"></font></a></dd>
			  <dd class="p_Price1">市场价：<em>￥79.00</em>&nbsp;&nbsp;&nbsp;</dd>
			  <dd class="p_Price">抢购价：<strong>￥57.00</strong> (7.2折)</dd></dl></li>
			</ul>
		  </div>
		</div>
	  </div>
	  抢购3-->
	  <!-- 排行
	  <div class="Rank_Sale">
		<div style="display:;" id="paihang537">
          <h2>手机数码畅销排行榜(待做)</h2>
          <div class="Rank_Sale_Option">
            <ul id="EFF_digital_Option">
			  <li class="curr" onmouseover="SwitchTab('EFF_digital_',0,3)" id="EFF_digital_Option_0">手机通</li>
		      <li onmouseover="SwitchTab('EFF_digital_',1,3)" id="EFF_digital_Option_1">时尚影音</li>
			  <li onmouseover="SwitchTab('EFF_digital_',2,3)" id="EFF_digital_Option_2">数码影像</li>
			</ul>
          </div>
		  <div class="Rank_Sale_List" id="EFF_digital_Con">
            <ul class="default" id="EFF_digital_Con_0">
              <li class="first"><span>1</span><div><a onclick="setWebBILinkCount('index_tejia2_top2')" href=""><img src="<?php echo base_url()?>images/product/3fa4d072-0d75-440c-85d3-d34f77533d90_002.jpg" alt="诺基亚（NOKIA）1682  GSM手机（黑色） 移动定制机"></a></div><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">诺基亚（NOKIA）1682  GSM手机（黑色） 移动定制机<font color="#ff0000">S40操作系统，彩信，GPRS上网，电子词典！送正版迪士尼手机袋！</font></a></strong><em>￥198.00</em></li>
              <?php for($i=2;$i<9;$i++){?>
              <li><span><?php echo $i ?></span><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">诺基亚（Nokia）E63 3G手机（黑色） WCDMA/GSM 非定制机<font color="#ff0000">最高性价比强机！预购从速！</font></a></strong></li>
			  <?php }?>
            </ul>
			<ul class="disNone" id="EFF_digital_Con_1">
              <li class="first"><span>1</span><div><a onclick="setWebBILinkCount('index_tejia2_top2')" href=""><img src="<?php echo base_url()?>images/product/bb16e25c-057c-4fd5-8a6e-c7f45906f1c9_002.jpg" alt="苹果（Apple）iPod Touch 8G 3代 MC086CH/A 多媒体播放器（黑色）"></a></div><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">苹果（Apple）iPod Touch 8G 3代 MC086CH/A 多媒体播放器（黑色）<font color="#ff0000">赠价值39元火柴人贴膜与39元Freewalk硅胶套！！！经典机型，支持Wifi、收发邮件、支持多款游戏！</font></a></strong><em>￥1466.00</em></li>
			  <?php for($i=2;$i<9;$i++){?>
			  <li><span><?php echo $i ?></span><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">飞利浦（PHILIPS）SHM7110U/97头戴式耳麦<font color="#ff0000">新包装！新感觉！品质依旧！</font></a></strong></li>
			  <?php }?>
			</ul>
			<ul class="disNone" id="EFF_digital_Con_2">
              <li class="first"><span>1</span><div><a onclick="setWebBILinkCount('index_tejia2_top2')" href=""><img src="<?php echo base_url()?>images/product/46face1c-deff-41b6-b43a-3b31c3b45a93.jpg" alt="富士（fujifilm）A225数码相机（黑色）"></a></div><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">富士（fujifilm）A225数码相机（黑色）<font color="#ff0000"> 富士卡片机销售冠军！尾货清仓，抢到就赚到咯！</font></a></strong><em>￥550.00</em></li>
			  <?php for($i=2;$i<9;$i++){?>
			  <li><span><?php echo $i ?></span><strong><a onclick="setWebBILinkCount('index_tejia2_top2')" href="">富士（fujifilm）A225数码相机（银色）<font color="#ff0000">富士超值卡片机之选！尾货清仓，抢到就赚到咯！</font></a></strong></li> 
			  <?php }?>
            </ul>
		  </div>
		</div>
	  </div>
	   排行-->	  
	</div><!-- right_box1_right -->
	<div class="clear"></div>
          
  </div><!-- right  -->
  
</div><!-- main  -->


<?php $this->load->view('_footer') ?>