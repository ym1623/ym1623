<?php

/**
 * 信息提示方式：1
 * 带多行导航链接,不带自动跳转.
 *
 * @param string $message
 * @param array $gotos
 */
function show_message1($message)
{
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    $args = func_get_args();
    array_shift($args);
    $CI = get_instance();
    $data['gotos']   = $args;
    $data['message'] = (string)$message;
    $CI->load->view('_show_message1', $data);
}

/**
 * 信息提示方式：2
 * 带自动跳转
 *
 * @param string $message
 * @param string $goto
 */
function show_message2($message, $goto)
{
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    $CI = get_instance();
    $data['goto']    = (string)$goto;
    $data['message'] = (string)$message;
    $CI->load->view('_show_message2', $data);
}

/**
 * 返回当前 query string.
 *
 * @return string
 */
function query_string()
{
    return $_SERVER['QUERY_STRING'];
}

/**
 * 把当前 QUERY_STRING分解成数组
 *
 * @return array
 */
function query_string_to_array()
{
    $params = array();
    $query_string = explode('&', query_string());
    foreach ($query_string as $string){
        if (strpos($string, '=')){
            list($key, $value) = explode('=', $string);
            $params[$key] = $value;
        }
    }
    return $params;
}


/**
 * 序列化文本域内容
 * 
 * 
 */
function serial_save($text) 
{
    $texts = explode("\n",$text);
	$arr = array();
	foreach($texts as $value):
		if(!empty($value))
		$arr[] = $value;
	endforeach;
	$str = implode(',',$arr);
	return $str;	
}

function sreial_show($text)
{
    $texts = explode(",",$text);
	$arr = array();
	foreach($texts as $value):
		if(!empty($value))
		$arr[] = $value;
	endforeach;
	$str = implode("\n",$arr);
	return $str;	
}

/**
 * 限制字符串长度,中文字节理解成一个字符
 * 
 */

function char_limit1($str,$val)
{
	$CI = & get_instance();
	if (function_exists('mb_internal_encoding'))
	{
		mb_internal_encoding($CI->config->item('charset'));
	}
    return (mb_strlen($str)>$val) ? mb_substr($str,0,$val) : $str ;    
}

/**
 * 限制字符串长度
 * 
 */
function char_limit2($str,$val)
{
    return (strlen($str)>$val) ? substr($str,0,$val) : $str ;    
}

/**
 * 
 * 
 */

function char_limit3($str,$val)
{
	$CI = & get_instance();
	if (function_exists('mb_internal_encoding'))
	{
		mb_internal_encoding($CI->config->item('charset'));
	}
    return (mb_strlen($str)>$val) ? mb_substr($str,0,$val).'...' : $str ;    
}

/**
 * 限制数值的最高值
 * 
 * 
 */

function num_limit($num,$val)
{
	if(!is_numeric($num)){
		return 0;
	}
    return ((float)$num >(float)$val) ? $val : $num;
}


/**
 * 功能：递归创建文件夹
 * 参数：$param 文件路径
 */
function mkdirsByPath($param){
	if(! file_exists($param)) {
		mkdirsByPath(dirname($param));
		@mkdir($param);
	}
	return realpath($param);
}

/**
 * 功能：删除非空目录 
 */
function deldir($dir) 
{
    $dh=opendir($dir);
    while ($file=readdir($dh)) {
        if($file!="." && $file!="..") {
            $fullpath=$dir."/".$file;
            if(!is_dir($fullpath)) {
                unlink($fullpath);
            } else {
                deldir($fullpath);
            }
        }
    }
    closedir($dh);
    if(rmdir($dir)) {
        return true;
    } else {
        return false;
    }
}


/**
 * 功能：两个数组并集 
 */
function array_and($array1=array(), $array2=array()) 
{
   $res = array();   //结果数组
   $res = $array1;   //直接将数组1赋值给结果数组
      
   $arr2 = array_diff($array2,$array1);
   
   $res = array_merge($res , $arr2);

   return is_array($res) ? $res : array();
}

/**
 * 功能：检查权限 
 */

function admin_priv($priv_str)
{   
	$CI = & get_instance();
	$action_list = $CI->session->userdata('action_list');

    if (strpos(',' . $action_list . ',', ',' . $priv_str . ',') === false)
    {                
        return false;
    }  
	
    return true;
}


/**
 * 获得当前格林威治时间的时间戳
 *
 * @return  integer
 */
function gmtime()
{
    return (time() - date('Z'));
}


/**
 * 动态创建属性列表
 *
 * @return  string
 */
function build_attr_html($arrt_type,$attr_id,$option_values = array(),$default_value ='')
 {
	 $html = '';

     switch($arrt_type){

		 case     'text': $html = '<input style="width: 222px;" class="x-form-text x-form-field " size="20"                            name="attr_values['.$attr_id.'][]"  type="text" value="'.$default_value.'" 
		                  >'; 
						  break;

		 case 'textarea': $html = '<textarea rows="4" cols="80" name="attr_values['.$attr_id.'][]" class="  
		                  x-form-field 
		                  " >'.$default_value.'</textarea>';       break;

		 case    'radio': foreach($option_values as $value):
			              $html .= ($default_value != $value) ?
			                      '<input style="width: 20px;" size="20"  name="attr_values['.$attr_id.'][]" type="radio" value="'.$value.'"  >'.$value :
			                      '<input style="width: 20px;" size="20"  name="attr_values['.$attr_id.'][]" type="radio" value="'.$value.'"  checked="checked">'.$value.'' ;
		                  endforeach;
						  $html .='<input style="width: 20px;" size="20"      
						           type="radio"   name="attr_values['.$attr_id.'][]" value="">不选';
		                  break;

		 case 'checkbox': foreach($option_values as $value):
			              $html .= (!in_array($value,$default_value)) ?
			                      '<input style="width: 20px;" size="20"  name="attr_values['.$attr_id.'][]" type="checkbox" value="'.$value.'"  >'.$value  :
			                      '<input style="width: 20px;" size="20"  name="attr_values['.$attr_id.'][]" type="checkbox" value="'.$value.'" checked="checked" >'.$value;

		                  endforeach;
						  $html .='<input style="width: 20px;" size="20"      
						           type="hidden"   name="attr_values['.$attr_id.'][]" value="">';
		                   break;

		 case   'select': $html .= '<select name="attr_values['.$attr_id.'][]"        
		                  style="height:22px;"><option value="">请选择...</option>';
		                  foreach($option_values as $value) : 
		                  $html .= ($default_value != $value) ?
							  '<option value="'.$value.'">'.$value.'</option>':
							  '<option value="'.$value.'" selected="selected" >'.$value.'</option>';
		                  endforeach;
		                  $html .='</select>'; break;

	 }
	 return $html;
 }