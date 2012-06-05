<?
/* 
Class:    CProgbar
Author:   http://www.netwerk.gr 
Written:  01/06/2006
Download: http://www.codefans.net
*/ 

include_once("ctable.class.php");

class CProgbar
{
	var $Id;
	var $CurPos=0;
	var $CurPosInt=0;
	var $Max=100;
	var $Step=1;
	
	function CProgbar($id,$pos=0)
	{
		$this->Id=$id;
		$this->CurPos=$pos;
		$this->CurPosInt=(int)$pos;
	}
	
	function show($text="",$width='100%',$border='#909090',$bgcolor='#ff8400')
	{
		$pos=$this->CurPosInt;
		$tbl=new CTable($width ? "width='$width'" : "","class=progbar");
		$tbl->tr();
		$tbl->td
		(
			($pos?"$pos%":"&nbsp;"),
			"align=center",
			"style='border-left:1px solid $border;border-top:1px solid $border;border-bottom:1px solid $border'",
			"id='Prog_".$this->Id."_Txt'",
			"width=40"
		);
		if ($text) $pos=100;
		$tbl->td
		(
			"<div style='border:1px solid $border;width:100%;'>".
			"<span id='Prog_".$this->Id."' style='width:$pos%;background:$bgcolor'>".
			"$text</span></div>"
		);
		return $tbl->html();
	}

	function init($max=100,$frame='')
	{
		$this->Max=($max<100) ? 100 : $max;
		$this->Step=$max ? 100/$max : 100;
		
		if (!$frame)
			$f="var docP=document;";
		elseif ($frame='_parent')
			$f="var docP=parent.document;";
		else
			$f="var docP=parent.document.frames['$frame'].document;".
				 "if(!docP) alert('Frame \'$frame\' does not exists!');";
		print
		(
			"<script>var show=false;".$f.
			"var elP=docP.getElementById('Prog_".$this->Id."');".
			"var elPT=docP.getElementById('Prog_".$this->Id."_Txt');".
			"if(!elP) alert('Progbar \'".$this->Id."\' does not exists!');".
			"function progbar(percent){".
			"if(!elP) return;".
			"elP.style.textAlign='';".
			"elP.style.width=percent;".
			"elP.innerHTML='';".
			"elPT.innerHTML=percent;}".
			"function progbar_text(text,color,bgcolor,fontWeight){".
			"if(!elP) return;".
			"elP.style.width='100%';".
			"if (color) elP.style.color=color;".
			"if (bgcolor) elP.style.backgroundColor=bgcolor;".
			"if (fontWeight) elP.style.fontWeight=fontWeight;".
			"elP.style.textAlign='center';".
			"elP.innerHTML=text;}".
			"</script>\n"
		);
		echo str_pad('',4096)."\n";
		flush();
	}

	function step()
	{
		$this->CurPos+=$this->Step;
		if ((int)$this->CurPos>$this->CurPosInt)
		{
			$this->CurPosInt=(int)$this->CurPos;
			if ($this->CurPosInt>$this->Max) $this->CurPos=$this->CurPosInt=$this->Max;
			print("<script>progbar('".$this->CurPosInt."%');</script>\n");
			echo str_pad('',4096)."\n";
			flush();
		}
	}

	function full()
	{
		$this->CurPos=$this->CurPosInt=100;
		print("<script>progbar('100%');</script>\n");
		echo str_pad('',4096)."\n";
		flush();
	}

	function text($text,$color="",$bgcolor="",$fontWeight="normal")
	{
		if($text)
		{
			print("<script>progbar_text('".addslashes($text)."','$color','$bgcolor','$fontWeight');</script>\n");
			echo str_pad('',4096)."\n";
			flush();
		}
	}

	function error($text,$color="#ffffff",$bgcolor="#ff0000",$fontWeight="bold")
	{
		$this->text($text,$color,$bgcolor,$fontWeight);
	}
}
?>