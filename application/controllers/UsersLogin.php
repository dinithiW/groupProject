<?php

class UsersLogin extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
		$this->load->view('users/loginPanelUsers');
	}

    public function process(){
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->validate();  
    }

    public function register(){
    	$this->load->view('registerPanel');
    }

    public function addUser(){
    	$this->load->model('registerUser');
        $this->loginPanelValidation->checkValidity();  
    }

    public function ad(){
    	$this->load->view('users/operator/header');
    	$this->load->view('users/operator/createAd');
    	$this->load->view('users/operator/footer');
    }

}
?>