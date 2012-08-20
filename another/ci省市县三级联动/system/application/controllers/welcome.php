<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$data['province_selected'] = 6;  //设置默认省份,以广东为例子
		$data['city_selected'] = 76;  //设置默认城市，以广州为例子
		$data['district_selected'] = 693;  //设置默认县/区，以天河为例子,因为本人在天河

		$this->load->view('welcome_message',$data);
	}
}

