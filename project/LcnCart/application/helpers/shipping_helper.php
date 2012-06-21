<?php
/**
 * 计算运费
 * @param   string  $shipping_code      配送方式代码
 * @param   mix     $shipping_config    配送方式配置信息
 * @param   float   $goods_weight       商品重量
 * @param   float   $goods_amount       商品金额
 * @param   float   $goods_number       商品数量
 * @return  float   运费
 */
function shipping_fee($shipping_code, $shipping_config, $goods_weight, $goods_amount, $goods_number='')
{
    if (!is_array($shipping_config))
    {
        $shipping_config = unserialize($shipping_config);
    }

	$CI = get_instance();
	$CI->load->library('shipping/'.$shipping_code); 
    $CI->$shipping_code->$shipping_code($shipping_config);
    return $CI->$shipping_code->calculate($goods_weight, $goods_amount, $goods_number);   
}

?>