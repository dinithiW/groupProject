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


    public function applicationFirstPage(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->view('applicant/applicationForm/ApplicationFormPartOne');
       
    	//$this->load->view('applicant/footer');
    }

    public function applicationSecondPage(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->view('applicant/applicationForm/ApplicationFormPartTwo');
       
    }
    
    public function applicationThirdPage(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->view('applicant/applicationForm/ApplicationFormPartThree');
       
    }

    public function applicationFourthPage(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->view('applicant/applicationForm/ApplicationFormPartFour');
       
    }

    public function applicationFifththPage(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->view('applicant/applicationForm/ApplicationFormFileUpoload');
       
    }

    public function applicationSelectAreas(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/applicationForm/ApplicationFormNavigationBar');
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationFormSelectAreas',$data);
    }

    public function applicationSelect(){
        
        $this->load->view('applicant/applicationForm/ApplicationFormSelectAreas');
        echo"ok submitted ruwan";
       
    }
    
    public function contact(){
        $this->load->view('applicant/header');
        $this->load->view('applicant/contact');
        $this->load->view('applicant/footer');
    }

    public function logout(){
        $this->load->view('applicant/loginPanelApplicant');
    }
}
?>