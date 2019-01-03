<?php
  $name = $_SESSION['name'];//for display name in profile
  $pageTitle = "UCSC"; //for display page title
  $role_text = $_SESSION['usertype']; 
  const ROLE_DIRECTOR = "Director";
  const ROLE_MA = "MA";
  const ROLE_SAR = "SAR";
  const ROLE_PANEL = "Panel";
  const ROLE_APPLICANT = "Applicant";
  $role = $_SESSION['usertype'];
?>

<?php
/**
 * this is use for redirect to the main menu when user log out
 */

$this->load->library('session');
$checking = $this->session->userdata('logged_in');


if($checking=='1'){
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->

    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 


    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




<!--start of the header files for the file upload file-->
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormFileUpoload.css')?>" type="text/css"/>
  
<!--end of the header for the file upload file-->






  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>UC</b>SC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Staff Recruitment</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/girl.jpeg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/girl.jpeg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
        
        
      </div>
      
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            
            
            <?php
            if($role == ROLE_MA)
            {
            ?>

            <li class="treeview">
              <a href="<?= base_url('OperatorIndex/createAd') ?>" >
                <i class="fa fa-address-card"></i>
                <span>Create Ad</span>
              </a>
            </li>

            <li class="treeview">
              <a href="" >
                <i class="fa fa-pencil-square-o"></i>
                <span>Edit Application Form</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?= base_url('OperatorIndex/select')?>" >
                <i class="fa fa-users"></i>
                <span>Categorize Applicants</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?=base_url('OperatorIndex/interviewDate')?>" >
                <i class="fa fa-calendar"></i>
                <span>Set Interview Date</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?= base_url('OperatorIndex/addPanelMember') ?>" >
                <i class="fa fa-user-plus"></i>
                <span>Add Panel Members</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#" >
                <i class="fa fa-envelope"></i>
                <span>Send Emails to Applicants</span>
              </a>
            </li>


            <?php
            }
            if($role == ROLE_DIRECTOR)
            {
            ?>
            
            <!-- <li class="treeview">
              <a href="<?php //echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li> -->
            
            <li class="treeview">
              <a href="<?= base_url('Director/adRequest') ?>" >
                <i class="fa fa-audio-description"></i>
                <span>Advertisement Request</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="<?= base_url('Director/approveAd') ?>" >
              <i class="fa fa-adn"></i>
                <span>Approve Advertisement</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="<?= base_url('Director/viewApplicants') ?>" >
                <i class="fa fa-address-card"></i>
                <span>View Applicants</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?= base_url('Director/approveSelected') ?>" >
                <i class="fa fa-address-book"></i>
                <span>Approve Selected</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?= base_url('Director/approveFinalSet') ?>" >
                <i class="fa fa-align-left"></i>
                <span>Approve Final Set</span>
              </a>
            </li>

            <li class="treeview">
              <a href="setInterviewDate" >
                <i class="fa fa-check-square"></i>
                <span>Set Interview Date</span>
              </a>
            </li>



            <?php
            }
            if($role == ROLE_SAR)
            {
            ?>
            <li class="treeview">
              <a href="<?= base_url('SAR/advertisement') ?>">
                <i class="fa fa-users"></i>
                <span>Advertisement</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Applicants</span>
              </a>
            </li>
             <li class="treeview">
              <a href="<?= base_url('candidateList') ?>" >
                <i class="fa fa-files-o"></i>
                <span>Candidates</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?= base_url('setDates') ?>"  >
                <i class="fa fa-files-o"></i>
                <span>Interview Dates</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>View Marks</span>
              </a>
            </li>

             <li class="treeview">
              <a href="<?= base_url('reports') ?>" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>

            <?php
            }
            if($role == ROLE_PANEL)
            {
            ?>
           
            <li class="treeview">
              <a href="<?= base_url('Panel/viewApplicants') ?>" >
                <i class="fa fa-files-o"></i>
                <span>View Applicants</span>
              </a>
            </li>
             <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>View Marks</span>
              </a>
            </li>
             <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Marking Sheet</span>
              </a>
            </li>

            <?php
            }
            if($role == ROLE_APPLICANT)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>application_form_fill">
                <i class="fa fa-files-o"></i>
                <span>Fill Application</span>
              </a>
            </li>
            <li class="treeview">
            <a href="<?php echo base_url(); ?>application_form_edit">
                <i class="fa fa-files-o"></i>
                <span>Edit Application</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url(); ?>application_form_documents">
                <i class="fa fa-files-o"></i>
                <span>File Upload</span>
              </a>
            </li>

            

            
            
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<?php
}
else{
  redirect(base_url()."home");
}
?>