<?php
  function age($date){
    $year_diff = '';
    $time = strtotime($date);
    $date = date('Y-m-d', $time);
    list($year,$month,$day) = explode("-",$date);
    $year_diff = date('Y') - $year;
    $month_diff = date("m") - $month;
    $day_diff = date("d") - $day;
    if ($day_diff < 0 || $month_diff < 0) $year_diff–;
    return $year_diff;
  }

  function getTinyUrl($url) {
      return file_get_contents("http://tinyurl.com/api-create.php?url=".$url);
  }