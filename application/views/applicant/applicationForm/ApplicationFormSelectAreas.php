<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <div class="container"><!-- start of the container-->
            <!-- start of the head-->
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head inner">
                
                
            </div><!-- end of the head-->

            <div class="tableClass">

                <fieldset><!-- start of the fieldset-->
                    <legend>
                        FOR SELECTED  SPECIFICATION AREAS
                    </legend>
                    
                    <table><!-- start of the fieldset-->
                        <tr>
                            <th>AREA NAME</th>
                        </tr>

                        <?php /*add for loop for make the match with the relevent numbers*/ 
                            if($fetch_data->num_rows() > 0){  
                                foreach($fetch_data->result() as $row){  
                        ?>             
                                    <tr>
                                        <td><?php echo $row->AREA_NAME;?></td>
                                        <td><input type="checkbox" name="vehicle" value="Bike"></td>
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