<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 支持全静态 html 的 URI 类
 *
 * @package CodeIgniter EX
 * @author Nick from visvoy圈Ａgmail点com
 */
class MY_URI extends CI_URI
{
	// 记录被调用过的最大 segment 序号，默认=3 (1=主题名, 2=Controller, 3=action)
	var $_goodseg = 3;
	
	// Constructor
	function MY_URI()
	{
		parent::CI_URI();
	}

	// HOOK: 记录曾经使用过的 segment 的最大序号，用来过滤垃圾 seg
	function segment($n, $no_result = FALSE)
	{
		if ($n > $this->_goodseg)
		{
			$this->_goodseg = $n;
		}
		return parent::segment($n, $no_result);
	}
	
	// EXTEND: 只获取曾经被 ::segment() 方法调用过的最大序号之内的 segment 数组集合
	function good_rsegment_array() 
	{
		if ($this->_goodseg < 0) 
		{
			return $this->rsegments;
		}
		return array_slice($this->rsegments, 0, $this->_goodseg);
	}
	
	// HOOK: 防止二次解析 URI
	function _fetch_uri_string()
	{
		if ($this->uri_string != '') 
		{
			return;
		}
		parent::_fetch_uri_string();
	}
	
	// HOOK: 去掉 JS 模式 URI 结尾的 .js
	function _remove_url_suffix()
	{
		if (strtolower(substr($this->uri_string, -3)) == '.js') {
			define('JSMODE', 1); // 更新 html 文件检测模式
			log_message('debug', 'JS mode is current.');
			$this->uri_string = substr($this->uri_string, 0, -3);
		} else {
			parent::_remove_url_suffix();
		}
	}
} // END class MY_URI