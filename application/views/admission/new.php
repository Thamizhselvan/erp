<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Admission Details</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                  <!-- /. ROW  -->
                <div class="row">
                  <div class="col-md-12">                     
         <div class="panel panel-info">
                        <div class="panel-heading">
                            Admission Wizard
                        </div>
                        <div class="panel-body">
                             <div id="wizard">
								<h2>Admission</h2>
								<section>
									<div class="notice_msg"><span class="msg"></span></div></label>
									<div class="admission_details">	

		<?php
			$attributes = array('id' => 'admission_create','role'=>'form');
			$attributesinput = array('class' => 'form-control');
			 echo form_open('admission/create',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Admission Mode '); ?>			
					 
						<?php echo form_dropdown('admissionMode',$admission_mode,set_value('admissionMode'),$attributesinput); ?>						
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Admission Number '); ?>
					 
						<?php echo form_input(array('id' => 'dname', 'class' => 'form-control','name' => 'admissionNo')); ?>
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Course :'); ?>
					 
						<?php echo form_dropdown('course',$course,set_value('course'),$attributesinput); ?>		
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Department :'); ?>
				
						<?php echo form_dropdown('department',$department,set_value('department'),$attributesinput); ?>		
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Course Medium :'); ?>			
					
						<?php echo form_dropdown('courseMedium',$courseMedium,set_value('courseMedium'),$attributesinput); ?>		
					</div>
                </div> 
                <div class="col-md-6">  </div>
				<div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>		
					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>		
						</div>
					</div>
                </div> 
				
			</div>
	 	<?php echo form_close(); ?>	
	</div>
                </section>

                <h2>Personal Details</h2>
                <section>
                    <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="admission_personal_details">	

			 <?php
			$attributes = array('id' => 'personal_create');
			 echo form_open('admission/personal',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body ">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Title '); ?>			
					 
						<?php echo form_dropdown('title',$title,set_value('title'),$attributesinput); ?>	
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Student name '); ?>
					 
						<?php echo form_input(array('id' => 'studentname', 'name' => 'studentname','class' => 'form-control')); ?>
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Father name '); ?>
					 
						<?php echo form_input(array('id' => 'father_name', 'name' => 'father_name','class' => 'form-control')); ?>		
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Mother name '); ?>
					 
						<?php echo form_input(array('id' => 'mother_name', 'name' => 'mother_name','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Gender  '); ?>			
					 
						<?php echo form_dropdown('gender',$gender,set_value('gender'),$attributesinput); ?>		
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('DOB  :'); ?>			
					 
						<?php echo form_input(array('id' => 'dob', 'name' => 'dob','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Age  :'); ?>			
					 
						<?php echo form_input(array('id' => 'age', 'name' => 'age','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Nationality  :'); ?>			
					 
						<?php echo form_dropdown('nationality',$nationality,set_value('nationality'),$attributesinput); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Religion  :'); ?>			
					 
						<?php echo form_dropdown('religion',$religion,set_value('religion'),$attributesinput); ?>
					</div>
                </div>
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Category  :'); ?>			
					 
						<?php echo form_dropdown('category',$category,set_value('category'),$attributesinput); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Caste  :'); ?>			
					 
						<?php echo form_dropdown('caste',$caste,set_value('caste'),$attributesinput); ?>	
					</div>
                </div>  
                <div class="col-md-6">  </div>
				<div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>

					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>	
						</div>
					</div>
                </div> 
				
			</div>
	 	<?php echo form_close(); ?>	
	</div>
                </section>

                <h2>Temparory Address Details</h2>
                <section>
                    <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="admission_address_details">	

			 <?php
			$attributes = array('id' => 'address_create');
			 echo form_open('admission/address',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body temp_address_details">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Address1 :'); ?>			
						 
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
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Address2 :'); ?>			
						 
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
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('City  :'); ?>
						 
						<?php echo form_input(array('id' => 'tmp_city', 'name' => 'tmp_city','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('State :'); ?>
						 
						<?php echo form_input(array('id' => 'tmp_state', 'name' => 'tmp_state','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Zipcode  :'); ?>			
						 
						<?php echo form_input(array('id' => 'tmp_zipcode', 'name' => 'tmp_zipcode','class' => 'form-control')); ?>		
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Mobile No  :'); ?>			
						 
						<?php echo form_input(array('id' => 'tmp_mobile_no', 'name' => 'tmp_mobile_no','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Alternate Mobile  No:'); ?>			
						 
						<?php echo form_input(array('id' => 'tmp_mobile_no1', 'name' => 'tmp_mobile_no1','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Email  :'); ?>			
						 
						<?php echo form_input(array('id' => 'tmp_email', 'name' => 'tmp_email','class' => 'form-control')); ?>
					</div>
                </div> 
                 
				
			</div>
			
	 	<?php echo form_close(); ?>	
	</div>
                </section>

                <h2>Permanent Address Details</h2>
                <section>
                    <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="admission_address_details">	

			 <?php
			$attributes = array('id' => 'address_create');
			 echo form_open('admission/address',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body pmt_address_details">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Address1 :'); ?>			
						 
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
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Address2 :'); ?>			
						 
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
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('City  :'); ?>
						 
						<?php echo form_input(array('id' => 'pmt_city', 'name' => 'pmt_city')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('State :'); ?>
						 
						<?php echo form_input(array('id' => 'pmt_state', 'name' => 'pmt_state','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Zipcode  :'); ?>			
						 
						<?php echo form_input(array('id' => 'pmt_zipcode', 'name' => 'pmt_zipcode','class' => 'form-control')); ?>		
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Mobile No  :'); ?>			
						 
						<?php echo form_input(array('id' => 'pmt_mobile_no', 'name' => 'pmt_mobile_no','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Alternate Mobile  No:'); ?>			
						 
						<?php echo form_input(array('id' => 'pmt_mobile_no1', 'name' => 'pmt_mobile_no1','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Email  :'); ?>			
						 
						<?php echo form_input(array('id' => 'pmt_email', 'name' => 'pmt_email','class' => 'form-control')); ?>
					</div>
                </div> 
                <div class="address_action">
                 <div class="col-md-6">  
					<div class="form-group">
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
						 	
							<?php echo form_label('Same as Permanent Address  :'); ?>
					</div>
                </div> 
                <div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>
					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>	
						</div>
					</div>
                </div> 
              </div>
			</div>
			
	 	<?php echo form_close(); ?>	
	</div>
                </section>
                <h2>Education details</h2>
                <section>
                    <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="education_details">	

			 <?php
			$attributes = array('id' => 'education_create');
			 echo form_open('admission/education',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body ">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Name of School/College  :'); ?>			
					 
						<?php echo form_input(array('id' => 'insititute_name', 'name' => 'insititute_name','class' => 'form-control')); ?>		
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Board/University :'); ?>
					 
						<?php echo form_input(array('id' => 'board_university', 'name' => 'board_university','class' => 'form-control')); ?>
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Passout year :'); ?>
					 
						<?php echo form_dropdown('passoutyear',$passoutyear,set_value('passoutyear'),$attributesinput); ?>		
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Max Mark :'); ?>
					 
						<?php echo form_input(array('id' => 'max_mark', 'name' => 'max_mark','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Mark Scored:'); ?>			
					 
						<?php echo form_input(array('id' => 'mark_scored', 'name' => 'mark_scored','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  </div>
                <div class="col-md-12">  
					<div class="form-group">
						<?php echo form_label('Remarks:'); ?>			
					 
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
					</div>
                </div>                 
                
				<div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>

					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>	
						</div>
					</div>
                </div> 
				
			</div>
	 	<?php echo form_close(); ?>	
	</div>  
                </section>
                <h2>Father /Guardian details</h2>
                <section>
                    <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="gardian_details">	

			<?php
			$attributes = array('id' => 'gardian_create');
			 echo form_open('admission/gardian',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body ">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Father/Guardian Name :'); ?>			
					 
						<?php echo form_input(array('id' => 'guardian_name', 'name' => 'guardian_name','class' => 'form-control')); ?>		
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Qualification :'); ?>
					 
						<?php echo form_input(array('id' => 'qualification', 'name' => 'qualification','class' => 'form-control')); ?>
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Occupation :'); ?>
					 
						<?php echo form_input(array('id' => 'occupation', 'name' => 'occupation','class' => 'form-control')); ?>	
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Monthly Income :'); ?>
					 
						<?php echo form_input(array('id' => 'income', 'name' => 'income','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class=" col-md-12">
						<strong>Emergency Details</strong>
						</hr>
                </div>
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Emergency contact person:'); ?>			
					 
						<?php echo form_input(array('id' => 'contact_person', 'name' => 'contact_person','class' => 'form-control')); ?>		
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Emergency contact number:'); ?>			
					
						<?php echo form_input(array('id' => 'contact_no', 'name' => 'contact_no','class' => 'form-control')); ?>	
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Blood group:'); ?>			
					 
						<?php echo form_input(array('id' => 'blood_group', 'name' => 'blood_group','class' => 'form-control')); ?> 
					</div>
                </div> 
                <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Aadhar No:'); ?>			
					 
						<?php echo form_input(array('id' => 'aadhar_no', 'name' => 'aadhar_no','class' => 'form-control')); ?> 	
					</div>
                </div>                 
                <div class="col-md-6">  </div>
				<div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>

					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>	
						</div>
					</div>
                </div> 
				
			</div>
	 	<?php echo form_close(); ?>	
	</div>
               
                </section>
                 <h2>Other Information</h2>
                <section>
                   <div class="notice_msg"><span class="msg"></span></div></label>
									<div class="other_details">	

			<?php
			$attributes = array('id' => 'other_create');
			 echo form_open('admission/other',$attributes); ?>
			<!--<label><strong>Admission</strong></label>-->
			 <div class="panel-body ">
                 <div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Certificate is enclosed :'); ?>			
					 
						<?php echo form_dropdown('certificate',$options,set_value('certificate'),$attributesinput); ?>	
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Transfort Required :'); ?>
					 
						<?php echo form_dropdown('transfort',$options,set_value('transfort'),$attributesinput); ?>		
				    </div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Hostel Required :'); ?>
					 
						<?php echo form_dropdown('hostel',$options,set_value('guardian_name'),$attributesinput); ?>		
					</div>
                </div> 
				<div class="col-md-6">  
					<div class="form-group">
						 <?php echo form_label('Phycally Challenged  :'); ?>
					 
						<?php echo form_dropdown('physically_challenged',$options,set_value('physically_challenged'),$attributesinput); ?>			
					</div>
                </div> 
                 
				<div class="col-md-6">  
					<div class="form-group">
						<?php echo form_label('Educational Gap:'); ?>			
					 
						<?php echo form_dropdown('educational_gap',$options,set_value('guardian_name'),$attributesinput); ?>  		
					</div>
                </div> 
                      
                <div class="col-md-6">  </div>
				<div class="col-md-12">  
					<div class="form-group">
						<div class="col-md-6">
							<?php echo form_submit(array('id' => 'submit', 'value' => 'Save','class'=>'btn btn-info form-control')); ?>

					    </div>
					    <div class="col-md-6">
							<?php echo form_reset(array('id' => 'reset', 'value' => 'Reset','class'=>'btn btn-info form-control')); ?>	
						</div>
					</div>
                </div> 
				
			</div>
	 	<?php echo form_close(); ?>	
	</div>
               
                </section>
            </div>
                             
                        </div>
                    </div>
                 </div>
                </div>  
                   <!-- /. ROW  -->
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
<!--<style>
.admission_details, .education_details {
    /*width: 26%;*/
    display: block;
    float: left;
}
.temp_address_details{
	float:left;
}   
.admission_personal_details, .gardian_details{
	/*width: 24%;*/
    float: left;
}
select {
    /*width: 100%;
    padding: 2px;
}

</style>-->
