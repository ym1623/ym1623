<?php
/**
 *
 * @author dl
 * @version 1.0.0
 * Time: 下午3:27
 */
require_once BLOG_SLUG_TRANSLATOR . '/translators/Translate.php';

Class BaiduTranslator extends Translate
{
    private $_ie = 'utf-8';
    private $_source = 'txt';
    private $_from = 'auto';
    private $_to = 'auto';

    private $_token = 'ba47dfe8c82636a0e11b957c2db3d12f';

    function __construct()
    {
    }

    /**
     * Badidu 的还没有实现。。比较麻烦。要读取首页
     * @param $text
     */
    function translate($text)
    {

        $postData = array(
            'ie' => $this->_ie,
            'source' => $this->_source,
            'token' => $this->_token,
            'from' => $this->_from,
            'to' => $this->_to,
            't' => time()
        );
        $url = 'http://fanyi.baidu.com/transcontent';
        $header = array('User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.162 Safari/535.19',
            'Cookie:BAIDUID=F95017B8603D722CF951F2F0C4E104CA:FG=1; USERID=c74ec803cd0448d8381454c58a; BDUT=kszlF95017B8603D722CF951F2F0C4E104CA13624ff6f7a0; BDUSS=HZRZFFWQmt2YnZwYVF1WX5rUGQwb0JyNlgwZkFwM2RjSVhTdEo4dU5NM0sxSGRRQVFBQUFBJCQAAAAAAAAAAAoqyA0fOKgLc2F0aWZhbmllAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAYIArMAAAAOD6RX0AAAAA-WZCAAAAAAAxMC4yNi4yMsqGik~KhopPT; _EXPS=0',
            'X-Requested-With: XMLHttpRequest');
        //ie=utf-8&source=txt&query=%E9%A6%96%E5%85%88%E6%98%AF%E8%81%9A%E4%BC%9A%E5%9C%BA%E5%9C%B0%E7%9A%84%E6%AD%A3%E9%97%A8%E3%80%82%E8%BF%99%E4%B8%AA%E5%9C%B0%E6%96%B9%E6%98%AF%E4%B8%80%E4%B8%AA%E5%92%96%E5%95%A1%E9%A6%86%EF%BC%8C%E5%8F%AF%E4%BB%A5%E5%90%83%E9%A5%AD%EF%BC%8C%E8%80%81%E6%9D%BF%E6%98%AF%E5%A4%96%E5%9B%BD%E4%BA%BA%EF%BC%8C%E6%9C%89N%E5%A4%9A%E7%9A%84%E8%8B%B1%E6%96%87%E4%B9%A6%E7%B1%8D%EF%BC%8C%E5%BE%88%E5%A4%9A%E5%BE%88%E5%A4%9A%E7%9A%84%E8%80%81%E5%A4%96%E5%9C%A8%E8%BF%99%E9%87%8C%EF%BC%8C%E6%98%AF%E4%B8%80%E4%B8%AA%E5%B0%8F%E8%B5%84%E5%A5%BD%E5%8E%BB%E5%A4%84&t=1334907038083
        //&
        //&from=auto&to=auto
        $response = $this->curlRequest($url, $header, $postData);
        var_dump($response);
        $jsonObj = json_decode($response);
        print_r($jsonObj);
    }

}