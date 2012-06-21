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

/**
 * 提交验证
 */
var userID = "<?php echo $editing['id']?>";
 
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

  if (userID){
    var pwd_html = $('#chnage_pwd_s').html();
	$('#chnage_pwd_s').empty();

	$('#chnage_pwd').click(function(){ 
	  if (this.checked) { 
	    $('#chnage_pwd_s').html(pwd_html);
		form();
	  }else{
        $('#chnage_pwd_s').empty();
	  }
    });
  }

});



$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});

//-->
</script>
</head>
<body  class="x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px; ">

  <!-- 当前菜单 -->
  <div id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div class="x-tab-strip-wrap">
  <ul class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text"><?php echo $header_text; ?></span>
  </span>
  </em>
  </a>
  </li>
  <li class="x-tab-edge"></li>
  <div class="x-clear"></div>
  </ul>
  </div>
  </div>

  <!-- 工具栏 -->
  <div id="tool" class="x-panel-tbar x-panel-tbar-noheader"><div class="x-toolbar "><table cellspacing="0"><tbody><tr>
	
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

	<td><span class="ytb-sep"></span></td>

	<td onClick="window.location.href='<?php echo site_url('admin_user')?>'"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-owner" type="button">列表</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>
    
	<?php if ($editing['id']){ ?>
	<td><span class="ytb-sep"></span></td>
	<td onClick="window.location.href='<?php echo site_url('admin_user/add')?>'"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-addnew" type="button">新增</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>
	<?php } ?>

	</tr></tbody></table></div></div>
  <!-- /工具栏 -->

  <!-- 表单 -->
	<div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " >

	 <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
	 <div class="x-panel-bwrap">
	 <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
	 <div class="bottomLine">
	 <font class="lineTitle" color="dimgray">基本信息</font>
	 </div>
	 </div>
	 </div>
	 </div>

	 <div class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding"> 
	 <form style="padding: 5px 5px 0pt; " class=" x-form" method="post" action="<?php echo site_url('admin_user/save')?>" name="form" > 
	 <input name="re_edit" id="re_edit" type="hidden" value="0" >
	 <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />

	 <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">用户名:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20" name="name" id="name" type="text" value="<?php echo $editing['name']?>"  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">Email地址:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required x-form-email" size="20" name="email" id="email" type="text" value="<?php echo $editing['email']?>"  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 
     
	 <?php if ($editing['id']){ ?>

	 <div class="x-form-item" >
		  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">
		  修改密码:</label>
		  <div class="x-form-element"  style="padding-left: 80px;">
		  <input type="checkbox" class=" x-form-field " id="chnage_pwd" name="chnage_pwd" value="1"   />
		  </div>
		  <div class="x-form-clear-left"></div>
	 </div>
     
	 <div id="chnage_pwd_s" >
	  <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">旧密码:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20" name="old_pw" id="old_pw" type="password" value=""  >		
		</div>
		<div class="x-form-clear-left"></div>
	  </div>

	  <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">新密码:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required x-form-pwd_c" size="20" name="new_pw" id="new_pw" type="password" value=""  >
		</div>
		<div class="x-form-clear-left"></div>
	  </div>

	  <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">确认密码:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required x-form-pwd_cc" size="20" name="pwd_confirm" id="pwd_confirm" type="password" value=""  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 </div>

	 <?php  } else{?>

	 <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">密码:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required x-form-pwd_c" size="20" name="password" id="password" type="password" value=""  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">确认密码:</label>
		<div class="x-form-element" style="padding-left: 60px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required x-form-pwd_cc" size="20" name="pwd_confirm" id="pwd_confirm" type="password" value=""  >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>

	 <?php   }?>

	 <div class="x-form-item" >
		  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">角色:</label>
		  <div class="x-form-element"  style="padding-left: 80px;">
		  <select name='role_id'  style="width:230px;height:22px;">
		  <?php if($editing['id']){?><option value='0'  >请选择...</option><?php }?>
		  <?php foreach($roles as $value) :  ?>
		  <option value='<?php echo $value['id'];  ?>' <?php  if($value['id']==$editing['role_id']) echo 'selected=selected'?>  ><?php echo $value['name'];  ?></option>
		  <?php endforeach; ?>
		  </select>
		  </div>
		  <div class="x-form-clear-left"></div>
		  </div>
	 	 		
	 </form>
	 </div>
	 </div>
	</div>	
  <!-- /表单 -->

</div>
</body>
</html>
