function salaryslip(){
	
	var dcode=$('#dcode').val();
	var role=$('#roleId').val();
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
				var count=1;
				$('#mytable').append('<tr><td></td><th>Allowance</td><td></td></tr>');
				$.each(data.allowanceList, function (allowanceType, val) {
					
					$('#mytable').append('<tr><td>'+count+'</td><td>'+allowanceType+'</td><td>'+val+'</td></tr>');
					allowanceTotal=parseFloat(allowanceTotal)+parseFloat(val);
					count++;
				});
				$('#mytable').append('<tr><td></td><th>Allowance Total: </td><td>'+allowanceTotal+'</td></tr>');
				$('#mytable').append('<tr><td></td><th>Deduction</td><td></td></tr>');
				$.each(data.deductionList, function (deductionType, val) {
					$('#mytable').append('<tr><td>'+count+'</td><td>'+deductionType+'</td><td>'+val+'</td></tr>');
					deductionTotal=parseFloat(deductionTotal)+parseFloat(val);
					count++;
				});
				var netSalary = parseFloat(allowanceTotal) - parseFloat(deductionTotal);
				$('#mytable').append('<tr><td></td><th>Deduction Total: </td><td>'+deductionTotal+'</td></tr>');
				$('#mytable').append('<tr><td></td><th>Net Salary: </td><td>'+netSalary+'</td></tr>');
		}
	})
}