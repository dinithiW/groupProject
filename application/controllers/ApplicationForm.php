<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function insertBasicPersonalDetailsController(){
            if($this->input->post('Submit')){
                
                $this->load->model('ApplicantApplicationFormModel');
                //$this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
                //$this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel();
                //$this->ApplicantApplicationFormModel->insertHigherEducationalDetailsModel();
                //$this->ApplicantApplicationFormModel->insertAnyOtherQualificationsModel();
                $this->ApplicantApplicationFormModel->insertProfessionalQualificationsModel();
            }
            else{
                echo"not entered";
            }
        }
    }
?>
