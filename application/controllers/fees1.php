<?php 
   class FeesImpl extends CI_Controller {
        public function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url','file','html'));
		$this->load->library('form_validation');
		
	}
      public function index($id='') { 
          
		 //log_message('debug', 'Employee Controller');
		 $data =array();
		 $this->load->database();
		 //$this->load->helper('url');
		 
		 $this->load->model('FeesDAO');
		 //$data['feesList'] = $this->FeesDAO->getAllFeesDetails();
		 //$this->load->view('feesMaster',$data);
		 
		 //$this->load->model('CommonDAO');
		 //$data['deptList'] = $this->CommonDAO->getAllDepartment();
		 if($id){
		     $feesDetails = $this->FeesDAO->getFessById($id);
		     if(!empty($feesDetails)){
		         $data['fees']['id'] = $feesDetails[0]['fees_id'];
		         $data['fees']['course_code'] = $feesDetails[0]['course_code'];
		         $data['fees']['department_code'] = $feesDetails[0]['department_code'];
		         $data['fees']['semester_no'] = $feesDetails[0]['semester_no'];
		         $data['fees']['academic_year'] = $feesDetails[0]['academic_year'];
		         foreach($this->FeesDAO->getFessById($id) as $key => $value){
		             $feesValue = array();
		             $feesValue['particulars'] = $value['particulars'];
		             $feesValue['amount'] = $value['amount'];
		             $data['fees_details'][] = $feesValue;
		         }
		     }
		 }
	    
		 $this->load->view('addFees',$data);
		 
		 //$this->load->model('FeesDAO');
		 //$data['stuList'] = $this->FeesDAO->getAllStudentByAdmissionNo();
		 //$this->load->view('payFees',$data);
      }
      public function edit(){
          redirect('/fees/index');
      }
	  /*public function feesAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->saveFees();
		}
		else if($option=="update"){
			$this->updateFees();
		}
	  }*/
	   public function addFeesAction(){
	        echo "fadsF";die();   	
	       	$this->load->model('FeesDAO');  
	       	$fees = array();
	        //fees
	        
    	    $fees['department_code']=$this->input->post('dcode'); 
    		$fees['course_code']=$this->input->post('ccode'); 
    		$fees['semester_no']=$this->input->post('sem'); 
    		$fees['academic_year']=$this->input->post('academicYear'); 
    		$fees['created_at']=$this->currentDate();
    		$fees['updated_at']=$this->currentDate();
    		//fees particulars
    		
    		$sno    = $this->input->post('sno');
    	    $particulars = $this->input->post('particulars');
    		$amount = $this->input->post('amount');
    	
    		if($feesId = $this->FeesDAO->saveFees($fees)){
    		    $feesData = array();
        		foreach($sno as $key=>$val)
        		{
        		  $feesData[] = array(
        		  		'fees_id'			=>  $feesId,
        		  		'particulars'	    =>$particulars[$key],
        		  		'amount'	        =>$amount[$key],
        		  		'created_at'    	=> $this->currentDate(),
                		'updated_at'    	=> $this->currentDate(),
        	  		);
        		}
    		    try{
    	    		if($this->FeesDAO->saveFeesParticulars($feesData)){
    		    		echo json_encode(array("status"=>"success","message"=>"Your detail save successfully"));	
    		    	}
    	    	}
    	    	catch(Exception $ex){
        			echo json_encode(array("status"=>"success","message"=>$ex->getMessage()));
    	    	}
    		}
	    	
	  }
	  
	  public function paymentAction(){
		$option=$this->input->post('option'); 
		if($option=="save"){
			$this->savePayment();
		}
		else if($option=="update"){
			$this->updatePayment();
		}
	  }
	  public function savePayment(){
		  $this->load->model('FeesDAO');
	      $status=$this->FeesDAO->savePayment();
	      if($status!=0){
		      echo "Data Saved Successfully!!!";
	      }
	      else{
		      echo "Error saving data, Contact Administrator";
	      }
	  }
	  public function updatePayment(){
		log_message('info', 'updatefees impl called');
	       $this->load->model('FeesDAO');
	       $status=$this->FeesDAO->updatePayment();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function saveFees(){
	      $this->load->model('FeesDAO');
	      $status=$this->FeesDAO->feesSave();
	      if($status!=0){
		      echo "Data Saved Successfully!!!";
	      }
	      else{
		      echo "Error saving data, Contact Administrator";
	      }
	  }
	  public function updateFees(){
		  log_message('info', 'updatefees impl called');
	       $this->load->model('FeesDAO');
	       $status=$this->FeesDAO->feesUpdate();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function getFeesDetails(){
	       $feesCode = $this->input->post('feesCode');
		   log_message('info', 'ctrl class called='.$feesCode);
	       $this->load->model('FeesDAO');
	       $list = $this->FeesDAO->getFeesDetails($feesCode);
	       echo json_encode($list);
	  }
	  public function getCourseByDepartment(){
	       $dcode = $this->input->post('dcode');
	       $this->load->model('CommonDAO');
	       $list = $this->CommonDAO->getCourseByDepartment($dcode);
	       echo json_encode($list);
	  }
	  public function getSemByCourse(){
		$dcode = $this->input->post('dcode');
		$ccode = $this->input->post('ccode');
	    $this->load->model('CommonDAO');
	    $noOfSemester = $this->CommonDAO->getSemByCourse($dcode, $ccode);
	    echo $noOfSemester;  
	  }
// 	  public function addFeesAction(){
// 		   $this->load->model('FeesDAO');
// 	       $status=$this->FeesDAO->addFeesAction();
// 	       if($status!=0){
// 		       echo "Data Saved Successfully!!!";
// 	       }
// 	       else{
// 		       echo "Error saving data, Contact Administrator";
// 	       }
// 	  }
	  public function getStudentDetailsByAdmissionNo(){
	       $admissionNo = $this->input->post('admissionNo');
		   log_message('info', 'ctrl class called='.$admissionNo);
	       $this->load->model('FeesDAO');
	       $list = $this->FeesDAO->getStudentDetailsByAdmissionNo($admissionNo);
	       echo json_encode($list);
	  }
	  public function getFeesDetailsBySemester(){

		   $dcode=$this->input->post('dcode'); 
		   $ccode=$this->input->post('ccode'); 
		   $sem=$this->input->post('sem'); 
		   $academicYear=$this->input->post('academicYear');
		   log_message('info', 'getFeesDetailsBySemester ctrl class called='.$dcode);
	       $this->load->model('FeesDAO');
	       $list = $this->FeesDAO->getFeesDetailsBySemester($dcode,$ccode,$sem,$academicYear);
	       echo json_encode($list);
	  }
	  public function getFeesPaidDetailsByStudent(){
		   $admissionNo=$this->input->post('admissionNo');
		   $dcode=$this->input->post('dcode'); 
		   $ccode=$this->input->post('ccode'); 
		   $sem=$this->input->post('sem'); 
		   $academicYear=$this->input->post('academicYear');
		   log_message('info', 'getFeesPaidDetailsByStudent ctrl class called='.$dcode);
	       $this->load->model('FeesDAO');
	       $list = $this->FeesDAO->getFeesPaidDetailsByStudent($admissionNo,$dcode,$ccode,$sem,$academicYear);
	       echo json_encode($list);
	  }
	  public function currentDate(){
    		return date('Y-m-d H:i:s');
    	}
   } 
   
?>