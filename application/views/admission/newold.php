<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="notice_msg"><span class="msg"></span></div></label>
	<div class="admission_details">	

		<?php
			$attributes = array('id' => 'admission_create');
			 echo form_open('admission/create',$attributes); ?>
			<label><strong>Admission</strong></label>
			<table>
				<tr>
					<td>
						<?php echo form_label('Admission Mode :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('admissionMode',$admission_mode,set_value('admissionMode')); ?>		
					</td>	

				</tr>
				<tr>
					<td>
						<?php echo form_label('Admission Number :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'dname', 'name' => 'admissionNo')); ?>
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Course :'); ?>
					</td>
					<td>
						<?php echo form_dropdown('course',$course,set_value('course')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Department :'); ?>
					</td>
					<td>
						<?php echo form_dropdown('department',$department,set_value('department')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Course Medium :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('courseMedium',$courseMedium,set_value('courseMedium')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
					</td>
					<td>
						<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
					</td>	
				</tr>
			</table>
	 	<?php echo form_close(); ?>	
	</div>
	<div class="admission_personal_details">
	<?php
			$attributes = array('id' => 'personal_create');
			 echo form_open('admission/personal',$attributes); ?>
			<label><strong>Personal Details</strong><strong></strong></label>
			<table>
				<tr>
					<td>
						<?php echo form_label('Title :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('title',$title,set_value('title')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Student name :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'studentname', 'name' => 'studentname')); ?>
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Father name :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'father_name', 'name' => 'father_name')); ?>					
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Mother name :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'mother_name', 'name' => 'mother_name')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Gender  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('gender',$gender,set_value('gender')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('DOB  :'); ?>			
					</td>
					<td>
						<?php echo form_input(array('id' => 'dob', 'name' => 'dob')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Age  :'); ?>			
					</td>
					<td>
						<?php echo form_input(array('id' => 'age', 'name' => 'age')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Mother tongue  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('mother_tongue',$mother_tongue,set_value('mother_tongue')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Nationality  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('nationality',$nationality,set_value('nationality')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Religion  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('religion',$religion,set_value('religion')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Category  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('category',$category,set_value('category')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Caste  :'); ?>			
					</td>
					<td>
						<?php echo form_dropdown('caste',$caste,set_value('caste')); ?>		
					</td>	
				</tr>

				<tr>
					<td>
						<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
					</td>
					<td>
						<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
					</td>	
				</tr>
			</table>
	 	<?php echo form_close(); ?>	
 	</div>
 	<div class="admission_address_details">
	<?php
			$attributes = array('id' => 'address_create');
			 echo form_open('admission/address',$attributes); ?>
			
		 	<div class="temp_address_details">			
		 		<label><strong>Temparory Address  Details</strong></label>
				<table>			
					<tr>
						<td>
							<?php echo form_label('Address1 :'); ?>			
						</td>
						<td>
							<?php
								$data = array(
							        'name'        => 'tmp_address_line1',
							        'id'          => 'tmp_address_line1',
							        'value'       => set_value('tmp_address_line1'),
							        'rows'        => '4',
							        'cols'        => '19',					        
							        'class'       => 'form-control'
							    );
						    ?>
							<?php echo form_textarea($data); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Address2 :'); ?>			
						</td>
						<td>
							<?php
								$data = array(
							        'name'        => 'tmp_address_line2',
							        'id'          => 'tmp_address_line2',
							        'value'       => set_value('tmp_address_line2'),
							        'rows'        => '4',
							        'cols'        => '19',						        
							        'class'       => 'form-control'
							    );
						    ?>
							<?php echo form_textarea($data); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('City  :'); ?>
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_city', 'name' => 'tmp_city')); ?>					
						</td>	
					</tr>	
					<tr>
						<td>
							<?php echo form_label('State :'); ?>
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_state', 'name' => 'tmp_state')); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Zipcode  :'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_zipcode', 'name' => 'tmp_zipcode')); ?>		
						</td>	
					</tr>					
					<tr>
						<td>
							<?php echo form_label('Mobile No  :'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_mobile_no', 'name' => 'tmp_mobile_no')); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Alternate Mobile  No:'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_mobile_no1', 'name' => 'tmp_mobile_no1')); ?>
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Email  :'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'tmp_email', 'name' => 'tmp_email')); ?>
						</td>	
					</tr>
				</table>
			</div>
			<div class="pmt_address_details">
		 		<label><strong>Permanent Address  Details</strong></label>					
				<table>
					<tr>
						<td>
							<?php echo form_label('Address1 :'); ?>			
						</td>
						<td>
							<?php
								$data = array(
							        'name'        => 'pmt_address_line1',
							        'id'          => 'pmt_address_line1',
							        'value'       => set_value('pmt_address_line1'),
							        'rows'        => '4',
							        'cols'        => '19',					        
							        'class'       => 'form-control'
							    );
						    ?>
							<?php echo form_textarea($data); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Address2 :'); ?>			
						</td>
						<td>
							<?php
								$data = array(
							        'name'        => 'pmt_address_line2',
							        'id'          => 'pmt_address_line2',
							        'value'       => set_value('pmt_address_line2'),
							        'rows'        => '4',
							        'cols'        => '19',						        
							        'class'       => 'form-control'
							    );
						    ?>
							<?php echo form_textarea($data); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('City  :'); ?>
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_city', 'name' => 'pmt_city')); ?>					
						</td>	
					</tr>	
					<tr>
						<td>
							<?php echo form_label('State :'); ?>
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_state', 'name' => 'pmt_state')); ?>		
						</td>	
					</tr>
					<tr>
						<td>
							<?php echo form_label('Zipcode  :'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_zipcode', 'name' => 'pmt_zipcode')); ?>		
						</td>	
					</tr>					
					<tr>
						<td>
							<?php echo form_label('Mobile No:'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_mobile_no', 'name' => 'pmt_mobile_no')); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo form_label('Alternate Mobile No:'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_mobile_no1', 'name' => 'pmt_mobile_no1')); ?>
						</td>							
					</tr>
					<tr>
						<td>
							<?php echo form_label('Email  :'); ?>			
						</td>
						<td>
							<?php echo form_input(array('id' => 'pmt_email', 'name' => 'pmt_email')); ?>
						</td>	
					</tr>
				</table>
			</div>
			<div class="address_action">
				<table>
					<tr>
						
						<td>
							<?php
								$data = array(
								        'name'          => 'addresss_check',
								        'id'            => 'addresss_check',
								        'value'         => 'accept',
								        'checked'       => FALSE,
								        'style'         => 'margin:10px'
								);
							?>
							<?php echo form_checkbox($data); ?>
						</td>
						<td>	
							<?php echo form_label('Same as Permanent Address  :'); ?>			
						</td>
						<td>
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
						</td>
						<td>
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
						</td>	
					</tr>
				</table>			
			</div>
	 	<?php echo form_close(); ?>	
 	</div>
 	<div class="education_details">	

		<?php
			$attributes = array('id' => 'education_create');
			 echo form_open('admission/education',$attributes); ?>
			<label><strong>Education details</strong></label>
			<table>
				<tr>
					<td>
						<?php echo form_label('Name of School/College  :'); ?>			
					</td>
					<td>
						<?php echo form_input(array('id' => 'insititute_name', 'name' => 'insititute_name')); ?>		
					</td>	

				</tr>
				<tr>
					<td>
						<?php echo form_label('Board/University :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'board_university', 'name' => 'board_university')); ?>
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Passout year :'); ?>
					</td>
					<td>
						<?php echo form_dropdown('passoutyear',$passoutyear,set_value('passoutyear')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Max Mark :'); ?>
					</td>					
					<td>
						<?php echo form_input(array('id' => 'max_mark', 'name' => 'max_mark')); ?>
					</td>		
						
				</tr>
				<tr>
					<td>
						<?php echo form_label('Mark Scored:'); ?>			
					</td>				
					<td>
						<?php echo form_input(array('id' => 'mark_scored', 'name' => 'mark_scored')); ?>
					</td>								
				</tr>
				<tr>
					<td>
						<?php echo form_label('Remarks:'); ?>			
					</td>
					<td>
							<?php
								$data = array(
							        'name'        => 'remarks',
							        'id'          => 'remarks',
							        'value'       => set_value('remarks'),
							        'rows'        => '4',
							        'cols'        => '19',						        
							        'class'       => 'form-control'
							    );
						    ?>
							<?php echo form_textarea($data); ?>		
						</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
					</td>
					<td>
						<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
					</td>	
				</tr>
			</table>
	 	<?php echo form_close(); ?>	
	</div>
	<div class="gardian_details">	

		<?php
			$attributes = array('id' => 'gardian_create');
			 echo form_open('admission/gardian',$attributes); ?>
			<label><strong>Father /Guardian details</strong></label>
			<table>
				<tr>
					<td>
						<?php echo form_label('Father/Guardian Name :'); ?>			
					</td>
					<td>
						<?php echo form_input(array('id' => 'guardian_name', 'name' => 'guardian_name')); ?>		
					</td>	

				</tr>
				<tr>
					<td>
						<?php echo form_label('Qualification :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'qualification', 'name' => 'qualification')); ?>
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Occupation :'); ?>
					</td>
					<td>
						<?php echo form_input(array('id' => 'occupation', 'name' => 'occupation')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Monthly Income :'); ?>
					</td>					
					<td>
						<?php echo form_input(array('id' => 'income', 'name' => 'income')); ?>
					</td>		
						
				</tr>
				<tr><td><strong>Emergency Details</strong></td></tr>
				<tr>
					<td>
						<?php echo form_label('Emergency contact person:'); ?>			
					</td>				
					<td>
						<?php echo form_input(array('id' => 'contact_person', 'name' => 'contact_person')); ?>
					</td>								
				</tr>
				<tr>
					<td>
						<?php echo form_label('Emergency contact number:'); ?>			
					</td>				
					<td>
						<?php echo form_input(array('id' => 'contact_no', 'name' => 'contact_no')); ?>
					</td>								
				</tr>				
				<tr>
					<td>
						<?php echo form_label('Blood group:'); ?>			
					</td>				
					<td>
						<?php echo form_input(array('id' => 'blood_group', 'name' => 'blood_group')); ?>
					</td>								
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Aadhar No:'); ?>			
					</td>				
					<td>
						<?php echo form_input(array('id' => 'aadhar_no', 'name' => 'aadhar_no')); ?>
					</td>								
				</tr>				
				<tr>
					<td>
						<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
					</td>
					<td>
						<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
					</td>	
				</tr>
			</table>
	 	<?php echo form_close(); ?>	
	</div>
	<div class="other_details">	

		<?php
			$attributes = array('id' => 'other_create');
			 echo form_open('admission/other',$attributes); ?>
			<label><strong>Other Information</strong></label>
			<table>
				<tr>
					<td>
						<?php echo form_label('Certificate is enclosed :'); ?>			
					</td>					
					<td>
						<?php echo form_dropdown('certificate',$options,set_value('certificate')); ?>		
					</td>	

				</tr>
				<tr>
					<td>
						<?php echo form_label('Transfort Required :'); ?>
					</td>
					<td>
						<?php echo form_dropdown('transfort',$options,set_value('transfort')); ?>		
					</td>	
				</tr>
				<tr>
					<td>
						<?php echo form_label('Hostel Required :'); ?>
					</td>
					<td>
						<?php echo form_dropdown('hostel',$options,set_value('guardian_name')); ?>		
					</td>	
				</tr>	
				<tr>
					<td>
						<?php echo form_label('Phycally Challenged  :'); ?>
					</td>					
					<td>
						<?php echo form_dropdown('physically_challenged',$options,set_value('physically_challenged')); ?>		
					</td>		
						
				</tr>
				<tr>
					<td>
						<?php echo form_label('Educational Gap:'); ?>			
					</td>				
					<td>
						<?php echo form_dropdown('educational_gap',$options,set_value('guardian_name')); ?>		
					</td>								
				</tr>				
				<tr>
					<td>
						<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>		
					</td>
					<td>
						<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset')); ?>		
					</td>	
				</tr>
			</table>
	 	<?php echo form_close(); ?>	
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("form#admission_create").submit(function(event) {
   	    var form = $(this);	 
   	    console.log(form.serialize());
	    //e.preventDefault();
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('admissioncreate'); ?>",
	        data: form.serialize(),	        
	        success: function(data){
	        	console.log(data);
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeOut(2000);
	        	$('#reset').trigger('click');
	        	
	        },
	        error: function() { alert("Error posting feed."); }
	   });	    
	    return false;
	});	
	$("form#personal_create").submit(function(event) {
   	    var form = $(this);	 
   	    console.log(form.serialize());
	    //e.preventDefault();
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('personalcreate'); ?>",
	        data: form.serialize(),	        
	        success: function(data){
	        	console.log(data);
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeOut(2000);
	        	$('#reset').trigger('click');
	        	
	        },
	        error: function() { alert("Error posting feed."); }
	   });	    
	    return false;
	});
	$("form#address_create").submit(function(event) {
   	    var form = $(this);	 
   	    console.log(form.serialize());
	    //e.preventDefault();
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('address'); ?>",
	        data: form.serialize(),	        
	        success: function(data){
	        	console.log(data);
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeIn(2000);
	        	$('#reset').trigger('click');	        	
	        },
	        error: function() { alert("Error posting feed."); }
	   });	    
	    return false;
	});
	$("form#education_create").submit(function(event) {
   	    var form = $(this);
   	    form.find('#submit').val('Saving..');   	    
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('education'); ?>",
	        data: form.serialize(),	        
	        success: function(data){	        	
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeIn(2000);
	        	form.find('#reset').trigger('click');	        	
	        	form.find('#submit').val('Save');
	        },
	        error: function() { alert("Error posting feed.");form.find('#submit').val('Save'); }
	   });	    
	    return false;
	});
	$("form#gardian_create").submit(function(event) {
   	    var form = $(this);
   	    form.find('#submit').val('Saving..');   	    
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('gardian'); ?>",
	        data: form.serialize(),	        
	        success: function(data){	        	
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeIn(2000);
	        	form.find('#reset').trigger('click');	        	
	        	form.find('#submit').val('Save');
	        },
	        error: function() { alert("Error posting feed.");form.find('#submit').val('Save'); }
	   });	    
	    return false;
	});
	$("form#other_create").submit(function(event) {
   	    var form = $(this);	 
   	    console.log(form.serialize());
	    //e.preventDefault();
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('other'); ?>",
	        data: form.serialize(),	        
	        success: function(data){
	        	console.log(data);
	        	var response = $.parseJSON(data);
	        	$('.msg').show();	        	
	            $('.msg').text(response.message).fadeIn(2000);
	        	$('#reset').trigger('click');	        	
	        },
	        error: function() { alert("Error posting feed."); }
	   });	    
	    return false;
	});
    $('#addresss_check').click(function(){

		if($("#addresss_check").is(':checked'))
		 {
		 	assignAddress();
		 }
		else
		 {
		 	$('#pmt_address_line1').val('');
		 	$('#pmt_address_line2').val('');
		 	$('#pmt_state').val('');
		 	$('#pmt_city').val('');
		 	$('#pmt_zipcode').val('');
		 	$('#pmt_mobile_no').val('');
		 	$('#pmt_mobile_no1').val('');
		 	$('#pmt_email').val('');	
		 }    	
	});
	$('#address_create').keyup(function(e) {
		if($("#addresss_check").is(':checked'))
		 {		 	
		 	assignAddress();
		 }
	        		        
    });
    function assignAddress(){

	 	$('#pmt_address_line1').val($('#tmp_address_line1').val());
	 	$('#pmt_address_line2').val($('#tmp_address_line2').val());
	 	$('#pmt_state').val($('#tmp_state').val());
	 	$('#pmt_city').val($('#tmp_city').val());
	 	$('#pmt_zipcode').val($('#tmp_zipcode').val());
	 	$('#pmt_mobile_no').val($('#tmp_mobile_no').val());
	 	$('#pmt_mobile_no1').val($('#tmp_mobile_no1').val());
	 	$('#pmt_email').val($('#tmp_email').val());
    }
});
</script>
<style>
.admission_details, .education_details {
    width: 26%;
    display: block;
    float: left;
}
.temp_address_details{
	float:left;
}   
.admission_personal_details, .gardian_details{
	width: 24%;
    float: left;
}
select {
    width: 100%;
    padding: 2px;
}

</style>