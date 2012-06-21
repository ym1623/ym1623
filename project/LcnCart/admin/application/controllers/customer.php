<?php
/**
 * 顾客
 *
 *
 */
class Customer extends Controller
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
	 * 顾客列表
	 *
	 *
	 */	
    function index()
    {
		// 当前页码     
		$page = $this->input->post('page'); $page = (int)$page;

        // 分页+查询的url设置
		$segments = $this->uri->uri_to_assoc(); 
		$search_uri = '' ;

		//计算查询条件
        $options = array(
            'conditions' => null,
        );

		// 分页的开始数据行：$page_offset
		if($page){
            $page_offset = $page-1;
		}else if (!empty($segments['page'])){
            $page_offset = (int)$segments['page'];		
        } else {
            $page_offset = 0;
        }
		if ($page_offset<0){
            $page_offset=0;
		}

		// 分页url
		$base_url = site_url('customer/index/page') . '/';

		// 每页显示数据条数
        $per_page = 3;	
        
		// 数据总数
		$this->load->model('customer_model');
		$data['total_rows'] =  $this->customer_model->count_customers($options);
        
        // 页数
        $data['total_pages'] = ceil($data['total_rows']/$per_page);
        
		// 当前页（input）
        $data['page'] = $page_offset+1;
		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];

		// 第一页 最后一页 前一页 后一页
		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];

		// 当前页码 
		$data['cur_page'] =  $base_url.($data['page']-1).$search_uri;	

		// 当前页起始数据号
		$data['show_start'] = ($data['page']-1)*$per_page+1;

		// 当前页结束数据号
		$data['show_end'] = ($page_offset<$data['total_pages']-1) ? ($data['show_start']+$per_page-1) : $data['total_rows'];

		// 顾客结果集
		$data['customers'] = $this->customer_model->find_customers($options, $per_page, ($data['page']-1)*$per_page);
        
		// ajax
		if (!empty($segments['ajax'])){
			$this->load->view('customer/ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('customer/list',$data);
		}
	}

    // --------------------------------------------------------------------

    /**
	 * 添加顾客
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }


	function edit()
    {
		// 检验操作权限
		if (!admin_priv('customer_manage')){
			return show_message2('你没有此项操作的权限!', 'customer');
		} 

        $params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('customer_model');
            $data['editing'] = $this->customer_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'customer');
            }
			$data['header_text'] = '编辑顾客(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'name' => null,
				'email' => null,
				'password' => null,
				'password_auto' => null,
				'dob' => null,
				'is_sendemail' => null
            );
			$data['header_text'] = '添加顾客';
        }

		$this->load->view('customer/edit',$data);
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

        // 顾客id
        $id = $this->input->post('id');
        
		// 接收客户端提交数据
        $name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->helper('string');
		$password_auto = $this->input->post('password_auto');
		$password_auto = ($password_auto) ? random_string('alnum', 8) : null;
        if($password_auto){
            $password = null;
		}
		$dob = $this->input->post('dob');
		$dob = ($dob) ? $dob : '0000-00-00 00:00:00';
        $is_sendemail = $this->input->post('is_sendemail');
        
		// 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();
       
	   // 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){

            // 把数据提交给模型
            $this->load->model('customer_model');          
            $this->customer_model->name = $name;
			$this->customer_model->email = $email;
			$this->customer_model->password = $password;
			$this->customer_model->password_auto = $password_auto;
			$this->customer_model->dob = $dob;
            $this->customer_model->is_sendemail = $is_sendemail;
            
			// 更新顾客
            if ($id){
                $this->customer_model->update($id);
				if($re_edit){ 
                    show_message2('"顾客(ID:'.$id.')" 已保存!', 'customer/edit/id/'.$id);
			    }else{
					show_message2('保存成功!', 'customer');
				}
            
			// 添加顾客
            } else {
               $this->customer_model->create();
			   if($re_edit){ 
                   $newly_one = $this->customer_model->get_newly_one();	    
                   show_message2('"顾客(ID:'.$newly_one['id'].')" 已保存!', 'customer/edit/id/'.$newly_one['id']);
			   }else{
				    show_message2('保存成功!', 'customer');
			    }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}

	// --------------------------------------------------------------------

    /**
	 * 设置表单数据规则
	 *
	 */	
    function set_save_form_rules()
    {
        $rules['dob'] = 'valid_datetime';		
		$this->validation->set_rules($rules);		
    }

    
    // --------------------------------------------------------------------

    /**
	 * 编辑用户地址簿
	 *
	 */	
	function edit_address()
	{
        
		$params = $this->uri->uri_to_assoc();

		if (!empty($params['id']) && $params['id'] > 0){
            $customer_id = $params['id'];
            $this->load->model('customer_model');
            $data['customer'] = $this->customer_model->load($customer_id);
            if (!$data['customer']){
                return show_message2('无效ID:'.$id, 'customer');
            }
			$this->load->model('customer_address_model');
            $data['addresses'] = $this->customer_address_model->find_customer_address($customer_id);			
        }

        if (!empty($params['address']) && $params['address'] > 0){
            $address_id = $params['address'];
            $this->load->model('customer_address_model');
            $data['editing'] = $this->customer_address_model->load($address_id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'customer');
            }
			$data['header_text'] = '编辑顾客地址(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'address_name' => null,
				'consignee' => null,
				'phone' => null,
				'mobile' => null,
				'invoice_head' => null,
				'province_id' => null,
				'city_id' => null,
				'district_id' => null,
				'address' => null,
				'postcode' => null,
				'fax' => null,
				'remark' => null,
				'is_default' => null,
            );
			$data['header_text'] = '添加顾客地址';
        }

		$this->load->view('customer/edit_address',$data);
	}
    

    // --------------------------------------------------------------------

    /**
	 * 提交用户地址簿数据
	 *
	 *
	 */	
	function save_address()
	{
        // 保存后并继续编辑信号
		$re_edit = $this->input->post('re_edit');

        // 地址簿id
        $id = $this->input->post('id');
        
		// 接收客户端提交数据
        $customer_id = $this->input->post('customer_id');
        $address_name = $this->input->post('address_name');
		$consignee = $this->input->post('consignee');
		$phone = $this->input->post('phone');
		$mobile = $this->input->post('mobile');
		$invoice_head = $this->input->post('invoice_head');
		$province_id = $this->input->post('province_id');
	    $city_id = $this->input->post('city_id');
		$district_id = $this->input->post('district_id');
		$address = $this->input->post('address');
		$postcode = $this->input->post('postcode');
		$fax = $this->input->post('fax');
		$remark = $this->input->post('remark');
		$is_default = (int)$this->input->post('is_default');
        
		// 把数据提交给模型
		$this->load->model('customer_address_model');
		$this->customer_address_model->customer_id = $customer_id;
        $this->customer_address_model->address_name = $address_name;
		$this->customer_address_model->consignee = $consignee;
		$this->customer_address_model->phone = $phone;
		$this->customer_address_model->mobile = $mobile;
		$this->customer_address_model->invoice_head = $invoice_head;
		$this->customer_address_model->province_id = $province_id;
		$this->customer_address_model->city_id = $city_id;
		$this->customer_address_model->district_id = $district_id;
		$this->customer_address_model->address = $address;
		$this->customer_address_model->postcode = $postcode;
		$this->customer_address_model->fax = $fax;
		$this->customer_address_model->remark = $remark;
		
		// 更新顾客地址簿
		if ($id){
			$this->customer_address_model->update($id);
		    $this->customer_address_model->set_default($id,$customer_id,$is_default);
			if($re_edit){ 
				show_message2('"顾客地址(ID:'.$id.')" 已保存!', 'customer/edit_address/id/'.$customer_id.'/address/'.$id);
			}else{
				show_message2('保存成功!', 'customer/edit_address/id/'.$customer_id);
			}

        // 添加新地址簿
		} else {
		   $this->customer_address_model->create();
		   $newly_one = $this->customer_address_model->get_newly_one();
		   $this->customer_address_model->set_default($newly_one['id'],$customer_id,$is_default);
		   if($re_edit){ 
			   show_message2('"顾客地址(ID:'.$newly_one['id'].')" 已保存!', 'customer/edit_address/id/'.$customer_id.'/address/'.$newly_one['id']);
		   }else{
				show_message2('保存成功!', 'customer/edit_address/id/'.$customer_id);
			}
		}
		
	}
    
    // --------------------------------------------------------------------

    /**
	 * 设置默认地址簿
	 *
	 * 根据ajax反馈信息设置默认地址簿
	 */	
	function set_default()
	{
		$params = $this->uri->uri_to_assoc();

		if (!empty($params['id']) && $params['id'] > 0){
            $customer_id = $params['id'];
            /*$this->load->model('customer_model');
            $data['customer'] = $this->customer_model->load($customer_id);
            if (!$data['customer']){
                return show_message2('无效ID:'.$id, 'customer');
            }*/			
        }

        if (isset($params['address']) && ($id = $params['address']) > 0){
            $this->load->model('customer_address_model');
            if ($this->customer_address_model->set_default($id,$customer_id,1)){
               // show_message2('"顾客默认地址已经更新', 'customer/edit_address/id/'.$customer_id);
            } else {
                //return show_message2('无效ID:'.$id, 'customer/edit_address/id/'.$customer_id);
            }
        } 
	}
    
	// --------------------------------------------------------------------

    /**
	 * 删除顾客
	 *
	 *
	 */	
	function delete()
    {
		// 检验操作权限
		if (!admin_priv('customer_delete')){
			return show_message2('你没有此项操作的权限!', 'customer');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('customer_model');
            if ($this->customer_model->delete($id)){
                show_message2('"顾客(ID:'.$id.')" 已被删除!', 'customer');
            } else {
                return show_message2('无效ID:'.$id, 'customer');
            }
        }
	}

    // --------------------------------------------------------------------

    /**
	 * 删除地址簿
	 *
	 * 根据ajax反馈信息删除地址簿
	 */	
    function delete_address()
    {
		$params = $this->uri->uri_to_assoc();

		/*if (!empty($params['id']) && $params['id'] > 0){
            $customer_id = $params['id'];
            $this->load->model('customer_model');
            $data['customer'] = $this->customer_model->load($customer_id);
            if (!$data['customer']){
                return show_message2('无效ID:'.$id, 'customer');
            }
			
        }*/

        if (isset($params['address']) && ($id = $params['address']) > 0){
            $this->load->model('customer_address_model');
            if ($this->customer_address_model->delete($id)){
                //show_message2('"顾客默认地址已被删除', 'customer/edit_address/id/'.$customer_id);
            } else {
               // return show_message2('无效ID:'.$id, 'customer/edit_address/id/'.$customer_id);
            }
        } 
	}
	
}