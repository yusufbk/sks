 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_status extends CI_Model{

    public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}    
    
    function edit_status($where,$table){		
	   return $this->db->get_where($table,$where);
    }
      
	function update_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}    
}