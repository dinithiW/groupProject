<?php

 
/* if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = "C:/xampp/htdocs/ucsc";      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}*/

  require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/PHPMailer.php");
  require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/SMTP.php");
  
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "diniwick124@gmail.com";
    /*$mail->Password = (string)$_POST['password'];*/
    $mail->Password = "Ruby180517";
    //$mail->SetFrom((string)$_POST['email']);
    $mail->SetFrom("diniwick124@gmail.com");
    $mail->Subject = (string)$_POST['subject'];
    $mail->Body = (string)$_POST['description'];
    $mail->AddAddress("dimuthi@gmail.com");
    //$handle = fopen($_FILES[$_POST["UploadFileName"]]["tmp_name"], 'r');
    $file_to_attach = 'C:/Users/Dinithi W/Desktop/ucsc.pdf';
    /*$file_to_attach = (string)$handle;*/
    $mail->AddAttachment( $file_to_attach , 'ucsc.pdf' );
?>
<div class="w3-main" style="margin-left:250px">
      <div class="w3-row w3-padding-64">
  <?php
     if(!$mail->Send()) {
        redirect(base_url()."OperatorDashboard/emailErrorMessage");
     } else {
        redirect(base_url()."OperatorDashboard/emailSuccessMessage");
     }
?>

</div>
</div>