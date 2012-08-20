<?php
/************************************************************
* FILE_NAME : avatar.php   
* FILE_PATH : D:\AppServ\www\ucflash\classes\application\avatar.php
* 头像处理类
*
* @copyright Copyright (c) 2009 - 2010 www.buynow.com.cn 
* @author BUYNOW项目组 deck
* 
* @version Mon Jul 05 13:15:06 CST 2010
**************************************************************/

class Avatar{
	var $input = array();
	/**
	 * 字符串加密以及解密函数
	 *
	 * @param string $string	原文或者密文
	 * @param string $operation	操作(ENCODE | DECODE), 默认为 DECODE
	 * @param string $key		密钥
	 * @param int $expiry		密文有效期, 加密时候有效， 单位 秒，0 为永久有效
	 * @return string		处理后的 原文或者 经过 base64_encode 处理后的密文
	 *
	 * @example
	 *
	 * 	$a = authcode('abc', 'ENCODE', 'key');
	 * 	$b = authcode($a, 'DECODE', 'key');  // $b(abc)
	 *
	 * 	$a = authcode('abc', 'ENCODE', 'key', 3600);
	 * 	$b = authcode('abc', 'DECODE', 'key'); // 在一个小时内，$b(abc)，否则 $b 为空
	 */
	function uc_authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	
		$ckey_length = 4;	//note 随机密钥长度 取值 0-32;
					//note 加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
					//note 取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
					//note 当此值为 0 时，则不产生随机密钥
	
		$key = md5($key ? $key : UC_KEY);
		$keya = md5(substr($key, 0, 16));
		$keyb = md5(substr($key, 16, 16));
		$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
	
		$cryptkey = $keya.md5($keya.$keyc);
		$key_length = strlen($cryptkey);
	
		$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
		$string_length = strlen($string);
	
		$result = '';
		$box = range(0, 255);
	
		$rndkey = array();
		for($i = 0; $i <= 255; $i++) {
			$rndkey[$i] = ord($cryptkey[$i % $key_length]);
		}
	
		for($j = $i = 0; $i < 256; $i++) {
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}
	
		for($a = $j = $i = 0; $i < $string_length; $i++) {
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp;
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}
	
		if($operation == 'DECODE') {
			if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
				return substr($result, 26);
			} else {
				return '';
			}
		} else {
			return $keyc.str_replace('=', '', base64_encode($result));
		}
	}
	
	function uc_api_input($data) {
		$s = urlencode($this->uc_authcode($data.'&agent='.md5($_SERVER['HTTP_USER_AGENT'])."&time=".time(), 'ENCODE', 'deck'));
		return $s;
	}
	
	/**
	 * 修改头像
	 *
	 * @param	int		$uid	用户ID
	 * @param	string	$type	头像类型 real OR virtual 默认为 virtual
	 * @return	string
	 */
	function uc_avatar($uid, $type = 'virtual', $returnhtml = 1) {
		$uid = intval($uid);
		$uc_input = $this->uc_api_input("uid=$uid");
		$uc_avatarflash = UC_API.'/images/camera.swf?inajax=1&appid=1&input='.$uc_input.'&agent='.md5($_SERVER['HTTP_USER_AGENT']).'&ucapi='.urlencode(UC_API).'&avatartype='.$type;
		if($returnhtml) {
			return '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="447" height="477" id="mycamera" align="middle">
				<param name="allowScriptAccess" value="always" />
				<param name="scale" value="exactfit" />
				<param name="wmode" value="transparent" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="movie" value="'.$uc_avatarflash.'" />
				<param name="menu" value="false" />
				<embed src="'.$uc_avatarflash.'" quality="high" bgcolor="#ffffff" width="447" height="477" name="mycamera" align="middle" allowScriptAccess="always" allowFullScreen="false" scale="exactfit"  wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>';
		} else {
			return array(
				'width', '447',
				'height', '477',
				'scale', 'exactfit',
				'src', $uc_avatarflash,
				'id', 'mycamera',
				'name', 'mycamera',
				'quality','high',
				'bgcolor','#ffffff',
				'wmode','transparent',
				'menu', 'false',
				'swLiveConnect', 'true',
				'allowScriptAccess', 'always'
			);
		}
	}
	
	function daddslashes($string, $force = 0, $strip = FALSE) {
		if(!MAGIC_QUOTES_GPC || $force) {
			if(is_array($string)) {
				foreach($string as $key => $val) {
					$string[$key] = $this->daddslashes($val, $force, $strip);
				}
			} else {
				$string = addslashes($strip ? stripslashes($string) : $string);
			}
		}
		return $string;
	}
	
	function getgpc($k, $var='R') {
		switch($var) {
			case 'G': $var = &$_GET; break;
			case 'P': $var = &$_POST; break;
			case 'C': $var = &$_COOKIE; break;
			case 'R': $var = &$_REQUEST; break;
		}
		return isset($var[$k]) ? $var[$k] : NULL;
	}
	
		function get_home($uid) {
		$uid = sprintf("%09d", $uid);
		$dir1 = substr($uid, 0, 3);
		$dir2 = substr($uid, 3, 2);
		$dir3 = substr($uid, 5, 2);
		return $dir1.'/'.$dir2.'/'.$dir3;
	}
	
	function set_home($uid, $dir = '.') {
		$uid = sprintf("%09d", $uid);
		$dir1 = substr($uid, 0, 3);
		$dir2 = substr($uid, 3, 2);
		$dir3 = substr($uid, 5, 2);
		!is_dir($dir.'/'.$dir1) && mkdir($dir.'/'.$dir1, 0777);
		!is_dir($dir.'/'.$dir1.'/'.$dir2) && mkdir($dir.'/'.$dir1.'/'.$dir2, 0777);
		!is_dir($dir.'/'.$dir1.'/'.$dir2.'/'.$dir3) && mkdir($dir.'/'.$dir1.'/'.$dir2.'/'.$dir3, 0777);
	}
	
	function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {

		$ckey_length = 4;

		$key = md5($key ? $key : UC_KEY);
		$keya = md5(substr($key, 0, 16));
		$keyb = md5(substr($key, 16, 16));
		$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

		$cryptkey = $keya.md5($keya.$keyc);
		$key_length = strlen($cryptkey);

		$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
		$string_length = strlen($string);

		$result = '';
		$box = range(0, 255);

		$rndkey = array();
		for($i = 0; $i <= 255; $i++) {
			$rndkey[$i] = ord($cryptkey[$i % $key_length]);
		}

		for($j = $i = 0; $i < 256; $i++) {
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}

		for($a = $j = $i = 0; $i < $string_length; $i++) {
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp;
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}

		if($operation == 'DECODE') {
			if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
				return substr($result, 26);
			} else {
				return '';
			}
		} else {
			return $keyc.str_replace('=', '', base64_encode($result));
		}

	}

	function input($k) {
		return isset($this->input[$k]) ? (is_array($this->input[$k]) ? $this->input[$k] : trim($this->input[$k])) : NULL;
	}

	function init_input($getagent = '') {
		$input = $this->getgpc('input', 'R');
		
		if($input) {
			$input = $this->authcode($input, 'DECODE', 'deck');
			
			parse_str($input, $this->input);
			$this->input = $this->daddslashes($this->input, 1, TRUE);
			$agent = $getagent ? $getagent : $this->input['agent'];

			if(($getagent && $getagent != $this->input['agent']) || (!$getagent && md5($_SERVER['HTTP_USER_AGENT']) != $agent)) {
				exit('Access denied for agent changed');
			} elseif($this->time - $this->input('time') > 3600) {
				exit('Authorization has expired');
			}
		}
		if(empty($this->input)) {
			exit('Invalid input');
		}
	}
	
	function onuploadavatar() {
		
		@header("Expires: 0");
		@header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", FALSE);
		@header("Pragma: no-cache");
		//header("Content-type: application/xml; charset=utf-8");
		
		$this->init_input($this->getgpc('agent', 'G'));

		$uid = $this->input('uid');
		if(empty($uid)) {
			return -1;
		}
		if(empty($_FILES['Filedata'])) {
			return -3;
		}

		list($width, $height, $type, $attr) = getimagesize($_FILES['Filedata']['tmp_name']);
		$imgtype = array(1 => '.gif', 2 => '.jpg', 3 => '.png');
		$filetype = $imgtype[$type];
		$tmpavatar = UC_DATADIR.'./tmp/upload'.$uid.$filetype;
		file_exists($tmpavatar) && @unlink($tmpavatar);
		if(@copy($_FILES['Filedata']['tmp_name'], $tmpavatar) || @move_uploaded_file($_FILES['Filedata']['tmp_name'], $tmpavatar)) {
			@unlink($_FILES['Filedata']['tmp_name']);
			list($width, $height, $type, $attr) = getimagesize($tmpavatar);
			if($width < 10 || $height < 10 || $type == 4) {
				@unlink($tmpavatar);
				return -2;
			}
		} else {
			@unlink($_FILES['Filedata']['tmp_name']);
			return -4;
		}
		$avatarurl = UC_DATAURL.'/tmp/upload'.$uid.$filetype;
		return $avatarurl;
	}

	function onrectavatar() {
		@header("Expires: 0");
		@header("Cache-Control: private, post-check=0, pre-check=0, max-age=0", FALSE);
		@header("Pragma: no-cache");
		header("Content-type: application/xml; charset=utf-8");
		$this->init_input($this->getgpc('agent'));
		$uid = $this->input('uid');
		if(empty($uid)) {
			return '<root><message type="error" value="-1" /></root>';
		}
		$home = $this->get_home($uid);
		if(!is_dir(UC_DATADIR.'./avatar/'.$home)) {
			$this->set_home($uid, UC_DATADIR.'./avatar/');
		}
		$avatartype = $this->getgpc('avatartype', 'G') == 'real' ? 'real' : 'virtual';
		$bigavatarfile = UC_DATADIR.'./avatar/'.$this->get_avatar($uid, 'big', $avatartype);
		$middleavatarfile = UC_DATADIR.'./avatar/'.$this->get_avatar($uid, 'middle', $avatartype);
		$smallavatarfile = UC_DATADIR.'./avatar/'.$this->get_avatar($uid, 'small', $avatartype);
		$bigavatar = $this->flashdata_decode($this->getgpc('avatar1', 'P'));
		$middleavatar = $this->flashdata_decode($this->getgpc('avatar2', 'P'));
		$smallavatar = $this->flashdata_decode($this->getgpc('avatar3', 'P'));
		if(!$bigavatar || !$middleavatar || !$smallavatar) {
			return '<root><message type="error" value="-2" /></root>';
		}

		$success = 1;
		$fp = @fopen($bigavatarfile, 'wb');
		@fwrite($fp, $bigavatar);
		@fclose($fp);

		$fp = @fopen($middleavatarfile, 'wb');
		@fwrite($fp, $middleavatar);
		@fclose($fp);

		$fp = @fopen($smallavatarfile, 'wb');
		@fwrite($fp, $smallavatar);
		@fclose($fp);

		$biginfo = @getimagesize($bigavatarfile);
		$middleinfo = @getimagesize($middleavatarfile);
		$smallinfo = @getimagesize($smallavatarfile);
		if(!$biginfo || !$middleinfo || !$smallinfo || $biginfo[2] == 4 || $middleinfo[2] == 4 || $smallinfo[2] == 4) {
			file_exists($bigavatarfile) && unlink($bigavatarfile);
			file_exists($middleavatarfile) && unlink($middleavatarfile);
			file_exists($smallavatarfile) && unlink($smallavatarfile);
			$success = 0;
		}

		$filetype = '.jpg';
		@unlink(UC_DATADIR.'./tmp/upload'.$uid.$filetype);

		if($success) {
			return '<?xml version="1.0" ?><root><face success="1"/></root>';
		} else {
			return '<?xml version="1.0" ?><root><face success="0"/></root>';
		}
	}


	function flashdata_decode($s) {
		$r = '';
		$l = strlen($s);
		for($i=0; $i<$l; $i=$i+2) {
			$k1 = ord($s[$i]) - 48;
			$k1 -= $k1 > 9 ? 7 : 0;
			$k2 = ord($s[$i+1]) - 48;
			$k2 -= $k2 > 9 ? 7 : 0;
			$r .= chr($k1 << 4 | $k2);
		}
		return $r;
	}

	function get_avatar($uid, $size = 'big', $type = '') {
		$size = in_array($size, array('big', 'middle', 'small')) ? $size : 'big';
		$uid = abs(intval($uid));
		$uid = sprintf("%09d", $uid);
		$dir1 = substr($uid, 0, 3);
		$dir2 = substr($uid, 3, 2);
		$dir3 = substr($uid, 5, 2);
		$typeadd = $type == 'real' ? '_real' : '';
		return  $dir1.'/'.$dir2.'/'.$dir3.'/'.substr($uid, -2).$typeadd."_avatar_$size.jpg";
	}
	
	//处理头像
	function avatar_show($uid, $size='small', $returnsrc = FALSE) {
		
		$size = in_array($size, array('big', 'middle', 'small')) ? $size : 'small';
		$avatarfile = $this->avatar_file($uid, $size);
		return $returnsrc ? UC_DATAURL.'/avatar/'.$avatarfile : '<img src="'.UC_DATAURL.'/avatar/'.$avatarfile.'" onerror="this.onerror=null;this.src=\''.UC_DATAURL.'/images/noavatar_'.$size.'.gif\'">';
	}
	
	//得到头像
	function avatar_file($uid, $size) {
		global $_SGLOBAL, $_SCONFIG;
	
		$type = empty($_SCONFIG['avatarreal'])?'virtual':'real';
		$var = "avatarfile_{$uid}_{$size}_{$type}";
		if(empty($_SGLOBAL[$var])) {
			$uid = abs(intval($uid));
			$uid = sprintf("%09d", $uid);
			$dir1 = substr($uid, 0, 3);
			$dir2 = substr($uid, 3, 2);
			$dir3 = substr($uid, 5, 2);
			$typeadd = $type == 'real' ? '_real' : '';
			$_SGLOBAL[$var] = $dir1.'/'.$dir2.'/'.$dir3.'/'.substr($uid, -2).$typeadd."_avatar_$size.jpg";
		}
		return $_SGLOBAL[$var];
	}
}
?>