<?php
/**
 * 品牌
 *
 *
 */
class Brand extends Controller
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
	 * 品牌列表
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
			'order' => 'sort_order'
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
		$base_url = site_url('brand/index/page') . '/';
        
		// 每页显示数据条数
        $per_page = 7;	
        
		// 数据总数
		$this->load->model('brand_model');
		$data['total_rows'] =  $this->brand_model->count_brands($options);

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
	    
		// 品牌结果集		
		$data['brands'] = $this->brand_model->find_brands($options, $per_page, ($data['page']-1)*$per_page);
        
		// ajax
		if (!empty($segments['ajax'])){
			$this->load->view('product/brand/ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('product/brand/list',$data);
		}
    }
    

	// --------------------------------------------------------------------

    /**
	 * 添加品牌
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }

	// --------------------------------------------------------------------

    /**
	 * 编辑品牌
	 *
	 *
	 */	  
	function edit()
    {
		// 检验操作权限
		if (!admin_priv('brand_manage')){
			return show_message2('你没有此项操作的权限!', 'brand');
		} 

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('brand_model');
            $data['editing'] = $this->brand_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'brand');
            }
			$data['header_text'] = '编辑品牌(ID:'.$data['editing']['id'].')';
        } else {
            $data['editing'] = array(
                'id' => null,
                'name' => null,
				'byname' => null,
				'logo_path' => null,
				'desc' => null,
				'website' => null,
				'sort_order' => 0,
            );
			$data['header_text'] = '添加品牌';
        }

		$this->load->view('product/brand/edit',$data);
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

        // 品牌id
        $id = $this->input->post('id');
        
		// 接收客户端提交数据
        $name = $this->input->post('name');
		$byname = $this->input->post('byname');
		$logo_path = $this->input->post('logo_path');
		$desc = $this->input->post('desc');
		$website = $this->input->post('website');
        $sort_order = $this->input->post('sort_order');
        
        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//对有上传新品牌logo的情况的处理
            $logo = '';  
			if (!empty($_FILES['logo']['name'])){

			    // 定义和创建图片保存位置
				$save_path = 'brand/';
				$path = UPLOADS.$save_path;
				mkdirsByPath($path);

				// CI文件上传类 数据初始化
				$config['file_name']  = date("YmdHis"); 
				$config['upload_path']  = $path ; 
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '300';
				$config['max_filename'] = '10';		   
				$this->load->library('upload');
				$this->upload->initialize($config);
				$this->upload->do_upload('logo');
				$uploaded = $this->upload->data();
				$logo = $save_path.$uploaded['file_name'];

				//删除原图
				if($id){
                    $this->load->model('brand_model');
					$brand_logo = $this->brand_model->load($id);
					if (file_exists(UPLOADS.$brand_logo['logo'])){
				        @unlink(UPLOADS.$brand_logo['logo']);
			        }
				}
			}
            
			// 把数据提交给模型
			$this->load->model('brand_model');			
			$this->brand_model->name = $name;
			$this->brand_model->byname = $byname;
			$this->brand_model->logo_path = $logo_path;
			$this->brand_model->logo = $logo;
			$this->brand_model->desc = $desc;
			$this->brand_model->website = $website;
			$this->brand_model->sort_order = $sort_order;
             
			// 更新品牌
            if ($id){
                $this->brand_model->update($id);
				if($re_edit){ 
                    show_message2('"品牌(ID:'.$id.')" 已保存!', 'brand/edit/id/'.$id);
					//echo $id;
			    }else{
					//echo "更新成功";
					show_message2('保存成功!', 'brand');
				}
            
			// 添加新品牌
            } else {			    
               $this->brand_model->create();			   
			   if($re_edit){ 
                   show_message2('"品牌(ID:'.$this->db->insert_id().')" 已保存!', 'brand/edit/id/'.$this->db->insert_id());
				   //echo $newly_one['id'];
			   }else{
				   show_message2('保存成功!', 'brand');
					//echo "保存成功";
			    }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}
    
	// --------------------------------------------------------------------

    /**
	 * 删除品牌
	 *
	 *
	 */	
	function delete()
    {
        // 检验操作权限
		if (!admin_priv('brand_delete')){
			return show_message2('你没有此项操作的权限!', 'brand');
		} 

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('brand_model');
			$brand_logo = $this->brand_model->load($id);
			if (file_exists(UPLOADS.$brand_logo['logo'])){
				@unlink(UPLOADS.$brand_logo['logo']);
			}
            if ($this->brand_model->delete($id)){
                //echo $id;
				show_message2('"品牌(ID:'.$id.')" 已被删除!', 'brand');
            } else {
                //return false;
				return show_message2('无效ID:'.$id, 'brand');
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