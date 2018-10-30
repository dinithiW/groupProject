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
        $name12 =$this->input->post('selectGender');
        $name13 =$this->input->post('selectCivilStatus');
        $name14 =$this->input->post('selectCitizenship');
        $name15 =$this->input->post('birth_date');
        $name16 =$this->input->post('selectDegree');

        
        

        echo "first_name-- $name1"."<br>";
        echo "last_name--$name2"."<br>";
        echo "postal_address--$name3"."<br>";
        echo "permanent_address--$name4"."<br>";
        echo "driving_licence--$name5"."<br>";
        echo "applicant_citizenship--$name6"."<br>";
        echo "personalEmail--$name7"."<br>";
        echo "officeEmail--$name8"."<br>";
        echo "mobile_number--$name9"."<br>";
        echo "home_number--$name10"."<br>";
        echo "office_number--$name11"."<br>";
        echo "selectGender--$name12"."<br>";
        echo "selectCivilStatus--$name13"."<br>";
        echo "selectCitizenship--$name14"."<br>";
        echo "birth_date--$name15"."<br>";
        echo "selectDegree--$name16"."<br>";
        

       

        $data = array(
            'APPLICANT_ID' => "",//////////////////////ad id number
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
       $this->db->insert($this->db->dbprefix.'basic_personal_details');
        
    }


    public function insertSecondaryEducationalDetailsModel(){
        
        $this->load->database();
        $secondary_educational_table_first_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name1'),
            'FROM'               =>$this->input->post('secondary_educational_from1'),
            'TO'                 =>$this->input->post('secondary_educational_to1'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination1'),
            'YEAR'               =>$this->input->post('secondary_educational_year1')
        );

        $this->db->set($secondary_educational_table_first_row);
        $this->db->insert($this->db->dbprefix.'secondary_educational_details');
        
        $secondary_educational_table_second_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name2'),
            'FROM'               =>$this->input->post('secondary_educational_from2'),
            'TO'                 =>$this->input->post('secondary_educational_to2'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination2'),
            'YEAR'               =>$this->input->post('secondary_educational_year2')
        );

        $this->db->set($secondary_educational_table_second_row);
        $this->db->insert($this->db->dbprefix.'secondary_educational_details');

        $secondary_educational_table_third_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name3'),
            'FROM'               =>$this->input->post('secondary_educational_from3'),
            'TO'                 =>$this->input->post('secondary_educational_to3'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination3'),
            'YEAR'               =>$this->input->post('secondary_educational_year3')
        );

        $this->db->set($secondary_educational_table_third_row);
        $this->db->insert($this->db->dbprefix.'secondary_educational_details');
        
        $secondary_educational_table_fourth_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name4'),
            'FROM'               =>$this->input->post('secondary_educational_from4'),
            'TO'                 =>$this->input->post('secondary_educational_to4'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination4'),
            'YEAR'               =>$this->input->post('secondary_educational_year4')
        );

        $this->db->set($secondary_educational_table_fourth_row);
        $this->db->insert($this->db->dbprefix.'secondary_educational_details');
    
    }





    public function insertHigherEducationalDetailsModel(){
        
        $this->load->database();
        $higher_educational_table_first_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university1'),
            'FROM'               =>$this->input->post('heigher_educational_from1'),
            'TO'                 =>$this->input->post('heigher_educational_to1'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained1'),
            'DURATION'           =>$this->input->post('heigher_educational_duration1'),
            'CLASS'              =>$this->input->post('heigher_educational_class1'),
            'YEAR'               =>$this->input->post('heigher_educational_year1'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no1'),
        );

        $this->db->set($higher_educational_table_first_row);
        $this->db->insert($this->db->dbprefix.'higher_educational_details');

        $higher_educational_table_second_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university2'),
            'FROM'               =>$this->input->post('heigher_educational_from2'),
            'TO'                 =>$this->input->post('heigher_educational_to2'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained2'),
            'DURATION'           =>$this->input->post('heigher_educational_duration2'),
            'CLASS'              =>$this->input->post('heigher_educational_class2'),
            'YEAR'               =>$this->input->post('heigher_educational_year2'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no2'),
        );

        $this->db->set($higher_educational_table_second_row);
        $this->db->insert($this->db->dbprefix.'higher_educational_details');

        $higher_educational_table_third_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university3'),
            'FROM'               =>$this->input->post('heigher_educational_from3'),
            'TO'                 =>$this->input->post('heigher_educational_to3'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained3'),
            'DURATION'           =>$this->input->post('heigher_educational_duration3'),
            'CLASS'              =>$this->input->post('heigher_educational_class3'),
            'YEAR'               =>$this->input->post('heigher_educational_year3'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no3'),
        );

        $this->db->set($higher_educational_table_third_row);
        $this->db->insert($this->db->dbprefix.'higher_educational_details');

        $higher_educational_table_fourth_row = array(
            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university4'),
            'FROM'               =>$this->input->post('heigher_educational_from4'),
            'TO'                 =>$this->input->post('heigher_educational_to4'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained4'),
            'DURATION'           =>$this->input->post('heigher_educational_duration4'),
            'CLASS'              =>$this->input->post('heigher_educational_class4'),
            'YEAR'               =>$this->input->post('heigher_educational_year4'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no4'),
        );

        $this->db->set($higher_educational_table_fourth_row);
        $this->db->insert($this->db->dbprefix.'higher_educational_details');
        
    }

    public function insertAnyOtherQualificationsModel(){
        
        $this->load->database();
        $any_other_qualifications_table_first_row = array(

            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university1'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma1'),
            'DURAION'            =>$this->input->post('any_other_qualifications_duration1'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year1')
        );

        $this->db->set($any_other_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');

        $any_other_qualifications_table_second_row = array(

            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university2'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma2'),
            'DURAION'            =>$this->input->post('any_other_qualifications_duration2'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year2')
        );

        $this->db->set($any_other_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');

        $any_other_qualifications_table_third_row = array(

            'APPLICANT_ID'       =>"10",//////////////////////ad id number
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university3'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma3'),
            'DURATION'            =>$this->input->post('any_other_qualifications_duration3'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year3')
        );

        $this->db->set($any_other_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');

    }

    public function insertProfessionalQualificationsModel(){
        
        $this->load->database();
        $professional_qualifications_table_first_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution1'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from1'),
            'TO'                    =>$this->input->post('any_other_qualifications_to1'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration1'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification1')
        );

        $this->db->set($professional_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');

        $professional_qualifications_table_second_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution2'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from2'),
            'TO'                    =>$this->input->post('any_other_qualifications_to2'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration2'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification2')
        );

        $this->db->set($professional_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');

        $professional_qualifications_table_third_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution3'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from3'),
            'TO'                    =>$this->input->post('any_other_qualifications_to3'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration3'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification3')
        );

        $this->db->set($professional_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');

    }

    

    public function insertRefereeModel(){
        
        $this->load->database();

        $referee_table_first_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'NAME'                  =>$this->input->post('referees_name1'),
            'DESIGNATION'           =>$this->input->post('referees_designation1'),
            'ADDRESS'               =>$this->input->post('referees_address1'),
            'EMAIL'                 =>$this->input->post('referees_email1'),
            'CONTACT_NO'            =>$this->input->post('referees_contact1')
        );

        $this->db->set($referee_table_first_row);
        $this->db->insert($this->db->dbprefix.'referees');
        
        $referee_table_second_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'NAME'                  =>$this->input->post('referees_name2'),
            'DESIGNATION'           =>$this->input->post('referees_designation2'),
            'ADDRESS'               =>$this->input->post('referees_address2'),
            'EMAIL'                 =>$this->input->post('referees_email2'),
            'CONTACT_NO'            =>$this->input->post('referees_contact2')
        );

        $this->db->set($referee_table_second_row);
        $this->db->insert($this->db->dbprefix.'referees');

        $referee_table_third_row = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'NAME'                  =>$this->input->post('referees_name3'),
            'DESIGNATION'           =>$this->input->post('referees_designation3'),
            'ADDRESS'               =>$this->input->post('referees_address3'),
            'EMAIL'                 =>$this->input->post('referees_email3'),
            'CONTACT_NO'            =>$this->input->post('referees_contact3')
        );

        $this->db->set($referee_table_third_row);
        $this->db->insert($this->db->dbprefix.'referees');

    }


    public function insertLanguageProficiencyModel(){
        
        $this->load->database();

        $name1 = $this->input->post('work_sinhala');
        $name2 = $this->input->post('work_english');
        $name3 = $this->input->post('work_tamil');
        $name4 = $this->input->post('teach_sinhala');
        $name5 = $this->input->post('teach_english');
        $name6 = $this->input->post('teach_tamil');

        $language_proficiency = array(

            'APPLICANT_ID'          =>"10",//////////////////////ad id number
            'WORK_SINHALA'          =>$name1,
            'WORK_ENGLISH'          =>$name2,
            'WORK_TAMIL'            =>$name3,
            'TEACH_SINHALA'         =>$name4,
            'TEACH_ENGLISH'         =>$name5,
            'TEACH_TAMIL'           =>$name6
        );
        

        $this->db->set($language_proficiency);
        $this->db->insert($this->db->dbprefix.'language_proficiency');

    }    

    
}

?>