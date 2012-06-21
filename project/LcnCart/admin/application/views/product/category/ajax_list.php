<table cellpadding="3" cellspacing="0" id="listTable" >		
  <tbody>
<?php  foreach ($categorys as $value){ ?>
  <tr class="x-grid3-row"  >
	<td class="<?php echo $value['level'] ?>"><div class="x-grid3-cell-inner ">
	<?php if(!$value['is_leaf']){?>
	<img src="<?php echo base_url()?>images/menu_minus.gif" width="9" height="9" border="0" style="margin-left:<?php echo $value['level']*1.3 ?>em"  />
	<?php }else{?>
	<img src="<?php echo base_url()?>images/menu_arrow.gif" width="9" height="9" border="0" style="margin-left:<?php echo $value['level']*1.3 ?>em" />
	<?php }?>
	<?php echo $value['name'] ?></div></td>
	
	<td ><div class="x-grid3-cell-inner "><?php echo $value['pro_count'] ?></div></td>

	<td ><div class="x-grid3-cell-inner "><?php echo $value['sort_order'] ?></div></td>

	<td ><div class="x-grid3-cell-inner ">
	 <a href='<?php echo site_url('category')?>' style="text-decoration:none" alt='浏览' title='浏览'>
	 <img src="<?php echo base_url()?>images/icon_view.gif" border="0" width="16" height="16">
	 </a>&nbsp;&nbsp;
	 <a href='<?php echo site_url('category/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
	 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
	 </a>&nbsp;&nbsp;
	 <a href='#' onclick="delete_a('<?php echo $value['id'];?>')" style="text-decoration:none" alt='删除' title='删除'>
	 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
	 </a>
	</div>
	</td>
  </tr>
  
  <?php  } ?>
  </tbody>
 </table>