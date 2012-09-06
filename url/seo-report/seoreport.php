<?php
/**
 * 
 * SEO report for different metrics
 * 
 * @category   SEO
 * @author     Chema <chema@garridodiaz.com>
 * @copyright  (c) 2009-2012 Open Classifieds Team
 * @license    GPL v3
 * Based on  seo report script http://www.phpeasycode.com && PHP class SEOstats
 *
 */
class seoreport{
	

	/**
	 * 
	 * check if a url is online/alive
	 * @param string $url
	 * @return bool
	 */
	public static function is_alive($url)
	{
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback'); 
		curl_setopt($ch, CURLOPT_FAILONERROR, 1); 
		curl_exec ($ch); 
		$int_return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
		curl_close ($ch); 
		
		if ($int_return_code != 200 && $int_return_code != 302 && $int_return_code != 304) 
		{ 
		    return FALSE;
		}
		else return TRUE;
	}
	
    /**
     * HTTP GET request with curl.
     *
     * @param     string      $url        String, containing the URL to curl.
     * @return    string        Returns string, containing the curl result.
     *
     */
    protected static function get_html($url)
    {
        $ch  = curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_MAXREDIRS,2);
        if(strtolower(parse_url($url, PHP_URL_SCHEME)) == 'https')
        {
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,1);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,1);
        }
        $str = curl_exec($ch);
        curl_close($ch);

        return ($str)?$str:FALSE;
    }

    /**
     * 
     * get the domain from any URL
     * @param string $url
     */
	public static function domain_name($url)
	{
		$nowww = ereg_replace('www\.','',$url);
		$domain = parse_url($nowww);
		
		if(!empty($domain["host"]))
		    return $domain["host"];
		else
		    return $domain["path"];
	}
	
	/**
	 * 
	 * get the metas from a url and the language of the site
	 * @param string $url
	 * @return array
	 */
	public static function meta_info($url)
	{
		//doesn't work at mediatemple
		/*$html = new DOMDocument();
		
		if(!$html->loadHtmlFile($url)) 
			return FALSE;*/
			
		if (!$html_content = self::get_html($url)) 
                return FALSE;

        $html = new DOMDocument();
		$html->loadHtml($html_content); 
		
			
		$xpath = new DOMXPath( $html );
		
		$url_info = array();
		
		$langs = $xpath->query( '//html' );
		foreach ($langs as $lang)
		{
		    $url_info['language'] = $lang->getAttribute('lang');
		}
		
		$metas = $xpath->query( '//meta' );
		foreach ($metas as $meta)
		{
			if ($meta->getAttribute('name'))
			{
				$url_info[$meta->getAttribute('name')] = $meta->getAttribute('content');
			}
		}
		
		return $url_info;
	}
	
	/**
	 * 
	 * Alexa rank
	 * @param string $url
	 * @return integer
	 */
	public static function alexa_rank($url) 
	{
		$domain 	= self::domain_name($url);
		$request 	= "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $domain;
		$data 		= self::get_html($request);
		preg_match('/<POPULARITY URL="(.*?)" TEXT="([\d]+)"\/>/si', $data, $p);
		return ($l[2]) ? $l[2] : NULL;
	}
	
	/**
	 * 
	 * Alexa inbounds link
	 * @param string $url
	 * @return integer
	 */
	public static function alexa_links($url) 
	{
		$domain 	= self::domain_name($url);
		$request 	= "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $domain;
		$data 		= self::get_html($request);
		preg_match('/<LINKSIN NUM="([\d]+)"\/>/si', $data, $l);
		return ($l[1]) ? $l[1] : NULL;
	}

	/**
     * Returns total amount of results for any Google search,
     * requesting the deprecated Websearch API.
     *
     * @param        string        $query      String, containing the search query.
     * @return       integer                   Returns a total count.
     */
    public static function google_pages($url)
    {
    	//$query = self::domain_name($url);
        $url  = 'http://ajax.googleapis.com/ajax/services/search/web?v=1.0&rsz=1&q='.$url;
        $str  = self::get_html($url);
        $data = json_decode($str);

        return (!isset($data->responseData->cursor->estimatedResultCount))
                ? '0'
                : intval($data->responseData->cursor->estimatedResultCount);
    }
	
    /**
     * 
     * gets the inbounds links from a site
     * @param string $url
     * @param integer
     */
	public static function google_links($url) 
	{
		$request 	= "http://www.google.com/search?q=" . urlencode("link:" . $url) . "&amp;hl=en";
		$data 		= self::get_html($request);
		preg_match('/<div id=resultStats>(About )?([\d,]+) result/si', $data, $l);
		return ($l[2]) ? $l[2] :  NULL;
	}

	/**
	 * 
	 * web of trust rating
	 * @param string $url
	 * @reutn integer
	 */
	public static function WOT_rating($url) 
	{
		$domain  = self::domain_name($url);
		$request = "http://api.mywot.com/0.4/public_query2?target=" . $domain;
		$data 	 = self::get_html($request);
		preg_match_all('/<application name="(\d+)" r="(\d+)" c="(\d+)"\/>/si', $data, $regs);
		$trustworthiness = ($regs[2][0]) ? $regs[2][0] : NULL;
		return (is_numeric($trustworthiness))? $trustworthiness:NULL;
	}
	
	
	/**
	 * 
	 * how old is the domain?
	 * @param string $domain
	 * @return integer unixtime
	 */
	public static function domain_age($domain) 
	{
		$request = "http://reports.internic.net/cgi/whois?whois_nic=" . $domain . "&type=domain";
		$data 	 = self::get_html($request);
		preg_match('/Creation Date: ([a-z0-9-]+)/si', $data, $p);
		return (!$p[1])?FALSE:strtotime($p[1]);
	}

	/**
	 * 
	 * counts how many tweets about the url
	 * @param string $url
	 * @return integer
	 */
	public static function tweet_count($url)
	{
        $url = urlencode($url);
        $twitterEndpoint = "http://urls.api.twitter.com/1/urls/count.json?url=%s";
        $fileData = file_get_contents(sprintf($twitterEndpoint, $url)); 
        $json = json_decode($fileData, true);
        unset($fileData);               // free memory
        return (is_numeric($json['count']))? $json['count']:NULL;
    }
    
    /**
     * Returns the total amount of Facebook Shares for a single page
     *
     * @link          https://graph.facebook.com/
     * @param         string     The URL to check.
     * @return        integer    Returns the total amount of Facebook
	 */
    public static function facebook_shares($q)
    {
        //Execution and result of Json
        $str  = self::get_html('http://graph.facebook.com/?id='.urlencode($q));

        $data = json_decode($str);

        //Return only number of facebook shares
        $r = $data->shares;
        return ($r != NULL) ? $r : intval('0');
    }
    
    /**
     * 
     * get the pagespeed rank over 100
     * @param string $url
     * @return integer
     */
    public static function page_speed($url)
    {
        $url  = 'https://developers.google.com/_apps/pagespeed/run_pagespeed?url='.$url.'&format=json';
        $str  = self::get_html($url);

        $data = json_decode($str);
        return intval($data->results->score);
    }
    
    /**
     * 
     * get google page rank
     * @param string $url
     * @return integer
     */
    public static function page_rank($url) 
    {
 		$query = "http://toolbarqueries.google.com/tbr?client=navclient-auto&ch=".self::CheckHash(self::HashURL($url)). "&features=Rank&q=info:".$url."&num=100&filter=0";
   	    $data  = self::get_html($query);//die(print_r($data));
	    $pos   = strpos($data, "Rank_");
	    if($pos === false)
	    {
	    	return NULL;
	    } 
	    else
	   {
	        $pagerank = substr($data, $pos + 9);
	        return $pagerank;
	    }
	}
    
	// functions for google pagerank
	
    /**
     * To calculate PR functions
     */
    public static function StrToNum($Str, $Check, $Magic)
	{
	    $Int32Unit = 4294967296;  // 2^32
	 
	    $length = strlen($Str);
	    for ($i = 0; $i < $length; $i++) {
	        $Check *= $Magic;
	        //If the float is beyond the boundaries of integer (usually +/- 2.15e+9 = 2^31),
	        //  the result of converting to integer is undefined
	        //  refer to http://www.php.net/manual/en/language.types.integer.php
	        if ($Check >= $Int32Unit) {
	            $Check = ($Check - $Int32Unit * (int) ($Check / $Int32Unit));
	            //if the check less than -2^31
	            $Check = ($Check < -2147483648) ? ($Check + $Int32Unit) : $Check;
	        }
	        $Check += ord($Str{$i});
	    }
	    return $Check;
	}
	 
	/**
	  * Genearate a hash for a url
	  */
	public static function HashURL($String)
	{
	    $Check1 = self::StrToNum($String, 0x1505, 0x21);
	    $Check2 = self::StrToNum($String, 0, 0x1003F);
	 
	    $Check1 >>= 2;
	    $Check1 = (($Check1 >> 4) & 0x3FFFFC0 ) | ($Check1 & 0x3F);
	    $Check1 = (($Check1 >> 4) & 0x3FFC00 ) | ($Check1 & 0x3FF);
	    $Check1 = (($Check1 >> 4) & 0x3C000 ) | ($Check1 & 0x3FFF);
	 
	    $T1 = (((($Check1 & 0x3C0) << 4) | ($Check1 & 0x3C)) <<2 ) | ($Check2 & 0xF0F );
	    $T2 = (((($Check1 & 0xFFFFC000) << 4) | ($Check1 & 0x3C00)) << 0xA) | ($Check2 & 0xF0F0000 );
	 
	    return ($T1 | $T2);
	}
	   
	/**
	  * genearate a checksum for the hash string
	  */
	public static function CheckHash($Hashnum)
	{
	    $CheckByte = 0;
	    $Flag = 0;
	 
	    $HashStr = sprintf('%u', $Hashnum) ;
	    $length = strlen($HashStr);
	 
	    for ($i = $length - 1;  $i >= 0;  $i --) {
	        $Re = $HashStr{$i};
	        if (1 === ($Flag % 2)) {
	            $Re += $Re;
	            $Re = (int)($Re / 10) + ($Re % 10);
	        }
	        $CheckByte += $Re;
	        $Flag ++;
	    }
	 
	    $CheckByte %= 10;
	    if (0 !== $CheckByte) {
	        $CheckByte = 10 - $CheckByte;
	        if (1 === ($Flag % 2) ) {
	            if (1 === ($CheckByte % 2)) {
	                $CheckByte += 9;
	            }
	            $CheckByte >>= 1;
	        }
	    }
	 
	    return '7'.$CheckByte.$HashStr;
	}
}
