<?php 
 function chinesesubstr($str,$start,$len) { 	//$str指字符串,$start指字符串的起始位置，$len指字符串长度
    $strlen=$start+$len; 		    			//用$strlen存储字符串的总长度，即从字符串的起始位置到字符串的总长度
    for($i=0;$i<$strlen;$i++) { 								
        if(ord(substr($str,$i,1))>0xa0) {     	//如果字符串中首个字节的ASCII序数值大于0xa0,则表示汉字
            $tmpstr.=substr($str,$i,2);         //每次取出两位字符赋给变量$tmpstr，即等于一个汉字
            $i++; 						 		//变量自加1
        } 
		else 
            $tmpstr.=substr($str,$i,1); 		 //如果不是汉字，则每次取出一位字符赋给变量$tmpstr
    } 
    return $tmpstr; 						  	 //返回字符串
}

/*function ExecTime(){ 		//自定义系统时间函数
		$time = explode(" ", microtime());
		$usec = (double)$time[0]; 
		$sec = (double)$time[1]; 
		return $sec + $usec; 
}
*/
function getmicrotime(){ 
    list($usec, $sec) = explode(" ",microtime()); 
    return ((float)$usec + (float)$sec); 
}
function gl($tt){		//过滤标点符号
	$str=array("，","");
	$tt=str_replace($str,'',$tt);
	$str=array("。","");
	$tt=str_replace($str,'',$tt);
	$str=array("!","");
	$tt=str_replace($str,'',$tt);
	$str=array("！","");
	$tt=str_replace($str,'',$tt);
	$str=array("：","");
	$tt=str_replace($str,'',$tt);
	$str=array(";","");
	$tt=str_replace($str,'',$tt);
	$str=array("；","");
	$tt=str_replace($str,'',$tt);
	$str=array(":","");
	$tt=str_replace($str,'',$tt);
	$str=array("、","");
	$tt=str_replace($str,'',$tt);
	$str=array("*","");
	$tt=str_replace($str,'',$tt);
	$str=array(".","");
	$tt=str_replace($str,'',$tt);
	$str=array(",","");
	$tt=str_replace($str,'',$tt);
	$str=array("‘","");
	$tt=str_replace($str,'',$tt);
	$str=array("’","");
	$tt=str_replace($str,'',$tt);
	$str=array("“","");
	$tt=str_replace($str,'',$tt);
	$str=array("”","");
	$tt=str_replace($str,'',$tt);
	$str=array("?","");
	$tt=str_replace($str,'',$tt);
	$str=array("？","");
	$tt=str_replace($str,'',$tt);
	$str=array("'","");
	$tt=str_replace($str,'',$tt);
	$str=array('\\',"");
	$tt=str_replace($str,'',$tt);
	$str=array('/',"");
	$tt=str_replace($str,'',$tt);
	$str=array("(","");
	$tt=str_replace($str,'',$tt);
	$str=array(")","");
	$tt=str_replace($str,'',$tt);
	$str=array("（","");
	$tt=str_replace($str,'',$tt);
	$str=array("）","");
	$tt=str_replace($str,'',$tt);
	$str=array("_","");
	$tt=str_replace($str,'',$tt);
	$str=array("-","");
	$tt=str_replace($str,'',$tt);
	$str=array("－","");
	$str=str_replace($str,'',$tt);
	$str=array(" ","");
	$str=str_replace($str,'',$tt);
	return $str;
}

function dunhao($cc){
	if(substr($cc,0,2)=="、"){
		$cc= substr($cc,2);			//去掉前面的“、”符号
	}
	if(substr($cc,-3,2)=="、"){
		$cc= substr($cc,0,-3);		//去掉后面的“、”符号
	}
	
	if(substr($cc,0,2)=="、" && substr($cc,-3,2)=="、"){
		$a= substr($cc,2);			//去掉前面的“、”符号
		$cc= substr($a,0,-3);		//去掉后面的“、”符号
	}
	return $cc;
}

function gl1($tt){		//过滤标点符号
	$str=array("，","");
	$tt=str_replace($str,'',$tt);
	$str=array("。","");
	$tt=str_replace($str,'',$tt);
	$str=array("!","");
	$tt=str_replace($str,'',$tt);
	$str=array("！","");
	$tt=str_replace($str,'',$tt);
	$str=array("：","");
	$tt=str_replace($str,'',$tt);
	$str=array(";","");
	$tt=str_replace($str,'',$tt);
	$str=array("；","");
	$tt=str_replace($str,'',$tt);
	$str=array(":","");
	$tt=str_replace($str,'',$tt);
	$str=array("、","");
	$tt=str_replace($str,'',$tt);
	$str=array("*","");
	$tt=str_replace($str,'',$tt);
	$str=array(".","");
	$tt=str_replace($str,'',$tt);
	$str=array(",","");
	$tt=str_replace($str,'',$tt);
	$str=array("‘","");
	$tt=str_replace($str,'',$tt);
	$str=array("’","");
	$tt=str_replace($str,'',$tt);
	$str=array("“","");
	$tt=str_replace($str,'',$tt);
	$str=array("”","");
	$tt=str_replace($str,'',$tt);
	$str=array("?","");
	$tt=str_replace($str,'',$tt);
	$str=array("？","");
	$tt=str_replace($str,'',$tt);
	$str=array("'","");
	$tt=str_replace($str,'',$tt);
	$str=array('\\',"");
	$tt=str_replace($str,'',$tt);
	$str=array('/',"");
	$tt=str_replace($str,'',$tt);
	$str=array("(","");
	$tt=str_replace($str,'',$tt);
	$str=array(")","");
	$tt=str_replace($str,'',$tt);
	$str=array("（","");
	$tt=str_replace($str,'',$tt);
	$str=array("）","");
	$tt=str_replace($str,'',$tt);
	$str=array("_","");
	$tt=str_replace($str,'',$tt);
	$str=array("-","");
	$tt=str_replace($str,'',$tt);
	$str=array("－","");
	$str=str_replace($str,'',$tt);
	return $str;
}
?>
