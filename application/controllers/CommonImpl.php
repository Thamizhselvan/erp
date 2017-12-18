<?php 
   class CommonImpl extends CI_Controller {
  
      public function department() { 
		   
        $data['title'] = "Departments Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('CommonDAO');
		
		$data['deptList'] = $this->CommonDAO->getAllDepartment();
		$data['courseList'] = $this->CommonDAO->getAllCourse();
		$data['courseLst'] = $this->CommonDAO->getAllcourseWithDepartment();
		$this->load->view('department',$data);
		$this->load->view('footer');
      }
      public function course(){
        $data['title'] = "Course Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('CommonDAO');
		
		$data['deptList'] = $this->CommonDAO->getAllDepartment();
		$data['courseList'] = $this->CommonDAO->getAllCourse();
		$data['courseLst'] = $this->CommonDAO->getAllcourseWithDepartment();
		$this->load->view('course',$data);
		$this->load->view('footer');  
      }
     
	  public function courseAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->saveCourse();
		}
		else if($option=="update"){
			$this->updateCourse();
		}  
	  }
	  public function departmentAction(){
		  $option=$this->input->post('option'); 
		if($option=="add"){
			$this->saveDepartment();
		}
		else if($option=="change"){
			$this->updateDepartment();
		}
	  }
	  public function saveDepartment(){
		
		$dname=$this->input->post('dname');
		$this->load->model('CommonDAO');
	    $status=$this->CommonDAO->saveDepartment($dname);  
		if($status!=0){
		   echo "Data Saved Successfully!!!";
	    }
	    else{
		   echo "Error saving data, Contact Administrator";
	    }
	  }
	  public function updateDepartment(){
		$dcode=$this->input->post('dcode');
		$dname=$this->input->post('dname'); 
		$this->load->model('CommonDAO');
	    $status=$this->CommonDAO->updateDepartment($dcode, $dname);  
		if($status!=0){
		   echo "Data Saved Successfully!!!";
	    }
	    else{
		   echo "Error saving data, Contact Administrator";
	    }
	  }
	  public function saveCourse(){
		$dcode=$this->input->post('dcode'); 
		$cname=$this->input->post('cname'); 
		$duration=$this->input->post('duration'); 
		$sem=$this->input->post('sem'); 
		$startYear=$this->input->post('startYear'); 
		$this->load->model('CommonDAO');
	    $status=$this->CommonDAO->saveCourse($dcode, $cname, $duration, $sem, $startYear);  
		if($status!=0){
		   echo "Data Saved Successfully!!!";
	    }
	    else{
		   echo "Error saving data, Contact Administrator";
	    } 
	  }
	  public function updateCourse(){
		$dcode=$this->input->post('dcode');
		$sem=$this->input->post('sem');
		$ccode=$this->input->post('ccode');
		$cname=$this->input->post('cname'); 
		$duration=$this->input->post('duration'); 
		$startYear=$this->input->post('startYear'); 
		$this->load->model('CommonDAO');
	    $status=$this->CommonDAO->updateCourse($dcode, $ccode, $cname, $duration, $sem, $startYear);  
		if($status!=0){
		   echo "Data updated Successfully!!!";
	    }
	    else{
		   echo "Error saving data, Contact Administrator";
	    } 
	  }
	  public function employeeAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->employeeSave();
		}
		else if($option=="update"){
			$this->employeeUpdate();
		}
	  }
	  public function employeeSave(){
	       $this->load->model('CommonDAO');
	       $status=$this->CommonDAO->save();
	       if($status!=0){
		       echo "Data Saved Successfully!!!";
	       }
	       else{
		       echo "Error saving data, Contact Administrator";
	       }
	  }
	  public function employeeUpdate(){
	       $this->load->model('CommonDAO');
	       $status=$this->CommonDAO->update();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function getEmployee(){
		   
	       $empId = $this->input->post('empId');
		   log_message('info', 'ctrl class called='.$empId);
	       $this->load->model('CommonDAO');
	       $list = $this->CommonDAO->getEmployee($empId);
	       echo json_encode($list);
	  }
	  public function getCourse(){
		$ccode = $this->input->post('ccode');
	    log_message('info', 'ctrl class called='.$ccode);
	    $this->load->model('CommonDAO');
	    $list = $this->CommonDAO->getCourse($ccode);
	    echo json_encode($list);  
	  }
	  public function getCourseByDept(){
		$dcode = $this->input->post('dcode');
	    log_message('info', 'getCourseByDept called='.$dcode);
	    $this->load->model('CommonDAO');
	    $list = $this->CommonDAO->getCourseByDept($dcode);
	    echo json_encode($list);  
	  }
	  
   } 
?>
