<?php
include 'EmailController.php';
class OperatorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
        //$this->pagination->initialize($config);
    }
    
	public function index(){
        $this->load->view('includes/header');
        $this->load->view('MainDashboard');
        $this->load->view('includes/footer');
    }
    
    //this function for select areas of applicants 
    /*public function categorizeApplications(){
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
*/
    //loads the view related to creating an advertisement
    public function ad(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/createAd');
        $this->load->view('includes/footer');
    }

    public function sendAdToSAR(){
       
        $this->load->view('includes/header');
        $this->load->view('users/operator/sendEmail');
        $this->load->view('includes/footer');
    }

    //displays all the panel members
    public function addPanelMember(){
       
        $data = [];
        $this->load->model('operator/PanelMembers');
        $data['Members'] = $this->PanelMembers->getAllMembers();

        $this->load->view('includes/header');
        $this->load->view('users/operator/addMemberHome',$data);
        $this->load->view('includes/footer');

    }

    //adds the member: view
    public function addMember(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/addMember');
        $this->load->view('includes/footer');
    }

    public function addingMember(){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->addNewUser();
    }

    public function sendEmail(){
        $this->load->view('users/operator/header');
        $this->load->view('users/operator/showEmails');
        $this->load->view('includes/footer');
        //redirect(base_url().'OperatorIndex/sendEmail');
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

    public function memberSuccess(){
        $this->load->view('messages/panelMemberSuccess');
    }

    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $username = $this->input->post("email");
        $this->load->model('operator/PanelMembers');
        $result = $this->PanelMembers->checkEmailExists($username, $userId);
        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }

    public function editMemberView($panelID){
        $this->load->model('operator/PanelMembers');
        $data['records'] = $this->PanelMembers->getMember($panelID);
        //$this->PanelMembers->edit();
        $this->load->view('includes/header');
        $this->load->view('users/operator/editMember',$data);
        $this->load->view('includes/footer');
    }

    public function editMember($panelID){
        
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->editMemberDetails($panelID);
    }

    public function deleteMemberMsg($panelID){
        $this->load->view('messages/deletePanelMsg');
    }

    public function deleteMemberModel($panelID){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->deleteMember($panelID);
        redirect(base_url().'OperatorIndex/addPanelMember');
    }

    public function showTaskCount($role){
        $this->load->model('TasksModel');
        $taskNum = $this->TaskModel->getTasks($role);
        return $taskNum;
    }

    public function viewAllCandidates(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('users/operator/allCandidates', $data);
        $this->load->view('includes/footer');
    }
    //interview date setting home
    public function setInterviewDate(){
        $this->load->model('applicant_model');
        $data['array'] = $this->applicant_model->getSelectedCandidates("Senior_Lecturer Grade_I_selected");
        $data['headerName'] = "Senior Lecturer Grade I selected";
        $data['showAlert'] = "false";
        $this->load->view('includes/header');
        $this->load->view('users/operator/setInterviewDate',$data);
        $this->load->view('includes/footer');
    }

    //interview date setting after selection of category
    public function setIntervewDate(){
        $position = $_POST['vacancy'];
        $this->load->model('applicant_model');
        $data['array'] = $this->applicant_model->getSelectedCandidates($position);
        $temp = str_replace('_', ' ', $position);
        $data['headerName'] = $temp;
        $data['showAlert'] = "false";
        $this->load->view('includes/header');
        $this->load->view('users/operator/setInterviewDate',$data);
        $this->load->view('includes/footer');
    }

    public function addInterviewDateToDB($vacancy){

        $data = [];
        $idate = $_POST['idate'];
        $itime = $_POST['itime'];
        
        $temp = str_replace('_', ' ', $vacancy);

        $this->load->model('operator/InterviewModel');
        //if(isset($_POST['submit'])){
            
            //echo"1$idate";
            if(!empty($_POST['check_list'])) {
                //echo"hello";
                //echo"2$iname";
                // Counting number of checked checkboxes.
                $checked_count = count($_POST['check_list']);
                // Loop to store and display values of individual checked checkbox.
                foreach($_POST['check_list'] as $selected) {
                    $this->InterviewModel->insertInterview($selected,$idate,$itime);
                }
                $data['showAlert'] = "false";
                $this->load->model('applicant_model');
                $data['array'] = $this->applicant_model->getSelectedCandidates($vacancy);
                $data['headerName'] = $temp;
                $this->load->view('includes/header');
                $this->load->view('users/operator/setInterviewDate',$data);
                $this->load->view('includes/footer');
            }else{
                //echo"hello";
                $this->load->model('applicant_model');
                $data['array'] = $this->applicant_model->getSelectedCandidates($vacancy);
                $data['headerName'] = $temp;
                $data['showAlert'] = "true";
                $this->load->view('includes/header');
                $this->load->view('users/operator/setInterviewDate',$data);
                $this->load->view('includes/footer');
            }
        //}
    }

    public function categorizeHome(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeHome');
        $this->load->view('includes/footer');
    }

    public function directTo(){
        
        $position = $_POST['vacancy'];
        if($position=="Lecturer Probationary"){
            redirect(base_url()."OperatorIndex/lpCategory");
        }else if($position=="Senior Lecturer Gr. I"){
            redirect(base_url()."OperatorIndex/seniorLecturerGradeI");
        }else{
            redirect(base_url()."OperatorIndex/seniorLecturerGradeII");
        }
    }

    //route lpCategory
    public function showLpCategories(){
        //echo"am I here?";
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER","1");
        $data['category'] = " 1";
        $this->load->view('includes/header');
        $this->load->view('users/operator/lpCategories',$data);
        $this->load->view('includes/footer');

    }

    //route lecturerProbationary
    public function showLpCandidates(){
        $category = $_POST['vacancy'];
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$category);
        $data['category'] = $category;
        $this->load->view('includes/header');
        $this->load->view('users/operator/lpCategories',$data);
        $this->load->view('includes/footer');

    }

    public function showSeniorLecturerGradeII(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("SENIOR LECTURE GR. II");
        $this->load->view('includes/header');
        $this->load->view('users/operator/seniorLecturer',$data);
        $this->load->view('includes/footer');
    }

    public function showSeniorLecturerGradeI(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("SENIOR LECTURE GR. I");
        $this->load->view('includes/header');
        $this->load->view('users/operator/seniorLecturerGradeI',$data);
        $this->load->view('includes/footer');
    }

    public function addToSelected($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->selectedSL($applicantId,"sl_selected");
        redirect(base_url()."OperatorIndex/seniorLecturerGradeII");
    }

    public function addToNotSelected($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->notSelectedSL($applicantId,"sl_selected");
        redirect(base_url()."OperatorIndex/seniorLecturerGradeII");
    }

    public function addToSelectedGradeI($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->selectedSL($applicantId,"sl_selected_gradei");
        redirect(base_url()."OperatorIndex/seniorLecturerGradeI");
    }

    public function addToNotSelectedGradeI($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->notSelectedSL($applicantId,"sl_selected_gradei");
        redirect(base_url()."OperatorIndex/seniorLecturerGradeI");
    }
    //selectLP
    public function addToSelectedLP($applicantId,$categoryFrom){
        $temp = "category_".$applicantId;
        $category = $_POST["$temp"];
        $this->load->model("applicant_model");
        $this->applicant_model->selectedLP($applicantId,$category);

       /* $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$categoryFrom);
        $data['category'] = $categoryFrom;*/
        redirect(base_url()."OperatorIndex/lectrerProbationary/$categoryFrom");
        
        
    }

    public function showLps($categoryFrom){
        //echo"am I here?";
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$categoryFrom);
        $data['category'] = $categoryFrom;
        $this->load->view('includes/header');
        $this->load->view('users/operator/lpCategories',$data);
        $this->load->view('includes/footer');

    }
    //notSelectLP
    public function addToNotSelectedLP($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->notSelectedLP($applicantId,$category);
        
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$category);
        $data['category'] = $category;
        $this->load->view('includes/header');
        $this->load->view('users/operator/lpCategories',$data);
        $this->load->view('includes/footer');
    }
    //yet to implement
    public function moreInfo($applicantID){

    }

    public function viewCategorizedApplicants(){

        $this->load->view('includes/header');
        $this->load->view('users/operator/viewCategorizedHome');
        $this->load->view('includes/footer');

    }

    public function searchCandidates(){

        $vacancy = $_POST['vacancy'];

        $this->load->model("applicant_model");  
        $data['array'] = $this->applicant_model->getAllCategorized($vacancy);
        $data['position'] = $vacancy;
        $this->load->view('includes/header');
        $this->load->view('users/operator/viewCategorized',$data);
        $this->load->view('includes/footer');

    }

    public function editForm(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationHome');
        $this->load->view('includes/footer');
    }

    public function directEditApplication(){
        $field = $_POST['editField'];
        if($field=="sa"){
            redirect(base_url()."OperatorIndex/specialization");
        }else{
            redirect(base_url()."OperatorIndex/fileUploads");
        }
    }

    public function viewSpecializations(){
        $this->load->model('operator/ApplicationFormModel');
        $data['Specializations'] = $this->ApplicationFormModel->getAllSpecializations();
        $this->load->view('includes/header');
        $this->load->view('users/operator/specialization',$data);
        $this->load->view('includes/footer');
    }

    public function viewFileUploads(){
        $this->load->model('operator/ApplicationFormModel');
        $data['FileUploads'] = $this->ApplicationFormModel->getAllFileUploadsLinks();
        $this->load->view('includes/header');
        $this->load->view('users/operator/fileUploadLinks',$data);
        $this->load->view('includes/footer');
    }

    public function addSpecializationArea(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/addSpecialization');
        $this->load->view('includes/footer');
    }

    public function addFileUploadLink(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/addFileUploadLink');
        $this->load->view('includes/footer');
    }

    public function editSpecializationArea($sid){
        $this->load->model('operator/ApplicationFormModel');
        $data['records']= $this->ApplicationFormModel->getSpecialization($sid);
        $this->load->view('includes/header');
        $this->load->view('users/operator/editSpecialization',$data);
        $this->load->view('includes/footer');
    }

    public function editFileUploadLink($sid){
        $this->load->model('operator/ApplicationFormModel');
        $data['records']= $this->ApplicationFormModel->getFileUpload($sid);
        $this->load->view('includes/header');
        $this->load->view('users/operator/editFileUpload',$data);
        $this->load->view('includes/footer');
    }

    public function deleteSpecializationArea($sid){
        //echo"$sid";
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->deleteSpecialization($sid);
        redirect(base_url()."OperatorIndex/specialization");
    }

    public function deleteFileUploadLink($sid){
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->deleteFileUpload($sid);
        redirect(base_url()."OperatorIndex/fileUploads");
    }

    public function addSpecializationToDb(){
        $sname = $_POST['sname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->addNewSpecialization($sname);
        //redirect(base_url()."OperatorIndex/fileUploads");
    }

    public function addFileUploadToDb(){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->addNewFileUpload($fname);
    }

    public function editSpecializationToDb($sid){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->editSpecialization($sid,$fname);
    }

    public function editFileUploadToDb($sid){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->editFileUpload($sid,$fname);
    }

    public function sendEMailsToApplicants(){
        $this->load->model('operator/InterviewModel');
        $data['array'] = $this->InterviewModel->getInterviewGroups();
        $this->load->view('includes/header');
        $this->load->view('users/operator/sendEmailToCandidates',$data);
        $this->load->view('includes/footer');
    }

    public function sendEMailsTApplicants(){
        /*$position = $_POST['vacancy'];
        $this->load->model('applicant_model');
        $data['array'] = $this->applicant_model->getSelectedCandidates($position);
        $this->load->view('includes/header');
        $this->load->view('users/operator/sendEmailToCandidates',$data);
        $this->load->view('includes/footer');*/
    }

    public function sendInterviewEmails(){
        $description = "Interview Notification";
        $content = $_POST['content'];
        $time_date  = explode("_", $_POST['timeSlot']);
        $date = $time_date[0];
        $time = $time_date[1];

        $this->load->model('operator/InterviewModel');
        $this->InterviewModel->getEmails($date,$time,$description,$content);

        

    }

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

    public function sendmail(){
        $email = new EmailController();
        $this->load->library('email');
        $email->send_mail($this->email, $this->input->post('directormail'), $this->input->post('reportdetails'));
    }

}
?>