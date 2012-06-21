<?php $this->load->view('_header') ?>
<script type="text/javascript" src="<?php echo base_url()?>js/tab.js"></script>

<div class="Main">

  <div class="Sort_Link">
	<span class="Sort_Link_bgL"></span>
	<span class="Sort_Link_bgR"></span>
	<a href="<?php echo site_url('category')?>">全部分类</a>
	<a href="<?php echo site_url('brand')?>">全部品牌</a> 
	<a href="<?php echo site_url('product')?>">全部商品</a>
	<h1>（待做）</h1>
  </div>

  <div style="clear: both;"> </div>
  
  <div class="brand_t">
    <div class="brand_t_r"></div>
  </div>
  <div class="Sort_List" id="Sort_electronic">
    <h2> <img src="<?php echo base_url()?>images/_w/brandnew_03.gif" alt="推荐品牌" width="123" height="32"></h2>
    <ul class="brand_all_list">
	  <?php for($i=0;$i<16;$i++){ ?>
      <li>
        <div class="brand_all_list_a"><a href=""> <img alt="惠普" src="<?php echo base_url()?>images/brand/hp2.gif"></a></div>
	    <h5> <a href="">惠普打印机及耗材</a></h5>
	  </li>
	  <?php  }?>
    </ul>
  </div>

  <div class="brand_b">
	<div class="brand_b_r"></div>
	<div class="brand_b_l"></div>
  </div>
	
  <div class="brand_tab">
    <ul>
	  <li id="one1" onclick="setTab('one',1,4)" style="background-position:0pt 0pt;">家用电器</li>
	  <li id="one2" onclick="setTab('one',2,4)">手机数码</li>
	  <li id="one3" onclick="setTab('one',3,4)">电脑产品</li>
	  <li id="one4" onclick="setTab('one',4,4)">日用百货</li>
	</ul>
  </div>

  <div class="brand_t">
	<div class="brand_t_r"></div>
	<div class="brand_t_l"></div>
  </div>

  <div class="Sort_List">
    <div class="brand_all_list" id="con_one_1">
	  <ul>
	    <?php for($i=0;$i<20;$i++){ ?>
	    <li>
		  <div class="brand_all_list_a"> <a href=""> <img alt="西门子" src="<?php echo base_url()?>images/brand/xmz.gif"></a></div>
		  <h5> <a href=""> 西门子-全系列电子消费品</a></h5>
		</li>
		<?php  }?>
	  </ul>
      <div class="m-brand">更多品牌：
	    <?php for($i=0;$i<50;$i++){ ?>
	    <a href="" target="_blank">荣事达</a>&nbsp;
		<?php  }?>
	  </div>
    </div>
    <div class="brand_all_list" id="con_one_2" style="display: none;">
	  <ul>
	    <?php for($i=0;$i<20;$i++){ ?>
	    <li>
		  <div class="brand_all_list_a"> <a href=""> <img src="<?php echo base_url()?>images/brand/PP_Logo_33.gif" alt="诺基亚"></a></div><h5> <a href=""> 诺基亚-全系列移动电话</a></h5>
		</li>
		<?php  }?>
	  </ul>
	  <div class="m-brand">更多品牌：
	    <?php for($i=0;$i<50;$i++){ ?>
	    <a href="" target="_blank">美国创意坦克</a>&nbsp;
		<?php  }?>
	  </div>
    </div>
    <div class="brand_all_list" id="con_one_3" style="display: none;">
	  <ul>
	    <?php for($i=0;$i<20;$i++){ ?>
	    <li>
		  <div class="brand_all_list_a"><a href=""> <img alt="惠普" src="<?php echo base_url()?>images/brand/hp2.gif"></a></div>
		  <h5> <a href="">惠普打印机及耗材</a></h5>
	    </li>
		<?php  }?>
	  </ul>
	  <div class="m-brand">更多品牌：
	    <?php for($i=0;$i<50;$i++){ ?>
	    <a href="" target="_blank">阿尔卡特</a>&nbsp;
		<?php  }?>
	  </div>
    </div>  
	<div class="brand_all_list" id="con_one_4" style="display: none;">
	  <ul>
	    <?php for($i=0;$i<20;$i++){ ?>
	    <li>
		  <div class="brand_all_list_a"> <a href=""> <img alt="卡西欧" src="<?php echo base_url()?>images/brand/casio.jpg"></a></div><h5> <a href=""> 卡西欧-名品手表 </a> </h5>
		</li>
		<?php  }?>
	  </ul>
	  <div class="m-brand">更多品牌：
	    <?php for($i=0;$i<50;$i++){ ?>
	    <a href="" target="_blank">红七工</a>&nbsp;
		<?php  }?>
	  </div>
    </div>
  </div><!-- Sort_List  -->

	<div class="brand_b">
		<div class="brand_b_r"></div>
		<div class="brand_b_l"></div>
	</div>
	
</div>
<?php $this->load->view('_footer') ?>