<?php
   /**
     * 获取允许上传的附件类型
     */
 function getAttType() {
    	return explode(',', 'rar,zip,gif,jpg,jpeg,png,bmp');
    }




/**
 * 转换附件大小单位
 *
 * @param string $fileSize 文件大小 kb
 */
function changeFileSize($fileSize){
	if($fileSize >= 1073741824){
		$fileSize = round($fileSize / 1073741824  ,2) . 'GB';
	} elseif($fileSize >= 1048576){
		$fileSize = round($fileSize / 1048576 ,2) . 'MB';
	} elseif($fileSize >= 1024){
		$fileSize = round($fileSize / 1024, 2) . 'KB';
	} else{
		$fileSize = $fileSize . '字节';
	}
	return $fileSize;
}

/**
 * 获取文件后缀
 * @param string $fileName
 */
function getFileSuffix($fileName) { 
	return strtolower(substr(strrchr($fileName, "."),1));
}

/**
 * 文件上传
 *
 * @param string $fileName 文件名
 * @param string $errorNum 错误码：$_FILES['error']
 * @param string $tmpFile 上传后的临时文件
 * @param string $fileSize 文件大小 KB
 * @param array $type 允许上传的文件类型
 * @param boolean $isIcon 是否为上传头像
 * @param boolean $is_thumbnail 是否生成缩略图
 * @return string 文件路径
 */
function uploadFile($fileName, $errorNum, $tmpFile, $fileSize, $type, $username, $isIcon=false, $is_thumbnail=1){
	if ($errorNum == 1){
		emMsg('文件大小超过系统'.ini_get('upload_max_filesize').'限制');
	}elseif ($errorNum > 1){
		emMsg('上传文件失败,错误码：'.$errorNum);
	}
	$extension  = getFileSuffix($fileName);
	if (!in_array($extension, $type)){
		emMsg('错误的文件类型');
	}
	if ($fileSize > 20971520){
		$ret = changeFileSize(20971520);
		emMsg("文件大小超出{$ret}的限制");
	}
	$uppath = 'up/'."$username" . '/';
	$fname = md5($fileName) . gmdate('YmdHis') .'.'. $extension;
	$attachpath = $uppath . $fname;
	if (!is_dir('up/')){
		umask(0);
		$ret = @mkdir('up/', 0777);
		if ($ret === false){
			emMsg('创建文件上传目录失败');
		}
	}
	if (!is_dir($uppath)){
		umask(0);
		$ret = @mkdir($uppath, 0777);
		if ($ret === false){
			emMsg('上传失败。文件上传目录up不可写');
		}
	}



	//图片生成缩略图
	$thum = $uppath . 'thum-' . $fname;
	$attach = $attachpath;
	if ($is_thumbnail) {
	    if ($isIcon && resizeImage($tmpFile, $thum, 140, 220)) {
	        $attach = $thum;
	        resizeImage($tmpFile, $uppath.'thum52-'. $fname, 52, 52);
	    } elseif (resizeImage($tmpFile, $thum, 420, 460)){
	        $attach = $thum;
	    }
	}

	if (@is_uploaded_file($tmpFile)){
		if (@!move_uploaded_file($tmpFile ,$attachpath)){
			@unlink($tmpFile);
			emMsg('上传失败。文件上传目录(up)不可写');
		}
		chmod($attachpath, 0777);
	}
	return 	$attach;
}

/**
 * 图片生成缩略图
 *
 * @param string $img 预缩略的图片
 * @param string $thum_path 生成缩略图路径
 * @param int $max_w 缩略图最大宽度 px
 * @param int $max_h 缩略图最大高度 px
 * @return unknown
 */
function resizeImage($img, $thum_path, $max_w, $max_h) {
	//仅支持PNG,JPG图片的缩略
	if (!in_array(getFileSuffix($thum_path), array('jpg','png','jpeg'))) {
		return false;
	}
	//是否支持GD
	if (!function_exists('ImageCreate')) {
		return false;
	}

	$size = chImageSize($img, $max_w, $max_h);
    $newwidth = $size['w'];
	$newheight = $size['h'];
	$w = $size['rc_w'];
	$h = $size['rc_h'];
	if ($w <= $max_w && $h <= $max_h){
		return false;
	}
	return imageCropAndResize($img, $thum_path, 0, 0, 0, 0, $newwidth, $newheight, $w, $h);
}

/**
 * 裁剪、缩放图片
 *
 * @param string $src_image 原始图
 * @param string $dst_path 裁剪后的图片保存路径
 * @param int $dst_x 新图坐标x
 * @param int $dst_y 新图坐标y
 * @param int $src_x 原图坐标x
 * @param int $src_y 原图坐标y
 * @param int $dst_w 新图宽度
 * @param int $dst_h 新图高度
 * @param int $src_w 原图宽度
 * @param int $src_h 原图高度
 */
function imageCropAndResize($src_image, $dst_path, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {
	if (function_exists('imagecreatefromstring')){
		$src_img = imagecreatefromstring(file_get_contents($src_image));
	} else {
		return false;
	}

	if (function_exists('imagecopyresampled')){
		$new_img = imagecreatetruecolor($dst_w, $dst_h);
		imagecopyresampled($new_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
	} elseif(function_exists('imagecopyresized')) {
		$new_img = imagecreate($dst_w, $dst_h);
		imagecopyresized($new_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
	} else {
		return false;
	}

	switch (getFileSuffix($dst_path))
	{
		case 'png':
			if(function_exists('imagepng') && imagepng($new_img, $dst_path)){
				ImageDestroy ($new_img);
				return true;
			} else {
				return false;
			}
			break;
		case 'jpg':
		default:
			if(function_exists('imagejpeg') && imagejpeg($new_img, $dst_path)){
				ImageDestroy ($new_img);
				return true;
			} else {
				return false;
			}
			break;
	}
}

/**
 * 按比例计算图片缩放尺寸
 *
 * @param string $img 图片路径
 * @param int $max_w 最大缩放宽
 * @param int $max_h 最大缩放高
 * @return array
 */
function chImageSize ($img, $max_w, $max_h){
	$size = @getimagesize($img);
	$w = $size[0];
	$h = $size[1];
	//计算缩放比例
	@$w_ratio = $max_w / $w;
	@$h_ratio =	$max_h / $h;
	//决定处理后的图片宽和高
	if( ($w <= $max_w) && ($h <= $max_h) ){
		$tn['w'] = $w;
		$tn['h'] = $h;
	} else if(($w_ratio * $h) < $max_h){
		$tn['h'] = ceil($w_ratio * $h);
		$tn['w'] = $max_w;
	} else {
		$tn['w'] = ceil($h_ratio * $w);
		$tn['h'] = $max_h;
	}
	$tn['rc_w'] = $w;
	$tn['rc_h'] = $h;
	return $tn ;
}


function emMsg($msg, $url='javascript:history.back(-1);', $isAutoGo=false){
	if ($msg == '404') {
		header("HTTP/1.1 404 Not Found");
		$msg = '抱歉，你所请求的页面不存在！';
	}
	echo <<<EOT
<html>
<head>
EOT;
	if($isAutoGo){
		echo "<meta http-equiv=\"refresh\" content=\"2;url=$url\" />";
	}
	echo <<<EOT
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>error</title>
</head>
<body>
<div align="center">
<p><font color=red>$msg</font></p>
<p><a href="$url">点击返回</a></p>
</div>
</body>
</html>
EOT;
	exit;
}
?>
