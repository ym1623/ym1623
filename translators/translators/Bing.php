<?php
/**
 * Bing翻译
 * @author dl
 * @version 1.0.0
 * Time: 上午2:23
 */
require_once TRANSLATOR_HOME . '/translators/Translate.php';

Class BingTranslator extends Translate
{
    //Client ID of the application.
    private $_clientID = "blog-slug-translator";
    //Client Secret key of the application.
    private $_clientSecret = "Iep1DGNi6lXAyN6QG1en2H6epMNMXUss3bF7Tvijlhw=";
    //OAuth Url.
    private $_authUrl = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/";
    //Application Scope Url
    private $_scopeUrl = "http://api.microsofttranslator.com";
    //Application grant type
    private $_grantType = "client_credentials";

    private $_fromLanguage = "";
    private $_toLanguage = "en";
    private $_via = 0;

    //private   $_contentType  = 'text/plain';
    //private   $_category     = 'general';

    function __construct($via = 0)
    {
        $this->_via = empty($via) ? 0 : $via;
    }

    /**
     * @param $loc you can leave it as '' for bing self detect
     */
    public function setLocal($loc)
    {
        $this->_fromLanguage = $loc;
    }

    /**
     *
     * @param $to the languange translate to
     */
    public function setToLanguange($to)
    {
        $this->_toLanguage = $to;
    }

    /*
     * tranlate
     * @param $text
     * @return mixed
     */
    public function translate($inputStr)
    {
        if ($this->_via == 1) {
            return $this->_viaAppId($inputStr);
        } else if ($this->_via == 2) {
            return $this->_viaApi($inputStr);
        }
        return $this->_viaWeb($inputStr);
    }

    /**
     * Bing App ID is deprecated and is no longer supported。the appid  before 3.31(not sure) can use normally
     * @param $inputStr
     * @return string
     */
    private function _viaAppId($inputStr)
    {
        $params = "appId=T6NTnVrl0UdjSEGXmhIG980nh4mAvPFD56-pHyv3odXk*&text=" . urlencode($inputStr) . "&to=" . $this->_toLanguage . "&from=" . $this->_fromLanguage;
        $translateUrl = "http://api.microsofttranslator.com/v2/Http.svc/Translate?$params";
        //Get the curlResponse.
        $curlResponse = $this->curlRequest($translateUrl);
        //Interprets a string of XML into an object.
        $xmlObj = simplexml_load_string($curlResponse);
        //var_dump($xmlObj);
        $translatedStr = '';
        foreach ((array)$xmlObj[0] as $val) {
            $translatedStr = $val;
        }
        return $translatedStr;
    }

    /*
     * from http://www.microsofttranslator.com . mk like a browser
     * @param $text
     */
    private function _viaWeb($text)
    {
        $header = array('User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.162 Safari/535.19');

        $url = 'http://api.microsofttranslator.com/v2/ajax.svc/TranslateArray?appId="T6NTnVrl0UdjSEGXmhIG980nh4mAvPFD56-pHyv3odXk*"&texts=["' . urlencode($text) . '"]&from=""&to="en"&oncomplete=_mstc1&onerror=_mste1&loc=zh-chs&ctr=China&rgp=12432088';
        $reposne = $this->curlRequest($url, $header);

        //response like _mstc1([{"From":"zh-chs","OriginalTextSentenceLengths":[17],"TranslatedText":"Please enter the text you want to translate, or Web page address","TranslatedTextSentenceLengths":[64]}]);
        preg_match_all('/_mstc1\((.+?)\);/', $reposne, $jsondata);
        $jsonObj = json_decode($jsondata[1][0]);
        return $jsonObj[0]->TranslatedText;
    }

    /**
     * 通过接口提供的方法实现
     * @param $inputStr
     * @return string
     */
    private function _viaApi($inputStr)
    {
        //官方的实例是有问题的,官方发送参数中没有appId=但实际上是需要将这个留空即可。
        $params = "appId=&text=" . urlencode($inputStr) . "&to=" . $this->_toLanguage . "&from=" . $this->_fromLanguage;
        $translateUrl = "http://api.microsofttranslator.com/v2/Http.svc/Translate?$params";
        //Get the Access token.
        $accessToken = $this->_getTokens();
        //Create the authorization Header string.
        $authHeader = "Authorization: Bearer " . $accessToken;
        $header = array($authHeader, "Content-Type: text/xml");

        //Get the curlResponse.
        $curlResponse = $this->curlRequest($translateUrl, $header);

        //Interprets a string of XML into an object.
        $xmlObj = simplexml_load_string($curlResponse);
        $translatedStr = '';
        foreach ((array)$xmlObj[0] as $val) {
            $translatedStr = $val;
        }
        return $translatedStr;
    }

    /*
    * Get the access token.
    *
    * @param string $grantType    Grant type.
    * @param string $scopeUrl     Application Scope URL.
    * @param string $clientID     Application client ID.
    * @param string $clientSecret Application client ID.
    * @param string $authUrl      Oauth Url.
    *
    * @return string.
    */
    private function _getTokens()
    {
        try {
            $postData = array(
                'grant_type' => $this->_grantType,
                'scope' => $this->_scopeUrl,
                'client_id' => $this->_clientID,
                'client_secret' => $this->_clientSecret
            );

            $header = array('User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.162 Safari/535.19');
            $response = $this->curlRequest($this->_authUrl, $header, $postData);
            $jsonObj = json_decode($response);
            //var_dump($jsonObj);
            return $jsonObj->access_token;
        } catch (Exception $e) {
            echo "Exception-" . $e->getMessage();
        }
    }
}