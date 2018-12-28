<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>UCSC</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <style>
      body{
        background-color: green;
      }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>University of Colombo School of Computing</b><br>Academic Staff Recruitment</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign Up</p>
        <!-- <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?> -->
        
        <!-- change thhe url here -->
        <form action="<?php echo base_url("registerUsers/process"); ?>" method="post">

          <div class="form-group">
            <!-- add labels here -->
            <label for="lname">Name With Initials</label>
            <input type="text" class="form-control" placeholder="Name with initials" name="fullname" required />
           <!--  <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
          </div>

          <div class="form-group">
            <label for="lname">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" required />
           <!--  <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
          </div>

          <div class="form-group">
            <label for="lname">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="psw" required />
           <!--  <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
          </div>
       
          <div class="form-group">
            <label for="lname">Repeat Password</label>
            <input type="password" class="form-control" placeholder="Repeat Password" name="pswRepeat" required />
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
          </div>

          <div class = "row">
            <div class="form-group col-xs-4 text-center">
              <input type="submit" class="btn btn-success btn-block btn-flat " value="Sign Up" />

            </div><!-- /.col -->
          </div>
        </form>
      </div>
        <br>
       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>