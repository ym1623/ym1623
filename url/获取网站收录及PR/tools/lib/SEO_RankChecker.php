<?php

class SEO_RankChecker
{
	private $url;

	public function __construct($url)
	{
		$this->url = preg_replace('/http\:\/\//si', '', $url);
	}
	private function getContent($url)
	{
		$snoopy=new Snoopy();
		$snoopy->agent='Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.41 Safari/534.7';
		$snoopy->fetch($url);

		if($snoopy->status==200)
		{
			$charset='utf-8';
			$snoopy->results=strtolower($snoopy->results);
			//首先从html获取编码
			preg_match("/<meta.+?charset=[^\w]?([-\w]+)/i",$snoopy->results,$temp) ? strtolower($temp[1]):"";
			if(isset($temp[1])!="")
			{
				$charset=$temp[1]; 
			}
			else if(!empty($snoopy->headers))
			{
				//从header中获取编码
				$hstr=strtolower(implode("|||",$snoopy->headers));
				preg_match("/charset=[^\w]?([-\w]+)/is",$hstr,$lang) ? strtolower($lang[1]):"";
				if($lang[1]!="")
				{
					$charset=$lang[1];
				}
				else
				{
					$encode_arr=array("UTF-8","GB2312","GBK","BIG5","ASCII","EUC-JP","Shift_JIS","CP936","ISO-8859-1","JIS","eucjp-win","sjis-win");
					$encoded=mb_detect_encoding($snoopy->results,$encode_arr);
					if($encoded)
					{
						$charset=strtolower($encoded);
					}
				}
			}
			else 
			{
				$encode_arr=array("UTF-8","GB2312","GBK","BIG5","ASCII","EUC-JP","Shift_JIS","CP936","ISO-8859-1","JIS","eucjp-win","sjis-win");
				$encoded=mb_detect_encoding($snoopy->results,$encode_arr);
				if($encoded)
				{
					$charset=strtolower($encoded);
				}
			}
			
			if($charset!="utf-8" && $charset!==false)
			{
				$snoopy->results=mb_convert_encoding($snoopy->results,"UTF-8",$charset);
			}
			return $snoopy->results;
		}
		else 
		{
			return '';
		}
	}
	//获取alexa排名
	public function getAlexaRank()
	{
		$url = $this->url;
		$xml = @simplexml_load_string(file_get_contents('http://data.alexa.com/data?cli=10&url=' . $url));
		return $xml ? $xml->SD->POPULARITY['TEXT'] : '';
	}

	//如果被dmoz收录就返回dmoz的目录名称
	public function getDmoz()
	{
		$url = preg_replace('/^www\./', '', $this->url);
		$url = "http://search.dmoz.org/cgi-bin/search?search=$url";
		$data = $this->getContent($url);
		if(preg_match('<center>No <b><a href="http://dmoz\.org/">Open Directory Project</a></b> results found</center>', $data))
		{
			$value = false;
		}
		else
		{
			$value = true;
		}
		return $value;
	}

	
	//如果被yahoo收录就返回yahoo的目录名称
	public function getYahooDirectory()
	{
		$url = preg_replace('/^www\./', '', $this->url);
		$url = "http://search.yahoo.com/search/dir?p=$url";
		$data = $this->getContent($url);
		if(preg_match('No Directory Search results were found\.', $data)) {
			$value = false;
		} else {
			$value = true;
		}
		return $value;
	}
	//获取Baidu收录
	public function getIndexedBaidu()
	{
		$url = $this->url;
		$url = 'http://www.baidu.com/s?wd=site%3A'.urlencode($url);
		$data = $this->getContent($url);
		preg_match('/找到相关结果数([0-9\,]+)个/si', $data, $p);
		$value = isset($p[1]) ? $this->toInt($p[1]) : 0;

		return $value;
	}
	
	//获取google收录
	public function getIndexedGoogle()
	{
		$url = $this->url;
		$url = 'http://www.google.com/search?hl=en&safe=off&btnG=Search&q=site%3A'.urlencode($url);
		$data = $this->getContent($url);
		preg_match('/([0-9\,]+) result/si', $data, $p);
		$value = isset($p[1]) ? $this->toInt($p[1]) : 0;

		return $value;
	}
	
	/**
	*功能：获取Google反链 
	*时间： 2011-10-13 下午11:28:45
	*/
	public function getBacklinksGoogle()
	{
		$url = $this->url;
		$url = 'http://www.google.com/search?q=link%3A'.urlencode($url);
		$data = $this->getContent($url);
		preg_match('/of about \<b\>([0-9\,]+)\<\/b\>/si', $data, $p);
		$value = isset($p[1]) ? $this->toInt($p[1]) : 0;
		return $value;
	}
	
	/**
	*功能：获取Yahoo反链 
	*时间： 2011-10-13 下午11:28:45
	*/
	public function getBacklinksYahoo()
	{
		$url = $this->url;
		$url = 'http://siteexplorer.search.yahoo.com/search?p='.urlencode($url);
		$data = $this->getContent($url);
		preg_match('/Inlinks \(([0-9\,]+)\)/si', $data, $p);
		$value = isset($p[1]) ? $this->toInt($p[1]) : 0;
		return $value;
	}

	//获取域名年龄
	public function getAge()
	{
		$url = preg_replace('/^www\./', '', $this->url);
		$url = 'http://www.who.is/whois/'.urlencode($url);
		$data = $this->getContent($url);
		preg_match('#(?:Creation Date|Created On):\s*([a-z0-9/-]+)#si', $data, $p);
		if(!isset($p[1]))
		{
			return null;
		}
		$value = time() - strtotime($p[1]);
		return $value;
	}
//获取yahoo的收录数量
	public function getIndexedYahoo()
	{
		$url = $this->url;
		$url = 'http://siteexplorer.search.yahoo.com/search?p='.urlencode($url);
		$data = $this->getContent($url);
		preg_match('/Pages \(([0-9,]{1,})\)/im', $data, $p);
		$value = isset($p[1]) ? $this->toInt($p[1]) : 0;
		return $value;
	}
	/**
	*功能：获取PR 
	*时间： 2011-10-13 下午11:27:19
	*/
	public function getPagerank()
	{
		$chwrite = $this->CheckHash($this->HashURL($this->url));

		$url="http://toolbarqueries.google.com/tbr?client=navclient-auto&ch=".$chwrite."&features=Rank&q=info:".$this->url."&num=100&filter=0";
		$data = $this->getContent($url);
		preg_match('#Rank_[0-9]:[0-9]:([0-9]+){1,}#si', $data, $p);
		$value = isset($p[1]) ? $p[1] : 0;

		return $value;
	}
	
	private function toInt($string)
	{
		return preg_replace('#[^0-9]#si', '', $string);
	}

	//--> for google Piwik_SEO_Ranks
	private function StrToNum($Str, $Check, $Magic)
	{
		$Int32Unit = 4294967296; // 2^32

		$length = strlen($Str);
		for($i = 0; $i < $length; $i++)
		{
			$Check *= $Magic;
			// If the float is beyond the boundaries of integer (usually +/- 2.15e+9 = 2^31),
			// the result of converting to integer is undefined
			// refer to http://www.php.net/manual/en/language.types.integer.php
			if($Check >= $Int32Unit)
			{
				$Check = ($Check - $Int32Unit * (int) ($Check / $Int32Unit));
				//if the check less than -2^31
				$Check = ($Check < -2147483648) ? ($Check + $Int32Unit) : $Check;
			}
			$Check += ord($Str{$i});
		}
		return $Check;
	}

	/*
	* Genearate a hash for a url
	*/
	private function HashURL($String)
	{
		$Check1 = $this->StrToNum($String, 0x1505, 0x21);
		$Check2 = $this->StrToNum($String, 0, 0x1003F);

		$Check1 >>= 2;
		$Check1 = (($Check1 >> 4) & 0x3FFFFC0 ) | ($Check1 & 0x3F);
		$Check1 = (($Check1 >> 4) & 0x3FFC00 ) | ($Check1 & 0x3FF);
		$Check1 = (($Check1 >> 4) & 0x3C000 ) | ($Check1 & 0x3FFF);

		$T1 = (((($Check1 & 0x3C0) << 4) | ($Check1 & 0x3C)) <<2 ) | ($Check2 & 0xF0F );
		$T2 = (((($Check1 & 0xFFFFC000) << 4) | ($Check1 & 0x3C00)) << 0xA) | ($Check2 & 0xF0F0000 );

		return ($T1 | $T2);
	}

	//--> for google Piwik_SEO_Ranks
	/*
	* genearate a checksum for the hash string
	*/
	private function CheckHash($Hashnum)
	{
		$CheckByte = 0;
		$Flag = 0;

		$HashStr = sprintf('%u', $Hashnum) ;
		$length = strlen($HashStr);

		for($i = $length - 1; $i >= 0; $i --)
		{
			$Re = $HashStr{$i};
			if(1 === ($Flag % 2)) {
				$Re += $Re;
				$Re = (int)($Re / 10) + ($Re % 10);
			}
			$CheckByte += $Re;
			$Flag ++;
		}

		$CheckByte %= 10;
		if(0 !== $CheckByte)
		{
			$CheckByte = 10 - $CheckByte;
			if(1 === ($Flag % 2) )
			{
				if(1 === ($CheckByte % 2))
				{
					$CheckByte += 9;
				}
				$CheckByte >>= 1;
			}
		}

		return '7'.$CheckByte.$HashStr;
	}
}
?>