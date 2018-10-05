<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartTwo.css')?>" type="text/css"/>
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
        <!-- start of the head-->
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
            <h3 class="panel-title" id="header1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM - EDUCATIONAL DETAILS</b></h3>
            
            
            
            <form role="form"><!-- start of the form-->
                <div class ="inner"><!-- start of the inner-->

                    <div class="lec"><!-- start of the radio button-->
                        <h5 class="selection"><b>POSTS APPLIED FOR</b></h5>
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="probationaryLecture" name="lecture" >
                            <label class="custom-control-label name1" for="checkLecture">LECTURER(PROBATIONARY)</label>
                        </div>

                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="lecture" checked >
                            <label class="custom-control-label name2" for="checkLecture">SENIOR LECTURE GR. II</label>
                        </div>
                    </div><!-- end of the radio button-->
                    
                    <div class="dropdown drop" ><!-- start of the dropdown-->
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SELECT YOUR DEGREE
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Bachelor Of science</a></li>
                            <li><a href="#">Bachelor Of science</a></li>
                            <li><a href="#">Bachelor Of science</a></li>
                        </ul>
                    </div><!-- end of the dropdown-->
                </div><!-- end of the inner-->
            </form> <!-- end of the form-->
           

            
            
            
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
                                <td><input type="text" class="Text1" placeholder="School name" required size='55'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='5'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='5'/></td>
                                <td><input type="text" class="Text2" placeholder="Exmination Passed" required size='55'/></td>
                                <td><input type="text" class="Text3" placeholder="Year" required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="School name" required size='55'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='5'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='5'/></td>
                                <td><input type="text" class="Text2" placeholder="Exmination Passed" required size='55'/></td>
                                <td><input type="text" class="Text3" placeholder="Year" required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="School name" required size='55'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='5'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='5'/></td>
                                <td><input type="text" class="Text2" placeholder="Exmination Passed" required size='55'/></td>
                                <td><input type="text" class="Text3" placeholder="Year" required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="School name" required size='55'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='5'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='5'/></td>
                                <td><input type="text" class="Text2" placeholder="Exmination Passed" required size='55'/></td>
                                <td><input type="text" class="Text3" placeholder="Year" required size='5'/></td>
                            <td><span class="lblStatus"></span></td>
                            
                            </tr>
                        </table>
                    </div><!-- end of the Secondry Educational Details table-->

                    <h4 id="title2">Higher Educational Details</h4>
                    <div class="table2"><!-- start of the Higher Educational Details table-->
                        <table id="Table">
                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="Name of the university / Institution" required size='35'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='3'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='3'/></td>
                                <td><input type="text" class="Text2" placeholder="Degree Obtained" required size='25'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration of the course" required size='17'/></td>
                                <td><input type="text" class="Text3" placeholder="Class" required size='12'/></td>
                                <td><input type="text" class="Text2" placeholder="Awarding Year" required size='9'/></td>
                                <td><input type="text" class="Text3" placeholder="Index No" required size='7'/></td>
                            <td><span class="lblStatus"></span></td>
                            
                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="Name of the university / Institution" required size='35'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='3'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='3'/></td>
                                <td><input type="text" class="Text2" placeholder="Degree Obtained" required size='25'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration of the course" required size='17'/></td>
                                <td><input type="text" class="Text3" placeholder="Class" required size='12'/></td>
                                <td><input type="text" class="Text2" placeholder="Awarding Year" required size='9'/></td>
                                <td><input type="text" class="Text3" placeholder="Index No" required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="Name of the university / Institution" required size='35'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='3'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='3'/></td>
                                <td><input type="text" class="Text2" placeholder="Degree Obtained" required size='25'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration of the course" required size='17'/></td>
                                <td><input type="text" class="Text3" placeholder="Class" required size='12'/></td>
                                <td><input type="text" class="Text2" placeholder="Awarding Year" required size='9'/></td>
                                <td><input type="text" class="Text3" placeholder="Index No" required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text1" placeholder="Name of the university / Institution" required size='35'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='3'/></td>
                                <td><input type="text" class="Text3" placeholder="To" required size='3'/></td>
                                <td><input type="text" class="Text2" placeholder="Degree Obtained" required size='25'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration of the course" required size='17'/></td>
                                <td><input type="text" class="Text3" placeholder="Class" required size='12'/></td>
                                <td><input type="text" class="Text2" placeholder="Awarding Year" required size='9'/></td>
                                <td><input type="text" class="Text3" placeholder="Index No" required size='7'/></td>
                            <td><span class="lblStatus"></span></td>

                            </tr>
                        </table>
                    </div><!-- end of the Higher Educational Details table-->
                    <h5 id="note1">Note:Certified copies of the certificates and transcripts should be attached</h5>
                

                    <h4 id="title3">Any Other Qualifications </h4>
                    <div class="table3">
                        <table id="Table">
                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        1" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="Deploma etc" required size='40'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Year" required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        2" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="Deploma etc" required size='40'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Year" required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        3" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="Deploma etc" required size='40'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Year" required size='13'/></td>
                            <td><span class="lblStatus"></span></td>

                            </tr>
                        </table>
                    </div>
                    <h5 id="note2">Note:Certified copies of the certificates and transcripts should be attached</h5>
                
        </div><!--end of the head-->
        
    </div><!-- end of the container-->
    
    
    
</body>
</html>