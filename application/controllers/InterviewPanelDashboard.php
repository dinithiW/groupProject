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
    	// $this->load->view('includes/header');
        /* echo "hsghajgd";
        $this->load->view('users/interviewPanel/viewApplicants');
        $this->load->view('includes/footer');*/
       // $this->load->model('InterviewPanel/ApplicantModel');
        //$data['applicants']=$this->ApplicantModel->getApplicants();
        $this->load->model('InterviewPanel/ApplicantModel');
        if($this->input->post('lecturerType')!=""){
            if($this->input->post('lecturerType')=="PROBATIONARY_LECTURER"){
                $data['lecturerType']="PROBATIONARY_LECTURER";
                $data['applicants']=$this->ApplicantModel->getApplicantsPL();

            }else if($this->input->post('lecturerType')=="SENIOR_LECTURE_GR.I"){
                $data['lecturerType']="SENIOR_LECTURE_GR.I";
                $data['applicants']=$this->ApplicantModel->getApplicantsSL1();

            }else if ($this->input->post('lecturerType') == "SENIOR_LECTURE_GR.II") {
                $data['lecturerType'] = "SENIOR_LECTURE_GR.II";
                $data['applicants'] = $this->ApplicantModel->getApplicantsSL2();
            }
        } else {
           if (!isset($_SESSION['lecturerType'])) {
                $_SESSION['lecturerType'] = "PROBATIONARY_LECTURER";
            }
            $data['applicants'] = $this->ApplicantModel->getApplicants($_SESSION['lecturerType']);
        }

        }


        $this->load->model('InterviewPanel/MarkingCriteriaModel');

        $data['criteria_headings']=$this->MarkingCriteriaModel->getHeadings();
        $data['detailed_criteria_headings']=$this->MarkingCriteriaModel->getDetailedHeadings();
        $data['detailed_criteria']=$this->MarkingCriteriaModel->getDetailedCriteria();
        $this->load->view('includes/header');
        $this->load->view ('users/interviewPanel/interview_panel',$data);
        $this->load->view('includes/footer');

    }

     public function submitApplicantMarks()
    {
        $this->load->model('InterviewPanel/ApplicantModel');
        if ($this->input->post('dropdownName') != "") {
            $_SESSION['lecturerType'] = $this->input->post('dropdownName');
            if ($this->input->post('dropdownName') == "PROBATIONARY_LECTURER") {
                $this->ApplicantModel->submitApplicantMarks("PROBATIONARY_LECTURER");
            } else if ($this->input->post('dropdownName') == "SENIOR_LECTURE_GR.I") {
                $this->ApplicantModel->submitApplicantMarks("SENIOR_LECTURE_GR.I");
            } else if ($this->input->post('dropdownName') == "SENIOR_LECTURE_GR.II") {
                $this->ApplicantModel->submitApplicantMarks("SENIOR_LECTURE_GR.II");
            }
        }
        redirect(base_url() . "Panel/viewApplicants");
    }
    public function getMarks()
    {
        $this->load->model('InterviewPanel/ApplicantModel');
        $marks = $this->ApplicantModel->getApplicantData($this->input->post('dropdownName'));
        $total = 0;
        $count = 0;
        foreach ($marks as $row) {
            $count++;
            $total += intval($row->marks);
            echo "<tr style=\"font-size: 16px;background-color: white;height: 50px;cursor: pointer\"
                                <td></td>
                                <td>$row->USERNAME</td>
                                <td><span>$row->marks / 100</span></td>
                                </tr>";
        }
        $value=$total/$count;
        echo "<tr style=\"font-size: 16px;background-color: white;height: 50px;cursor: pointer\"\n' +
                        '<td></td>\n' +
                        '<td style=\"font-weight: bold\">Total</td>\n' +
                        '<td><span style='font-weight: bold'>$value / 100</span></td>\n' +
                        '</tr>";
    }
    public function getComments()
    {
        $this->load->model('InterviewPanel/ApplicantModel');
        $comments = $this->ApplicantModel->getApplicantData($this->input->post('dropdownName'));
        foreach ($comments as $row) {
            echo "<tr style=\"font-size: 16px;background-color: white;height: 50px;cursor: pointer\"
                                <td></td>
                                <td>$row->USERNAME</td>
                                <td><span>$row->comment</span></td>
                                </tr>";
        }
    }


   /* public function submitData(){
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
    }*/

     /*public function viewMarks(){
         $this->load->view('users/interviewPanel/header');
        $this->load->view('users/interviewPanel/marks');
        $this->load->view('users/interviewPanel/footer');
    }
*/

}

?>