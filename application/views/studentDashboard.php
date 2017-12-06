<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student Details</h1>
                       
                    </div>
                </div>
                 <div class="panel panel-info">
                <div class="panel-heading">
                          Student Details
                 </div>
                <!-- /. ROW  -->
                <div class="row">
					 	 
						<div class="col-md-12 table-responsive">
						    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="addEmployee()" >Add New+</button>
                            <table  id="mytable"  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Name</th>
                            			<th>Qualification</th>
                            			<th>Designation</th>
                            			<th>Date of Joining</th>
                            			<th>Mobile</th>
                            			<th>Email</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($empLst as $count): ?>
			<tr>
			 <td><?php echo $count->emp_id; ?></td><td><?php echo $count->emp_name; ?></td>
			 <td><?php echo $count->qualification; ?></td><td><?php echo $count->role_name; ?></td><td><?php echo $count->doj; ?></td>
			 <td><?php echo $count->mobile; ?></td><td><?php echo $count->email; ?></td>
			 
			<td>
			    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="editEmployee()"><span class="glyphicon glyphicon-pencil"></span></button></p>
			</td>
			<td>
	            <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $count->emp_id; ?>" onclick="deleteEmployee(this.id)" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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
        <!-- /. PAGE WRAPPER  -->
   
