<?php 
   class UserProfileImpl extends CI_Controller {
  
      public function index() { 
          
        $data['title'] = "User Profile";
		$this->load->helper('url');
		$this->load->view('header',$data);
		
		$this->load->view('dashboard');
		log_message('debug', 'User Profile Controller');
		$this->load->view('userprofile',$data);
		$this->load->view('footer');
      }
	  
	  public function collegeSettings(){
		$option=$this->input->post('option');
		if($option=="save"){
			$this->collegeSettingsSave();
		}
		else if($option=="update"){
			$this->collegeSettingsUpdate();
		}
	  }
	  public function collegeSettingsSave(){
		$data = array(
		'college_name' => $this->input->post('collegeName'),
		'start_dt' => $this->input->post('startDt'),
		'end_dt' => $this->input->post('endDt'),
		'addr1' => $this->input->post('addr1'),
		'addr2' => $this->input->post('addr2'),
		'city' => $this->input->post('city'),
		'state' => $this->input->post('state'),
		'phone_no' => $this->input->post('phoneNo'),
		'mobile' => $this->input->post('mobile'),
		'email' => $this->input->post('email'),
		'website' => $this->input->post('website')
		);
	   $this->load->model('SettingsDAO');
	   $status=$this->SettingsDAO->saveCollege($data);
	   if($status){
		   echo "Data Saved Successfully!!!";
	   }
	   else{
		   echo "Error saving data, Contact Administrator";
	   }
	  }
	  public function collegeSettingsUpdate(){
	   $this->load->model('EmployeeDAO');
	   $status=$this->EmployeeDAO->update();
	   if($status!=0){
		   echo "Data updated Successfully!!!";
	   }
	   else{
		   echo "Error updating data, Contact Administrator";
	   }
	  }
	  
   } 
?>