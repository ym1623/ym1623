<?php
define('UC_API', 'http://localhost/ucflash');
define('UC_ROOT', ereg_replace("[\\/]{1,}","/",dirname(__FILE__)).'/');
define('UC_DATADIR', UC_ROOT.'upload');
define('UC_DATAURL', UC_API.'/upload');
//session初始化
session_start();
require_once('avatar.php');
$objAvatar = new Avatar();
$_SESSION['v5_user_id'] = 1;

if ($objAvatar->getgpc('m') == 'user'){

	unset($GLOBALS, $_ENV, $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_COOKIE_VARS, $HTTP_SERVER_VARS, $HTTP_ENV_VARS);

	$_GET		= $objAvatar->daddslashes($_GET, 1, TRUE);
	
	$_POST		= $objAvatar->daddslashes($_POST, 1, TRUE);
	
	$_COOKIE	= $objAvatar->daddslashes($_COOKIE, 1, TRUE);
	$_SERVER	= $objAvatar->daddslashes($_SERVER);
	$_FILES		= $objAvatar->daddslashes($_FILES);
	$_REQUEST	= $objAvatar->daddslashes($_REQUEST, 1, TRUE);
	
	$a = $objAvatar->getgpc('a');
	$release = intval($objAvatar->getgpc('release'));
	
	$method = 'on'.$a;

	if(method_exists($objAvatar, $method) && $a{0} != '_') {
		$data = $objAvatar->$method();
		echo is_array($data) ? $objAvatar->serialize($data, 1) : $data;
		exit;
	} elseif(method_exists($control, '_call')) {
		$data = $control->_call('on'.$a, '');
		echo is_array($data) ? $control->serialize($data, 1) : $data;
		exit;
	} else {
		exit('Action not found!');
	}
}
//头像
$avatar = $objAvatar->avatar_show($_SESSION['v5_user_id'],'big');
	
$uc_avatarflash = $objAvatar->uc_avatar(1, (empty($_SCONFIG['avatarreal'])?'virtual':'real'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>头像测试</title>
<script type="text/javascript">
function updateavatar() {
	window.location.reload();
}
</script>
</head>

<body>
------------------------------当前头像-------------------------------------------<br />
<?php echo $avatar; ?>
<br />
----------------------------上传新头像--------------------------------------------<br />
<?php echo $uc_avatarflash; ?>
</body>
</html>
