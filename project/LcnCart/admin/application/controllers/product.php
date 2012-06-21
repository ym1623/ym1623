<?php
/**
 * 商品
 *
 *
 */
class Product extends Controller
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
	 * 商品列表
	 *
	 *
	 */	
    function index()
    {

        // 接收客户端反馈的信息： ajax，post
		$cat_id = ($this->input->post('cat_id')) ? ($this->input->post('cat_id')) : 0;
		$brand_id = ($this->input->post('brand_id')) ? $this->input->post('brand_id') : 0;
        $intro_type =  ($this->input->post('intro_type')) ? $this->input->post('intro_type') : 0;
		$keyword = ($this->input->post('keyword')) ? $this->input->post('keyword') : 0;
		$search = $this->input->post('search');
		$page = $this->input->post('page'); $page = (int)$page;
        
		// 分页+查询的url设置
        $segments = $this->uri->uri_to_assoc();
        if ($search){
			$segments['cat_id'] = $cat_id;
			$segments['brand_id'] = $brand_id;
			$segments['intro_type'] = $intro_type;
			$segments['keyword'] = $keyword;			
		}else{
			$segments['cat_id'] = !empty($segments['cat_id']) ? $segments['cat_id'] : 0;
			$segments['brand_id'] = !empty($segments['brand_id']) ? $segments['brand_id'] : 0;
			$segments['intro_type'] = !empty($segments['intro_type']) ? $segments['intro_type'] : 0;
			$segments['keyword'] = !empty($segments['keyword']) ? $segments['keyword'] : 0;
		}			       	
		$search_uri = '/cat_id/' . $segments['cat_id'] . '/brand_id/' . $segments['brand_id'] .
			          '/intro_type/' . $segments['intro_type'] .'/keyword/' . $segments['keyword'];

		//计算查询条件
        $options = array(
            'conditions' => null,
        );

        $data['brand_selected'] = $data['cat_selected'] = 0;
        $data['keyword'] = '';
		$data['intro_type_selected'] = '';
        
		// 按分类查询
        if (!empty($segments['cat_id'])){
			$this->load->model('category_model');
			$sub_cat = $this->category_model->find_sub_cats($segments['cat_id']);
			$sub_cat_ids = array();
			foreach($sub_cat as $key => $value):
                $sub_cat_ids[] = $value['id'];
			endforeach;
			$sub_cat_ids[] = $segments['cat_id'];
            $options['conditions']['p.cat_id'] = $sub_cat_ids;
            $data['cat_selected'] = (int)$segments['cat_id'];     
        }
        
		// 按品牌查询
		if (!empty($segments['brand_id'])){
		    $options['conditions']['p.brand_id'] = (int)$segments['brand_id'];
            $data['brand_selected'] = (int)$segments['brand_id'];     
        }
        
		// 按新品，热卖 ，上架，特价等筛选
		if (!empty($segments['intro_type'])){
		    $options['conditions'][$segments['intro_type']] = 1;
            $data['intro_type_selected'] = $segments['intro_type'];     
        }

        //  按关键字查询
		if (!empty($segments['keyword'])){
            if ($cond_keywod = $segments['keyword']){
                $options['conditions']['p.name'] = $cond_keywod;
                $data['keyword'] = $cond_keywod;
            }
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
		$base_url = site_url('product/index/page') . '/';

		// 每页显示数据条数
        $per_page = 15;
        
		// 数据总数
		$this->load->model('product_model');		
		$data['total_rows'] =  $this->product_model->count_products($options);

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

	    // 商品结果集
		$data['products'] = $this->product_model->find_products($options, $per_page, ($data['page']-1)*$per_page);

        // 分类结果集，用于按分类筛选商品
        $this->load->model('category_model');			
	    $data['categorys'] = $this->category_model->find_all_categorys();
        
		// 品牌结果集，用于按分类筛选商品
		$this->load->model('brand_model');			
	    $data['brands'] = $this->brand_model->find_brands(array(), 0, 0);
        
		// ajax 
		if (!empty($segments['ajax']) || $search==1){
			$this->load->view('product/product/ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('product/product/list',$data);
		}
    }
    
	// --------------------------------------------------------------------

    /**
	 * 添加商品
	 *
	 *
	 */	  
	function add()
    {
        $this->edit();
    }
    
	// --------------------------------------------------------------------

    /**
	 * 编辑商品
	 *
	 *
	 */	  
	function edit()
    {
		// 检验操作权限
		if (!admin_priv('product_manage')){
			return show_message2('你没有此项操作的权限!', 'product');
		}

		$params = $this->uri->uri_to_assoc();
        if (!empty($params['id']) && $params['id'] > 0){
            $id = $params['id'];
            $this->load->model('product_model');
            $data['editing'] = $this->product_model->load($id);

			if (!$data['editing']){
                return show_message2('无效ID:'.$id, 'product');
            }
            
			// 预备处理商品属性
            $attr_list = array();
			foreach($data['editing']['attr_list'] as $key => $attr):
				$attr_list[$attr['id']]['id'] = $attr['id'];
				$attr_list[$attr['id']]['attr_name'] = $attr['attr_name'];
				$attr_list[$attr['id']]['attr_type'] = $attr['attr_type'];
				$attr_list[$attr['id']]['option_values'] = $attr['option_values'];
				$attr_list[$attr['id']]['attr_value'] = $attr['attr_value'];
				$attr_list[$attr['id']]['option_values_array'] = $attr['option_values_array'];
				if($attr['attr_type'] == 'checkbox'){
                    $attr_list[$attr['id']]['attr_values'][] = $attr['attr_value'];
				}
			endforeach;
			$data['editing']['attr_list'] = $attr_list;
			        
			$data['header_text'] = '编辑商品(ID:'.$data['editing']['id'].')';
        } else {

			// 默认选中上次编辑的选项
			$last_choose = array(0, 0, 0, 0, 0, 0, 0);
			if (!empty($_COOKIE['PS']['last_choose'])){
				$last_choose = explode('|', $_COOKIE['PS']['last_choose']);
			}

            $data['editing'] = array(

                'id' => null,
                'cat_id' => $last_choose[0],
                'name' => null, 
				'short_name' => null,  
				'url_alias' => null,    
				'brand_id' => $last_choose[1],
				'weight' => null,
				'stock' => null,
				'price' => null,
				'market_price' => 0.00,
				'is_special_price' => 0,
				'special_price' => 0.00,
				'special_price_start_at' => null,
				'special_price_end_at' => null,
				'is_on_sale' => $last_choose[2],
				'is_new' => $last_choose[3],
				'is_hot' => $last_choose[4],
				'is_commend' => $last_choose[5],

				'desc' => null,
				'short_desc' => null,

				'meta_title' => null,
				'meta_keywords' => null,
				'meta_desc' => null,
				
				'images' => array(),

				'attr_set_id' => $last_choose[6],
				'attr_list' => array(),
            );

			$data['header_text'] = '添加商品';
        }
       
	   // 分类结果集，用于商品分类选择
	   $this->load->model('category_model');			
	   $data['categorys'] = $this->category_model->find_all_categorys();
       
	   // 品牌结果集，用于商品品牌选择
	   $this->load->model('brand_model');			
	   $data['brands'] = $this->brand_model->find_brands(array('order' => 'sort_order'), 0, 0);
       
       // 属性分组结果集，用于商品属性选择
	   $this->load->model('attribute_set_model');			
	   $data['attribute_sets'] = $this->attribute_set_model->find_attribute_sets();	   

	   // 创建 编辑器 
	   $this->fckeditor->BasePath = base_url().'fck/';
       $this->fckeditor->InstanceName = 'desc';   
       $this->fckeditor->Height = '300';
	   $this->fckeditor->ToolbarSet = 'Normal';
	   $this->fckeditor->Value = $data['editing']['desc'];
       $data['fckeditor']=$this->fckeditor->CreateHtml(); 

       $this->load->view('product/product/edit',$data);

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

        // 商品id
        $id = $this->input->post('id');

		// 基本信息
        $cat_id                 = (int)($this->input->post('cat_id'));
        $name                   = $this->input->post('name');
		$short_name             = $this->input->post('short_name');
	    $url_alias              = $this->input->post('url_alias');
        $brand_id               = $this->input->post('brand_id');
        $weight                 = $this->input->post('weight');
        $stock                  = $this->input->post('stock');
        $price                  = $this->input->post('price');
        $market_price           = $this->input->post('market_price');
	    $is_special_price       = $this->input->post('is_special_price');
        $special_price          = $this->input->post('special_price');
	    $special_price_start_at = $this->input->post('special_price_start_at');
	    $special_price_end_at   = $this->input->post('special_price_end_at');
        $is_on_sale             = $this->input->post('is_on_sale');
        $is_new                 = $this->input->post('is_new');
        $is_hot                 = $this->input->post('is_hot');
        $is_commend             = $this->input->post('is_commend');

		// 描述
	    $short_desc = $this->input->post('short_desc');
	    $desc = $this->input->post('desc');

		// meta
	    $meta_title = $this->input->post('meta_title');
        $meta_keywords = $this->input->post('meta_keywords');
        $meta_desc = $this->input->post('meta_desc');

		// 图片
		$main_image = $this->input->post('main_image');
        $del_images = $this->input->post('del_image');
        $image_order = $this->input->post('image_order');

	    //属性分组
		$attr_set_id = $this->input->post('attr_set_id');

		// 商品属性值
		$attr_values = $this->input->post('attr_values');
		$attr_values = ($attr_values) ? $attr_values : array();
		$real_attr_values = array();
        $this->load->model('attribute_model');
		foreach ($attr_values as $key => $value){
            $attribute = '';
		    $attribute = $this->attribute_model->load($key);
			if ($attribute['attr_set_id'] == $attr_set_id ){
				$real_attr_values[$key] = $value;
			}
		}
		         
       // 加载表单验证类
        $this->load->library('validation');

		// 设置表单数据规则
        $this->set_save_form_rules();

		// 如果提交数据符合所设置的规则，则继续运行
		if (TRUE == $this->validation->run()){
            
			//把数据提交给模型
            $this->load->model('product_model');         
            $this->product_model->cat_id = $cat_id;
            $this->product_model->name = $name;
			$this->product_model->short_name = $short_name;
			$this->product_model->url_alias = $url_alias;
            $this->product_model->brand_id = $brand_id;
            $this->product_model->weight = $weight;
            $this->product_model->stock = $stock;
            $this->product_model->price = $price;
            $this->product_model->market_price = $market_price;
            $this->product_model->is_special_price = $is_special_price;
            $this->product_model->special_price = $special_price;
            $this->product_model->special_price_start_at = $special_price_start_at;
            $this->product_model->special_price_end_at = $special_price_end_at;
            $this->product_model->is_on_sale = $is_on_sale;
            $this->product_model->is_new = $is_new;
            $this->product_model->is_hot = $is_hot;
            $this->product_model->is_commend = $is_commend;
	        
            $this->product_model->short_desc = $short_desc;
            $this->product_model->desc = $desc;

			$this->product_model->meta_title = $meta_title;
            $this->product_model->meta_keywords = $meta_keywords;
            $this->product_model->meta_desc = $meta_desc;

            $this->product_model->attr_set_id = $attr_set_id;
            
			$this->load->model('image_model');
			$this->load->model('attribute_value_model');
            
			// 将本次所选的下拉类型数据保存到cookie，以备下次提供默认选择
			setcookie('PS[last_choose]', $cat_id . '|' . $brand_id . '|' . $is_on_sale. '|' . $is_new. '|' . $is_hot. '|' . $is_commend. '|' . $attr_set_id, gmtime()+86400);
            
			//商品图片缩略图尺寸
            $sizes = array('347','50','100', '130');

			//更新
            if ($id){
                $old_pro = $this->product_model->load($id);
                $this->product_model->update($id);
				$new_pro = $this->product_model->load($id);

				$this->load->model('image_model');
				
				// 主图更新
				$this->image_model->update_is_base($main_image);

                // 图片顺序
				if (!empty($image_order)){
					foreach($image_order as $key => $value['id']):
					$this->image_model->update_sort_order($key,num_limit($value['id'],127));
					endforeach;
				}

                // 图片 初始化数据
				$save_path = 'product/'.$id.'/';
				$path = UPLOADS.$save_path;
				mkdirsByPath($path);
				$config['file_name']  = date("YmdHis"); 
				$config['upload_path']  = $path ; 
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '300';
				$config['max_filename'] = '10';		   
				$this->load->library('upload'); 
				
				// 图片 添加
				if(!empty($_FILES))
				    $n = count($_FILES['file']['name']);
				else
					$n = 0;
				if($n){
					foreach($_FILES['file'] as $key => $val):
						for($i=0;$i<$n;$i++){
							$_FILES['file'.$i][$key] = $val[$i];
						}
					endforeach;
					$images = array();
					for($j=0;$j<$n;$j++){
						$this->upload->initialize($config);
						if($this->upload->do_upload('file'.$j)){
							$uploaded = $this->upload->data();
							$images[$j]['image_name'] = $save_path.$uploaded['raw_name'];
							$images[$j]['file'] = $save_path.$uploaded['file_name'];
							$images[$j]['file_ext'] = $uploaded['file_ext'];
							$images[$j]['file_mime'] = $uploaded['file_type'];
							$images[$j]['width'] = $uploaded['image_width'];
							$images[$j]['height'] = $uploaded['image_height'];
							$images[$j]['file_size'] = $uploaded['file_size'];						
						}
					}
					
					// 记录新增图片数据
					if (!empty($images[0]['image_name'])){
						foreach($images as $image):
							$this->image_model->product_id = $id ;
							$this->image_model->image_name = $image['image_name'] ;
							$this->image_model->file = $image['file'] ;
							$this->image_model->file_ext = $image['file_ext'] ;
							$this->image_model->file_mime = $image['file_mime'] ;
							$this->image_model->width = $image['width'] ;
							$this->image_model->height = $image['height'] ;
							$this->image_model->file_size = $image['file_size'] ;
							$this->image_model->is_base = 0 ;
							$this->image_model->create();

							//生成缩略图
							$this->load->library('image_lib');
							$config1['image_library'] = 'gd2';
							$config1['source_image'] = UPLOADS.$image['file'];
							$config1['create_thumb'] = TRUE;
							$config1['maintain_ratio'] = TRUE;         
							foreach($sizes as $size):					
								$config1['width'] = $size;
								$config1['height'] = $size;
								$config1['thumb_marker'] = '_'.$size;
								$this->image_lib->initialize($config1);
								$this->image_lib->resize();
							endforeach;
						endforeach;
					}				
				}

				// 属性值
				if($old_pro['attr_set_id'] != $new_pro['attr_set_id']){
					$this->attribute_value_model->delete_old($id);
				}
                foreach($real_attr_values as $key => $value):
					
					$attribute = $this->attribute_model->load($key);
					switch($attribute['attr_type']){

						case 'text'     : 

						case 'textarea' : 

						case 'radio'    : 
									      
						case 'select'   : if (empty($value[0])){
                                               $this->attribute_value_model->delete($key,$id);
							              }else{
											   $this->attribute_value_model->product_id = $id;
											   $this->attribute_value_model->attr_id = $key;
											   $this->attribute_value_model->attr_value = $value[0];
                                               if($this->attribute_value_model->is_exist($key,$id)){
											       $this->attribute_value_model->update($key,$id);
											   }else{
											       $this->attribute_value_model->create();
											   }
										   }
						                   break;

					   case 'checkbox' :  $this->attribute_value_model->delete($key,$id,$value);					  
										  $this->attribute_value_model->product_id = $id;
										  $this->attribute_value_model->attr_id = $key;
						                  foreach($value as  $value1):
											 $this->attribute_value_model->attr_value = $value1;
										      if(!$this->attribute_value_model->is_exist1($value1) && $value1 != ''){
											      $this->attribute_value_model->create();
											  }
					                      endforeach;
									     					
			        }
				endforeach;
                
				//继续编辑
				if($re_edit){ 
				   //echo $id;
                    show_message2('"商品(ID:'.$id.')" 已更新!', 'product/edit/id/'.$id);
			    //返回列表
			    }else{ 
				    //echo '更新成功';
					show_message2('"商品(ID:'.$id.')" 已更新!', 'product');
				}
				
            // 添加新商品
            } else {
                $this->product_model->create();
                $newly_one = $this->product_model->get_newly_one();

				// 图片 初始化数据
				$save_path = 'product/'.$newly_one['id'].'/';
				$path = UPLOADS.$save_path;
				mkdirsByPath($path);
				$config['file_name']  = date("YmdHis"); 
				$config['upload_path']  = $path ; 
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '300';
				$config['max_filename'] = '10';		   
				$this->load->library('upload'); 		
					
				// 图片
				if(!empty($_FILES))
				    $n = count($_FILES['file']['name']);
				else
					$n = 0;
				if($n){
					foreach($_FILES['file'] as $key => $val):
						for($i=0;$i<$n;$i++){
							$_FILES['file'.$i][$key] = $val[$i];
						}
					endforeach;
					$images = array();
					for($j=0;$j<$n;$j++){
						$this->upload->initialize($config);
						if($this->upload->do_upload('file'.$j)){
							$uploaded = $this->upload->data();
							$images[$j]['image_name'] =$save_path.$uploaded['raw_name'];
							$images[$j]['file'] = $save_path.$uploaded['file_name'];
							$images[$j]['file_ext'] = $uploaded['file_ext'];
							$images[$j]['file_mime'] = $uploaded['file_type'];
							$images[$j]['width'] = $uploaded['image_width'];
							$images[$j]['height'] = $uploaded['image_height'];
							$images[$j]['file_size'] = $uploaded['file_size'];
						}
					}
					$this->load->model('image_model');

					if (!empty($images[0]['image_name'])){
						foreach($images as $key => $image):
							$this->image_model->product_id = $newly_one['id'] ;
							$this->image_model->image_name = $image['image_name'] ;
							$this->image_model->file = $image['file'] ;
							$this->image_model->file_ext = $image['file_ext'] ;
							$this->image_model->file_mime = $image['file_mime'] ;
							$this->image_model->width = $image['width'] ;
							$this->image_model->height = $image['height'] ;
							$this->image_model->file_size = $image['file_size'] ;
							$this->image_model->is_base = 0 ;
							if ($key==0){
							    $this->image_model->is_base = 1 ;                                
							}
							$this->image_model->create();

							//生成缩略图
							$this->load->library('image_lib');
							$config1['image_library'] = 'gd2';
							$config1['source_image'] =  UPLOADS.$image['file'];
							$config1['create_thumb'] = TRUE;
							$config1['maintain_ratio'] = TRUE;         
							foreach($sizes as $size):					
								$config1['width'] = $size;
								$config1['height'] = $size;
								$config1['thumb_marker'] = '_'.$size;
								$this->image_lib->initialize($config1);
								$this->image_lib->resize();
							endforeach;
						endforeach;
					}
				}

				// 属性值
                foreach($real_attr_values as $key => $value):
					foreach($value as  $value1):
					    if(!empty($value1)){
							$this->attribute_value_model->product_id = $newly_one['id'];
							$this->attribute_value_model->attr_id = $key;
							$this->attribute_value_model->attr_value = $value1;
							$this->attribute_value_model->create();
				        }
					endforeach;
				endforeach;

			   if ($re_edit){
				   //echo $newly_one['id'];
                   show_message2('"商品(ID:'.$newly_one['id'].')" 已保存!', 'product/edit/id/'.$newly_one['id']);
			   }else{
				   //echo '保存成功!';
				    show_message2('保存成功!', 'product');
			   }
			}
		
		// 对提交的数据不符合表单验证规则情况的处理
		}else{
            show_message2('数据插入失败!', 'product/edit');
		}
				
	}

    // --------------------------------------------------------------------

    /**
	 * 删除商品
	 *
	 *
	 */	
    function delete()
    {
		 // 检验操作权限
		if (!admin_priv('product_delete')){
			return show_message2('你没有此项操作的权限!', 'product');
		}

		$params = $this->uri->uri_to_assoc();
        if (isset($params['id']) && ($id = $params['id']) > 0){

			//删除商品相册
			if (file_exists(UPLOADS.'product/'.$id)){
			    deldir(UPLOADS.'/product/'.$id);
            }

			// 删除商品
            $this->load->model('product_model');
            if ($this->product_model->delete($id)){
                //echo $id;
				show_message2('"商品(ID:'.$id.')" 已被删除!', 'product/recycle');
            } else {
                //return false;
				return show_message2('无效ID:'.$id, 'product');
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
        $rules['special_price_start_at'] = 'valid_datetime';
        $rules['special_price_end_at']   = 'valid_datetime';		
		$this->validation->set_rules($rules);		
    }
	
    // --------------------------------------------------------------------

    /**
	 * 商品属性生成 ajax
	 *
	 */	
    function build_attr_html()
    {
       $attr_set_id = $this->input->post('attr_set_id');
	   $attr_set_id = ($attr_set_id) ? (int)$attr_set_id :0;

	   $this->load->model('attribute_model');			
	   $attributes = $this->attribute_model->find_attrs_by_attr_set($attr_set_id);	
       foreach($attributes as $key => $attribute):
		   $attributes[$key]['option_values_array'] = array();
		   if (!empty($attribute['option_values'])){
               $attributes[$key]['option_values_array'] =  explode(",",$attribute['option_values']);
		   }
	   endforeach;
       $data['attributes'] = $attributes;
       if (!empty($attributes)){
	       $this->load->view('product/product/build_attr',$data);
	   }else{
		   echo 1;
	   }
    }

    // --------------------------------------------------------------------

    /**
	 * 删除图片 ajax
	 *
	 */	
	function del_image()
    {
       $segments = $this->uri->uri_to_assoc(); 
	   $image_id = (int)$segments['image_id'];
       $sizes = array('347','50','100','130');//缩略图尺寸

	   if($image_id){
		   $this->load->model('image_model');
		   $del_image = $this->image_model->load($image_id);
		   if (file_exists(UPLOADS.$del_image['file'])){
				@unlink(UPLOADS.$del_image['file']);
			}
			foreach($sizes as $size):					
				$thumb = UPLOADS.$del_image['image_name'].'_'.$size.$del_image['file_ext'];
				if (file_exists($thumb)){
					@unlink($thumb);
				}
			endforeach;
	       $this->image_model->delete($image_id);
	   }else{
		   //echo 1;
	   }	   
    }

    // --------------------------------------------------------------------

    /**
	 * 主图更换 ajax
	 *
	 */	
	function base_image()
	{
        $segments = $this->uri->uri_to_assoc(); 
		$image_id = (int)$segments['image_id'];      
		$this->load->model('image_model');
		$this->image_model->update_is_base($image_id);

	}

	// --------------------------------------------------------------------

    /**
	 * 商品回收站
	 *
	 */	
	function recycle()
	{
		 // 检验操作权限
		if (!admin_priv('product_delete')){
			return show_message2('你没有此项操作的权限!', 'product');
		}
        
		// 接收客户端反馈的信息： ajax
        $segments = $this->uri->uri_to_assoc();		
		$keyword = ($this->input->post('keyword')) ? $this->input->post('keyword') : 0;
		$search = $this->input->post('search');
		$page = (int)$this->input->post('page'); $page = (int)$page;
        
		// 分页+查询的url设置
        if ($search){			
			$segments['keyword'] = $keyword;			
		}else{
			$segments['keyword'] = !empty($segments['keyword']) ? $segments['keyword'] : 0;		
		}			       
		$search_uri = '/keyword/' . $segments['keyword'];

		//计算查询条件
        $options = array(
            'conditions' => null,
        );

        $data['keyword'] = '';
		if (!empty($segments['keyword'])){
            if ($cond_keywod = $segments['keyword']){
                $options['conditions']['p.name'] = $cond_keywod;
                $data['keyword'] = $cond_keywod;
            }
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
		$base_url = site_url('product/recycle/page') . '/';

		// 每页显示数据条数
        $per_page = 15;
        
		// 数据总数
		$this->load->model('product_model');		
		$data['total_rows'] =  $this->product_model->count_products($options,1);

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
		$data['products'] = $this->product_model->find_products($options, $per_page, ($data['page']-1)*$per_page,1);
        
        // ajax
		if (!empty($segments['ajax']) || $search==1){
			$this->load->view('product/product/recycle_ajax_list',$data);
		// 非 ajax
		}else{
            $this->load->view('product/product/recycle_list',$data);
		}
	}

    // --------------------------------------------------------------------

    /**
	 * 入回收站
	 *
	 */	
	function in_recycle()
	{
		if (!admin_priv('product_delete')){
			return show_message2('你没有此项操作的权限!', 'product');
		}

        $segments = $this->uri->uri_to_assoc(); 
		$product_id = (int)$segments['id'];
		$this->load->model('product_model');
        $this->product_model->in_recycle($product_id);

		show_message2('"商品(ID:'.$product_id.')" 已被放入回收站!', 'product');
	}

	// --------------------------------------------------------------------

    /**
	 * 出回收站
	 *
	 */	
	function out_recycle()
	{
        $segments = $this->uri->uri_to_assoc(); 
		$product_id = (int)$segments['id'];
		$this->load->model('product_model');
        $this->product_model->out_recycle($product_id);
	}

	// --------------------------------------------------------------------

    /**
	 * 商品列表的单个字段编辑  ajax
	 *
	 */	
	function list_toggle()
	{
        $segments = $this->uri->uri_to_assoc();
		$field = $segments['field'];
		$product_id = (int)$segments['id'];
		$val = $segments['val'];
		$this->load->model('product_model');
        if ($value = $this->product_model->update_one(array($field => $val),$product_id)){
			echo $value;
		}
	}
	
    
}