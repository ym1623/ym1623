<?php
/**
 * 管理员
 *
 *
 */
class admin_user extends Controller
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
	 * 管理员列表
	 *
	 *
	 */	
    function index()
    {
		$this->load->model('admin_user_model');	

		$data['admin_users'] = $this->admin_user_model->find_admin_users();
			 
        $this->load->view('system/admin_user/list',$data);
    }

    // --------------------------------------------------------------------

	/**
	 * 添加新管理员
	 *
	 */	
    function add()
    {
        $this->edit();
    }

    // --------------------------------------------------------------------

    /**
	 * 更新管理员资料
	 *
	 *
	 */	
	function edit()
    {
		// 检验操作权限
		if (!admin_priv('admin_user_manage')){
			return show_message2('你没有此项操作的权限!', 'admin_user');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('admin_user_model');
            $data['editing'] = $this->admin_user_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'admin_user');
            }
			$data['header_text'] = '编辑管理员(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'name' => null,
				'email' => null,
				'role_id' => null,			
            );
			$data['header_text'] = '添加管理员';
        }
        
		// 角色结果集
		$this->load->model('role_model');			
		$data['roles'] = $this->role_model->find_roles();
		
		$this->load->view('system/admin_user/edit',$data);
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

        // 管理员id
        $id = $this->input->post('id');
        
		// 接收客户端提交数据
        $name = $this->input->post('name');
		$email = $this->input->post('email');
		$new_pw = $this->input->post('new_pw');
		$old_pw = $this->input->post('old_pw');
	    $role_id = $this->input->post('role_id');
        
		// 对是否更新密码的处理
		if($id){
			$this->load->model('admin_user_model');
			$admin_user = $this->admin_user_model->load($id);
			if (!$admin_user){
				return show_message2('无效ID:'.$id, 'admin_user');
			}
			
			if ($new_pw){
                if(md5($old_pw) == $admin_user['password']){
				    $password = char_limit1($new_pw,32);
				}else{
                    return show_message2('输入的旧密码错误', 'admin_user/edit/id/'.$id);					
				}
			}else{
				$password = '';
			}			
		}else{
            $password = char_limit1($this->input->post('password'),32);
		}
		
        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();
        
		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('admin_user_model');       
            $this->admin_user_model->name = $name;
			$this->admin_user_model->email = $email;
			$this->admin_user_model->password = $password;	
			$this->admin_user_model->role_id = $role_id;		
            
			// 更新管理员资料
            if ($id){
				if ($this->session->userdata('id') == $id){
					$this->session->set_userdata('name',$name);
				}

                $this->admin_user_model->update($id);

				if ($re_edit){ 
                    show_message2('"管理员(ID:'.$id.')" 已保存!', 'admin_user/edit/id/'.$id);
			    }else{
					show_message2('保存成功!', 'admin_user');
				}

            // 添加新管理员
            } else {
               $this->admin_user_model->create();
			   if($re_edit){ 
                   $newly_one = $this->admin_user_model->get_newly_one();	    
                   show_message2('"管理员(ID:'.$newly_one['id'].')" 已保存!', 'admin_user/edit/id/'.$newly_one['id']);
			   }else{
				    show_message2('保存成功!', 'admin_user');
			    }
            }
        
		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}
    
	// --------------------------------------------------------------------

    /**
	 * 删除管理员
	 *
	 *
	 */	
	function delete()
    {
		// 检验操作权限
		if (!admin_priv('admin_user_delete')){
			return show_message2('你没有此项操作的权限!', 'admin_user');
		}         
		
		$params = $this->uri->uri_to_assoc();

        if (isset($params['id']) && ($id = $params['id']) > 0){
            // 禁止用户删除自己
			if($params['id'] == $this->session->userdata('id')){
                return show_message2('你不能删除自己!', 'admin_user');
			}

            $this->load->model('admin_user_model');
			$admin_user = $this->admin_user_model->load($id);
			
            if ($this->admin_user_model->delete($id)){
                show_message2('"管理员(ID:'.$id.')" 已被删除!', 'admin_user');
            } else {
                return show_message2('无效ID:'.$id, 'admin_user');
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
		// 管理员名字
        $rules['name'] = 'trim|required';

		$this->validation->set_rules($rules);		
    }


}