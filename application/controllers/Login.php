<?php

//new Login page related controller
class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

    //loads the home page
    public function index(){
        $this->load->view('login');
	}

	//this method will validate the login credentials
	public function process(){
        
        $this->load->model('ValidateLogin');
        $this->ValidateLogin->validate();  
        
    }



    //
    public function errorUsername(){
        $this->load->view('messages/invalidUsername');
    }

    public function errorPassword(){
        $this->load->view('messages/wrongPassword');
    }
    public function register(){
    	$this->load->view('registerPanel');
    }

    public function addUser(){
    	$this->load->model('registerUser');
        $this->loginPanelValidation->checkValidity();  
    }
	

}

?>
