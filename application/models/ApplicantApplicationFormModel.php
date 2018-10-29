<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertBasicPersonalDetailsModel(){
        
        $this->load->database();

        $data = array(
            'APPLICANT_ID' => "",
            'FIRST_NAME' => $this->input->post('first-name'),
            'LAST_NAME' => $this->input->post('last-name'),
            'POSTAL_ADDRESS' => $this->input->post('postal-address'),
            'PERMANENT_ADDRESS' => $this->input->post('permanent-address'),
            'NIC' => $this->input->post('driving-licence'),
            'CITIZENSHIP_NAME' => $this->input->post('applicant-citizenship'),
            'PERSONAL_EMAIL' => $this->input->post('personal-email'),
            'OFFICE_EMAIL' => $this->input->post('office-email'),
            'MOBILE_NUMBER' => $this->input->post('mobile-number'),
            'HOME_NUMBER' => $this->input->post('home-number'),
            'OFFICE_NUMBER' => $this->input->post('office-number'),
            'GENDER' => $this->input->post('gender'),
            'CIVIL_STATUS' => $this->input->post('civil-status'),
            'CITIZENSHIP' => $this->input->post('citizen'),
            'DATE_OF_BIRTH' => $this->input->post('birth-date'),
            'POST_APPLY_FOR' => $this->input->post('post-for'),
            'DEGREE' => ""
        );

        $this->db->set($data);

       // $sql = "INSERT INTO basic_personal_details(, , , ,, , , , , , , , , , , , , ) VALUES ('onwfdfdf','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three')";
       //$sql = "INSERT INTO `just_for_test`(`name`, `age`) VALUES ('ruwan','24');";
       $this->db->insert($this->db->dbprefix.'basic_personal_details');
        
    }
    
}

?>