   <div style="overflow:auto;border-left:0 solid #99bbe8;" id="content" class="x-panel-body border-top   
	 border-nobottom" >
     <div class="list-div" id="listDiv" >
		<table cellpadding="3" cellspacing="0" id="listTable" >		 
          <tbody>
		  <?php  foreach ($orders as $order): ?>
		  <tr class="x-grid3-row " >
			<td><div class="x-grid3-cell-inner "><?php echo $order['id'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['order_sn'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['place_at'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['consignee'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $order['total_price'] ?></div></td>
			<td><div class="x-grid3-cell-inner ">
			<?php
            switch ($order['status']){
			   case 1 : echo '未确认';break;
			   case 2 : echo '已确认';break;
			   case 3 : echo '已付款';break;
			   case 4 : echo '确认付款';break;
			   case 5 : echo '确认货到已付款';break;
			   case 6 : echo '已发货';break;
			   case 7 : echo '收货并确认';break;
			   case 8 : echo '收货并付款';break;
			   case 9 : echo '订单完成';break;
			   case 10 : echo '已取消';break;
			   case 11 : echo '已退款';break;
			   case 12 : echo '已退货';break;
		    } 		
			?>

			</div></td>
			<td ><div class="x-grid3-cell-inner ">
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='放入回收站' onclick="in_recycle('<?php echo $order['id']?>')">
			 <img src="<?php echo base_url()?>images/icon_trash.gif" border="0" width="16" height="16" alt='放入回收站'></a>&nbsp;&nbsp;
			 <a href='<?php echo site_url('order/edit/id/'.$order['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16"></a>
			</div></td>
		  </tr>
		  <?php  endforeach; ?>
		  </tbody>
		</table>
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
