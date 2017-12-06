<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Fees Details</title>
	<script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "<?php echo base_url();?>js/fees.js"></script> 
	<style>
	    .notice_message{
	        display:none;
	    }
	</style>
</head>
<body>
<form id="fees" method="post" action="<?php echo site_url('fees/feesAction');?>">
		  <div class="notice_message"></div>
	  Academic Year:
	  <select name="academicYear" id="academicYear">
	      <?php $year =array('2011-2012','2012-2013','2013-2014','2014-2015','2015-2016','2016-2017');?>
	  <option value="0">---Select---</option>
		  <?php  foreach($year as $value): ?>
		     <option value="<?=$value;?>" <?php if(isset($fees)): echo $fees['academic_year'] == $value ? ' selected="selected"' : '';endif;?>><?=$value; ?></option>
		  <?php endforeach; ?> 
		  
          </select><br>
	  Department
	  <select  name="dcode" id="dcode" onchange="getCourseByDepartment()">
          
		  <?php $dcode =array('ma','bsc');?>
	  <option value="0">---Select---</option>
		  <?php  foreach($dcode as $value): ?>
		     <option value="<?=$value;?>" <?php if(isset($fees)): echo $fees['department_code'] == $value ? ' selected="selected"' : '';endif;?>><?=$value; ?></option>
		  <?php endforeach; ?> 
		  
          </select><br>
	  Course
	  <select name="ccode" id="ccode" onchange="getSemByCourse()">
          
		  <?php $dcode =array('maths','cs');?>
	  <option value="0">---Select---</option>
		  <?php  foreach($dcode as $value): ?>
		     <option value="<?=$value;?>" <?php if(isset($fees)): echo $fees['course_code'] == $value ? ' selected="selected"' : '';endif;?>><?=$value; ?></option>
		  <?php endforeach; ?> 
		  
          </select><br>
	  Semester:
	  <select name="sem" id="sem">
          <?php $dcode =array('1','2');?>
	  <option value="0">---Select---</option>
		  <?php  foreach($dcode as $value): ?>
		     <option value="<?=$value;?>" <?php if(isset($fees)): echo $fees['semester_no'] == $value ? ' selected="selected"' : '';endif;?>><?=$value; ?></option>
		  <?php endforeach; ?> 
          </select><br>
	<table class="std_fees">
		<tr>
			<th>S.No</th>
			<th>Particulars</th>
			<th>Amount</th>
			<th>Action</th>
		</tr>
		
		<?php 
		$flag=false;
    	 $length = 2;
	     if(isset($fees_details))  :
	         $length = count($fees_details);
	         $flag=true;
	     endif;
		  for($i=0;$i<$length;$i++){?>
		    <tr class="fees_particulars">
    			<td>
			        <input type="text" class="sno" name="sno[]" id="sno<?=($i+1);?>" value="<?=($i+1);?>">
		        </td>
    			<td>
			        <input type="text" name="particulars[]" id="particulars<?=($i+1);?>" value="<?=$flag?$fees_details[$i]['particulars']:'';?>">
		        </td>
    			<td>
			        <input type="text" name="amount[]" id="amount<?=($i+1);?>" value="<?=$flag?$fees_details[$i]['amount']:'';?>">
		        </td>
    		</tr>  
		<?php
		    }
		?>
		
		
		<!--<tr>-->
		<!--	<td><input type="text" id="sno" value="2"></td>-->
		<!--	<td><input type="text" id="particulars"></td>-->
		<!--	<td><input type="text" id="amount"></td>-->
		<!--	<td><a href="#">Add</a> || <a href="#">Delete</a></td>-->
		<!--</tr>-->
	</table>
	<a class="addcolumns">Add</a>
	  <input type="hidden" name="id" value="<?php echo $this->uri->segment('3');?>" />
	  
	  <!--<input type="button" value="update" id="update" onclick="addFees(this)">-->
	  <?php if($this->uri->segment('3')):?>
	    <input type="submit" value="update" id="update"  />
	  <?php else:?>
	        <input type="submit" value="save" id="save">
	<?php endif;?>
	 
</form>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.addcolumns").click(function() {
            var lastVal = '';
            $("tr.fees_particulars")
                .last()
                .clone()
                .appendTo($(".std_fees"))
                .find("input.sno").attr("id",function(i,oldVal) {
                   var newVal = oldVal.replace('sno','')
                   lastVal = (+newVal + 1);
                   return 'sno'+lastVal;
                    
                });
             
             $('#sno'+lastVal).val(lastVal);
             $('#sno'+lastVal).parents('tr.fees_particulars').find("input[name^='particular']").val('');
             $('#sno'+lastVal).parents('tr.fees_particulars').find("input[name^='amount']").val('');
            return false;
            
        });
        $('#update').on('click',function(){
            console.log("fasd");
           $('#save').trigger('click');
        });
        
    });
    $(document).on('submit', '#fees', function(event){
        console.log("console");
        $('.notice_message').html('');
       $.ajax({
			type:"POST",
			url:"<?php echo site_url('fees/addFeesAction');?>",
			data:$('#fees').serialize(),
			success:function(data){
			    var response = JSON.parse(data);
			    $('.notice_message').html(response.message);
			    
			    $('.notice_message').show().fadeOut(3000);
				console.log(data);return false;
			}
		});
		return false;
    });
    
</script>
</body>
</html>
