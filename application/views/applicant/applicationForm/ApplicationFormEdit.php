<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="utf-8">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/applicationForm/TestForMultistepForms.css" type="text/css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/applicationForm/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/applicationForm/ApplicationFormPartOne.css" type="text/css"/>
        <script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/TestForMultistepForms.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>

        <!-- --><meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        
        <div id="multistepform-example-container">

            <div class="naigationBar">
                <a href="<?=base_url('ApplicantLogin/applicant')?>" class=""  style="color:yellow; font-size: 30px; margin-left:-50px; ">Home</a>
                <a href= "<?=base_url('ApplicantDashboard/contact')?>" class="" style="color:yellow; font-size: 30px; margin-left:400px; ">Contact</a>
                <a href= "<?=base_url('ApplicantDashboard/logout')?>"  style="color:yellow; font-size: 30px; margin-left:550px;" class="">Logout</a>
               
            </div>

            <ul id="multistepform-progressbar">
                <li class="active"><b>BASIC PERSONAL DETAILS</b></li>
                <li><b>SPECIFICATION AREAS</b></li>
                <li><b>EDUCATIONAL DETAILS</b></li>
                <li><b>PROFESSIONAL DETAILS</b></li>
                <li><b>REFEREES</b></li>
                
            </ul>
            
            
            <form action= "<?= base_url("ApplicationForm/insertBasicPersonalDetailsController")?>" method = "post" >
            
                <div class="form">    
                    <h2 class="fs-title">BASIC PERSONAL DETAILS</h2>

                    <h6 class="lables">Full Name (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="first_name" placeholder="Full Name">

                    <h6 class="lables">Surname (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="last_name" placeholder="Sur Name">

                    <h6 class="lables">Postal Address (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="postal_address" placeholder="Postal Address">

                    <h6 class="lables">Permanent Address  (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="permanent_address" placeholder="Permanent Address">
                    
                    <h6 class="lables">NIC/Driving Licence/Passport No (in capital blocks)</h6>
                    <input type="text" required  class="input-fields" name="driving_licence" placeholder="NIC/Driving Licence/Passport No">

                    <h6 class="lables">Citizenship (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="applicant_citizenship" placeholder="Citizenship">

                    <h6 class="lables">Personal-Email  (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="personalEmail" placeholder="Personal-Email">
                    
                    <h6 class="lables">Office-Email (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="officeEmail" placeholder="Office-Email">

                    <h6 class="lables">Mobile Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="mobile_number" placeholder="Mobile Number">

                    <h6 class="lables">Home Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="home_number" placeholder="Home Number">

                    <h6 class="lables">Office Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="office_number" placeholder="Office Number">

                <!-- start radio buttons -->

                    <h5 id="lableForGender">GENDER</h5>
                    <h5 id="lableForCivilStatus">CIVIL STATUS</h5>
                    <h5 id="labbleForCitizenship">IF A CITIZEN OF SRI LANKA HOW OBTAINED</h5>


                    <div class="custom-sele dropboxGender" style="width:180px; height:100px;">
                        <select name="selectGender">
                            <option value="male">MALE:</option>
                            <option value="female">FEMALE</option>
                        </select>
                    </div>

                    <div class="custom-sele dropboxCivil" style="width:100px; height:50px;">
                        <select name="selectCivilStatus" id="selectCategory">
                            <option value="married">MARRIED</option>
                            <option value="un_married">UN MARRIED</option>
                        </select>
                    </div>

                    <div class="custom-sele dropboxCitizenship" style="width:100px; height:50px;">
                        <select name="selectCitizenship" id="selectCategory">
                            <option value="by_decent">BY DESCENT</option>
                            <option value="by_registration">BY REGISTRATION</option>
                        </select>
                    </div>

                <!-- ends radio buttons -->    

                    <!-- start the calender-->
                    <div class="calender1">
                        <h4 id="birth-date"> Date of Birth</h4>
                        <input type="date" data-date-inline-picker="true"  name="birth_date"/>
                    </div>
                    <!-- end the calender-->

                    <!-- start the age-->
                   <input type="button" name="next"  class="next button " id="firstButton" value="Next">
                </div>
              
            </form>
        </div>
    </body>
</html>
