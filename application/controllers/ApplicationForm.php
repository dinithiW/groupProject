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
         * this funciton is use for call AddCustomerForDatabase() function
         * it will upload file to database
         */
        
        public function insertfileUpload(){
            
            $this->load->model('ApplicantApplicationFormModel');
            $this->ApplicantApplicationFormModel->insertFIleForDatabase();
            
        }

        /**
         * this funciton is use for call AddCustomerForDatabase() function
         * it will edit file to database
         */
        
        public function editfileUpload(){
            
            $this->load->model('ApplicantApplicationFormModel');
            $this->ApplicantApplicationFormModel->editFIleForDatabase();
            
        }
    
        
        
    }
?>
