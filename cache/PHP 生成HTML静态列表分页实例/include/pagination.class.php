<?php
 /**
 * @version 1.0
 * @copyright 2005-2006
 * @Download: http://www.codefans.net
 * @package 分页类-源码爱好者二次修改
*/
class wind_page	
{
    var $page;
      //现在所在页
    var $total;
      //记录总条数
    var $totalpage;
     //总页树
    var $pagesize;
      //每页显示条数
    var $offset;
      //偏移量
    var $result;
      //记录集合
    var $thispage;
      //记录总条数 //记录总条数 //记录总条数
    var $link;
      //连接（记录$_get变量）
    var $bar_mun;
      //bar显示的页数
    var $starttime;
      //开始时间
    var $bar_last;
      //导航条的持续页数
    var $bar_mid;
      //导航条中间页
    var $minpage;
      //导航条最小页
    var $maxpage;
      //导航条最大页
    var $key;
      //标识分页(一个页面多个分页时用与区分)
    var $style;
      //输出的风格
    var $pre_page_char;
      //上一页
    var $pre_page_image;
      //上一页图形
    var $pre_page_char_color;
      //上一页字体颜色
    var $next_page_char;
      //下一页
    var $next_page_image;
      //下一页图形
    var $next_page_char_color;
      //下一页字体颜色
    var $pre_groud_char;
      //上翻中间页数
    var $pre_groud_char_color;
      //上翻中间页数字体颜色
    var $next_groud_char;
      //下翻中间页数
    var $next_groud_char_color;
    //下翻中间页数字体颜色
    var $first_page_char;
    //首页
    var $first_page_char_color;
    //首页字体颜色
    var $last_page_char;
    //尾页
    var $last_page_char_color;
    //尾页字体颜色
    var $html_page_val;
    //html当前的页码值
     
    function wind_page($sql, $pagesize = 20, $bar_mun = 10, $style = 1,$this_page = 1,$html_page_val=1,$key = "") //构造函数（）
    {
        $this->starttime = microtime();
        $this->pagesize = $pagesize;
          //每页显示条数
        $this->key = trim($key);
        $this->bar_mun = $bar_mun;
        $this->style = $style;
        $this->html_page_val = $html_page_val;
        //html当前的页码值
        $this->bar_last = $bar_mun-1;
        $this->bar_mid = floor($bar_mun/2);
        $this->sql = $sql;
        $result = mysql_query($this->sql);
        $this->total = mysql_num_rows($result);
        //记录总条数
        $this->totalpage = ceil($this->total/$this->pagesize);
        //总页数
        //$this->page = ceil($_GET[$this->key."page"]);
        $this->page = $this_page;
        //现在所在页
        if ($this->page == "" || $this->page < 1 || !is_numeric($this->page))$this->page = 1;
        $this->page = min($this->page, $this->totalpage);
        $this->thispage = $this->pagesize;
        if ($this->page * $this->pagesize > $this->total) {
            $this->thispage = $this->total-($this->page-1) * $this->pagesize;
        };
        $this->sql .= " limit ".($this->pagesize * ($this->page-1)).", ".$this->pagesize;
          //开始读取的条数
       //echo "<br>";
        $this->result = mysql_query($this->sql);
        $this->getvar();
        
        $this->pre_page_char = "上一页";
        $this->pre_page_image = "<img src=\"/images/b_s_prev.gif\" border=\"0\" />";
        $this->next_page_char = "下一页";
        $this->next_page_image = "<img src=\"/images/b_s_next.gif\" border=\"0\" />";
        $this->pre_groud_char = "上一组";
        $this->next_groud_char = "下一组";

    }
    
    function getvar() //取得除page外的其他get变量
    {
        $this->link = "";
        foreach($_GET as $key => $vaule) {
            if (strtolower($key)  !== $this->key."page") $this->link  .= "&$key=$vaule";
        }
    }
     
    function pre_page($color="#909090",$sign=0) //上一页
    {
        if ($this->page > 1) {	
            return "<a href=\"index_".sprintf("%02d",$this->page-1).".html\" class=\"AB\"><font color=\"".$this->pre_page_char_color."\">".$this->pre_page_char."</font></a>";
        } else 
        {
          	return "<font color=\"$color\">".$this->pre_page_char."</font>";
        }
       
    }
     
    function next_page($color="#909090",$sign=0) //下一页
    {
        if ($this->page < $this->totalpage) {
        	  
              return "<a href=\"index_".sprintf("%02d",$this->page+1).".html\" class=\"AB\">".$this->next_page_char."</a>";
            
        } else {
        	  
            	return "<font color=\"$color\">".$this->next_page_char."</font>";
        }
    }
     
    function pre_groud($char = "<<", $color = "#909090") //上一组
    {
        if ($this->page <= ($this->bar_mid+1)) {
            return "<font color=\"".$color."\">".$this->pre_groud_char."</font>";
            //return $this->pre_groud_char;
        } else {
            $pre_gpage = ($this->page-$this->bar_mid < 0)?1:
            $this->page-$this->bar_mid;
            return "<a href=\"index_".sprintf("%02d",$pre_gpage).".html\" title=\"上一组\">".$this->pre_groud_char."</a>";
        }
    }
     
    function next_groud($char = ">>", $color = "#909090") //下一组
    {
        if (($this->totalpage-$this->page) <= ($this->bar_mid-1)) {
            return "<font color=\"".$color."\">".$this->next_groud_char."</font>";
        } else {
            $next_gpage = ($this->page+$this->bar_mid < $this->totalpage)?$this->page+$this->bar_mid:
            $this->totalpage;
            return "<a href=\"index_".sprintf("%02d",$next_gpage).".html\"  title=\"下一组\" >".$this->next_groud_char."</a>";
        }
    }
     
    function mun($lcolor = "#FF6633", $acolor = "#FF6633", $left = "&nbsp", $right = "&nbsp") //数字导航栏
    {
        $link = "";
        $this->minpage = ($this->page-$this->bar_mid < 1) ? 1:($this->page-$this->bar_mid);
        $this->maxpage = $this->minpage+$this->bar_last;
        if ($this->maxpage > $this->totalpage) {
            $this->maxpage = $this->totalpage;
            $this->minpage = ($this->maxpage-$this->bar_last < 1) ? 1: $this->maxpage-$this->bar_last;
        }
       for($i = $this->minpage; $i <= $this->maxpage; $i++)
        {
        	/* 循环输出页码 */
            $i = sprintf("%02d",$i);
            //不足两位的前面补0
            $char = $left.$i.$right;
            //导航条左右两边加窄
            if ($i == $this->page) 
            {
            	/* 假如是当前页则不加链接 */
                $link.= "<font color=\"".$acolor."\">".$char."</font>";
            }
            else 
             {
                //$link  .= "<a href=\"".$_SERVER['PHP_SELF']."?".$this->key."page=".$i.$this->link."\" >".$char."</a>";
                $link.= "<a href=\"index_".$i.".html\" >".$char."</a>";
                //关键把$link 加在新资料加入之后
            }
        }
        echo "<br>";
        return $link;
    }
     
     
    function jump_bar($class = "jump_bar") //下拉跳转
    {
        $link = "<select name=\"menu1\" onChange=\"MM_jumpMenu('parent',this,0)\" class=\"$class\">";
        for($i = $this->minpage; $i <= $this->maxpage; $i++) {
            if ($i < 10)$i = "0".$i;
            //定义选择不超过10个
            if($this->page == $i)
            {
            	/* 假如为当前页码，则选中 */
            	$link  .= "<option value=\"index_".$i.".html\" selected>第".$i."页</option>";
            }
            else
            {
            	 $link  .= "<option value=\"index_".$i.".html\">第".$i."页</option>";
            }
        }
        $link  .= "</select>";
        return $link;
    }
     
    function mun_bar() //整条数字导航栏  [<<][<][01][02][03][04][05][06][07][08][09][10][>][>>]
    {
        //return $this->first_groud().$this->pre_groud().$this->pre_page().$this->mun().$this->next_page().$this->next_groud().$this->last_groud();
        return $this->pre_groud()."&nbsp;".$this->pre_page().$this->mun().$this->next_page()."&nbsp;".$this->next_groud();
    }
    function page_button() 
    { //整条数字导航栏  [<][01][02][03][04][05][06][07][08][09][10][>]
        //return $this->first_groud().$this->pre_groud().$this->pre_page().$this->mun().$this->next_page().$this->next_groud().$this->last_groud();
        return $this->pre_page('#909090',1).$this->mun().$this->next_page('#909090',1);
    }
     
    function total_bar($coloro = "#000000", $colorn = "red") //统计数字  页次:1/4310 每页:20 共计:4310页 本页:20
    {
        return "<font color=$coloro>页次:<font color=$colorn>$this->page</font>/$this->totalpage 每页:<font color=$colorn>$this->pagesize</font> 共计:<font color=$colorn>$this->totalpage</font>页  本页:<font color=$colorn>$this->thispage</font></font>";
    }
     
    // 整条导航栏
    //页次:1/4310 每页:20 共计:4310页 本页:20 [<<][<][01][02][03][04][05][06][07][08][09][10][>][>>]
    function page_bar($coloro = "#000000", $colorn = "red") {
        return "<table width='100%'  border='0' cellspacing='0'>
            <tr>
            <td width='5%'></td>
            <td width='35%'>".$this->total_bar()."</td>
            <td width='40%'align='right'>".$this->mun_bar()."</td>
            <td width='10%'>".$this->jump_bar()."</td>
            <td width='5%'></td>
            </tr>
            </table>".$this->MM_jumpMenu();
    }
     
    function taketime($color = "#000000") //计算执行时间
    {
        return "<div align='center'><font color=$color>本页执行时间".abs((microtime()-$this->starttime) * 1000)."毫秒</font></div>";
    }
     
    function style() //输出分页的样式
    {
        $style_num = $this->style;
         
        if ($this->totalpage  != 0) //如果总页数=0 ,表示无分页
        {
            switch($style_num) {
                case 1:
                return $this->page_bar();
                //页次:1/4310 每页:20 共计:4310页 本页:20 [<<][<][01][02][03][04][05][06][07][08][09][10][>][>>]
                break;
                case 2:
                echo $this->mun_bar();
                //整条数字导航栏  [<<][<][01][02][03][04][05][06][07][08][09][10][>][>>]
                break;
                case 3:
                echo $this->page_button();
                //整条数字导航栏  [<][01][02][03][04][05][06][07][08][09][10][>]
                break;
            }
        }
    }
     
    function MM_jumpMenu() //JavaScript的跳转
    {
        //window.open(selObj.options[selObj.selectedIndex].value,targ);
        return "<script language=\"JavaScript\">
            <!--
            function MM_jumpMenu(targ,selObj,restore){
            if (selObj.selectedIndex==0) return;
            window.location.href=selObj.options[selObj.selectedIndex].value,targ;
            if (restore) selObj.selectedIndex=0;
            }
            //-->
            </script>";
    }
     
    function first_groud($char = "&nbsp;<<", $color = "#000000") {
        if ($this->page == 1) {
            return "<font color=\"".$color."\">".$char."</font>";
        } else {
            //$pre_gpage=($this->page-$this->bar_mid<0)?1:$this->page-$this->bar_mid;
            $pre_gpage = 1;
            return "<a href=\"".$_SERVER['PHP_SELF']."?".$this->key."page=".$pre_gpage.$this->link."\" title=\"上一组\"><font color=\"".$color."\">".$char."</font></a>";
        }
    }
     
    function last_groud($char = "&nbsp;>>", $color = "#000000") {
        if ($this->page == $this->totalpage) {
            return "<font color=\"".$color."\">".$char."</font>";
        } else {
            //$pre_gpage=($this->page-$this->bar_mid<0)?1:$this->page-$this->bar_mid;
            $pre_gpage = $this->totalpage;
            return "<a href=\"".$_SERVER['PHP_SELF']."?".$this->key."page=".$pre_gpage.$this->link."\" title=\"上一组\"><font color=\"".$color."\">".$char."</font></a>";
        }
    }
}
?>