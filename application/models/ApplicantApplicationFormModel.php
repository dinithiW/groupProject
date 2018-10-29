<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertBasicPersonalDetailsModel(){
        
        $this->load->database();

        $name1 = $this->input->post('first-name');
        $name2 =$this->input->post('last-name');
        $name3 =$this->input->post('postal-address');
        $name4 =$this->input->post('permanent-address');
        $name5 =$this->input->post('driving-licence');
        $name6 =$this->input->post('applicant-citizenship');
        $name7 =$this->input->post('personalEmail');
        $name8 =$this->input->post('officeEmail');
        $name9 =$this->input->post('mobile-number');
        $name10 =$this->input->post('home-number');
        $name11 =$this->input->post('office-number');
        $name12 =$this->input->post('gender');
        $name13 =$this->input->post('citizen');
        $name14 =$this->input->post('birth-date');
        $name15 =$this->input->post('post-for');


        echo "name-- $name1"."<br>";
        echo "name--$name2"."<br>";
        echo "name--$name3"."<br>";
        echo "name--$name4"."<br>";
        echo "name--$name5"."<br>";
        echo "name--$name6"."<br>";
        echo "name--$name7"."<br>";
        echo "name--$name8"."<br>";
        echo "name--$name9"."<br>";
        echo "name--$name10"."<br>";
        echo "name--$name11"."<br>";
        echo "name--$name12"."<br>";
        echo "name--$name13"."<br>";
        echo "name--$name14"."<br>";
        echo "name--$name15"."<br>";
        

       

        $data = array(
            'APPLICANT_ID' => "",
            'FIRST_NAME' => $this->input->post('first-name'),
            'LAST_NAME' => $this->input->post('last-name'),
            'POSTAL_ADDRESS' => $this->input->post('postal-address'),
            'PERMANENT_ADDRESS' => $this->input->post('permanent-address'),
            'NIC' => $this->input->post('driving-licence'),
            'CITIZENSHIP_NAME' => $this->input->post('applicant-citizenship'),
            'PERSONAL_EMAIL' => $this->input->post('personalEmail'),
            'OFFICE_EMAIL' => $this->input->post('officeEmail'),
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