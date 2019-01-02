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
		$this->load->setNotifyTo0();
		$this->load->library('session');
		$SESSION["notify_count"]=0;

		$data['advertisement']=$this->AdvertisementModel->getAdvertisement();
		$this->load->view('users/SAR/advertisement',$data);
	}
	public function setInterviewDates(){
		$this->load->view('includes/header');
        $this->load->view('users/SAR/setDates');
        $this->load->view('includes/footer');
	}
}
?>