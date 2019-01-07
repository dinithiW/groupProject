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
		$this->AdvertisementModel->confirmAdvertisement();
		redirect(base_url()."SAR/advertisement?confirmed=success");
	}


	public function viewAdvertisement(){
		$this->load->model('SAR/AdvertisementModel');
		//$this->load->setNotifyTo0();
		$this->load->library('session');
		$_SESSION["notify_count"]=0;

		$data['advertisement']=$this->AdvertisementModel->getAdvertisement();
		//$this->load->view('users/SAR/advertisement',$data);
		$this->load->view('includes/header');
        $this->load->view('users/SAR/advertisement', $data);
        $this->load->view('includes/footer');
	}


	public function setInterviewDates(){
		$data=[];
		$this->load->model('SAR/PanelDetails');
		$data['Members']=$this->PanelDetails->getAllEmailAddresses();
		//var_dump($data['Members']);
		$this->load->view('includes/header');
        $this->load->view('users/SAR/setDates', $data);
        $this->load->view('includes/footer');
	}


	public function getAllmailAddresses(){
		$data=[];
		$this->load->model('SAR/PanelDetails');
		$data['Members']=$this->load->PanelDetails->getAllEmailAddresses();
		//var_dump($data['members']);
		//exit();
		$this->load->view('includes/header');
		$this->load->view('users/SAR/setDates',$data);
		$this->load->view('includes/footer');
	}


	public function viewCandidates(){
		//echo "haha";
		$this->load->view('includes/header');
        $this->load->view('users/SAR/viewCandidates');
        $this->load->view('includes/footer');
	}

	public function searchCandidates(){
		$vacancy=$_POST['vacancy'];
		$this->load->model('SAR/CandidatesModel');
		$data['array']=$this->CandidatesModel->getAll($vacancy);
		$data['position']=$vacancy;
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewcategorized',$data);
		$this->load->view('includes/footer');

	}

	public function viewMarks(){

		$vacancy = $_POST['vacancy'];
		echo "hey $vacancy";
		$this->load->model('SAR/CandidatesModel');
		$data['array']=$this->CandidatesModel->getMarks($vacancy);
		$data['position']=$vacancy;
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewMarks',$data);
		$this->load->view('includes/footer');

	}
	public function viewMarksUI(){

		
		$this->load->view('includes/header');
		$this->load->view('users/SAR/viewMarksUI');
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

	public function viewApplicants(){
		if(!isset($_POST['type'])){
			$_POST['type'] = "";
		}
		$data=[];
		$this->load->model('SAR/ApplicantsModel');
		$data['array']=$this->ApplicantsModel->getAllApplicants($_POST['type']);
		$this->load->view('includes/header');
		$this->load->view('users/SAR/applicants',$data);
		$this->load->view('includes/footer');
	}
	/*public function viewCandidates(){
		if(!isset($_POST['type'])){
			$_POST['type']="";
			$_POST['cat']="";
			$array[];
			$this->load->model('SAR/CandidatesModel');
			$data['array']=$this->CandidatesModel->getAll($_POST['type']);
			$this->load->view('includes/header');
			$this->load->view('users/SAR/viewCandidates',$data);
			$this->load->view('includes/footer');

		}
	}*/

 public function applicantViewMore($index_number){
        //$index_number = $_SESSION['index_number'];
        $this->load->model('operator/categorizeApplilcationsModel');
        $this->load->model('ApplicantApplicationFormModel');
        
        $data['specification_area'] = $this->categorizeApplilcationsModel->fetch_datas();//for get specification_areas for second page
        $data['basic_personal_details'] = $this->ApplicantApplicationFormModel->editFileBasicPersonalDetails($index_number);//for basic personal details
        $data['secondary_educational_details'] = $this->ApplicantApplicationFormModel->editFileSecondaryEducationalDetails($index_number);//for secondary educational details            
        $data['higher_educational_details'] = $this->ApplicantApplicationFormModel->editFileHigherEducationalDetails($index_number);//for higher educational details
        $data['any_other_qualifications'] = $this->ApplicantApplicationFormModel->editFileOtherQuallificationalDetails($index_number);//for any other qualificational details
        $data['professional_qualifications'] = $this->ApplicantApplicationFormModel->editFileProfessionalQualifications($index_number);//for any professional qualificational details
        $data['language_proficiency'] = $this->ApplicantApplicationFormModel->editFileLauguageProficiency($index_number);//for any other language proficiency details
        $data['more_details'] = $this->ApplicantApplicationFormModel->editOtherInformations($index_number);//for any other language proficiency details          
        $data['referees'] = $this->ApplicantApplicationFormModel->editRefereesInformations($index_number);//for any other language proficiency details        
        $data['selected_specification_area'] = $this->ApplicantApplicationFormModel->editSpecificationAreas($index_number);//for any other language proficiency details           
        $this->load->view('applicant/applicationForm/ApplicationFormReadOnly',$data);
        
    }
    

	public function sendBulkmails($arr){
		$aDoor = $_POST['formdoor'];
		 if(empty($aDoor)){
		 	echo("You didn't select any buildings.");

		 }else{
		 	$N = count($aDoor);
		 	//echo("You selected $N door(s): ");
		 	for($i=0; $i < $N; $i++){
		 		//echo($aDoor[$i] . " ");
 				$email = new EmailController();
		        $this->load->library('email');
		        $email->send_mail2($this->email, $aDoor[$i], "dsfs");

		 	}

		 }
	}
}
?>