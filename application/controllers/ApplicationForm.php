<?php
    class ApplicationForm extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function insertBasicPersonalDetailsController(){
            $this->load->model('ApplicantApplicationFormModel');
            $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
        }
    }
?>