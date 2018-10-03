<!DOCTYPE html>
<html>

<head>    
    <title>UCSC</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">


    <!-- this is the style sheet causing the problem. a:hover will fix it. --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <style>
        a:hover { 
            text-decoration: none;
        }
    </style>
</head> 

<body>
  
    <br />  

    <div class="w3-main" style="margin-left:250px">
            <div class="w3-row w3-padding-64">
    <form action = <?= base_url("OperatorIndex/process")?> method = "post" name = "emailDetails">
        <div class="text-center">  
        </br>
        </br>
        </br>
        </br>



            <label for='email'>Subject of email</label>
            <input type='text' name='subject' id='email' required size='25'placeholder=" Enter subject of the email"/>
            <br />

            <label for='email'>Description</label>
            <!-- <textarea name="description" form="emailDetails" placeholder="Enter description of the email">Description of the email</textarea> -->
            <!-- <br /> -->
            <input type='text' name='description' id='email' required size='25'placeholder=" Enter the description"/>
            <br />

            <label for='email'>Receiver's email address</label>
            <!-- get a combobox here -->
            <select placeholder = "Select email address">
            <option value="volvo">director@gmail.com</option>
            <option value="saab">dddr201824@gmail.com</option>
            <option value="mercedes">admin@gmail.com</option>
            <!-- <option value="audi">Audi</option> -->
            </select>

            <br />

            <label for='email'>Attach Document here</label>
            <input type="file" name="UploadFileName" >
            <!-- <input type='text' name='email' id='email' required size='25'placeholder=" Enter your email"/> -->
            <br />

            <label for='email'>Your email address</label>
            <input type='email' name='email' id='email' required size='25'placeholder=" Enter your email"/>
            <br />

            <label for='email'>Your email password</label>
            <input type='password' name='password' id='email' required size='25'placeholder=" Enter your password"/>
            <br />

            

            <div class = "container" width = "800px">
                <input type='Submit' value='Send Email' class="btn btn-primary btn-md"/>   
                
            </div>
        </div>
        <!-- <div class="text-center" style="background-color:#f1f1f1">
            <button type="button" class="signupbtn" onclick="location.href='register'">Click here to sign up!</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
    </form>

</div>
</div>

</div>
</div>          
</body>

</html>

 
<!--onClick="this.form.reset()"-->


