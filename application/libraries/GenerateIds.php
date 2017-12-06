<?php
public class GenerateIds extends CI_Model{
	
	public function __construct() { 
         parent::__construct(); 
		 $this->load->database();
    }
	public function generateEmployeeId()
	{
		$date_array = getdate();
		$curr_year = $date_array['year'];
		$query = $this->db->query('SELECT max(emp_id) as id,count(emp_id) as tot_id FROM tbl_employee');
		$row = $query->row_array();
		$tot_id = $row['tot_id'];
		if($tot_id != 0)
			$id = $row['id'] + 1;
		else
			$id = "100";
		
		/*$date_array = getdate();
		$curr_year = $date_array['year'];
		$sql = "SELECT max(emp_id) as id,count(emp_id) as tot_ids FROM tbl_employee";
		$result = $conn->query($sql);
		if($row = $result -> fetch_assoc())
		{
			$tot_id = $row['tot_ids'];
			if($tot_id != 0)
				$id = $row['id'] + 1;
			else
				$id = $method."100";
		}*/
		return $id;
	}
}
?>