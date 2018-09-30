<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartTwo.css')?>" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
            <h3 class="panel-title" id="header1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM  Basic Personal Details</b></h3>
            
            
            <!-- start of the form-->
            <form role="form">
                <div class="lec">
                    <h5 class="selection"><b>POSTS APPLIED FOR</b></h5>
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="probationaryLecture" name="lecture" >
                        <label class="custom-control-label name1" for="checkLecture">LECTURER(PROBATIONARY)</label>
                    </div>

                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="lecture" checked >
                        <label class="custom-control-label name2" for="checkLecture">SENIOR LECTURE GR. II</label>
                    </div>
                </div>
            </form>
            <!-- end of the form-->
        </div>
    </div>
    
</body>
</html>