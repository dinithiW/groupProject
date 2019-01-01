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
                //$this->ApplicantApplicationFormModel->updateTemporaryIdTable();
/*                $this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertHigherEducationalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertAnyOtherQualificationsModel($id_number);
                $this->ApplicantApplicationFormModel->insertProfessionalQualificationsModel($id_number);
                $this->ApplicantApplicationFormModel->insertRefereeModel($id_number);
                $this->ApplicantApplicationFormModel->insertLanguageProficiencyModel($id_number);
                //$this->ApplicantApplicationFormModel->insertSpecializationAreaForApplicantModel();
                $this->ApplicantApplicationFormModel->insertOtherFieldsModel($id_number);
*/                

            }
            else{
                echo"not entered";
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
    
        
        
    }
?>
