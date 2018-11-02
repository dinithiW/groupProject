<!-- edited 
db_query_builder->1684  
DB_driver ->691
-->
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

                <!-- start gender -->

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

                    

                
<!--                    <div class="lables3">
                        <h5 id="lab1">GENDER</h5>
                        <h5 class="lables3" id="lables3id1">MALE</h5>
                        <h5 class="lables3" id="lables3id2">FEMALE</h5>
                        
                    </div>
-->
<!--
                    <div class ="rad1">
                        <input type="radio"   id="radioGender1" name="gender" valule="men" >
                        <input type="radio"   id="radioGender2" name="gender" valule="woman">
                    </div>
-->

                    <!-- start of the dropdown for tamil2-->
                    

                    <!-- end of the dropdown for tamil2-->

                

                <!-- end gender -->

                <!-- start civil status -->
 <!--               
                    <div class="lables4">
                        <h5 id="lab2">CIVIL STATUS</h5>
                        <h5 class="lables4" id="lables4id1">MARRIED</h5>
                        <h5 class="lables4" id="lables4id2">UN MARRIED</h5>
                        
                    </div>
-->
<!--
                    <div class ="rad2">
                        <input type="radio"   id="radioCivil1" name="civil_status" >
                        <input type="radio"   id="radioCivil2" name="civil_status" >
                    </div>
-->
                    

                        

                <!-- end civil status -->


                <!-- start citizenship -->
<!--
                   <div class="lables5">
                        <h5 id="lab3">IF A CITIZEN OF SRI LANKA HOW OBTAINED</h5>
                        <h5 class="lables5" id="lables5id1">BY DESCENT</h5>
                        <h5 class="lables5" id="lables5id2">BY REGISTRATION</h5>
                        
                    </div>
-->
<!--
                    <div class="custom-sele gend" style="width:150px; height:100px;">
                        <select name="gender">
                            <option value="male">maried:</option>
                            <option value="female">un marid</option>
                        </select>
                    </div>
-->
<!--
                    <div class ="rad3">
                        <input type="radio"   id="radioCitizen1" name="citizen" >
                        <input type="radio"   id="radioCitizen2" name="citizen" >
                    </div>
-->                    
                <!-- end citizenship -->    
                
                    
                    <!-- start the calender-->
                    <div class="calender1">
                        <h4 id="birth-date"> Date of Birth</h4>
                        <input type="date" data-date-inline-picker="true"  name="birth_date"/>
                    </div>
                    <!-- end the calender-->

                    <!-- start the age-->
                   <input type="button" name="next"  class="next button " id="firstButton" value="Next">
                </div>
<!-- *********************************************************** end the first page************************************************--> 
            <div class="form">
                <div class="tableClass">
                    <fieldset style="width: 600px"><!-- start of the fieldset-->
                        <legend id="header1">
                            FOR SELECTED  SPECIFICATION AREAS
                        </legend>
                        
                        <table ><!-- start of the fieldset-->
                            <tr>
                                <div class="tableLable">AREA NAME<div>
                            </tr>

                            
                            <?php /*add for loop for make the match with the relevent numbers*/ 
                                if($fetch_data->num_rows() > 0){  
                                    foreach($fetch_data->result() as $row){  
                            ?>             
                                        <tr>
                                            
                                            <td><input class="areas" type="checkbox" name="vehicle" id="checkBox" value=""></td>
                                            <td >
                                                <div class="areasForSelection" align="left"><?php echo $row->AREA_NAME;?></div>
                                            </td>
                                        </tr>
                            <?PHP
                                    }  
                                }  
                            ?> 
                        </table><!-- end of the table-->

                    

                    </fieldset><!-- end of the fieldset-->
                </div>

                <input type="button" name="previous" class="previous button" value="Previous">
                <input type="button" name="next" class="next button" value="Next">
                
            </div>
<!-- *********************************************************** start the second page************************************************--> 

            <div class="form">
                
<!--start of the css file for the drop down -->

<style>
    /*the container must be positioned relative:*/
    .custom-select {
        position: relative;
        font-family: Arial;
    }
    .custom-select select {
        display: none; /*hide original SELECT element:*/
    }
    .select-selected {
        background-color: DodgerBlue;
    }
    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }
    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }
    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
    }
    /*style items (options):*/
    .select-items {
        position: absolute;
        background-color: DodgerBlue;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }
    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }
    .select-items div:hover, .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>

<!--end of the css file for the drop down -->


<!--start of the javascript file for the drop down -->
<script>

    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");

    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");

        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;

                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");

                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);

        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
            });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } 
            else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>

<!--end of the javascript file for the drop down -->

                <div class="checkBoxForPostSelectionHeader"> 
                    <h5 id="lab3" >POSTS APPLIED FOR</h5>
                </div>


                <div class="custom-sele dropboxSelectPost" style="width:100px; height:50px;">
                    <select name="postApplyFor" id="selectCategory1">
                        <option value="probationary">LECTURER(PROBATIONARY)</option>
                        <option value="senior">SENIOR LECTURE GR. II</option>
                    </select>
                </div>

                <div class="custom-select " style="width:300px; height:50px;">
                   <select name="selectDegree" id="selectCategory">
                        <option value="0">Select Degree Category:</option>
                        <option value="bachelore_of_science">Bachelore of science</option>
                        <option value="bachelore_of_computer_science">Bachelore of Computer Science</option>
                        <option value="bachelore_of_arts">Bachelore of Arts</option>
                    </select>
                </div>

                
                <h4 id="secondryEducationalTitle">Secondry Educational Details</h4><br/>
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
                                <td><input type="text" class="Text"  name="secondary_educational_school_name1" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_from1" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_to1" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_examination1" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_year1" size='5'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  name="secondary_educational_school_name2" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_from2" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_to2" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_examination2" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_year2" size='5'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  name="secondary_educational_school_name3" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_from3" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_to3" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_examination3" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_year3" size='5'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text"  name="secondary_educational_school_name4" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_from4" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_to4" size='8'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_examination4" size='42'/></td>
                                <td><input type="text" class="Text"  name="secondary_educational_year4" size='5'/></td>
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

                                <td><input type="text" class="Text" name="heigher_educational_university1"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_from1"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_to1"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_degree_obtained1"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_duration1"  size='11'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_class1" size='13'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year1"  size='4'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year_no1"  size='7'/></td>
                            
                            <td><span class="lblStatus"></span></td>
                            
                            <tr class="tr">

                                <td><input type="text" class="Text" name="heigher_educational_university2"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_from2"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_to2"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_degree_obtained2"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_duration2"  size='11'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_class2" size='13'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year2"  size='4'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year_no2"  size='7'/></td>

                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">

                                <td><input type="text" class="Text" name="heigher_educational_university3"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_from3"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_to3"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_degree_obtained3"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_duration3"  size='11'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_class3" size='13'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year3"  size='4'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year_no3"  size='7'/></td>

                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">

                                <td><input type="text" class="Text" name="heigher_educational_university4"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_from4"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_to4"  size='3'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_degree_obtained4"  size='25'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_duration4"  size='11'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_class4" size='13'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year4"  size='4'/></td>
                                <td><input type="text" class="Text" name="heigher_educational_year_no4"  size='7'/></td>

                            <td><span class="lblStatus"></span></td>

                            </tr>
                        </table>
                    </div><!-- end of the Higher Educational Details table-->
                    <h5 id="note1">Note:Certified copies of the certificates and transcripts should be attached</h5>
                

                   <h4 id="title3">Any Other Qualifications </h4>
                    <div class="table3">
                        <table id="Table">
                            <tr>
                                
                                <th>Institution</th>
                                <th>Deploma etc</th>
                                <th>Duration</th>
                                <th>Year</th>
                            </tr>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" name="any_other_qualifications_university1"  size='50'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_deploma1"  size='32'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration1"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_year1"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" name="any_other_qualifications_university2"  size='50'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_deploma2"  size='32'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration2"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_year2"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                               
                                <td><input type="text" class="Text" name="any_other_qualifications_university3"  size='50'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_deploma3"  size='32'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration3"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_year3"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>

                        </table>
                    </div>
                    <h5 id="note2">Note:Certified copies of the certificates and transcripts should be attached</h5>


                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="button" name="next" class="next button" value="Next">
                
            </div>
<!-- *********************************************************** end the second page************************************************--> 



<!-- *********************************************************** start the third page************************************************--> 
            <div class="form">
                

                    <h4 id="title1">Professional Qualifications </h4>
                    <div class="table1"><!-- start of the table1-->
                        <table id="Table">

                            <tr>
                                
                                <th>Institution</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Duration</th>
                                <th>Type of Qualifications</th>
                            </tr>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" name="any_other_qualifications_institution1"  size='30'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_from1"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_to1"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration1"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_type_of_qualification1"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>    

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" name="any_other_qualifications_institution2"  size='30'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_from2"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_to2"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration2"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_type_of_qualification2"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" name="any_other_qualifications_institution3"  size='30'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_from3"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_to3"  size='6'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_duration3"  size='17'/></td>
                                <td><input type="text" class="Text" name="any_other_qualifications_type_of_qualification3"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>
                        </table>
                    </div><!-- end of the table1-->


                    <h4 id="title2">Proficiency in Sinhala/Tamil/English</h4>
                    <h5 id="title3">*******Ability to Work************ | ********* Ability To Teach********</h5>
                    
<!-- start of the dropdown buttons-->
                    
                
                    <!-- start of the dropdown for sinhala-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="work_sinhala">
                            <option value="sinhala">Sinhala:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for sinhala1-->

                   <!-- start of the dropdown for tamil1-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="work_english">
                            <option value="0">English:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for tamil1-->

                    <!-- start of the dropdown for english1-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="work_tamil">
                            <option value="0">Tamil:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for english1-->

                    <!-- start of the dropdown for sinhala2-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="teach_sinhala">
                            <option value="0">Sinhala:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                   <!-- end of the dropdown for sinhala2-->

                    <!-- start of the dropdown for tamil2-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="teach_english">
                            <option value="0">English:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for tamil2-->

                    <!-- start of the dropdown for english2-->
                    <div class="custom-select" style="width:300px; height:50px;">
                        <select name="teach_tamil">
                            <option value="0">Tamil:</option>
                            <option value="verygood">Very Good</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="no_knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for english2-->
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
                
            </div>


<!-- *********************************************************** end the third page************************************************--> 


<!-- *********************************************************** start the fourth page************************************************--> 
            <div class="form">
                


                <!-- start referee table-->        
                <h4 id="title1">Referees </h4>
                    <div class="content3">
                        <table id="table1">

                            <tr>
                                
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Address</th>
                                <th>Email Address</th>
                                <th>Contact No</th>
                            </tr>

                            
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" placeholder="" name="referees_name1" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_designation1" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_address1" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_email1" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_contact1" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" placeholder="" name="referees_name2" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_designation2" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_address2" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_email2" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_contact2" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>

                            <tr class="tr">

                                <td><input type="text" class="Text" placeholder="" name="referees_name3" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_designation3" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_address3" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_email3" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" name="referees_contact3" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>
                            </tr>
                        </table>
                    </div>

            <!-- end referee table-->  

                    <!-- notice-->   
                    <h5 id="note1"><b> N.B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When appling for the Academic Posts, one of the referees should be either the Professor or Senior Lecture of the Department of Study in<br> which the applicant had his/her University Education or the Head of the Institution in which the candidate works</b></h5>
                    <!-- notice--> 

                    <!-- other--> 
                    <div form-group>
                            <input type="text" name="other_details" id="other" class="form-control input-sm" placeholder="                                                                              Any other information that you need like to indicate ">
                    </div> 
                    <!-- other--> 

                    <h4 id="oath">
                        <b>I here by declare that the particulars furnished by me in the application are true and accurate.<br> I am also aware that if any partuculars contains herein are found to be false or incorrect I am<br> liable to disqualification if the inaccuracy is discovered before the selection and dimissal without any compensation if th inaccuracy is discovered after the appointment</b>
                    </h4> 

                     <div class="calender">
                        <input id = "calender1"  type ="date" name="current_date" data-date-inline-picker="true" />
                    </div>

                    

                    <div class="iAgreeLable">
                        <h5>I agree</h5>
                    </div> 

                    <div class="iAgreeButton">
                        <input id="" type="checkbox" name="vehicle"  value="">
                    </div> 

                    <input type="button" name="previous" class="previous button" value="Previous">
                    <input type="submit" name="Submit" class="finish button finish" value="Finish">
                
            </div>
            </form>
<!-- *********************************************************** end the fourth page************************************************--> 

        </div>
    </body>
</html>
