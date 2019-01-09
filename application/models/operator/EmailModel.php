<?php 
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/PHPMailer.php");
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/Exception.php");
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/SMTP.php");

class EmailModel extends CI_Model{

	public function __construct() {
		parent::__construct();

	}


    public function sendBulkEmail($emailToAddress,$description,$content){

    }

    public function uploadFile(){
        
        $name = $_FILES['file']['name'];
        echo "$name";
        $actual_name = pathinfo($name,PATHINFO_FILENAME);
        $original_name = $actual_name;
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        $tmp_name = $_FILES['file']['tmp_name'];
        $location = "assets/advertisements/";
        echo"$actual_name";
        if(isset($name) && !empty($name)){
            $i=1;
            while(file_exists("$location$actual_name".".".$extension)){       
                $actual_name = (string)$original_name.$i;
                $name = $actual_name.".".$extension;
                $i++;
            }

            $rootDir = $_SERVER["DOCUMENT_ROOT"];
            if(move_uploaded_file($tmp_name, $location.$name)){
                $smsg = "Uploaded Successfully";
      
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                $mail->IsSMTP(); // enable SMTP

                $email = (string)$_POST['semail'];
                $password = (string)$_POST['password'];
                //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = (string)$email;
                $mail->Password = (string)$password;
                $mail->SetFrom((string)$email,'Management Assistant');
                $mail->Subject = (string)$_POST['description'];
                $mail->Body = (string)$_POST['description'];
                $mail->AddAddress((string)$_POST['remail']);
                $file_to_attach = $rootDir."/ucsc/assets/advertisements/".$name;
                $mail->AddAttachment( $file_to_attach , (string)$_POST['docName'] );

                try{
                    $mail->Send();
                    redirect(base_url()."OperatorDashboard/emailSuccessMessage");
                }catch (phpmailerException $e) {
                    redirect(base_url()."OperatorDashboard/emailErrorMessage");
                    //echo $e->errorMessage(); //Pretty error messages from PHPMailer
                } catch (Exception $e) {
                    redirect(base_url()."OperatorDashboard/emailErrorMessage");
                    echo $e->getMessage(); //Boring error messages from anything else!
                }
            

            }else{
                $fmsg = "Failed to Upload File";
                echo "$fmsg";
            }
        }else{
            $fmsg = "Please Select a File";
            echo "$fmsg";
        }

    }
}

?>