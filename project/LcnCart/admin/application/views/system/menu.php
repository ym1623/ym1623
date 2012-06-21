<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="<?php echo base_url()?>css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/menu.js"></script>
</head>

<body  class=" x-border-layout-ct" style="position: relative;">

<div id="menu" class="x-panel x-border-panel x-tree " style="width: 225px; position: absolute; visibility: visible; left:5px; z-index:1; height:100% ">

  <div id="menu-head" class="x-panel-header">
    <a href="#" class="toggleMenu"><div  class="x-tool x-tool-toggle x-tool-collapse-west" > </div></a>
    <span class="" >系统管理</span>
  </div>

  <div  class="x-panel-bwrap ">

	<div id="cmm-func" class="x-panel-tbar">
	<div  class="x-toolbar">
	  <table cellspacing="0">
	  <tr>
	      <td class="x-btn x-btn-text-icon">
			<table  cellspacing="0" cellpadding="0" border="0" style="width: auto;"><tbody><tr>
			<td class="x-btn-left"><i> </i></td>
			<td class="x-btn-center">
			<!--<a  href="<?php //echo site_url('system')?>" target="main-frame"  style="text-decoration:none;"><em ><button  class="x-btn-text add-feed" type="button" onclick="parent.$('main-frame').src='<?php //echo site_url('payment');?>'">待定</button></em></a>-->
			</td>
			<td class="x-btn-right"><i> </i></td>
			</tr></tbody></table>
		  </td>
	  </tr>
	  </table>
	</div>
	</div>

	<div id="menu-body" class="x-panel-body" style="overflow: auto; width: 223px; ">
    <ul  class="x-tree-root-ct x-tree-no-lines">
	<div class="x-tree-root-node">
    <li class="x-tree-node">
	
	  <!-- 支付方式 -->
	  <div  class="x-tree-node-el x-unselectable feeds-node" >
		  <img  class="x-tree-ec-icon x-tree-elbow-end-minus" src="<?php echo base_url()?>images/s.gif" title="关闭">
		  <img class="x-tree-node-icon"  src="<?php echo base_url()?>images/s.gif"/>
		  <span >支付方式</span>
	  </div>   
	  <ul  style="" class="x-tree-node-ct">
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed x-tree-selected" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('payment')?>" target="main-frame" style=""><span >支付列表</span></a></div></li>     	
      </ul>

	  <!-- 配送方式 -->
	  <div  class="x-tree-node-el x-unselectable feeds-node" >
		  <img  class="x-tree-ec-icon x-tree-elbow-end-minus" src="<?php echo base_url()?>images/s.gif" title="关闭">
		  <img class="x-tree-node-icon"  src="<?php echo base_url()?>images/s.gif"/>
		  <span >配送方式</span>
	  </div>   
	  <ul  style="" class="x-tree-node-ct">
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('shipping')?>" target="main-frame" style=""><span >配送列表</span></a></div></li>     	
      </ul>

	  <!-- 权限管理 -->
	  <div  class="x-tree-node-el x-unselectable feeds-node" >
		  <img  class="x-tree-ec-icon x-tree-elbow-end-minus" src="<?php echo base_url()?>images/s.gif" title="关闭">
		  <img class="x-tree-node-icon"  src="<?php echo base_url()?>images/s.gif"/>
		  <span >权限管理</span>
	  </div>   
	  <ul  style="" class="x-tree-node-ct">
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('admin_user')?>" target="main-frame" style=""><span >管理员列表</span></a></div></li>  

	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon add-feed" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('admin_user/add')?>" target="main-frame" style=""><span >添加管理员</span></a></div></li> 
	  
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('role')?>" target="main-frame" style=""><span >角色列表</span></a></div></li>  

	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf x-unselectable feed" ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon add-feed" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('role/add')?>" target="main-frame" style=""><span >添加角色</span></a></div></li>
      </ul>
     	  
    </li>
    </div>
    </ul>
    </div>

  </div>

</div><!-- /menu -->

<div id="menu-xcollapsed" class="x-layout-collapsed x-layout-collapsed-west" style="display: none; width: 20px; position: absolute; visibility: visible; left: 5px;  z-index: 20;">
<a href="#" class="toggleMenu"><div class="x-tool x-tool-expand-west" ></div></a> 
</div>

</body>
</html>

