<?php
echo "l........................";
$name = $_FILES['file']['name'];
/*$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];*/
$actual_name = pathinfo($name,PATHINFO_FILENAME);
$original_name = $actual_name;
$extension = pathinfo($name, PATHINFO_EXTENSION);
$tmp_name = $_FILES['file']['tmp_name'];
$location = "assets/advertisements/";

if(isset($name) && !empty($name)){
    $i=1;
    while(file_exists("$location$actual_name".".".$extension))
    {       
    echo "<br>yesx";    
    $actual_name = (string)$original_name.$i;
    $name = $actual_name.".".$extension;
    $i++;
}

        if(move_uploaded_file($tmp_name, $location.$name)){

            $smsg = "Uploaded Successfully";
            echo"$smsg";
        }else{
            $fmsg = "Failed to Upload File";
            echo "$fmsg";
        }
}else{
    $fmsg = "Please Select a File";
    echo "$fmsg";
}


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

/*  require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/PHPMailer.php");
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
    /*$mail->Password = "Ruby180517";*/
    //$mail->SetFrom((string)$_POST['email']);
    /*$mail->SetFrom("diniwick124@gmail.com");
    $mail->Subject = (string)$_POST['subject'];
    $mail->Body = (string)$_POST['description'];
    $mail->AddAddress("dimuthi@gmail.com");*/
    //$handle = fopen($_FILES[$_POST["UploadFileName"]]["tmp_name"], 'r');
    /*$file_to_attach = 'C:/Users/Dinithi W/Desktop/ucsc.pdf';*/
    /*$file_to_attach = (string)$handle;*/
    /*$mail->AddAttachment( $file_to_attach , 'ucsc.pdf' );*/
?>
<!-- <div class="w3-main" style="margin-left:250px">
      <div class="w3-row w3-padding-64">
  <?php
     if(!$mail->Send()) {
        redirect(base_url()."OperatorDashboard/emailErrorMessage");
     } else {
        redirect(base_url()."OperatorDashboard/emailSuccessMessage");
     }
?>

</div>
</div>*/ -->

<?php
echo "lalalalalalal";
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];

echo "$name";
echo "$size";
/*if(isset($name) && !empty($name)){
        $location = "uploads/";
        if(move_uploaded_file($tmp_name, $location.$name)){
            $smsg = "Uploaded Successfully";
        }else{
            $fmsg = "Failed to Upload File";
        }
}else{
    $fmsg = "Please Select a File";
}*/
?>