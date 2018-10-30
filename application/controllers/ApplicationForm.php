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
                //$this->ApplicantApplicationFormModel->insertProfessionalQualificationsModel();
                //$this->ApplicantApplicationFormModel->insertRefereeModel();
            ?>  

                <script>
                    function run() {
                        //var aa =  document.getElementById("selectCategory").value;
                        alert("jweldonf");
                        document.write("HELLO RUWANA");
                    }
                </script>
             

            <?php

            }
            else{
                echo"not entered";
            }
        }
    }
?>
