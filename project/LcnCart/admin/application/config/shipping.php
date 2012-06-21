<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

/* 申通 */
$config['sto_express'] = array(
							array('name' => 'item_fee',     'value'=>15,  'label'=>'單件商品費用：'), /* 单件商品的配送费用 */
							array('name' => 'base_fee',    'value'=>15,   'label'=>'1000克以內費用：'), /* 1000克以内的价格           */
							array('name' => 'step_fee',     'value'=>5,   'label'=>'續重每1000克或其零數的費用：'),  /* 续重每1000克增加的价格 */
						);
/* 顺丰 */
$config['sf_express'] = array(
							array('name' => 'item_fee',     'value'=>20,  'label'=>'單件商品費用：'),/* 单件商品的配送费用 */
							array('name' => 'base_fee',    'value'=>15,   'label'=>'1000克以內費用：'), /* 1000克以内的价格   */
							array('name' => 'step_fee',     'value'=>2,   'label'=>'續重每1000克或其零數的費用：'),  /* 续重每1000克增加的价格 */
						);

/* 平邮 */
$config['post_mail'] = array(
							array('name' => 'item_fee',          'value'=>4,     'label'=>'單件商品費用：'),
							array('name' => 'base_fee',          'value'=>3.5,   'label'=>'1000克以內費用：'),
							array('name' => 'step_fee',          'value'=>2,     'label'=>'5000克以內續重每1000克費用：'),
							array('name' => 'step_fee1',          'value'=>2.5,  'label'=>'5001克以上續重1000克費用：'),
							array('name' => 'pack_fee',           'value'=>0,    'label'=>'包裝費用：'),
						);
/* EMS */
$config['ems'] =        array(
							array('name' => 'item_fee',     'value'=>20,  'label'=>'單件商品費用：'),
							array('name' => 'base_fee',     'value'=>20,  'label'=>'500克以內費用：'),
							array('name' => 'step_fee',     'value'=>15,  'label'=>'續重每500克或其零數：'),
						);
?>