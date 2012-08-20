<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 支持全静态 html 的 Output 类
 *
 * @package CodeIgniter EX
 * @author Nick from visvoy圈Ａgmail点com
 */
class MY_Output extends CI_Output
{
	var $_path = '';
	
	// Constructor
	function MY_Output()
	{
		parent::CI_Output();

		// 网站根目录		
		$this->_path = dirname(FCPATH).'/';
		
		// html 模式浏览器不缓存
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', false);
		header('Pragma: no-cache');
	}
	
	// HOOK: 增加转向到静态 html 文件的功能
	function _display($output = '')
	{
		global $URI;
		
		if ('' == $output)
		{
			$output = &$this->final_output;
		}
		
		// JS 模式不创建 html 文件，仅输出内容
		if (defined('JSMODE'))
		{
			log_message('debug', 'JS mode content send complete');
			return parent::_display($output);
		}
		
		// 生成静态 html 文件
		// 当没有缓存，或缓存过期，CI 会调用 requested controller 生成页面
		// 在这种情况下，才值得写静态 html 文件
		// 
		// 当有缓存且没过期，不要由 ::_display() 方法写静态 html 文件
		// 因为在执行 ::_display_cache() 方法的时候已经写过 html 啦
		if (function_exists('get_instance'))
		{
			$CI = &get_instance();
			$f = $this->_get_html_filename($CI->uri);
			$this->_create_htmlfile($this->_path.$f, $output);
		}
		
		// 余下工作交给超类
		// 为什么没有进行静态 html 转向？
		// 因为没必要哇，嘎嘎！反正已经生成页面内容了，不如直接输出，
		// 下次再访问这个 URI 的时候就自动转向到其对应的静态 html 了！
		// 强行转向的话，需要 copy 超类中的一大段的 header 处理，耦合了。。。
		return parent::_display($output);
	}
	
	// HOOK: 同时检测静态 html 文件
	function _display_cache(&$CFG, &$URI)
	{
		// POST页面做缓存没有意义，不然POST干嘛？^o^
		if (strtoupper($_SERVER['REQUEST_METHOD']) != 'GET') {
			return false;
		}
		
		// 获取静态 html 文件名
		$f = $this->_get_html_filename($URI);
		
		// 验证静态 html 文件是否存在或过期
		$has_html = $this->_validate_htmlfile($this->_path.$f);
		
		// JS 模式只检测 html 文件状态
		if (defined('JSMODE')) 
		{
			log_message('debug', 'Exit a HTML file checking request');
			exit;
		}
			
		// html 存在且没有过期，表明可以跳转到 html
		// 注： JS 模式不能跳转，因为 JS 模式不会为 js_action 生成 html 文件
		if ($has_html && !defined('JSMODE'))
		{
			$url = $CFG->item('base_url').$f;
			log_message('debug', 'Redirect to html: '.$url);
			header("Location: ".$url, TRUE, 302);
			//header("Refresh:0;url=".$url);
			exit;
		}
		
		// 需要重组 URI ，避免生成垃圾缓存
		$uri_temp = $URI->uri_string;
		$URI->uri_string = implode('/', $URI->good_rsegment_array());
		$result = parent::_display_cache($CFG, $URI);
		
		// 恢复 uri string ，以供其他物件调用
		$URI->uri_string = $uri_temp;
		
		// 有缓存，但没有静态 html 文件，那就生成 html 文件
		if (TRUE == $result && !$has_html)
		{
			$this->_create_htmlfile($this->_path.$f, $this->final_output);
		}
		
		return $result;
	}

	// EXTEND: 取得全静态 html 的文件名，不含 url 路径
	function _get_html_filename(&$URI) {
		$f = config_item('url_suffix');
		$f = (trim($f) == '') ? '.html' : $f;
		$f = implode('/', $URI->good_rsegment_array()).$f;
		return $f;
	}
	
	// EXTEND: 生成静态 html 文件，有逐级创建子目录功能
	function _create_htmlfile($file, &$content) {
		$k = str_replace('\\', '/', $file);
		
		// 逐级创建子目录
		while ($pos = strrpos($k, '/')) 
		{
			$k = substr($k, 0, $pos);
			if (is_dir($k))
			{
				break;
			}
			@mkdir($k, 0777);
		}
		
		if (!$fp = @fopen($file, 'wb'))
		{
			log_message('error', "Unable to write html file: $file");
			return false;
		}
		if (!flock($fp, LOCK_EX))
		{
			log_message('error', "Unable to lock html file: $file");
			return false;
		}
		
		// 增加 html 自动更新脚本
		$CI = &get_instance();
		$js = implode('/', $CI->uri->good_rsegment_array());
		$js = $CI->config->item('base_url').$js.'.js';
		$js = '<script src="'.$js.'" type="text/javascript"></script>';
		
		// HTML 文件默认保存一个月
		$exp = ($this->cache_expiration > 0) ? $this->cache_expiration : (60 * 24 * 30);
		$exp = time() + $exp * 60;
		$e = '<!-- RC'.$exp.'TS -->';
		
		fwrite($fp, $content.$js.$e);
		flock($fp, LOCK_UN);
		fclose($fp);
		@chmod($file, 0666);
		
		log_message('debug', "HTML file written: $file");
		return true;
	}
		
	// EXTEND: 检测全静态 html 文件是否存在或过期
	// html 文件不存在或过期返回 false ，验证 ok 返回 true
	function _validate_htmlfile($f) {
		global $CFG, $RTR;
		
		if (!file_exists($f))
		{
			return false;
		}
		
		// 探测 views 和 controller 文件是否被修改过，如果是则自动更新对应的 html 文件
		if ($CFG->item('html_check_source') == true) {
			$t = $CFG->item('theme').'/'.$RTR->fetch_directory().$RTR->fetch_class().'/'.$RTR->fetch_method();
			$t1 = APPPATH.'views/'.$t.EXT;
			$t2 = APPPATH.'controllers/'.$RTR->fetch_directory().$RTR->fetch_class().EXT;
			//log_message('debug', 't1='.$t1);
			//log_message('debug', 't2='.$t2);
			
			// 检测 views 文件
			if (file_exists($t1) && @filemtime($t1) > @filemtime($f))
			{
				return $this->_delete_htmlfile($f, 'HTML views has modified, created htmlfile deleted: '.$f);
			}
			else // 如果没有 views.php ，尝试检测 views.url_suffix 或 views.html
			{
				$ext = trim($CFG->item('url_suffix'));
				$ext = ('' == $ext) ? '.html' : $ext;
				$t1 = APPPATH.'views/'.$t.$ext;
				if (file_exists($t1) && @filemtime($t1) > @filemtime($f))
				{
					return $this->_delete_htmlfile($f, 'HTML views.suffix changed, htmlfile deleted: '.$f);
				}
			}
			
			// 检测 controller 文件
			if (file_exists($t2) && @filemtime($t2) > @filemtime($f))
			{
				return $this->_delete_htmlfile($f, 'HTML controller changed, htmlfile deleted: '.$f);
			}
		}
		
		if (!($fp = @fopen($f, 'rb')))
		{
			return $this->_delete_htmlfile($f);
		}
		
		// 读取 html 文件尾部的时间戳
		$n = filesize($f);
		if ($n > 100) {
			fseek($fp, $n - 100);
			$c = fread($fp, 100);
		} else {
			$c = fread($fp, $n);
		}
		fclose($fp);

		// 寻找更新时间戳		
		$start = strrpos($c, '<!-- RC');
		$end = strrpos($c, 'TS -->');
		if (false === $start || false === $end)
		{
			return $this->_delete_htmlfile($f, 'HTML uptime lost and file deleted: '.$f);
		}
		
		// 检测是否过期
		$exp = substr($c, $start + 7, $end - $start - 7);
		//log_message('debug', 'HTML TIME STAMP='.$exp);
		if (!is_numeric($exp) || time() >= $exp)
		{
			return $this->_delete_htmlfile($f, 'HTML expired and file deleted: '.$f);
		}
		
		log_message('debug', 'HTML status good: '.$f);
		return true;
	}
	
	// EXTEND: 删除过期的静态 html 文件
	function _delete_htmlfile($f, $memo = '') {
		@unlink($f);
		if ('' != $memo) 
		{
			log_message('debug', $memo);
		}
		//clearstatcache();
		return false;
	}
} // END class MY_Output