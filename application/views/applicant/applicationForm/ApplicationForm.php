<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>jQuery Multi Step Form Demo</title>
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
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">This is step 1</h3>
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="password" name="cpass" placeholder="Confirm Password">
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
