 <!-- 内容 -->
	  <div style="overflow:auto;border-left:0 solid #99bbe8;border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >

	  <div class="list-div " id="listDiv" style="margin-bottom:20px;">
		<table cellpadding="3" cellspacing="0" id="listTable" >
		  <tbody>        
		  <?php  foreach ($customers as $value){ ?>
		  <tr class="x-grid3-row "  >
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['email'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['dob'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['registry_at'] ?></div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_active']?'yes.gif':'no.gif'); ?>" >
			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			<img src="<?php echo base_url()?>images/<?php echo ($value['is_lock']?'yes.gif':'no.gif'); ?>" >
			</div></td>
			<td ><div class="x-grid3-cell-inner ">			 
			 <a href='<?php echo site_url('customer/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='<?php echo site_url('customer/edit_address/id/'.$value['id'])?>' style="text-decoration:none" alt='地址簿' title='地址簿'>
			 <img src="<?php echo base_url()?>images/book_open.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='#' onclick="return delete_submit('<?php echo $value['id'];?>','<?php echo site_url('customer/delete/id/'.$value['id'])?>',this,'顾客',true)" style="text-decoration:none" alt='删除' title='删除'>
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
        <!-- /内容 -->