 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class order extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_order');
         $this->load->helper('url');            
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['join3'] = $this->m_order->get_order(); 
        $this->load->view('account/order',$data);  
     }
 }