<?php
/**
 * 商品属性分组
 *
 *
 */
class Category extends Controller
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

        // 父分类id
        $parent_id = ($this->input->post('parent_id')) ? ($this->input->post('parent_id')) : 0;
        
        // ajax 请求
		$search = $this->input->post('search');
        
		// 预处理父分类id
		$segments = $this->uri->uri_to_assoc();
        if ($search){
			$segments['parent_id'] = $parent_id;
		}else{
			$segments['parent_id'] = !empty($segments['parent_id']) ? $segments['parent_id'] : 0;
		}
        
		// 选中的父分类
        $data['parent_selected'] = 0;
		if (!empty($segments['parent_id'])){
            $data['parent_selected'] = (int)$segments['parent_id'];     
        }
        
		// 不是叶分类的所有分类结果集
		$this->load->model('category_model');
		$data['category_not_leaf'] = $this->category_model->find_not_leaf();
		
		// ajax 
		if ($search){
			$data['categorys'] = array();
			$data['categorys'] = $this->category_model->find_sub_cats($segments['parent_id']);
			$this->load->view('product/category/ajax_list',$data);

		// 非 ajax 
		}else{
			$this->load->view('product/category/list',$data);		    
		}


        
    }
    
	// --------------------------------------------------------------------

    /**
	 * 添加新分类
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }
    

	// --------------------------------------------------------------------

    /**
	 * 编辑分类
	 *
	 *
	 */	  
	function edit()
    {
		// 检验操作权限
		if (!admin_priv('cat_manage')){
			return show_message2('你没有此项操作的权限!', 'category');
		} 
        
		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('category_model');
            $data['editing'] = $this->category_model->load($id);
            if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'category');
            }
			$data['header_text'] = '编辑分类(ID:'.$data['editing']['id'].')';
        } else {
			$cat_choose = array(0);
			if (!empty($_COOKIE['PS']['cat_choose'])){
				$cat_choose = explode('|', $_COOKIE['PS']['cat_choose']);
			}
            $data['editing'] = array(
                'id' => null,
                'parent_id' => $cat_choose[0],
				'name' => null,
				'sort_order' => 0
            );
			$data['header_text'] = '添加分类';
        }
        
		// 分类结果集，用于选择父分类
		$this->load->model('category_model');
		$data['categorys'] = $this->category_model->find_all_categorys();

		$this->load->view('product/category/edit',$data);
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
		$parent_id = $this->input->post('parent_id');
        $sort_order = $this->input->post('sort_order');
        
        // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

        // 将上次选择的父分类保存到cookie，做下次选择父分类的默认项
		setcookie('PS[cat_choose]', $parent_id , gmtime()+86400);
        
		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('category_model');            
            $this->category_model->name = $name;
			$this->category_model->parent_id  = $parent_id;
			$this->category_model->sort_order = $sort_order;
            
            // 更新分类
            if ($id){
			    $this->load->model('category_model');
                
				// 该分类的属下分类id和该分类id
			    $sub_cat = $this->category_model->find_sub_cats($id);
			    $sub_cat_ids = array();
			    foreach($sub_cat as $key => $value):
                    $sub_cat_ids[] = $value['id'];
			    endforeach;
				$sub_cat_ids[] = $id;
                
				// 所选分类不能是当前分类或者当前分类的下级分类
				if (in_array($parent_id,$sub_cat_ids)){
                     echo -1;
                    //show_message2('所选分类不能是当前分类或者当前分类的下级分类!', 'category/edit/id/'.$id);
				}else{
					$this->category_model->update($id);
					// 更新子分类
					$this->category_model->update_child($id);
					if ($re_edit){ 
						echo $id;
					   //	show_message2('"分类(ID:'.$id.')" 已保存!', 'category/edit/id/'.$id);
					}else{
						echo '更新成功';
						//show_message2('保存成功!', 'category');
					}
				}

            // 添加新分类
            } else {
               $this->category_model->create();
			   if($re_edit){ 
			       $newly_one = $this->category_model->_get_newly_one();
				   echo $newly_one['id'];
                   //show_message2('"分类(ID:'.$newly_one['id'].')" 已保存!', 'category/edit/id/'.$newly_one['id']);
			   }else{
				   echo '保存成功!';
                  // show_message2('保存成功!', 'category');
			   }
            }

		// 对提交的数据不符合表单验证规则情况的处理
		}else{
          //
		}
	}

	function delete()
    {
		if (!admin_priv('cat_delete')){
			return show_message2('你没有此项操作的权限!', 'category');
		} 
		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){
            $this->load->model('category_model');
            $cat = $this->category_model->load($id);
			$this->load->model('product_model');
            $product = $this->product_model->check_product_by_cat($id);
			if(!$cat['is_leaf'] || !empty($product['id'])){
		        //echo -1;
                 show_message2($cat['name'].' 不是末级分类或者此分类下还存在有商品,您不能删除!','category');
			}
            else if ($this->category_model->delete($id)){
				//echo $id;
                show_message2('"分类(ID:'.$id.')" 已被删除!', 'category');
            } else {
				//return false;
                return show_message2('无效ID:'.$id, 'category');
            }
        }

	}

	function set_save_form_rules()
    {
        $rules['name'] = 'trim|required';
		$this->validation->set_rules($rules);
		
    }

}