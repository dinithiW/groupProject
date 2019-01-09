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
    
    //----------------------CREATE AD----------------------------------------
    //loads the view related to creating an advertisement
    //page with the text editor
    //route: createAd
    public function ad(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/createAd/createAd');
        $this->load->view('includes/footer');
    }

    //loads the view corresponding to entering email address and sending it to SAR
    //route: sendEmail
    public function sendAdToSAR(){
        $this->load->model('operator/VacanciesModel');
        $data['vacancies'] = $this->VacanciesModel->getVacancies();
        $this->load->view('includes/header');
        $this->load->view('users/operator/createAd/sendEmail',$data);
        $this->load->view('includes/footer');
    }

    //loads the model and uploads ad to the relevant folder
    //database query to add the file
    //send email to SAR
    //route: process
    public function sendEmail(){
        $this->load->model('operator/EmailModel');
        $this->EmailModel->uploadFile();
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

    //----------------------------EDIT APPLICATION FORM-----------------------------
    //loads the view corresponding to the home page when edit appication form is clicked
    //route: editApplication
    public function editForm(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/editApplicationHome');
        $this->load->view('includes/footer');
    }

    //upon selecting a choice user will be directed to the relavant 
    //route: directEditApplication
    public function directEditApplication(){
        //post data from the selected option 
        $field = $_POST['editField'];

        if($field=="sa"){
            redirect(base_url()."OperatorIndex/specialization");
        }else{
            redirect(base_url()."OperatorIndex/fileUploads");
        }
    }

    //views all the specializations
    //has the option to add new fields,edit or delete
    //route: specialization
    public function viewSpecializations(){
        $this->load->model('operator/ApplicationFormModel');
        $data['Specializations'] = $this->ApplicationFormModel->getAllSpecializations();
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/specialization',$data);
        $this->load->view('includes/footer');
    }

    //views all the file Upload Links
    //has the option to add new fields,edit or delete
    //route: fileUploads
    public function viewFileUploads(){
        $this->load->model('operator/ApplicationFormModel');
        $data['FileUploads'] = $this->ApplicationFormModel->getAllFileUploadsLinks();
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/fileUploadLinks',$data);
        $this->load->view('includes/footer');
    }

    //loads the view corresponding to adding a new specialization Area
    //route: addSpecialization
    public function addSpecializationArea(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/addSpecialization');
        $this->load->view('includes/footer');
    }

    //loads the view corresponding to adding a new upload link
    //route: addUploadLink
    public function addFileUploadLink(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/addFileUploadLink');
        $this->load->view('includes/footer');
    }

    //view corresponding to editing a specialization area 
    //route: editSpecialization/(:any)
    public function editSpecializationArea($sid){
        $this->load->model('operator/ApplicationFormModel');
        $data['records']= $this->ApplicationFormModel->getSpecialization($sid);
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/editSpecialization',$data);
        $this->load->view('includes/footer');
    }

    //view corresponding to editing a file upload link
    //route: editUploadLink/(:any)
    public function editFileUploadLink($sid){
        $this->load->model('operator/ApplicationFormModel');
        $data['records']= $this->ApplicationFormModel->getFileUpload($sid);
        $this->load->view('includes/header');
        $this->load->view('users/operator/editApplicationForm/editFileUpload',$data);
        $this->load->view('includes/footer');
    }

    //delete a specialization area
    //route: deleteSpecialization/(:any)
    public function deleteSpecializationArea($sid){
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->deleteSpecialization($sid);
        redirect(base_url()."OperatorIndex/specialization");
    }

    //delete a file upload link
    //route: deleteUploadLink/(:any)
    public function deleteFileUploadLink($sid){
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->deleteFileUpload($sid);
        redirect(base_url()."OperatorIndex/fileUploads");
    }

    //adds the specialization to database
    //route: addSpecializationprocess
    public function addSpecializationToDb(){
        $sname = $_POST['sname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->addNewSpecialization($sname);
    }

    //add a new file upload link to the database
    //route: addFileUploadprocess
    public function addFileUploadToDb(){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->addNewFileUpload($fname);
    }

    //edit the field in the database
    //route: editSpecializationProcess/(:any)
    public function editSpecializationToDb($sid){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->editSpecialization($sid,$fname);
    }

    //edit the fileds in the database
    //route: editFileUploadProcess/(:any)
    public function editFileUploadToDb($sid){
        $fname = $_POST['fname'];
        $this->load->model('operator/ApplicationFormModel');
        $this->ApplicationFormModel->editFileUpload($sid,$fname);
    }


    //-----------------------------VIEW ALL CANDIDATES----------------------------------
    //gets details of all applicants
    //route: viewAll
    public function viewAllCandidates(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('users/operator/viewAll/allCandidates', $data);
        $this->load->view('includes/footer');
    }

    //----------------------------MANAGE INTERVIEW PANEL-------------------------------
    //adds the member: view
    public function addMember(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/panelMembers/addMember');
        $this->load->view('includes/footer');
    }

    public function addingMember(){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->addNewUser();
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
        $this->load->view('users/operator/panelMembers/editMember',$data);
        $this->load->view('includes/footer');
    }

    public function editMember($panelID){
        
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->editMemberDetails($panelID);
    }

    //shows the delete member message
    public function deleteMemberMsg($panelID){
        $this->load->view('messages/deletePanelMsg');
    }

    public function deleteMemberModel($panelID){
        $this->load->model('operator/PanelMembers');
        $this->PanelMembers->deleteMember($panelID);
        redirect(base_url().'OperatorIndex/addPanelMember');
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

    //----------------------------CATEGORIZE APPLICANTS-------------------------------
    //loads the home page
    //user selects which vacancy they want to categorize
    //route: categorize
    public function categorizeHome(){
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/categorizeHome');
        $this->load->view('includes/footer');
    }

    //directs user to relevant page depending on the vacancy selected
    //route: directCategorize
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

    //initially this view is loaded showing all the applicants that fall to ccategory one
    //user can select which category they want to see
    //system categorized applicants will be shown here
    //user can change the category if they are different
    //route: lpCategory
    public function showLpCategories(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER","1");
        $data['category'] = " 1";
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/lpCategories',$data);
        $this->load->view('includes/footer');

    }

    //user will see the applicants applied for the relevant category they chose
    //in this case lecturer probationary
    //route: lecturerProbationary
    public function showLpCandidates(){
        $category = $_POST['vacancy'];
        $this->load->model("applicant_model");
        //get all who applied for lecturer probationary
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$category);
        $data['category'] = $category;
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/lpCategories',$data);
        $this->load->view('includes/footer');

    }

    //user will see all applicants who applied for the position senior lecturer grade II
    //route: seniorLecturerGradeII
    public function showSeniorLecturerGradeII(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("SENIOR LECTURE GR. II");
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/seniorLecturer',$data);
        $this->load->view('includes/footer');
    }

    //user will see all applicants who applied for the position senior lecturer grade II
    //route: seniorLecturerGradeI
    public function showSeniorLecturerGradeI(){
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("SENIOR LECTURE GR. I");
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/seniorLecturerGradeI',$data);
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
        redirect(base_url()."OperatorIndex/lectrerProbationary/$categoryFrom");
        
        
    }

    public function showLps($categoryFrom){
        //echo"am I here?";
        $this->load->model("applicant_model");
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$categoryFrom);
        $data['category'] = $categoryFrom;
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/lpCategories',$data);
        $this->load->view('includes/footer');

    }
    //notSelectLP
    public function addToNotSelectedLP($applicantId){
        $this->load->model("applicant_model");
        $this->applicant_model->notSelectedLP($applicantId,$category);
        
        $data['array'] = $this->applicant_model->getAll("PROBATIONARY LECTURER",$category);
        $data['category'] = $category;
        $this->load->view('includes/header');
        $this->load->view('users/operator/categorizeApplicants/lpCategories',$data);
        $this->load->view('includes/footer');
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

    //this method is used to view the application form filled by the appicant
    //route: viewApplicationForm/(:any)
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