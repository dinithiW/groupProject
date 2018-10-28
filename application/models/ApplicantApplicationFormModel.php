<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertBasicPersonalDetailsModel(){
        echo"ok this is the model";

        echo $_POST['first-name']."<br>";
        echo $_POST['last-name']."<br>";
        echo $_POST['postal-address']."<br>";
        echo "fdfdfdfdfdfdf"."<br>";
        echo "fdfdf";

        
        $this->load->database();
       // $sql = "INSERT INTO basic_personal_details(APPLICANT_ID, FIRST_NAME, LAST_NAME, POSTAL_ADDRESS, PERMANENT_ADDRESS, NIC, CITIZENSHIP_NAME, PERSONAL_EMAIL, OFFICE_EMAIL, MOBILE_NUMBER, HOME_NUMBER, OFFICE_NUMBER, GENDER, CIVIL_STATUS, CITIZENSHIP, DATE_OF_BIRTH, POST_APPLY_FOR, DEGREE) VALUES ('onwfdfdf','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three')";
       $sql = "INSERT INTO `just_for_test`(`name`, `age`) VALUES (ruwan,24)";
       $this->db->insert($sql);
        
    }
    
}

?>