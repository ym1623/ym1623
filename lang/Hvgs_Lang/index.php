<?php
include_once 'Hvgs_Lang.php';
if(version_compare(phpversion(), '5.3') < 0){
	die('please upgrade ur php at least version 5.3');
}
$locale = new Hvgs_Lang();
$locale->setTargetLocale('zh-cn');
include $locale->translate('index.php');
