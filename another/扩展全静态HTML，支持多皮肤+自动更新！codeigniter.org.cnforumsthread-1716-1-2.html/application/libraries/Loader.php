<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// 由于在 PHP4 里面，重载 CI_Loader 无效！（Base4.php代码限定了，很搓～）
// 这样可以实现 PHP4/PHP5 都能重载 CI_Loader ，而且不用修改 CI 核心
eval('?'.'>'.str_replace('CI_Loader', 'CI_Loader_Superclass', file_get_contents(BASEPATH.'libraries/Loader'.EXT)));

/**
 * 支持全静态 html 的 Loader 类
 *
 * @package CodeIgniter EX
 * @author Nick from visvoy圈Ａgmail点com
 */
class CI_Loader extends CI_Loader_Superclass
{
	// Constructor
	function CI_Loader()
	{
		parent::CI_Loader_Superclass();
	}
	
	// HOOK: 允许加载 views 时省略 view 名称
	// 此时 view 名称默认为 action 的名称
	// 例如：当前 action = index, 执行：$ctrl->view(array('tag' => 1...))
	// 将其转换为：$ctrl->view('index', array('tag' => 1...))
	// 保持默认 action 作为 view 名称有利于检测 views 与其 html 文件的自动更新
	function view($view = null, $vars = array(), $return = FALSE)
	{
		if (!is_string($view)) {
			$CI =& get_instance();
			$t = $CI->router->fetch_method();
			// 没有处理 _remap , if (method_exists($CI, '_remap'))
			return parent::view($t, $view, $vars);
		}
		return parent::view($view, $vars, $return);
	}
	
	// HOOK: 添加 url 地址转换，image asset 地址转换，upload 地址转换
	function _ci_load($_ci_data)
	{
		// 检测是否调用了 ::view() 方法，
		if (isset($_ci_data['_ci_view']) 
			&& !isset($_ci_data['_ci_path']))
		{
			// 给 views 添加主题名前缀/method
			$CI =& get_instance();
			$_ci_data['_ci_view'] = $CI->config->item('theme').'/'.$CI->router->fetch_class().'/'.$_ci_data['_ci_view'];
			
			// 因为要转换地址，必须截获输出内容
			$return = $_ci_data['_ci_return'];
			$_ci_data['_ci_return'] = true;
			$c = parent::_ci_load($_ci_data);
			
			// 开始转换地址
			// 注意：全静态 html 模式中 index_page 是空值，不用获取
			$u = trim($CI->config->item('upload_tag'));	// 上传文件的目录
			$ui = trim($CI->config->item('theme'));	// 当前主题名
			$url = trim($CI->config->item('base_url'));	// 网站地址
			$img = trim($CI->config->item('image_tag'));	// image asset 小目录
			$img_url = trim($CI->config->item('image_url'));	// 图片服务器地址
			$find = $replace = array();
			
			// 替换 image（必须先替换 image ，再替换其他链接）
			// 注意：替换到的图片服务器仍然以 ui 名字分目录保存图像
			if ('' != $img_url)
			{
				$img_url = rtrim($img_url, '/');
				$uf = "/$ui/$img/";
				$ur = "$img_url/$ui/";
				$find = array_merge($find, array("\"$uf", "'$uf", "=$uf", "($uf"));
				$replace = array_merge($replace, array("\"$ur", "'$ur", "=$ur", "($ur"));
			}
			
			// 替换上传路径
			if ('' != $u)
			{
				$url = rtrim($url, '/');
				$uf = "/$u/";
				$ur = "$url/$u/";
				$find = array_merge($find, array("\"$uf", "'$uf", "=$uf", "($uf"));
				$replace = array_merge($replace, array("\"$ur", "'$ur", "=$ur", "($ur"));
			}
			
			// 替换其他链接，例如 /theme/welcome... 替换为 base_url/theme/welcome...
			$url = rtrim($url, '/');
			$uf = "/$ui/";
			$ur = "$url/$ui/";
			$find = array_merge($find, array("\"$uf", "'$uf", "=$uf", "($uf"));
			$replace = array_merge($replace, array("\"$ur", "'$ur", "=$ur", "($ur"));
			
			// 执行替换操作
			$c = str_replace($find, $replace, $c);
			
			// 要求返回内容？
			if (true === $return)
			{		
				return $c;
			}
			
			// 不返回内容，那就输出吧，copy 一小段超类的东东 Oy
			// PHP 4 requires that we use a global
			global $OUT;
			$OUT->append_output($c);
			@ob_end_clean();
		}
		else 
		{
			return parent::_ci_load($_ci_data);
		}
	}
} // END class CI_Loader (extended, in fact ^o^)