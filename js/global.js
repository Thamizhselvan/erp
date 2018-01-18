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
			url:"courseAction",
			data:dataStr,
			success:function(data){
				alert(data);
			}
	})
}
function department(){
	var dataStr="dname="+$('#dname').val()+"&dcode="+$('#dcode').val()+"&option=add";
	
	$.ajax({
			type:"POST",
			url:"departmentAction",
			data:dataStr,
			success:function(data){
				alert(data);
			}
	})
}
function getCourse(){
	if($('#ccode').val()=="newCourse"){
		alert('ghghgj');
		$('#save').removeAttr('disabled');
		$('#update').attr('disabled','disabled');
	}
	else{
		$('#save').attr('disabled','disabled');
		$('#update').removeAttr('disabled');
	}
	$.ajax({
			type:"POST",
			url:"getCourse",
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
			url:"saveCourse",
			data:"cname="+$('#cname').val()+"&duration="+$('#duration').val()+"&sem="+$('#sem').val()+"&startYear="+$('#startYear').val(),
			success:function(data){
				alert(data);
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
			url:"updateDepartment",
			data:"dname="+$('#dname').val()+"&dcode="+$('#dcode').val(),
			success:function(data){
				alert(data);
			}
		})
	}
	if($('#ccode').val()!="newCourse"){
		
		$.ajax({
			type:"POST",
			url:"updateCourse",
			data:"dcode="+$('#dcode').val()+"&ccode="+$('#ccode').val()+"&cname="+$('#cname').val()+"&startYear="+$('#startYear').val()+"&duration="+$('#duration').val(),
			success:function(data){
				alert(data);
			}
		})
	}
}
