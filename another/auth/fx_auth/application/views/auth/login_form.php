<?php

if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}

$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?=form_open($this->uri->uri_string()) ?>
<table>
	<tr>
		<td><?php echo form_label($login_label, 'login'); ?></td>
		<td><input type="text" name="login" value="" id="login" /></td>
		<td style="color: red;">
			<?=form_error('login') ?>
			<?php echo isset($errors['login'])?$errors['login']:''; ?>
		</td>
	</tr>
	<tr>
		<td><label for="password">Password</label></td>
		<td><input type="password" name="password" value="" id="password" /></td>
		<td style="color: red;">
			<?=form_error('password') ?>
			<?php echo isset($errors['password'])?$errors['password']:''; ?>
		</td>
	</tr>
	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?=form_error('recaptcha_response_field') ?></td>
		<?=$recaptcha_html ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?=form_label('Confirmation Code', $captcha['id']) ?></td>
		<td><?=form_input($captcha) ?></td>
		<td style="color: red;"><?=form_error($captcha['name']) ?></td>
	</tr>
	<?php }
	} ?>
	<tr>
		<td colspan="3">
			<input type="checkbox" name="remember" value="1" id="remember"  />			
			<label for="remember">Remember me</label>
			<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
			<?php if ($this->config->item('allow_registration', 'fx_auth')) echo anchor('/auth/register/', 'Register'); ?>
		</td>
	</tr>
</table>
<input type="submit" name="submit" value="Let me in"  />
<?=form_close() ?>