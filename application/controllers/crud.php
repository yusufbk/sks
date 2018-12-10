 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class crud extends CI_Controller{
	function __construct(){
		parent::__construct();	
        $this->simple_login->cek_login();  
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('account/add');
	}
 
	function tambah(){
		$this->load->view('products');
	}
 
	function tambah_aksi(){
        $sellerid = $this->session->userdata('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
        $gambar = $this->input->post('gambar');
        $katego = $this->input->post('kateg');
        $iklann = $this->input->post('iklan');
 
		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
            'kategori' => $katego,
			'iklan' => $iklann,
			'gambar' => $gambar,
            'seller_id' => $sellerid
			);
        
		$this->m_data->input_data($data,'produk');
		redirect('products');
	} 
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'produk');
		redirect('products');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['produk'] = $this->m_data->edit_data($where,'produk')->result();
		$this->load->view('account/edit',$data);
	}
     
     function update(){
        $sellerid = $this->session->userdata('id');
        $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
        $gambar = $this->input->post('gambar');
        $katego = $this->input->post('kateg');
        $iklann = $this->input->post('iklan');
 
		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
            'kategori' => $katego,
			'iklan' => $iklann,
			'gambar' => $gambar,
            'seller_id' => $sellerid            
			);
 
	   $where = array(
		  'id' => $id
	   );
 
	   $this->m_data->update_data($where,$data,'produk');
	   redirect('products');
     }     
 
}