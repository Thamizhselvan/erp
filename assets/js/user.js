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