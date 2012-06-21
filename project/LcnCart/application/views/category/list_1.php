<?php $this->load->view('_header') ?>
<?php
$CI = get_instance();
$CI->load->model('category_model');
?>
<div class="Main"> 
  <div class="left"> 
    <h2 id="h2_SortList"><?php echo $cat['name']; ?></h2>
	<div id="SortList">
	  <?php $level_2 = $CI->category_model->find_by_level(2,$cat['id']); ?>
	  <?php foreach($level_2 as $key_2 => $value_2): ?>
	  <h3 id="EFF_h3_<?php echo $key_2; ?>" class="open"><strong></strong><a href="<?php echo site_url('category/index_2/cat_id/'.$value_2['id'])?>"><?php echo $value_2['name']; ?></a></h3>
	  <ul id="EFF_ul_<?php echo $key_2; ?>" class="open">
	    <?php $level_3 = $CI->category_model->find_by_level(3,$value_2['id']); ?>
	    <?php foreach($level_3 as $key_3 => $value_3): ?>
	    <li><a href="<?php echo site_url('category/index_3/cat_id/'.$value_3['id'])?>"><?php echo $value_3['name']; ?></a></li>
		<?php  endforeach;?>
	  </ul>
	  <?php  endforeach;?>
	</div>
	<!--[if !ie]>品牌专卖店开始<![endif]-->
    <div id="tjsp">
	  <h2>推荐商品</h2>
	 <!-- <div class="Rank_Sale_List">
	    <ul class="default">
		  <li class="first">
		    <span>1</span>
			<div><a href="" target="_blank">
			<img src="<?php echo base_url()?>images/product/071447c4-008d-44d2-b5d2-f1c49c51cf1d.jpg" alt="海尔(haier）壁挂式家用冷暖空调KFRd-23GW/03GCE-S1套机（白色）" width="47" height="30"></a></div>
			<strong><a href="" target="_blank">海尔(haier）壁挂式家用冷暖空调KFRd-23GW/03GCE-S1套机（白色）<font color="#ff0000">疯抢截止时间为：4月1日16时！新品上柜 直击冰点价格 一级能效 品质服务买的放心用的舒心！</font></a></strong>
			<em>￥1479.00</em>
		  </li>
		  <?php for($i=2;$i<8;$i++){ ?>
		  <li class="other first">
		    <span><?php echo $i  ?></span>
			<div><a href="" target="_blank"><img src="<?php echo base_url()?>images/product/692cc535-0a84-4db6-b72d-3323086d9806.jpg" alt="奥克斯1.5P空调，疯抢倒计时！" width="47" height="30"></a></div><strong><a href="" target="_blank">奥克斯1.5P空调，疯抢倒计时！<font color="#ff0000">节能首选奥克斯！仅限北京地区用户！一级能效！</font></a></strong>
			<em>￥1499.00</em>
		  </li>
		  <?php  }?>
		</ul>
	  </div>-->
    </div> 
	<div id="Store_Link"> 
	  <h2>品牌专卖店</h2> 
	  <!--<ul>
	    <?php for($i=0;$i<8;$i++){ ?>
	    <li><a href="" target="_blank"><img src="<?php echo base_url()?>images/brand/ph-logo1.jpg" alt="飞利浦" width="88" height="31"></a><a href="" target="_blank">飞利浦-家电知名品牌</a></li>
		<?php  }?>
		<li class="more"><img src="<?php echo base_url()?>images/arr_more.gif" width="8" height="8"><a href="" class="link_1">更多&gt;&gt;</a></li>
	  </ul> -->
	</div> 
  </div><!--[if !IE]>left结束<![endif]-->

  <div class="right"> 
    <div class="right_box_l"> 
	  <!--[if !ie]>焦点图片开始<![endif]--> 
	  <div id="Focus_Img"> 
	    <div id="Curr_image">
		<script language='javascript'>
		linkarr = new Array();
		picarr = new Array();
		textarr = new Array();
		var swf_width=546;
		var swf_height=240;
		var files = "";
		var links = "";
		var texts = "";
		//这里设置调用标记
		picarr[1]  = "";
	    textarr[1] = "";
		picarr[1]  = "<?php echo base_url()?>images/banner/banner_jd_92.jpg";
		picarr[2]  = "<?php echo base_url()?>images/banner/banner_jd_93.jpg";
		picarr[3]  = "<?php echo base_url()?>images/banner/banner_jd_94.jpg";
		picarr[4]  = "<?php echo base_url()?>images/banner/banner_jd_90.jpg";
		picarr[5]  = "<?php echo base_url()?>images/banner/banner_jd_87.jpg";
		picarr[6]  = "<?php echo base_url()?>images/banner/banner_jd_84.jpg";

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
      <!--[if !ie]>焦点图片结束<![endif]--> 
	  <!--[if !IE]>特价开始<![endif]--> 
	  <div id="ScareBuying"> 
	    <h2><img src="<?php echo base_url()?>images/column_fcqg.jpg" alt="疯狂抢购" width="122" height="27">(待做)</h2> 
		<!--<div class="Product_List_S3" id="ScareBuying_computer"> 
		  <ul>
		    <?php for($i=0;$i<3;$i++){ ?>
            <li><dl>
			  <dt><a onclick="setWebBILinkCount('')" target="_blank" href=""><img src="<?php echo base_url()?>images/product/55fdaa07-0abb-4af1-854f-72bbe211da07.jpg" alt="创维（skyworth） 42英寸 液晶电视 42M10HF"></a></dt><dd class="p_Price">京东价：<em>￥<span>4499.00</span></em></dd>
			  <dd class="p_Name"><a onclick="setWebBILinkCount('')"target="_blank"href="">创维（skyworth） 42英寸 液晶电视 42M10HF<font color="#ff0000">疯抢截止时间为：4月1日16时！赠送底座,42L05姊妹机：3G酷影／支持RM/RMVB/1080PH.264／双USB双HDMI</font></a></dd>
		    </dl></li>
			<?php } ?>
		  </ul>			
		</div> -->
	  </div> 
	  <!--[if !IE]>特价结束<![endif]--> 
	</div><!-- right_box_l -->
    <div class="right_box_r"> 
	  <div id="Report"> 
	    <h2><?php echo $cat['name']; ?>活动专场(待做)</h2> 
		<!--<ul>
		  <?php for($i=0;$i<6;$i++){ ?>
          <li>·<a target="_blank" href="">万和热水器，月末疯抢！</a></li>
		  <?php } ?>
		</ul> -->
	  </div> 
	  <!--<div class="AD_R margin_b6">
	    <div id="miaozhen8490">
	      <div style="position: absolute; width: 211px; height: 140px; cursor: pointer;" onclick="javascript:window.open('')"></div>
	      <a target="_blank" href=""><img src="<?php echo base_url()?>images/other/elec_r_14.gif" border="0" width="211" height="140"></a>
		</div>
	  </div> 
	  <div class="AD_R margin_b6">
	    <div id="miaozhen8491">
		  <div style="position: absolute; width: 211px; height: 140px; cursor: pointer;" onclick="javascript:window.open('')"></div>
		  <a target="_blank" href=""><img src="<?php echo base_url()?>images/other/elec_r_18.jpg" border="0" width="211" height="140"></a>
		</div>
	  </div> -->
	</div><!-- right_box_r --> 
    <div class="clear"></div>
	<!--<?php for($i=0;$i<1;$i++){ ?>
    <div class="Special"> 
	  <h2>
	    <img src="<?php echo base_url()?>images/electronic_djd.gif" alt="大家电" width="148" height="29">
	    <span>
	      <a href="" class="link_CC0000">热销</a>
	      <?php for($j=0;$j<6;$j++){ ?>/<a href="" target="-blank">平板电视</a><?php } ?>
		</span>
      </h2> 
	  <div class="Special_Product"> 
	    <div class="Special_Img">
	      <div id="miaozhen8493">
	        <div style="position:absolute; width: 180px; height: 348px; cursor: pointer; " onclick="javascript:window.open('')"></div>
	        <a target="_blank" href=""><img src="<?php echo base_url()?>images/el_m_41.jpg" border="0" width="180" height="348"></a>
		  </div>
		</div>
		<div class="Product_List_S3"> 
		  <ul> 
		    <?php for($k=0;$k<6;$k++){ ?>
            <li><dl><dt><a onclick="setWebBILinkCount('')" target="_blank" href=""><img src="<?php echo base_url()?>images/product/aa882dd9-7a96-4a04-8599-ff89e4767b11.jpg" alt="夏普（SHARP）LCD-46LX710A 46英寸 全高清LED电视"></a></dt><dd class="p_Price">京东价：<em>￥<span>15799.00</span></em></dd><dd class="p_Name"><a onclick="setWebBILinkCount('')" target="_blank" href="">夏普（SHARP）LCD-46LX710A 46英寸 全高清LED电视<font color="#ff0000">X超晶面板,高画质，高音质，尊荣华贵！</font></a></dd></dl></li>
			<?php } ?>
		  </ul> 
		</div> 
	  </div> 
	</div>
	<?php } ?>-->
    <!--[if !IE]>通栏广告结束<![endif]--> 
    <!--<div class="AD_R_1 margin_b6"> 
      <div id="miaozhen8501">
	    <div style="position: absolute; width: 763px; height: 70px; cursor: pointer;" onclick="javascript:window.open('')"></div>
		<img src="<?php echo base_url()?>images/other/el_tl_04.jpg" width="763" height="70">
	  </div>
	</div> -->
	<!--[if !IE]>通栏广告结束<![endif]-->
	<!--<?php for($i=0;$i<1;$i++){ ?>
    <div class="Special"> 
	  <h2>
	    <img src="<?php echo base_url()?>images/electronic_djd.gif" alt="大家电" width="148" height="29">
	    <span>
	      <a href="" class="link_CC0000">热销</a>
	      <?php for($j=0;$j<6;$j++){ ?>/<a href="" target="-blank">平板电视</a><?php } ?>
		</span>
      </h2> 
	  <div class="Special_Product"> 
	    <div class="Special_Img">
	      <div id="miaozhen8493">
	        <div style="position:absolute; width: 180px; height: 348px; cursor: pointer; " onclick="javascript:window.open('')"></div>
	        <a target="_blank" href=""><img src="<?php echo base_url()?>images/el_m_41.jpg" border="0" width="180" height="348"></a>
		  </div>
		</div>
		<div class="Product_List_S3"> 
		  <ul> 
		    <?php for($k=0;$k<6;$k++){ ?>
            <li><dl><dt><a onclick="setWebBILinkCount('')" target="_blank" href=""><img src="<?php echo base_url()?>images/product/aa882dd9-7a96-4a04-8599-ff89e4767b11.jpg" alt="夏普（SHARP）LCD-46LX710A 46英寸 全高清LED电视"></a></dt><dd class="p_Price">京东价：<em>￥<span>15799.00</span></em></dd><dd class="p_Name"><a onclick="setWebBILinkCount('')" target="_blank" href="">夏普（SHARP）LCD-46LX710A 46英寸 全高清LED电视<font color="#ff0000">X超晶面板,高画质，高音质，尊荣华贵！</font></a></dd></dl></li>
			<?php } ?>
		  </ul> 
		</div> 
	  </div> 
	</div>
	<?php } ?>-->
  </div><!--[if !IE]>right<![endif]--> 
</div> 
	
<?php $this->load->view('_footer') ?>