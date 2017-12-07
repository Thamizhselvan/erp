<?php 
   class PaymentImpl extends CI_Controller {
  
      public function index() { 
        
        $data['title'] = "Fees Payment";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('PaymentDAO');
		$data['stuList'] = $this->PaymentDAO->getAllStudentByAdmissionNo();
		$this->load->view('feesPayment',$data);
		$this->load->view('footer');
		 
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
		  $this->load->model('PaymentDAO');
	      $status=$this->PaymentDAO->savePayment();
	      if($status!=0){
		      echo "Data Saved Successfully!!!";
	      }
	      else{
		      echo "Error saving data, Contact Administrator";
	      }
	  }
	  public function updatePayment(){
		log_message('info', 'updatefees impl called');
	       $this->load->model('PaymentDAO');
	       $status=$this->PaymentDAO->updatePayment();
	       if($status!=0){
		       echo "Data updated Successfully!!!";
	       }
	       else{
		       echo "Error updating data, Contact Administrator";
	       }
	  }
	  public function getFeesDetailsBySemester(){

		   $dcode=$this->input->post('dcode'); 
		   $ccode=$this->input->post('ccode'); 
		   $sem=$this->input->post('sem'); 
		   $academicYear=$this->input->post('academicYear');
		   log_message('info', 'getFeesDetailsBySemester ctrl class called='.$dcode);
	       $this->load->model('PaymentDAO');
	       $list = $this->PaymentDAO->getFeesDetailsBySemester($dcode,$ccode,$sem,$academicYear);
	       echo json_encode($list);
	  }
		public function getStudentDetailsByAdmissionNo(){
	       $admissionNo = $this->input->post('admissionNo');
		   log_message('info', 'ctrl class called='.$admissionNo);
	       $this->load->model('PaymentDAO');
	       $list = $this->PaymentDAO->getStudentDetailsByAdmissionNo($admissionNo);
	       echo json_encode($list);
	  }
	  public function getFeesPaidDetailsByStudent(){
		   $admissionNo=$this->input->post('admissionNo');
		   $dcode=$this->input->post('dcode'); 
		   $ccode=$this->input->post('ccode'); 
		   $sem=$this->input->post('sem'); 
		   $academicYear=$this->input->post('academicYear');
		   log_message('info', 'getFeesPaidDetailsByStudent ctrl class called='.$dcode);
	       $this->load->model('PaymentDAO');
	       $list = $this->PaymentDAO->getFeesPaidDetailsByStudent($admissionNo,$dcode,$ccode,$sem,$academicYear);
	       echo json_encode($list);
	  }
	  
   } 
?>