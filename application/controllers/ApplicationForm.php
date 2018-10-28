<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function insertBasicPersonalDetailsController(){
            if($this->input->post('Submit')){
                echo"ok entered";
                $this->load->model('ApplicantApplicationFormModel');
                $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
            }
            else{
                echo"not entered";
            }
        }
    }
?>
