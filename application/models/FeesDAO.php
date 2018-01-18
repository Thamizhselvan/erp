<?php 
   Class FeesDAO extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
      }
	  public function feesSave(){
	    
		$feesDesc=$this->input->post('feesDesc'); 
	    $amount=$this->input->post('amount'); 
		$USER_ID = SYSTEM_USER;
	    
	    $sql = "INSERT INTO mst_fees(fees_desc,amount,created_by,updated_dt) 
				VALUES ( ".$this->db->escape($feesDesc).",".$this->db->escape($amount).",".$this->db->escape($USER_ID).",now())";
	    $this->db->query($sql);
	    return $this->db->affected_rows();		
	  }
	  public function feesUpdate(){
		  log_message('info', 'feesUpdateDAO called');
		$feesCode=$this->input->post('feesCode'); 
	    $feesDesc=$this->input->post('feesDesc'); 
	    $amount=$this->input->post('amount'); 
		$USER_ID = SYSTEM_USER;

		$sql = "update mst_fees set fees_desc=".$this->db->escape($feesDesc).",amount=".$this->db->escape($amount).",
				created_by=".$this->db->escape($USER_ID).", updated_dt=".$this->db->escape(now())."
				where fees_code=".$this->db->escape($feesCode)." "; 
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	  }
	  
	  public function addFeesAction(){
	    
		$feesCode=$this->input->post('feesCode'); 
	    $dcode=$this->input->post('dcode'); 
		$ccode=$this->input->post('ccode'); 
		$sem=$this->input->post('sem'); 
		$academicYear=$this->input->post('academicYear'); 
		$sno    = $this->input->post('sno');
	    $particulars = $this->input->post('particulars');
		$amount = $this->input->post('amount');
		$feesData = array();
		
		$USER_ID = SYSTEM_USER;
	    
	    $sql = "INSERT INTO add_fees(dcode,ccode,sem,academic_year,created_by) 
				VALUES ( ".$this->db->escape($dcode).",".$this->db->escape($ccode).",".$this->db->escape($sem).",
				".$this->db->escape($academicYear).",".$this->db->escape($feesCode).",".$this->db->escape($USER_ID).")";
	    $this->db->query($sql);
	    echo $this->db->affected_rows();
	    die();
	    
		foreach($sno as $key=>$val)
		{
		  $feesData[] = array(
		  		'fcode'			=>  $this->db->affected_rows(),
		  		'particulars'	=>$particulars[$key],
		  		'amount'	=>$amount[$key],
		  		'created_at'    	=> $this->currentDate(),
        		'updated_at'    	=> $this->currentDate(),
	  		);
		}
		print_r($feesData);exit;
		
		
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
   	public function getAllStudentByAdmissionNo(){
   		$this->db->select('std.admission_no');
		$this->db->from('admission_details std');		
		$query = $this->db->get();
		return $query->result();
		
   	}
   
   } 
?>