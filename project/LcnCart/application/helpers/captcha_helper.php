<?php
session_start();
//登录验证码
function GetVerify($length)
{
	$strings = Array('3','4','5','6','7','a','b','c','d','e','f','h','i','j','k','m','n','p','r','s','t','u','v','w','x','y');
	$chrNum = "";
	$count = count($strings);
	for ($i = 1; $i <= $length; $i++) {								//循环随机取字符生成字符串
		$chrNum .= $strings[rand(0,$count-1)];
	}
	return $chrNum;
}
function code(){
$fontSize = 20;													//定义字体大小
$length = 5;													//定义字符串长度
$strNum = GetVerify($length);											//获取一个随机字符串
$_SESSION['verify'] = $strNum;									//付值给session
$width = 90;													//定义图片宽度
$height = 30;													//定义图片高度
$im = imagecreate($width,$height);									//生成一张指定宽高的图片
$backgroundcolor = imagecolorallocate ($im, 255, 255, 255);				//生成背景色
$frameColor = imageColorAllocate($im, 150, 150, 150);					//生成边框色
$font = './system/fonts/arial.ttf';						//提取字体文件，开始写字
for($i = 0; $i < $length; $i++) {
	$charY = ($height+9)/2 + rand(-1,1);								//定义字符Y坐标
	$charX = $i*15+8;											//定义字符X坐标
															//生成字符颜色
	$text_color = imagecolorallocate($im, mt_rand(50, 200), mt_rand(50, 128), mt_rand(50, 200));
	$angle = rand(-20,20);										//生成字符角度
															//写入字符
	imageTTFText($im, $fontSize, $angle, $charX,  $charY, $text_color, $font, $strNum[$i]);
}
for($i=0; $i <= 5; $i++) {											//循环画背景线
	$linecolor = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	$linex = mt_rand(1, $width-1);
	$liney = mt_rand(1, $height-1);
	imageline($im, $linex, $liney, $linex + mt_rand(0, 4) - 2, $liney + mt_rand(0, 4) - 2, $linecolor);
}
for($i=0; $i <= 32; $i++) {											//循环画背景点,生成麻点效果
	$pointcolor = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imagesetpixel($im, mt_rand(1, $width-1), mt_rand(1, $height-1), $pointcolor);
}
imagerectangle($im, 0, 0, $width-1 , $height-1 , $frameColor);				//画边框
//ob_clean();
//header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
}
?>
