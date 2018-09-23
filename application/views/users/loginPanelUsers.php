<!DOCTYPE html>
<html>

<head>    
    <title>UCSC</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head> 

<body background="<?php echo base_url('assets/images/ucsc.jpg');?>">
    <div class = "boxed">
    <div class="imgcontainer">
        <img src="<?php echo base_url('assets/images/loginMan.png');?>" width = "150" height = "150"alt="Avatar" class="avatar" >
    </div>
    <br />  
     <form action= "<?= base_url("loginUser/process")?>" method = "post" >
        <div class="text-center">          
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' required size='25'placeholder=" Enter your username"/>
            <br />

            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='25' placeholder=" Enter your password" required /><br />

            <div class = "container" width = "800px">
                <input type='Submit' value='Login' class="btn btn-primary btn-md" />   
                
                <input type="checkbox" checked="checked" name="remember"> Remember me
                
            </div>
        </div>
        <div class="text-center" style="background-color:#f1f1f1">
            <div class="psw">Forgot <a href="#">password?</a></div>
        </div>
    </form> 
    </div>      
</body>

</html>



