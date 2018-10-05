<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>select data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/ApplicationFormSelectAreasModel.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>
    
    <form action= <?= base_url("ApplicantDashboard/applicationSelectAreas")?> method="post">
        <input type="text"  placeholder="enter your name" id="Username"  name="username" required>
            
       
        <button name="sub">submit</button>
    </form>
    <?php echo"this is the RUWANA"; ?>
     <?php
            
            if($this->input->post('sub')){
                echo"this is the main view";
                if($fetch_data->num_rows() > 0){  
                    foreach($fetch_data->result() as $row){  
            ?>  
                    
                    <?php echo $row->id; ?> 
                    <?php echo $row->first_name; ?>  
                    <?php echo $row->last_name; ?>  
                        
            <?php       
                    }  
                }  
            }
        
    ?> 

    
</body>
</html>