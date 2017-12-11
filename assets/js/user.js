function usermanagement(id){
	
  var url="<?php echo site_url()?>";
  $('#option').val($(id).attr('id'));
  userAction();
}
function userAction(){
	
	var menuList = [];
	$.each($("input[name='menus']:checked"), function(){            
		menuList.push($(this).val());
	});
	var empId = $('#empId').val();
	var roleId = $('#roleId').val();
	var option=$('#option').val();
	
	var dataStr="empId="+empId+"&roleId="+roleId+"&menuList="+menuList+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"user/userAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
			}
		})
	
}
function checkUser(){
	
	$.ajax({
			type:"POST",
			url:"user/checkUser",
			data:"empId="+$('#empId').val(),
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
			}
		})
}
function profileSettings(){
	alert('called000');
	var profileName = $('#profileName').val();
	var roleId = $('#roleId').val();
	var addr1=$('#addr1').val();
	var addr2=$('#addr2').val();
	var city=$('#city').val();
	var state=$('#state').val();
	var phoneNo=$('#phoneNo').val();
	var mobile=$('#mobile').val();
	var email=$('#email').val();
	var website=$('#website').val();
	var username=$('#username').val();
	var password=$('#password').val();
	
	var dataStr="profileName="+profileName+"&roleId="+roleId+"&addr1="+addr1+"&addr2="+addr2+"&city="+city+"&state="+state+"&phoneNo="+phoneNo;
	dataStr+="&mobile="+mobile+"&email="+email+"&website="+website+"&username="+username+"&password="+password;
	$.ajax({
			type:"POST",
			url:"userprofile/profileSettings",
			data: dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$( "#success" ).toggle( 4000, function() {
					clearFields();
				});
			}
		})
}
function clearFields(){
	$('#profileName').val('');
	$('#roleId').val('');
	$('#addr1').val('');
	$('#addr2').val('');
	$('#city').val('');
	$('#state').val('');
	$('#phoneNo').val('');
	$('#mobile').val('');
	$('#email').val('');
	$('#website').val('');
	$('#username').val('');
	$('#password').val('');
}