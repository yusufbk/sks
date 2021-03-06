<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class shopping extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
         $this->simple_login->cek_login();
        $this->load->library('cart');
        $this->load->model('m_cart');
    }

    public function index()
    {
        $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['produk'] = $this->m_cart->get_produk_kategori($kategori);
        $data['kategori'] = $this->m_cart->get_kategori_all();
        $this->load->view('product',$data);
    }
    public function cart()
    {
        $data['kategori'] = $this->m_cart->get_kategori_all();
        $this->load->view('cart',$data);
    }

    public function check_out()
    {
        $data['kategori'] = $this->m_cart->get_kategori_all();
        $this->load->view('check_out',$data);
    }

    public function detail()
    {
        $id=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['kategori'] = $this->m_cart->get_kategori_all();
        $data['detail'] = $this->m_cart->get_produk_id($id)->row_array();
        $this->load->view('detail',$data);
    }


    function tambah()
    {   
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {        
                        $qty = $item['qty'];
                    }
            }
        $id = $this->input->post('id');
        
        $query = $this->db->query("SELECT * FROM produk where id = '$id'");
        $hasil = $query->result();        
        foreach($hasil as $a){
            $result = $a->qty;
        }
        
        if($result > $qty){
        $data_produk= array('id' => $this->input->post('id'),
                             'name' => $this->input->post('nama'),
                             'price' => $this->input->post('harga'),
                             'options' => array('gambar' => $this->input->post('gambar'), 'stok' =>$this->input->post('stok')),
                             // 'gambar' => $this->input->post('gambar'),
                             // 'stok' =>$this->input->post('stok'),
                             'qty' =>$this->input->post('qty'),
                            );
            $this->cart->insert($data_produk);
            redirect('product');
        } else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Jumlah pembelian melebihi stok');
            window.location.href='../product';
            </script>");
        }
    }

    function hapus($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('cart');
    }

    function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                            'price' => $price,
                            'gambar' => $gambar,
                            'amount' => $amount,
                            'qty' => $qty);
            $this->cart->update($data);
        }
        redirect('cart');
    }

    public function proses_order()
    {
        //-------------------------Input data pelanggan--------------------------
        /*$data_pelanggan = array('nama_user' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'alamat' => $this->input->post('alamat'),
                            'telp' => $this->input->post('telp'));*/
        $id_pelanggan = $this->m_cart->tambah_pelanggan();
        //-------------------------Input data order------------------------------
        $data_order = array('tanggal' => date('Y-m-d'),
                            'pelanggan' => $id_pelanggan);
        $id_order = $this->m_cart->tambah_order($data_order);
<<<<<<< HEAD
        //-------------------------Input data detail order-----------------------       

=======
        //-------------------------Input data detail order-----------------------
>>>>>>> 390a00fc40e0c12f4f7f168888bb5dc58443584c
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('order_id' =>$id_order,
                                        'produk' => $item['id'],
                                        'qty' => $item['qty'],
<<<<<<< HEAD
                                        'total_harga' => $item['price']*$item['qty'],
                                            'status_id' => '1');          
                        $proses = $this->m_cart->tambah_detail_order($data_detail);
                    
                        $id = $item['id'];
                        $qty = $item['qty'];

                        $query = $this->db->query("SELECT * FROM produk where id = '$id'");
                        $hasil = $query->result();        
                        foreach($hasil as $a){
                            $result = $a->qty;
                        }        

                        $stok = $result - $qty;                    
                    }
            }      
         
        $sql = "UPDATE produk SET qty='$stok' WHERE id=".$id;
        $this->db->query($sql);
        //-------------------------Hapus shopping cart--------------------------        
=======
                                        // 'qty_awal' => $item['qty_awal'],
                                        'total_harga' => $item['price']);
                        $proses = $this->m_cart->tambah_detail_order($data_detail);
                        $qty_awal = array(
                                        'stok' => $item['stok']);
                        $qty_akhir = array(
                                        'qty' => $item['qty']);
                        $qty_detail = $qty_awal - $qty_akhir;
                        $process = $this->m_cart->change_qty($qty_detail, array('id' => $item['id']));
                    }
            }
        //-------------------------Hapus shopping cart--------------------------
>>>>>>> 390a00fc40e0c12f4f7f168888bb5dc58443584c
        $this->cart->destroy();
        $data['kategori'] = $this->m_cart->get_kategori_all();
        $this->load->view('sukses',$data);
    }
}
?>
