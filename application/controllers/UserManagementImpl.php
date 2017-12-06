<?php 
   class UserManagementImpl extends CI_Controller {
  
      public function index() { 
          
        $data['title'] = "College Profile";
		$this->load->helper('url');
		$this->load->view('header',$data);
		
		$this->load->view('dashboard');
		log_message('debug', 'Employee Controller');
		$this->load->model('EmployeeDAO');
		$data['empList'] = $this->EmployeeDAO->getAllEmployeeIds();
		$this->load->model('CommonDAO');
		$data['roleList'] = $this->CommonDAO->getAllRoles();
		$this->load->view('User',$data);
		$this->load->view('footer');
      }
	  
	  public function userAction(){
		$option=$this->input->post('option');
		if($option=="save"){
			$this->saveUser();
		}
		else if($option=="update"){
			$this->updateUser();
		}
	  }
	  public function saveUser(){
		$data = array(
		'user_id' => $this->input->post('empId'),
		'role_id' => $this->input->post('roleId'),
		'menu_ids' => $this->input->post('menuList')
		);
	   $this->load->model('UserManagementDAO');
	   $status=$this->UserManagementDAO->saveUser($data);
	   if($status){
		   echo "Data Saved Successfully!!!";
	   }
	   else{
		   echo "Error saving data, Contact Administrator";
	   }
	  }
	  public function updateUser(){
	   $this->load->model('UserManagementDAO');
	   $status=$this->UserManagementDAO->update();
	   if($status!=0){
		   echo "Data updated Successfully!!!";
	   }
	   else{
		   echo "Error updating data, Contact Administrator";
	   }
	  }
	  public function checkUser(){
	   $empId = $this->input->post('empId');
	   $this->load->model('UserManagementDAO');
	   $status=$this->UserManagementDAO->checkUser($empId);
	   if($status){
		   echo "User exist";
		   $this->load->model('UserManagementDAO');
		   $menuList=$this->UserManagementDAO->getUser($empId);
		   echo json_encode($menuList);
	   }
	   else{
		   echo "No Records";
	   }
	  }
   } 
?>