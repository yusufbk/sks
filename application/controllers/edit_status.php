 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class edit_status extends CI_Controller{
	function __construct(){
		parent::__construct();	
        $this->simple_login->cek_login();  
		$this->load->model('m_status');
        $this->load->model('m_order');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('account/status');
	}
 
	function edit($id){
        $data['join3'] = $this->m_order->get_order_detail($id); 
		$where = array('id' => $id);
        //$data['detail_order'] = $this->m_status->edit_status($where,'detail_order')->result();
		$this->load->view('account/status',$data);
	}
     
     function update(){
        $id = $this->input->post('id');  
        $status = $this->input->post('status');
        $query = $this->db->query("SELECT id_status FROM status_order where status = '$status'");
        foreach ($query->result_array() as $row) {
                $a = $row['id_status'];
        }         
		$data = array(
			'status_id' => $a,
			);
 
	   $where = array(
		  'order_id' => $id
	   );
 
	   $this->m_status->update_status($where,$data,'detail_order');
	   redirect('order');
     }      
 }