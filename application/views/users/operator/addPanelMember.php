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

    <style type="text/css">
        label{
            width: 170px;
            font-size: 16px;
        }

        input[type=text]{
            margin-left: 10px;
        }
    </style>
</head> 

<body>
	<div class="w3-main" style="margin-left:250px">
        <div class="w3-row w3-padding-64">
            <div style="background-color: #548795;width: auto; border-color: black; padding-right: 10px;display: inline-block; margin-left: 20px; border-radius: 5px;padding-top: 10px; padding-bottom: 10px;">
        	<form action = "" method = "POST" >
        		<label for='email'>First Name</label>
            	<input type='text' name='fname' id='email' required size='25'placeholder=" Enter the First Name" />
            	<br/>

                <label for='email'>Last Name</label>
                <input type='text' name='subject' required size='25'placeholder=" Enter the Last Name"/>
                <br/>

                <label for='email'>Email Address</label>
                <input type='text' name='subject' id='email' required size='25'placeholder=" Enter the email address"/>
                <br/>

                <label for='email'>Gender</label>
                <input type='radio' name='subject' id='email' required />Male
                <input type='radio' name='subject' id='email' required style="margin-left: : 20px;"/>Female
                <br/>

                <label for='email'>Contact Number</label>
                <input type='text' name='subject' id='email' required size='25'placeholder=" Enter the contact number"/>
                <br/>

                <label for='email'>Designation</label>
                <input type='text' name='subject' id='email' required size='25'placeholder=" Enter the designation"/>
                <br/>

                <label for='email'>Address</label>
                <input type='text' name='subject' id='email' required size='25'placeholder=" Enter the mailing address"/>


                <br/>
        	</form>
    
            </div>
        </div>
    </div>
</body>