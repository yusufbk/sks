 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class add extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();          
         $this->load->model('m_data');
         $this->load->helper('url'); 
     }
 
     //Load Halaman dashboard
	public function index(){      
		$this->load->view('account/add');
	}      
     
 }