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
    	$this->load->model('registerUser');
        $this->registerUser->register();  
    }

    public function errorUsername(){
        //echo "ksjdfkjshdkfhskjfkhsh";
        $this->load->view('messages/noUsername');
    }

    public function existsUsername(){
        //echo "ksjdfkjshdkfhskjfkhsh";
        $this->load->view('messages/errors');
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

    public function errorPassword(){
        $this->load->view('messages/incorrectPassword');
    }

    public function success(){
        $this->load->view('messages/successRegister');
    }
}
?>