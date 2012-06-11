<?php
/**    
* 来源网址: http://www.xuehuwang.com/read-450.html
* 作者:雪狐博客    
* @ string 需要转换的文字    
* @ encoding 目标编码    
**/    
function detect_encoding($string,$encoding = 'gbk'){           
 $is_utf8 =  preg_match('%^(?:[\x09\x0A\x0D\x20-\x7E]| [\xC2-\xDF][\x80-\xBF]|  \xE0[\xA0-\xBF][\x80-\xBF] | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}    |  \xED[\x80-\x9F][\x80-\xBF] |  \xF0[\x90-\xBF][\x80-\xBF]{2}  | [\xF1-\xF3][\x80-\xBF]{3}  |  \xF4[\x80-\x8F][\x80-\xBF]{2} )*$%xs', $string);           
 if($is_utf8 && $encoding == 'utf8'){               
   return $string;           
 }elseif($is_utf8){               
   return mb_convert_encoding($string, $encoding, "UTF-8");                
 }else{               
   return mb_convert_encoding($string, $encoding, 'gbk,gb2312,big5');             
 }       
} 
 