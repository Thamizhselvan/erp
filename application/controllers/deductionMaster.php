
<form role="form">
	 <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Deduction</h1>
                       
                    </div>
                </div>
                   <!-- /. ROW  -->
                <div class="row">
			                        
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Deduction
                        </div>
                    <div class="panel-body">
                               <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Department</label>
                                             <div ><select id="dcode" class="form-control">
														<option value="newCourse">---New---</option>
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
														<option value="newCourse">---New---</option>
														<?php foreach($roleList as $count): ?>
														<option value="<?php echo $count->role_id; ?>"><?php echo $count->role_name; ?></option>
														<?php endforeach; ?> 
													</select>
											</div>
                                          
									</div>

                               </div> 
								<div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Academic Year</label>
                                             <div ><select id="academicYear" class="form-control" onchange="getAllDeduction()">
														<option value="newCourse">---New---</option>
														<option value="2016-2017">2016-2017</option>
													</select>
											</div>
									</div>

                               </div> 							   
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Deduction Type</label>
                                            <div ><select id="deductionCode" class="form-control" onchange="getDeduction()">
														<option value="new">---New---</option>
														
													</select>
											</div>
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Deduction</label>
                                            <div  ><input type="text" class="form-control" id="deductionType"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
								<div class="col-md-6">
									 <div class="form-group">
                                            <label >Amount</label>
                                            <div  ><input type="text" class="form-control" id="amount"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>
												<input type="hidden" class="form-control" name="option" id="option" value="save">												
												<input type="button" class="btn btn-info form-control" value="save" id="save" onclick="course(this)">
											</div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>											
												<input type="button" class="btn btn-info form-control" value="update" id="update" onclick="course(this)">
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
                
                <!-- /. ROW  -->
              <!--<div class="panel panel-danger">
                <div class="panel-heading">
                           Allowance
                 </div>
                <div class="row">
					 	 
						<div class="col-md-12 table-responsive">
						    
                            <table  id="mytable"  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Allowance Type</th>
                            			<th>Amount</th>
                                        <th colspan="2">Action</th>
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
           </div>-->
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
