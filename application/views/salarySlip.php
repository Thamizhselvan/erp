
<form role="form">
	 <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Salaryslip</h1>
                       <h1 class="page-subhead-line" id="success" style="display:none">This is dummy text , you can replace it with your original text. </h1>
                    </div>
                </div>
                   <!-- /. ROW  -->
                <div class="row">
			                        
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Salaryslip
                        </div>
                    <div class="panel-body">
                               <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Department</label>
                                             <div ><select id="dcode" class="form-control">
														<option value="0">---Select---</option>
														<?php foreach($deptList as $count): ?>
														<option value="<?php echo $count->dcode; ?>"><?php echo $count->dname; ?></option>
														<?php endforeach; ?> 
													</select>
											</div>
                                           <!-- <input class="form-control" type="text"> -->
                                          <!--  <p class="help-block">Help text here.</p> -->
									</div>

                               </div>
                               <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Role</label>
                                             <div ><select id="roleId" class="form-control">
														<option value="0">---Select---</option>
														<?php foreach($roleList as $count): ?>
														<option value="<?php echo $count->role_id; ?>"><?php echo $count->role_name; ?></option>
														<?php endforeach; ?> 
													</select>
											</div>  
									</div>
                               </div> 
							   <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Employee</label>
                                             <div ><select id="roleId" class="form-control">
														<option value="0">---Select---</option>
														<?php foreach($empList as $count): ?>
														<option value="<?php echo $count->emp_id; ?>"><?php echo $count->emp_name; ?></option>
														<?php endforeach; ?> 
													</select>
											</div>
									</div>
                               </div> 
								<div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Academic Year</label>
                                             <div ><select id="academicYear" class="form-control" onchange="getAllAllowance()">
														<option value="0">---Select---</option>
														<option value="2016-2017">2016-2017</option>
													</select>
											</div>
									</div>

                               </div> 							   
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Month</label>
                                            <div ><select id="month" class="form-control" >
														<option value="0">---Select---</option>
														<?php
														$month = array( 1=>'JAN', 2=>'FEB', 3=>'MAR', 4=>'APR', 5=>'MAY',6=>'JUN',7=>'JUL',8=>'AUG',9=>'SEP',10=>'OCT',11=>'NOV',12=>'DEC');
														while (list($key, $value) = each($month)) { 
														?>
															<option value="<?php echo $key?>"><?php echo $value?></option>
														<?php } ?>
													</select>
													<select id="month" class="form-control" >
														<option value="0">---Select---</option>
														<?php
															for( $year=2010;$year<=2017;$year++ ) {?>
																<option value="<?php echo $year?>"><?php echo $year?></option>
														<?php } ?>
													</select>
											</div>
											
                                     </div>
                                </div>
                                
								
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
                                
                                
                                <div class="col-md-12">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>
												<input type="hidden" class="form-control" name="option" id="option" value="save">												
												<input type="button" class="btn btn-info form-control" value="generate" id="generate" onclick="salaryslip()">
											</div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>											
												<input type="button" class="btn btn-info form-control" value="send" id="send" onclick="send(this)">
											</div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-3"></div>   
                                </div> 
                    </div>
                
                        </div>
                      </div>
                </div>   
		      </div>
        </div>
     </div>
</form> <!--     
<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Employee Details</title>
	<script type = 'text/javascript' src = "../../js/jquery-3.1.1.js"></script> 
	<script type = 'text/javascript' src = "../../js/global.js"></script> 
</head>
<body>
<form>
	-->
	 
	
	 
	  
<!--</form>
</body>
</html>
-->
