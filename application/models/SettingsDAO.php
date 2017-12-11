<?php 
   Class SettingsDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		
      }
	  public function saveCollege($data){
		  $this->db->insert('tbl_college', $data);
		  return ($this->db->affected_rows() != 1) ? false : true;
	  }
	  public function saveProfile($data){
		  $this->db->insert('tbl_userprofile', $data);
		  return ($this->db->affected_rows() != 1) ? false : true;
	  }
	  public function updateProfile($data,$userId){
		$this->db->where('username',$userId);
	    $this->db->update('tbl_userprofile',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	  }
	  public function profileCheck($username){
		
		$query = $this->db->query('SELECT count(user_id) as usercount FROM tbl_userprofile where username="'.$username.'"');
		$row = $query->row();
		return $row->usercount;
	  }
	  
   } 
?> 
