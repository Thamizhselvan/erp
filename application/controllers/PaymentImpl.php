<?php 
   class PaymentImpl extends CI_Controller {
  
      public function index() { 
        
        $data['title'] = "Fees Payment";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->model('FeesDAO');
		$data['stuList'] = $this->FeesDAO->getAllStudentByAdmissionNo();
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
	  	  
   } 
?>