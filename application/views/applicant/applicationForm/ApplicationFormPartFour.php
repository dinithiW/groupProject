<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/ApplicationFormPartFour.css')?>" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></h3>
                    </div>

                    <h4 id="topics">Referees </h4>
                    <div class="content3">
                        <table id="Table">
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

                    <h5 id="note2"> N.B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When appling for the Academic Posts, one of the referees should be either the Professor or Senior Lecture of the Department of Study in which the applicant<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;had his/her University Education or the Head of the Institution in which the candidate works</h5>
                
                    <div form-group>
                            <input type="text" name="other" id="other" class="form-control input-sm" placeholder="                                                                              Any other information that you need like to indicate ">
                    </div>    

                    <h4 id="oath">
                        <b>I here by declare that the particulars furnished by me in the application are true and accurate. I am also aware that if any<br> partuculars contains herein are found to be false or incorrect I am liable to disqualification if the inaccuracy is discovered<br> before the selection and dimissal without any compensation if th inaccuracy is discovered after the appointment</b>
                    </h4>  
                
                    <div class="calender10">
                        <input id = "calender1"type="date" data-date-inline-picker="true" />
                    </div>

                    <div class="four">
                        <input type="submit" value="I agree"  id ="gg"class ="btn btn-info btn-block acce">
                    </div>

                    <form action= "<?= base_url("/index.php/UserLoginController/loadApplicationFormFileUpoloadPage")?>"  >
                        <div class="signup2">
                            <input type="submit"id="next" name="signup"class="btn btn-info btn-block" value="NEXT PAGE"/>
                        </div>
                    </form>

                    <form action= "<?= base_url("/index.php/UserLoginController/loadRegistrationSecondPage")?>" >
                        <div class="signup1">
                            <input type="submit" id="prev" name="signup" class="btn btn-info btn-block" value="PREV PAGE"/>
                        </div>
                    </form>

                    <form action= "<?= base_url("/index.php/UserLoginController/logout")?>" >
                        <div class="signup1">
                            <input type="submit" id="logout" name="logout" class="btn btn-info btn-block" value="logout"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>