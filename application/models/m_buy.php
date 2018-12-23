 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

	class m_buy extends CI_Model{

    public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}

		function get_buy(){
            $buyerid = $this->session->userdata('id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('produk','produk.seller_id=users.id_user');          
            $this->db->join('detail_order','detail_order.produk=produk.id');            
            $this->db->join('order','order.id=detail_order.order_id');                    
            $this->db->where('pelanggan', $buyerid);
            $query = $this->db->get();
            return $query->result();
		}     

		function get_buy_detail($id){
            $buyerid = $this->session->userdata('id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('produk','produk.seller_id=users.id_user');          
            $this->db->join('detail_order','detail_order.produk=produk.id');            
            $this->db->join('order','order.id=detail_order.order_id');                    
            $this->db->where('pelanggan', $buyerid);
            $this->db->where('order_id', $id);
            $query = $this->db->get();
            return $query->result();
		}           
	}
