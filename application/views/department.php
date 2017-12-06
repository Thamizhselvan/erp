
<form role="form">
	 <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Department Details</h1>
                       
                    </div>
                </div>
                   <!-- /. ROW  -->
                <div class="row">
			                        
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Department Details
                        </div>
                    <div class="panel-body">
                               <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Department</label>
                                             <div ><select id="dcode" class="form-control" onchange="getDepartment()">
														<option value="newCourse">---New---</option>
														
													</select>
											</div>
                                           <!-- <input class="form-control" type="text"> -->
                                          <!--  <p class="help-block">Help text here.</p> -->
									</div>

                               </div>
                                
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Department Name</label>
                                            <div  ><input type="text" class="form-control" id="dname"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                
                                <div class="col-md-12">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>
												<input type="hidden" class="form-control" name="option" id="option" value="save">												
												<input type="button" class="btn btn-info form-control" value="Add" id="save" onclick="department(this)">
											</div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-3">
									 <div class="form-group">                                            
                                            <div>											
												<input type="hidden" class="btn btn-info form-control" value="update" id="update" onclick="department(this)">
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
              <div class="panel panel-danger">
                <div class="panel-heading">
                           Department List
                 </div>
                <div class="row">
					 	 
						<div class="col-md-12 table-responsive">
						    
                            <table  id="mytable"  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department</th>
                            			
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($deptList as $count): ?>
                    			<tr><td><?php echo $count->dcode; ?></td>
                    			 <td><?php echo $count->dname; ?></td>
                    			 
                    			<!--<td>
                    			    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                    			</td>-->
                    			<td>
                    	            <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    			</tr>
                    			<?php endforeach; ?>
                                                    </tbody>
                            </table>
                        </div>
				<div class="col-md-12 text-center">
						<ul class="pagination pagination-lg pager" id="myPager"></ul>
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
