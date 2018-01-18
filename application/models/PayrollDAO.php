<?php 
   Class PayrollDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		 
      }
	  public function saveAllowance(){
	    
		$dcode=$this->input->post('dcode'); 
	    $roleId=$this->input->post('roleId'); 
		$allowanceType=$this->input->post('allowanceType'); 
		$amount=$this->input->post('amount'); 
		$academicYear=$this->input->post('academicYear');  
		$USER_ID = "SYSTEM";
	    
	    $sql = "INSERT INTO tbl_allowance(dcode,role_id,allowance_type,amount,academic_year) 
				VALUES ( ".$this->db->escape($dcode).",".$this->db->escape($roleId).",".$this->db->escape($allowanceType).",
				".$this->db->escape($amount).",".$this->db->escape($academicYear).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function updateAllowance(){
	    $dcode=$this->input->post('dcode'); 
	    $roleId=$this->input->post('roleId'); 
		$allowanceType=$this->input->post('allowanceType'); 
		$amount=$this->input->post('amount'); 
		$academicYear=$this->input->post('academicYear');
	    $USER_ID = "SYSTEM";

		$sql = "update tbl_allowance set allowance_type=".$this->db->escape($allowanceType).",amount=".$this->db->escape($amount)."
				where dcode=".$this->db->escape($dcode)." and role_id=".$this->db->escape($roleId)." 
				and academic_year=".$this->db->escape($academicYear)." ";
		log_message('info', 'updateAllowance called='.$sql);
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  
	  public function saveDeduction(){
	    
		$dcode=$this->input->post('dcode'); 
	    $roleId=$this->input->post('roleId'); 
		$deductionType=$this->input->post('deductionType'); 
		$amount=$this->input->post('amount'); 
		$academicYear=$this->input->post('academicYear');  
		$USER_ID = "SYSTEM";
	    
	    $sql = "INSERT INTO tbl_deduction(dcode,role_id,deduction_type,amount,academic_year,created_by) 
				VALUES ( ".$this->db->escape($dcode).",".$this->db->escape($roleId).",".$this->db->escape($deductionType).",
				".$this->db->escape($amount).",".$this->db->escape($academicYear).",".$this->db->escape(SYSTEM_USER).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function updateDeduction(){
	    $dcode=$this->input->post('dcode'); 
	    $roleId=$this->input->post('roleId'); 
		$deductionType=$this->input->post('deductionType'); 
		$amount=$this->input->post('amount'); 
		$academicYear=$this->input->post('academicYear');
	    $USER_ID = "SYSTEM";

		$sql = "update tbl_deduction set deduction_type=".$this->db->escape($deductionType).",amount=".$this->db->escape($amount)."
				where dcode=".$this->db->escape($dcode)." and role_id=".$this->db->escape($roleId)." 
				and academic_year=".$this->db->escape($academicYear)." ";
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  public function saveLeave(){
	    
		$dcode=$this->input->post('dcode'); 
	    $role=$this->input->post('role'); 
		$deductionType=$this->input->post('leaveType'); 
		$noOfLeave=$this->input->post('noOfLeave'); 
		$academicYear=$this->input->post('academicYear');  
		$USER_ID = "SYSTEM";
	    
	    $sql = "INSERT INTO tbl_leave(dcode,role,leave_type,no_leave,academic_year) 
				VALUES ( ".$this->db->escape($dcode).",".$this->db->escape($role).",".$this->db->escape($deductionType).",
				".$this->db->escape($noOfLeave).",".$this->db->escape($academicYear).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function updateLeave(){
	    $dcode=$this->input->post('dcode'); 
	    $role=$this->input->post('role'); 
		$deductionType=$this->input->post('leaveType'); 
		$noOfLeave=$this->input->post('noOfLeave'); 
		$academicYear=$this->input->post('academicYear');
	    $USER_ID = "SYSTEM";

		$sql = "update tbl_leave set leave_type=".$this->db->escape($dgetAllAllowanceeductionType).",no_leave=".$this->db->escape($noOfLeave)."
				where dcode=".$this->db->escape($dcode)." and role=".$this->db->escape($role)." 
				and academic_year=".$this->db->escape($academicYear)." ";
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  public function getAllAllowance($dcode,$roleId,$academicYear){
	       
	      $this->db->select("allowance_code,allowance_type");
	      $this->db->where('dcode',$dcode);
		  $this->db->where('role_id',$roleId);
		  $this->db->where('academic_year',$academicYear);
	      $this->db->from('tbl_allowance'); 
	      $query = $this->db->get(); 
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $list) {
			 $resultArr[$list->allowance_code] = $list->allowance_type;
			}
	       }
	       return $resultArr;
		
	  }
	  public function getAllowance($dcode,$roleId,$academicYear,$allowanceCode){
	       
	      $this->db->select("allowance_type,amount");
	      $this->db->where('dcode',$dcode);
		  $this->db->where('role_id',$roleId);
		  $this->db->where('allowance_code',$allowanceCode);
		  $this->db->where('academic_year',$academicYear);
	      $this->db->from('tbl_allowance'); 
	      $query = $this->db->get();
		  //return $query->result();
		  
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $allowance) {
				 $resultArr['allowanceType'] = $allowance->allowance_type;
				 $resultArr['amount'] = $allowance->amount;
			   }
	       }
	       return $resultArr;
	  }
	  public function getAllDeduction($dcode,$roleId,$academicYear){
	       
	      $this->db->select("deduction_code,deduction_type");
	      $this->db->where('dcode',$dcode);
		  $this->db->where('role_id',$roleId);
		  $this->db->where('academic_year',$academicYear);
	      $this->db->from('tbl_deduction'); 
	      $query = $this->db->get(); 
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $list) {
			 $resultArr[$list->deduction_code] = $list->deduction_type;
			}
	       }
	       return $resultArr;
		
	  }
	  
	  public function getDeduction($dcode,$roleId,$academicYear,$deductionCode){
	       
	      $this->db->select("deduction_type,amount");
	      $this->db->where('dcode',$dcode);
		  $this->db->where('role_id',$roleId);
		  $this->db->where('deduction_code',$deductionCode);
		  $this->db->where('academic_year',$academicYear);
	      $this->db->from('tbl_deduction'); 
	      $query = $this->db->get();
		  //return $query->result();
		  
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $allowance) {
				 $resultArr['deductionType'] = $allowance->deduction_type;
				 $resultArr['amount'] = $allowance->amount;
			   }
	       }
	       return $resultArr;
	  }
   } 
?> 