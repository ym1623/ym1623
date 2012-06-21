<div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >
	  <div class="list-div " id="listDiv" style="margin-bottom:20px;">	      
	  <table cellpadding="3" cellspacing="0" id="listTable" >		          
	  </thead>
	  <tbody>
	  <?php  foreach ($products as $value){ ?>
	  <tr class="x-grid3-row " >
		<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo char_limit3($value['name'],7); ?></div></td>
		<td><div class="x-grid3-cell-inner "><?php echo char_limit3($value['brand_name'],4) ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo char_limit3($value['attr_set_name'],5) ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo char_limit3($value['cat_name'],5) ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['price'] ?></div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['stock'] ?></div></td>
		<td ><div class="x-grid3-cell-inner ">
		<img src="<?php echo base_url()?>images/<?php echo ($value['is_on_sale']?'yes.gif':'no.gif'); ?>" >
		</div></td>
		<td ><div class="x-grid3-cell-inner ">
		<img src="<?php echo base_url()?>images/<?php echo ($value['is_new']?'yes.gif':'no.gif'); ?>" >
		</div></td>
		<td ><div class="x-grid3-cell-inner ">
		<img src="<?php echo base_url()?>images/<?php echo ($value['is_hot']?'yes.gif':'no.gif'); ?>" >
		</div></td>
		<td ><div class="x-grid3-cell-inner ">
		<img src="<?php echo base_url()?>images/<?php echo ($value['is_special_price']?'yes.gif':'no.gif'); ?>">
		</div></td>
		<td ><div class="x-grid3-cell-inner ">
		<img src="<?php echo base_url()?>images/<?php echo ($value['is_commend']?'yes.gif':'no.gif'); ?>" >
		</div></td>
		<td ><div class="x-grid3-cell-inner "><?php echo $value['is_on_sale']?date('Y-m-d',strtotime($value['on_sale_at'])):'' ?></div></td>
		<td ><div class="x-grid3-cell-inner ">
		 <a href='#' id="in_recycle" style="text-decoration:none"  title='还原' onclick="reduce('<?php echo $value['id']?>',this)">
		 <img src="<?php echo base_url()?>images/icon_output.gif" border="0" width="16" height="16" alt='还原'></a>&nbsp;&nbsp;
		 <a href='#' onclick="delete_a('<?php echo $value['id'];?>')" style="text-decoration:none" alt='删除' title='删除'>
		 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
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