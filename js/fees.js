function fees(id){

		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  feesAction();
}
function addFees(id){

		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  
		  addFeesAction();
		  
}
function payment(id){

		  var url="<?php echo site_url()?>";
		  $('#option').val($(id).attr('id'));
		  paymentAction();
}

function feesAction(){

	var feesCode = $('#feesCode').val();
	var feesDesc = $('#feesDesc').val();
	var amount = $('#amount').val();
	var option=$('#option').val();
	var dataStr="feesCode="+feesCode+"&feesDesc="+feesDesc+"&amount="+amount+"&option="+option;
	if($('#feesCode').val() != '' || $('#feesDesc').val() != '' || $('#amount').val() != '')
	{
		$.ajax({
			type:"POST",
			url:"fees/feesAction",
			data:dataStr,
			success:function(data){
				alert(data);
			}
		})
	}
	
}
function addFeesAction(){
	
	var dcode = $('#dcode').val();
	var ccode = $('#ccode').val();
	var sem = $('#sem').val();
	var academicYear = $('#academicYear').val();
	var feesCode = $('#feesCode').val();
	//var amount = $('#amount').val();
	var option=$('#option').val();$
	console.log($(this));return false;
	var dataStr="sem="+sem+"&ccode="+ccode+"&dcode="+dcode+"&academicYear="+academicYear+"&feesCode="+feesCode+"&option="+option;
	console.log($(this).parent('#fees').attr('action'));return false;
	$.ajax({
			type:"POST",
			url:"fees/addFeesAction",
			data:$('#fees').serialize(),
			success:function(data){
				console.log(data);
			}
		})
		return false;
}
function paymentAction(){
	var admissionNo = $('#admissionNo').val();
	var dcode = $('#dcode').val();
	var ccode = $('#ccode').val();
	var sem = $('#sem').val();
	var academicYear = $('#academicYear').text();
	var totAmount = $('#totAmount').val();
	var amountPay = $('#amountPay').val();
	var balAmount = $('#balAmount').val();
	var dueDt = $('#dueDt').val();
	var option=$('#option').val();
	
	var dataStr="admissionNo="+admissionNo+"&sem="+sem+"&ccode="+ccode+"&dcode="+dcode+"&academicYear="+academicYear;
	dataStr+="&totAmount="+totAmount+"&amountPay="+amountPay+"&balAmount="+balAmount+"&dueDt="+dueDt+"&option="+option;
	var status = validatePaymentForm(admissionNo,sem,amountPay,balAmount,dueDt);
	if(status == true){
		
		$.ajax({
				type:"POST",
				url:"paymentAction",
				data:dataStr,
				success:function(data){
					alert(data);
				}
			})
	}
}
function validatePaymentForm(admissionNo,sem,amountPay,balAmount,dueDt){
	var status=true;
	if(admissionNo == 0){
		alert('Please Select Student admission no');
		status=false;
	}
	else if(sem == 0){
		alert('Please Select Semester');
		status=false;
	}
	else if(amountPay == '' || amountPay == 0){
		alert('Please Select amount pay');
		status=false;
	}
	else if(dueDt == '' ||  dueDt == 0){
		alert('Please Select due date');
		status=false;
	}
	return status;
}
function getFeesDetails(){
	
	$.ajax({
			type:"POST",
			url: "fees/getFeesDetails",
			data:"feesCode="+$('#feesCode').val(),
			success:function(res){
				var obj = jQuery.parseJSON(res);
				$('#feesDesc').val(obj.feesDesc);
				$('#amount').val(obj.amount);
			}
		})
}
function getCourseByDepartment(){

	$.ajax({
		type:"POST",
		url:"fees/getCourseByDepartment",
		data:"dcode="+$('#dcode').val(),
		success: function(res) //we're calling the response json array 'cities'
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
					$('#ccode').append(opt);
			  });
			});
		}
	});
}
function getSemByCourse(){
	
	$.ajax({
			type:"POST",
			url: "fees/getSemByCourse",
			data:"dcode="+$('#dcode').val()+"&ccode="+$('#ccode').val(),
			success: function(res) 
			{
				for(i=1;i<=res;i++){
					var opt = $('<option />'); // here we're creating a new select option with for each city
					opt.val(i);
					opt.text(i);
					$('#sem').append(opt);
				}
			}
	});
}
function getStudentDetailsByAdmissionNo(){
	
	$.ajax({
		type:"POST",
		url:"getStudentDetailsByAdmissionNo",
		data:"admissionNo="+$('#admissionNo').val(),
		success: function(res) 
		{
			var obj = jQuery.parseJSON(res);
			$('#dcode').val(obj.dcode);
			$('#dname').text(obj.dname);
			$('#ccode').val(obj.ccode);
			$('#cname').text(obj.cname);
			$('#academicYear').text(obj.academicYear);
			for(i=1;i<=obj.sem;i++){
					var opt = $('<option />');
					opt.val(i);
					opt.text(i);
					$('#sem').append(opt);
				}
			var optAll = $('<option />');
					optAll.val("all");
					optAll.text("All");
					$('#sem').append(optAll);
		}
	});
}
function getFeesDetailsBySemester(){

	var dcode = $('#dcode').val();
	var ccode = $('#ccode').val();
	var sem = $('#sem').val();
	var academicYear = $('#academicYear').text();
	var dataStr="sem="+sem+"&ccode="+ccode+"&dcode="+dcode+"&academicYear="+academicYear;

	$.ajax({
		type:"POST",
		url:"getFeesDetailsBySemester",
		data:dataStr,
		success: function(res) 
		{
			var count=0;
			var sum=0;
			var data = $.parseJSON(res);
			$(data).each(function(i,val)
			 {
			  $.each(val,function(key,val)
			  {
				count++;
				$('#fees').append('<tr><td>'+count+'</td><td>'+key+'</td><td>'+val+'</td></tr>');
				sum=parseFloat(sum)+parseFloat(val);
			  });
			});
			$('#fees').append('<tr><td></td><td>Total: </td><td><input type=hidden id=totAmount value='+sum+'>'+sum+'</td></tr>');
			$('#balAmount').val(sum);
			if(count!=0){
				dataStr+="&admissionNo="+$('#admissionNo').val();
				$.ajax({
					type:"POST",
					url:"getFeesPaidDetailsByStudent",
					data:dataStr,
					success: function(res) 
					{
						var data = $.parseJSON(res);
						var balAmount=parseFloat(sum)-parseFloat(data.amountPay);
						$('#balAmount').val(balAmount);
					}
				});
			}
			$('#amountPay').focus();
		}
	});
}
function calcBalAmount(){
	var balAmount=$('#balAmount').val();
	var totAmount=$('#totAmount').val();
	var amountPay=$('#amountPay').val();
	var balAmount=parseFloat(balAmount)-parseFloat(amountPay);
	$('#balAmount').val(balAmount);
}
function sendMail(){

	var dcode = $('#dcode').val();
	var ccode = $('#ccode').val();
	var sem = $('#sem').val();
	var academicYear = $('#academicYear').text();
	var admissionNo=$('#admissionNo').val();
	var dataStr="sem="+sem+"&ccode="+ccode+"&dcode="+dcode+"&academicYear="+academicYear+"&admissionNo="+admissionNo;
	
	var status = validatePaymentForm(admissionNo,sem,$('#amountPay').val(),$('#balAmount').val(),$('#dueDt').val());
	if(status == true){
		$.ajax({
			type:"POST",
			url:"sendMail",
			data:dataStr,
			success: function(res) 
			{
				alert(res);
			}
		});
	}	
}
