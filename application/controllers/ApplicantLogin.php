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
        echo "yeahhh";
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->validateApplicant();  
    }

    
    public function register(){
    	$this->load->view('applicant/registerPanel');
    }

    public function addUser(){
        echo "1";
    	$this->load->model('registerUser');
        echo "1";
        $this->registerUser->register();  
        echo "1";
    }

    public function errorUsername(){
        echo "ksjdfkjshdkfhskjfkhsh";
        $this->load->view('messages/noUsername');
    }

    public function wrongPassword(){
        //echo "ksjdfkjshdkfhskjfkhsh";
        $this->load->view('messages/wrongPassword');
    }

    public function applicant(){
    	$this->load->view('applicant/header');
    	$this->load->view('home');
    	$this->load->view('applicant/footer');
    }

    public function contact(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/contact');
        $this->load->view('applicant/footer');
    }

    public function errorPassword(){
        $this->load->view('messages/incorrectPassword');
    }
}
?>