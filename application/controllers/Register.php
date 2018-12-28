<?php

//new Login page related controller
class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

    //loads the home page
    public function index(){
        $this->load->view('register');
	}

	//this method will validate the login credentials
	public function process(){
        $this->load->model('RegisterUser');
        $this->RegisterUser->register();  
    }

    //
    /*public function errorUsername(){
        $this->load->view('messages/invalidUsername');
    }*/

    public function errorPassword(){
        $this->load->view('messages/incorrectPassword');
    }

    public function errorUsername(){
        $this->load->view('messages/errors');
    }

    public function applicantHome(){
        $this->load->view('includes/header');
        $this->load->view('MainDashboard');
        $this->load->view('includes/footer');
    }

    public function success(){
        $this->load->view('messages/successRegister');
    }
    /*public function register(){
    	$this->load->view('registerPanel');
    }
    }*/
	

}

?>
