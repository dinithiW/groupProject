<?php
class DirectorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('users/director/header');
        $this->load->view('home');
        $this->load->view('users/director/footer');
	}
}

?>