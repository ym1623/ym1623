<?php

class alipay
{


    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function __construct()
    {
        
    }

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
		
        $CI = get_instance();
        $charset =  $CI->config->item('charset');

        $real_method = $payment['alipay_pay_method'];

        switch ($real_method){
            case '0':
                $service = 'trade_create_by_buyer';
                break;
            case '1':
                $service = 'create_partner_trade_by_buyer';
                break;
            case '2':
                $service = 'create_direct_pay_by_user';
                break;
        }


        $parameter = array(
            'service'           => $service,
            'partner'           => $payment['alipay_partner'],
            '_input_charset'    => $charset,
            'notify_url'        => site_url().'?c=respond&code=alipay',
            'return_url'        => site_url().'?c=respond&code=alipay',
            /* 业务参数 */
            'subject'           => $order['order_sn'],
            'out_trade_no'      => $order['order_sn'] ,
            'price'             => $order['total_price'],
            'quantity'          => 1,
            'payment_type'      => 1,
            /* 物流参数 */
            'logistics_type'    => 'EXPRESS',
            'logistics_fee'     => 0,
            'logistics_payment' => 'BUYER_PAY',
            /* 买卖双方信息 */
            'seller_email'      => $payment['alipay_account']
        );

        ksort($parameter);
        reset($parameter);

        $param = '';
        $sign  = '';

        foreach ($parameter AS $key => $val)
        {
            $param .= "$key=" .urlencode($val). "&";
            $sign  .= "$key=$val&";
        }

        $param = substr($param, 0, -1);
        $sign  = substr($sign, 0, -1). $payment['alipay_key'];
        //$sign  = substr($sign, 0, -1). ALIPAY_AUTH;

        $button = '<div style="text-align:center"><input type="button" onclick="window.open(\'https://www.alipay.com/cooperate/gateway.do?'.$param. '&sign='.md5($sign).'&sign_type=MD5\')" value="立即使用支付宝支付" /></div>';

        return $button;
    }

    /**
     * 响应操作
     */
    function respond()
    {
		$CI = get_instance();

        if (!empty($_POST))
        {
            foreach($_POST as $key => $data)
            {
                $_GET[$key] = $data;
            }
        }
        $CI->load->model('payment_model');
		$payment = $CI->payment_model->get_payment($_GET['code']);
        $order_sn = trim($_GET['subject']);
        
		$CI->load->model('order_model');
        /* 检查支付的金额是否相符 */
        if (!$CI->order_model->check_money($order_sn, $_GET['total_fee']))
        {		
            return false;
        }

        /* 检查数字签名是否正确 */
       

        if ($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS')
        {
            /* 改变订单状态 */
            $CI->order_model->order_paid($order_sn);

            return true;
        }
        elseif ($_GET['trade_status'] == 'TRADE_FINISHED')
        {
            /* 改变订单状态 */
            $CI->order_model->order_paid($order_sn);

            return true;
        }
        elseif ($_GET['trade_status'] == 'TRADE_SUCCESS')
        {
            /* 改变订单状态 */
            $CI->order_model->order_paid($order_sn);

            return true;
        }
        else
        {
            return false;
        }
    }
}

?>