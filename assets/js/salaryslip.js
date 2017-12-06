function salaryslip(){
	
	var dcode=$('#dcode').val();
	var role=$('#role').val();
	var empId=$('#empId').val();
	var month=$('#month').val();
	var year=$('#year').val();
	var academicYear=$('#academicYear').val();
	var option=$('#option').val();
	
	var dataStr="dcode="+dcode+"&role="+role+"&empId="+empId+"&academicYear="+academicYear+"&month="+month+"&year="+year+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"generateSalaryslip",
			data:dataStr,
			success:function(data){
				
				var data = $.parseJSON(data);
				var allowanceTotal=0;
				var deductionTotal=0;
				$('#allowance').append('<tr><th>Allowance</td><td></td></tr>');
				$.each(data.allowanceList, function (allowanceType, val) {
					//console.log('allowanceType===>'+allowanceType+':Val===>'+val);
					$('#allowance').append('<tr><td>'+allowanceType+'</td><td>'+val+'</td></tr>');
					allowanceTotal=parseFloat(allowanceTotal)+parseFloat(val);
				});
				$('#allowance').append('<tr><th>Allowance Total: </td><td>'+allowanceTotal+'</td></tr>');
				$('#allowance').append('<tr><th>Deduction</td><td></td></tr>');
				$.each(data.deductionList, function (deductionType, val) {
					//console.log('deductionType===>'+deductionType+':Val===>'+val);
					$('#allowance').append('<tr><td>'+deductionType+'</td><td>'+val+'</td></tr>');
					deductionTotal=parseFloat(deductionTotal)+parseFloat(val);
				});
				var netSalary = parseFloat(allowanceTotal) - parseFloat(deductionTotal);
				$('#allowance').append('<tr><th>Deduction Total: </td><td>'+deductionTotal+'</td></tr>');
				$('#allowance').append('<tr><th>Net Salary: </td><td>'+netSalary+'</td></tr>');
		}
	})
}