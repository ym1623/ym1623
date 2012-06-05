<?php
    include_once("include/fso.class.php");
      $fso = new CtbClass;
	    //新建一个文件操作类 
	    $fso->file = "config.ini";
	    //指定配置的文件
	    $config_ini = $fso->read_file();
	    //打开数据文件---以一维数组返回文件内容
	    echo $write_page_end = $config_ini[0];
	    //最后生成页的页码
	    echo $write_id_end = $config_ini[1];
?>