<?php 
   Class CommonDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
		 
      }
	  public function saveDepartment($dname){
		$sql = "INSERT INTO mst_department(dname,created_by) VALUES ( ".$this->db->escape($dname).",".$this->db->escape(SYSTEM_USER).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		  
	  }
	  public function updateDepartment($dcode, $dname){
		$sql = "update mst_department set dname=".$this->db->escape($dname)."  where dcode=".$this->db->escape($dname)." ";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		  
	  }
	  public function saveCourse($dcode,$cname,$duration,$sem,$startYear){
		$sql = "INSERT INTO mst_course(dcode,cname,duration,sem,start_year,created_by) 
			VALUES ( ".$this->db->escape($dcode).",".$this->db->escape($cname).", ".$this->db->escape($duration).", ".$this->db->escape($sem).", 
			".$this->db->escape($startYear).", ".$this->db->escape(SYSTEM_USER).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		  
	  }
	  public function updateCourse($dcode,$ccode,$cname,$duration,$sem,$startYear){
		$sql = "update mst_course set cname=".$this->db->escape($cname).",duration=".$this->db->escape($duration).",
			sem=".$this->db->escape($sem).",start_year=".$this->db->escape($startYear)." where dcode=".$this->db->escape($dcode)."
			and ccode=".$this->db->escape($ccode)." ";
			
	    $this->db->query($sql);
	    return $this->db->affected_rows();		  
	  }
	  
	  public function getAllDepartment(){
		  
	    $this->db->select("dcode,dname"); 
	    $this->db->from('mst_department'); 
	    $query = $this->db->get();
	    return $query->result();
	  }
	  public function getAllCourse(){
		  
	    $this->db->select("ccode,cname"); 
	    $this->db->from('mst_course'); 
	    $query = $this->db->get();
	    return $query->result();
	  }
	  public function getCourse($ccode){
	       
	      $this->db->select("ccode,cname,duration,sem,start_year");
	      $this->db->where('ccode',$ccode);
	      $this->db->from('mst_course'); 
	      $query = $this->db->get(); 
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $course) {
				 $resultArr['cname'] = $course->cname;
				 $resultArr['duration'] = $course->duration;
				 $resultArr['sem'] = $course->sem;
				 $resultArr['startYear'] = $course->start_year;
			   }
	       }
	       return $resultArr;
		
	  }
	  public function getCourseByDepartment($dcode){
	       
	      $this->db->select("ccode,cname");
	      $this->db->where('dcode',$dcode);
	      $this->db->from('mst_course'); 
	      $query = $this->db->get(); 
	      $resultArr=array();
	      if($query->result()){
			foreach ($query->result() as $course) {
			 $resultArr[$course->ccode] = $course->cname;
			}
	       }
	       return $resultArr;
		
	  }
	  
	  public function getSemByCourse($dcode, $ccode){
		   
		$query = $this->db->query("SELECT sem FROM  mst_course WHERE dcode=".$this->db->escape($dcode)." 
				and ccode=".$this->db->escape($ccode)." ");
		
		$row = $query->row();
		return $row->sem;
	  }
	  public function getAllRoles(){
		log_message('info', 'getAllRoles called2');
		$this->db->select("role_id,role_name"); 
		$this->db->from('mst_role'); 
		$query = $this->db->get();
		return $query->result();
	  }
	  public function getAllcourseWithDepartment(){
		  
	    $this->db->select("dname,ccode,cname,duration,start_year"); 
	    $this->db->from('mst_course');
		$this->db->join('mst_department','mst_department.dcode = mst_course.dcode');
	    $query = $this->db->get();
	    return $query->result();
	  }
   } 
?> 