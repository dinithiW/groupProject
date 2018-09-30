<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartThree.css')?>" type="text/css"/>
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
            <h3 class="panel-title" id="header1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM  Basic Personal Details</b></h3>
                
            <form role="form"><!-- start of the form-->

                <h4 id="title1">Professional Qualifications </h4>
                    <div class="table1"><!-- start of the table1-->
                        <table id="Table">
                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        1" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='6'/></td>
                                <td><input type="text" class="Text2" placeholder="To" required size='6'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Type of Qualifications" required size='36'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        2" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='6'/></td>
                                <td><input type="text" class="Text2" placeholder="To" required size='6'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Type of Qualifications" required size='36'/></td>
                            <td><span class="lblStatus"></span></td>

                            <tr class="tr">
                                <td><input type="text" class="Text2" placeholder="        3" required size='5'/></td>
                                <td><input type="text" class="Text1" placeholder="Institution" required size='50'/></td>
                                <td><input type="text" class="Text2" placeholder="From" required size='6'/></td>
                                <td><input type="text" class="Text2" placeholder="To" required size='6'/></td>
                                <td><input type="text" class="Text3" placeholder="Duration" required size='17'/></td>
                                <td><input type="text" class="Text2" placeholder="Type of Qualifications" required size='36'/></td>
                            <td><span class="lblStatus"></span></td>


                            </tr>
                        </table>
                    </div><!-- end of the table1-->

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


            </form><!-- end of the form-->
        </div><!-- end of the head-->
    </div><!-- end of the container-->
</body>
</html>