<?php
if ($this->config->item('use_username', 'fx_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<tr>
		<td><label for="login">Email or login</label></td>
		<td><input type="text" name="login" value="" id="login" /></td>
		<td style="color: red;">
		<?php echo form_error('login'); ?>
		<?php echo isset($errors['login'])?$errors['login']:''; ?>
		</td>
	</tr>
</table>
<input type="submit" name="reset" value="Get a new password"  />
<?php echo form_close(); ?>