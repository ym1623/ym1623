<?php
/**
 * Google翻译
 * @author dl
 * @version 1.0.0
 * Time: 上午3:35
 */
require_once TRANSLATOR_HOME . '/translators/Translate.php';

class GoogleTranslate extends Translate
{
    private $_hl = 'zh-CN';
    private $_ie = 'UTF8';
    private $_langpair = 'zh|en';
    private $_url = 'http://translate.google.cn/translate_a/t?client=t&hl=zh-CN&sl=zh-CN&tl=en&multires=1&otf=2&ssel=0&tsel=0&sc=1&text=';

    function __construct()
    {
    }

    /**
     * 读取的结果的时候，由于G返回的不是一个格式规范的 json str ,因此拆分并做了对于的处理
     * @param $text
     * @return string
     */
    public function translate($text)
    {
        $header = array('User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.162 Safari/535.19');
        $url = $this->_url . urlencode($text);
        $response = $this->curlRequest($url, $header);

        //sorry, google returns can not be translated to json object direct
        $result = explode(',"zh-CN",,', $response);
        //preg_match('/^\[\[\[(.+?),,"zh-CN"/is', $response, $result);
        $jsonObj = json_decode($result[0] . ']');
        //now to contact the translated text
        $translated = '';
        foreach ($jsonObj[0] as $key => $val) {
            $translated .= $val[0];
        }
        return $translated;
    }
}