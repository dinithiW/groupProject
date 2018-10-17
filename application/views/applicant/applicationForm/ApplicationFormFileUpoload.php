<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormFileUpoload.css')?>" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container"><!-- start of the container-->
            


            <!-- start of the head-->
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
            <h4 id="headline">ATTACH RELEVANT DOCUMENTS</h4>

            

           <?php
                if($fetch_data->num_rows()>0){
                    foreach($fetch_data->result() as $row){
            ?>
            
                        <!-- start of first upload link-->
                        <div class="form-group one">
                                <h6 id="label1"><b><?php echo $row->LINK_NAME?></b></h6>
                                <input type="file" class="inputClass1" id="inputId1" name="sentfile">
                                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button1">upload</button>
                            </div>
                        <!-- end of first upload link-->

            <?php
                    }
                }
           ?>

            
            </div><!-- end of the head-->    
    </div><!-- end of the container-->        
</body>
</html>

