<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct(){
		parent::__construct();
    $this->load->model('m_product');
    		$this->load->helper('url');

	}

	function index()
	{
    $data['skyking']=$this->m_product->get_sky();
    $data['produk']=$this->m_product->get_all();
		$this->load->view('home', $data);
	}
  


}
