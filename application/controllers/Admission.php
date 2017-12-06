<?php 
defined('BASEPATH') OR exit('Not allowed');

class Admission extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('admission_model');
    	$this->load->library('session');
        $this->load->helper('admission');
	}
	public function index(){
	    $data['title'] = "Admission Details";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		 
		$data['course'] 		= getCourseDetails(1);
		$data['admission_mode'] = getAdmissionMode();
		$data['department']	 	= getDepartment();
		$data['courseMedium'] 	= getCourseMedium();
		$data['title'] 			= getTitle();
		$data['gender'] 		= getGender();
		$data['mother_tongue'] 	= getMotherTongue();
		$data['nationality'] 	= getNationality();
		$data['religion'] 		= getReligion();
		$data['category'] 		= getCategory();
		$data['caste'] 			= getCaste();
		$data['passoutyear']	= getPassoutYear();
		$data['options']	= getOptions();
		
		$this->load->view('admission/new',$data);
		$this->load->view('footer');
	}
	public function create(){			    		
	    	
	    $this->adminDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	
	    	try{
	    		if($insertID = $this->admission_model->setAdmission()){
	    			$this->session->set_userdata('admission_id', $insertID);
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully",'admissionId' => $this->session->userdata('admission_id')));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
	    	}
	    }
	}

	public function adminDetailsFormValidate(){	

	    $this->form_validation->set_rules('admissionMode', 'Admission Mode', 'required');
	    $this->form_validation->set_rules('admissionNo', 'Admission No', 'required|alpha_numeric|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('course', 'Course', 'required');		    
	    $this->form_validation->set_rules('department', 'Department', 'required');		    
	    $this->form_validation->set_rules('courseMedium', 'Course Medium', 'required');	    
	}

	public function personalcreate(){
		$this->personalDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	
	    	try{
	    		if($insertID =$this->admission_model->setPersonnalDetails()){
	    			$this->session->set_userdata('std_id', $insertID);
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"error","message"=>$ex->getMessage()));
	    	}
	    }
	}	
	public function personalDetailsFormValidate(){	

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('studentname', 'Studentname', 'required');
	    $this->form_validation->set_rules('father_name', 'Father Name', 'required');
	    $this->form_validation->set_rules('mother_name', 'Mother Name', 'required');
	    $this->form_validation->set_rules('gender', 'Genter', 'required');
	    $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
	    $this->form_validation->set_rules('age', 'Age', 'required');
	    $this->form_validation->set_rules('mother_tongue', 'Mother Tongue', 'required');
	    $this->form_validation->set_rules('nationality', 'Nationality', 'required');
	    $this->form_validation->set_rules('religion', 'Religion', 'required');
	    $this->form_validation->set_rules('category', 'Category', 'required');	    
	    $this->form_validation->set_rules('caste', 'Caste', 'required');		    	    
	}
	public function addresscreate(){
		$this->addressDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	

	    	try{
	    		if($this->admission_model->setAddressDetails()){
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
	    	}
	    }
	}
	public function addressDetailsFormValidate(){	

	    $this->form_validation->set_rules('tmp_address_line1', 'Address1', 'required');
	    $this->form_validation->set_rules('tmp_address_line2', 'Address2', 'required');
	    $this->form_validation->set_rules('tmp_city', 'City', 'required');
	    $this->form_validation->set_rules('tmp_state', 'State', 'required');
	    $this->form_validation->set_rules('tmp_zipcode', 'Zipcode', 'required');
	    $this->form_validation->set_rules('tmp_mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('tmp_mobile_no1', 'Alternate Mobile No','regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('tmp_email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('pmt_address_line1', 'Address1', 'required');
	    $this->form_validation->set_rules('pmt_address_line2', 'Address2', 'required');
	    $this->form_validation->set_rules('pmt_city', 'City', 'required');
	    $this->form_validation->set_rules('pmt_state', 'State', 'required');
	    $this->form_validation->set_rules('pmt_zipcode', 'Zipcode', 'required');
	    $this->form_validation->set_rules('pmt_mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('pmt_mobile_no1', 'Alternate Mobile No', 'regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('pmt_email', 'Email', 'required|valid_email');	
	}
	public function guardianscreate(){
		$this->guardiansDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	
	    	
	    	try{
	    		if($this->admission_model->setGuardianDetails()){
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
	    	}
	    }
	}
	public function educationcreate(){
		$this->EducationDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	
	    	
	    	try{
	    		if($this->admission_model->setEducationDetails()){
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
	    	}
	    }
	}
	public function EducationDetailsFormValidate(){	

	    $this->form_validation->set_rules('insititute_name', 'Insititute Name', 'required'); 	
	    $this->form_validation->set_rules('board_university', 'Board University', 'required');
	    $this->form_validation->set_rules('passoutyear', 'Passout Year', 'required|regex_match[/^[0-9]{4}$/]');
	    $this->form_validation->set_rules('max_mark', 'Max Mark', 'required|regex_match[/^[0-9]{3}$/]');
	    $this->form_validation->set_rules('mark_scored', 'Mark Scored', 'required|regex_match[/^[0-9]{3}$/]');
	    
	    
	    
	}
	public function guardiansDetailsFormValidate(){	

	    $this->form_validation->set_rules('guardian_name', 'Guardian Name', 'required');
	    $this->form_validation->set_rules('qualification', 'Qualification', 'required');
	    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
	    $this->form_validation->set_rules('income', 'Income', 'required|regex_match[/^[0-9]{4}$/]');
	    $this->form_validation->set_rules('contact_person', 'Contact Person', 'required');
	    $this->form_validation->set_rules('contact_no', 'Contact No', 'required|regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
	    $this->form_validation->set_rules('aadhar_no', 'Aadhar No', 'required');
	    
	}
	public function otherscreate(){
		$this->otherDetailsFormValidate();	
	    if ($this->form_validation->run() === FALSE)		    	
	    {
	    	echo json_encode(array("status"=>"error","message"=>"Validation Error"));
	    }
	    else
	    {	
	    	
	    	try{
	    		if($this->admission_model->setOtherDetails()){
		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
		    	}
	    	}
	    	catch(Exception $ex){
    			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
	    	}
	    }
	}
	public function otherDetailsFormValidate(){	

	    $this->form_validation->set_rules('certificate', 'Certificate', 'required');
	    $this->form_validation->set_rules('transfort', 'Transfort', 'required');
	    $this->form_validation->set_rules('hostel', 'Tostel', 'required');
	    $this->form_validation->set_rules('physically_challenged', 'Physically Challenged', 'required');
	    $this->form_validation->set_rules('educational_gap', 'Educational Gap', 'required');
	    
	}
}
