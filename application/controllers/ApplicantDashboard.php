<?php

class ApplicantDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }



    public function applicationFirstPage(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationForm',$data);
    	
    }
    

    /**
     * this function is use for the show the need to uploaded files
     * select files from database and show them
     */
    public function applicationFifththPage(){
        $this->load->view('includes/header');			
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetchFileUploadLinks();
        $this->load->view('applicant/applicationForm/ApplicationFormFileUpoload',$data);
        
       
    }

    public function applicationSelectAreas(){
        
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationForm',$data);
    }

    public function applicationSelect(){
        $this->load->view('applicant/applicationForm/ApplicationFormSelectAreas');
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