
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Dashboard"><font face="verdana" color="green">w</font>ERP</a>
            </div>

            <div class="header-right">

                <a href="#message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="#message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="Welcome" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?php echo base_url() ?>assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                               login name
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="<?php echo site_url('dashboard');?>"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="admission"><i class="fa fa-desktop "></i>Admission </a>
                    </li>
                    <li>
                        <a href="studentDashboard"><i class="fa fa-desktop "></i>Student Details </a>
                    </li>
                    <li>
                        <a href="EmployeeDashboard"><i class="fa fa-desktop "></i>Staff Details </a>
                    </li>
                    <li>
                       
                        <a href="#"><i class="fa fa-yelp "></i>Fee Payment <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <!--<li>
                                <a href="fees"><i class="fa fa-coffee"></i>Create Fees</a>
                            </li>-->
                            <li>
                                <a href="fees"><i class="fa fa-flash "></i>Add Fees</a>
                            </li>
                             <li>
                                <a href="feespayment"><i class="fa fa-key "></i>Pay Fees</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Payroll<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="allowance"><i class="fa fa-coffee"></i>Allowance Type</a>
                            </li>
                            <li>
                                <a href="deduction"><i class="fa fa-flash "></i>Deduction Type</a>
                            </li>
                             <li>
                                <a href="annualLeave"><i class="fa fa-key "></i>Annual Leave</a>
                            </li>
                            <!-- <li>
                                <a href="addTax.php"><i class="fa fa-send "></i>Tax</a>
                            </li>-->
                            
                             <li>
                                <a href="salaryslip"><i class="fa fa-recycle "></i>Generate Payslip</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Setup<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="department"><i class="fa fa-coffee"></i>Department</a>
                            </li>
                            <li>
                                <a href="course"><i class="fa fa-flash "></i>Course</a>
                            </li>
                             <li>
                                <a href="role"><i class="fa fa-key "></i>Role</a>
                            </li>
                           <li>
                                <a href="settings"><i class="fa fa-key "></i>College Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="userprofile"><i class="fa fa-desktop "></i>Profile Setup </a>
                    </li>
                    <li>
                        <a href="user"><i class="fa fa-yelp "></i>User Management</a><!--<span class="fa arrow"></span>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="user"><i class="fa fa-coffee"></i>Add User</a>
                            </li>
                            <li>
                                <a href="updateUser"><i class="fa fa-flash "></i>Update User</a>
                            </li>
                             
                        </ul>-->
                    </li>
                    
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
    
