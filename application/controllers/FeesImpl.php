<?php 
   class FeesImpl extends CI_Controller {
        public function __construct(){		
		parent::__construct();
		$this->load->helper(array('form','url','file','html'));
		$this->load->library('form_validation');
		
	}
      public function index() {
         /*$this->load->model('FeesDAO');
		 $data['stuList'] = $this->FeesDAO->getAllStudentByAdmissionNo();
		 $this->load->view('payFees',$data);*/
		 
		 
		$data['title'] = "Fees Payment";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('FeesDAO');
		$data['stuList'] = $this->FeesDAO->getAllStudentByAdmissionNo();
		$this->load->view('feesPayment',$data);
		$this->load->view('footer');
      }
      public function edit(){
          $data_id = $this->uri->segment(3);
          echo "data_id".$data_id;die();
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
		 $this->load->view('editfees');
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
    	    $id   = $this->input->post('id');
    	    if($id==''){
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
    	    else{
    	       
    	        unset($fees['created_at']);
    	        if($this->FeesDAO->updateFees($fees,$id)){
        		    $feesData = array();
            		foreach($sno as $key=>$val)
            		{
            		  $feesData[] = array(
            		  		'fees_id'			=>  $id,
            		  		'particulars'	    => $particulars[$key],
            		  		'amount'	        => $amount[$key],
            		  		'created_at'    	=> $this->currentDate(),
                    		'updated_at'    	=> $this->currentDate(),
            	  		);
            		}
            		
        		    try{
        	    		if($this->FeesDAO->updateFeesParticulars($feesData,$id)){
        		    		echo json_encode(array("status"=>"success","message"=>"Your detail Updated successfully"));	
        		    	}
        		    	else{
        		    	    echo json_encode(array("status"=>"error","message"=>'something problem'));
        		    	}
        	    	}
        	    	catch(Exception $ex){
            			echo json_encode(array("status"=>"error","message"=>$ex->getMessage()));
        	    	}
        		} 
    	        
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
	  public function currentDate(){
    		return date('Y-m-d H:i:s');
    	}
   } 
   
?>