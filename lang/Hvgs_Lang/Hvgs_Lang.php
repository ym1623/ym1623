<?php
/*
	+----------------------------------------------------------------+	
	|Hellovigoss Language v1.0                                       |
	+----------------------------------------------------------------+
	|Hvgs_Lang 一个方便使用的多语言模板组件For Chinese phper         |
	+----------------------------------------------------------------+
	|Copyright(c) hellovigoss<hellovigoss@gmail.com>                 |
	+----------------------------------------------------------------+
	|在php多语言项目中需要做很多翻译工作                             |
	|一般的locale组件使用中间标示变量+模板实现多语言                 |
	|本组件旨在简单的解决多语言方案，开发过程只需整理一套中文语言模板|
	|后期独立整理各个版本的语言词组即可                              |
	|不需要整理中间变量，详见README                                  |
	+----------------------------------------------------------------+
	|Aurthor: hellovigoss <hellovigoss@gmail.com>                    |
	|blog: http://www.php-ex.com                                     |
	+----------------------------------------------------------------+
*/
class Hvgs_Lang{
	private $_source = 'zh-cn';
	private $_to = 'en';
	private $_cache_life = 3600;
	private $_cache_path = './cache/';
	private $_local_path = './locale/';
	private $_template_path = './template/';

	public function setTargetLocale($to){
		$this->_to = $to;
	}
	public function translate($template){
		if($this->_source == $this->_to){
			return $this->_template_path . $template;
		}
		if($cache_file = $this->expired($template)){
			if(!file_exists($this->_local_path . $this->_to)){
				die('locale file : ' . $this->_local_path . $this->_to . ' not exist!');
			}
			$_source_array = file_get_contents($this->_local_path . $this->_source);
			$_source_array = explode("\n", $_source_array);
			$_to_array = file_get_contents($this->_local_path . $this->_to);
			$_to_array = explode("\n", $_to_array);
			foreach($_source_array as $key => $value){
				if(empty($value)){
					continue;
				}
				$temp_array[$value] = $_to_array[$key]; 
			}
			$sort = create_function('$a,$b', 'return(strLen($a) < strLen($b));');
			uksort($temp_array, $sort);

			$content = file_get_contents($this->_template_path . $template);
			foreach($temp_array as $key => $value){
				$content = str_ireplace($key, $value, $content);
			}
			$cache_file = $this->writeCache($template, $content);
		}
		return $cache_file;
	}

	private function expired($template){
		$cache_file_name = $this->_cache_path . $this->_to . '-' . $template;
		if(!file_exists($cache_file_name) || (time() - filemtime($cache_file_name)) > $this->_cache_life){
			return true;
		}
		else{
			return $cache_file_name;
		}
	}

	private function writeCache($template, $content){
		$cache_file_name = $this->_cache_path . $this->_to . '-' . $template;
		file_put_contents($cache_file_name, $content);
		return $cache_file_name;
	}
}
