 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class m_cart extends CI_Model{
 
    public function get_produk_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
     
    public function get_produk_kategori($kategori)
    {
        if($kategori>0)
            {
                $this->db->where('kategori',$kategori);
            }
        $query = $this->db->get('produk');
        return $query->result_array();
    }
     
    public function get_kategori_all()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }
     
    public  function get_produk_id($id)
    {
        $this->db->select('produk.*,kategori');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori=kategori.id','left');
        $this->db->where('id',$id);
        return $this->db->get();
    }   
     
    public function tambah_pelanggan()
    {   $id = $this->session->userdata('id');
        //$this->db->insert('users', $data);
        //$id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
     
    public function tambah_order($data)
    {
        $this->db->insert('order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
     
    public function tambah_detail_order($data)
    {
        $this->db->insert('detail_order', $data);
    }
     
}