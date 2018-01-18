<?php
class Admission_model extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
        $this->load->database();
    }
    public function setAdmission()
	{  	  
	    $data = array(
		        'admission_mode' 	=> $this->input->post('admissionMode'),
		        'admission_no' 		=> $this->input->post('admissionNo'),
		        'course' 			=> $this->input->post('course'),
		        'department' 		=> $this->input->post('department'),
		        'admission_date' 	=> $this->currentDate(),
		        'medium' 			=> $this->input->post('courseMedium')
	    );
	    $this->db->insert('admission_details', $data);
	    $insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	public function setPersonnalDetails()
	{  
	  
	    $data = array(
	        'title' 		=> $this->input->post('title'),
	        'admission_id' 	=> $this->session->userdata('admission_id'),
	        'student_name' 	=> $this->input->post('studentname'),
	        'father_name' 	=> $this->input->post('father_name'),
	        'mother_name' 	=> $this->input->post('mother_name'),
	        'gender' 		=> $this->input->post('gender'),	        
	        'dob' 			=> $this->input->post('dob'),
	        'age' 			=> $this->input->post('age'),
	        'mother_tongue' => $this->input->post('mother_tongue'),
	        'nationality' 	=> $this->input->post('nationality'),
	        'religion' 		=> $this->input->post('religion'),
	        'category' 		=> $this->input->post('category'),
	        'caste' 		=> $this->input->post('caste'),
	        'created_at'    	=> $this->currentDate(),
	        'updated_at'    	=> $this->currentDate(),
	    );

	    $this->db->insert('std_details', $data);
	    $insert_id = $this->db->insert_id();
	    if($insert_id){
	    	$this->updateStatus('personal_status');
	    }
	    //$this->session->unset_userdata('admission_id');
   		return  $insert_id;

	}
	public function setAddressDetails()
	{  
	  
	    $data['temparory'] = array(
	    	'std_id'			=> $this->session->userdata('std_id'),
	        'address_type' 		=> 'temparory',	        
	        'address_line1' 	=> $this->input->post('tmp_address_line1'),
	        'address_line2' 	=> $this->input->post('tmp_address_line2'),
	        'city' 				=> $this->input->post('tmp_city'),
	        'state' 			=> $this->input->post('tmp_state'),
	        'zipcode' 			=> $this->input->post('tmp_zipcode'),
	        'mobile_no' 		=> $this->input->post('tmp_mobile_no'),	        
	        'mobile_no1' 		=> $this->input->post('tmp_mobile_no1'),
	        'email' 			=> $this->input->post('tmp_email'),	
	        'created_at'    	=> $this->currentDate(),
	        'updated_at'    	=> $this->currentDate(),        
	    );

	    $data['permanent'] = array(
	    	'std_id'			=> $this->session->userdata('std_id'),
	        'address_type' 		=> 'permanent',
	        'address_line1' 	=> $this->input->post('pmt_address_line1'),
	        'address_line2' 	=> $this->input->post('pmt_address_line2'),
	        'city' 				=> $this->input->post('pmt_city'),
	        'state' 			=> $this->input->post('pmt_state'),
	        'zipcode' 			=> $this->input->post('pmt_zipcode'),
	        'mobile_no' 		=> $this->input->post('pmt_mobile_no'),	        
	        'mobile_no1' 		=> $this->input->post('pmt_mobile_no1'),
	        'email' 			=> $this->input->post('pmt_email'),	        
	        'created_at'    	=> $this->currentDate(),
	        'updated_at'    	=> $this->currentDate(),
	    );
	    foreach($data as $address){
	    	
	    	 $this->db->insert('std_address_details', $address);	
	    } 

    	$this->updateStatus('address_status');
	    
	    return true;	    

	}
	public function setOtherDetails()
	{  	
	    $data = array(	        
	        'std_id'					=> $this->session->userdata('std_id'),
	        'certificate_enclosed' 		=> $this->input->post('certificate'),
	        'transfort' 				=> $this->input->post('transfort'),
	        'hostel' 					=> $this->input->post('hostel'),
	        'physically_challenged' 	=> $this->input->post('physically_challenged'),        
	        'educational_gap' 			=> $this->input->post('educational_gap'),	        
	        'created_at'    			=> $this->currentDate(),
	        'updated_at'    			=> $this->currentDate(),
	    );

	    $this->db->insert('std_other_details', $data);
	    $insert_id = $this->db->insert_id();
	    if($insert_id){
	    	$this->updateStatus('other_status');
	    }
		$this->session->unset_userdata('std_id');   	
		return  $insert_id;

	}
	public function setGuardianDetails()
	{  	
	    $data = array(	        
	        'std_id'				=> $this->session->userdata('std_id'),
	        'guardian_name' 		=> $this->input->post('guardian_name'),
	        'qualification' 		=> $this->input->post('qualification'),
	        'occupation' 			=> $this->input->post('occupation'),
	        'income' 				=> $this->input->post('income'),	        
	        'emg_contact_person' 	=> $this->input->post('contact_person'),	        
	        'emg_contact_no' 		=> $this->input->post('contact_no'),	        
	        'blood_group' 			=> $this->input->post('blood_group'),	        
	        'aadhar_no' 			=> $this->input->post('aadhar_no'),	
	        'created_at'    		=> $this->currentDate(),
	        'updated_at'    		=> $this->currentDate(),        
	    );

	    $this->db->insert('std_guardian_details', $data);
	    $insert_id = $this->db->insert_id();
	    if($insert_id){
	    	$this->updateStatus('gudardian_status');
	    }		   	
		return  $insert_id;

	}
	public function setEducationDetails()
	{  	
	    $data = array(	        
	        'std_id'				=> $this->session->userdata('std_id'),
	        'insititute_name' 		=> $this->input->post('insititute_name'),
	        'board_university' 		=> $this->input->post('board_university'),
	        'passoutyear' 			=> $this->input->post('passoutyear'),
	        'max_mark' 				=> $this->input->post('max_mark'),	        
	        'mark_scored' 			=> $this->input->post('mark_scored'),	        
	        'Remarks' 				=> $this->input->post('Remarks'),	
	        'created_at'    		=> $this->currentDate(),
	        'updated_at'    		=> $this->currentDate(),	              
	    );

	    $this->db->insert('std_education_details', $data);
	    $insert_id = $this->db->insert_id();
	    if($insert_id){
	    	$this->updateStatus('education_status');
	    }
	    		   	
		return  $insert_id;

	}
	public function currentDate(){
		return date('Y-m-d H:i:s');
	}
	public function getAdmissionList(){
		$this->db->select("admission_id,admission_no,course,department,status"); 
	    $this->db->from('admission_details'); 
	    $query = $this->db->get();
	    return $query->result();
	}
	public function getAdmissionById($id){

		$this->session->set_userdata('admission_id', $id);
		$_admissionDetails = array();
		$_admissionTable = array('admission_details','std_details','std_address_details','std_education_details','std_guardian_details','std_other_details' );
		foreach($_admissionTable as $tableName){
			$this->db->select("*"); 
		    $this->db->from($tableName); 
		    $this->db->where('admission_id', $id);
		    $query = $this->db->get();
		    $result = $query->result_array();
		    if(!empty($result)){
		    	$_admissionDetails[$tableName] = $result[0];	
		    }
		    else{
		    	$_admissionDetails[$tableName] = $result;
		    }
		    
		}

		return $_admissionDetails;
	}
	private function updateStatus($field){
		$_admissionId = '';

		if($this->session->has_userdata('admission_id')){
			$_admissionId = $this->session->userdata('admission_id');	
		}		
		$this->db->set($field,'1');
		$this->db->where('admission_id', $_admissionId);
		$this->db->update('admission_details'); 
	}
}