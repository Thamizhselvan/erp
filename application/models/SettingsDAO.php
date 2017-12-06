<?php 
   Class SettingsDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		
      }
	  public function saveCollege($data){
		  $this->db->insert('tbl_college', $data);
		  return ($this->db->affected_rows() != 1) ? false : true;
	  }
   } 
?> 
