<?php 
   class PayrollImpl extends CI_Controller {
  
      public function index() { 
		 log_message('debug', 'Employee Controller');
		 /*Autoload enabled*/
		 //$this->load->database();
		 //$this->load->helper('url');
		 $this->load->model('CommonDAO');
		 $data['deptList'] = $this->CommonDAO->getAllDepartment();
		 $this->load->model('CommonDAO');
		 $data['roleList'] = $this->CommonDAO->getAllRoles();
		 //$this->load->view('allowanceMaster',$data);
		 //$this->load->view('deductionMaster',$data);
		 $this->load->view('leaveMaster',$data);
		 
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
	  	  
   } 
?>