

   <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Management</h1>
                        <h1 class="page-subhead-line" id="success" style="display:none">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
			                        
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           User Management
                        </div>
                        <div class="panel-body">
                            <form role="form">
                               <div class="col-md-6">  
								   <div class="form-group">
                                            <label >User</label>
                                             <div ><select id="empId" class="form-control"  onchange="checkUser();getEmployeeDetails()">
													<option value="0">---New---</option>
														<?php foreach($empList as $count): ?>
													<option value="<?php echo $count->emp_id; ?>"><?php echo $count->emp_name; ?></option>
														<?php endforeach; ?> 
											</select></div>
                                           <!-- <input class="form-control" type="text"> -->
                                          <!--  <p class="help-block">Help text here.</p> -->
                                 </div>
                               </div>  
                                 <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Role</label>
                                            <div ><select class="form-control"  id="roleId" disabled="disabled">
												<option class="form-control" value="0">---New---</option>
												<?php foreach($roleList as $count): ?>
												<option value="<?php echo $count->role_id; ?>"><?php echo $count->role_name; ?></option>
												<?php endforeach; ?> 
											</select></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Menus Access</label>
                                            <div class=" col-md-12"> 
                                             <div class="radio1 col-md-6">
												<label>
													<input id="admission" name="menus" value="1" type="checkbox">Admission
												</label>
											</div>
											<div class="radio1 col-md-6" >
												<label>
													<input id="student" name="menus"  value="2" type="checkbox">Student
												</label>
											</div>
											<div class="radio1 col-md-6" >
												<label>
													<input id="staff" name="menus"  value="3" type="checkbox">Staff
												</label>
											</div>
											<div class="radio1 col-md-6" >
												<label>
													<input id="fees" name="menus"  value="4" type="checkbox">Fees
												</label>
											</div>
											<div class="radio1 col-md-6" >
												<label>
													<input id="payment" name="menus"  value="5" type="checkbox">Payment
												</label>
											</div>
											<div class="radio1 col-md-6" >
												<label>
													<input id="user" name="menus"  value="6" type="checkbox">User Management
												</label>
											</div>											
                                            </div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   
                                  
                                   <div class="col-md-6">  
									   <div class="form-group"></div>                                                                               
								   </div>
                                    
							          <div class="col-md-12 col-sm-12 col-xs-12">
											 
												<input class="form-control" type="hidden" name="option" id="option" value="save">
											 
											<div class="col-md-6 col-sm-6 col-xs-12">
											    <input type="button" class="btn btn-info form-control" value="Add User" id="save" onclick="usermanagement(this)">
	 
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
											    <input type="button" value="update" class="btn btn-info form-control" id="update user" onclick="usermanagement(this)">
											</div>
									   </div>
                                    </form>
                            </div>
                        </div>
            </div>
			 
                            </div>
        </div>
            
        </div>
        
