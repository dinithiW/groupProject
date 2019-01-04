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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'ApplicantLogin/index';//this too
$route['login/process'] = 'ApplicantLogin/process';//won't be needing prolly
$route['login/contact'] = 'ApplicantLogin/contact';
$route['register'] = 'ApplicantLogin/register';
$route['addUser'] = 'ApplicantLogin/addUser';
$route['logout']='User/logout';
$route['advertisement']='User/add';


//$route['loginUser'] = 'UsersLogin/index';
//$route['loginUser/process'] = 'UsersLogin/process';


//Management Assistant routes
$route['OperatorIndex'] = 'OperatorDashboard/index';
$route['OperatorIndex/createAd'] = 'OperatorDashboard/ad';
$route['OperatorIndex/emails'] = 'OperatorDashboard/showEmails';
$route['OperatorIndex/sendEmail'] = 'OperatorDashboard/sendAdToSAR';
$route['OperatorIndex/process'] = 'OperatorDashboard/sendEmail';
//this directs to the home of adding a new member
$route['OperatorIndex/addPanelMember'] = 'OperatorDashboard/addPanelMember';
//actual adding
$route['OperatorIndex/addMember'] = 'OperatorDashboard/addMember';

$route['OperatorIndex/addMemberprocess'] = 'OperatorDashboard/addingMember';
//$route['OperatorIndex/editMemberprocess/(:any).*'] = 'OperatorDashboard/editMember/$1/$2';
$route['OperatorIndex/editMemberprocess/(:any)'] = 'OperatorDashboard/editMember/$1';
$route['OperatorIndex/add'] = 'OperatorDashboard/addMemberModel';
$route['OperatorIndex/success'] = 'OperatorDashboard/memberSuccess';
//this will be temporary
$route['OperatorIndex/showTasks/(:any)'] = 'OperatorDashboard/showTaskCount/$1';

$route['OperatorIndex/checkEmailExists'] = "OperatorDashboard/checkEmailExists";
$route['OperatorIndex/editMember/(:any)'] = "OperatorDashboard/editMemberView/$1";
$route['OperatorIndex/deleteMember/(:any)'] = "OperatorDashboard/deleteMemberMsg/$1";
$route['OperatorIndex/deleteMemberProcess/(:any)'] = "OperatorDashboard/deleteMemberModel/$1";
//this is for loading the home page of the candidate selection process
$route['OperatorIndex/viewAll'] = "OperatorDashboard/viewAllCandidates";
//this is for loading the home page of the interview date setting process
$route['OperatorIndex/interviewDate'] = "OperatorDashboard/setInterviewDate";
//to select the vacancy sl or lp
$route['OperatorIndex/categorize'] = "OperatorDashboard/categorizeHome";
//
$route['OperatorIndex/directCategorize'] = "OperatorDashboard/directTo";
$route['OperatorIndex/lpCategory'] = "OperatorDashboard/showLpCategories";
//show all senior lecturer applicants and categorize them
$route['OperatorIndex/seniorLecturer'] = "OperatorDashboard/showSeniorLecturer";
//insert into the sl_selected table (value 1)
$route['OperatorIndex/selectSL/(:any)'] = "OperatorDashboard/addToSelected/$1";
//insert into the sl_selected table (value 0)
$route['OperatorIndex/notSelectSL/(:any)'] = "OperatorDashboard/addToNotSelected/$1";

//SAR routes
$route['SAR']='SARDashboard/index';
$route['reports']='SARDashboard/report';
$route['sendmail']='SARDashboard/sendmail';
$route['sendBulkmail/(:any)']='SARDashboard/sendBulkmails/$1';
$route['setDates']="SARDashboard/setInterviewDates";
$route['candidateList']="SARDashboard/viewCandidates";
$route['SAR/advertisement']="SARDashboard/viewAdvertisement";
$route['applicants']="SARDashboard/viewApplicants";


//Director routes
$route['Director'] = 'DirectorDashboard/index';
$route['Director/adRequest'] = 'DirectorDashboard/adRequest';
$route['Director/approveAd'] = 'DirectorDashboard/approveAd';
$route['Director/viewApplicants'] = 'DirectorDashboard/viewApplicants';
$route['Director/approveSelected'] = 'DirectorDashboard/approveSelected';
$route['Director/approveFinalSet'] = 'DirectorDashboard/approveFinalSet';
$route['Director/setInterviewDate'] = 'DirectorDashboard/setInterviewDate';
$route['Director/insertData'] = 'Directordashboard/insertData';
$route['Director/addMessage'] = 'DirectorDashboard/addNotification';
$route['Director/viewMessage'] = 'DirectorDashboard/viewNotification';
$route['Director/finalize'] = 'DirectorDashboard/finalize';

//panel
$route['Panel'] = 'InterviewPanelDashboard/index';
$route['Panel/viewApplicants'] = 'InterviewPanelDashboard/viewApplicants';
$route['Panel/viewApplicant'] = 'InterviewPanelDashboard/viewMarks';

$route['dashboard'] = 'User/index';
$route['home'] = 'Home/index';

$route['loginUsers'] = 'Login/index';
$route['loginUsers/process'] = 'Login/process';


//goes to the home page of registration
$route['registerUsers'] = 'Register/index';
//directs to the model for registration
$route['registerUsers/process'] = 'Register/process';
//username already exists error message
$route['registerUsers/errorUsername'] = 'Register/errorUsername';
//passwords do not match message
$route['registerUsers/errorPassword'] = 'Register/errorPassword';
//direct to applicant home
$route['registerUsers/home'] = 'Register/applicantHome';
//show registration success message
$route['registerUsers/success'] = 'Register/success';

//applicant start

//directing to applicant home
$route['applicant'] = 'ApplicantDashboard/index';
$route['application_form_fill'] = 'ApplicantDashboard/applicationFirstPage';
$route['application_form_edit'] = 'ApplicationForm/editfileUpload';
$route['application_form_documents'] = 'ApplicantDashboard/applicationFifththPage';
$route['LOGOUT']='User/out';
//applicant end








