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
        $this->load->view('users/director/adRequest');
	$this->load->view('includes/footer');
	
	}

	public function approveAd(){
		$this->load->view('includes/header');
		$this->load->view('users/director/approveAd');
		$this->load->view('includes/footer');
		
	}

	public function viewApplicants(){
		$this->load->view('includes/header');
		$this->load->view('users/director/viewApplicants');
		$this->load->view('includes/footer');
		
	}

	public function approveSelected(){
		$this->load->view('includes/header');
		$this->load->view('users/director/approveSelected');
		$this->load->view('includes/footer');
		
	}

	public function approveFinalSet(){
		$this->load->view('includes/header');
		$this->load->view('users/director/approveFinalSet');
		$this->load->view('includes/footer');
		
	}

	public function setInterviewDate(){
		$this->load->view('includes/header');
		$this->load->view('users/director/setInterviewDate');
		$this->load->view('includes/footer');
		
	}

	//Send data to the database
	public function insertData(){
		
		$data = array(
			'name' => $this->input->post('vacanciesneeded', TRUE),
			'dead_line' => $this->input->post('deadline', TRUE)
		);

		
		$response = $this->db->insert('vacancies', $data);
		
		if($response){
			$message = "Request sent successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('DirectorDashboard/adRequest');
		} else{
			$message = "Error. Something went wrong!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

		
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