<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        /**
         * this function is used for insert the basic personal details of each applicants.
         * after clisk the submit button of the application form this funciton will call.
         * by this funciton the whole details in application form will add to the database.
         * see inside the ApplicantApplicationFormModel/insertBasicPersonalDetailsModel().
         */
        
        public function insertBasicPersonalDetailsController(){
            if($this->input->post('Submit')){
                
                $this->load->model('ApplicantApplicationFormModel');
                $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
            }
            else{
                echo"not entered";
            }
        }


        /**
         * this funciton is used for update the application form
         * first delete the relevant details relevant for the id number
         * after that insert again to  the whole application form to database
         */
        public function updateApplicationForm(){
            if($this->input->post('Submit')){    
                $this->load->model('ApplicantApplicationFormModel');
                $idNumber = '19PR004';
                $this->ApplicantApplicationFormModel->deleteApplicantDetails($idNumber);
                $this->ApplicantApplicationFormModel->reInsertApplicantDetailsForUpdate($idNumber);
                $this->editfileUpload();
            }
            
        }


        /**
         * this funciton is use for call AddCustomerForDatabase() function
         * it will upload file to database
         */
        public function insertfileUpload(){
            
            $this->load->model('ApplicantApplicationFormModel');
            $this->ApplicantApplicationFormModel->insertFIleForDatabase();
            
        }

    /*
     * when click the option in header file this funciton will active
     * this funciton is usefull for diaplay details in application form for edit
     * this will call  functions in model 
     * it will get data from database and will display in the applicatioin form
     */
      
        public function editfileUpload(){
            $index_number = '19PR004';
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
           
            $this->load->view('applicant/applicationForm/ApplicationFormEdit',$data);
            
        }

    
        
        
    }
?>
