<?php

class ApplicantDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

    public function index(){
        $this->load->view('includes/header');
        $this->load->view('MainDashboard');
        $this->load->view('includes/footer');
    }

/**
 * this function is used for the check that applicatn already filled the form or not
 */
    public function applicationFirstPage(){

        if($_SESSION['application_form_filled'] == "not"){
            $this->load->model('operator/categorizeApplilcationsModel');
            $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
            $this->load->view('applicant/applicationForm/ApplicationForm',$data);
        }
        if($_SESSION['application_form_filled'] == "yes"){
            redirect('ApplicationForm/editfileUpload');
        }
        
    	
    }

    /**
 * this function is used for the check that applicatn already filled the form or not
 */
public function applicationSecondPage(){
    //echo $_SESSION['application_form_filled'];
    if($_SESSION['application_form_filled'] == "not"){
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationFormCopy',$data);
    }
    if($_SESSION['application_form_filled'] == "yes"){
        redirect('ApplicationForm/editfileUpload');
    }
    
    
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
        $this->load->view('includes/footer');
       
    }

    

    /**
     * this function is use for the show the application form for the higher authorized users
     * select files from database and show them
     */
    public function applicationFileViewFor(){
        
        $this->load->view('includes/header');
					
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetchFileUploadLinks();
        $this->load->view('applicant/applicationForm/ApplicationFormFileUpoload',$data);
        $this->load->view('includes/footer');
       
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