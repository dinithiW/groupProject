<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>jQuery Multi Step Form Demo</title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url();?>/assets/js/TestForMultistepForms.js" ></script>
        <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/TestForMultistepForms.css')?>" type="text/css"/>
        
    
    </head>


    <body>

          
          <div id="multistepform-example-container">
              <ul id="multistepform-progressbar">
                  <li class="active">Account Setup</li>
                  <li>Social Profiles</li>
                  <li>Personal Details</li>
              </ul>
              <div class="form">
                  <form action="">
                      
                  <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <br/>
                                <label>Full Name (In Capital Blocks) </label>
                                <input type="text" name="first-name" id="first-name" class="form-control input-sm" placeholder="Full Name">
                            </div>
                            
                            <div class="form-group">
                                <label>Surname (In Capital Blocks) </label>
                                <input type="text" name="last-name" id="last-name" class="form-control input-sm" placeholder="Surname">
                            </div>

                            <div class="form-group">
                                <label>Postal Address </label>
                                <input type="text" name="postal-address" id="postal-address" class="form-control input-sm" placeholder="Postal Address">
                            </div>

                            <div class="form-group">
                                <label>Permanent Address </label>
                                <input type="text" name="permanent-address" id="permanent-address" class="form-control input-sm" placeholder="Permanent Address">
                            </div>

                            <div class="form-group">
                                <label>NIC/Driving Licence/Passport No</label>
                                <input type="text" name="driving-licence" id="driving-licence"   class="form-control input-sm " placeholder="NIC/Driving Licence/Passport No">
                            </div>

                            <div class="form-group">
                                <label>Citizenship </label>
                                <input type="text" name="applicant-citizenship" id="applicant-citizenship"   class="form-control input-sm " placeholder="Citizenship ">
                            </div>

                            <div class="form-group">
                                <label>Personal-Email </label>
                                <input type="email" name="personal-email" id="personal-email" class="form-control input-sm" placeholder="Personal-Email ">
                            </div>

                             <div class="form-group">
                                <label>Office-Email</label>
                                <input type="email" name="office-email" id="office-email" class="form-control input-sm" placeholder="Office-Email">
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="tel" name="mobile-phone" id="mobile-phone" class="form-control input-sm" placeholder="Mobile Number">
                            </div>

                            <div class="form-group">
                                <label>Home Number </label>
                                <input type="tel" name="home-phone" id="home-phone" class="form-control input-sm" placeholder="Home Number">
                            </div>

                            <div class="form-group">
                                <label>Office Number </label>
                                <input type="tel" name="office-phone" id="office-phone" class="form-control input-sm" placeholder="Office Number  ">
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

                      <input type="button" name="next" class="next button" value="Next">
                  </form>
              </div>

          <div class="form">
              <form action="">
                  <h2 class="fs-title">Social Profiles</h2>
                  <h3 class="fs-subtitle">Your presence on the social network</h3>
                  <input type="text" name="twitter" placeholder="Twitter">
                  <input type="text" name="facebook" placeholder="Facebook">
                  <input type="text" name="gplus" placeholder="Google Plus">
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
