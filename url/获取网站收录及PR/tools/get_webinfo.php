<?php
error_reporting(0);

require 'lib/Snoopy.class.php';
require 'lib/SEO_RankChecker.php';
require 'lib/WebCrawl.class.php';
if($_REQUEST['url'])
{
	$u=$_REQUEST['url'];
	$d=preg_replace('/http\:\/\//si', '',$_REQUEST['url']);
	$u='http://'.$d;
	$info=array();
	$go=new WebCrawl($u);
	//获取网站title,keyword,等信息
	$info=$go->getWebinfo();
	

	$rank=new SEO_RankChecker($u);
	
	$info['alexa']=(int)$rank->getAlexaRank();
	
	$info['google']=(int)$rank->getIndexedGoogle();
	
	$info['baidu']=(int)$rank->getIndexedBaidu();

	$info['pr']=(int)$rank->getPagerank();
	$info['status']="ok";
	echo json_encode($info);
}

?>