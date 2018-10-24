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
                <li class="active"><b>BASIC PERSONAL DETAILS</b></li>
                <li><b>SPECIFICATION AREAS</b></li>
                <li><b>EDUCATIONAL DETAILS</b></li>
                <li><b>PROFESSIONAL DETAILS</b></li>
                <li><b>REFEREES</b></li>
                
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
                            <div class="gender"><!-- start of the radio button for gneder-->
                                    <h5 class="selection1"><b>GENDER</b></h5>
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input button1" id="selectGender1" name="GENDER" >
                                        <label class="custom-control-label name1" for="checkGender">MALE</label>
                                    </div>

                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input button2" id="selectGender2" name="GENDER" checked >
                                        <label class="custom-control-label name2" for="checkGender">FEMALE</label>
                                    </div>
                                </div><!-- end of the radio button for gneder-->

                                <div class="civilStatus"><!-- start of the radio button for civil status-->
                                    <h5 id="selection2"><b>CIVIL STATUS</b></h5>
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

                    <!-- end of the radio buttons-->

                     
                    
                    <!-- start the calender-->
                    <div class="calender1">
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

                   
                    <input type="button"    name="next"  class="next button " id="firstButton" value="Next">

                </form>

               
            </div>
<!-- *********************************************************** end the first page************************************************--> 
        <div class="form">
            <form action="">

            <><>

            <input type="button" name="previous" class="previous button" value="Previous">
            <input type="button" name="next" class="next button" value="Next">
            </form>
        </div>
<!-- *********************************************************** start the second page************************************************--> 

            <div class="form">
                <form action="">
                    
                <h4 id="title1">Secondry Educational Details</h4><br/>
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
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                            <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                                <td><input type="text" class="Text"  required size='45'/></td>
                                <td><input type="text" class="Text"  required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            
                            </tr>
                        </table>
                    </div><!-- end of the Secondry Educational Details table-->


                    <h4 id="title2">Higher Educational Details</h4>
                    <div class="table2"><!-- start of the Higher Educational Details table-->
                        <table id="Table">
                            <tr>
                                <th>University / Institution</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Degree Obtained</th>
                                <th>Duration</th>
                                <th>Class</th>
                                <th>Year</th>
                                <th>Index No</th>
                            </tr>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='11'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                                <td><input type="text" class="Text"  required size='4'/></td>
                                <td><input type="text" class="Text"  required size='7'/></td>
                            <td><span class="lblStatus"></span></td>
                            
                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='11'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                                <td><input type="text" class="Text"  required size='4'/></td>
                                <td><input type="text" class="Text"  required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='11'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                                <td><input type="text" class="Text"  required size='4'/></td>
                                <td><input type="text" class="Text"  required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='3'/></td>
                                <td><input type="text" class="Text"  required size='25'/></td>
                                <td><input type="text" class="Text"  required size='11'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                                <td><input type="text" class="Text"  required size='4'/></td>
                                <td><input type="text" class="Text"  required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            </tr>
                        </table>
                    </div><!-- end of the Higher Educational Details table-->
                    <h5 id="note1">Note:Certified copies of the certificates and transcripts should be attached</h5>
                

                   <h4 id="title3">Any Other Qualifications </h4>
                    <div class="table3">
                        <table id="Table">
                            <tr>
                                <th></th>
                                <th>Institution</th>
                                <th>Deploma etc</th>
                                <th>Duration</th>
                                <th>Year</th>
                            </tr>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        1"/></td>
                                <td><input type="text" class="Text"  required size='40'/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        2"/></td>
                                <td><input type="text" class="Text"  required size='40'/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        3"/></td>
                                <td><input type="text" class="Text"  required size='40'/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            

                            </tr>
                        </table>
                    </div>
                    <h5 id="note2">Note:Certified copies of the certificates and transcripts should be attached</h5>


                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="next" class="next button" value="Next">
                </form>
            </div>
<!-- *********************************************************** end the second page************************************************--> 



<!-- *********************************************************** start the third page************************************************--> 
            <div class="form">
                <form action="">

                    <h4 id="title1">Professional Qualifications </h4>
                    <div class="table1"><!-- start of the table1-->
                        <table id="Table">

                            <tr>
                                <th></th>
                                <th>Institution</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Duration</th>
                                <th>Type of Qualifications</th>
                            </tr>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        1"/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='36'/></td>
                            <td><span class="lblStatus"></span></td>

                           <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        2"/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='36'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  required size='5' placeholder="        3"/></td>
                                <td><input type="text" class="Text"  required size='30'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='6'/></td>
                                <td><input type="text" class="Text"  required size='17'/></td>
                                <td><input type="text" class="Text"  required size='36'/></td>
                            <td><span class="lblStatus"></span></td>


                            </tr>
                        </table>
                    </div><!-- end of the table1-->


                    <h4 id="title2">Proficiency in Sinhala/Tamil/English</h4>
                    <h5 id="title3">*******Ability to Work******** | ********* Ability To Teach********</h5>
                    
<!-- start of the dropdown buttons-->

                    <div class="dropdown drop sinhala1" ><!-- start of the dropdown for sinhala-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SINHALA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for sinhala1-->

                    <div class="dropdown drop tamil1" ><!-- start of the dropdown for tamil1-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">TAMIL
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for tamil1-->

                    <div class="dropdown drop english1" ><!-- start of the dropdown for english1-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ENGLISH
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for english1-->

                    <div class="dropdown drop sinhala2" ><!-- start of the dropdown for sinhala2-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SINHALA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for sinhala2-->

                    <div class="dropdown drop tamil2" ><!-- start of the dropdown for tamil2-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">TAMIL
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for tamil2-->

                    <div class="dropdown drop english2" ><!-- start of the dropdown for english2-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ENGLISH
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Very Good</a></li>
                            <li><a href="#">Good</a></li>
                            <li><a href="#">Fair</a></li>
                            <li><a href="#">No Knowledge</a></li>
                        </ul>
                    </div><!-- end of the dropdown for english2-->
<!-- end of the dropdown series-->

                    <h5 id="note1">Note:Indicate your level based on self-evaluation of your ability</h5>

                    <!-- start the text box one-->
                    <div form-group>
                        <input type="text" name="experience" id="experience" class="form-control input-sm" placeholder="                                        Experience relevant to the post applied for (Please indicate the tasks handled with the duration) ">
                    </div>
                    <!-- end the text box one-->

                     <!-- start the text box two-->
                    <div form-group>
                        <input type="text" name="research" id="research" class="form-control input-sm" placeholder="                                        Details of research and publications, If any (if space is insufficient, please append it with appends) ">
                    </div>
                    <!-- end the text box two-->


                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="submit" class="next button" value="Next">
                </form>
            </div>


<!-- *********************************************************** end the third page************************************************--> 


<!-- *********************************************************** start the fourth page************************************************--> 
            <div class="form">
                <form action="">


                <!-- start referee table-->        
            <h4 id="title1">Referees </h4>
                    <div class="content3">
                        <table id="table1">

                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Address</th>
                                <th>Email Address</th>
                                <th>Contact No</th>
                            </tr>

                            <tr class="tr">
                                <td><input type="text" class="Text" placeholder="        1" required size='5'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text" placeholder="        2" required size='5'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text" placeholder="        3" required size='5'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" required size='10'/></td>
                            <td><span class="lblStatus"></span></td>

                            

                            </tr>
                        </table>
                    </div>
    
            <!-- end referee table-->  

                    <!-- notice-->   
                    <h5 id="note1"><b> N.B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When appling for the Academic Posts, one of the referees should be either the Professor or Senior Lecture of the Department of Study in<br> which the applicant had his/her University Education or the Head of the Institution in which the candidate works</b></h5>
                    <!-- notice--> 

                    <!-- other--> 
                    <div form-group>
                            <input type="text" name="other" id="other" class="form-control input-sm" placeholder="                                                                              Any other information that you need like to indicate ">
                    </div> 
                    <!-- other--> 

                    <h4 id="oath">
                        <b>I here by declare that the particulars furnished by me in the application are true and accurate.<br> I am also aware that if any partuculars contains herein are found to be false or incorrect I am<br> liable to disqualification if the inaccuracy is discovered before the selection and dimissal without any compensation if th inaccuracy is discovered after the appointment</b>
                    </h4> 

                     <div class="calender">
                        <input id = "calender1"type="date" data-date-inline-picker="true" />
                    </div>

                    <div class="agreement">
                        <input type="submit" value="I agree"  id ="Agree"class ="btn btn-info btn-block acce">
                    </div> 

                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="submit" class="finish button finish" value="Finish">
                </form>
            </div>

<!-- *********************************************************** end the fourth page************************************************--> 

        </div>
    </body>
</html>
