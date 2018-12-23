 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class resi extends CI_Controller{
	function __construct(){
		parent::__construct();	
        $this->simple_login->cek_login();  
		$this->load->model('m_upload');
        $this->load->model('m_order');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('account/resi');
	}

	function input($id){
        $data['join3'] = $this->m_order->get_order_detail($id); 
		$where = array('order_id' => $id);
        //$data['detail_order'] = $this->m_status->edit_status($where,'detail_order')->result();
		$this->load->view('account/resi',$data);
	}     
     
     function update(){
        $id = $this->input->post('id');  
        $resi = $this->input->post('resi');        
		$data = array(
			'resi' => $resi
			);
 
	   $where = array(
		  'order_id' => $id
	   );
 
	   $this->m_upload->upload($where,$data,'detail_order');
	   redirect('order');
     }      
 }