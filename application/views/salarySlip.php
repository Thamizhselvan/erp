<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Employee Details</title>
	<script type = 'text/javascript' src = "../../js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "../../js/salaryslip.js"></script> 
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
	Employee:
	    <select id="empId">
          <option value="0">---New---</option>
		  <?php foreach($empList as $count): ?>
		     <option value="<?php echo $count->emp_id; ?>"><?php echo $count->emp_name; ?></option>
		  <?php endforeach; ?> 
        </select><br>
	Pay slip for: 
		Month
			<select id="month">
			  <option value="0">---New---</option>
			  <?php
				$month = array( 1=>'JAN', 2=>'FEB', 3=>'MAR', 4=>'APR', 5=>'MAY',6=>'JUN',7=>'JUL',8=>'AUG',9=>'SEP',10=>'OCT',11=>'NOV',12=>'DEC');
				while (list($key, $value) = each($month)) { 
				?>
					<option value="<?php echo $key?>"><?php echo $value?></option>
				<?php } ?>
			</select>
			
		Year
			<select id="year">
			  <option value="0">---New---</option>
			  <?php
				for( $year=2010;$year<=2017;$year++ ) {?>
					<option value="<?php echo $year?>"><?php echo $year?></option>
			<?php } ?>
			</select><br>
	  Academic Year
	  <input type="text" id="academicYear" value="2016-2017"><br>
	  <table id="allowance">
		<tr><th>Description</th><th>Amount</th></tr>
	  </table>
	  <input type="text" name="option" id="option" value="generate"><br>
	  <input type="button" value="generate" id="generate" onclick="salaryslip()">
	  <input type="button" value="send" id="send" onclick="send(this)">
	  
	  <div id="allowance1">
			
	  </div>
	  <div id="deduction1">
			
	  </div>
</form>
</body>
</html>
