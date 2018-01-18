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
	var role=$('#role').val();
	var academicYear=$('#academicYear').val();
	var amount=$('#amount').val();
	var allowanceType = $('#allowanceType').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&role="+role+"&allowanceType="+allowanceType+"&academicYear="+academicYear+"&amount="+amount+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"payroll/allowanceAction",
			data:dataStr,
			success:function(data){
				alert(data);
			}})
}
function deductionAction(){
	
	var dcode=$('#dcode').val();
	var role=$('#role').val();
	var academicYear=$('#academicYear').val();
	var amount=$('#amount').val();
	var deductionType = $('#deductionType').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&role="+role+"&deductionType="+deductionType+"&academicYear="+academicYear+"&amount="+amount+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"deductionAction",
			data:dataStr,
			success:function(data){
				alert(data);
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
				alert(data);
			}
	})
}