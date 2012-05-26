<?php
/**
 * 有道翻译
 * @author dl
 * @version 1.0.0
 * Time: 上午2:52
 */
require_once TRANSLATOR_HOME . '/translators/Translate.php';

class YoudaoTranslator extends Translate
{
    private $_api_ver = '1.1';
    private $_apiURL = 'http://fanyi.youdao.com/openapi.do?';
    private $KEY_FROM = 'satikey';
    private $KEY = '1871098428';//麻烦改成你自己的,申请地址

    function __construct()
    {
    }

    /**
     * 有道的很好实现。提供xml和Json两种数据交换方式。
     * @param $text
     * @return mixed
     */
    public function translate($text)
    {
        $param = 'keyfrom='. $this->KEY_FROM .
            '&key=' . $this->KEY .
            '&type=data&doctype=json&version=' .
            $this->_api_ver . '&q='.rawurlencode($text); //需要对查询参数进行utf-8编码

        $url=$this->_apiURL.$param;
        $data = $this->curlRequest($url);
        $youdaodata = json_decode($data, true);
        return $youdaodata['translation'][0];
    }
}