 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class products extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_data');
         $this->load->helper('url');           
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['produk'] = $this->m_data->tampil_data()->result();         
		$this->load->view('account/products', $data);
     }
     
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('products');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('edit',$data);
	}     
 }