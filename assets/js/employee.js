function getEmployeeDetails(){

	var dataStr="empId="+$('#empId').val();
	if($('#empId').val() != ''){
		$.ajax({
				type:"POST",
				url: "../getEmployee",
				data:dataStr,
				success:function(res){
					var obj = jQuery.parseJSON(res);
					$('#empName').val(obj.empName);
					$('#dob').val(obj.dob);
					$('#gender').val(obj.gender);
					$('#qualification').val(obj.qualification);
					$('#exp').val(obj.exp);
					$('#roleId').val(obj.roleId);
					$('#doj').val(obj.doj);
					$('#addr1').val(obj.addr1);
					$('#addr2').val(obj.addr2);
					$('#city').val(obj.city);
					$('#state').val(obj.state);
					$('#mobile').val(obj.mobile);
					$('#email').val(obj.email);
				}
			})
	}
}
function employee(id){
		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  employeeAction();
}
function employeeAction(){
	
	var empId = $('#empId').val();
	var empName = $('#empName').val();
	var dob = $('#dob').val();
	var gender = $('input[name=gender]:checked').val();
	var qualification = $('#qualification').val();
	var exp = $('#exp').val();
	var roleId = $('#roleId').val();
	var doj = $('#doj').val();
	var addr1 = $('#addr1').val();
	var addr2 = $('#addr2').val();
	var city = $('#city').val();
	var state = $('#state').val();
	var mobile = $('#mobile').val();
	var email = $('#email').val();
	var option=$('#option').val();
	
	var dataStr="empName="+empName+"&addr1="+addr1+"&addr2="+addr2+"&mobile="+mobile+"&city="+city+"&state="+state+"&doj="+doj+"&email="+email;
	dataStr+="&empId="+empId+"&gender="+gender+"&dob="+dob+"&qualification="+qualification+"&exp="+exp+"&roleId="+roleId+"&option="+option;
	if(validateForm()){
		$.ajax({
				type:"POST",
				url:"employeeAction",
				data:dataStr,
				success:function(data){
					$('#success').css("display","block");
				    $('#success').html(data);
					$('#success').toggle(4000);
				}
			})
	}
}
function validateForm(){
	
	var status = true;
	if($('#empId').val() == "new"){
		if($('#empName').val() == ''){
			//alert('Please enter employee name');
			$('#success').css("display","block");
			$('#success').html('Please enter employee name');
			$('#empName').focus();
			status = false;
		}
		else if($('#dob').val() == ''){
			//alert('Please select date of birth');
			$('#success').css("display","block");
			$('#success').html('Please select date of birth');
			$('#dob').focus();
			status = false;
		}
		else if($('#qualification').val() == ''){
			alert('Please employee qualification');
			$('#success').css("display","block");
			$('#success').html('Please enter employee name');
			$('#qualification').focus();
			status = false;
		}
		if (!$('input[name=gender]:checked').val() ) {
			//alert('Please select gender');
			$('#success').css("display","block");
			$('#success').html('Please select gender');
			$('#male').focus();
			status = false;
		}
		else if($('#exp').val() == ''){
			//alert('Please enter experience');
			$('#success').css("display","block");
			$('#success').html('Please enter experience');
			$('#exp').focus();
			status = false;
		}
		else if($('#doj').val() == ''){
			//alert('Please enter date of joining');
			$('#success').css("display","block");
			$('#success').html('Please enter date of joining');
			$('#doj').focus();
			status = false;
		}
		else if($('#roleId').val() == ''){
			//alert('Please select role');
			$('#success').css("display","block");
			$('#success').html('Please select role');
			$('#roleId').focus();
			status = false;
		}
		else if($('#addr1').val() == ''){
			//alert('Please enter address');
			$('#success').css("display","block");
			$('#success').html('Please enter address');
			$('#addr1').focus();
			status = false;
		}
		else if($('#city').val() == ''){
			//alert('Please enter city');
			$('#success').css("display","block");
			$('#success').html('Please enter city');
			$('#city').focus();
			status = false;
		}
		else if($('#state').val() == ''){
		//alert('Please enter state');
			$('#success').css("display","block");
			$('#success').html('Please enter state');
			$('#state').focus();
			status = false;
		}
		else if($('#mobile').val() == ''){
			//alert('Please enter mobile');
			$('#success').css("display","block");
			$('#success').html('Please enter mobile');
			$('#mobile').focus();
			status = false;
		}
	}
	return status;
}
function deleteEmployee(empId){
	if(confirm("Are you sure you want to delete this quote?")){
		$.ajax({
			type:"POST",
			url:"employeeDelete",
			data:"empId="+empId,
			success:function(data){
				//alert(data);
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
		})
	}
	
}
function addEmployee(){
	
	window.location="employee";
}
$(window).on('load', function () {
  //alert("Window Loaded");
  
});