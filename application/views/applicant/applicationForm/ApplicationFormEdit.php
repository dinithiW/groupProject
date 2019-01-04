<?php
/**
 * this is use for redirect to the main menu when user log out
 */
if(isset($this->session->userdata['logged_in'])){
?>



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
            
            
            <form action= "<?= base_url("ApplicationForm/updateApplicationForm")?>" method = "post" >
            
            <?php

            /**
             * this part is use for insert data of database for the application form
             * data from basic personal details table
             */
            if($basic_personal_details->num_rows()){
                foreach($basic_personal_details->result() as $row){
            ?>
                
            <?php
                }
            }

            ?>

                <div class="form">    
                    <h2 class="fs-title">BASIC PERSONAL DETAILS</h2>

                    <h6 class="lables">Full Name (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="first_name" placeholder="Full Name" value="<?php  echo $row->FIRST_NAME;?>">
      

                    <h6 class="lables">Surname (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="last_name" placeholder="Sur Name" value="<?php  echo $row->LAST_NAME;?>">

                    <h6 class="lables">Postal Address (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="postal_address" placeholder="Postal Address" value="<?php  echo $row->POSTAL_ADDRESS;?>">

                    <h6 class="lables">Permanent Address  (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="permanent_address" placeholder="Permanent Address" value="<?php  echo $row->PERMANENT_ADDRESS;?>">
                    
                    <h6 class="lables">NIC/Driving Licence/Passport No (in capital blocks)</h6>
                    <input type="text" required  class="input-fields" name="driving_licence" placeholder="NIC/Driving Licence/Passport No" value="<?php  echo $row->NIC;?>">

                    <h6 class="lables">Citizenship (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="applicant_citizenship" placeholder="Citizenship" value="<?php  echo $row->CITIZENSHIP_NAME;?>">

                    <h6 class="lables">Personal-Email  (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="personalEmail" placeholder="Personal-Email" value="<?php  echo $row->PERSONAL_EMAIL;?>">
                    
                    <h6 class="lables">Office-Email (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="officeEmail" placeholder="Office-Email" value="<?php  echo $row->OFFICE_EMAIL;?>">

                    <h6 class="lables">Mobile Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="mobile_number" placeholder="Mobile Number" value="<?php  echo $row->MOBILE_NUMBER;?>">

                    <h6 class="lables">Home Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="home_number" placeholder="Home Number" value="<?php  echo $row->HOME_NUMBER;?>">

                    <h6 class="lables">Office Number (in capital blocks)</h6>
                    <input type="text"  required class="input-fields" name="office_number" placeholder="Office Number" value="<?php  echo $row->OFFICE_NUMBER;?>">

                <!-- start gender -->

                    <h5 id="lableForGender">GENDER</h5>
                    <h5 id="lableForCivilStatus">CIVIL STATUS</h5>
                    <h5 id="labbleForCitizenship">IF A CITIZEN OF SRI LANKA HOW OBTAINED</h5>

                    <style>
                        #labbleForCitizenship{
                            margin-left:500px;
                        }
                    </style>

                    <style>
                        #lableForCivilStatus{
                            margin-left:-30px;
                        }
                    </style>

                    <div class="custom-sele dropboxGender" style="width:180px; height:100px;">
                        <select name="selectGender" value="<?php  echo $row->GENDER;?>" id="selectCategory_gender">
                            <option value="<?php  echo $row->GENDER;?>"><?php  echo $row->GENDER;?></option>
                            <option value="MALE">MALE:</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </div>

                    <style>
                        #selectCategory_gender{
                            margin-left:140px;
                            
                        }
                    </style>

                    <div class="custom-sele dropboxCivil" style="width:100px; height:50px;">
                        <select name="selectCivilStatus" id="selectCategory_civilstate" value="<?php  echo $row->CIVIL_STATUS;?>">
                            <option value="<?php  echo $row->CIVIL_STATUS;?>"><?php  echo $row->CIVIL_STATUS;?></option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="UN MARRIED">UN MARRIED</option>
                        </select>
                    </div>

                    <style>
                        #selectCategory_civilstate{
                            margin-left:120px;
                            
                        }
                    </style>

                    <div class="custom-sele dropboxCitizenship" style="width:100px; height:50px;">
                        <select name="selectCitizenship" id="selectCategory_citizenship">
                            <option value="<?php  echo $row->CITIZENSHIP;?>"><?php  echo $row->CITIZENSHIP;?></option>
                            <option value="BY DESCENT">BY DESCENT</option>
                            <option value="BY REGISTRATION">BY REGISTRATION</option>
                        </select>
                    </div>
                    
                    <style>
                        #selectCategory_citizenship{
                            margin-left:100px;
                            
                        }
                    </style>

                    <!-- start the calender-->
                    <div class="calender1" id ="birth_date_id">
                        <h4 id="birth-date"> Date of Birth</h4>
                        <input type="date" data-date-inline-picker="true"  name="birth_date" value="<?php  echo $row->DATE_OF_BIRTH;?>" />
                    </div>


                    <style>
                        #birth_date_id{
                            margin-left:330px;
                            
                        }
                    </style>
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


                            
                            <?php

                            /**
                             * this part is use for insert data from database for the application form
                             * data from basic specification ares table
                             * first i used a foreach loop for put the result set into an array
                             * it prevented the duplicate the same result
                             * after i used the in_array() method for check the existence of the selected fields
                             */

                            $array_for_selected_areas = array();//make empty array for push selected areas


                            /**
                             * push element by element in selected specification area to array
                             */
                            if($selected_specification_area->num_rows()){
                                foreach($selected_specification_area->result() as $row_in_selected_specification_area){
                                    array_push($array_for_selected_areas,$row_in_selected_specification_area->SPECIFICATION_AREA_NAME);
                                }
                            }

                            ?>

                            
                            <?php /*add for loop for make the match with the relevent numbers*/ 
                                if($specification_area->num_rows()> 0){  
                                    foreach($specification_area->result() as $row_in_specification_area){  
                                        if(in_array($row_in_specification_area->AREA_NAME,$array_for_selected_areas)){      
                            ?>             
                                        <tr>            
                                            <td>
                                                <input class="areas" type="checkbox" name="check_list[]" id="checkBox" value="<?php echo $row_in_specification_area->AREA_NAME;?>"  checked>
                                            </td>
                                            <td >
                                                <div class="areasForSelection" align="left"><?php echo $row_in_specification_area->AREA_NAME;?></div>
                                            </td>
                                        </tr>  

                            <?PHP
                                        }

                                        else{
                            ?>

                                    <tr>            
                                        <td>
                                            <input class="areas" type="checkbox" name="check_list[]" id="checkBox" value="<?php echo $row_in_specification_area->AREA_NAME;?>"  >
                                        </td>
                                        <td >
                                            <div class="areasForSelection" align="left"><?php echo $row_in_specification_area->AREA_NAME;?></div>
                                        </td>
                                    </tr> 

                            <?php
                                        }
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


                <div class="custom-select" style="width:300px; height:50px;">
                    <select name="postApplyFor" id="selectCategory1">
                    
                        <option value="<?php  echo $row->POST_APPLY_FOR;?>"><?php  echo $row->POST_APPLY_FOR;?></option>
                        <option value="PROBATIONARY LECTURER">PROBATIONARY LECTURER</option>
                        <option value="SENIOR LECTURE GR. II">SENIOR LECTURE GR. II</option>
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

                        <?php

                        /**
                         * this part is use for get data from seconadary educational details table
                         * and set to visible the data above mentioned
                         * i check the row number for this 
                         * because, identify for the correct row
                         */
                        if($secondary_educational_details->num_rows()){
                            foreach($secondary_educational_details->result() as $row_in_secondary_education){


                                if($row_in_secondary_education->ROW_NUMBER=='1'){
                        ?>

                            <tr class="tr">
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->SCHOOL_NAME;?>"  name="secondary_educational_school_name1" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->FROM;?>" name="secondary_educational_from1" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->TO;?>" name="secondary_educational_to1" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->EXAMINATION_PASSED;?>" name="secondary_educational_examination1" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->YEAR;?>" name="secondary_educational_year1" size='5'/></td>
                                <td><span class="lblStatus"></span></td>
                        
                        <?php
                                }

                                if($row_in_secondary_education->ROW_NUMBER=='2'){
                        
                        ?>

                            <tr class="tr">
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->SCHOOL_NAME;?>"  name="secondary_educational_school_name2" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->FROM;?>" name="secondary_educational_from2" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->TO;?>" name="secondary_educational_to2" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->EXAMINATION_PASSED;?>" name="secondary_educational_examination2" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->YEAR;?>" name="secondary_educational_year2" size='5'/></td>
                                <td><span class="lblStatus"></span></td>
                            </tr>

                        <?php
                                }

                                if($row_in_secondary_education->ROW_NUMBER=='2'){
                        
                        ?>

                            <tr class="tr">
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->SCHOOL_NAME;?>"  name="secondary_educational_school_name3" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->FROM;?>" name="secondary_educational_from3" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->TO;?>" name="secondary_educational_to3" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->EXAMINATION_PASSED;?>" name="secondary_educational_examination3" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->YEAR;?>" name="secondary_educational_year3" size='5'/></td>
                                <td><span class="lblStatus"></span></td>

                        <?php
                                }

                                if($row_in_secondary_education->ROW_NUMBER=='2'){
                        
                        ?>

                            <tr class="tr">
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->SCHOOL_NAME;?>"  name="secondary_educational_school_name4" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->FROM;?>" name="secondary_educational_from4" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->TO;?>" name="secondary_educational_to4" size='8'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->EXAMINATION_PASSED;?>" name="secondary_educational_examination4" size='42'/></td>
                                <td><input type="text" class="Text" value= "<?php echo $row_in_secondary_education->YEAR;?>" name="secondary_educational_year4" size='5'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>

                        <?php
                                }  
                            }
                        }
                        
                        ?>                      
                            
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

                            
                        
                        <?php

                        /**
                         * this part is use for get data from higher educational details table
                         * and set to visible the data above mentioned
                         */
                        if($higher_educational_details->num_rows()){
                            foreach($higher_educational_details->result() as $row_in_higher_education){

                                if($row_in_higher_education->ROW_NUMBER=='1'){
                        ?>
                            <tr class="tr">

                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->UNIVERSITY ?>" name="heigher_educational_university1"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->FROM; ?>" name="heigher_educational_from1"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->TO; ?>" name="heigher_educational_to1"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DEGREE_OBTAINED; ?>" name="heigher_educational_degree_obtained1"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DURATION; ?>"name="heigher_educational_duration1"  size='11'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->CLASS; ?>"name="heigher_educational_class1" size='13'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->YEAR; ?>" name="heigher_educational_year1"  size='4'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->INDEX_NO; ?>" name="heigher_educational_year_no1"  size='7'/></td>
                                <td><span class="lblStatus"></span></td>
                    
                        <?php
                                }
                                if($row_in_higher_education->ROW_NUMBER=='2'){
                        ?>
                                <tr class="tr">

                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->UNIVERSITY ?>" name="heigher_educational_university2"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->FROM; ?>" name="heigher_educational_from2"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->TO; ?>" name="heigher_educational_to2"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DEGREE_OBTAINED; ?>" name="heigher_educational_degree_obtained2"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DURATION; ?>"name="heigher_educational_duration2"  size='11'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->CLASS; ?>"name="heigher_educational_class2" size='13'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->YEAR; ?>" name="heigher_educational_year2"  size='4'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->INDEX_NO; ?>" name="heigher_educational_year_no2"  size='7'/></td>
                                <td><span class="lblStatus"></span></td>                       
                        <?php
                                }
                                if($row_in_higher_education->ROW_NUMBER=='3'){
                        ?>
                        
                        <tr class="tr">

                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->UNIVERSITY ?>" name="heigher_educational_university3"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->FROM; ?>" name="heigher_educational_from3"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->TO; ?>" name="heigher_educational_to3"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DEGREE_OBTAINED; ?>" name="heigher_educational_degree_obtained3"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DURATION; ?>"name="heigher_educational_duration3"  size='11'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->CLASS; ?>"name="heigher_educational_class3" size='13'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->YEAR; ?>" name="heigher_educational_year3"  size='4'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->INDEX_NO; ?>" name="heigher_educational_year_no3"  size='7'/></td>
                                <td><span class="lblStatus"></span></td>  
                        
                        <?php
                                }
                                if($row_in_higher_education->ROW_NUMBER=='4'){
                        ?>
                        <tr class="tr">

                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->UNIVERSITY ?>" name="heigher_educational_university4"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->FROM; ?>" name="heigher_educational_from4"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->TO; ?>" name="heigher_educational_to4"  size='3'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DEGREE_OBTAINED; ?>" name="heigher_educational_degree_obtained4"  size='25'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->DURATION; ?>"name="heigher_educational_duration4"  size='11'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->CLASS; ?>"name="heigher_educational_class4" size='13'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->YEAR; ?>" name="heigher_educational_year4"  size='4'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_higher_education->INDEX_NO; ?>" name="heigher_educational_year_no4"  size='7'/></td>
                                <td><span class="lblStatus"></span></td>  
                            
                        <?php

                                }
                            }
                        }
                        
                        ?> 

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

                            
                        <?php

                            /**
                             * this part is use for get data from any other qualificational details table
                             * and set to visible the data above mentioned
                             */
                            if($any_other_qualifications->num_rows()){
                                foreach($any_other_qualifications->result() as $row_in_other_qualification){
                            
                                    if($row_in_other_qualification->ROW_NUMBER=='1'){
                        ?>

                            <tr class="tr">
                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->INSTITUTION; ?>" name="any_other_qualifications_university1"  size='50'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DEPLOMA; ?>" name="any_other_qualifications_deploma1"  size='32'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DURAION; ?>" name="any_other_qualifications_duration1"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->YEAR; ?>" name="any_other_qualifications_year1"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>

                                    <?php
                                    }
                                    
                                    if($row_in_other_qualification->ROW_NUMBER=='2'){
                                    ?>
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->INSTITUTION; ?>" name="any_other_qualifications_university2"  size='50'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DEPLOMA; ?>" name="any_other_qualifications_deploma2"  size='32'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DURAION; ?>" name="any_other_qualifications_duration2"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->YEAR; ?>" name="any_other_qualifications_year2"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>


                                    <?php
                                    }
                                    
                                    if($row_in_other_qualification->ROW_NUMBER=='3'){
                                    ?>
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->INSTITUTION; ?>" name="any_other_qualifications_university3"  size='50'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DEPLOMA; ?>" name="any_other_qualifications_deploma3"  size='32'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->DURAION; ?>" name="any_other_qualifications_duration3"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_other_qualification->YEAR; ?>" name="any_other_qualifications_year3"  size='13'/></td>
                                <td><span class="lblStatus"></span></td>


                        <?php
                                    }
                                }
                            }
                        
                        ?>
                            

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

<!-- ----------------------------- -->
<?php
                            /**
                             * this part is use for get data from any professional qualificational details table
                             * and set to visible the data above mentioned
                             */
                        if($professional_qualifications->num_rows()){
                            foreach($professional_qualifications->result() as $row_in_professional_qualification){

                                if($row_in_professional_qualification->ROW_NUMBER=='1'){
                        ?>
                            <tr class="tr">

                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->INSTITUTION; ?>" name="professonal_qualifications_institution1"  size='30'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->FROM; ?>" name="professonal_qualifications_from1"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TO; ?>" name="professonal_qualifications_to1"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->DURATION; ?>" name="professonal_qualifications_duration1"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TYPE_OF_QUALIFICATION; ?>" name="professonal_qualifications_type_of_qualification1"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>  
                    
                        <?php
                                }
                                if($row_in_professional_qualification->ROW_NUMBER=='2'){
                        ?>
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->INSTITUTION; ?>" name="professonal_qualifications_institution2"  size='30'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->FROM; ?>" name="professonal_qualifications_from2"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TO; ?>" name="professonal_qualifications_to2"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->DURATION; ?>" name="professonal_qualifications_duration2"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TYPE_OF_QUALIFICATION; ?>" name="professonal_qualifications_type_of_qualification2"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>                       
                        <?php
                                }
                                if($row_in_professional_qualification->ROW_NUMBER=='3'){
                        ?>
                        
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->INSTITUTION; ?>" name="professonal_qualifications_institution3"  size='30'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->FROM; ?>" name="professonal_qualifications_from3"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TO; ?>" name="professonal_qualifications_to3"  size='6'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->DURATION; ?>" name="professonal_qualifications_duration3"  size='17'/></td>
                                <td><input type="text" class="Text" value ="<?php echo $row_in_professional_qualification->TYPE_OF_QUALIFICATION; ?>" name="professonal_qualifications_type_of_qualification3"  size='36'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>  
                        
                        <?php
                                }                               
                            }
                        }
                        
                        ?> 

                            </tr>
                        </table>

<!-- -------------------end----------------------------->
                    </div><!-- end of the table1-->


                    <h4 id="title2">Proficiency in Sinhala/Tamil/English</h4>
                    <h5 id="title3">*******Ability to Work************ | ********* Ability To Teach********</h5>
                    
                    <!-- start of the dropdown buttons-->
               
                
                    <!-- start of the dropdown for sinhala-->
                    <?php

                    /**
                     * this part is use for get data from language proficiency details table
                     * and set to visible the data above mentioned
                     */
                    if($language_proficiency->num_rows()){
                        foreach($language_proficiency->result() as $row_in_language_proficiency){

                        }
                    }
                        
                    ?>

                    
                    <div class="custom-select" style="width:300px; height:80px;">
                        <label for="sinhala">Ability to Work Sinhala</label>
                        <select name="work_sinhala">

                            <option value="<?php echo $row_in_language_proficiency->WORK_SINHALA?>"><?php echo $row_in_language_proficiency->WORK_SINHALA?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for sinhala1-->

                   <!-- start of the dropdown for tamil1-->
                   

                    <div class="custom-select" style="width:300px; height:80px;">
                        <label for="sinhala">Ability To Teach Sinhala</label>
                        <select name="teach_sinhala">
                        <option value="<?php echo $row_in_language_proficiency->TEACH_SINHALA?>"><?php echo $row_in_language_proficiency->TEACH_SINHALA?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                    </div>
                    
                    <!-- end of the dropdown for tamil1-->

                    <!-- start of the dropdown for english1-->
                    

                    <div class="custom-select" style="width:300px; height:80px;">
                    <label for="tamil">Ability to Work Tamil</label>
                        <select name="work_tamil">
                            <option value="<?php echo $row_in_language_proficiency->WORK_TAMIL?>"><?php echo $row_in_language_proficiency->WORK_TAMIL?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for english1-->

                    <!-- start of the dropdown for sinhala2-->
                    
                    
                   
                    <div class="custom-select" style="width:300px; height:80px;">
                        <label for="tamil">Ability To Teach Tamil</label>
                        <select name="teach_tamil">
                            <option value="<?php echo $row_in_language_proficiency->TEACH_TAMIL?>"><?php echo $row_in_language_proficiency->TEACH_TAMIL?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                        </select>
                    </div>
                   <!-- end of the dropdown for sinhala2-->

                    <!-- start of the dropdown for tamil2-->
                    <div class="custom-select" style="width:300px; height:80px;">
                        <label for="english">Ability to Work English</label>
                        <select name="work_english">
                            <option value="<?php echo $row_in_language_proficiency->WORK_ENGLISH?>"><?php echo $row_in_language_proficiency->WORK_ENGLISH?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                    </div>
                    <!-- end of the dropdown for tamil2-->

                    <!-- start of the dropdown for english2-->
                    <div class="custom-select" style="width:300px; height:80px;">
                        <label for="english">Ability To Teach English</label>
                        <select name="teach_english">
                            <option value="<?php echo $row_in_language_proficiency->TEACH_ENGLISH?>"><?php echo $row_in_language_proficiency->TEACH_ENGLISH?></option>
                            <option value="Very Good">Very Good</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="No Knowledge">No Knowledge</option>
                        </select>
                        </select>
                    </div>
                    
                    <!-- end of the dropdown for english2-->
                    <!-- end of the dropdown series-->

                    <?php

                    /**
                     * this part is use for get data from applicants more details table
                     * and set to visible the data above mentioned
                     */
                    if($more_details->num_rows()){
                        foreach($more_details->result() as $row_in_more_details){

                        }
                    }
                        
                    ?>


                    <h5 id="note1">Note:Indicate your level based on self-evaluation of your ability</h5>

                    <!-- start the text box one-->
                    <div form-group>
                        <label >Experience relevant to the post applied for</label>
                        <input type="text" value ="<?php echo $row_in_more_details->EXPERIENCE_RELEVANT_TO_POST; ?>" name="experience" id="experience" class="form-control input-sm" placeholder="                                        Experience relevant to the post applied for (Please indicate the tasks handled with the duration) ">
                    </div>
                    <!-- end the text box one-->

                     <!-- start the text box two-->
                    <div form-group>
                        <label >Details of research and publications, If any</label>
                        <input type="text" value ="<?php echo $row_in_more_details->RESEARCH_AND_PUBLICATION_DETAILS; ?>" name="research" id="research" class="form-control input-sm" placeholder="                                        Details of research and publications, If any (if space is insufficient, please append it with appends) ">
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
                            
<!-- ----------start------------------>
<?php
                            /**
                             * this part is use for get data from any professional qualificational details table
                             * and set to visible the data above mentioned
                             */
                        if($referees->num_rows()){
                            foreach($referees->result() as $row_in_referees){

                                if($row_in_referees->ROW_NUMBER=='1'){
                        ?>
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->NAME;?>" name="referees_name1" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->DESIGNATION;?>" name="referees_designation1" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->ADDRESS;?>" name="referees_address1" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->EMAIL;?>" name="referees_email1" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->CONTACT_NO;?>" name="referees_contact1" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>  
                    
                        <?php
                                }
                                if($row_in_referees->ROW_NUMBER=='2'){
                        ?>
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->NAME;?>" name="referees_name2" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->DESIGNATION;?>" name="referees_designation2" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->ADDRESS;?>" name="referees_address2" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->EMAIL;?>" name="referees_email2" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->CONTACT_NO;?>" name="referees_contact2" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>                     
                        <?php
                                }
                                if($row_in_referees->ROW_NUMBER=='3'){
                        ?>
                        
                            <tr class="tr">
                                
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->NAME;?>" name="referees_name3" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->DESIGNATION;?>" name="referees_designation3" size='10'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->ADDRESS;?>" name="referees_address3" size='30'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->EMAIL;?>" name="referees_email3" size='20'/></td>
                                <td><input type="text" class="Text" placeholder="" value ="<?php echo $row_in_referees->CONTACT_NO;?>" name="referees_contact3" size='10'/></td>
                                <td><span class="lblStatus"></span></td>

                            </tr>
                        
                        <?php
                                }                               
                            }
                        }
                        
                        ?> 

                            </tr>
                        </table>
<!-- ---------------end ------------------------>
                    </div>

            <!-- end referee table-->  

                    <!-- notice-->   
                    <h5 id="note1"><b> N.B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When appling for the Academic Posts, one of the referees should be either the Professor or Senior Lecture of the Department of Study in<br> which the applicant had his/her University Education or the Head of the Institution in which the candidate works</b></h5>
                    <!-- notice--> 

                    <!-- other--> 
                    <div form-group>
                        <label>Any other information that you need like to indicate</label>
                        <input type="text" value ="<?php  echo $row_in_more_details->ANY_OTHER_INFORMATION; ?>" name="other_details" id="other" class="form-control input-sm" placeholder="                                                                              Any other information that you need like to indicate ">
                    </div> 
                    <!-- other--> 

                    <h4 id="oath">
                        <b>I here by declare that the particulars furnished by me in the application are true and accurate.<br> I am also aware that if any partuculars contains herein are found to be false or incorrect I am<br> liable to disqualification if the inaccuracy is discovered before the selection and dimissal without any compensation if th inaccuracy is discovered after the appointment</b>
                    </h4> 

                     <div class="calender" >
                        <input id = "calender1"  type ="date" value ="<?php echo $row_in_more_details->SUBMISSION_DATE; ?>"  name="current_date" data-date-inline-picker="true" />
                    </div>


                    <!-- applicant can select the date but however the system will find and insert the corredt date -->

                    

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


<?php
}
else{
    redirect(base_url()."User/logout");
}
?>