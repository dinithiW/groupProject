<?php

class OperatorDashboard extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
        //$this->pagination->initialize($config);
    }
    
	public function index(){
        $this->load->view('users/operator/header');
        $this->load->view('home');
        $this->load->view('users/operator/footer');
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
        /*if(empty($userId)){
            echo"1";
            
        }else{
            echo"2";
            $result = $this->PanelMembers->checkEmailExists($username,$userID);
        }*/
        

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

    public function setInterviewDate(){
        $this->load->model('applicant_model');
        $data['array'] = $this->applicant_model->getSelectedCandidates("Senior Lecturer Gr. I");
        $data['headerName'] = "Senior Lecturer Gr. I Selected";
        $this->load->view('includes/header');
        $this->load->view('users/operator/setInterviewDate',$data);
        $this->load->view('includes/footer');
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
        $this->load->model('applicant_model');
        $data['array'] = $this->applicant_model->getSelectedCandidates("Senior Lecturer Gr. I");
        $this->load->view('includes/header');
        $this->load->view('users/operator/sendEmailToCandidates',$data);
        $this->load->view('includes/footer');
    }
}
?>