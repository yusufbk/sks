 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class upload extends CI_Controller{
	function __construct(){
		parent::__construct();	
        $this->simple_login->cek_login();  
		$this->load->model('m_upload');
        $this->load->model('m_buy');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('account/upload');
	}

	function edit($id){
        $data['join3'] = $this->m_buy->get_buy_detail($id); 
		$where = array('order_id' => $id);
        //$data['detail_order'] = $this->m_status->edit_status($where,'detail_order')->result();
		$this->load->view('account/upload',$data);
	}     
     
     function update(){
        $id = $this->input->post('id');  
        $bukti = $this->input->post('gambar');  
         
        $config['upload_path']    = './img-bayar/';
        $config['allowed_types']  = 'jpg|png|jpeg';
        $config['max_size']       = 1000;
        $config['remove_space']   = TRUE;         

		$this->load->library('upload', $config);       
 
		if ($this->upload->do_upload('gambar')){           
            $data = array(
                'bukti_bayar' => $this->upload->data('file_name'),
                'status_id' => '2'
                );

           $where = array(
              'order_id' => $id
           );

           $this->m_upload->upload($where,$data,'detail_order');
           redirect('buy');
        }else {
            
        }
     }      
 }