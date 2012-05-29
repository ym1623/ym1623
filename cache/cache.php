<?php
    define('Root',dirname(__FILE__));
    //公共函数
    /**
     * safe_file_put_contents() 一次性完成打开文件，写入内容，关闭文件三项工作，并且确保写入时不会造成并发冲突
     *
     * @param string $filename
     * @param string $content
     * @param int $flag
     *
     * @return boolean
     */
    function safe_file_put_contents($filename, & $content)
    {
        $fp = fopen($filename, 'wb');
        if ($fp) {
            flock($fp, LOCK_EX);
            fwrite($fp, $content);
            flock($fp, LOCK_UN);
            fclose($fp);
            return true;
        } else {
            return false;
        }
    }

    if (!function_exists('file_put_contents'))
    {
        function file_put_contents($filename, & $content)
        {
            return safe_file_put_contents($filename, $content);
        }
    }

    /**
     * safe_file_get_contents() 用共享锁模式打开文件并读取内容，可以避免在并发写入造成的读取不完整问题
     *
     * @param string $filename
     *
     * @return mixed
     */
        function safe_file_get_contents($filename)
        {
            $fp = fopen($filename, 'rb');
            if ($fp) {
                flock($fp, LOCK_SH);
                clearstatcache();
                $filesize = filesize($filename);
                if ($filesize > 0) {
                    $data = fread($fp, $filesize);
                } else {
                    $data = false;
                }
                flock($fp, LOCK_UN);
                fclose($fp);
                return $data;
            } else {
                return false;
            }
        }
    /**
     * 创建一个目录树
     *
     * 用法：
     * <code>
     * mkdirs('/top/second/3rd');
     * </code>
     *
     * @param string $dir
     * @param int $mode
     */
        function mkdirs($dir, $mode = 0777)
        {
            if (!is_dir($dir)) {
                mkdirs(dirname($dir), $mode);
                return mkdir($dir, $mode);
            }
            return true;
        }
    /**
     * 读取指定缓存的内容，如果缓存内容不存在或失效，则返回 false
     *
     * example:
     * <code>
     * $cacheId = 'my_cache_id';
     * if (!($data = FLEA::getCache($cacheId))) {
     *      $data = 'Data';
     *      FLEA::writeCache($cacheId, $data);
     * }
     * </code>
     *
     * 如果 $cacheIdIsFilename 参数为 true，则生成的缓存文件会以 $cacheId 参数作为文件名。
     * 基于安全原因，尽量不要将 $cacheIdIsFilename 参数设置为 true。
     *
     * $time 参数默认为缓存内容的有效期。其计算依据是以缓存文件的最后更新时间为准（也就是最后一次更新该缓存内容的时间）。
     *
     * 如果 $timeIsLifetime 为 false，则 $time 参数表示用于和缓存文件最更新时间进行比较的依据。
     * 如果 $time 指定的时间早于缓存文件的最后更新时间，则判断缓存内容为有效。
     *
     * @param string $cacheId 缓存ID，不同的缓存内容应该使用不同的ID
     * @param int $time 缓存过期时间或缓存生存周期
     * @param boolean $timeIsLifetime 指示 $time 参数的作用
     * @param boolean $cacheIdIsFilename 指示是否用 $cacheId 作为文件名
     *
     * @return mixed 返回缓存的内容，缓存不存在或失效则返回 false
     */

        function getCache($cacheId, $time = 900, $timeIsLifetime = true, $cacheIdIsFilename = false)
        {   $cacheDir =  Root.'/cache/'.substr(md5($cacheId),0,2).'/'.substr(md5($cacheId),1,2).'/';
            if(!is_dir($cacheDir)){
            mkdirs($cacheDir);}
            if (is_null($cacheDir)) {
                return false;
            }

            if ($cacheIdIsFilename) {
                $cacheFile = $cacheDir . '/' . preg_replace('/[^a-z0-9\-_]/i', '_', $cacheId) . '.php';
            } else {
                $cacheFile = $cacheDir . '/' . md5($cacheId) . '.php';
            }
            if (!file_exists($cacheFile)) { return false; }

            if ($timeIsLifetime && $time == -1) {
                $data = safe_file_get_contents($cacheFile);
                $hash = substr($data, 16, 32);
                $data = substr($data, 48);
                if (crc32($data) != $hash || strlen($hash) != 32) {
                    return false;
                }
                return $data !== false ? unserialize($data) : false;
            }

            $filetime = filemtime($cacheFile);
            if ($timeIsLifetime) {
                if (time() >= $filetime + $time) { return false; }
            } else {
                if ($time >= $filetime) { return false; }
            }
            $data = safe_file_get_contents($cacheFile);
            $hash = substr($data, 16, 32);
            $data = substr($data, 48);
            if (crc32($data) != $hash || strlen($hash) != 32) {
                return false;
            }
            return $data !== false ? unserialize($data) : false;
        }

    /**
     * 将变量内容写入缓存
     *
     * example:
     * <code>
     * $data = .....; // 要缓存的数据，可以是任何类型的值
     * // cache id 用于唯一指定一个缓存数据，以便稍后取出缓存数据
     * $cacheId = 'data_cahce_1';
     * FLEA::writeCache($cacheId, $data);
     * </code>
     *
     * @param string $cacheId
     * @param mixed $data
     * @param boolean $cacheIdIsFilename
     *
     * @return boolean
     */
        function writeCache($cacheId, $data, $cacheIdIsFilename = false)
        {
            $cacheDir = Root.'/cache/'.substr(md5($cacheId),0,2).'/'.substr(md5($cacheId),1,2).'/';
            if(!is_dir($cacheDir)){
            mkdirs($cacheDir);}
            
            if (is_null($cacheDir)) {
                return false;
            }

            if ($cacheIdIsFilename) {
                $cacheFile = $cacheDir . '/' . preg_replace('/[^a-z0-9\-_]/i', '_', $cacheId) . '.php';
            } else {
                $cacheFile = $cacheDir . '/' . md5($cacheId) . '.php';
            }

            $data = serialize($data);
            $prefix = '<?php die(); ?> ';
            $hash = sprintf('% 32d', crc32($data));
            $data = $prefix . $hash . $data;

            if (!safe_file_put_contents($cacheFile, $data)) {
                return false;
            } else {
                return true;
            }
        }
    /**
     * 删除指定的缓存内容
     *
     * @param string $cacheId
     * @param boolean $cacheIdIsFilename
     *
     * @return boolean
     */
        function purgeCache($cacheId, $cacheIdIsFilename = false)
        {
            $cacheDir = Root.'/cache/'.substr(md5($cacheId),0,2).'/'.substr(md5($cacheId),1,2).'/';
            if(!is_dir($cacheDir)){
            mkdirs($cacheDir);}

            if (is_null($cacheDir)) {
                return false;
            }

            if ($cacheIdIsFilename) {
                $cacheFile = $cacheDir . '/' . preg_replace('/[^a-z0-9\-_]/i', '_', $cacheId) . '.php';
            } else {
                $cacheFile = $cacheDir . '/' . md5($cacheId). '.php';
            }

            if (file_exists($cacheFile)) {
                return unlink($cacheFile);
            }
            return true;
        }