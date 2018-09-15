<?php

  require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/PHPMailer.php");
  require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "diniwick124@gmail.com";
    $mail->Password = "Rico191112";
    $mail->SetFrom("diniwick124@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress("dindermortrox@gmail.com");
    $file_to_attach = 'C:/Users/Dinithi W/Desktop/hahahah.pdf';
    $mail->AddAttachment( $file_to_attach , 'hahahah.pdf' );
?>
<div class="w3-main" style="margin-left:250px">
      <div class="w3-row w3-padding-64">
  <?php
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>

</div>
</div>