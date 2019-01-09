<?php
    class ApplicationForm extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->helper(array('form','url'));
        }

        public function testPage(){

            
            $this->load->view('applicant/testing');
        }


        public function checkPage(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name','First Name','required|numeric|min_length[2]');

            if($this->form_validation->run()==TRUE){
                echo "";
            } 

            else{               
                echo validation_errors();
             }
             $this->load->view('applicant/testing');
        }

        /**
         * this function is used for insert the basic personal details of each applicants.
         * after clisk the submit button of the application form this funciton will call.
         * by this funciton the whole details in application form will add to the database.
         * see inside the ApplicantApplicationFormModel/insertBasicPersonalDetailsModel().
         * data validation also done by this function 
         */
        
        public function insertBasicPersonalDetailsController(){
          
            $this->load->library('form_validation');
//start of the validation for first page
            $this->form_validation->set_rules('first_name','First Name','required');
            $this->form_validation->set_rules('last_name','Sur Name','required');
            $this->form_validation->set_rules('postal_address','Postal Address','required');
            $this->form_validation->set_rules('permanent_address','Permanent Address','required');
            $this->form_validation->set_rules('driving_licence','Driving licence','required');
            $this->form_validation->set_rules('applicant_citizenship','Citizenship','required');
            $this->form_validation->set_rules('personalEmail','Personal Email','required|valid_email');
            $this->form_validation->set_rules('officeEmail','Office Email','required|valid_email');
            $this->form_validation->set_rules('mobile_number','Mobile Number','required|exact_length[10]|numeric');
            $this->form_validation->set_rules('home_number','Home Number','required|exact_length[10]|numeric');
            $this->form_validation->set_rules('office_number','Office Number','required|exact_length[10]|numeric');
//end of the validation first page

//start of the validation for the secondary educational table  
            $this->form_validation->set_rules('secondary_educational_from1','Secondary Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_from2','Secondary Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_from3','Secondary Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_from4','Secondary Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_to1','Secondary Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_to2','Secondary Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_to3','Secondary Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_to4','Secondary Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_year1','Secondary Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_year2','Secondary Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_year3','Secondary Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('secondary_educational_year4','Secondary Educational Year','exact_length[4]|numeric');
//end of the validation for the  secondary educational table   

//start of the bachelor educational details
            $this->form_validation->set_rules('heigher_educational_from1','Heigher Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_from2','Heigher Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_from3','Heigher Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_from4','Heigher Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_to1','Heigher Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_to2','Heigher Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_to3','Heigher Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_to4','Heigher Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year1','Heigher Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year2','Heigher Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year3','Heigher Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year4','Heigher Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_duration1','Heigher Educational Duration','numeric');
            $this->form_validation->set_rules('heigher_educational_duration2','Heigher Educational Duration','numeric');
            $this->form_validation->set_rules('heigher_educational_duration3','Heigher Educational Duration','numeric');
            $this->form_validation->set_rules('heigher_educational_duration4','Heigher Educational Duration','numeric');
            $this->form_validation->set_rules('heigher_educational_year_no1','Heigher Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year_no2','Heigher Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year_no3','Heigher Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year_no4','Heigher Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('heigher_educational_year_no1','Heigher Educational Index NUmber','exact_length[4]|numeric');



//end of the the bachelor educational details

//start of the master educational details

            $this->form_validation->set_rules('master_educational_from1','Master Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_from2','Master Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_from3','Master Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_from4','Master Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_to1','Master Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_to2','Master Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_to3','Master Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_to4','Master Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year1','Master Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year2','Master Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year3','Master Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year4','Master Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_duration1','Master Educational Duration','numeric');
            $this->form_validation->set_rules('master_educational_duration2','Master Educational Duration','numeric');
            $this->form_validation->set_rules('master_educational_duration3','Master Educational Duration','numeric');
            $this->form_validation->set_rules('master_educational_duration4','Master Educational Duration','numeric');
            $this->form_validation->set_rules('master_educational_year_no1','Master Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year_no2','Master Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year_no3','Master Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('master_educational_year_no4','Master Educational Index NUmber','exact_length[4]|numeric');
           

//end of the master educational details

//start of the phd educational details

            $this->form_validation->set_rules('phd_educational_from1','Phd Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_from2','Phd Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_from3','Phd Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_from4','Phd Educational From','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_to1','Phd Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_to2','Phd Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_to3','Phd Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_to4','Phd Educational To','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year1','Phd Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year2','Phd Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year3','Phd Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year4','Phd Educational Year','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_duration1','Phd Educational Duration','numeric');
            $this->form_validation->set_rules('phd_educational_duration2','Phd Educational Duration','numeric');
            $this->form_validation->set_rules('phd_educational_duration3','Phd Educational Duration','numeric');
            $this->form_validation->set_rules('phd_educational_duration4','Phd Educational Duration','numeric');
            $this->form_validation->set_rules('phd_educational_year_no1','Phd Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year_no2','Phd Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year_no3','Phd Educational Index NUmber','exact_length[4]|numeric');
            $this->form_validation->set_rules('phd_educational_year_no4','Phd Educational Index NUmber','exact_length[4]|numeric');
           

//end of the phd educational details

//start of the Any Other details

            $this->form_validation->set_rules('any_other_qualifications_duration1','Any Other Qualifications Duration','numeric');
            $this->form_validation->set_rules('any_other_qualifications_duration2','Any Other Qualifications Duration','numeric');
            $this->form_validation->set_rules('any_other_qualifications_duration3','Any Other Qualifications Duration','numeric');
            $this->form_validation->set_rules('any_other_qualifications_duration4','Any Other Qualifications Duration','numeric');
            $this->form_validation->set_rules('any_other_qualifications_year1','Any Other Qualifications Year','numeric');
            $this->form_validation->set_rules('any_other_qualifications_year2','Any Other Qualifications Year','numeric');
            $this->form_validation->set_rules('any_other_qualifications_year3','Any Other Qualifications Year','numeric');
            $this->form_validation->set_rules('any_other_qualifications_year4','Any Other Qualifications Year','numeric');

//end of the Any Other details

//start of the Professonal Qualifications From

            $this->form_validation->set_rules('professonal_qualifications_from1','Professonal Qualifications From','numeric');
            $this->form_validation->set_rules('professonal_qualifications_from2','Professonal Qualifications From','numeric');
            $this->form_validation->set_rules('professonal_qualifications_from3','Professonal Qualifications From','numeric');
            $this->form_validation->set_rules('professonal_qualifications_from4','Professonal Qualifications From','numeric');
            $this->form_validation->set_rules('professonal_qualifications_to1','Professonal Qualifications To','numeric');
            $this->form_validation->set_rules('professonal_qualifications_to2','Professonal Qualifications To','numeric');
            $this->form_validation->set_rules('professonal_qualifications_to3','Professonal Qualifications To','numeric');
            $this->form_validation->set_rules('professonal_qualifications_to4','Professonal Qualifications To','numeric');
            
//end of the Professonal Qualifications From


//start of the Professonal referees

            $this->form_validation->set_rules('referees_email1','Referees Email','valid_email');
            $this->form_validation->set_rules('referees_email2','Referees Email','valid_email');
            $this->form_validation->set_rules('referees_email3','Referees Email','valid_email');
            $this->form_validation->set_rules('referees_email4','Referees Email','valid_email');
            $this->form_validation->set_rules('referees_contact1','Referees Contact','exact_length[10]|numeric');
            $this->form_validation->set_rules('referees_contact2','Referees Contact','exact_length[10]|numeric');
            $this->form_validation->set_rules('referees_contact3','Referees Contact','exact_length[10]|numeric');
            $this->form_validation->set_rules('referees_contact4','Referees Contact','exact_length[10]|numeric');
            

//end of the Professonal referees

            if($this->input->post('Submit')){
                
                if($this->form_validation->run()==TRUE){
                    $_SESSION['application_form_filled'] = "yes";//prevent the access to the again application form
                    $this->load->model('ApplicantApplicationFormModel');
                    $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel();
                } 
                else{               
                    echo validation_errors();
                }  
                
            }
            else{
                echo"not entered";
            }

        }

        /**
         * this funciton is used for update the application form
         * first delete the relevant details relevant for the id number
         * after that insert again to  the whole application form to database
         * data validation also done by this function
         */
        public function updateApplicationForm(){

            $this->load->library('form_validation');
            //start of the validation for first page
                        $this->form_validation->set_rules('first_name','First Name','required');
                        $this->form_validation->set_rules('last_name','Sur Name','required');
                        $this->form_validation->set_rules('postal_address','Postal Address','required');
                        $this->form_validation->set_rules('permanent_address','Permanent Address','required');
                        $this->form_validation->set_rules('driving_licence','Driving licence','required');
                        $this->form_validation->set_rules('applicant_citizenship','Citizenship','required');
                        $this->form_validation->set_rules('personalEmail','Personal Email','required|valid_email');
                        $this->form_validation->set_rules('officeEmail','Office Email','required|valid_email');
                        $this->form_validation->set_rules('mobile_number','Mobile Number','required|exact_length[10]|numeric');
                        $this->form_validation->set_rules('home_number','Home Number','required|exact_length[10]|numeric');
                        $this->form_validation->set_rules('office_number','Office Number','required|exact_length[10]|numeric');
            //end of the validation first page
            
            //start of the validation for the secondary educational table  
                        $this->form_validation->set_rules('secondary_educational_from1','Secondary Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_from2','Secondary Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_from3','Secondary Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_from4','Secondary Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_to1','Secondary Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_to2','Secondary Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_to3','Secondary Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_to4','Secondary Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_year1','Secondary Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_year2','Secondary Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_year3','Secondary Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('secondary_educational_year4','Secondary Educational Year','exact_length[4]|numeric');
            //end of the validation for the  secondary educational table   
            
            //start of the bachelor educational details
                        $this->form_validation->set_rules('heigher_educational_from1','Heigher Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_from2','Heigher Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_from3','Heigher Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_from4','Heigher Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_to1','Heigher Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_to2','Heigher Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_to3','Heigher Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_to4','Heigher Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year1','Heigher Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year2','Heigher Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year3','Heigher Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year4','Heigher Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_duration1','Heigher Educational Duration','numeric');
                        $this->form_validation->set_rules('heigher_educational_duration2','Heigher Educational Duration','numeric');
                        $this->form_validation->set_rules('heigher_educational_duration3','Heigher Educational Duration','numeric');
                        $this->form_validation->set_rules('heigher_educational_duration4','Heigher Educational Duration','numeric');
                        $this->form_validation->set_rules('heigher_educational_year_no1','Heigher Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year_no2','Heigher Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year_no3','Heigher Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year_no4','Heigher Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('heigher_educational_year_no1','Heigher Educational Index NUmber','exact_length[4]|numeric');
            
            
            
            //end of the the bachelor educational details
            
            //start of the master educational details
            
                        $this->form_validation->set_rules('master_educational_from1','Master Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_from2','Master Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_from3','Master Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_from4','Master Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_to1','Master Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_to2','Master Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_to3','Master Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_to4','Master Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year1','Master Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year2','Master Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year3','Master Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year4','Master Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_duration1','Master Educational Duration','numeric');
                        $this->form_validation->set_rules('master_educational_duration2','Master Educational Duration','numeric');
                        $this->form_validation->set_rules('master_educational_duration3','Master Educational Duration','numeric');
                        $this->form_validation->set_rules('master_educational_duration4','Master Educational Duration','numeric');
                        $this->form_validation->set_rules('master_educational_year_no1','Master Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year_no2','Master Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year_no3','Master Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('master_educational_year_no4','Master Educational Index NUmber','exact_length[4]|numeric');
                       
            
            //end of the master educational details
            
            //start of the phd educational details
            
                        $this->form_validation->set_rules('phd_educational_from1','Phd Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_from2','Phd Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_from3','Phd Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_from4','Phd Educational From','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_to1','Phd Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_to2','Phd Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_to3','Phd Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_to4','Phd Educational To','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year1','Phd Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year2','Phd Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year3','Phd Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year4','Phd Educational Year','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_duration1','Phd Educational Duration','numeric');
                        $this->form_validation->set_rules('phd_educational_duration2','Phd Educational Duration','numeric');
                        $this->form_validation->set_rules('phd_educational_duration3','Phd Educational Duration','numeric');
                        $this->form_validation->set_rules('phd_educational_duration4','Phd Educational Duration','numeric');
                        $this->form_validation->set_rules('phd_educational_year_no1','Phd Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year_no2','Phd Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year_no3','Phd Educational Index NUmber','exact_length[4]|numeric');
                        $this->form_validation->set_rules('phd_educational_year_no4','Phd Educational Index NUmber','exact_length[4]|numeric');
                       
            
            //end of the phd educational details
            
            //start of the Any Other details
            
                        $this->form_validation->set_rules('any_other_qualifications_duration1','Any Other Qualifications Duration','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_duration2','Any Other Qualifications Duration','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_duration3','Any Other Qualifications Duration','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_duration4','Any Other Qualifications Duration','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_year1','Any Other Qualifications Year','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_year2','Any Other Qualifications Year','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_year3','Any Other Qualifications Year','numeric');
                        $this->form_validation->set_rules('any_other_qualifications_year4','Any Other Qualifications Year','numeric');
            
            //end of the Any Other details
            
            //start of the Professonal Qualifications From
            
                        $this->form_validation->set_rules('professonal_qualifications_from1','Professonal Qualifications From','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_from2','Professonal Qualifications From','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_from3','Professonal Qualifications From','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_from4','Professonal Qualifications From','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_to1','Professonal Qualifications To','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_to2','Professonal Qualifications To','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_to3','Professonal Qualifications To','numeric');
                        $this->form_validation->set_rules('professonal_qualifications_to4','Professonal Qualifications To','numeric');
                        
            //end of the Professonal Qualifications From
            
            
            //start of the Professonal referees
            
                        $this->form_validation->set_rules('referees_email1','Referees Email','valid_email');
                        $this->form_validation->set_rules('referees_email2','Referees Email','valid_email');
                        $this->form_validation->set_rules('referees_email3','Referees Email','valid_email');
                        $this->form_validation->set_rules('referees_email4','Referees Email','valid_email');
                        $this->form_validation->set_rules('referees_contact1','Referees Contact','exact_length[10]|numeric');
                        $this->form_validation->set_rules('referees_contact2','Referees Contact','exact_length[10]|numeric');
                        $this->form_validation->set_rules('referees_contact3','Referees Contact','exact_length[10]|numeric');
                        $this->form_validation->set_rules('referees_contact4','Referees Contact','exact_length[10]|numeric');
                        
            
            //end of the Professonal referees
            


            if($this->input->post('Submit')){
                if($this->form_validation->run()==TRUE){
                    $this->load->model('ApplicantApplicationFormModel');
                    $idNumber = $_SESSION['index_number'];
                    $this->ApplicantApplicationFormModel->deleteApplicantDetails($idNumber);
                    $this->ApplicantApplicationFormModel->reInsertApplicantDetailsForUpdate($idNumber);
                    $this->editfileUpload();
                } 
                else{               
                    echo validation_errors();
                }  
            }
        }


        /**
         * this funciton is use for call AddCustomerForDatabase() function
         * it will upload file to database
         */             
        public function insertfileUpload(){
            echo $this->input->post('userfile');

            $this->load->model('ApplicantApplicationFormModel');
            $this->ApplicantApplicationFormModel->insertFIleForDatabase();
            
        }

        /**
         * this funciton is use for call ViewFromDatabase() function
         * it will shwow data from database
         */             
        public function viewUploadedDocument(){

            // $this->load->model('ApplicantApplicationFormModel');
            // $this->ApplicantApplicationFormModel->ViewFromDatabase();
            
        }



        public function viewUploadedFile(){
            $option = $this->input->post('selectCategory');
            //echo "this is the ".$option;

            $key = $this->getKeyValueInDatabase($option);
            $key = $key.".pdf";
            $this->load->model('ApplicantApplicationFormModel');
            $qq =  $this->ApplicantApplicationFormModel->viewUploadedPdf($key);
            $data['pdf_details']  = $this->ApplicantApplicationFormModel->viewUploadedPdf($key);
            

            if($option=="BIRTH CERTIFICATE"){
                $this->load->view('applicant/applicationForm/viewBirthCertificate',$data);
            }
            else if($option=="GCE A/L RESULT SHEET"){
                $this->load->view('applicant/applicationForm/viewAlResult',$data);
            }
            else if($option=="CURRICULUM VITAE"){
                $this->load->view('applicant/applicationForm/viewCurriculumVitae',$data);
            }
            else if($option=="DEGREE CERTIFICATE"){
                $this->load->view('applicant/applicationForm/viewDegreehCertificate',$data);
            }
            else if($option=="CERTIFIED NIC COPY"){
                $this->load->view('applicant/applicationForm/viewCertifiedNic',$data);
            }


        }


        /**
         * this function is used for the fined the key value for search the database
         */
        public function getKeyValueInDatabase($data){
            if($data=="BIRTH CERTIFICATE"){
                return "BIRTH_CERTIFICATE";
            }
            else if($data=="GCE A/L RESULT SHEET"){
                return "GCE_AL_RESULT_SHEET";
            }
            else if($data=="CURRICULUM VITAE"){
                return "CURRICULUM_VITAE";
            }
            else if($data=="DEGREE CERTIFICATE"){
                return "DEGREE_CERTIFICATE";
            }
            else if($data=="CERTIFIED NIC COPY"){
                return "CERTIFIED_NIC_COPY";
            }
        }

        

    /*
     * when click the option in header file this funciton will active
     * this funciton is usefull for diaplay details in application form for edit
     * this will call  functions in model 
     * it will get data from database and will display in the applicatioin form
     */
      
        public function editfileUpload(){
            $index_number = $_SESSION['index_number'];
            $this->load->model('operator/categorizeApplilcationsModel');
            $this->load->model('ApplicantApplicationFormModel');
            
            $data['specification_area'] = $this->categorizeApplilcationsModel->fetch_datas();//for get specification_areas for second page
            $data['basic_personal_details'] = $this->ApplicantApplicationFormModel->editFileBasicPersonalDetails($index_number);//for basic personal details
            $data['secondary_educational_details'] = $this->ApplicantApplicationFormModel->editFileSecondaryEducationalDetails($index_number);//for secondary educational details            
            $data['higher_educational_details'] = $this->ApplicantApplicationFormModel->editFileHigherEducationalDetails($index_number);//for higher educational details
            $data['any_other_qualifications'] = $this->ApplicantApplicationFormModel->editFileOtherQuallificationalDetails($index_number);//for any other qualificational details
            $data['professional_qualifications'] = $this->ApplicantApplicationFormModel->editFileProfessionalQualifications($index_number);//for any professional qualificational details
            $data['language_proficiency'] = $this->ApplicantApplicationFormModel->editFileLauguageProficiency($index_number);//for any other language proficiency details
            $data['more_details'] = $this->ApplicantApplicationFormModel->editOtherInformations($index_number);//for any other language proficiency details          
            $data['referees'] = $this->ApplicantApplicationFormModel->editRefereesInformations($index_number);//for any other language proficiency details        
            $data['selected_specification_area'] = $this->ApplicantApplicationFormModel->editSpecificationAreas($index_number);//for any other language proficiency details           
            $this->load->view('applicant/applicationForm/ApplicationFormEdit',$data);
            
        }

        

    /**
     * this function is used for the make file for view the application form 
     * for the higher authorized users
     */
      
    public function applicationFileViewFor (){
        $index_number = $_SESSION['index_number'];
        $this->load->model('operator/categorizeApplilcationsModel');
        $this->load->model('ApplicantApplicationFormModel');
        
        $data['specification_area'] = $this->categorizeApplilcationsModel->fetch_datas();//for get specification_areas for second page
        $data['basic_personal_details'] = $this->ApplicantApplicationFormModel->editFileBasicPersonalDetails($index_number);//for basic personal details
        $data['secondary_educational_details'] = $this->ApplicantApplicationFormModel->editFileSecondaryEducationalDetails($index_number);//for secondary educational details            
        $data['higher_educational_details'] = $this->ApplicantApplicationFormModel->editFileHigherEducationalDetails($index_number);//for higher educational details
        $data['any_other_qualifications'] = $this->ApplicantApplicationFormModel->editFileOtherQuallificationalDetails($index_number);//for any other qualificational details
        $data['professional_qualifications'] = $this->ApplicantApplicationFormModel->editFileProfessionalQualifications($index_number);//for any professional qualificational details
        $data['language_proficiency'] = $this->ApplicantApplicationFormModel->editFileLauguageProficiency($index_number);//for any other language proficiency details
        $data['more_details'] = $this->ApplicantApplicationFormModel->editOtherInformations($index_number);//for any other language proficiency details          
        $data['referees'] = $this->ApplicantApplicationFormModel->editRefereesInformations($index_number);//for any other language proficiency details        
        $data['selected_specification_area'] = $this->ApplicantApplicationFormModel->editSpecificationAreas($index_number);//for any other language proficiency details           
        $this->load->view('applicant/applicationForm/ApplicationFormReadOnly',$data);
        
    }

    
        
        
    }
?>
