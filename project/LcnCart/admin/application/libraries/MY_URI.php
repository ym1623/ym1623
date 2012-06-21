<?php
// 支持中文
class MY_URI extends CI_URI {   
function _filter_uri($str)   
{   
if ($str != '' AND $this->config->item('permitted_uri_chars') != '')   
{   
$str = urlencode($str);   
            if ( ! preg_match("|^[".preg_quote($this->config->item('permitted_uri_chars'))."]+$|i", $str))   
{   
exit('The URI you submitted has disallowed characters.');   
}   
$str = urldecode($str);  
}   
return $str;   
}   
  
}  

?>