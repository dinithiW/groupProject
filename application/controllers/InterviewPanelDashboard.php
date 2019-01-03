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
        /* echo "hsghajgd";
        $this->load->view('users/interviewPanel/viewApplicants');
        $this->load->view('includes/footer');*/
        $this->load->model('InterviewPanel/ApplicantModel');
        $data['applicants']=$this->ApplicantModel->getApplicants();

        $this->load->model('InterviewPanel/MarkingCriteriaModel');

        $data['criteria_headings']=$this->MarkingCriteriaModel->getHeadings();
        $data['detailed_criteria_headings']=$this->MarkingCriteriaModel->getDetailedHeadings();
        $data['detailed_criteria']=$this->MarkingCriteriaModel->getDetailedCriteria();
         $this->load->view('includes/header');
        $this->load->view('users/interviewPanel/interview_panel',$data);
         $this->load->view('includes/footer');

    }

    public function submitData(){
        $this->load->model('InterviewPanel/ApplicantModel');
        $this->ApplicantModel->submitApplicantMarks();
        redirect(base_url()."interviewPanel/interview_panel");
    }

    public function getComments(){
        $this->load->model('InterviewPanel/ApplicantModel');
        $comments=$this->ApplicantModel->getComments();
        foreach ($comments as $row) {
           echo $row->title.'.'.$row->name.' = '.$row->description.'~';
        }
    }

     /*public function viewMarks(){
         $this->load->view('users/interviewPanel/header');
        $this->load->view('users/interviewPanel/marks');
        $this->load->view('users/interviewPanel/footer');
    }
*/

}

?>