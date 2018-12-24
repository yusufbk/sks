 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

	class m_product extends CI_Model{

    public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}

        public function get_all(){
      $this->db->from('produk');
      $query=$this->db->get();
      return $query->result();
		}

		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->like('nama',$keyword);
			$this->db->or_like('harga',$keyword);
			return $this->db->get()->result();
		}

    public function get_sky(){
      $query = $this->db->query("SELECT * FROM produk where iklan = 'Sky King'");

      return $query->result();
    }


	}
