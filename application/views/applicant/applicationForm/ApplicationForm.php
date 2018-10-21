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
        
        
    </head>

    <body>
    
        <div id="multistepform-example-container">


            <ul id="multistepform-progressbar">
                <li class="active"><b>Account Setup</b></li>
                <li><b>Social Profiles</b></li>
                <li><b>Personal Details</b></li>
            </ul>

            

            <div class="form">
                <form action="">

                    <h2 class="fs-title">BASIC PERSONAL DETAILS</h2>

                    <h6 class="lables1">Full Name (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="first-name" placeholder="Full Name">

                    <h6 class="lables">Surname (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="last-name" placeholder="Sur Name">

                    <h6 class="lables">Postal Address (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="postal-address" placeholder="Postal Address">

                    <h6 class="lables">Permanent Address  (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="permanent-address" placeholder="Permanent Address">
                    
                    <h6 class="lables">NIC/Driving Licence/Passport No (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="driving-licence" placeholder="NIC/Driving Licence/Passport No">

                    <h6 class="lables">Citizenship (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="applicant-citizenship" placeholder="Citizenship">

                    <h6 class="lables">Personal-Email  (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="permanent-address" placeholder="Personal-Email">
                    
                    <h6 class="lables">Office-Email (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="driving-licence" placeholder="Office-Email">

                    <h6 class="lables">Mobile Number (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="applicant-citizenship" placeholder="Mobile Number">

                    <h6 class="lables">Home Number (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="driving-licence" placeholder="Home Number">

                    <h6 class="lables">Office Number (in capital blocks)</h6>
                    <input type="text"   class="input-fields" name="applicant-citizenship" placeholder="Office Number">

                    

                    <!-- start of the radio buttons-->

                    <div class="radioButtons">
                        
                    </div>

                    <!-- end of the radio buttons-->

                     
                    
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

                   
                    <input type="button"    name="next"  class="next button" value="Next">
                </form>
            </div>

            <div class="form">

                <form action="">
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter">
                    <input type="text" name="facebook" placeholder="Facebook">
                    <input type="text" name="gplus" placeholder="Google Plus">


                    <h4 id="title1">Secondry Educational Details</h4>
            <br/>
                    <div class="table1"><!-- start of the Secondry Educational Details table-->
                        <table id="Table">
                            <tr class="tr">
                                <th>School Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Examination Passed</th>
                                <th>Year</th>
                            </tr>
                            <tr class="tr">
                                <td><input type="text" class="Text1"  required size='45'/></td>
                                <td><input type="text" class="Text2"  required size='5'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                                <td><input type="text" class="Text2"  required size='45'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1"  required size='45'/></td>
                                <td><input type="text" class="Text2"  required size='5'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                                <td><input type="text" class="Text2"  required size='45'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1"  required size='45'/></td>
                                <td><input type="text" class="Text2"  required size='5'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                                <td><input type="text" class="Text2"  required size='45'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1"  required size='45'/></td>
                                <td><input type="text" class="Text2"  required size='5'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                                <td><input type="text" class="Text2"  required size='45'/></td>
                                <td><input type="text" class="Text3"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            
                            </tr>
                        </table>
                    </div><!-- end of the Secondry Educational Details table-->


                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="next" class="next button" value="Next">
                </form>
            </div>

            <div class="form">
                <form action="">
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="lname" placeholder="Last Name">
                    <input type="text" name="phone" placeholder="Phone">
                    <textarea name="address" placeholder="Address"></textarea>
                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="submit" class="next button" value="Finish">
                </form>
            </div>
            
        </div>
    </body>
</html>
