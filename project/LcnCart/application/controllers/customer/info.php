<?php
/**
 * 用户中心 > 个人信息
 *
 *
 */
class Info extends Controller
{
	function __construct()
    {
        parent::Controller();
		if (!$this->session->userdata('user_in')){          		
			redirect('login');
			exit();
		}
    }
   
    function index()
    {      
       $data = array();
	   $data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/userhome.css'>";
	   $data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/user_userinfo.css'>";
	   $data['title'] = '个人资料';

	   $this->load->model('customer_model');
	   $data['customer'] = $this->customer_model->load($this->session->userdata('user_id'));

       $this->load->model('customer_address_model');
	   $data['address'] = $this->customer_address_model->load($data['customer']['id']);
	   if (empty($data['address'])){
           $data['address'] = array(
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
	   }

	   $this->load->view('customer/info',$data);
    }
    
	// --------------------------------------------------------------------

    /**
	 * 提交数据
	 *
	 *
	 */	
	function save()
	{
		$consignee = $this->input->post('consignee');
		$dob = $this->input->post('dob');
		$province_id = $this->input->post('province_id');
	    $city_id = $this->input->post('city_id');
		$district_id = $this->input->post('district_id');
		$email = $this->input->post('txtEmail');
		$phone = $this->input->post('txtTel');
		$mobile = $this->input->post('txtMobile');
		$address = $this->input->post('txtAddress');
		$postcode = $this->input->post('txtZipCode');
		$remark = $this->input->post('txtRemark');


		$this->load->model('customer_model');        
        $this->customer_model->dob = $dob;
		$this->customer_model->email = $email;
		$this->customer_model->update($this->session->userdata('user_id'));

        $this->load->model('customer_address_model');
		$this->customer_address_model->consignee = $consignee;
		$this->customer_address_model->phone = $phone;
		$this->customer_address_model->mobile = $mobile;
		$this->customer_address_model->province_id = $province_id;
		$this->customer_address_model->city_id = $city_id;
		$this->customer_address_model->district_id = $district_id;
		$this->customer_address_model->address = $address;
		$this->customer_address_model->postcode = $postcode;
		$this->customer_address_model->remark = $remark;	
		$this->customer_address_model->update($this->session->userdata('user_id'));

		redirect('customer/info');
	}

}