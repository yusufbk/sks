 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

	class m_order extends CI_Model{

    public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}

		function get_order(){
            $sellerid = $this->session->userdata('id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('order','order.pelanggan=users.id_user');            
            $this->db->join('detail_order','detail_order.order_id=order.id');
            $this->db->join('produk','produk.id=detail_order.produk');
            $this->db->where('seller_id', $sellerid);
            $query = $this->db->get();
            return $query->result();
		}

    
	}
