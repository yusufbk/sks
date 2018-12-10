<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('m_cart');
        $this->load->library('cart');
	}
    
	public function index()
	{
		$this->load->view('product');
	}  

}