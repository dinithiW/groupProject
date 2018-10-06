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
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormNavigationBar.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>
    <div class="navbar">
        
        <a href="<?=base_url('ThisOnlyForTestOnly/add')?> " class="w3-bar-item w3-button w3-hide-small w3-hover butt">Specialization Areas</a>
        <a href="<?=base_url('ApplicantDashboard/applicationFirstPage')?>"    class="active w3-bar-item w3-button w3-hide-small w3-hover-white butt w3-bar-item w3-button active" >Basic Details</a>
        <a href="<?=base_url('ApplicantDashboard/applicationSecondPage')?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white butt">Educational details</a>
        <a href="<?=base_url('ApplicantDashboard/applicationThirdPage')?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white butt">Professional details</a>
        <a href="<?=base_url('ApplicantDashboard/applicationFourthPage')?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white butt">References details</a>
        
    </div>

</body>
</html>