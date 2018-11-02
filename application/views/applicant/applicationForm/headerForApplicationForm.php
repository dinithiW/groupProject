<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>nav bar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>

    <body>
        <div class ="navbar" style="width:100%; height:50px; background-color: rgb(228, 18, 18);">
            <a href="<?=base_url('ApplicantLogin/applicant')?>" class="home" style="color:green;" >Home</a>
            <a href= "<?=base_url('ApplicantDashboard/contact')?>" class="contact">Contact</a>
            <a href= "<?=base_url('ApplicantDashboard/logout')?>"  style="" class="logout">Logout</a>
            <a href= "<?=base_url('ApplicantDashboard/logout')?>"  style="" class="logout">enter</a>
        </div>

        <style>
            .home{
                font-size:20px;
                color:green;
            }
        </style>

    </body>
</html>