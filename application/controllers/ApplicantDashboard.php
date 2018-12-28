<?php
/**
 * this controller contains the funcitons are relavent to the applicant
 */
class ApplicantDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }


    /**
     * this function use for the view application form
     * get selected areas from database and show them
    */
    public function applicationFirstPage(){

        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationForm',$data);
    	
    }
    

    public function logout(){
        $this->load->view('applicant/loginPanelApplicant');
    }
}
?>