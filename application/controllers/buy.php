 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class buy extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_buy');
         $this->load->helper('url');            
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['join3'] = $this->m_buy->get_buy(); 
        $this->load->view('account/buy',$data);  
     }
 }