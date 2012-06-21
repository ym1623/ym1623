<?php
/**
 * 设置区域（配送方式）
 *
 *
 */
class Shipping_area extends Controller
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
	 * 配送方式区域列表
	 *
	 *
	 */
    function index()
    {
		// 检验操作权限
		if (!admin_priv('shipping_manage')){
			return show_message2('你没有此项操作的权限!', 'shipping');
		} 
       
		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('shipping_model');
            $shipping = $this->shipping_model->load($id);
            if (!$shipping){
                return show_message2('无效ID:'.$id, 'shipping');
            }
		}
        
		// id 配送方式区域
		$this->load->model('shipping_area_model');
        $this->shipping_area_model->shipping_id = $shipping['id'];
        $data['shipping_areas'] = $this->shipping_area_model->find_shipping_areas();
        
		$this->load->model('area_region_model');
		foreach($data['shipping_areas'] as $key => $value):
		    $this->area_region_model->shipping_area_id = $value['id'];
		    $area_regions = $this->area_region_model->find_area_regions();
			$areas = array();		
			foreach($area_regions as $value1):
                $areas[] = $value1['area'];
		    endforeach;
			$areas = implode(', ',$areas);
		    $data['shipping_areas'][$key]['areas'] = $areas;
		endforeach;

		$data['shipping'] = $shipping;
        
        $this->load->view('system/shipping_area/list',$data);
    }
   
	// --------------------------------------------------------------------

	/**
	 * 添加区域
	 *
	 *
	 */	 
	function add()
    {
        $this->edit();
    }
    
	// --------------------------------------------------------------------

    /**
	 * 编辑区域
	 *
	 *
	 */	  
	function edit()
    {
		 // 检验操作权限
		if (!admin_priv('shipping_manage')){
			return show_message2('你没有此项操作的权限!', 'shipping');
		} 
		
		$params = $this->uri->uri_to_assoc();
		if (!empty($params['shipping_id']) && $params['shipping_id'] > 0){
            $shipping_id = $params['shipping_id'];
            $this->load->model('shipping_model');
            $shipping = $this->shipping_model->load($shipping_id);
            if (!$shipping){
                return show_message2('无效ID:'.$id, 'shipping');
            }
			$data['shipping'] = $shipping;
		}

        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('shipping_area_model');
            $data['editing'] = $this->shipping_area_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'shipping_area');
            }
			$data['header_text'] = '编辑('.$shipping['name'].')';
            
			// 配送方式配置
			$this->config->load('shipping', TRUE);
            $config =  $this->config->item($shipping['code'],'shipping');
            
			if($shipping['code'] != 'cod'){
				$configure = unserialize($data['editing']['configure']);
				foreach($configure as $key => $value):
					if($value['name'] == 'fee_compute_mode'){
					   $data['editing']['fee_compute_mode'] = $value['value'];
					   unset($configure[$key]);
					} else{
					   $configure[$key]['name'] = $value['name'];
					   $configure[$key]['label']  = $config[$key]['label'];
				   }
				endforeach;
				$data['configure'] = $configure;
			}
            
			// 所辖区域
			$this->load->model('area_region_model');
			$this->area_region_model->shipping_area_id = $id;
		    $data['area_regions'] = $this->area_region_model->find_area_regions();

        } else {

            $data['editing'] = array(
                'id' => null,
                'name' => null,
				'shipping_id' => null,
				'fee_compute_mode' => null,			
            );
			$data['header_text'] = '添加('.$shipping['name'].')';

			$this->config->load('shipping', TRUE);
            $data['configure'] =  $this->config->item($shipping['code'],'shipping');
        }
				
		$this->load->view('system/shipping_area/edit',$data);
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

        // 商品属性id
        $id = $this->input->post('id');
        
		// 接收客户端提交数据
	    $shipping_id = $this->input->post('shipping_id');	
        $name = $this->input->post('name');
		$regions = $this->input->post('regions');
		$regions = !empty($regions) ? $regions  : array();
		$code = $this->input->post('code');
        
		// 配送方式配置文件
        $this->config->load('shipping', TRUE); 
		
		// 如果不是货到付款
		if($code != 'cod'){

			//取得该配送方式配置
			$configure =  $this->config->item($code,'shipping');  
			foreach($configure as $key => $value):
				$config[$key]['name'] = $value['name'];
				$config[$key]['value'] = $this->input->post($value['name']);
			endforeach;
			
			$count = count($config);
			$config[$count]['name'] = 'fee_compute_mode';
			$config[$count]['value'] = $this->input->post('fee_compute_mode');
			$config = serialize($config);
		}else{
            $config = '';
		}

		// 地区id 
		if ($this->input->post('country_id')){
            $region_id = $this->input->post('country_id');
		}elseif ($this->input->post('district_id')){
            $region_id = $this->input->post('district_id');
		}elseif($this->input->post('city_id')){
            $region_id = $this->input->post('city_id');
		}elseif($this->input->post('province_id')){
            $region_id = $this->input->post('province_id');
		}else{
            $region_id = 0;
		}

        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('shipping_area_model');          
            $this->shipping_area_model->name = $name;
			$this->shipping_area_model->shipping_id = $shipping_id;
			$this->shipping_area_model->configure = $config;
		    
			// 更新区域				   
            if ($id){
                $this->shipping_area_model->update($id);
				
				if($region_id){
                    array_push($regions,$region_id);
				}

				// 过滤掉重复的region 
				$selected_regions = array();
				if (isset($regions))
				{
					foreach ($regions as $region_id)
					{
						$selected_regions[$region_id] = $region_id;
					}
				}

				// 查询所有区域 region_id => parent_id
				$this->load->model('region_model');
				$region_list = $this->region_model->get_parent_ids();

				// 过滤掉上级存在的区域
				foreach ($selected_regions AS $region_id){
					$rid = $region_id;
					while ($region_list[$rid] != 0){
						$rid = $region_list[$rid];
						if (isset($selected_regions[$rid])){
							unset($selected_regions[$region_id]);
							break;
						}
					}
				}

				/* 清除原有的城市和地区 */
				$this->load->model('area_region_model');
				$this->area_region_model->delete_by_shipping_area($id);

				/* 添加选定的城市和地区 */
				$this->load->model('area_region_model');      
				foreach($selected_regions as $region_id):
                   $this->area_region_model->region_id = $region_id;
				   $this->area_region_model->shipping_area_id = $id;
				   $this->area_region_model->create();
				endforeach;

				if($re_edit){ 
                    show_message2('"配送地区(ID:'.$id.')" 已保存!', 'shipping_area/edit/id/'.$id.'/shipping_id/'.$shipping_id);
			    }else{
					show_message2('保存成功!', 'shipping_area/index/id/'.$shipping_id);
				}
            
			// 添加新区域
            } else {
               $this->shipping_area_model->create();
			   $newly_one = $this->shipping_area_model->get_newly_one();
			   if($region_id){
				   $this->load->model('area_region_model');          
				   $this->area_region_model->region_id = $region_id;
				   $this->area_region_model->shipping_area_id = $newly_one['id'];
				   $this->area_region_model->create();
			   }
			   if($re_edit){                  	    
                   show_message2('"配送地区(ID:'.$newly_one['id'].')" 已保存!', 'shipping_area/edit/id/'.$newly_one['id'].'/shipping_id/'.$shipping_id);
			   }else{
				    show_message2('保存成功!', 'shipping_area/index/id/'.$shipping_id);
			    }
            }
		}
	}

    // --------------------------------------------------------------------

    /**
	 * 删除区域
	 *
	 *
	 */	
	function delete()
    {
		// 检验操作权限
        if (!admin_priv('shipping_manage')){
			return show_message2('你没有此项操作的权限!', 'shipping');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('shipping_area_model');
            if ($this->shipping_area_model->delete($id)){
                show_message2('"配送地区(ID:'.$id.')" 已被删除!', 'shipping_area/index/id/'.$params['shipping_id']);
            } else {
                return show_message2('无效ID:'.$id, 'shipping_area');
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