
<form role="form">
	 <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course Details</h1>
                       <h1 class="page-subhead-line" id="success" style="display:none">This is dummy text , you can replace it with your original text. </h1>
                    </div>
                </div>
                   <!-- /. ROW  -->
                <div class="row">
			                        
                <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Course Details
                        </div>
                    <div class="panel-body">
                               <div class="col-md-6"> 
								   <div class="form-group">
                                            <label >Department</label>
                                             <div ><select id="dcode" class="form-control" onchange="getCourseByDept()">
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
                                            <label >Course</label>
                                             <div ><select id="ccode" class="form-control" onchange="getCourse()">
														<option value="newCourse">---New---</option>
														
													</select>
											</div>
                                           <!-- <input class="form-control" type="text"> -->
                                          <!--  <p class="help-block">Help text here.</p> -->
									</div>

                               </div>  
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Course Name</label>
                                            <div  ><input type="text" class="form-control" id="cname"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Duration</label>
                                            <div  ><input type="text" class="form-control" id="duration"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >No.Of Semester</label>
                                            <div  ><input type="text" class="form-control" id="sem"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
                                <div class="col-md-6">
									 <div class="form-group">
                                            <label >Startup Year</label>
                                            <div  ><input type="text" class="form-control" id="startYear"></div>
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
              <div class="panel panel-danger">
                <div class="panel-heading">
                           Course List
                 </div>
                <div class="row">
					 	 
						<div class="col-md-12 table-responsive">
						    
                            <table  id="mytable"  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department</th>
                            			<th>Course</th>
                            			<th>Duration</th>
                            			<th>Startup Year</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($courseLst as $count): ?>
                    			<tr><td><?php echo $count->ccode; ?></td>
                    			 <td><?php echo $count->dname; ?></td>
                    			 <td><?php echo $count->cname; ?></td><td><?php echo $count->duration; ?></td><td><?php echo $count->start_year; ?></td>
                    			<td>
                    			    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                    			</td>
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
