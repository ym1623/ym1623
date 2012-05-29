<?php
//无限分级
//所有分类都放在一个表内，一级分类pid为0, 其它分类pid为它的父类的id, 类似链表结构。
$data = array(
      array("id" => 1, "pid" => 0, "name" => "蛋糕"),
      array("id" => 2, "pid" => 0, "name" => "饼干"),
      array("id" => 3, "pid" => 0, "name" => "点心"),
      array("id" => 4, "pid" => 0, "name" => "茶饮"),
      array("id" => 5, "pid" => 0, "name" => "其它"),
 
      array("id" => 6, "pid" => 1, "name" => "甜蛋糕"),
      array("id" => 7, "pid" => 2, "name" => "原味饼干"),
      array("id" => 8, "pid" => 3, "name" => "甜点心"),
      array("id" => 9, "pid" => 5, "name" => "其它美食"),
      array("id" => 10, "pid" => 4, "name" => "养颜冷饮"),
 
      array("id" => 11, "pid" => 6, "name" => "甜心小米蛋糕"),
      array("id" => 12, "pid" => 7, "name" => "原味动物饼干"),
      array("id" => 13, "pid" => 9, "name" => "其它精美小食品"),
      array("id" => 14, "pid" => 8, "name" => "甜味德国小点心"),
      array("id" => 15, "pid" => 10, "name" => "超冷啊啊啊"),
 
      array("id" => 16, "pid" => 1, "name" => "提拉米苏是蛋糕吗"),
      array("id" => 17, "pid" => 1, "name" => "也许提拉米苏不是"),
      array("id" => 18, "pid" => 8, "name" => "德国小点心子类"),
      array("id" => 19, "pid" => 8, "name" => "德国小点心子类2"),
 
  );


$runTime = 0;

function T($data, $keys=array(0), $tmp = array()) {
  global $runTime;
     if(!empty($data)) {
         foreach($data as $k => $d) {
             $pid = $d['pid'];
             $id = $d['id'];
       $name = $d['name'];
             if(in_array($pid, $keys))   {
        $t = array("name" => $name);
        T($data, array($id), &$t);
                $tmp["id:$id"] = $t;
                unset($data[$k]);
             }
         }
     }
  $runTime++;
 }

$tmp = array();
 $t = T($data, array(0), &$tmp);
print_r($tmp);

$num = count($data);
echo "\n------总纪录数为：< $num >  复杂度为：< $runTime >  ------\n";
