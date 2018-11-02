<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function insertBasicPersonalDetailsController(){
            if($this->input->post('Submit')){
                
                $this->load->model('ApplicantApplicationFormModel');
                    
                $id_number =  $this->ApplicantApplicationFormModel->makeApplicationId();

                $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertHigherEducationalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertAnyOtherQualificationsModel($id_number);
                $this->ApplicantApplicationFormModel->insertProfessionalQualificationsModel($id_number);
                $this->ApplicantApplicationFormModel->insertRefereeModel($id_number);
                $this->ApplicantApplicationFormModel->insertLanguageProficiencyModel($id_number);
                //$this->ApplicantApplicationFormModel->insertSpecializationAreaForApplicantModel();
                $this->ApplicantApplicationFormModel->insertOtherFieldsModel($id_number);
                

                
         

               
            }
            else{
                echo"not entered";
            }
        }

        public function updateBasicPersonalDetailsController(){
        
            $this->load->model('ApplicantApplicationFormModel');
            $id_number =  $this->ApplicantApplicationFormModel->updateApplicationForm();

        }
    }
?>
