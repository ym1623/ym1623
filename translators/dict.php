<?php
/**
 *
 * @author dl
 * @version 1.0.0
 * Time: 上午1:59
 */
if (!defined('TRANSLATOR_HOME')) define('TRANSLATOR_HOME', dirname(__FILE__));
$text='今天晚上随便吃吃？你同意吗';
echo   bingtrans($text);
echo '<hr>';
echo youdaotrans($text);
echo '<hr>';
echo googletrans($text);

function youdaotrans($text)
{
    require_once TRANSLATOR_HOME.'/translators/Youdao.php';
    $youdao = new YoudaoTranslator();
    return $youdao->translate($text);
}

function pinyintrans()
{

}

function googletrans($text)
{
    require_once TRANSLATOR_HOME.'/translators/Google.php';
    $google = new GoogleTranslate();
    return $google->translate($text);
}

function bingtrans($text)
{
    require_once TRANSLATOR_HOME.'/translators/Bing.php';
    $bing = new BingTranslator();
    return $bing->translate($text);
}

//未实现
function badidutrans($text)
{
    return $text;
    require_once TRANSLATOR_HOME.'/translators/Baidu.php';
    $baidu = new BaiduTranslator();
    return $baidu->translate($text);
}

/*@ example
    比如通过youdao

     http://api.satikey.com/?via=youdao&text=翻译示例

    通过google

     http://api.satikey.com/?via=google&text=翻译示例

    通过bing

     http://api.satikey.com/?via=bing&text=翻译示例
 */