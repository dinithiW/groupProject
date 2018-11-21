<?php

class OperatorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
        $this->load->view('users/operator/header');
        $this->load->view('home');
        $this->load->view('users/operator/footer');
    }
    
    //this function for select areas of applicants 
    public function categorizeApplications(){
        $this->load->view('users/operator/header');
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data1'] = $this->categorizeApplilcationsModel->fetch_datas();
        $data['fetch_data2'] = $this->categorizeApplilcationsModel->fetchFileUploadLinks();
        $this->load->view('users/operator/categorizeApplications',$data);
        $this->load->view('users/operator/footer');
    }

    //redirect to this file after execute thr sql query
    public function reDirect(){  
        $this->categorizeApplications();  
    }

    //for select data from database
    public function selectDataFromDatabase(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $data['fetch_data'] = $this->categorizeApplilcationsModel->fetch_datas();
        $this->load->view('applicant/applicationForm/ApplicationFormSelectAreas',$data);
    }

    //for insert data into database
    public function insesrtDataForDatabase(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $data = array("AREA_NAME"=> $this->input->post('insertArea'));
        $this->categorizeApplilcationsModel->insertAreas($data);
        redirect(base_url()."OperatorDashboard/reDirect");
    }

    //for delete data from database
    public function deleteDataFromDatabase(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $this->categorizeApplilcationsModel->deleteAreas($this->input->post('deleteArea'));
        redirect(base_url() . "OperatorDashboard/reDirect");
    }

    
    public function insesrtFileUploadingLinkForDatabase(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $data = array("LINK_NAME"=> $this->input->post('insertFileUploadLink'));
        $this->categorizeApplilcationsModel->insertFileUploadLink($data);
        redirect(base_url()."OperatorDashboard/reDirect");
    }

    //for delete fileupload data from database
    public function deleteFileUploadLinkFromDatabase(){
        $this->load->model('operator/categorizeApplilcationsModel');
        $this->categorizeApplilcationsModel->deleteFileUploadLinkFromDatabase($this->input->post('deleteFileUploadLink'));
        echo $this->input->post('deleteFileUploadLink');
        redirect(base_url()."OperatorDashboard/reDirect");
    }


    public function ad(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/createAd');
        $this->load->view('includes/footer');
    	//$this->load->view('users/operator/header');
    	
    	//$this->load->view('users/operator/footer');
    }

    public function sendAdToSAR(){
       
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/sendEmail');
        $this->load->view('users/operator/footer');
    }

    public function addPanelMember(){
       
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/addPanelMember');
        $this->load->view('users/operator/footer');
    }

    public function sendEmail(){
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/showEmails');
        $this->load->view('users/operator/footer');
    }

    public function emailSuccessMessage(){
        $this->load->view('messages/emailSuccess');
    }

    public function emailErrorMessage(){
        $this->load->view('messages/errorEmail'); 
    }

    public function logout(){
        $this->load->view('users/loginPanelUsers');
    }

    public function addMemberModel(){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->add();

    }

    public function deleteMemberModel(){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->delete();

    }

    public function memberSuccess(){
        $this->load->view('messages/panelMemberSuccess');
    }
}
?>