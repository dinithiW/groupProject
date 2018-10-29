<<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormPartOne.css')?>" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div class="outerClass" >
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
                

                <form action= "<?= base_url("ApplicantDashboard/ApplicationSecondPage")?>" method = "post" >
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <br/>
                                <label> </label>
                                
                            </div>
                            
                            <div class="form-group">
                                <label> </label>
                                <input type="text" name="last-name" id="last-name" class="form-control input-sm" placeholder="Surname">
                            </div>

                            <div class="form-group">
                                <label> </label>
                                <input type="text" name="postal-address" id="postal-address" class="form-control input-sm" placeholder="Postal Address">
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input type="text" name="permanent-address" id="permanent-address" class="form-control input-sm" placeholder="Permanent Address">
                            </div>

                            
                   
                        
                        </div>
                    </div>
                    <input type="submit" name="Submit" class="next button" value="sub">
                </form>
            </div>
        
    </div>

</body>
</html>
