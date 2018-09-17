<?php

class ApplicantDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('users/operator/header');
        $this->load->view('home');
        $this->load->view('users/operator/footer');
	}


    public function fillApplication(){
    	$this->load->view('applicant/header');
    	$this->load->view('applicant/applicationForm/ApplicationFormPartOne');
    	$this->load->view('applicant/footer');
    }

    public function applicationSecond(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormPartTwo');
        $this->load->view('applicant/footer');
    }

    public function contact(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/contact');
        $this->load->view('applicant/footer');
    }
}
?>