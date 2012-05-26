<?php
function curl_file_get_contents($durl){
	 $f = new SaeFetchurl();
	  $content = $f->fetch($durl);
	  if($f->errno() == 0)  $r=$content;
	  else $r=$f->errmsg();
   return $r;
}
function getday($jia=0)
{
	$jiaday=$jia>1 ? $jia-1:0;
	return date("j", mktime(0, 0, 0, date("m"), date("d") + $jiaday, date("Y")));
}
function getweather($arr,$data='citycode.txt')//获取天气预报内容
{
	$city=$arr['city'];
	if(!file_exists("saekv://".$data)){file_put_contents("saekv://".$data,file_get_contents($data));}
	if(file_exists("saekv://".$data)){$cachecitycode="saekv://".$data;}else{$cachecitycode=$data;}
	$urlarr=unserialize(file_get_contents($cachecitycode));
	if($urlarr[$city])
	{
		$url="http://m.weather.com.cn/data/".$urlarr[$city].".html";
		$cachedatatxt="saemc://cache/".md5($arr['city'].date("YmdH")).".txt";
		if(file_exists($cachedatatxt)){$lines_string =file_get_contents($cachedatatxt);}else{
		$lines_string = curl_file_get_contents($url);
		if($lines_string!="couldn't connect to host"){file_put_contents($cachedatatxt,$lines_string);}}
		$str_start=array('℃','~','℉','转小于3级','小于3级');$str_end=array('','到','','','');
		$data=str_replace($str_start,$str_end,$lines_string);
		$vararr=json_decode($data);$arrv=$vararr->weatherinfo;
		foreach($arrv as $k => $v){$var[$k]=$v;}
		$return=$city;if(!$arr['day'])$arr['day']=3;
		for($i=1;$i<=$arr['day'];$i++)
		{
			$qiwen=$arr['temp']==2?$var['tempF'.$i]."℉":$var['temp'.$i]."度";
			if($arr['type']){
			if($i==1)
			{
				$return .=" ".$var['date_y']." ".$var['week'];
				$return .="<br>今日天气:".$var['weather1']." 气温:".$qiwen;
				if(@in_array('1',$arr['o']))$return .=" ".$var['wind1'];
				if(@in_array('3',$arr['o']))$return .="<br> 穿衣指数:".$var['index']." ".$var['index_d'];
				if(@in_array('2',$arr['o']))$return .="<br> 紫外线指数:".$var['index_uv'];
				if(@in_array('4',$arr['o']))$return .="<br> 洗车指数:".$var['index_xc'];
				if(@in_array('5',$arr['o']))$return .="<br> 旅游指数:".$var['index_tr'];
				if(@in_array('6',$arr['o']))$return .="<br> 舒适度指数:".$var['index_co'];
				if(@in_array('7',$arr['o']))$return .="<br> 晨练指数:".$var['index_cl'];
				if(@in_array('8',$arr['o']))$return .="<br> 晾晒指数:".$var['index_ls'];
				if(@in_array('9',$arr['o']))$return .="<br> 息斯敏过敏气象指数:".$var['index_ag'];
			}
			else
			{
				$return .="<br>".getday($i)."日天气:".$var['weather'.$i]." 气温:".$qiwen;
				if(@in_array('1',$arr['o']))$return .=" ".$var['wind'.$i];
				if($i==2){
				if(@in_array('3',$arr['o']))$return .="<br> 穿衣指数:".$var['index48']." ".$var['index48_d'];
				if(@in_array('2',$arr['o']))$return .="<br> 紫外线指数:".$var['index48_uv'];
				}
			}}else{
				if($i==1){
					$jinri=explode("月",$var['date_y']);
					$return .=$jinri[1].$var['weather'.$i].$qiwen.$var['wind'.$i];}else{
				$return .=getday($i)."日".$var['weather'.$i].$qiwen.$var['wind'.$i];}
			}
		}
		return $return;
	}else{
		return "无法获取到该城市的天气信息!";
	}
}
?>