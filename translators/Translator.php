<?php
/**
 * User: Lei
 * Date: 12-4-20
 * Time: 下午6:48
 */
if (!defined('TRANSLATOR_HOME')) define('TRANSLATOR_HOME', dirname(__FILE__));
class Translators
{
    public static function youdaotrans($text)
    {
        require_once TRANSLATOR_HOME.'/translators/Youdao.php';
        $youdao = new YoudaoTranslator();
        return $youdao->translate($text);
    }

    public static function googletrans($text)
    {
        require_once TRANSLATOR_HOME.'/translators/Google.php';
        $google = new GoogleTranslate();
        return $google->translate($text);
    }

    public static function bingtrans($text)
    {
        require_once TRANSLATOR_HOME.'/translators/Bing.php';
        $bing = new BingTranslator();
        return $bing->translate($text);
    }

    public static function badidutrans($text)
    {
        return $text;
        //没实现
        require_once TRANSLATOR_HOME.'/translators/Baidu.php';
        $baidu = new BaiduTranslator();
        return $baidu->translate($text);
    }
}
