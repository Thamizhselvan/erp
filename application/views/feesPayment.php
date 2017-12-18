<div id="page-wrapper">
    <div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Fees Payment</h1>
				<h1 class="page-subhead-line" id="success" style="display:none">This is dummy text , you can replace it with your original text. </h1>

			</div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			                        
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Fees Payment
                        </div>
                        <div class="panel-body">
                            <form role="form" id="feespayment">
                               <div class="col-md-6">  
								   <div class="form-group">
                                            <label >Student Admission No.</label>
                                             <div ><select id="admissionNo" name="admissionNo" class="form-control"  onchange="getStudentDetailsByAdmissionNo()">
													<option value="0">---New---</option>
														<?php foreach($stuList as $count): ?>
													<option value="<?php echo $count->admission_no; ?>"><?php echo $count->sname; ?></option>
														<?php endforeach; ?> 
											</select></div>
                                           
                                 </div>
                               </div>  
                                 <div class="col-md-6">
									 <div class="form-group">
                                            <label >Department</label>
                                            <div><input type="hidden" id="dcode" name="dcode"><input class="form-control"  id="dname" name="dname" type="text" readonly></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Course</label>
                                            <div  ><input type="hidden" id="ccode" name="ccode"><input class="form-control"  id="cname" type="text" readonly></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Semester</label>
                                            <div  ><select id="sem" class="form-control"  onchange="getFeesDetailsBySemester()">
													<option value="0">---Select---</option>
											</select></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                
                                <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Academic Year</label>
                                            <div ><input class="form-control"  id="academicYear" name="academicYear" type="text" readonly></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                 <div class="col-md-6">
			 <div class="form-group">
                    <label >Amount Pay</label>
                    <div><input class="form-control"  id="amountPay" name="amountPay" type="text" onchange="calcBalAmount()"></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>
        <div class="col-md-6">
			 <div class="form-group">
                    <label >Balance Amount</label>
                    <div><input class="form-control"  id="balAmount" name="balAmount" type="text" readonly></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>
        <div class="col-md-6">
			 <div class="form-group">
                    <label >Due Date</label>
                    <div><input class="form-control"  id="dueDt" name="dueDt" type="text" ></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>                  
		   <div class="col-md-6">  
			   <div class="form-group"></div>                                                                               
		   </div>
			  <div class="col-md-12 col-sm-12 col-xs-12">
					<input class="btn btn-info form-control" type="hidden" name="option" id="option" value="save">
						
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="button" class="btn btn-info form-control" value="submit" id="save" onclick="payment(this)">
						<!--<input type="submit" class="btn btn-info form-control" value="submit" id="save">-->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="button" class="btn btn-info form-control" value="Print" id="print" onclick="printfees()" disabled="disabled">
						<!--<a href="paymentreciept" class="btn btn-info form-control" target="_blank" id="printfees">Print</a>-->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="button" value="send" class="btn btn-info form-control" id="send" onclick="sendMail(this)" disabled="disabled">
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="reset" value="Reset" class="btn btn-info form-control">
					</div>
			   </div>
			</form>
        </div>
        </div>
        </div>
		</div>
        <div class="panel panel-danger">
			<div class="row">
				<div class="col-md-12 table-responsive">
					<table  id="mytable"  class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Particulars</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							</tbody>
					</table>
				</div>
				<div class="col-md-12 text-center">
						<ul class="pagination pagination-lg pager" id="myPager"></ul>
				</div>
			</div>
        </div>   
		<div class="panel panel-danger" id="printableArea" style="display:none">
			<div class="row">
			<div class="col-md-12">
				<h3 class="page-head-line">Fees Reciept</h3>
			</div>
		</div>
			<div class="col-md-6">
			 <div class="form-group">
                    <label >Student Name:<span id="sname"></span></label>
             </div>
			</div>
			<div class="col-md-6">
			 <div class="form-group">
                    <label >Course:<span id="course"></span></label>
                    
             </div>
			</div>
			<div class="col-md-6">
			 <div class="form-group">
                    <label >Department:<span id="dept"></span></label>
                    
             </div>
			</div>
			<div class="col-md-6">
			 <div class="form-group">
                    <label >Semester:<span id="semester"></span></label>
                    
             </div>
			</div>
			<div class="col-md-6">
			 <div class="form-group">
                    <label >Due Date:<span id="dueDate"></span></label>
                    
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
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div> 
</div>
