<?php

//contains everything related to the applicant
class ApplicantLogin extends CI_Controller{

    //done
	public function __construct() {
		parent::__construct();
        $this->load->helper('url');
        
    }
    
    //done
	public function index(){
		$this->load->view('applicant/loginPanelApplicant');
	}

    //done
    public function process(){
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->validateApplicant();  
    }

    public function register(){
    	$this->load->view('applicant/registerPanel');
    }

    public function addUser(){
    	$this->load->model('registerUser');
        $this->registerUser->register();  
    }

    public function errorUsername(){
       $this->load->view('messages/noUsername');
    }

    public function existsUsername(){
        $this->load->view('messages/errors');
    }

    public function wrongPassword(){
        $this->load->view('messages/wrongPassword');
    }

    public function applicant(){
        $name1 = $this->session->userdata['ruwan']['username'];
        $name2 = $this->session->userdata['ruwan']['username'];
        $name3 = $this->session->userdata['ruwan']['username'];
        if($name1=="ruwan"){
            $this->load->view('applicant/header');
            $this->load->view('home');
            $this->load->view('applicant/footer');
        }
        else{
            redirect(base_url()."ApplicantLogin/errorUsername");
        }


        /*
    	$this->load->view('applicant/header');
    	$this->load->view('home');
        $this->load->view('applicant/footer');
        */
    }

    public function errorPassword(){
        $this->load->view('messages/incorrectPassword');
    }

    public function success(){
        $this->load->view('messages/successRegister');
    }
}
?>