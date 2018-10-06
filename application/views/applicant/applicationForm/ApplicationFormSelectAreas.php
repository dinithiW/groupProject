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
                <h4 id="headline">FOR SELECTed  SPECIFICATION AREAS</h4>
                
            </div><!-- end of the head-->

            <?php /*
                if($fetch_data->num_rows>0){
                    echo"thisthis";
                    foreach($fetch_data->result() as $row){
                        echo $row->AREA_ID;
                        echo $row->AREA_NAME;
                    }
                }
            */
            ?>

                
           <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
             
                echo $row->AREA_ID;
                echo $row->AREA_NAME; 
                 
                }  
           }  
            
          
           ?> 


    </div><!-- end of the container-->
    
</body>
</html>