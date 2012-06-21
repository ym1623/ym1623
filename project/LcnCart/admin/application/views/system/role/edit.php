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

$(document).ready(function() {
  editBody();
});
$(window).resize(function(){
  editBody();
});

function check(list, obj)
{
  var frm = obj.form;

    for (i = 0; i < frm.elements.length; i++)
    {
      if (frm.elements[i].name == "action_code[]")
      {
          var regx = new RegExp(frm.elements[i].value + "(?!_)", "i");

          if (list.search(regx) > -1) frm.elements[i].checked = obj.checked;
      }
    }
}

$(document).ready(function() {

	$('#checkAll').click(function(){ 
	  if (this.checked) { 
	    $('#form').find('.action_code').attr('checked',true);
	  }else{
        $('#form').find('.action_code').attr('checked',false);
	  }
    });

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


})

//-->
</script>
<style type="text/css">
.list-div { width: 720px; border: 1px solid #BBDDE5;}
.list-div table {width: 100%;}
.list-div th {line-height: 24px;background: #BBDDE5 url("../images/th_bg.gif") repeat-x; white-space: nowrap;}
.list-div td {background: #FFF;line-height: 22px;}
.list-div td.first-cell{font-weight: bold;padding-left: 10px;}
.list-div input {vertical-align: middle;}
</style>

</head>

<body  class="x-border-layout-ct" style="position: relative;" >
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

	<td onClick="window.location.href='<?php echo site_url('role')?>'"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-owner" type="button">列表</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>
    
	<?php if ($editing['id']){ ?>
	<td><span class="ytb-sep"></span></td>
	<td onClick="window.location.href='<?php echo site_url('role/add')?>'"><table  class="x-btn-wrap x-btn x-btn-text-icon button" border="0" cellpadding="0" cellspacing="0" ><tbody><tr>
	<td class="x-btn-left"><i>&nbsp;</i></td>
	<td class="x-btn-center"><em ><button class="x-btn-text tb-addnew" type="button">新增</button></em></td>
	<td class="x-btn-right"><i></i></td>
	</tr></tbody></table></td>
	<?php } ?>

	</tr></tbody></table></div></div>
  <!-- /工具栏 -->

  <!-- 表单 -->
	<div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct " style="overflow:auto">

	 <div class="x-panel x-panel-noborder" style="padding: 10px 10px 0px;">
	 <div class="x-panel-bwrap">
	 <div class="x-panel-body x-panel-body-noheader x-panel-body-noborder">
	 <div class="bottomLine">
	 <font class="lineTitle" color="dimgray">基本信息</font>
	 </div>
	 </div>
	 </div>
	 </div>

	 <div style="width:750px;"  class="x-panel x-form-label-left ">
	 <div class="x-panel-bwrap form-padding"> 
	 <form style="padding: 5px 5px 0pt; " class=" x-form" method="post" action="<?php echo site_url('role/save')?>" name="form" id="form"> 
	 <input name="re_edit" id="re_edit" type="hidden" value="0" >
	 <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />

	 <div class="x-form-item" >
		<label style="width: 75px;color:dimgray;" class="x-form-item-label">角色名称:</label>
		<div class="x-form-element" style="padding-left: 80px;">
		 <input style="width: 222px;" class="x-form-text x-form-field x-form-required" size="20" name="name" id="name" type="text" value="<?php echo $editing['name']?>" >
		</div>
		<div class="x-form-clear-left"></div>
	 </div>	
	 
	 <div class="list-div">
		<table cellspacing='1' style="width:700px">
		<?php foreach($priv_arr as $priv):  ?>
		 <tr>
		  <td width="18%" valign="top" class="first-cell">
			<input name="chkGroup" type="checkbox" value="checkbox" onclick="check('<?php echo $priv['priv_list'] ?>',this);" class="checkbox">  <?php echo $priv['cn_name']; ?>
		  </td>
		  <td>
			<?php foreach($priv['priv'] as $key => $value):  ?>
			<div style="width:180px;float:left;">
			<label for="<?php echo $key ?>"><input type="checkbox" name="action_code[]" value="<?php echo $key ?>" id="<?php echo $key ?>"   <?php if(!empty($value['cando'])) echo 'checked'; ?> class="action_code" />
			<?php echo $value['cn_name']; ?></label>
			</div>
			<?php endforeach;  ?>
		</td></tr>
		<?php endforeach;  ?>
		  <tr>
			<td align="center" colspan="2" >
			  <input type="checkbox"  id="checkAll" value="checkbox"  />全选			  
			</td>
		  </tr>
		</table>
		</div>

	 </form>
	 </div>
	 </div>
	</div>	
  <!-- /表单 -->

</div>
</body>
</html>

