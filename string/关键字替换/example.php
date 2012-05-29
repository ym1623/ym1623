<?php
	require_once dirname(__FILE__) .'/badword.src.php';
	
	$badwords = array_combine($badword,array_fill(0,count($badword),'*'));
	
	$text = '我今天开着卢瑞华丰田上班';
	
	$str = strtr($text, $badwords);

	echo $str;
