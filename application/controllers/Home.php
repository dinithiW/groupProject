<?php

//this class will load the home Page
class Home extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
  }

    public function index(){
        //$this->load->view('includes/header');
        $this->load->view('homePage');
        //$this->load->view('includes/footer');
	}

}

?>