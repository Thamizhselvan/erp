<?php 
   class PayrollImpl extends CI_Controller {
  
      
	  public function allowance(){
		$data['title'] = "Course Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('CommonDAO');
		
		$this->load->model('CommonDAO');
		$data['deptList'] = $this->CommonDAO->getAllDepartment();
		$this->load->model('CommonDAO');
		$data['roleList'] = $this->CommonDAO->getAllRoles();
		$this->load->view('allowanceMaster',$data);
		$this->load->view('footer');  
	  }
	  public function deduction(){
		$data['title'] = "Course Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('CommonDAO');
		
		$this->load->model('CommonDAO');
		$data['deptList'] = $this->CommonDAO->getAllDepartment();
		$this->load->model('CommonDAO');
		$data['roleList'] = $this->CommonDAO->getAllRoles();
		$this->load->view('deductionMaster',$data);
		$this->load->view('footer');  
	  }
	  public function allowanceAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->allowanceSave();
		}
		else if($option=="update"){
			$this->allowanceUpdate();
		}
	  }
	  public function allowanceSave(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->saveAllowance();
	       if($status!=0){
		       echo "Data Saved Successfully!!!";
	       }
	       else{
		       echo "Error saving data, Contact Administrator";
	       }
	  }
	  public function allowanceUpdate(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->updateAllowance();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function deductionAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->deductionSave();
		}
		else if($option=="update"){
			$this->deductionUpdate();
		}
	  }
	  public function deductionSave(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->saveDeduction();
	       if($status!=0){
		       echo "Data Saved Successfully!!!";
	       }
	       else{
		       echo "Error saving data, Contact Administrator";
	       }
	  }
	  public function deductionUpdate(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->updateDeduction();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function leaveAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->saveLeave();
		}
		else if($option=="update"){
			$this->updateLeave();
		}
	  }
	  public function saveLeave(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->saveLeave();
	       if($status!=0){
		       echo "Data Saved Successfully!!!";
	       }
	       else{
		       echo "Error saving data, Contact Administrator";
	       }
	  }
	  public function updateLeave(){
	       $this->load->model('PayrollDAO');
	       $status=$this->PayrollDAO->updateLeave();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function getAllAllowance(){
	       $dcode = $this->input->post('dcode');
		   $roleId = $this->input->post('roleId');
		   $academicYear = $this->input->post('academicYear');
	       $this->load->model('PayrollDAO');
	       $list = $this->PayrollDAO->getAllAllowance($dcode,$roleId,$academicYear);
	       echo json_encode($list);
	  }
	  public function getAllowance(){
	       $dcode = $this->input->post('dcode');
		   $roleId = $this->input->post('roleId');
		   $academicYear = $this->input->post('academicYear');
		   $allowanceCode = $this->input->post('allowanceCode');
	       $this->load->model('PayrollDAO');
	       $list = $this->PayrollDAO->getAllowance($dcode,$roleId,$academicYear,$allowanceCode);
	       echo json_encode($list);
	  }
	  public function getAllDeduction(){
		$dcode = $this->input->post('dcode');
	    $roleId = $this->input->post('roleId');
	    $academicYear = $this->input->post('academicYear');
	    $this->load->model('PayrollDAO');
	    $list = $this->PayrollDAO->getAllDeduction($dcode,$roleId,$academicYear);
	    echo json_encode($list);
	  }
	  public function getDeduction(){
	       $dcode = $this->input->post('dcode');
		   $roleId = $this->input->post('roleId');
		   $academicYear = $this->input->post('academicYear');
		   $deductionCode = $this->input->post('deductionCode');
	       $this->load->model('PayrollDAO');
	       $list = $this->PayrollDAO->getDeduction($dcode,$roleId,$academicYear,$deductionCode);
	       echo json_encode($list);
	  }
   } 
?>