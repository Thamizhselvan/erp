<?php 
   class EmployeeImpl extends CI_Controller {
  
      public function index() { 
        
        $data['title'] = "Employee Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		 
		$this->load->model('EmployeeDAO');
		$data['empList'] = $this->EmployeeDAO->getAllEmployeeIds();
		$this->load->model('CommonDAO');
		$data['roleList'] = $this->CommonDAO->getAllRoles();
		$this->load->view('employee',$data);
		$this->load->view('footer');
		 
      }
	  public function empList(){
		 $this->load->model('EmployeeDAO');
		 $data['empLst'] = $this->EmployeeDAO->getAllEmployees();
		$this->load->view('employeelist',$data);  
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
	       $this->load->model('EmployeeDAO');
	       $status=$this->EmployeeDAO->save();
	       if($status!=0){
		       echo "Data Saved Successfully!!!";
	       }
	       else{
		       echo "Error saving data, Contact Administrator";
	       }
	  }
	  public function employeeUpdate(){
	       $this->load->model('EmployeeDAO');
	       $status=$this->EmployeeDAO->update();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function employeeDelete(){
		   $empId=$this->input->post('empId'); 
	       $this->load->model('EmployeeDAO');
	       $status=$this->EmployeeDAO->employeeDelete($empId);
	       if($status!=0){
		       echo "Records delete Successfully!!!";
	       }
	       else{
		       echo "Error deleting data, Contact Administrator";
	       }
	  }
	  public function getEmployee(){
		   //echo $this->generateIds->generateEmployeeId();
	       $empId = $this->input->post('empId');
		   log_message('info', 'ctrl class called='.$empId);
	       $this->load->model('EmployeeDAO');
	       $list = $this->EmployeeDAO->getEmployee($empId);
	       echo json_encode($list);
	  }	  
   } 
?>