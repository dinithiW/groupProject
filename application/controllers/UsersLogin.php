<?php

//this class will load the login Panel
class UsersLogin extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
    //completed
	public function index(){
		$this->load->view('users/loginPanelUsers');
	}

    public function process(){
        //echo "hahahhaha";
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->verifyUser();  
    }

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