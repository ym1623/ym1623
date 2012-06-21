<?php
/**
 * 角色
 *
 *
 */
class Role extends Controller
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
	 * 角色列表
	 *
	 *
	 */	
    function index()
    {
        $this->load->model('role_model');
				
		$data['roles'] = $this->role_model->find_roles();
        
        $this->load->view('system/role/list',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 添加角色
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }
    
	
	// --------------------------------------------------------------------

    /**
	 * 编辑角色
	 *
	 *
	 */	  
	function edit()
    {
		// 检验操作权限
		if (!admin_priv('role_manage')){
			return show_message2('你没有此项操作的权限!', 'role');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('role_model');
            $data['editing'] = $this->role_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'role');
            }
			$data['header_text'] = '编辑角色(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'name' => null,			
            );
			$data['header_text'] = '添加角色';
        }
        
		$this->load->model('admin_action_model');
		$priv_arr = $this->admin_action_model->get_modules();
		$actions = $this->admin_action_model->get_actions();

		foreach($actions as $value):
            $priv_arr[$value['parent_id']]['priv'][$value['action_code']] = $value;
		endforeach;

		// 将同一组的权限使用 "," 连接起来，供JS全选
		foreach ($priv_arr AS $action_id => $action_group){
			$priv_arr[$action_id]['priv_list'] = join(',', @array_keys($action_group['priv']));
			if(!empty($id)){
				foreach ($action_group['priv'] AS $key => $val){
					$priv_arr[$action_id]['priv'][$key]['cando'] = (strpos($data['editing']['action_list'], $val['action_code']) !== false || $data['editing']['action_list'] == 'all') ? 1 : 0;
				}
			}
		}

		// 按模块分好的操作权限
		$data['priv_arr'] = $priv_arr;
        
		$this->load->view('system/role/edit',$data);
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

        $name = $this->input->post('name');
		$action_code = $this->input->post('action_code') ;
	    $action_list = @implode(',',$action_code);
  

        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('role_model');            
            $this->role_model->name = $name;
			$this->role_model->action_list = $action_list;
			
			// 更新角色
            if ($id){
				// 动态更新管理员的SESSION 
				if ($this->session->userdata('role_id') == $id){
					$this->session->set_userdata('action_list',$action_list);
				}
                $this->role_model->update($id);
				if($re_edit){ 
                    show_message2('"角色(ID:'.$id.')" 已保存!', 'role/edit/id/'.$id);
			    }else{
					show_message2('保存成功!', 'role');
				}
            
			// 添加角色
            } else {
               $this->role_model->create();
			   if($re_edit){ 
                   $newly_one = $this->role_model->get_newly_one();	    
                   show_message2('"角色(ID:'.$newly_one['id'].')" 已保存!', 'role/edit/id/'.$newly_one['id']);
			   }else{
				    show_message2('保存成功!', 'role');
			    }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}

    // --------------------------------------------------------------------

    /**
	 * 删除角色
	 *
	 *
	 */	
	function delete()
    {
		// 检验操作权限
		if (!admin_priv('role_delete')){
			return show_message2('你没有此项操作的权限!', 'role');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){

			if($params['id'] == $this->session->userdata('role_id')){
                return show_message2('你不能删除自己所属的角色!', 'role');
			}
            
			$this->load->model('admin_user_model');	
            if ($this->admin_user_model->role_user($params['id'])){
                return show_message2('存在属于该角色的管理员，你不能删除', 'role');
			}

            $this->load->model('role_model');
            if ($this->role_model->delete($id)){
               return show_message2('"角色(ID:'.$id.')" 已被删除!', 'role');
            } else {
                return show_message2('无效ID:'.$id, 'role');
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