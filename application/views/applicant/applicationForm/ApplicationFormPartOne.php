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
                    <h3 class="panel-title" id="header">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;BASIC PERSONAL DETAILS</b></h3>
                </div>

                <form role="form">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <br/>
                                <label>First Name</label>
                                <input type="text" name="first-name" id="first-name" class="form-control input-sm" placeholder="enter your full name in capital blocks in here">
                            </div>

                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" name="last-name" id="last-name" class="form-control input-sm" placeholder="enter your surname in capital blocks in here">
                            </div>

                            <div class="form-group">
                                <label>Postal Address</label>
                                <input type="text" name="postal-address" id="postal-address" class="form-control input-sm" placeholder="enter your postal address in here">
                            </div>

                            <div class="form-group">
                                <label>Permanent Address</label>
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

                    <!-- start of the drop downbutton -->        
                            <div class="dropDown">
                                <div class="gender"><!-- start of the radio button for gneder-->
                                    <h5 class="selection1"><b>GENDER</b></h5>
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input button1" id="selectGender" name="GENDER" >
                                        <label class="custom-control-label name1" for="checkGender">MALE</label>
                                    </div>

                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input button2" id="selectGende" name="GENDER" checked >
                                        <label class="custom-control-label name2" for="checkGender">FEMALE</label>
                                    </div>
                                </div><!-- end of the radio button for gneder-->

                                <div class="civilStatus"><!-- start of the radio button for civil status-->
                                    <h5 class="selection2"><b>CIVIL STATUS</b></h5>
                                    <div class="custom-control custom-radio1 ">
                                        <input type="radio" class="custom-control-input button3" id="civil" name="CIVIL" >
                                        <label class="custom-control-label name3" for="checkcivil">MARRIED</label>
                                    </div>

                                    <div class="custom-control custom-radio1 ">
                                        <input type="radio" class="custom-control-input button4" id="civil" name="CIVIL" checked >
                                        <label class="custom-control-label name4" for="checkcivil">UNMARRIED</label>
                                    </div>
                                </div><!-- end of the radio button for civil status-->


                                <div class="citizenship"><!-- start of the radio button for citizenship-->
                                    <h5 class="selection3"><b>IF A CITIZEN OF SRI LANKA HOW OBTAINED</b></h5>
                                    <div class="custom-control customRadio3 ">
                                        <input type="radio" class="custom-control-input button5" id="citizenShip" name="CITY" >
                                        <label class="custom-control-label name5" for="checkcitizenship">BY DESCENT</label>
                                    </div>

                                    <div class="custom-control customRadio3">
                                        <input type="radio" class="custom-control-input button6" id="citizenShip" name="CITY" checked >
                                        <label class="custom-control-label name6" for="checkcitizenship">BY REGISTRATION</label>
                                    </div>
                                </div><!-- end of the radio button for citizenship-->
                            </div>
                    <!-- end of the dropdown button-->

                            <!-- start the calender-->
                            <div class="calender">
                                <h4 id="birth-date"> Date of Birth</h4>
                                <input type="date" data-date-inline-picker="true" />
                            </div>
                            <!-- end the calender-->

                            <!-- start the age-->
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
                            <!--end the age-->
                        
                        </div>
                    </div>
                </form>
            </div>
        
    </div>

</body>
</html>
