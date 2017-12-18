function course(id){
	var url="<?php echo site_url()?>";
	$('#option').val($(id).attr('id'));
	courseAction();
}
function department(){

	var url="<?php echo site_url()?>";
	$('#option').val($(id).attr('id'));
	departmentAction();
	
}
function courseAction(){
	var dataStr="dcode="+$('#dcode').val()+"&ccode="+$('#ccode').val()+"&cname="+$('#cname').val()+"&duration="+$('#duration').val()+"&sem="+$('#sem').val();
		dataStr+="&startYear="+$('#startYear').val()+"&option="+$('#option').val();
	
	$.ajax({
			type:"POST",
			url:"course/courseAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
	})
}
function department(){
	var dataStr="dname="+$('#dname').val()+"&dcode="+$('#dcode').val()+"&option=add";
	
	$.ajax({
			type:"POST",
			url:"department/departmentAction",
			data:dataStr,
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
	})
}
function getCourse(){
	if($('#ccode').val()=="newCourse"){
		$('#save').removeAttr('disabled');
		$('#update').attr('disabled','disabled');
	}
	else{
		$('#save').attr('disabled','disabled');
		$('#update').removeAttr('disabled');
	}
	$.ajax({
			type:"POST",
			url:"course/getCourse",
			data:"ccode="+$('#ccode').val(),
			success:function(res){
				var obj = jQuery.parseJSON(res);
				$('#cname').val(obj.cname);
				$('#duration').val(obj.duration);
				$('#sem').val(obj.sem);
				$('#startYear').val(obj.startYear);
			}
		})
}
function deptCorseSave(){

	if($('#ccode').val()=="newCourse"){
		
		$.ajax({
			type:"POST",
			url:"department/saveCourse",
			data:"cname="+$('#cname').val()+"&duration="+$('#duration').val()+"&sem="+$('#sem').val()+"&startYear="+$('#startYear').val(),
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
		})
	}
	/*if($('#dcode').val()=="newDept"){
		$.ajax({
			type:"POST",
			url:"saveDepartment",
			data:"dname="+$('#dname').val(),
			success:function(data){
				alert(data);
			}
		})
	}*/
	
}
function deptCorseUpdate(){

	if($('#dcode').val()!="newDept"){
		$.ajax({
			type:"POST",
			url:"department/updateDepartment",
			data:"dname="+$('#dname').val()+"&dcode="+$('#dcode').val(),
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
		})
	}
	if($('#ccode').val()!="newCourse"){
		
		$.ajax({
			type:"POST",
			url:"department/updateCourse",
			data:"dcode="+$('#dcode').val()+"&ccode="+$('#ccode').val()+"&cname="+$('#cname').val()+"&startYear="+$('#startYear').val()+"&duration="+$('#duration').val(),
			success:function(data){
				$('#success').css("display","block");
				$('#success').html(data);
				$('#success').toggle(4000);
			}
		})
	}
}
function getCourseByDept(){
	$.ajax({
			type:"POST",
			url: "course/getCourseByDept",
			data:"dcode="+$('#dcode').val(),
			success: function(res) 
			{
				$("#ccode").find("option:not(:first)").remove();
				var data = $.parseJSON(res);
				$(data).each(function(i,val){
				  $.each(val,function(key,val){
						 
						var opt = $('<option />'); 
						opt.val(key);
						opt.text(val);
						$('#ccode').append(opt);
				  });
				});
			}
	});
}