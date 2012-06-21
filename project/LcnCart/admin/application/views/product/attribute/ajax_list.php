     <!-- 内容 -->
	 <div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >
	    <div class="list-div " id="listDiv" style="margin-bottom:20px;">
		<table cellpadding="3" cellspacing="0" id="listTable" >		
		 <tbody>
		 <?php foreach ($attributes as $value){ ?>
		 <tr class="x-grid3-row ">
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_set_name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['attr_type_name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo char_limit3($value['option_values'],15); ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['default_value'] ?></div></td>
			<td><div class="x-grid3-cell-inner ">
			 <a href='<?php echo site_url('attribute/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='#' onclick="delete_a('<?php echo $value['id'];?>')" style="text-decoration:none" alt='删除' title='删除'>
			 <img src="<?php echo base_url()?>images/icon_drop.gif" border="0" width="16" height="16">
			 </a>
			</div></td>
		 </tr>
		 <?php } ?>
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