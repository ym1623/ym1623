<?php
/**
 * 商品属性分组
 *
 *
 */
class attribute_set extends Controller
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
	 * 商品属性分组列表
	 *
	 *
	 */	
	function index()
    {
		$this->load->model('attribute_set_model');			
		$data['attribute_sets'] = $this->attribute_set_model->find_attribute_sets();
        $this->load->view('product/attribute_set/list',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 添加商品属性分组
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }
    
	// --------------------------------------------------------------------

    /**
	 * 编辑商品属性分组
	 *
	 *
	 */	   
	function edit()
    {
		 // 检验操作权限
		if (!admin_priv('attr_set_manage')){
			return show_message2('你没有此项操作的权限!', 'attribute_set');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('attribute_set_model');
            $data['editing'] = $this->attribute_set_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'attribute_set');
            }
			$data['header_text'] = '编辑属性分组(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'name' => null,
            );
			$data['header_text'] = '添加属性分组';
        }

		$this->load->view('product/attribute_set/edit',$data);
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
        $name = $this->input->post('name');
		      
        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();
        
		if (TRUE == $this->validation->run()){

            //把数据提交给模型
            $this->load->model('attribute_set_model');      
            $this->attribute_set_model->name = $name;
            
			// 更新
            if ($id){
                $this->attribute_set_model->update($id);
				if($re_edit){ 
					echo $id;
                    //show_message2('"属性分组(ID:'.$id.')" 已保存!', 'attribute_set/edit/id/'.$id);
			    }else{
					echo "更新成功";
					//show_message2('保存成功!', 'attribute_set');
				}
            
			// 添加
            } else {
               $this->attribute_set_model->create();
			   if($re_edit){ 
                   //$newly_one = $this->attribute_set_model->get_newly_one();
				   echo $this->db->insert_id();
                   //show_message2('"属性分组(ID:'.$newly_one['id'].')" 已保存!', 'attribute_set/edit/id/'.$newly_one['id']);
			   }else{
				   echo "保存成功";
				    //show_message2('保存成功!', 'attribute_set');
			    }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}

	}

    // --------------------------------------------------------------------

    /**
	 * 删除商品属性分组
	 *
	 *
	 */	
    function delete()
    {
        if (!admin_priv('attr_set_delete')){
			return show_message2('你没有此项操作的权限!', 'attribute_set');
		} 
        
		// 检验操作权限
		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('attribute_set_model');
            if ($this->attribute_set_model->delete($id)){
				//echo $id;
                show_message2('"属性分组(ID:'.$id.')" 已被删除!', 'attribute_set');
            } else {
				//return false;
                return show_message2('无效ID:'.$id, 'attribute_set');
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