<?php $this->load->view('_header') ?>
<?php
$CI = get_instance();
$CI->load->model('category_model');
$level_1 = $CI->category_model->find_by_level(1);

?>
<script  language="JavaScript">
<!--
//奇偶行条纹效果插件
jQuery.fn.alternateRowColors = function() {
  $('.Sort_List dl', this).removeClass();
  $('.Sort_List dl:nth-child(odd)', this).addClass('even');
  $('.Sort_List dl:nth-child(2)', this).addClass('first');
  return this;
};

$(document).ready(function() {
    var $Main = $('.Main');
    $Main.alternateRowColors();//初始化奇偶行条纹效果
});
//-->
</script>

<div class="Main">
  <div class="Sort_Link">
	<span class="Sort_Link_bgL"></span>
	<span class="Sort_Link_bgR"></span>
	<a href="<?php echo site_url('category')?>">全部分类</a>
	<a href="<?php echo site_url('brand')?>">全部品牌</a> 
	<a href="<?php echo site_url('product')?>">全部商品</a>
  </div>
  <!--Sort_Link end -->
  <div style="clear: both;"></div>

  <!--[if !ie]>分类开始<![endif]-->
  <?php foreach($level_1 as $key_1 => $value_1): ?>
  <div class="Sort_List" id="">
    <h2><img src="<?php echo base_url()?>images/_w/type_<?php echo $value_1['id'] ?>.jpg" alt="<?php echo $value_1['name']; ?>" width="112" height="32"></h2>
	<?php  $level_2 = $CI->category_model->find_by_level(2,$value_1['id']); ?>
	<?php foreach($level_2 as $key_2 => $value_2): ?>
	<dl class="">
	  <dt><?php echo $value_2['name']; ?>：</dt>
	  <dd>
	    <?php  $level_3 = $CI->category_model->find_by_level(3,$value_2['id']); ?>
		<?php foreach($level_3 as $key_3 => $value_3): ?>
	    <a href="<?php echo site_url('category/index_3/cat_id/'.$value_3['id'])?>"><?php echo $value_3['name']; ?></a>
		<?php endforeach; ?>
	  </dd>
	</dl>
	<?php endforeach; ?>
  </div>
  <?php endforeach; ?>
  
  <!--[if !ie]>分类结束<![endif]-->
  <div style="clear: both;"></div>
</div>

<?php $this->load->view('_footer') ?>