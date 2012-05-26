<?php
/**
 *
 * @author dl
 * @version 1.0.0
 * Time: 下午12:46
 */


class AccessTokenAuthentication
{
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
    function getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl)
    {
        try {
            //Initialize the Curl Session.
            $ch = curl_init();
            //Create the request Array.
            $paramArr = array(
                'grant_type' => $grantType,
                'scope' => $scopeUrl,
                'client_id' => $clientID,
                'client_secret' => $clientSecret
            );
            //Create an Http Query.//
            $paramArr = http_build_query($paramArr);
            //Set the Curl URL.
            curl_setopt($ch, CURLOPT_URL, $authUrl);
            //Set HTTP POST Request.
            curl_setopt($ch, CURLOPT_POST, TRUE);
            //Set data to POST in HTTP "POST" Operation.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paramArr);
            //CURLOPT_RETURNTRANSFER- TRUE to return the transfer as a string of the return value of curl_exec().
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            //CURLOPT_SSL_VERIFYPEER- Set FALSE to stop cURL from verifying the peer's certificate.
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            //Execute the  cURL session.
            $strResponse = curl_exec($ch);
            //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if ($curlErrno) {
                $curlError = curl_error($ch);
                throw new Exception($curlError);
            }
            //Close the Curl Session.
            curl_close($ch);
            //Decode the returned JSON string.
            $objResponse = json_decode($strResponse);
            if ($objResponse->error) {
                throw new Exception($objResponse->error_description);
            }
            return $objResponse->access_token;
        } catch (Exception $e) {
            echo "Exception-" . $e->getMessage();
        }
    }
}

/*
 * Class:HTTPTranslator
 *
 * Processing the translator request.
 */
Class HTTPTranslator
{
    /*
     * Create and execute the HTTP CURL request.
     *
     * @param string $url        HTTP Url.
     * @param string $authHeader Authorization Header string.
     * @param string $postData   Data to post.
     *
     * @return string.
     *
     */
    function curlRequest($url, $authHeader)
    {
        //Initialize the Curl Session.
        $ch = curl_init();
        //Set the Curl url.
        curl_setopt($ch, CURLOPT_URL, $url);
        //Set the HTTP HEADER Fields.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authHeader, "Content-Type: text/xml"));
        //CURLOPT_RETURNTRANSFER- TRUE to return the transfer as a string of the return value of curl_exec().
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        //CURLOPT_SSL_VERIFYPEER- Set FALSE to stop cURL from verifying the peer's certificate.
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, False);
        //Execute the  cURL session.
        $curlResponse = curl_exec($ch);
        //Get the Error Code returned by Curl.
        $curlErrno = curl_errno($ch);
        if ($curlErrno) {
            $curlError = curl_error($ch);
            throw new Exception($curlError);
        }
        //Close a cURL session.
        curl_close($ch);
        return $curlResponse;
    }
}

try {
    //Client ID of the application.
    $clientID = "blog-slug-translator";
    //Client Secret key of the application.
    $clientSecret = "Iep1DGNi6lXAyN6QG1en2H6epMNMXUss3bF7Tvijlhw=";
    //OAuth Url.
    $authUrl = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/";
    //Application Scope Url
    $scopeUrl = "http://api.microsofttranslator.com";
    //Application grant type
    $grantType = "client_credentials";

    //Create the AccessTokenAuthentication object.
    $authObj = new AccessTokenAuthentication();
    //Get the Access token.
    $accessToken = $authObj->getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl);
    //Create the authorization Header string.
    $authHeader = "Authorization: Bearer " . $accessToken;

    //Set the params.//
    $fromLanguage = "en";
    $toLanguage = "zh-CHS";
    $inputStr = "the best machine translation technology cannot always provide translations tailored to a site or users like a human";
    $contentType = 'text/plain';
    $category = 'general';

    $params = "text=" . urlencode($inputStr) . "&to=" . $toLanguage . "&from=" . $fromLanguage;
    $translateUrl = "http://api.microsofttranslator.com/v2/Http.svc/Translate?$params";

    //Create the Translator Object.
    $translatorObj = new HTTPTranslator();

    //Get the curlResponse.
    $curlResponse = $translatorObj->curlRequest($translateUrl, $authHeader);

    //Interprets a string of XML into an object.
    $xmlObj = simplexml_load_string($curlResponse);
    var_dump($xmlObj);
    foreach ((array)$xmlObj[0] as $val) {
        $translatedStr = $val;
    }
    echo "<table border=2px>";
    echo "<tr>";
    echo "<td><b>From $fromLanguage</b></td><td><b>To $toLanguage</b></td>";
    echo "</tr>";
    echo "<tr><td>" . $inputStr . "</td><td>" . $translatedStr . "</td></tr>";
    echo "</table>";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}


/*
 * Create and execute the HTTP CURL request.
 *
 * @param string $url        HTTP Url.
 * @param string $authHeader Authorization Header string.
 * @param string $postData   Data to post.
 *
 * @return string.
 *
 */
function curlRequest($url, $authHeader, $postData = '')
{
    //Initialize the Curl Session.
    $ch = curl_init();
    //Set the Curl url.
    curl_setopt($ch, CURLOPT_URL, $url);
    //Set the HTTP HEADER Fields.
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($authHeader, "Content-Type: text/xml"));
    //CURLOPT_RETURNTRANSFER- TRUE to return the transfer as a string of the return value of curl_exec().
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //CURLOPT_SSL_VERIFYPEER- Set FALSE to stop cURL from verifying the peer's certificate.
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, False);
    if ($postData) {
        //Set HTTP POST Request.
        curl_setopt($ch, CURLOPT_POST, TRUE);
        //Set data to POST in HTTP "POST" Operation.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    }
    //Execute the  cURL session.
    $curlResponse = curl_exec($ch);
    //Get the Error Code returned by Curl.
    $curlErrno = curl_errno($ch);
    if ($curlErrno) {
        $curlError = curl_error($ch);
        throw new Exception($curlError);
    }
    //Close a cURL session.
    curl_close($ch);
    return $curlResponse;
}