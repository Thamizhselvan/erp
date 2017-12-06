<?php
   Class EmployeeDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		 //$this->load->database();
		 //$this->load->helper('url');
		 
      }
	  public function Save(){
	    $empId=101;
		$empName=$this->input->post('empName'); 
	    $dob = date("d-m-Y", strtotime($this->input->post('dob')));
		$gender=$this->input->post('gender'); 
		$qualification=$this->input->post('qualification'); 
		$exp=$this->input->post('exp'); 
		$roleId=$this->input->post('roleId'); 
		$doj = date("d-m-Y", strtotime($this->input->post('doj')));
		$addr1=$this->input->post('addr1'); 
		$addr2=$this->input->post('addr2'); 
		$city=$this->input->post('city'); 
		$state=$this->input->post('state'); 
	    $mobile=$this->input->post('mobile'); 
		$USER_ID = SYSTEM_USER;
	    
	    $sql = "INSERT INTO tbl_employee(emp_id,emp_name,dob,gender,qualification,exp,role_id,doj,address_line1,address_line2,city,state,mobile,created_by) 
				VALUES ( ".$this->db->escape($empId).",".$this->db->escape($empName).",".$this->db->escape($dob).",
				".$this->db->escape($gender).",".$this->db->escape($qualification).",".$this->db->escape($exp).",".$this->db->escape($roleId).",
				".$this->db->escape($doj).",".$this->db->escape($addr1).",".$this->db->escape($addr2).",".$this->db->escape($city).",
				".$this->db->escape($state).",".$this->db->escape($mobile).",".$this->db->escape($USER_ID).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function update(){
	    $empId=$this->input->post('empId');
		$empName=$this->input->post('empName'); 
	    $dob = date("d-m-Y", strtotime($this->input->post('dob')));
		$gender=$this->input->post('gender'); 
		$qualification=$this->input->post('qualification'); 
		$exp=$this->input->post('exp'); 
		$roleId=$this->input->post('roleId'); 
		$doj = date("d-m-Y", strtotime($this->input->post('doj')));
		$addr1=$this->input->post('addr1'); 
		$addr2=$this->input->post('addr2'); 
		$city=$this->input->post('city'); 
		$state=$this->input->post('state'); 
	    $mobile=$this->input->post('mobile');
	    $USER_ID = SYSTEM_USER;

		$sql = "update tbl_employee set emp_name=".$this->db->escape($empName).",dob=".$this->db->escape($dob).",gender=".$this->db->escape($gender).",
				qualification=".$this->db->escape($qualification).",exp=".$this->db->escape($exp).",role_id=".$this->db->escape($roleId).",
				doj=".$this->db->escape($doj).",address_line1=".$this->db->escape($addr1).",address_line2=".$this->db->escape($addr2).",
				city=".$this->db->escape($city).",state=".$this->db->escape($state).",mobile=".$this->db->escape($mobile).",created_by=".$this->db->escape($USER_ID)."
				where emp_id=".$this->db->escape($empId)." "; 
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  public function getEmployee($empId){
	       $this->db->select("emp_name,dob,gender,qualification,exp,role_id,doj,address_line1,address_line2,city,state,mobile");
	       $this->db->where('emp_id',$empId);
	       $this->db->from('tbl_employee'); 
	       $query = $this->db->get();
	       $resultArr=array();
	       if($query->result()){
			   foreach ($query->result() as $emp) {
				 $resultArr['empName'] = $emp->emp_name;
				 $resultArr['dob'] = $emp->dob;
				 $resultArr['gender'] = $emp->gender;
				 $resultArr['qualification'] = $emp->qualification;
				 $resultArr['exp'] = $emp->exp;
				 $resultArr['roleId'] = $emp->role_id;
				 $resultArr['doj'] = $emp->doj;
				 $resultArr['addr1'] = $emp->address_line1;
				 $resultArr['addr2'] = $emp->address_line2;
				 $resultArr['city'] = $emp->city;
				 $resultArr['state'] = $emp->state;
				 $resultArr['mobile'] = $emp->mobile;
			   }
	      }
	       return $resultArr;
		
	  }
	  public function getAllEmployeeIds(){
		  
	    $this->db->select("emp_id,emp_name"); 
	    $this->db->from('tbl_employee'); 
	    $query = $this->db->get();
	    return $query->result();
	  }
	  public function getAllEmployees(){
		  
	    $this->db->select("emp_id,emp_name,dob,gender,qualification,exp,role_name,doj,address_line1,address_line2,city,state,mobile,email"); 
	    $this->db->from('tbl_employee');
		$this->db->join('mst_role','mst_role.role_id = tbl_employee.role_id');
	    $query = $this->db->get();
	    return $query->result();
	  }
	  public function employeeDelete($empId){
		$sql = "delete from tbl_employee where emp_id=".$this->db->escape($empId)."";
	    $this->db->query($sql);
	    return $this->db->affected_rows();  
	  }
   }
?> 