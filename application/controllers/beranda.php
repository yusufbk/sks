 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class beranda extends CI_Controller {
 
      public function index()
      {
           $this->load->view('account/beranda');
      }
 }
 