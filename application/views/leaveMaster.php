<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Employee Details</title>
	<script type = 'text/javascript' src = "../../js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "../../js/payroll.js"></script> 
</head>
<body>
<form>
	Department
	  <select id="dcode">
          <option value="newDept">---New---</option>
		  <?php foreach($deptList as $count): ?>
		     <option value="<?php echo $count->dcode; ?>"><?php echo $count->dname; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	Role:
	    <select id="role">
          <option value="0">---New---</option>
		  <?php foreach($roleList as $count): ?>
		     <option value="<?php echo $count->role_id; ?>"><?php echo $count->role_name; ?></option>
		  <?php endforeach; ?> 
        </select><br>	  
	  Leave Type:	  
	  <input type="text" id="leaveType"><br>
	  No.of Leaves per year:
	  <input type="text" id="noOfLeave"><br>
	  Academic Year
	  <input type="text" id="academicYear"><br>
	  
	  <input type="text" name="option" id="option" value="save"><br>
	  <input type="button" value="save" id="save" onclick="leave(this)">
	  <input type="button" value="update" id="update" onclick="leave(this)">
</form>
</body>
</html>
