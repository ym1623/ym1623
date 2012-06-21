<?php
/**
 * 支付方式
 *
 *
 */
class Payment extends Controller
{
	/**
	 * 构造函数
	 *
	 * 登陆检验
	 */	
	function __construct()
    {
        parent::Controller();    
		if (!$this->session->userdata('logged_in')){          		
			redirect('login');
			exit();
		}
    }
   
    // --------------------------------------------------------------------

    /**
	 * 支付方式列表
	 *
	 *
	 */	
    function index()
    {
		$this->load->model('payment_model');
				
		$data['payments'] = $this->payment_model->find_payments();
			 
        $this->load->view('system/payment/list',$data);
    }

    // --------------------------------------------------------------------

    /**
	 * 编辑商品属性
	 *
	 *
	 */	  
    function edit()
    {
		 // 检验操作权限
		if (!admin_priv('payment_manage')){
			return show_message2('你没有此项操作的权限!', 'payment');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('payment_model');
            $data['editing'] = $this->payment_model->load($id);

            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'payment');
            }

			// 取得配置信息
		    $data['pay_config'] = unserialize($data['editing']['pay_config']);
			switch($data['editing']['code']){

                case 'alipay' : $data['pay_config'][0]['label'] = '支付宝帐户';
								$data['pay_config'][1]['label'] = '交易安全校验码';
								$data['pay_config'][2]['label'] = '合作者身份ID';
								$data['pay_config'][3]['label'] = '选择接口类型';					            
				                break;

			    case 'chinabank' : $data['pay_config'][0]['label'] = '商户编号';
								$data['pay_config'][1]['label'] = 'MD5 密钥';								       break;


			}

			$data['header_text'] = '编辑支付方式(ID:'.$data['editing']['id'].')';

        } else {
            $data['editing'] = array(
                'id' => null,
                'code' => null,
				'name' => null,
				'fee' => null,
				'desc' => null,
				'order' => null,
				'confing' => 0,
				'enabled' => null,
				'is_cod' => null,
				'is_online' => 0,
            );
			$data['header_text'] = '添加支付方式';
        }

		$this->load->view('system/payment/edit',$data);

	}
    
	// --------------------------------------------------------------------

    /**
	 * 提交数据
	 *
	 *
	 */	 
	function save()
    {		 
		 // 保存后并继续编辑信号
		$re_edit = $this->input->post('re_edit');

        // 支付方式id
        $id = $this->input->post('id');
		
		// 接收客户端提交数据
		$name = char_limit1($this->input->post('name'),120);
		$desc = char_limit2($this->input->post('desc'),65535);
   		$fee = char_limit1($this->input->post('fee'),10);
       	$charge_date = char_limit1($this->input->post('charge_date'),32);
		$is_online  = (int)$this->input->post('is_online');
        $is_cod  = (int)$this->input->post('is_cod');
 
		// 配置信息预处理 
        $cfg_name = $this->input->post('cfg_name');
		$cfg_type = $this->input->post('cfg_type');
		$cfg_value = $this->input->post('cfg_value');
		$pay_config = array();
		if ($cfg_name){
            for($i=0;$i<count($cfg_name);$i++){
				$pay_config[$i] = array('name'  => trim($cfg_name[$i]), 
					                 'type'  => trim($cfg_type[$i]), 
					                 'value' => trim($cfg_value[$i])
				);
			}
		}
		$pay_config = serialize($pay_config);

        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('payment_model');         
            $this->payment_model->name = $name;
			$this->payment_model->fee = $fee;
			$this->payment_model->desc = $desc;
			$this->payment_model->charge_date = $charge_date;
			$this->payment_model->is_online = $is_online;
			$this->payment_model->is_cod = $is_cod;
			$this->payment_model->pay_config = $pay_config;
			        
			$this->payment_model->update($id);

			if($re_edit){ 
				show_message2('"支付方式(ID:'.$id.')" 已保存!', 'payment/edit/id/'.$id);
			}else{
				show_message2('保存成功!', 'payment');
			}  
			
		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}

	}
    
	// --------------------------------------------------------------------

    /**
	 * 卸载支付方式
	 *
	 *
	 */	 
	function uninstall()
	{
		// 检验操作权限
		if (!admin_priv('payment_manage')){
			return show_message2('你没有此项操作的权限!', 'payment');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
			
            $this->load->model('payment_model');
            if ($this->payment_model->uninstall($id)){
                show_message2('"支付方式(ID:'.$id.')" 已被卸载!', 'payment');
            } else {
                return show_message2('无效ID:'.$id, 'payment');
            }
        }
	}
    
	// --------------------------------------------------------------------

    /**
	 * 装载支付方式
	 *
	 *
	 */	 
	function install()
	{
		// 检验操作权限
		if (!admin_priv('payment_manage')){
			return show_message2('你没有此项操作的权限!', 'payment');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
			
            $this->load->model('payment_model');
            if ($this->payment_model->install($id)){
                show_message2('"支付方式(ID:'.$id.')" 已装载!', 'payment');
            } else {
                return show_message2('无效ID:'.$id, 'payment');
            }
        }
	}
    

	// --------------------------------------------------------------------

    /**
	 * 设置表单数据规则
	 *
	 */	
	function set_save_form_rules()
    {
        $rules['name'] = 'trim|required';
		$this->validation->set_rules($rules);
		
    }

}