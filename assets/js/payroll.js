function allowance(id){
		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  allowanceAction();
}
function deduction(id){
		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  deductionAction();
}
function leave(id){
		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  leaveAction();
}
function allowanceAction(){
	
	var dcode=$('#dcode').val();
	var roleId=$('#roleId').val();
	var academicYear=$('#academicYear').val();
	var amount=$('#amount').val();
	var allowanceType = $('#allowanceType').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&roleId="+roleId+"&allowanceType="+allowanceType+"&academicYear="+academicYear+"&amount="+amount+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"payroll/allowanceAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$( "#success" ).toggle( 5000, function() {
					clearFields();
				});
			}})
}
function deductionAction(){
	
	var dcode=$('#dcode').val();
	var roleId=$('#roleId').val();
	var academicYear=$('#academicYear').val();
	var amount=$('#amount').val();
	var deductionType = $('#deductionType').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&roleId="+roleId+"&deductionType="+deductionType+"&academicYear="+academicYear+"&amount="+amount+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"payroll/deductionAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$( "#success" ).toggle( 4000, function() {
					clearFields();
				});
			}
	})
}
function leaveAction(){
	
	var dcode=$('#dcode').val();
	var role=$('#role').val();
	var academicYear=$('#academicYear').val();
	var noOfLeave=$('#noOfLeave').val();
	var leaveType = $('#leaveType').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&role="+role+"&leaveType="+leaveType+"&academicYear="+academicYear+"&noOfLeave="+noOfLeave+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"leaveAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$( "#success" ).toggle( 4000, function() {
					clearFields();
				});
			}
	})
}
function getAllAllowance(){
	
	$.ajax({
			type:"POST",
			url: "payroll/getAllAllowance",
			data:"dcode="+$('#dcode').val()+"&roleId="+$('#roleId').val()+"&academicYear="+$('#academicYear').val(),
			success: function(res) 
			{
				var data = $.parseJSON(res);
				$(data).each(function(i,val)
				 {
				  $.each(val,function(key,val)
				  {
						//console.log(key + " : " + val);     
						var opt = $('<option />'); // here we're creating a new select option with for each city
						opt.val(key);
						opt.text(val);
						$('#allowanceCode').append(opt);
				  });
				});
			}
	});
}
function getAllowance(){
	buttonAction();
	$.ajax({
			type:"POST",
			url: "payroll/getAllowance",
			data:"dcode="+$('#dcode').val()+"&roleId="+$('#roleId').val()+"&allowanceCode="+$('#allowanceCode').val()+"&academicYear="+$('#academicYear').val(),
			success: function(res) 
			{
				var data = $.parseJSON(res);
				$('#allowanceType').val(data.allowanceType);
				$('#amount').val(data.amount);
			}
	});
}

function getAllDeduction(){
	
	$.ajax({
			type:"POST",
			url: "payroll/getAllDeduction",
			data:"dcode="+$('#dcode').val()+"&roleId="+$('#roleId').val()+"&academicYear="+$('#academicYear').val(),
			success: function(res) 
			{
				var data = $.parseJSON(res);
				$(data).each(function(i,val)
				 {
				  $.each(val,function(key,val)
				  {
						//console.log(key + " : " + val);     
						var opt = $('<option />'); // here we're creating a new select option with for each city
						opt.val(key);
						opt.text(val);
						$('#deductionCode').append(opt);
				  });
				});
			}
	});
}
function getDeduction(){
	buttonAction();
	$.ajax({
			type:"POST",
			url: "payroll/getDeduction",
			data:"dcode="+$('#dcode').val()+"&roleId="+$('#roleId').val()+"&deductionCode="+$('#deductionCode').val()+"&academicYear="+$('#academicYear').val(),
			success: function(res) 
			{
				var data = $.parseJSON(res);
				$('#deductionType').val(data.deductionType);
				$('#amount').val(data.amount);
			}
	});
}
function buttonAction(){
	if($('#allowanceCode').val()=="new" || $('#deductionCode').val()=="new"){
		$('#save').removeAttr('disabled');
		$('#update').attr('disabled','disabled');
	}
	else{
		$('#save').attr('disabled','disabled');
		$('#update').removeAttr('disabled');
	}
}
function clearFields(){
	$('#dcode').val(0);
	$('#roleId').val(0);
	$('#academicYear').val(0);
	$('#amount').val('');
	$('#allowanceType').val('');
	$('#deductionType').val('');
	$("#allowanceCode").find("option:not(:first)").remove();
	$("#deductionCode").find("option:not(:first)").remove();
}