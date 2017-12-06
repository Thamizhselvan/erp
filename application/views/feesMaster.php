<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Fees Details</title>
	<script type = 'text/javascript' src = "../../js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "../../js/fees.js"></script> 
</head>
<body>
<form>
	
	  Fees Name:
	  <select id="feesCode" onchange="getFeesDetails()">
          <option value="new">---New---</option>
		  <?php foreach($feesList as $count): ?>
		     <option value="<?php echo $count->fees_code; ?>"><?php echo $count->fees_desc; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	  Fees Description:
	  <input type="text" id="feesDesc"><br>
	  Amount:
	  <input type="text" id="amount"><br>
	  
	  <input type="text" name="option" id="option" value="save"><br>
	  <input type="button" value="save" id="save" onclick="fees(this)">
	  <input type="button" value="update" id="update" onclick="fees(this)">
</form>
</body>
</html>
