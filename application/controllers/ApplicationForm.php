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
 
                $id_number =  $this->ApplicantApplicationFormModel->makeApplicationId();

                $email      = $this->session->userdata['sess_varia']['email'];
                $user_type  = $this->session->userdata['sess_varia']['usertype'];
                $id_number  = $this->session->userdata['sess_varia']['id_number'];
                $log        = $this->session->userdata['sess_varia']['logged_in'];

                $session_variables1 = array(
					'email'    => $email,
					'usertype' => $user_type,
					'id_number'=> $id_number,
			        'logged_in'=> $log
				);
                
                
                $this->session->set_userdata('sess_varia1', $session_variables1);

                

/*
                $this->ApplicantApplicationFormModel->insertBasicPersonalDetailsModel($id_number);
                $this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel($id_number);
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

        public function updateBasicPersonalDetailsController(){
            /*
            $idNumber ="18se7";
            $this->load->model('ApplicantApplicationFormModel');
            $data['category']    =$this->ApplicantApplicationFormModel->updateApplicationForm($idNumber);
            $data['mainContest'] ='applicant/applicationForm/ApplicationFormEdit';*/
            //var_dump($product);

            /*
            $check = $this->session->userdata['sess_varia1']['id_number'];
            
            $email      = $this->session->userdata['sess_varia']['email'];
            $user_type  = $this->session->userdata['sess_varia']['usertype'];
            $id_number  = $this->session->userdata['sess_varia']['id_number'];
            $log        = $this->session->userdata['sess_varia']['logged_in'];

            echo"thie is the :"."$email"."<br>";
            echo"thie is the :"."$user_type"."<br>";
            echo"thie is the :"."$id_number"."<br>";
            echo"thie is the :"."$log"."<br>";
*/

            //$this->session->set_userdata('name',"ruwanliyanage");
            echo"this is the main page";

            //$now1 = $this->session->userdata['sess_varia']['logged_in'];

            
            
            $rr = $this->session->userdata('age');
			echo"$rr";

echo"<br>"."end of the mainwwwwwwwwww";
            //$this->session->set_userdata('name','ruwanliyanage');


            //$this->load->view('applicant/applicationForm/ApplicationFormEdit');

        }
        
    }
?>
