<?php

class InterviewPanelDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }

    public function viewApplicants(){
    	 $this->load->view('includes/header');
         echo "hsghajgd";
        $this->load->view('users/interviewPanel/viewApplicants');
        $this->load->view('includes/footer');
    }
     /*public function viewMarks(){
         $this->load->view('users/interviewPanel/header');
        $this->load->view('users/interviewPanel/marks');
        $this->load->view('users/interviewPanel/footer');
    }
*/

}

?>