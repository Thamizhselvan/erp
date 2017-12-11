<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['settings']='ProfileSetupImpl';
$route['settings/collegeSettings']='ProfileSetupImpl/collegeSettings';
$route['user']='UserManagementImpl';
$route['user/userAction']='UserManagementImpl/userAction';
$route['user/checkUser']='UserManagementImpl/checkUser';

$route['userprofile']='UserProfileImpl';
$route['userprofile/profileSettings']='UserProfileImpl/profileSettings';
$route['userprofile/userprofile']='UserProfileImpl/userprofile';

$route['department']='CommonImpl/department';
$route['department/departmentAction']='CommonImpl/departmentAction';
$route['department/saveDepartment']='CommonImpl/saveDepartment';
$route['department/updateDepartment']='CommonImpl/updateDepartment';

$route['course']='CommonImpl/course';
$route['course/saveCourse']='CommonImpl/saveCourse';
$route['course/updateCourse']='CommonImpl/updateCourse';
$route['course/getCourse']='CommonImpl/getCourse';
$route['course/courseAction']='CommonImpl/courseAction';


$route['employee']='EmployeeImpl';
$route['employee/list']='EmployeeImpl/empList';
$route['employee/getEmployee']='EmployeeImpl/getEmployee';
$route['employee/employeeAction']='EmployeeImpl/employeeAction';
$route['employee/employeeDelete']='EmployeeImpl/employeeDelete';

$route['payroll']='PayrollImpl';
$route['payroll/allowanceAction']='PayrollImpl/allowanceAction';
$route['payroll/deductionAction']='PayrollImpl/deductionAction';
$route['payroll/leaveAction']='PayrollImpl/leaveAction';

$route['allowance']='PayrollImpl/allowance';
$route['payroll/getAllAllowance']='PayrollImpl/getAllAllowance';
$route['payroll/getAllowance']='PayrollImpl/getAllowance';
$route['deduction']='PayrollImpl/deduction';
$route['payroll/getAllDeduction']='PayrollImpl/getAllDeduction';
$route['payroll/getDeduction']='PayrollImpl/getDeduction';

$route['salaryslip']='SalaryslipImpl';
$route['generateSalaryslip']='SalaryslipImpl/generateSalaryslip';

$route['fees']='FeesImpl';
//$route['fees/(:any)'] = "FeesImpl/index/$1";
$route['fees/getFeesDetails']='FeesImpl/getFeesDetails';
$route['fees/feesAction']='FeesImpl/feesAction';
$route['fees/getCourseByDepartment']='FeesImpl/getCourseByDepartment';
$route['fees/getSemByCourse']='FeesImpl/getSemByCourse';
$route['fees/addFeesAction']='FeesImpl/addFeesAction';

$route['feespayment']='PaymentImpl';
$route['feespayment/paymentAction']='PaymentImpl/paymentAction';
$route['fees/getFeesPaidDetailsByStudent']='PaymentImpl/getFeesPaidDetailsByStudent';
$route['fees/getStudentDetailsByAdmissionNo']='PaymentImpl/getStudentDetailsByAdmissionNo';
$route['fees/getFeesDetailsBySemester']='PaymentImpl/getFeesDetailsBySemester';
$route['feespayment/sendMail']='PaymentImpl/sendMail';

/*admission details*/
$route['admissioncreate'] = 'admission/create';
$route['personalcreate'] = 'admission/personalcreate';
$route['address'] = 'admission/addresscreate';
$route['other'] = 'admission/otherscreate';
$route['gardian'] = 'admission/guardianscreate';
$route['education'] = 'admission/educationcreate';

// dashboard
$route['dashboard'] = 'dashboard/index';
