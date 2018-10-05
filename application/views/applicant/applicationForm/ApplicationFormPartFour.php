<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartFour.css')?>" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="container"><!-- start of the container-->
        <h3 class="panel-title" id="header1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM  REFEREES DETAILS</b></h3>
            
        <!-- start referee table-->        
            <h4 id="title1">Referees </h4>
                    <div class="content3">
                        <table id="table1">
                            <tr class="tr">

                                <td><input type="text" class="Text2" placeholder="        1" required size='5'/></td>
                                
                                <td><input type="text" class="Text1" placeholder="Name" required size='30'/></td>
                                <td><input type="text" class="Text2" placeholder="Designation" required size='15'/></td>
                                <td><input type="text" class="Text2" placeholder="Address" required size='35'/></td>
                                <td><input type="text" class="Text3" placeholder="Email Address" required size='25'/></td>
                                <td><input type="text" class="Text2" placeholder="Contact No" required size='10'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        2" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Name" required size='30'/></td>
                                <td><input type="text" class="Text2" placeholder="Designation" required size='15'/></td>
                                <td><input type="text" class="Text2" placeholder="Address" required size='35'/></td>
                                <td><input type="text" class="Text3" placeholder="Email Address" required size='25'/></td>
                                <td><input type="text" class="Text2" placeholder="Contact No" required size='10'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        3" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Name" required size='30'/></td>
                                <td><input type="text" class="Text2" placeholder="Designation" required size='15'/></td>
                                <td><input type="text" class="Text2" placeholder="Address" required size='35'/></td>
                                <td><input type="text" class="Text3" placeholder="Email Address" required size='25'/></td>
                                <td><input type="text" class="Text2" placeholder="Contact No" required size='10'/></td>
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
                        <b>I here by declare that the particulars furnished by me in the application are true and accurate. I am also aware that if any<br> partuculars contains herein are found to be false or incorrect I am liable to disqualification if the inaccuracy is discovered<br> before the selection and dimissal without any compensation if th inaccuracy is discovered after the appointment</b>
                    </h4> 

                     <div class="calender">
                        <input id = "calender1"type="date" data-date-inline-picker="true" />
                    </div>

                    <div class="agreement">
                        <input type="submit" value="I agree"  id ="Agree"class ="btn btn-info btn-block acce">
                    </div>

                    <div class="submission">
                        <input type="submit" value="SUBMIT"  id ="Submission"class ="btn btn-info btn-block acce">
                    </div>
            
    </div><!-- end of the container-->
</body>
</html>