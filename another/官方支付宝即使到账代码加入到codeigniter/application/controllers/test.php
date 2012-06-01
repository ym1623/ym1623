<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->model('alipay_model');
		echo $this->alipay_model->build_form('123', 'goods', 345);
		
	}
	
}
