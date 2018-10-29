<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function insertBasicPersonalDetailsController(){
            if($this->input->post('Submit')){
                echo"this is the controller";
                $this->load->model('ApplicantApplicationFormModel');
                $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
                $this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel();
            }
            else{
                echo"not entered";
            }
        }
    }
?>
