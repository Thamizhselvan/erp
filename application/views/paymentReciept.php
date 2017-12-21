   <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SRM College of Education</h1>
						<!--<span> #1, 1st Cross Street, Ariyalur</span>-->
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
			                        
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Payment Reciept
                        </div>
                        <div class="panel-body">
                            <form role="form">
                               <div class="panel panel-danger" id="printArea">
								
								<div class="col-md-6">
								 <div class="form-group">
										<label >Student Name:<span id="sname"><?php echo $payment['sname']?></span></label>
								 </div>
								</div>
								<div class="col-md-6">
								 <div class="form-group">
										<label >Course:<span id="course"><?php echo $payment['cname']?></span></label>
										
								 </div>
								</div>
								<div class="col-md-6">
								 <div class="form-group">
										<label >Department:<span id="dept"><?php echo $payment['dname']?></span></label>
										
								 </div>
								</div>
								<div class="col-md-6">
								 <div class="form-group">
										<label >Semester:<span id="semester"><?php echo $payment['sem']?></span></label>
										
								 </div>
								</div>
								<div class="col-md-6">
								 <div class="form-group">
										<label >Due Date:<span id="dueDate"><?php echo $payment['due_dt']?></span></label>
										
								 </div>
								</div>
								<div class="row">
									<div class="col-md-12 table-responsive">
										<table  id="mytable1"  class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Particulars</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
												<?php $count=1; 
												foreach($particulars as $x => $x_value) {?>
													<tr>
														<th><?php echo $count ?></th>
														<th><?php echo $x ?></th>
														<th><?php echo $x_value ?></th>
														
													</tr>
												<?php $count++; } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>                 
		   <div class="col-md-6">  
			   <div class="form-group"><input type="button" class="btn btn-info form-control" value="Print" id="print" onclick="printfees()"></div>                                                                               
		   </div>
			</form>
        </div>
      </div>
     </div>
	</div>
   </div>
</div>
