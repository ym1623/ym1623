<div class="o_show">
<h1>支付及配送方式&nbsp;<a id="linkPayTypeShipType" href="javascript:void(0)" onclick="showForm_payTypeAndShipType(this);" style="">[修改]</a></h1>
<div id="updateInfo_payType"></div>
<div class="middle">
  <table style="width: 100%;"><tbody>
	<tr>
	  <td style="text-align: right; width: 80px;">支付方式：</td><td><?php  echo $payment['name'] ?></td>
	</tr>
	<tr style="">
	  <td style="text-align: right;">配送方式：</td><td><?php  echo $shipping['name'] ?></td>
	</tr>
	<tr style="">
	  <td style="text-align: right;" >运　　费：</td><td ><?php  echo $shipping_fee; ?></td>
	</tr>
  </tbody></table>
</div>
<div class="footer"></div>
<input type="hidden"  name="payment_id" value="<?php echo $payment_id ?>">
<input type="hidden"  name="shipping_id" value="<?php echo $shipping_id ?>">
<input type="hidden"  name="shipping_fee" value="<?php echo $shipping_fee ?>">
<input type="hidden"  name="product_fee" value="<?php echo $product_fee ?>">

</div>