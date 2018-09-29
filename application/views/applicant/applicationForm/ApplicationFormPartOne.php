<<!DOCTYPE html>
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
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartOne.css')?>" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div class="outerClass" >
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
                <div class="panel panel-default header">
                    <h3 class="panel-title" id="header">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Basic Personal Details</b></h3>
                </div>

                <form role="form">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first-name" id="first-name" class="form-control input-sm" placeholder="enter your full name in capital blocks in here">
                            </div>

                            <div class="form-group">
                                <input type="text" name="last-name" id="last-name" class="form-control input-sm" placeholder="enter your surname in capital blocks in here">
                            </div>

                            <div class="form-group">
                                <input type="text" name="postal-address" id="postal-address" class="form-control input-sm" placeholder="enter your postal address in here">
                            </div>

                            <div class="form-group">
                                <input type="text" name="permanent-address" id="permanent-address" class="form-control input-sm" placeholder="enter your permanent address in here">
                            </div>

                            <div class="form-group">
                                <input type="text" name="driving-licence" id="driving-licence"   class="form-control input-sm " placeholder="enter your NIC No/ Driving Licence No/Passposrt No ">
                            </div>

                            <div class="form-group">
                                <input type="text" name="applicant-citizenship" id="applicant-citizenship"   class="form-control input-sm " placeholder="enter your citizenship in here">
                            </div>

                            <div class="form-group">
                                <input type="email" name="personal-email" id="personal-email" class="form-control input-sm" placeholder="enter your personal-email address in here">
                            </div>

                             <div class="form-group">
                                <input type="email" name="office-email" id="office-email" class="form-control input-sm" placeholder="enter your office-email address in here">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="mobile-phone" id="mobile-phone" class="form-control input-sm" placeholder="enter your mobile-phone in here ">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="home-phone" id="home-phone" class="form-control input-sm" placeholder="enter your Home-phone number in here ">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="office-phone" id="office-phone" class="form-control input-sm" placeholder="enter your Office-phone number in here ">
                            </div>

                            

                            <div class="btn-group select-gender" data-toggle="buttons">
                                <h4 class="civil-status-form12">GENDER</h4> 
                                <label class="btn btn-primary">
                                    <input type="radio" name="gender" id="male" autocomplete="off"> &nbsp;&nbsp;&nbsp;&nbsp; MALE
                                </label>

                                <label class="btn btn-primary">
                                    <input type="radio" name="gender" id="female" autocomplete="off">FEMALE
                                </label>
                            </div>

                            <div class="btn-group select-status" data-toggle="buttons">
                                    <h4 class="civil-status-form12">CIVIL STATUS</h4> 
                                    <label class="btn btn-primary bb1">
                                        <input type="radio" name="civil-status" id="married" autocomplete="off"> &nbsp;&nbsp;&nbsp;&nbsp; MARRIED
                                    </label>

                                    <label class="btn btn-primary bb2">
                                        <input type="radio" name="civil-status" id="unmarried" autocomplete="off">UNMARRIED
                                    </label>
                            </div>


                            <div class="btn-group select-citizen" data-toggle="buttons">
                                    <h4 class="civil-status-form12">CITIZENSHIP</h4> 
                                    <label class="btn btn-primary bb1">
                                        <input type="radio" name="citizenship" id="by-descent" autocomplete="off"> &nbsp;&nbsp;&nbsp;&nbsp; BY DESCENT
                                    </label>

                                    <label class="btn btn-primary bb2">
                                        <input type="radio" name="citizenship" id="by-registration" autocomplete="off">BY REGISTRATION
                                    </label>
                            </div>

                            <div class="calender">
                                <h4 id="birth-date"> Date of Birth</h4>
                                <input type="date" data-date-inline-picker="true" />
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 age ">
                                <h4 id="currect-age"> Age as at closing date of application</h4> 
                                    <div class="years form-group">
                                        <input type="text" name="years" id="years" class="form-control input-sm" placeholder="years">
                                    </div>
                                    <div class="months form-group">
                                        <input type="text" name="months" id="months" class="form-control input-sm" placeholder="months">
                                    </div>
                                    <div class="days form-group">
                                        <input type="text" name="days" id="days" class="form-control input-sm" placeholder="days">
                                    </div>
                            </div>
                        
                        </div>
                    </div>
                </form>
            </div>
        
    </div>

</body>
</html>
