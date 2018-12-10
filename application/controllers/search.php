<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {

    function __construct(){
		parent::__construct();

	}
    
	public function index()
	{
            $keyword = $this->input->post('keyword');
            $data['produk']=$this->m_product->get_product_keyword($keyword);
			//$data['produk']=$this->m_product->get_all();
			$this->load->view('search',$data);
	}   

}