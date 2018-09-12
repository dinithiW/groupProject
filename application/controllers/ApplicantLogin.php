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
        $this->loginPanelValidation->validate();  
    }

    public function register(){
    	$this->load->view('registerPanel');
    }

    public function addUser(){
    	$this->load->model('registerUser');
        $this->loginPanelValidation->register();  
    }

    public function applicant(){
    	$this->load->view('applicant/header');
    	$this->load->view('applicant/home');
    	$this->load->view('applicant/footer');
    }

    public function contact(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/contact');
        $this->load->view('applicant/footer');
    }
}
?>