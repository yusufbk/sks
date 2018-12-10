<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('alamat','ADDRESS','required');
         $this->form_validation->set_rules('telp','PHONE NUMBER','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register');
         }else{
 
             $data['nama_user']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
             $data['alamat'] =    $this->input->post('alamat');
             $data['telp']  =    $this->input->post('telp');
 
             $this->m_account->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('account/v_success',$pesan);
         }
     }
 }