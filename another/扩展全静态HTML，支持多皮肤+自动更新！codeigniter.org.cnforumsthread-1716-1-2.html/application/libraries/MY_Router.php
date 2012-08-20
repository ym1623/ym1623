<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 支持全静态 html 的 Router 类
 *
 * @package CodeIgniter EX
 * @author Nick from visvoy圈Ａgmail点com
 */
class MY_Router extends CI_Router
{
	// Constructor
	function MY_Router()
	{
		parent::CI_Router();
	}
	
	// HOOK: 让 router 支持 html 例如 http://ci-ex.com/theme/controller/action.html
	function _set_routing()
	{
		// 全静态 html 模式必须屏蔽 enable_query_strings
		$query_string_temp = $this->config->item('enable_query_strings');
		$this->config->set_item('enable_query_strings', false);
		
		// 提前解析 URI ，进行加工
		$this->uri->_fetch_uri_string();
		if ('' == $this->uri->uri_string) 
		{
			// 需要取得 default_contoller ，尽管和超类有重复，但可以避免修改超类，=.=
			@include(APPPATH.'config/routes'.EXT);
			if (!isset($route) || !is_array($route)) 
			{
				$route = array();
			}
			$def_ctrl = (!isset($route['default_controller']) OR $route['default_controller'] == '') ? false : strtolower($route['default_controller']);	
			if (false === $def_ctrl)
			{
				show_error("Unable to determine what should be displayed. A default route has not been specified in the routing file.");
			}
			
			// 将默认 uri_string 汇集成 theme/default_controller
			$this->uri->uri_string = $this->config->item('default_theme').'/'.$def_ctrl;
		}
		
		// HOOK 结束，其余工作交给超类
		parent::_set_routing();
		
		// 恢复 enable_query_strings ，以供其他物件使用
		$this->config->set_item('enable_query_strings', $query_string_temp);
	}
	
	// HOOK: 让 Router 可以解析 theme/controller/action 中的 theme
	function _set_request($segments = array())
	{
		parent::_set_request($segments);
		
		// 因为前面确认了，uri_string 一定不是空值
		// 需要将 theme 插回 rsegments 开头
		$theme = $this->config->item('theme');
		array_unshift($this->uri->rsegments, $theme);
	}
	
	// HOOK: 让 Router 可以解析 theme/controller/action 中的 theme
	function _validate_request($segments)
	{
		$theme = $segments[0];
		$root = dirname(FCPATH).'/';
		
		// 确认主题目录存在
		if (!is_dir($root.$theme))
		{
			show_error("Unable to load requested theme: $theme");
		}
		
		// 保存当前主题名称
		$this->config->set_item('theme', $theme);
		
		return parent::_validate_request(array_slice($segments, 1));
	}
} // END class MY_Router