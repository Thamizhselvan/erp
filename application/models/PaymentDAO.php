<?php 
   Class PaymentDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
      }
	  
	  public function savePayment(){
	    $paymentId = $this->input->post('paymentId'); 
		$admissionNo=$this->input->post('admissionNo'); 
	    $dcode=$this->input->post('dcode'); 
		$ccode=$this->input->post('ccode'); 
		$sem=$this->input->post('sem'); 
		$academicYear=$this->input->post('academicYear');
		$totAmount=$this->input->post('totAmount');
		$amountPay=$this->input->post('amountPay'); 
		$balAmount=$this->input->post('balAmount'); 
		$dueDt=$this->input->post('dueDt'); 
		$USER_ID = SYSTEM_USER;
		
	    $sql = "INSERT INTO tbl_feespaid(payment_id,admission_no,dcode,ccode,sem,academic_year,tot_amount,amount_paid,bal_amount,payment_dt,due_dt,created_by) 
				VALUES ( ".$this->db->escape($paymentId).",".$this->db->escape($admissionNo).",".$this->db->escape($dcode).",".$this->db->escape($ccode).",".$this->db->escape($sem).",
				".$this->db->escape($academicYear).",".$this->db->escape($totAmount).",".$this->db->escape($amountPay).",".$this->db->escape($balAmount).",
				".$this->db->escape(date("Y/m/d")).",".$this->db->escape($dueDt).",".$this->db->escape($USER_ID).")";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function updatePayment(){
		  log_message('info', 'feesUpdateDAO called');
		$admissionNo=$this->input->post('admissionNo'); 
	    $dcode=$this->input->post('dcode'); 
		$ccode=$this->input->post('ccode'); 
		$sem=$this->input->post('sem'); 
		$academicYear=$this->input->post('academicYear');
		$totAmount=$this->input->post('totAmount');
		$amountPay=$this->input->post('amountPay'); 
		$balAmount=$this->input->post('balAmount'); 
		$dueDt=$this->input->post('dueDt'); 
		$USER_ID = SYSTEM_USER;

		$sql = "update tbl_feespaid set dcode=".$this->db->escape($dcode).",
				ccode=".$this->db->escape($ccode).",sem=".$this->db->escape($sem).",academic_year=".$this->db->escape($academicYear).",
				tot_amount=".$this->db->escape($totAmount).",amount_pay=".$this->db->escape($amountPay).",payment_dt=".$this->db->escape(date("Y/m/d")).",
				bal_amount=".$this->db->escape($balAmount).",due_dt=".$this->db->escape($dueDt)."
				where admission_no=".$this->db->escape($admissionNo)." "; 
				
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  
	  public function getAllFeesDetails(){
	      
		$this->db->select("fees_code,fees_desc,amount"); 
	    $this->db->from('mst_fees'); 
	    $query = $this->db->get();
	    return $query->result();
	  }
	  
	  public function getFeesDetails($feesCode){
	       
	       $this->db->select("fees_code,fees_desc,amount");
	       $this->db->where('fees_code',$feesCode);
	       $this->db->from('mst_fees'); 
	       $query = $this->db->get();
	       $resultArr=array();
	       if($query->result()){
			   foreach ($query->result() as $fee) {
				 $resultArr['feesDesc'] = $fee->fees_desc;
				 $resultArr['amount'] = $fee->amount;
			   }
	      }
	       return $resultArr;
		
	  }
	  public function getAllStudentByAdmissionNo(){
		log_message('info', 'getAllStudentByAdmissionNo called');
		$this->db->select("admission_no,sname");
		$this->db->from('admission'); 
		$query = $this->db->get();
		return $query->result();
	  }
	  public function getFeesPaidDetails($paymentId){
		$query = $this->db->query("SELECT sname, cname, dname, f.sem,f.academic_year,f.tot_amount, f.amount_paid, f.bal_amount, due_dt
									FROM tbl_feespaid f
									LEFT JOIN admission a ON a.admission_no = f.admission_no
									LEFT JOIN mst_department d ON d.dcode = f.dcode
									LEFT JOIN mst_course c ON c.dcode = f.dcode
									AND c.ccode = f.ccode
									WHERE payment_id =".$this->db->escape($paymentId)." ");
		log_message('info', 'getFeesPaidDetails called');
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$resultArr["dname"] = $row['dname'];
			$resultArr["cname"] = $row['cname'];
			$resultArr["sem"] 	= $row['sem'];
			$resultArr["academicYear"] = $row['academic_year'];
			$resultArr["sname"]=$row['sname'];
			$resultArr["tot_amount"]=$row['tot_amount'];
			$resultArr["amount_paid"]=$row['amount_paid'];
			$resultArr["bal_amount"]=$row['bal_amount'];
			$resultArr["due_dt"]=$row['due_dt'];
		}
		return $resultArr;  
	  }
	  public function getFeesParticulars($paymentId){
		$query = $this->db->query("select particulars,amount from tbl_fees_particulars
									where fees_code=(select fees_code from tbl_feespaid fp
									left join tbl_feesmaster fm on fm.dcode=fp.dcode and fm.ccode=fp.ccode and fm.sem=fp.sem and fm.academic_year=fp.academic_year
									where payment_id=".$this->db->escape($paymentId).")");
		log_message('info', 'getFeesParticulars called');
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$particulars = $row['particulars']; 
			$amount = $row['amount'];
			$resultArr[$particulars] = $amount;
		}
		return $resultArr;  
	  }
	  public function getStudentDetailsByAdmissionNo($admissionNo){
	    $query = $this->db->query("select a.sname,a.email,a.dcode,d.dname,a.ccode,c.cname,c.sem,a.academic_year from admission a
								left join mst_department d on d.dcode=a.dcode
								left join mst_course c on c.ccode=a.ccode and c.dcode=a.dcode
								where a.admission_no=".$this->db->escape($admissionNo)." ");
		log_message('info', 'getStudentDetailsByAdmissionNo called');
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$resultArr["dcode"] = $row['dcode'];
			$resultArr["dname"] = $row['dname'];
			$resultArr["ccode"] = $row['ccode'];
			$resultArr["cname"] = $row['cname'];
			$resultArr["sem"] 	= $row['sem'];
			$resultArr["academicYear"] = $row['academic_year'];
			$resultArr["sname"]=$row['sname'];
			$resultArr["email"]=$row['email'];
		}
		return $resultArr;
	  }
	  public function getFeesDetailsBySemester($dcode,$ccode,$sem){
		  
		if($sem == "all"){
			$sql="select af.dcode,af.ccode,af.sem,af.academic_year,p.particulars,amount 
					from tbl_feesmaster af
					left join tbl_fees_particulars p on p.fees_code=af.fees_code
					where af.dcode=".$this->db->escape($dcode)." and af.ccode=".$this->db->escape($ccode)." ";
		}else{
			$sql="select p.particulars,p.amount 
					from tbl_feesmaster af
					left join tbl_fees_particulars p on p.fees_code=af.fees_code
					where af.dcode=".$this->db->escape($dcode)." and af.ccode=".$this->db->escape($ccode)." 
					and af.sem=".$this->db->escape($sem)." ";
		}
		
		$query = $this->db->query($sql);
		log_message('debug', 'getFeesDetailsBySemester: '.$sql);
		$resultArr=array(); 
		$result = $query->result_array();
		if(count($result) == 0) {
			$resultArr["flag"] = false;
			$resultArr["errorMsg"] = "No Records found";
		}
		else{
			foreach ($result as $row)
			{
				$particulars = $row['particulars']; 
				$amount = $row['amount'];
				$resultArr[$particulars] = $amount;
			}
		}
		return $resultArr;  
	  }
	  public function getFeesPaidDetailsByStudent($admissionNo,$dcode,$ccode,$sem,$academicYear){
		$sql="select IFNULL( SUM( amount_paid ) , 0 ) as amount_pay,max(due_dt) as due_dt from tbl_feespaid
								where admission_no=".$this->db->escape($admissionNo)." and dcode=".$this->db->escape($dcode)." 
								and ccode=".$this->db->escape($ccode)." and sem=".$this->db->escape($sem)." and 
								academic_year=".$this->db->escape($academicYear)." ";
		log_message('info', 'getFeesPaidDetailsByStudent called'.$sql);
		$query = $this->db->query($sql);
		$resultArr=array();
		foreach ($query->result_array() as $row)
		{
			$resultArr["amountPay"] = $row['amount_pay'];
			$resultArr["dueDt"] = $row['due_dt'];
			
		}
		return $resultArr;
	  }
	  public function saveFees($data){
	        $this->db->insert('std_fees', $data);
	        return $this->db->insert_id();
	
	  }
	  public function saveFeesParticulars($data){
	      
	      foreach($data as $key => $details){	    	
	    	    $this->db->insert('std_fees_particulars', $details);	
    	    }	 
    	    $insert_id = $this->db->insert_id();		   	
    		return  $insert_id;
	    
	  }
	  public function currentDate(){
    		return date('Y-m-d H:i:s');
   	}
   	public function updateFees($data,$id){
   	    $this->db->where('fees_id', $id);
        $this->db->update('std_fees', $data);
        return true;
   	    
   	}
   	public function updateFeesParticulars($data,$id){
   	   
   	   
        try{
            $this -> db -> where('fees_id', $id);
            $this -> db -> delete('std_fees_particulars');
           
           	if($this->db->affected_rows()){
           	    try{
           	        $this->saveFeesParticulars($data);
           	        return true;
           	    }
       	        catch(Exception $ex){
       	            return false;
            			//echo json_encode(array("status"=>"error","message"=>$ex->getMessage()));
           	    }
       	    }
       	   
        }
        catch(Exception $ex){
			echo json_encode(array("status"=>"error","message"=>$ex->getMessage()));
    	}

   	}
   	
   	public function getFessById($id){
   	    
   	    $this->db->select('*');
		$this->db->from('std_fees std');
		$this->db->join('std_fees_particulars stdp', 'stdp.fees_id = std.fees_id','left');
		$this->db->where('std.fees_id', $id);
		$query = $this->db->get();
		//echo $this->db->last_query()."<br/>";
        return $query->result_array();
   	}
   
   public function generatePaymentId(){
	    $query = $this->db->query('SELECT IFNULL(max(payment_id),0) as payment_id FROM tbl_feespaid');
		$row = $query->row();
		$paymentId = $row->payment_id;
		if($paymentId == 0){
			$paymentId="100";
		}
		else{
			$paymentId = $paymentId + 1;
		}
		return $paymentId;
   }
   
   } 
?>