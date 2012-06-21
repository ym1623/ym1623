<?php $this->load->view('_header') ?>
<?php
$CI = get_instance();
$CI->load->model('category_model');
?>
<div class="Main">
  <div id="Position" class="margin_b6">
    <a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_1/cat_id/'.$grandparent['id'])?>"><?php echo $grandparent['name']; ?></a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_2/cat_id/'.$parent['id'])?>"><?php echo $parent['name']; ?></a>&nbsp;&gt;&nbsp;
    <a href="<?php echo site_url('category/index_3/cat_id/'.$cat['id'])?>"><?php echo $cat['name']; ?></a>
  </div>
  
  <div class="right">
    <!--<div class="promotion1">
	  <h2>
	    <div></div>
		<img src="<?php echo base_url()?>images/_w/hotPro_img.jpg" alt="热卖推荐">（待做）
	  </h2>
      <div class="Product_List_S5">（待做）
	    <ul>
		  <li class="first"><dl>
		    <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/ff92182c-6638-4b0f-a912-a8d32f8486fa.jpg"></a></dt>
		    <dd class="p_Name"><a target="_blank" href="" class="link_1">松下（Panasonic）洗衣机XQG52-V52NW<font color="#ff0000">疯抢截止时间为：4月1日16时！11度斜式面板，滚桶超大视窗！</font></a></dd><dd class="p_Price">市场价：<span>￥3998.00</span></dd>
		    <dd class="p_Price">今日特价：<em>￥<span>2899.00</span></em></dd>
		    <dd class="p_Opp"><a target="_blank" href=""><img src="<?php echo base_url()?>images/buy1.jpg"></a></dd>
		  </dl></li>
		  <li><dl>
		    <dt><a target="_blank" href=""><img src="<?php echo base_url()?>images/product/7a1ef010-1ca2-49fd-88ba-536ecdd727f8.jpg"></a></dt>
            <dd class="p_Name"><a target="_blank" href="" class="link_1">三洋（SANYO）洗衣机 XQG62-L703（珍珠白）<font color="#ff0000">人工智能模糊控制技术，大容量不锈钢斜式滚筒！</font></a></dd>
			<dd class="p_Price">市场价：<span>￥3355.00</span></dd><dd class="p_Price">今日特价：<em>￥<span>2798.00</span></em></dd><dd class="p_Opp"><a target="_blank" href=""><img src="<?php echo base_url()?>images/buy1.jpg"></a></dd>
		  </dl></li>
		</ul>
      </div>
	  <ul class="column_yhcx">（待做）
	    <?php for($i=0;$i<6;$i++){ ?>
	    <li>·<a target="_blank" href="">万和热水器，月末疯抢！</a></li>
		<?php  }?>
	  </ul>
      <div class="pT">
	    <div class="pTl"></div>
		<div class="pTr"></div>
	  </div>
    </div>--><!-- promotion1  -->

    <!--[if !IE]>商品选择选项开始<![endif]-->
    <!-- <div class="Select">
	  <div class="Tab">
	    <h1><?php  echo $cat['name']; ?></h1>&nbsp;- 商品筛选
	  </div>(待做)
	  <dl class="first">
	    <dt>品牌：</dt>
		<dd>
		  <div><a id="0" href="" class="curr">全部</a></div>
		  <?php for($i=0;$i<20;$i++){ ?>
		  <div><a id="4997" href="">海尔</a></div>
		  <?php  } ?> 
		</dd>
	  </dl>
	  <dl>
	    <dt>价格：</dt>
		<dd>
		  <div><a id="0" href="" class="curr">全部</a></div>
		  <?php for($i=0;$i<7;$i++){ ?>
		  <div><a id="4998" href="">1-500</a></div>
		  <?php } ?>
		</dd>
	  </dl>
	  <?php for($i=0;$i<4;$i++){ ?>
	  <dl>
	    <dt>其他属性<?php echo $i  ?>：</dt>
		<dd>
		  <div><a id="0" href="" class="curr">全部</a></div>
		  <?php for($j=0;$j<7;$j++){ ?>
		  <div><a id="4998" href="">属性值<?php echo $j  ?></a></div>
		  <?php } ?>
		</dd>
	  </dl>
	  <?php } ?>
    </div>--><!--Select end -->
    
	<div class="right_box1_left">
      <div class="View_Mode">
	    <div>排序方式：</div>
	    <div class="dd1">
	      <!--<div class="viewindex viewindex_curr"><a href="">销量</a></div>-->
		  <div class="viewindex" id="viewbyprice">
		    <dl>
		      <dt>价格</dt>
			  <dd><a href="<?php echo site_url('category/index_3/cat_id/'.$cat['id'].'/order/price_up')?>">低-高</a></dd>
			  <dd><a href="<?php echo site_url('category/index_3/cat_id/'.$cat['id'].'/order/price_down')?>">高-低</a></dd>
		    </dl>
		  </div>
	      <!--<div id="hpd" class="viewindex">
	        <a href="">好评度<img class="new" src="<?php echo base_url()?>images/icon_new_03.gif"></a>
	      </div>-->
	      <div class="viewindex"><a href="<?php echo site_url('category/index_3/cat_id/'.$cat['id'].'/order/osa')?>">上架时间</a></div>
	    </div>
        <!--<div>显示方式：</div>
	    <div class="dd2">
		  <div style="padding-top: 3px; padding-left: 6px;">
		    <a href=""><img alt="按缩略图方式查看" src="<?php echo base_url()?>images/view_mode_10a1.gif"></a>
		  </div>
          <div style="padding-top: 3px; padding-left: 6px;">
		    <a href=""><img alt="按列表方式查看" src="<?php echo base_url()?>images/view_mode_10a.gif"></a>
		  </div>
		</div>-->
		<!--<div id="viewbyKC" class="viewindex">
		  <dl><dt><input id="viewkc" type="checkbox">显示库存</dt>
		    <dd><a href="" id="bjviewkc">北京现货排前</a></dd>
			<dd><a href="" id="shviewkc">上海现货排前</a></dd>
			<dd><a href="" id="gzviewkc">广州现货排前</a></dd>
			<dd><a href="" id="gzviewkc">成都现货排前</a></dd>
		  </dl>
		</div>-->
		<div class="dd3">共<strong><?php echo $total; ?></strong>件商品</div>
      </div><!-- View_Mode -->
      <div id="View_List">
        <div class="Product_List_S7"><ul>
        <?php foreach($products as $product): ?>
		<li><dl>
		  <dt><a target="_blank" href="<?php echo site_url('product/single/product_id/'.$product['id'])?>"><img onerror="this.src='<?php echo base_url()?>images/none_150.gif'"src="<?php echo base_url().UPLOADS.$product['base_image']['image_name'].'_130'.$product['base_image']['file_ext']  ;?>" alt="<?php echo $product['name']; ?>"></a></dt>
		  <dd class="p_Name"><a target="_blank" title="<?php echo $product['name']; ?>" href="<?php echo site_url('product/single/product_id/'.$product['id'])?>"><?php echo $product['name']; ?><font color="#ff0000"><?php echo $product['short_desc']; ?></font></a></dd>
		  <dd class="p_Price">本店价：<em style="color:red"><?php echo $product['price']; ?></em></dd>
		  <!--
		  <dd class="p_Review"><a target="_blank" href="">已有134人评论</a><span rel="134" style="color: rgb(26, 135, 5); display: none;">(91%好评)</span></dd>
		  <dd class="p_kc"><div class="stocklist" name="CF5E69BC7C8FA4F33E949B76EF711C3D"><span>北京<b class="fs1">现货</b></span><span>上海<b class="fs1">现货</b></span><span>广州<b class="fs2">在途</b></span><span>成都<b class="fs2">在途</b></span></div></dd>
		  <dd class="p_Opp">
		    <a href="" target="_blank"><img src="<?php echo base_url()?>images/buttons_buy.jpg"></a><img 
            id="coll183312" src="<?php echo base_url()?>images/buttons_coll.jpg"><img src="<?php echo base_url()?>images/buttons_comp.jpg" id="pcheck_131" onclick="addToCompare(this,183312,'小鸭XPB20-2008单缸迷你洗衣机')">
		  </dd>-->
		</dl></li>
        <?php endforeach; ?>
	    </ul></div>
		<div class="Pagination">
		  <?php echo $pagination; ?>		  
		</div>
      </div>
	</div>
  </div>

  <div class="left">         
    <!--[if !IE]>分类开始<![endif]-->
    <h2 id="h2_SortList"><?php echo $grandparent['name'] ?></h2>
	<div id="SortList">
	  <?php $level_2 = $CI->category_model->find_by_level(2,$parent['parent_id']); ?>
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
    <!--[if !IE]>分类结束<![endif]-->
    <!--[if !IE]>最近浏览过的商品开始<![endif]-->
    <div id="Recentness_View" class="Product_List_S5 margin_b6">
      <h2>最近浏览过的商品</h2>
      <!--<ul><li><dl>
	    <dt><a href=""><img src="<?php echo base_url()?>images/product/c5b0a3ac-8480-4e83-b23b-2724b943c009.jpg"></a></dt>
	    <dd class="p_Name"><a href="">小鸭XPB20-2008单缸迷你洗衣机</a></dd>
	  </dl></li></ul>-->（待做）
    </div>
    <!-- 左下广告位置开始-->
    <div class="AD_L margin_b6"></div>
    <!-- 左下广告位置结束-->

  </div><!-- left -->
</div>
<?php $this->load->view('_footer') ?>