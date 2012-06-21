 <div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >
	  <div class="list-div " id="listDiv" style="margin-bottom:20px;">	      
	  <table cellpadding="3" cellspacing="0" id="listTable" >		          
	  <tbody>
	  <?php  foreach ($products as $value){ ?>
	  <tr class="x-grid3-row " >
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td ><div class="x-grid3-cell-inner " ><span onclick="listEdit(this, 'name', <?php echo $value['id'] ?>)"><?php echo $value['name']; ?></span></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['brand_name'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['attr_set_name'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['cat_name'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><span onclick="listEdit(this, 'price', <?php echo $value['id'] ?>)" ><?php echo $value['price'] ?></span></div></td>
			<td ><div class="x-grid3-cell-inner "><span onclick="listEdit(this, 'stock', <?php echo $value['id'] ?>)"><?php echo $value['stock'] ?></span></div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_on_sale']?'yes.gif':'no.gif'); ?>" onclick="listToggle(this, 'is_on_sale', <?php echo $value['id'] ?>)">
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_new']?'yes.gif':'no.gif'); ?>" onclick="listToggle(this, 'is_new', <?php echo $value['id'] ?>)">
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_hot']?'yes.gif':'no.gif'); ?>" onclick="listToggle(this, 'is_hot', <?php echo $value['id'] ?>)">
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_special_price']?'yes.gif':'no.gif'); ?>"onclick="listToggle(this, 'is_special_price', <?php echo $value['id'] ?>)">
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_commend']?'yes.gif':'no.gif'); ?>" onclick="listToggle(this, 'is_commend', <?php echo $value['id'] ?>)">
			</div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['is_on_sale']?date('Y-m-d',strtotime($value['on_sale_at'])):'' ?></div></td>
			<td ><div class="x-grid3-cell-inner ">
			 <a href='<?php echo site_url('product')?>' style="text-decoration:none" alt='浏览' title='浏览'>
			 <img src="<?php echo base_url()?>images/icon_view.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='<?php echo site_url('product/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='放入回收站' onclick="in_recycle('<?php echo $value['id']?>',this)">
			 <img src="<?php echo base_url()?>images/icon_trash.gif" border="0" width="16" height="16" alt='放入回收站'>
			 </a>
			</div></td>
		  </tr>
	  <?php  } ?>
	</tbody></table>
	</div>

	<!-- 分页显示 -->
	<?php
	$data['total_pages'] = $total_pages;
	$data['page_first'] = $page_first;
	$data['page_prev'] = $page_prev;
	$data['total_pages'] = $total_pages;
	$data['page'] = $page;
	$data['page_next'] = $page_next;
	$data['page_last'] = $page_last;
	$data['show_start'] = $show_start;
	$data['show_end'] = $show_end;
	$data['total_rows'] = $total_rows;
	$this->load->view('widget/pagination', $data)
	?>
	<!-- /分页显示 -->

</div>