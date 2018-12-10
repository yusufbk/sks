<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {

    function __construct(){
		parent::__construct();
        //$this->load->helper('url');
        $this->load->model('m_cart');
        $this->load->library('cart');
	}
    
	public function index()
	{
		$this->load->view('cart');
	}   
    
}