<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nav bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormSelectAreasModel.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>
    
    <form action= <?= base_url("ApplicantDashboard/insertDataForDatabase")?> method="post">
        <input type="text"  placeholder="enter your name" id="Username"  name="username" required>
        <input type="password" placeholder="enter your password" id="Password" name="password" required>
        <input type="email" placeholder="enter your email" id="Password" name="email" required>
        <button>submit</button>
    </form>
    
</body>
</html>