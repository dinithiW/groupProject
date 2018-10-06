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
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormSelectAreas.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>

    <div class="container"><!-- start of the container-->
            <!-- start of the head-->
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head inner">
            </div><!-- end of the head-->

            <div class="tableClass">
                <fieldset style="width: 600px"><!-- start of the fieldset-->
                    <legend id="header1">
                        FOR SELECTED  SPECIFICATION AREAS
                    </legend>
                    <table id="table1"><!-- start of the fieldset-->
                        <tr>
                            <th>AREA NAME</th>
                        </tr>
                        <?php /*add for loop for make the match with the relevent numbers*/ 
                            if($fetch_data->num_rows() > 0){  
                                foreach($fetch_data->result() as $row){  
                        ?>             
                                    <tr>
                                        <td><?php echo $row->AREA_NAME;?></td>
                                        <td><input type="checkbox" name="vehicle" id="checkBox" value=""></td>
                                    </tr>
                        <?PHP
                                }  
                            }  
                        ?> 
                    </table><!-- end of the table-->
                </fieldset><!-- end of the fieldset-->
            </div>
    </div><!-- end of the container-->
    
</body>
</html>