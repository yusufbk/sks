 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_upload extends CI_Model{

    public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}    

    function edit_upload($where,$table){		
	   return $this->db->get_where($table,$where);
    }    
    
	function upload($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}    
}