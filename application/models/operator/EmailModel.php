<?php 
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/PHPMailer.php");
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/Exception.php");
require("C:/xampp/htdocs/ucsc/assets/lib/PHPMailer-master/src/SMTP.php");

class EmailModel extends CI_Model{

	public function __construct() {
		parent::__construct();
        $this->load->database();

	}

    public function sendBulkEmail($emails){
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $subject = "Call for interview";
        $mail->IsSMTP(); // enable SMTP
        
        $email = (string)$_POST['semail'];
        $password = (string)$_POST['password'];
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = (string)$email;
        $mail->Password = (string)$password;
        $mail->SetFrom((string)$email,'Management Assistant');
        $mail->Subject = (string)$subject;
        $mail->Body = (string)$_POST['content'];
        

        try{
            foreach($emails as $e){
            $mail->AddAddress((string)$e);
            $mail->Send();
        }
            $this->load->view('messages/bulkEmailSuccess');
        }catch (phpmailerException $e) {
            $this->load->view('messages/errorBulkMails'); 
        } catch (Exception $e) {
            $this->load->view('messages/errorBulkMails'); 
        }

    }

    //upload a file and sends an email
    public function uploadFile(){
        
        //name of the file
        $name = $_FILES['file']['name'];
        //return information about the file path
        $actual_name = pathinfo($name,PATHINFO_FILENAME);
        $original_name = $actual_name;
        //extension of the file
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        //temporary location of the file uploaded(usually C:\xampp\tmp\php(random stuff).tmp)
        $tmp_name = $_FILES['file']['tmp_name'];
        //target location the file needs to be uploaded to
        $location = "assets/advertisements/";
        if(isset($name) && !empty($name)){
            $i=1;
            //if a file exists with the specified path then this loop will run
            //will append a number to the end of the file name
            while(file_exists("$location$actual_name".".".$extension)){       
                $actual_name = (string)$original_name.$i;
                $name = $actual_name.".".$extension;
                $i++;
            }

            //gets the root directory
            $rootDir = $_SERVER["DOCUMENT_ROOT"];
            //moving uploaded file from temporary location to the specified location
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
                $mail->Subject = (string)$_POST['subject'];
                $mail->Body = (string)$_POST['description'];
                $mail->AddAddress((string)$_POST['remail']);
                $file_to_attach = $rootDir."/ucsc/assets/advertisements/".$name;
                $mail->AddAttachment( $file_to_attach , (string)$_POST['docName'] );


                try{
                    $mail->Send();
                    $ad_url = base_url().'assets/advertisements/'.$name;
                    $data = array('ad_ref'=>$_POST['docName'],'vacancy_id'=>$_POST['vacancy'],'ad_url'=>$ad_url,'is_approved'=>0);
                    $this->db->insert('created_ad',$data);
                    $this->load->view('messages/emailSuccess');
                }catch (phpmailerException $e) {
                    $this->load->view('messages/errorEmail'); 
                    //echo $e->errorMessage(); //Pretty error messages from PHPMailer
                } catch (Exception $e) {
                    $this->load->view('messages/errorEmail'); 
                    //echo $e->getMessage(); //Boring error messages from anything else!
                }
            }else{
                $this->load->view('messages/fileUploadFailed');
            }
        }else{
            $this->load->view('messages/fileUploadFailed');
        }

    }
}

?>