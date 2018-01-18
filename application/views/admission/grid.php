<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/admission.js";?>"></script>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Admission List</h1>
                       
                    </div>
                </div>
                 <div class="panel panel-info">
                <div class="panel-heading">
                          Admission List
                 </div>
                <!-- /. ROW  -->
                <div class="row">
					 	 
						<div class="col-md-12 table-responsive">
						    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick='addAdmission("<?php echo base_url();?>")' >Add New+</button>
                            <table  id="mytable"  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Admission No</th>
                            			<th>Course</th>
                            			<th>Department</th>
                            			<th>Status</th>                            			
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($admissionList as $admission): ?>
                                			<tr>
                                			 <td><?php echo $i; ?></td><td><?php echo $admission->admission_no; ?></td>
                                			 <td><?= $admission->course; ?></td><td><?=$admission->department; ?></td><td><?=($admission->status)? 'Completed':'In-progress'; ?></td>
                                			<td>
                                			    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick='editAdmission(<?php echo $admission->admission_id; ?>,"<?php echo base_url();?>")'><span class="glyphicon glyphicon-pencil"></span></button></p>
                                			</td>
                                			<td>
                                	            <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $admission->admission_id; ?>" onclick="deleteEmployee(this.id)" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                			</tr>
                                            <?php $i++;?>
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
   
