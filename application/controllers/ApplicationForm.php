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

    /*
     * this funciton is usefull for edit application 
     * this will call to function in model 
     * it will get data from database and will display in the applicatioin form
     */
      
        public function editfileUpload(){
            
            $this->load->model('ApplicantApplicationFormModel');
            $data['fetch_data'] = $this->ApplicantApplicationFormModel->editFile();
            $this->load->view('applicant/applicationForm/ApplicationFormEdit',$data);
       
        }
    
        
        
    }
?>
