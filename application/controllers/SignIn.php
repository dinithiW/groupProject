<?php

class SignIn extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

	public function index(){
		$this->load->view('examples/pages/login');
	}

    public function process(){
        $this->load->model('UserValidation');
        $this->UserValidation->validate();
    }

    public function logout(){
        $this->load->model('UserValidation');
        $this->UserValidation->logout();
    }
}
?>