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

	public function adRequest(){
		$this->load->view('users/director/header');
        $this->load->view('users/director/adRequest');
        $this->load->view('users/director/footer');
	}

	public function addNotification(){
		$this->load->model('Notification');
        $this->Notification->add();
	}

	public function viewNotification(){
		$this->load->model('Notification');
        $this->Notification->view();
	}
}

?>