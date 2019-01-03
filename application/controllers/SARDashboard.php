<?php
include 'EmailController.php';

class SARDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

    
	public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
	}


	public function report(){
		$this->load->view('includes/header');
        $this->load->view('users/SAR/reportgenerate');
        $this->load->view('includes/footer');
	}


	public function sendmail(){
		$email = new EmailController();
        $this->load->library('email');
        $email->send_mail($this->email, $this->input->post('directormail'), $this->input->post('reportdetails'));
	}



	public function confirmAdvertisement(){
		$this->load->model('SAR/AdvertisementModel');
		$this->load->AdvertisementModel->confirmadd();
		redirect(base_url().'SAR?confirmed=success');
	}


	public function viewAdvertisement(){
		$this->load->model('SAR/AdvertisementModel');
		//$this->load->setNotifyTo0();
		$this->load->library('session');
		$SESSION["notify_count"]=0;

		$data['advertisement']=$this->AdvertisementModel->getAdvertisement();
		$this->load->view('users/SAR/advertisement',$data);
	}


	public function setInterviewDates(){
		$data=[];
		$this->load->model('SAR/PanelDetails');
		$data['Members']=$this->PanelDetails->getAllEmailAddresses();
		var_dump($data['Members']);
		$this->load->view('includes/header');
        $this->load->view('users/SAR/setDates', $data);
        $this->load->view('includes/footer');
	}


	public function getAllmailAddresses(){
		$data=[];
		$this->load->model('SAR/PanelDetails');
		$data['Members']=$this->load->PanelDetails->getAllEmailAddresses();
		var_dump($data['members']);
		exit();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/setDates',$data);
		$this->load->view('includes/footer');
	}


	public function viewCandidates(){
		$this->load->view('includes/header');
        $this->load->view('users/SAR/viewCandidates');
        $this->load->view('includes/footer');
	}



	public function getseniorLecturers(){
		$data=[];
		$this->load->model('SAR/CandidatesModel');
		$data['Members']=$this->load->CandidatesModel->getallseniorlecturers();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewCandidates',$data);
		$this->load->view('includes/footer');
	}


	public function getcategoryoneLecturers(){
		$data=[];
		$this->load->model('SAR/CandidatesModel');
		$data['Members']=$this->load->CandidatesModel->getallcategoryonelecturers();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewCandidates',$data);
		$this->load->view('includes/footer');
	}


	public function getcategorytwoLecturers(){
		$data=[];
		$this->load->model('SAR/CandidatesModel');
		$data['Members']=$this->load->CandidatesModel->getallcategorytwolecturers();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewCandidates',$data);
		$this->load->view('includes/footer');
	}


	public function getcategorythreeLecturers(){
		$data=[];
		$this->load->model('SAR/CandidatesModel');
		$data['Members']=$this->load->CandidatesModel->getallcategorythreelecturers();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewCandidates',$data);
		$this->load->view('includes/footer');
	}
}
?>