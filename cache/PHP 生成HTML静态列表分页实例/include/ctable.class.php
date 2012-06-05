<?
/* 
Class:    CTable
Author:   http://www.netwerk.gr 
Download: http://www.codefans.net
Written:  01/06/2006
*/ 
class CTable
{
	var $tmpHtml;
	var $cntTR;	

	function CTable()
	{
		$ar[border]="border=0";
		$ar[cellspacing]="cellspacing=0";
		$ar[cellpadding]="cellpadding=0";
		$this->args(func_get_args(),$ar);
		$this->tmpHtml="<table ".implode(" ",$ar).">";
		$this->cntTR = 0;
	}

	function tr()
	{
		if($this->cntTR++) $this->tmpHtml.="</tr>";
		$this->args(func_get_args(),$ar);
		$this->tmpHtml.="<tr ".implode(" ",$ar).">";
	}

	function td()
	{
		$args=func_get_args();
		$data=array_shift($args);
		$this->args($args,$ar);	
		$this->tmpHtml.="<td ".implode(" ",$ar).">$data</td>";
	}
	
	function th()
	{
		$args=func_get_args();
		$data=array_shift($args);
		$this->args($args,$ar);
		$this->tmpHtml.="<th ".implode(" ",$ar).">$data</th>";
	}

	function rows()
	{
		return $this->cntTR;
	}

	function html()
	{
		if($this->cntTR) $this->tmpHtml.="</tr>";
		$this->cntTR = 0;
		return $this->tmpHtml."</table>";
	}
	
	function args($args,&$ar)
	{
		settype($ar,"array");
		foreach ($args as $v)
		{
			if (is_array($v))
				foreach ($v as $ii=>$vv)
				{
					if(is_string($ii))
					{
						$n = strtolower($ii);
						if($vv && is_string($vv) && $vv[0]!="'" && $vv[0]!='"') $vv = '"'.$vv.'"';
						$ar[$n] = strlen($vv) ? "$ii=$vv" : $ii;
					}
					else
					{
						$n = explode("=",$vv);
						$n = strtolower($n[0]);
						$ar[$n] = $vv;
					}
				}
			else
			{
				$n=explode("=",$v);
				$n=strtolower($n[0]);
				if ($v) $ar[$n]=$v;
			}
		}
		return $ar;
	}
}
?>