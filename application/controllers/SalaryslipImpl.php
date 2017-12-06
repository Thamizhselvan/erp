<?php 
   class SalaryslipImpl extends CI_Controller {
  
      public function index() { 
		 log_message('debug', 'Employee Controller');
		 /*Autoload enabled*/
		 //$this->load->database();
		 //$this->load->helper('url');
		 $this->load->model('CommonDAO');
		 $data['deptList'] = $this->CommonDAO->getAllDepartment();
		 $this->load->model('CommonDAO');
		 $data['roleList'] = $this->CommonDAO->getAllRoles();
		 $this->load->model('EmployeeDAO');
		 $data['empList'] = $this->EmployeeDAO->getAllEmployeeIds();
		 $this->load->view('salarySlip',$data);
		 
      }
	  public function generateSalaryslip(){
		log_message('info', 'Impl called **************123');
		
		$this->load->model('SalarySlipDAO');
		//$count = $this->SalarySlipDAO->generateSalaryslip();
		
	    $dcode = $this->input->post('dcode');
	    $role = $this->input->post('role');
	    $empId = $this->input->post('empId');
	    $month = $this->input->post('month');
	    $year = $this->input->post('year');
	    $academicYear = $this->input->post('academicYear');
	   
	    $noOfWorkingDays = $this->SalarySlipDAO->getWorkingDays($year,$month,array(0, 6));
	    $noOfWorkedDays = $this->SalarySlipDAO->getWorkedDays($empId,$year,$month);
	    $noOfLeavesTaken = $this->SalarySlipDAO->getEmployeeLeaves($empId,$academicYear);
	    $listAllowance = $this->SalarySlipDAO->getAllowance($dcode, $role, $academicYear);
	    $listDeduction = $this->SalarySlipDAO->getDeduction($dcode, $role, $academicYear);

		$resultArr=array();
		$resultArr['noOfWorkingDays'] = $noOfWorkingDays;
		$resultArr['noOfWorkedDays'] = $noOfWorkedDays;
		$resultArr['noOfLeavesTaken'] = $noOfLeavesTaken;
		$result['data']=$resultArr;
		
		$allowanceArr=array();
	    foreach($listAllowance as $allowance => $amount) {
			$allowanceArr[$allowance] = $amount;
	    }
		$result['allowanceList']=$allowanceArr;
		
		$deductionArr=array();
	    foreach($listDeduction as $deduction => $amount) {
			$deductionArr[$deduction] = $amount;
	    }
		$result['deductionList']=$deductionArr;
		echo json_encode($result);
	  }
	  
	  
	  	  
   } 
?>