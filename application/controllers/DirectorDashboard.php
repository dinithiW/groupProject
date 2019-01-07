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
		
		$this->load->model('Director/applicantDetails');
		$data['records'] = $this->applicantDetails->getCreatedAd();
		
		$this->load->view('users/director/approveAd', $data);
		$this->load->view('includes/footer');
		
	}

	//Get data basic personal details
	public function viewApplicants(){
		$this->load->view('includes/header');
		// $this->load->view('users/director/viewApplicants');
		
	 	$this->load->model('Director/applicantDetails');
	 	$data['records'] = $this->applicantDetails->getdata();
		$this->load->view('users/director/viewApplicants', $data);
		$this->load->view('includes/footer');
		 
	}

	//Get basic personal details about selected applicants
	public function approveSelected(){
		$this->load->view('includes/header');
		// $this->load->view('users/director/approveSelected');
		
		$this->load->model('Director/applicantDetails');
		$data['records_lp'] = $this->applicantDetails->getSelected_l_p();
		$data['n_records_lp'] = $this->applicantDetails->getNotSelected_l_p();
		$data['records_i'] = $this->applicantDetails->getSelected_s_l_i();
		$data['n_records_i'] = $this->applicantDetails->getNotSelected_s_l_i();
		$data['records_ii'] = $this->applicantDetails->getSelected_s_l_ii();
		$data['n_records_ii'] = $this->applicantDetails->getNotSelected_s_l_ii();

		$this->load->view('users/director/approveSelected', $data);
		$this->load->view('includes/footer');
		
	}

	public function deleteApplicant($INDEX_NUMBER){
		$this->load->view('messages/delSelectedApplicant');
	}
	
	public function deleteApplicantModel($INDEX_NUMBER){
        $this->load->model('Director/applicantDetails');
        $this->applicantDetails->rejectSelectedApplicant($INDEX_NUMBER);
        redirect(base_url().'Director/approveSelected');
    }

	public function approveFinalSet(){
		$this->load->view('includes/header');

		$this->load->model('Director/applicantDetails');
		$data['records_lp'] = $this->applicantDetails->getMarks_l_p();
		$data['records_i'] = $this->applicantDetails->getMarks_s_l_i();
		$data['records_ii'] = $this->applicantDetails->getMarks_s_l_ii();

		$this->load->view('users/director/approveFinalSet', $data);
		$this->load->view('includes/footer');
		
	}

	public function setInterviewDate(){
		$this->load->view('includes/header');
		$this->load->view('users/director/setInterviewDate');
		$this->load->view('includes/footer');
		
	}

	//Send an email to SAR
	public function sendmail(){
		$email = new EmailController();
        $this->load->library('email');
        $email->send_mail($this->email, $this->input->post('directormail'), $this->input->post('reportdetails'));
	}


	//Send data to the database
	public function insertData(){
		
		$data = array(
			'name' => $this->input->post('vacanciesneeded', TRUE),
			'dead_line' => $this->input->post('deadline', TRUE),
			'comments' => $this->input->post('notes', TRUE)
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

	//Send advertisment approval details to database
	public function insertAdDetails(){
		
		$data = array(
			'reject_reason' => $this->input->post('opinion', TRUE)
		);

		
		$response = $this->db->insert('created_ad', $data);
		
		if($response){
			$message = "Request sent successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('DirectorDashboard/approveAd');
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