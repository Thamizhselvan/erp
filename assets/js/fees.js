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

function getFeesDetails(){
	
	$.ajax({
			type:"POST",
			url:"getFeesDetails",
			data:"feesCode="+$('#feesCode').val(),
			success:function(res){
				var obj = jQuery.parseJSON(res);
				$('#feesDesc').val(obj.feesDesc);
				$('#amount').val(obj.amount);
			}
		})
}
function feesAction(){

	var feesCode = $('#feesCode').val();
	var feesDesc = $('#feesDesc').val();
	var amount = $('#amount').val();
	var option=$('#option').val();
	var dataStr="feesCode="+feesCode+"&feesDesc="+feesDesc+"&amount="+amount+"&option="+option;
	if($('#feesCode').val() == '' || $('#feesDesc').val() == '' || $('#amount').val() == '')
	{
		$.ajax({
			type:"POST",
			url:"feesAction",
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
	var option=$('#option').val();
	
	var dataStr="sem="+sem+"&ccode="+ccode+"&dcode="+dcode+"&academicYear="+academicYear+"&feesCode="+feesCode+"&option="+option;
	
	$.ajax({
			type:"POST",
			url:"fees/addFeesAction",
			data:dataStr,
			success:function(data){
				alert(data);
			}
		})
}

function getCourseByDepartment(){

	$.ajax({
		type:"POST",
		url:"getCourseByDepartment",
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
			url: "getSemByCourse",
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
