<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertBasicPersonalDetailsModel(){
        
        $this->load->database();

        $name1 = $this->input->post('first_name');
        $name2 =$this->input->post('last_name');
        $name3 =$this->input->post('postal_address');
        $name4 =$this->input->post('permanent_address');
        $name5 =$this->input->post('driving_licence');
        $name6 =$this->input->post('applicant_citizenship');
        $name7 =$this->input->post('personalEmail');
        $name8 =$this->input->post('officeEmail');
        $name9 =$this->input->post('mobile_number');
        $name10 =$this->input->post('home_number');
        $name11 =$this->input->post('office_number');
        $name12 =$this->input->post('gender');
        $name111 =$this->input->post('civil_status');
        $name13 =$this->input->post('citizen');
        $name14 =$this->input->post('birth_date');
        $name15 =$this->input->post('post_for');

        
        

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
        echo "name--$name111"."<br>";
        echo "name--$name12"."<br>";
        echo "name--$name13"."<br>";
        echo "name--$name14"."<br>";
        echo "name--$name15"."<br>";
        

       

        $data = array(
            'APPLICANT_ID' => "",
            'FIRST_NAME' => $this->input->post('first_name'),
            'LAST_NAME' => $this->input->post('last_name'),
            'POSTAL_ADDRESS' => $this->input->post('postal_address'),
            'PERMANENT_ADDRESS' => $this->input->post('permanent_address'),
            'NIC' => $this->input->post('driving_licence'),
            'CITIZENSHIP_NAME' => $this->input->post('applicant_citizenship'),
            'PERSONAL_EMAIL' => $this->input->post('personalEmail'),
            'OFFICE_EMAIL' => $this->input->post('officeEmail'),
            'MOBILE_NUMBER' => $this->input->post('mobile_number'),
            'HOME_NUMBER' => $this->input->post('home_number'),
            'OFFICE_NUMBER' => $this->input->post('office_number'),
            'GENDER' => $this->input->post('gender'),
            'CIVIL_STATUS' => $this->input->post('civil_status'),
            'CITIZENSHIP' => $this->input->post('citizen'),
            'DATE_OF_BIRTH' => $this->input->post('birth_date'),
            'POST_APPLY_FOR' => $this->input->post('post_for'),
            'DEGREE' => ""
        );

        $this->db->set($data);

       // $sql = "INSERT INTO basic_personal_details(, , , ,, , , , , , , , , , , , , ) VALUES ('onwfdfdf','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three')";
       //$sql = "INSERT INTO `just_for_test`(`name`, `age`) VALUES ('ruwan','24');";
       $this->db->insert($this->db->dbprefix.'basic_personal_details');
        
    }


    public function insertSecondaryEducationalDetailsModel(){
        
        $this->load->database();

        $name1 = $this->input->post('secondary_educational_school_name1');
        $name2 =$this->input->post('secondary_educational_from1');
        $name3 =$this->input->post('secondary_educational_to1');
        $name4 =$this->input->post('secondary_educational_examination1');
        $name5 =$this->input->post('secondary_educational_year1');
        
        echo "school-- $name1"."<br>";
        echo "from--$name2"."<br>";
        echo "to--$name3"."<br>";
        echo "examination--$name4"."<br>";
        echo "year--$name5"."<br>";
        

        $name11 = $this->input->post('secondary_educational_school_name2');
        $name12 = $this->input->post('secondary_educational_from2');
        $name13 = $this->input->post('secondary_educational_to2');
        $name14 = $this->input->post('secondary_educational_examination2');
        $name15 = $this->input->post('secondary_educational_year2');
        
        echo "<br>"."school-- $name11"."<br>";
        echo "from--$name12"."<br>";
        echo "to--$name13"."<br>";
        echo "examination--$name14"."<br>";
        echo "year--$name15"."<br>";
    

        $data = array(
            'APPLICANT_ID'       =>"10",
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name1'),
            'FROM'               =>$this->input->post('secondary_educational_from1'),
            'TO'                 =>$this->input->post('secondary_educational_to1'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination1'),
            'YEAR'               =>$this->input->post('secondary_educational_year1')
        );

        $this->db->set($data);

       // $sql = "INSERT INTO basic_personal_details(, , , ,, , , , , , , , , , , , , ) VALUES ('onwfdfdf','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three','onw','two','three')";
       //$sql = "INSERT INTO `just_for_test`(`name`, `age`) VALUES ('ruwan','24');";
       $this->db->insert($this->db->dbprefix.'secondary_educational_details');
        
    }


    
}

?>