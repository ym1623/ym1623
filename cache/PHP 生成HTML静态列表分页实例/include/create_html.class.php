<?
//Download: http://www.codefans.net
class create_html {
         
        private $template;
        //模版
        private $file_name;
        //文件名
        private $array;
        //数据数组
        function create_html($file_name, $template, $array) {
          //构造类
              
            $this->template = $this->read_file($template, "r");
              //读取模板文件  
            $this->file_name = $file_name;        
            $this->array = $array;
            //数据数据
            $this->html();
            //生成html
        }
         
        function html() {
        	 //生成html
            while (ereg ("{([0-9]+)}", $this->template, $regs)) {
            	//循环模版中所能的{1}.....
                $num = $regs[1];
                //得到1、2、3序列
                $this->template = ereg_replace("\{".$num."\}", $this->array[$num], $this->template);
                //把数据替换成html内容
                $this->write_file($this->file_name, $this->template, "w+");
                //生成HTML文件
            }
        }
         
        function read_file($file_url, $method = "r") {
            //读取文件
             
            $fp = @fopen($file_url, $method);
            //打开文件
            $file_data = fread($fp, filesize($file_url));
            //读取文件信息
            return $file_data;
        }
         
        function write_file($file_url, $data, $method) {
            //写入文件
            $fp = @fopen($file_url, $method);
            //打开文件
            @flock($fp, LOCK_EX);
            //锁定文件
            $file_data = fwrite($fp, $data);
            //写入文件
            fclose($fp);
            //关闭文件
            return $file_data;
        }
}
?>