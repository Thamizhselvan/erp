

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
                            <form role="form">
                               <div class="col-md-6">  
								   <div class="form-group">
                                            <label >Student Admission No.</label>
                                             <div ><select id="admissionNo" class="form-control"  onchange="getStudentDetailsByAdmissionNo()">
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
                                            <div><input type="hidden" id="dcode"><input class="form-control"  id="dname" type="text" readonly></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Course</label>
                                            <div  ><input type="hidden" id="ccode"><input class="form-control"  id="cname" type="text" readonly></div>
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
                                            <div ><input class="form-control"  id="academicYear" type="text" readonly></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                 <div class="col-md-6">
			 <div class="form-group">
                    <label >Amount Pay</label>
                    <div><input class="form-control"  id="amountPay" type="text" onchange="calcBalAmount()"></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>
        <div class="col-md-6">
			 <div class="form-group">
                    <label >Balance Amount</label>
                    <div><input class="form-control"  id="balAmount" type="text" readonly></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>
        <div class="col-md-6">
			 <div class="form-group">
                    <label >Due Date</label>
                    <div><input class="form-control"  id="dueDt" type="text" ></div>
             <!-- <p class="help-block">Help text here.</p> -->
             </div>
        </div>
                              
                                  
                                   <div class="col-md-6">  
									   <div class="form-group"></div>                                                                               
								   </div>
                                    
							          <div class="col-md-12 col-sm-12 col-xs-12">
											 
												<input class="btn btn-info form-control" type="hidden" name="option" id="option" value="save">
											<div class="col-md-3 col-sm-3 col-xs-12"></div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											    <input type="button" class="btn btn-info form-control" value="save" id="save" onclick="payment(this)">
	  
											
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											    <input type="button" value="send" class="btn btn-info form-control" id="send" onclick="sendMail(this)">
											
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12"></div>
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
           
        </div>
             <!--/.ROW-->
             <!-- <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple="" class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Three
                                                </label>
                                            </div>
                                  <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Four
                                                </label>
                                            </div>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Example Three
                                                </label>
                                            </div>
                                        </div>
                            </div>
                        </div>
                            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-default">
                        <div class="panel-heading">
                           OTHER ELEMENTS FOR FORM
                        </div>
                        <div class="panel-body">
                            
                            <form role="form">
                                Some Message Examples
                                <br />
                                        <div class="form-group has-success">
                                            <label class="control-label" for="success">SUCCESS EXAMPLE</label>
                                            <input type="text" class="form-control" id="success" />
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="warning">WARNING EXAMPLE</label>
                                            <input type="text" class="form-control" id="warning" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="error">ERROR EXAMPLE</label>
                                            <input type="text" class="form-control" id="error" />
                                        </div>
                                    </form>
                            <hr>
                            Other Group Examples
                            <br>
                            <form role="form">
                                  <div class="input-group">
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" />
    </div>
<br />
                                           <div class="input-group">
     
      <input type="text" class="form-control" />
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
                                         </form>
                            <hr>
                            <form role="form">
                                            <div class="form-group">
                                                <label for="disabledInput">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled="">
                                            </div>
                                            
                                            
                                    </form>
                            <hr />
                            For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or
                            <a href="http://getbootstrap.com/components/" target="_blank">click here</a> 
                            </div>
                        </div>
                            </div>

        </div>

            </div>-->
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
