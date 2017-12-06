<?php 
   Class SalarySlipDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		 $this->load->database();
		 $this->load->helper('url');
		 
      }
	  public function getWorkingDays($year, $month, $ignore) {
		$count = 0;
		/*$counter = mktime(0, 0, 0, $month, 1, $year);
		while (date("n", $counter) == $month) {
			if (in_array(date("w", $counter), $ignore) == false) {
				$count++;
			}
			$counter = strtotime("+1 day", $counter);
		}*/
		return 30;
	  }
	  function getAllowance($dcode, $role, $academicYear){
		$query = $this->db->query("SELECT allowance_type, amount FROM tbl_allowance where academic_year=".$this->db->escape($academicYear)."
			and dcode=".$this->db->escape($dcode)." and role_id=".$this->db->escape($role)." ");
			
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$allowance_type = $row['allowance_type'];
			$amount = $row['amount'];
			$resultArr[$allowance_type] = $amount;
		}
		
		return $resultArr;		
	  }
	  function getDeduction($dcode, $role, $academicYear){
		 $query = $this->db->query("SELECT deduction_type, amount FROM tbl_deduction where academic_year=".$this->db->escape($academicYear)."
			and dcode=".$this->db->escape($dcode)." and role_id=".$this->db->escape($role)." ");
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$deduction_type = $row['deduction_type'];
			$amount = $row['amount'];
			$resultArr[$deduction_type] = $amount;
		}
		return $resultArr;  
	  }
	  function getWorkedDays($empId,$year,$month) {
		$query = $this->db->query("SELECT COUNT(sno) as countdays FROM  tbl_attendance WHERE emp_id=".$this->db->escape($empId)." 
				and MONTH(attendance_dt)=".$this->db->escape($month)." and YEAR(attendance_dt)=".$this->db->escape($year)." 
				and hrs_worked != 0");
		
		$row = $query->row();
		return $row->countdays;
	  }
	  function getEmployeeLeaves($empId, $academicYear) {
		$query = $this->db->query("SELECT COUNT(sno) as countdays FROM  tbl_attendance WHERE emp_id=".$this->db->escape($empId)." 
				and academic_year=".$this->db->escape($academicYear)." and in_time='Leave' ");
		
		$row = $query->row();
		return $row->countdays;
	  }
	  
   } 
?> 