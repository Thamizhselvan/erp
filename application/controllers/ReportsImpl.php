<?php 
   class ReportsImpl extends CI_Controller {
  
      public function index() { 
        $data['title'] = "Fees Reciept";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$option=$this->input->post('option');
		log_message('debug', '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>: '.$option);
		$admissionNo="2017101";
		$this->load->model('PaymentDAO');
		$data['stuList'] = $this->PaymentDAO->getAllStudentByAdmissionNo();
		$this->load->view('paymentReciept',$data);
		$this->load->view('footer');
      }
	  
	  
	  
   } 
?>