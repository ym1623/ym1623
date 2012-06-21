<?php $this->load->view('_header') ?>
<?php
$CI = get_instance();
$CI->load->model('category_model');
?>
 <div class="Main">
   <div id="Position" class="margin_b6">
     <a href="<?php echo site_url('home')?>">首页</a>&nbsp;&gt;&nbsp;
     <a href="<?php echo site_url('category/index_1/cat_id/'.$cat['parent_id'])?>">><?php echo $parent['name']; ?>首页</a>&nbsp;&gt;&nbsp;
     <a href="<?php echo site_url('category/index_2/cat_id/'.$cat['id'])?>"><?php echo $cat['name']; ?></a>&nbsp;&gt;&nbsp;
   </div>
   <div class="right">          
     <div class="Select">
	   <div class="mt">
	     <h2><?php echo $cat['name']; ?></h2>&nbsp;-&nbsp;选择分类
	   </div>
	   <dl>
	     <dt>分类名称：</dt>
		 <dd>
		   <div><a id="0" href="" class="curr">全部</a></div>
           <?php  foreach($childs as $key => $value): ?>
		   <div><a id="<?php echo $value['id']; ?>" href="<?php echo site_url('category/index_3/cat_id/'.$value['id'])?>"><?php echo $value['name']; ?></a></div>
		   <?php endforeach;  ?>
		 </dd>
	   </dl>
	 </div><!--Select end -->
     <div class="right_box1_left">
	  <div class="View_Mode">
	    <div>排序方式：</div>
		<div class="dd1">
		  <!--<div class="viewindex viewindex_curr"><a href="#">销量</a></div>-->
		  <div class="viewindex" id="viewbyprice">
		    <dl >
		    <dt >价格</dt>
			<dd ><a href="<?php echo site_url('category/index_2/cat_id/'.$cat['id'].'/order/price_up')?>">低-高</a></dd>
			<dd ><a href="<?php echo site_url('category/index_2/cat_id/'.$cat['id'].'/order/price_down')?>">高-低</a></dd>
		    </dl>
		  </div>
		  <!--<div id="hpd" class="viewindex"><a href="#">浏览量</a></div>-->
		  <div class="viewindex"><a href="">上架时间</a></div>
		</div>
        <!--<div>显示方式：</div>
		<div class="dd2">
		  <div style="padding-top: 3px; padding-left: 6px;"><a href=""><img alt="按缩略图方式查看" src="<?php echo base_url()?>images/view_mode_10a1.gif"></a></div>
		  <div style="padding-top: 3px; padding-left: 6px;"><a href=""><img alt="按列表方式查看" src="<?php echo base_url()?>images/view_mode_10a.gif"></a></div>
		</div>-->
		<div class="dd3">共<strong><?php echo $total; ?></strong>件商品</div>
	  </div><!-- View_Mode  -->
	  
      <div id="View_List">
        <div class="Product_List_S7">
          <ul>		    
			<?php foreach($products as $product): ?>
			<li><dl>
			  <dt>
			    <a target="_blank" href="<?php echo site_url('product/single/product_id/'.$product['id'])?>"><img onerror="this.src='<?php echo base_url()?>images/none_150.gif'"src="<?php echo base_url().UPLOADS.$product['base_image']['image_name'].'_130'.$product['base_image']['file_ext']  ;?>" alt="<?php echo $product['name']; ?>"></a>
			  </dt>
              <dd class="p_Name"><a target="_blank" title="<?php echo $product['name']; ?>" href="<?php echo site_url('product/single/product_id/'.$product['id'])?>"><?php echo $product['name']; ?><font color="#ff0000"><?php echo $product['short_desc']; ?></font></a></dd>
			  <dd class="p_Price">本店价：<em style="color:red"><?php echo $product['price']; ?></em></dd>
			  <!--<dd class="p_Review"><a target="_blank" href="">已有78人评论</a><span rel="78" style="color: rgb(26, 135, 5); display: none;">(99%好评)</span></dd>
			  <dd class="p_kc"><div class="stocklist" name="7B6410087CE76383F00D13044373CBF8"><span>北京<b class="fs1">现货</b></span><span>上海<b class="fs4">无货</b></span><span>广州<b class="fs4">无货</b></span><span>成都<b class="fs4">无货</b></span></div></dd>
			  <dd class="p_Opp"><a href="" target="_blank"><img src="<?php echo base_url()?>images/buttons_buy.jpg"></a><img id="coll208297" src="<?php echo base_url()?>images/buttons_coll.jpg"><img src="<?php echo base_url()?>images/buttons_comp.jpg" id="pcheck_131" onclick="addToCompare(this,208297,'美的（Midea）1匹壁挂式家用冷暖空调KFR-23GW/DY-GC（E1）')"></dd>-->
			</dl></li>
			<?php  endforeach; ?>
          </ul>
        </div>
        <div class="Pagination">
	      <?php echo $pagination; ?>	
	    </div>
      </div><!-- View_List  -->
    </div><!-- right_box1_left  -->
    <div class="right_box1_right">
	  <div id="newReviewPro">
	    <h2>最新降价商品</h2>
		<!--<div class="Rank_Sale_List">
		  <ul class="default">
		    <li class="first">
			  <span>1</span>
			  <strong><a href="">LG 42SL90QD 42英寸 LED全高清液晶电视  
			  <font color="#ff0000">至尊纤薄,尽显LED奢华本色!（标配底座）</font>
			  </a></strong>
			  <em>￥8499.00</em>
			</li>
			<?php for($i=2;$i<8;$i++){ ?>
			<li class="other first">
			  <span><?php echo $i  ?></span>
			  <strong><a href="">小天鹅 洗衣机XQB45-208G+<font color="#ff0000">风干自洁功能！</font></a></strong>
			  <em>￥1196.00</em>
			</li>
			<?php  }?>
		  </ul>
		</div>-->
	  </div><!-- newReviewPro  -->
	  <div class="Rank_Sale">
	    <h2>本类最新商品</h2>
		<!--<div class="Rank_Sale_List">
		  <ul class="default">
		    <li class="first"><span>1</span><strong><a href="">格力（GREE）凉之夏节能系列大1匹壁挂式家用冷暖空调KFR-26GW/K(26556)D1-N2<font color="#ff0000">疯抢截止时间为：4月1日16时！送500积分！2级能效！格力超级特价！仅限上海销售！</font></a></strong><em>￥1699.00</em></li>
			<?php for($i=2;$i<8;$i++){ ?>
		    <li class="other first"><span><?php echo $i  ?></span><strong><a href="">海尔（Haier）电热水器3D-JS166<font color="#ff0000">赠摩恩花洒 再返581元  畅享系列 智能OK键 红外线遥控 高效加热系统10分钟即可洗浴</font></a></strong><em>￥4280.00</em></li>
			<?php  }?>
		  </ul>
		</div>-->
	  </div><!-- Rank_Sale  -->
    </div><!-- right_box1_right -->
  </div><!-- right -->
  <div class="left">
  <!--[if !IE]>分类开始<![endif]-->
    <h2 id="h2_SortList"><?php echo $parent['name'] ?></h2>
	<div id="SortList">
	  <?php $level_2 = $CI->category_model->find_by_level(2,$cat['parent_id']); ?>
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
	  </dl></li></ul>-->
    </div>
    <!--[if !IE]>最近浏览过的商品结束<![endif]-->
    <!-- 左下广告位置开始-->
    <div class="AD_L margin_b6"></div>
    <!-- 左下广告位置结束-->
  </div><!-- left -->

</div>

<?php $this->load->view('_footer') ?>