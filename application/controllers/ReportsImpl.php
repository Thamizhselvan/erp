<?php 
   class ReportsImpl extends CI_Controller {
  
      public function index() { 
        /*$data['title'] = "Fees Reciept";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$option=$this->input->post('option');
		$paymentId=$this->input->get('id');
		log_message('debug', 'paymentId No>>>>>>>>>>'.$paymentId);
		$this->load->model('PaymentDAO');
		$data['payment'] = $this->PaymentDAO->getFeesPaidDetails($paymentId);
		$data['particulars'] = $this->PaymentDAO->getFeesParticulars($paymentId);
		$this->load->view('footer');
		*/
		
		//$this->load->view('generate_pdf_invoice');
		$this->load->library('pdf');

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('My Title');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage();

$pdf->Write(5, 'Some sample text');
$pdf->Output('My-File-Name.pdf', 'I');
      }
	  
	  
	  
   } 
?>