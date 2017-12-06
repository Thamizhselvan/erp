<?php 
   Class UserManagementDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		
      }
	  public function saveUser($data){
		  $this->db->insert('tbl_usermanagement', $data);
		  return ($this->db->affected_rows() != 1) ? false : true;
	  }
	  
	  public function checkUser($userId){
		
		$this->db->select("user_id,role_id,menu_ids"); 
		$this->db->where('user_id',$userId);
	    $this->db->from('tbl_usermanagement'); 
	    $query = $this->db->get();
		if ($query->num_rows()<0){
			return false;
		} else {
			return true;
		}
	  }
	  public function getUser($userId){
		
		$this->db->select("user_id,menu_ids"); 
		$this->db->where('user_id',$userId);
	    $this->db->from('tbl_usermanagement'); 
	    $query = $this->db->get();
		return $query->result();
	  }
	  
	  
   } 
?> 
