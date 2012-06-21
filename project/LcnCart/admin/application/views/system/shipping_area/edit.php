<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/main.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/admin.js"></script>

<script language="JavaScript"> 
<!--

//窗口大小调整
$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});

/**
 * 配送费用计算方式
 */
function compute_mode(shipping_code,mode)
{
    var base_fee  = $("#base_fee");
    var step_fee  = $("#step_fee");
    var item_fee  = $("#item_fee");
    if(shipping_code == 'post_mail' || shipping_code == 'post_express')
    {
     var step_fee1  = $("#step_fee1");
    }

    if(mode == 'number')
    {
      item_fee.show();
      base_fee.hide();
      step_fee.hide();
      if(shipping_code == 'post_mail' || shipping_code == 'post_express')
      {
       step_fee1.hide();
      }
    }
    else
    {
      item_fee.hide();
      base_fee.show();
      step_fee.show();
      if(shipping_code == 'post_mail' || shipping_code == 'post_express')
      {
       step_fee1.show();
      }
    }
}

$(document).ready(function() {

  $('#save').click(function() {//新增
    if (beforeSubmit()){
	  $('form').submit();
    }
  });

  $('#saveEdit').click(function() {//新增并继续编辑
	if (beforeSubmit()){
      $('#re_edit').val('1');   
	  $('form').submit();
	}
  });
});

//-->
</script>
</head>

<body class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

    <!-- 当前菜单 -->
    <div style="-moz-user-select: none; " id="crt-menu" class="x-tab-panel-header x-unselectable">
    <div class="x-tab-strip-wrap">
    <ul  class="x-tab-strip x-tab-strip-top">
    <li class="x-tab-strip-active" >
    <a class="x-tab-right" href="#" onClick="return false;">
    <em class="x-tab-left">
    <span style="width: 130px;" class="x-tab-strip-inner">
    <span class="x-tab-strip-text"><?php echo $header_text; ?></span>
    </span>
    </em>
    </a>
    </li>
    <li  class="x-tab-edge"></li>
    <div  class="x-clear"></div>
    </ul>
    </div>
    </div>

    <!-- 工具栏 -->
    <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div  class="x-toolbar "><table cellspacing="0"><tbody><tr>
	
	<td id="save"><table class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-save" type="button">保存</button></em></td>
	<td class="x-btn-right"><i>&nbsp;</i></td>
	</tr></tbody></table></td>

	<td><span class="ytb-sep"></span></td>

	<td id="saveEdit"><table class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><button class="x-btn-text tb-renew" type="button">保存并继续编辑</button></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td><span class="ytb-sep"></span></td>

	<td id="reset"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-resume" type="button">重置</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

	<td><span  class="ytb-sep"></span></td>

	<td  onClick="window.location.href='<?php echo site_url('shipping_area/index/id').'/'.$shipping['id'];?>'"><table   class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button  class="x-btn-text tb-owner" type="button">列表</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>

	</tr></tbody></table></div></div>
  <!-- /工具栏 -->

  <!-- 表单 -->
	<div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " >
    <form style="padding: 5px 5px 0pt; width:px;" class=" x-form" method="post" action="<?php echo site_url('shipping_area/save')?>" name="form" > 

	 <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
	 <div class="x-panel-bwrap">
	 <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
	 <div class="bottomLine">
	 <font class="lineTitle" color="dimgray">基本信息</font>
	 </div>
	 </div>
	 </div>
	 </div>

	 <div style="width: 610px;" id="m" class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding"> 
	 <input name="re_edit" id="re_edit" type="hidden" value="0" >
	 <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />
	 <input name="code" id="code" type="hidden" value="<?php echo $shipping['code']?>" />
	 <input name="shipping_id" id="shipping_id" type="hidden" value="<?php echo $shipping['id']?>" />

	 <div class="x-form-item" >
		<label style="width: 180px;color:dimgray;" class="x-form-item-label">配送地区名称:</label>
		<div class="x-form-element" style="padding-left: 200px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20" name="name" id="name" type="text" value="<?php echo $editing['name']?>" >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>
	 <?php if($shipping['code'] != 'cod'){  ?>
	 
      <div class="x-form-item" >
		<label style="width: 180px;color:dimgray;" class="x-form-item-label">费用计算方式:</label>
		<div class="x-form-element" style="padding-left: 200px;">
		 <input type="radio"    name="fee_compute_mode" value="by_weight" onclick="compute_mode('<?php echo $shipping['code']; ?>','weight')" <?php  if($editing['fee_compute_mode'] != 'by_number'){ ?> checked="true" <?php }?> />按重量计算
         <input type="radio"   name="fee_compute_mode" value="by_number" onclick="compute_mode('<?php echo $shipping['code']; ?>','number')" <?php if($editing['fee_compute_mode'] == 'by_number'){ ?> checked="true" <?php }?>  />按商品件数计算
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <?php foreach($configure as $value): ?>
		 <div class="x-form-item" id="<?php echo $value['name'] ?>">
			<label style="width: 180px;color:dimgray;" class="x-form-item-label"> <?php  echo $value['label']  ?></label>
			<div class="x-form-element" style="padding-left: 200px;">
			 <input style="width: 222px;" class="x-form-text x-form-field x-form-bg-invalid" size="20" name="<?php echo $value['name'] ?>"  type="text" value="<?php echo $value['value'];?>" >
			</div>
			<div class="x-form-clear-left"></div>
		 </div>  
     <?php   endforeach;   ?>
	 
	<?php } ?>
	 
	 </div>
	 </div>
     
	 <!-- 所辖地区  -->
	 <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
	 <div class="x-panel-bwrap">
	 <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
	 <div class="bottomLine">
	 <font class="lineTitle" color="dimgray">所辖地区</font>
	 </div>
	 </div>
	 </div>
	 </div>

	 <div style="" id="m" class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding">
       <?php if($editing['id']) {?>
       <div class="x-form-item" >
		   <label style="width: 80px;color:dimgray;" class="x-form-item-label"></label>
		   <div class="x-form-element" style="padding-left: 40px;">
		   <?php foreach($area_regions as $value): ?>
		       <input type="checkbox" name="regions[]" value="<?php echo $value['region_id'] ?>" checked="true" /><?php echo $value['area']; ?>&nbsp;&nbsp;
		   <?php endforeach; ?>
	      </div><div class="x-form-clear-left"></div>
	   </div>
	   <?php } ?>

	   <div class="x-form-item" >
		   <label style="width: 80px;color:dimgray;" class="x-form-item-label"></label>
		   <div class="x-form-element" style="padding-left: 40px;">
		   <select name="country_id" id="country_id"  style="width:100px;">
		     <option value="">国家</option>
		     <option value="1">中国</option>
		   </select>

		   <?php
		    $data['province_selected'] = '';
			$data['city_selected'] = '';
			$data['district_selected'] = '';
			$this->load->view('widget/district_select',$data)
		   ?>
	      </div><div class="x-form-clear-left"></div>
	   </div>

	 </div>
	 </div>
	 <!-- /所辖地区 -->

  </form>
  </div>	
    <!-- /表单 -->

</div>
</body>
</html>
<script language="JavaScript"> 
<!--

/**
 * 初始化费用计算方式
 */
 
<?php if($editing['fee_compute_mode'] != 'by_number' ){ ?>

    compute_mode('<?php echo $shipping['code']; ?>','weight');

<?php } else{ ?>

    compute_mode('<?php echo $shipping['code']; ?>','number');

<?php }  ?>

//-->
</script>

