<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

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
         * after that insert again to the database
         */
        public function updateApplicationForm(){
            if($this->input->post('Submit')){    
                $this->load->model('ApplicantApplicationFormModel');
                $this->ApplicantApplicationFormModel->deleteApplicantDetails();
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
     * this funciton is usefull for edit application 
     * this will call to function in model 
     * it will get data from database and will display in the applicatioin form
     */
      
        public function editfileUpload(){
            $this->load->model('operator/categorizeApplilcationsModel');
            $this->load->model('ApplicantApplicationFormModel');
            
            $data['specification_area'] = $this->categorizeApplilcationsModel->fetch_datas();//for get specification_areas for second page
            $data['basic_personal_details'] = $this->ApplicantApplicationFormModel->editFileBasicPersonalDetails();//for basic personal details
            $data['secondary_educational_details'] = $this->ApplicantApplicationFormModel->editFileSecondaryEducationalDetails();//for secondary educational details
            $data['higher_educational_details'] = $this->ApplicantApplicationFormModel->editFileHigherEducationalDetails();//for higher educational details
            $data['any_other_qualifications'] = $this->ApplicantApplicationFormModel->editFileOtherQuallificationalDetails();//for any other qualificational details
            $data['professional_qualifications'] = $this->ApplicantApplicationFormModel->editFileProfessionalQualifications();//for any professional qualificational details
            $data['language_proficiency'] = $this->ApplicantApplicationFormModel->editFileLauguageProficiency();//for any other language proficiency details
            $data['more_details'] = $this->ApplicantApplicationFormModel->editOtherInformations();//for any other language proficiency details
            $data['referees'] = $this->ApplicantApplicationFormModel->editRefereesInformations();//for any other language proficiency details
            $data['selected_specification_area'] = $this->ApplicantApplicationFormModel->editSpecificationAreas();//for any other language proficiency details
           
            $this->load->view('applicant/applicationForm/ApplicationFormEdit',$data);
            
        }

    
        
        
    }
?>
