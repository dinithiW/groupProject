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


    public function ad(){
    	$this->load->view('users/operator/header');
    	$this->load->view('users/operator/createAd');
    	$this->load->view('users/operator/footer');
    }

}
?>