<?php
  define('CACHE_ROOT', dirname(__FILE__).'/cache'); //缓存存放目录
  define('CACHE_TIME', 1800);//缓存时间 单位秒
  define('CACHE_FIX','.html');
  
  $CacheName=md5($_SERVER['REQUEST_URI']).CACHE_FIX; //缓存文件名
  $CacheDir=CACHE_ROOT.'/'.substr($CacheName,0,1);//缓存文件存放目录
  $CacheUrl=$CacheDir.'/'.$CacheName;//缓存文件的完整路径
  //GET方式请求才缓存，POST之后一般都希望看到最新的结果 
  if($_SERVER['REQUEST_METHOD']=='GET'){
    //如果缓存文件存在，并且没有过期，就把它读出来。
    if(file_exists($CacheUrl) && time()-filemtime($CacheUrl)<CACHE_TIME){ 
      $fp=fopen($CacheUrl,'rb'); 
      fpassthru($fp); 
      fclose($fp); 
      exit; 
    }
    //判断文件夹是否存在，不存在则创建
    elseif(!file_exists($CacheDir)){ 
      if(!file_exists(CACHE_ROOT)){ 
        mkdir(CACHE_ROOT,0777); 
        chmod(CACHE_ROOT,0777); 
      } 
      mkdir($CacheDir,0777); 
      chmod($CacheDir,0777); 
    }
    //回调函数，当程序结束时自动调用此函数 
    function AutoCache($contents){ 
      global $CacheUrl; 
      $fp=fopen($CacheUrl,'wb'); 
      fwrite($fp,$contents); 
      fclose($fp); 
      chmod($CacheUrl,0777); 
      //生成新缓存的同时，自动删除所有的老缓存,以节约空间,可忽略。 
      //DelOldCache();
      return $contents;
    }
    function DelOldCache(){ 
      chdir(CACHE_ROOT); 
      foreach (glob("*/*".CACHE_FIX) as $file){ 
        if(time()-filemtime($file)>CACHE_TIME)unlink($file);
      }
    }
    //回调函数 auto_cache 
    ob_start('AutoCache');
  }else{ 
    //不是GET的请求就删除缓存文件。 
    if(file_exists($CacheUrl))unlink($CacheUrl); 
  }