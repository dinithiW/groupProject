<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertBasicPersonalDetailsModel(){
        echo $_POST['first-name'];
        $f1 = "one";
        $f2 = "two";
        $f3 = "three";
        $this->load->database();
        
        $this->db->insert("INSERT INTO `basic_personal_details`(`APPLICANT_ID`, `FIRST_NAME`, `LAST_NAME`, `POSTAL_ADDRESS`, `PERMANENT_ADDRESS`, `NIC`, `CITIZENSHIP_NAME`, `PERSONAL_EMAIL`, `OFFICE_EMAIL`, `MOBILE_NUMBER`, `HOME_NUMBER`, `OFFICE_NUMBER`, `GENDER`, `CIVIL_STATUS`, `CITIZENSHIP`, `DATE_OF_BIRTH`, `POST_APPLY_FOR`, `DEGREE`) VALUES ($f1,$f2,$f3,$f1,$f2,$f3,$f1,$f2,$f3,$f1,$f2,$f3,$f1,$f2,$f3,$f1,$f2,$f3)");
    
    }
    
}

?>