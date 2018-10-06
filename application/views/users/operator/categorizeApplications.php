<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/operator/categorizeApplications.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>
    <div class="container"><!-- start of the container-->
            <!-- start of the head-->
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head inner">
                <h4 id="headline1">MANAGE AREA SPECIFICATION</h4>
                

                <div class="insert"><!-- start of the insert-->
                    <form method="post" action="<?=base_url('OperatorDashboard/insesrtDataForDatabase')?>">
                        <input type="text" name="insertArea" class="form-control input-sm input1"  placeholder="enter the area field">
                        <button type="submit" name="sub" class="btn btn-info btn-block button1">INSERT</button>
                    </form><!-- end of the head-->
                </div>

                <div class="insert"><!-- start of the delete-->
                    <form method="post" action="<?=base_url('OperatorDashboard/deleteDataFromDatabase')?>">
                        <input type="text" name="deleteArea" class="form-control input-sm input2"  placeholder="enter the area field you want to delete">
                        <button type="submit" name="sub" class="btn btn-info btn-block button2">DELETE</button>
                    </form>
                </div><!-- end of the delete-->


                <h4 id="headline2">MANAGE FILE UPLOADING</h4>
                

                <div class="insert"><!-- start of the insert-->
                    <form method="post" action="<?=base_url('OperatorDashboard/insesrtFileUploadingLinkForDatabase')?>">
                        <input type="text" name="insertFileUploadLink" class="form-control input-sm input3"  placeholder="enter the area field">
                        <button type="submit" name="sub" class="btn btn-info btn-block button3">INSERT</button>
                    </form><!-- end of the head-->
                </div>

                <div class="insert"><!-- start of the delete-->
                    <form method="post" action="<?=base_url('OperatorDashboard/deleteDataFromDatabase')?>">
                        <input type="text" name="deleteArea" class="form-control input-sm" id="input4" class="form-control input-sm input4"  placeholder="enter the area field you want to delete">
                        <button type="submit" name="sub" class="btn btn-info btn-block button4">DELETE</button>
                    </form>
                </div><!-- end of the delete-->

            </div><!-- end of the head-->


    </div><!-- end of the container-->


</body>
</html>
