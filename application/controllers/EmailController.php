<?php

class EmailController
{
    function __construct()
    {

    }

    public function send_mail($emailOb, $directorEmail, $txtDetails)
    {
        $from_email = "webphpjava@gmail.com";
        $emailOb->set_mailtype("html");
        $emailOb->from($from_email, $_SESSION["username"]);
        $emailOb->subject('Reports');
        //$email = explode(' - ', $operatorEmail)[1];
       // $to_email = substr($email, 1, strlen($email) - 2);
        $to_email =$directorEmail;
        $emailOb->to($to_email);
        $emailOb->message($txtDetails);

        //Send mail
        if ($emailOb->send()) {
//            $this->session->set_flashdata("email_sent", "Email sent successfully.");
            redirect(base_url() . "reports?email=success");
        } else {
//            $this->session->set_flashdata("email_sent", "Error in sending Email.");
            redirect(base_url() . "reports?email=failed");
        }
    }

    public function sendMailToApplicant($emailOb, $email, $data)
    {
        $from_email = "webphpjava@gmail.com";
        $emailOb->set_mailtype("html");
        $emailOb->from($from_email, 'UCSC Application');
        $emailOb->subject('Login Details');
        $emailOb->to($email);
        $emailOb->message($data['id']);

        //Send mail
        $emailOb->send();
    }
}