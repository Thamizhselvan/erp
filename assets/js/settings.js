function collegeSettings(id){
		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  collegeSettingsAction();
}
function collegeSettingsAction(){
	
	var collegeName = $('#collegeName').val();
	var startDt = $('#startDt').val();
	var endDt = $('#endDt').val();
	var addr1 = $('#addr1').val();
	var addr2 = $('#addr2').val();
	var city = $('#city').val();
	var state = $('#state').val();
	var phoneNo = $('#phoneNo').val();
	var mobile = $('#mobile').val();
	var email = $('#email').val();
	var website = $('#website').val();
	var startupYr = $('#startup_yr').val();
	var dateFormat = $('#dateFormat').val();
	var option=$('#option').val();
	
	var dataStr="collegeName="+collegeName+"&startDt="+startDt+"&addr1="+addr1+"&addr2="+addr2+"&city="+city+"&endDt="+endDt;
	dataStr+="&state="+state+"&mobile="+mobile+"&phoneNo="+phoneNo+"&email="+email+"&website="+website+"&option="+option+"&startupYr="+startupYr+"&dateFormat="+dateFormat;
	
	$.ajax({
			type:"POST",
			url:"settings/collegeSettings",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
			}
		})
	
}
function validateForm(){
	
	var status = true;
	if($('#empId').val() == "new"){
		if($('#empName').val() == ''){
			alert('Please enter employee name');
			$('#empName').focus();
			status = false;
		}
		else if($('#dob').val() == ''){
			alert('Please select date of birth');
			$('#dob').focus();
			status = false;
		}
		else if($('#qualification').val() == ''){
			alert('Please employee qualification');
			$('#qualification').focus();
			status = false;
		}
		if (!$('input[name=gender]:checked').val() ) {
			alert('Please select gender');
			$('#male').focus();
			status = false;
		}
		else if($('#exp').val() == ''){
			alert('Please enter experience');
			$('#exp').focus();
			status = false;
		}
		else if($('#doj').val() == ''){
			alert('Please enter date of joining');
			$('#doj').focus();
			status = false;
		}
		else if($('#roleId').val() == ''){
			alert('Please select role');
			$('#roleId').focus();
			status = false;
		}
		else if($('#addr1').val() == ''){
			alert('Please enter address');
			$('#addr1').focus();
			status = false;
		}
		else if($('#city').val() == ''){
			alert('Please enter city');
			$('#city').focus();
			status = false;
		}
		else if($('#state').val() == ''){
			alert('Please enter state');
			$('#state').focus();
			status = false;
		}
		else if($('#mobile').val() == ''){
			alert('Please enter mobile');
			$('#mobile').focus();
			status = false;
		}
	}
	return status;
}
function getEmployeeDetails(){
	$('#success').css("display","none");
	var dataStr="empId="+$('#empId').val();
	if($('#empId').val() != ''){
		$.ajax({
				type:"POST",
				url: "employee/getEmployee",
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