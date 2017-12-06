<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Fees Details</title>
	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/fees.js"></script> 
</head>
<body>
<form>
	
	  Student Registration No.
	  <select id="admissionNo" onchange="getStudentDetailsByAdmissionNo()">
          <option value="0">---Select---</option>
		  <?php foreach($stuList as $count): ?>
		     <option value="<?php echo $count->admission_no; ?>"><?php echo $count->sname; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	  Department:
	  <input type="hidden" id="dcode"><span id="dname"></span>
	  Course:
	  <input type="hidden" id="ccode"><span id="cname"></span>
	  Semester:
	  <select id="sem" onchange="getFeesDetailsBySemester()">
	  <option value="0">---Select---</option>
      </select>
	  Academic Year:<span id="academicYear"></span>
	  <br>
	  <table id="fees">
		<tr>
			<th>S.No<th>
			<th>Particulars<th>
			<th>Amount<th>
		</tr>
		
	  </table>
	  Amount Pay: <input type="text" id="amountPay" onchange="calcBalAmount()">
	  Balance Amount: <input type="text" id="balAmount">
	  Due Date:<input type="text" id="dueDt">
	  
	  <input type="text" name="option" id="option" value="save"><br>
	  <input type="button" value="save" id="save" onclick="payment(this)">
	  <input type="button" value="Send" id="send" onclick="sendMail()">
</form>
</body>
</html>
