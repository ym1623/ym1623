<?php
	function getDateStyle1($time){
	    $t=time()-$time;
	    $f=array(
	        '31536000'=>'年',
	        '2592000'=>'个月',
	        '604800'=>'星期',
	        '86400'=>'天',
	        '3600'=>'小时',
	        '60'=>'分钟',
	        '1'=>'秒'
	    );
	    foreach ($f as $k=>$v)    {        
	        if (0 !=$c=floor($t/(int)$k)) {
	            return $c.$v.'前';
	        }
	    }
	}
	echo getDateStyle1(strtotime('2012-05-30 12:02:03'));exit;

	function __time($time){
		$t=time()-$time;
		$f=array(
			'31536000'=>'年',
			'2592000'=>'个月',
			'604800'=>'星期',
			'86400'=>'天',
			'3600'=>'小时',
			'60'=>'分钟',
			'1'=>'秒'
		);
		foreach ($f as $k=>$v)
			if (0!=$c=floor($t/(int)$k)){
				$m = floor($t%$k);
				foreach($f as $x=>$y)
					if (0!=$r=floor($m/(int)$x))
					 return $c.$v.$r.$y.'前';
				return $c.$v.'前';
		}
	}
	echo __time(time()-61);