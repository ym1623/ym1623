  <div class="o_write">
	<h1>支付及配送方式&nbsp;<a id="linkPayTypeShipType" href="javascript:void(0)" onclick="close_payTypeAndShipType(this);">[关闭]</a></h1>
	<div class="middle" id="part_payType">
	  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr>
		<td style="width: 240px;"><div class="grouptitle">支付方式</div></td>
		<td style="border-bottom: 1px solid rgb(238, 238, 238);">备注</td>
		</tr></tbody>
	  </table>
      <?php foreach($payments as $payment):?>
	  <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		<tr>
		  <td style="width: 240px;" align="left" valign="top">
		  <input name="payment_id"  value="<?php echo $payment['id']; ?>" type="radio" <?php  if($payment['id'] == $payment_id){ echo 'checked="checked"';}?> >
		  <label style="margin-left: 2px;" ><?php echo $payment['name']; ?> </label></td>
		  <td class="gray" valign="top"></td>
		</tr>
	  </tbody></table>		  
	  <?php endforeach; ?>
	</div>
	<div class="middle" id="part_shipType" style="margin-top: 8px;">
	  <table id="ShipMentTab" align="enter" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		<tr>
		<td style="border-bottom: 1px solid rgb(238, 238, 238);" align="left" valign="top" width="130px" height="24"><div class="grouptitle">配送方式</div></td><td style="border-bottom: 1px solid rgb(238, 238, 238);" align="left" valign="top" width="155px">运费</td>
		<td style="border-bottom: 1px solid rgb(238, 238, 238);" align="left" valign="top">备注</td>
		</tr>
	  </tbody></table>
      <?php foreach($shippings as $shipping):?>
	  <table id="ShipMentTab" align="enter" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>
		<tr>
		  <td align="left" valign="top" width="130px" height="24"><input name="shipping_id" value="<?php echo $shipping['shipping_id']; ?>" type="radio" <?php  if($shipping['shipping_id'] == $shipping_id){ echo 'checked="checked"';}?>><label style="margin-left: 2px;" for="IdShipmentType70"><?php echo $shipping['shipping_name']; ?></label></td>
		  <td align="left" valign="top" width="155px" class="shipping_fee"><?php echo $shipping['fee']; ?>元</td>
          <td class="gray" align="left" valign="top"><?php echo $shipping['desc']; ?></td>
		</tr>
	  </tbody></table>
	  <?php endforeach; ?>
	</div>
	<div class="footer">
	  <input class="btn" value="保存支付方式及配送方式" onclick="savePayTypeAndShipType(this)" type="button">
	</div>
  </div>