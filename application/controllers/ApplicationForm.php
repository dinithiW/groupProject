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
                //$this->ApplicantApplicationFormModel->updateTemporaryIdTable();
/*                $this->ApplicantApplicationFormModel->insertSecondaryEducationalDetailsModel($id_number);
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

        /**
         * this funciton is use for call AddCustomerForDatabase() function
         * it will upload file to database
         */
        public function insertfileUpload(){
       
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create a new Student';
    
            $config = array(
                    'upload_path'    => 'assets/uploaded_file/',
                    'allowed_types'  => 'jpg|jpeg|png|bmp|txt|pdf',
                    'max_size'       =>0,
                    'filename'       =>url_title($this->input->post('file')),
                    //'encrypt_name' =>true                   
            );
    
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('attached_file')){
                echo $this->upload->display_errors('<p>', '</p>');
            }
            else{
                $this->load->model('ApplicantApplicationFormModel');
                $this->ApplicantApplicationFormModel->AddCustomerForDatabase($this->upload->data('full_path'),$this->input->post());
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

            
            $this->load->library('session');
            $rr = $this->session->userdata('age');
			echo"$rr";

echo"<br>"."end of the mainwwwwwwwwww";
            //$this->session->set_userdata('name','ruwanliyanage');


            //$this->load->view('applicant/applicationForm/ApplicationFormEdit');

        }

        
        
    }
?>
