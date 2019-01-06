<?php 

class EmailModel extends CI_Model{

	public function __construct() {
		parent::__construct();
	}


    public function singleEmail($emailToAddress){

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
        $mail->Username = (string)$_POST['email'];
        $mail->Password = (string)$_POST['password'];
        $mail->SetFrom((string)$_POST['email']);
        $mail->Subject = (string)$_POST['subject'];
        $mail->Body = (string)$_POST['description'];
        $mail->AddAddress($emailToAddress);
        //$handle = fopen($_FILES[$_POST["UploadFileName"]]["tmp_name"], 'r');
        //$file_to_attach = 'C:/Users/Dinithi W/Desktop/ucsc.pdf';
        /*$file_to_attach = (string)$handle;*/
       // $mail->AddAttachment( $file_to_attach , 'ucsc.pdf' );

         if(!$mail->Send()) {
            redirect(base_url()."OperatorDashboard/emailErrorMessage");
         } else {
            redirect(base_url()."OperatorDashboard/emailSuccessMessage");
         }



    }
}

?>