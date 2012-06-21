<?php if($total_pages>1) {?>
	<div id="page" class="x-panel-bbar x-panel-body" style="border:0 solid #99bbe8;">
	<div  class="x-toolbar x-small-editor">
	<table cellspacing="0"><tbody><tr>
	<td  id="pageFirst" title="首页" ><table style="width: auto;"  class="x-btn-wrap x-btn x-btn-icon " border="0" cellpadding="0" cellspacing="0" ><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><a href="<?php echo $page_first ?>" style="text-decoration:none" onclick="return false"><button  class="x-btn-text x-tbar-page-first" type="button">&nbsp;</button></a></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td id="pagePrev" title="上一页" ><table style="width: auto;"  class="x-btn-wrap x-btn x-btn-icon " border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><a href="<?php echo $page_prev ?>" style="text-decoration:none" onclick="return false"><button  class="x-btn-text x-tbar-page-prev" type="button">&nbsp;</button></a></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td><span  class="ytb-sep"></span></td>

	<td><span  class="ytb-text">Page</span></td>

	<td><input style="height: 14px;" id="cur-page" size="3" value="<?php  echo $page;  ?>" class="x-tbar-page-number" type="text"></td>

	<td id="totalPages"><span  class="ytb-text">of <span class="total_pages"><?php echo $total_pages  ?></span></span></td>

	<td><span  class="ytb-sep"></span></td>
	
	<td id="pageNext" title="下一页" ><table style="width: auto;"  class="x-btn-wrap x-btn x-btn-icon" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><a href="<?php echo $page_next ?>" style="text-decoration:none" onclick="return false"><button  class="x-btn-text x-tbar-page-next" type="button">&nbsp;</button></a></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td id="pageLast" title="最后一页" ><table style="width: auto;"  class="x-btn-wrap x-btn x-btn-icon " border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em><a href="<?php echo $page_last ?>" style="text-decoration:none"onclick="return false"><button  class="x-btn-text x-tbar-page-last" type="button">&nbsp;</button></a></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>

	<td><span  class="ytb-sep"></span></td>

	<td id="reLoad" title="刷新" ><table style="width: auto;"  class="x-btn-wrap x-btn x-btn-icon" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="x-btn-left"><i>&nbsp;</i></td><td class="x-btn-center"><em ><a href="<?php echo $cur_page ?>" style="text-decoration:none"onclick="return false"><button  class="x-btn-text x-tbar-loading" type="button">&nbsp;</button></a></em></td><td class="x-btn-right"><i>&nbsp;</i></td></tr></tbody></table></td>
	</tr></tbody></table>
	<div id="x-paging-info">当前记录 <?php echo $show_start; ?> - <?php echo $show_end; ?> of <span id="total_rows"><?php echo $total_rows; ?></span></div>
	</div>
	</div>
<?php }?>