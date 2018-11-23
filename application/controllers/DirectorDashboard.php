<?php
class DirectorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
	}

	public function adRequest(){
	$this->load->view('includes/header');
        $this->load->view('users/director/addNew');
        $this->load->view('includes/footer');
	}

	public function finalize(){
		
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