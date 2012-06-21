<?php
/**
 * 商品属性
 *
 *
 */
class Attribute extends Controller
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
	 * 商品属性列表
	 *
	 *
	 */	
	function index()
    {
		
        // 接收客户端反馈的信息： ajax
        $attr_set_id = ($this->input->post('attr_set_id')) ? ($this->input->post('attr_set_id')) : 0;
		$page = $this->input->post('page'); $page = (int)$page;
		$search = $this->input->post('search');
        
		// 分页+查询的url设置
		$segments = $this->uri->uri_to_assoc();
        if ($search){
			$segments['attr_set_id'] = $attr_set_id;
		}else{
			$segments['attr_set_id'] = !empty($segments['attr_set_id']) ? $segments['attr_set_id'] : 0;
		}
		$search_uri = '/attr_set_id/' . $segments['attr_set_id'] ;

        //计算查询条件
        $options = array(
            'conditions' => null,
        );

        $data['attr_set_selected'] = 0;
		if (!empty($segments['attr_set_id'])){
            $options['conditions'].= "a.attr_set_id = " . (int)$segments['attr_set_id'];
            $data['attr_set_selected'] = (int)$segments['attr_set_id'];     
        }

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
		$base_url = site_url('attribute/index/page') . '/';

		// 每页显示数据条数
        $per_page = 15;	
        
		// 数据总数
		$this->load->model('attribute_model');
		$data['total_rows'] =  $this->attribute_model->count_attributes($options);
        
		// 总页数
        $data['total_pages'] = ceil($data['total_rows']/$per_page);

		// 当前页（input）
        $data['page'] = $page_offset+1;
		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];

		// 第一页 最后一页 前一页 后一页
		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];
        
		// 当前页
		$data['cur_page'] =  $base_url.($data['page']-1).$search_uri;	
        
		// 当前页起始数据号
		$data['show_start'] = ($data['page']-1)*$per_page+1;
        
		// 当前页结束数据号
		$data['show_end'] = ($page_offset<$data['total_pages']-1) ? ($data['show_start']+$per_page-1) : $data['total_rows'];
		
		// 商品属性结果集
		$attributes = $this->attribute_model->find_attributes($options, $per_page, ($data['page']-1)*$per_page);
        foreach($attributes as $key => $attribute):
           switch($attribute['attr_type']){

				case 'text' : $attributes[$key]['attr_type_name'] = '文本';
				               break;
				case 'textarea' : $attributes[$key]['attr_type_name'] = '文本区';
				               break;
				case 'radio' : $attributes[$key]['attr_type_name'] = '单选';
				               break;
				case 'checkbox' : $attributes[$key]['attr_type_name'] = '多选';
				               break;
				case 'select' : $attributes[$key]['attr_type_name'] = '下拉';

			}
		endforeach;
		$data['attributes'] = $attributes;

		// 属性分组结果集
        $this->load->model('attribute_set_model');			
	    $data['attr_sets'] = $this->attribute_set_model->find_attribute_sets();
        
		// ajax 
		if (!empty($segments['ajax'])|| $search==1){
			$this->load->view('product/attribute/ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('product/attribute/list',$data);
		}
    }

	// --------------------------------------------------------------------

    /**
	 * 添加商品属性
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
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
		if (!admin_priv('attr_manage')){
			return show_message2('你没有此项操作的权限!', 'attribute');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('attribute_model');
            $data['editing'] = $this->attribute_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'attribute');
            }
			$data['header_text'] = '编辑属性(ID:'.$data['editing']['id'].')';
        } else {
			$attr_choose = array(0,'text');
			if (!empty($_COOKIE['PS']['attr_choose'])){
				$attr_choose = explode('|', $_COOKIE['PS']['attr_choose']);
			}
            $data['editing'] = array(
                'id' => null,
				'attr_set_id' => $attr_choose[0],
				'attr_name' => null,
				'attr_type' => $attr_choose[1],
				'option_values' => null,
				'default_value' => null
            );
			$data['header_text'] = '添加属性';
        }
        
		// 属性分组结果集
		$this->load->model('attribute_set_model');			
		$data['attribute_sets'] = $this->attribute_set_model->find_attribute_sets();

		$this->load->view('product/attribute/edit',$data);
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
        $attr_set_id = $this->input->post('attr_set_id');
		$attr_name = $this->input->post('attr_name');
        $attr_type = $this->input->post('attr_type');	
	    $option_values = $this->input->post('option_values');
        $default_value = $this->input->post('default_value');
		if ($attr_type == 'text' || $attr_type == 'textarea'){
            $option_values = null;			
		}
		if($attr_type == 'textarea'){
            $default_value = $default_value[1];
		}else{
            $default_value = $default_value[0];
		}
        $default_value = $default_value;
        
        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('attribute_model');      
            $this->attribute_model->attr_set_id = $attr_set_id;
			$this->attribute_model->attr_name = $attr_name;
            $this->attribute_model->attr_type = $attr_type;
            $this->attribute_model->option_values = $option_values;
            $this->attribute_model->default_value = $default_value;
            
			setcookie('PS[attr_choose]', $attr_set_id . '|' . $attr_type, gmtime()+86400);

			// 更新商品属性
            if ($id){
                $this->attribute_model->update($id);
				if($re_edit){
					echo $id;
                    //show_message2('"属性(ID:'.$id.')" 已保存!', 'attribute/edit/id/'.$id);
			    }else{
					echo "更新成功";
					//show_message2('保存成功!', 'attribute');
				}
            
			// 添加新商品属性
            } else {
               $this->attribute_model->create();
			   if($re_edit){                  
				   echo $this->db->insert_id();
                   //show_message2('"属性(ID:'.$newly_one['id'].')" 已保存!', 'attribute/edit/id/'.$newly_one['id']);
			   }else{
				    echo '保存成功!';
				    //show_message2('保存成功!', 'attribute');
			    }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}

    // --------------------------------------------------------------------

    /**
	 * 删除商品属性
	 *
	 *
	 */	
    function delete()
    {
		// 检验操作权限
		if (!admin_priv('attr_delete')){
			return show_message2('你没有此项操作的权限!', 'attribute');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('attribute_model');
            if ($this->attribute_model->delete($id)){
				//echo $id;
                show_message2('"属性(ID:'.$id.')" 已被删除!', 'attribute');
            } else {
				//return false;
                return show_message2('无效ID:'.$id, 'attribute');
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
        $rules['attr_name'] = 'trim|required';
		$this->validation->set_rules($rules);		
    }
    
}