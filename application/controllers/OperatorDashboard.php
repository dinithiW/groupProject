<?php

class OperatorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('users/operator/header');
        $this->load->view('home');
        $this->load->view('users/operator/footer');
    }
    
    //this function for select areas of applicants 
    public function categorizeApplications(){
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/categorizeApplications');
        $this->load->view('users/operator/footer');
    }

    public function ruwan(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $this->categorizeApplilcationsModel->in();
    }


    public function ad(){
    	$this->load->view('users/operator/header');
    	$this->load->view('users/operator/createAd');
    	$this->load->view('users/operator/footer');
    }

    /*public function showEmails(){
        $this->load->view('users/operator/header');
        $this->load->view('users/showEmails');
        $this->load->view('users/operator/footer');
    }*/

    public function sendAdToSAR(){
        //echo 'hahahah';
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/sendEmail');
        $this->load->view('users/operator/footer');
    }

    public function sendEmail(){
        //echo 'hahahah';
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/showEmails');
        $this->load->view('users/operator/footer');
    }

    public function emailSuccessMessage(){
        //echo 'hahahah';
        //$this->load->view('users/operator/header');
        $this->load->view('messages/emailSuccess');
        //$this->load->view('users/operator/footer');
    }

    public function emailErrorMessage(){
        //echo 'hahahah';
        //$this->load->view('users/operator/header');
        $this->load->view('messages/errorEmail');
        //$this->load->view('users/operator/footer');
    }

    public function logout(){
        //echo 'hahahah';
        //$this->load->view('users/operator/header');
        $this->load->view('users/loginPanelUsers');
        //$this->load->view('users/operator/footer');
    }
}
?>