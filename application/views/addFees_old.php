<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Fees Details</title>
	<script type = 'text/javascript' src = "../../js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "../../js/fees.js"></script> 
</head>
<body>
<form>
	
	  Academic Year:
	  <select id="academicYear">
	  <option value="0">---Select---</option>
		  <?php foreach($acaYear as $count): ?>
		     <option value="<?php echo $count; ?>"><?php echo $count; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	  Department
	  <select id="dcode" onchange="getCourseByDepartment()">
          <option value="0">---Select---</option>
		  <?php foreach($deptList as $count): ?>
		     <option value="<?php echo $count->dcode; ?>"><?php echo $count->dname; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	  Course
	  <select id="ccode" onchange="getSemByCourse()">
          <option value="0">---Select---</option>
		  
          </select><br>
	  Semester:
	  <select id="sem">
          <option value="0">---Select---</option>
		  
          </select><br>
	  Fees Name:
	  <select id="feesCode" onchange="getFeesDetails()">
          <option value="0">---Select---</option>
		  <?php foreach($feesList as $count): ?>
		     <option value="<?php echo $count->fees_code; ?>"><?php echo $count->fees_desc; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	  Amount:
	  <input type="text" id="amount"><br>
	  
	  
	  <input type="text" name="option" id="option" value="save"><br>
	  <input type="button" value="save" id="save" onclick="addFees(this)">
	  <input type="button" value="update" id="update" onclick="addFees(this)">
</form>
</body>
</html>
