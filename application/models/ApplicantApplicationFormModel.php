<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    

    /**
     * this function is use for 
     * insert the basic personal details to database
     * insert secondary educational details to database
     */
    public function insertBasicPersonalDetailsModel(){
        $this->load->database();
        $idNumber = $this->makeApplicationId();

        $name1 = $this->input->post('first_name');
        $name2 = $this->input->post('last_name');
        $name3 = $this->input->post('postal_address');
        $name4 = $this->input->post('permanent_address');
        $name5 = $this->input->post('driving_licence');
        $name6 = $this->input->post('applicant_citizenship');
        $name7 = $this->input->post('personalEmail');
        $name8 = $this->input->post('officeEmail');
        $name9 = $this->input->post('mobile_number');
        $name10 =$this->input->post('home_number');
        $name11 =$this->input->post('office_number');
        $name12 =$this->input->post('selectGender');
        $name13 =$this->input->post('selectCivilStatus');
        $name14 =$this->input->post('selectCitizenship');
        $name15 =$this->input->post('birth_date');
        $name16 =$this->input->post('postApplyFor');
        $name17 =$this->input->post('selectDegree');

        $data = array(
            'INDEX_NUMBER'       => $idNumber,
            'FIRST_NAME'         => $name1,
            'LAST_NAME'          => $name2,
            'POSTAL_ADDRESS'     => $name3,
            'PERMANENT_ADDRESS'  => $name4,
            'NIC'                => $name5,
            'CITIZENSHIP_NAME'   => $name6,
            'PERSONAL_EMAIL'     => $name7,
            'OFFICE_EMAIL'       => $name8,
            'MOBILE_NUMBER'      => $name9,
            'HOME_NUMBER'        => $name10,
            'OFFICE_NUMBER'      => $name11,
            'GENDER'             => $name12,
            'CIVIL_STATUS'       => $name13,
            'CITIZENSHIP'        => $name14,
            'DATE_OF_BIRTH'      => $name15,
            'POST_APPLY_FOR'     => $name16,
            'DEGREE'             => $name17
        );

       //$this->db->set($data);
       //$this->db->insert($this->db->dbprefix.'');
        $this->db->insert('basic_personal_details', $data);

        $this->updateTemporaryIdTable($idNumber);
        $this->insertSecondaryEducationalDetailsModel($idNumber);
        $this->insertHigherEducationalDetailsModel($idNumber);
        $this->insertAnyOtherQualificationsModel($idNumber);
        $this->insertProfessionalQualificationsModel($idNumber);
        $this->insertRefereeModel($idNumber);
        $this->insertLanguageProficiencyModel($idNumber);
        $this->insertApplicatsMoreDetails($idNumber);
        $this->insertSpecificationAreas($idNumber);
    }

    

    /*
    * this function is use for adding files for  for the database
    */
    public function insertFIleForDatabase(){ 
        
        $dbh = new PDO("mysql:host=localhost;dbname=ucsc","root","");
        if(isset($_POST['submit'])){
            $name = $_FILES['attached_file']['name'];
            $mime = $_FILES['attached_file']['type'];
            $category = $this->input->post('selectDegree');
            $data = file_get_contents($_FILES['attached_file']['tmp_name']);
            $stmt = $dbh->prepare("insert into application_form_documents values(?,?,?,?)");
                
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$mime);
            $stmt->bindParam(3,$category);
            $stmt->bindParam(4,$data);
            $stmt->execute();
        }   
    }

    /*
    * this function is use for adding files for  for the database
    */
    public function editFIleForDatabase(){ 
        if(isset($_POST['edit'])){
            $dbh = new PDO("mysql:host=localhost;dbname=ucsc","root","");
            //$id = isset($_GET['id'])? $_GET['id'] : "";
            $id  = $this->input->post('selectCategory');
            $stat = $dbh->prepare("select * from application_form_documents where DOCUMENT_TYPE=?");
            $stat->bindParam(1,$id);
            $stat->execute();
            $row = $stat->fetch();
            header("Content-Type:".$row['DOCUMENT_NAME']);
            echo $row['DOCUMENT'];
            //echo '<img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/>'; 
        }
    }


    public function insertSpecificationAreas($idNumber){        
        $this->load->database();
        foreach($this->input->post('check_list') as $selected_area){
            $data = array(
                'INDEX_NUMBER'            =>$idNumber, 
                'SPECIFICATION_AREA_NAME' =>$selected_area
            );
            $this->db->insert('specialization_area_for_applicant', $data);
        
        }

    }


    /**
     * this funciton is use for the 
     * insert secondary educational details
     * to the database
     */
    public function insertSecondaryEducationalDetailsModel($idNumber){
        
        $this->load->database();
        $secondary_educational_table_first_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name1'),
            'FROM'               =>$this->input->post('secondary_educational_from1'),
            'TO'                 =>$this->input->post('secondary_educational_to1'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination1'),
            'YEAR'               =>$this->input->post('secondary_educational_year1')
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_first_row);
        
        $secondary_educational_table_second_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name2'),
            'FROM'               =>$this->input->post('secondary_educational_from2'),
            'TO'                 =>$this->input->post('secondary_educational_to2'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination2'),
            'YEAR'               =>$this->input->post('secondary_educational_year2')
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_second_row);

        $secondary_educational_table_third_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name3'),
            'FROM'               =>$this->input->post('secondary_educational_from3'),
            'TO'                 =>$this->input->post('secondary_educational_to3'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination3'),
            'YEAR'               =>$this->input->post('secondary_educational_year3')
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_third_row);
   
        $secondary_educational_table_fourth_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name4'),
            'FROM'               =>$this->input->post('secondary_educational_from4'),
            'TO'                 =>$this->input->post('secondary_educational_to4'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination4'),
            'YEAR'               =>$this->input->post('secondary_educational_year4')
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_fourth_row);

    }

    public function insertHigherEducationalDetailsModel($idNumber){
    
        $this->load->database();
        $higher_educational_table_first_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university1'),
            'FROM'               =>$this->input->post('heigher_educational_from1'),
            'TO'                 =>$this->input->post('heigher_educational_to1'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained1'),
            'DURATION'           =>$this->input->post('heigher_educational_duration1'),
            'CLASS'              =>$this->input->post('heigher_educational_class1'),
            'YEAR'               =>$this->input->post('heigher_educational_year1'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no1'),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_first_row);

        $higher_educational_table_second_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university2'),
            'FROM'               =>$this->input->post('heigher_educational_from2'),
            'TO'                 =>$this->input->post('heigher_educational_to2'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained2'),
            'DURATION'           =>$this->input->post('heigher_educational_duration2'),
            'CLASS'              =>$this->input->post('heigher_educational_class2'),
            'YEAR'               =>$this->input->post('heigher_educational_year2'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no2'),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_second_row);

        $higher_educational_table_third_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university3'),
            'FROM'               =>$this->input->post('heigher_educational_from3'),
            'TO'                 =>$this->input->post('heigher_educational_to3'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained3'),
            'DURATION'           =>$this->input->post('heigher_educational_duration3'),
            'CLASS'              =>$this->input->post('heigher_educational_class3'),
            'YEAR'               =>$this->input->post('heigher_educational_year3'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no3'),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_third_row);

        $higher_educational_table_fourth_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'UNIVERSITY'         =>$this->input->post('heigher_educational_university4'),
            'FROM'               =>$this->input->post('heigher_educational_from4'),
            'TO'                 =>$this->input->post('heigher_educational_to4'),
            'DEGREE_OBTAINED'    =>$this->input->post('heigher_educational_degree_obtained4'),
            'DURATION'           =>$this->input->post('heigher_educational_duration4'),
            'CLASS'              =>$this->input->post('heigher_educational_class4'),
            'YEAR'               =>$this->input->post('heigher_educational_year4'),
            'INDEX_NO'           =>$this->input->post('heigher_educational_year_no4'),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_fourth_row);
     
    }

    public function insertAnyOtherQualificationsModel($idNumber){
        
        $this->load->database();

        $any_other_qualifications_table_first_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university1'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma1'),
            'DURAION'            =>$this->input->post('any_other_qualifications_duration1'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year1')
        );

        $this->db->set($any_other_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');
   

        $any_other_qualifications_table_second_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university2'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma2'),
            'DURAION'            =>$this->input->post('any_other_qualifications_duration2'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year2')
        );

        $this->db->set($any_other_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');
        

        $any_other_qualifications_table_third_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'INSTITUTION'        =>$this->input->post('any_other_qualifications_university3'),
            'DEPLOMA'            =>$this->input->post('any_other_qualifications_deploma3'),
            'DURAION'            =>$this->input->post('any_other_qualifications_duration3'),
            'YEAR'               =>$this->input->post('any_other_qualifications_year3')
        );

        $this->db->set($any_other_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');

    }

    public function insertProfessionalQualificationsModel($idNumber){
        
        $this->load->database();
        $professional_qualifications_table_first_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution1'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from1'),
            'TO'                    =>$this->input->post('any_other_qualifications_to1'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration1'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification1')
        );

        $this->db->set($professional_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');
        

        $professional_qualifications_table_second_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution2'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from2'),
            'TO'                    =>$this->input->post('any_other_qualifications_to2'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration2'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification2')
        );

        $this->db->set($professional_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');
       

        $professional_qualifications_table_third_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'INSTITUTION'           =>$this->input->post('any_other_qualifications_institution3'),
            'FROM'                  =>$this->input->post('any_other_qualifications_from3'),
            'TO'                    =>$this->input->post('any_other_qualifications_to3'),
            'DURATION'               =>$this->input->post('any_other_qualifications_duration3'),
            'TYPE_OF_QUALIFICATION' =>$this->input->post('any_other_qualifications_type_of_qualification3')
        );

        $this->db->set($professional_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');

    }

    

    public function insertRefereeModel($idNumber){
        
        $this->load->database();

        $referee_table_first_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'NAME'                  =>$this->input->post('referees_name1'),
            'DESIGNATION'           =>$this->input->post('referees_designation1'),
            'ADDRESS'               =>$this->input->post('referees_address1'),
            'EMAIL'                 =>$this->input->post('referees_email1'),
            'CONTACT_NO'            =>$this->input->post('referees_contact1')
        );

        $this->db->set($referee_table_first_row);
        $this->db->insert($this->db->dbprefix.'referees');
        
        
        $referee_table_second_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'NAME'                  =>$this->input->post('referees_name2'),
            'DESIGNATION'           =>$this->input->post('referees_designation2'),
            'ADDRESS'               =>$this->input->post('referees_address2'),
            'EMAIL'                 =>$this->input->post('referees_email2'),
            'CONTACT_NO'            =>$this->input->post('referees_contact2')
        );

        $this->db->set($referee_table_second_row);
        $this->db->insert($this->db->dbprefix.'referees');
      

        $referee_table_third_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'NAME'                  =>$this->input->post('referees_name3'),
            'DESIGNATION'           =>$this->input->post('referees_designation3'),
            'ADDRESS'               =>$this->input->post('referees_address3'),
            'EMAIL'                 =>$this->input->post('referees_email3'),
            'CONTACT_NO'            =>$this->input->post('referees_contact3')
        );

        $this->db->set($referee_table_third_row);
        $this->db->insert($this->db->dbprefix.'referees');

    }


    public function insertLanguageProficiencyModel($idNumber){
        
        $this->load->database();

        $name1 = $this->input->post('work_sinhala');
        $name2 = $this->input->post('work_english');
        $name3 = $this->input->post('work_tamil');
        $name4 = $this->input->post('teach_sinhala');
        $name5 = $this->input->post('teach_english');
        $name6 = $this->input->post('teach_tamil');

        $language_proficiency = array(

            'INDEX_NUMBER'          =>$idNumber,
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
    
    
    public function insertOtherFieldsModel(){
        
        $this->load->database();
        $other_fields_table_first_row = array(
            'APPLICANT_ID'       =>$idNumber,
            'EXPERIENCE'         =>$this->input->post('experience'),
            'RESEARCH'           =>$this->input->post('research'),
            'OTHER_INFORMS'      =>$this->input->post('other_details'),
            'DATE'               =>$this->input->post('current_date')
        );

        $this->db->set($other_fields_table_first_row);
        $this->db->insert($this->db->dbprefix.'other_fields');

    }

/**
 * this function use for make applicant's permenent index number
 * use year 
 * use applicating category
 * incremented number
 * Ex: 18pr005
 */

    public function makeApplicationId(){
        $this->db->select("INDEX_NUMBER");
        $this->db->from("basic_personal_details");

        $query_1 = $this->db->get();
        $rowcount_1 = $query_1->num_rows();

        $year = date("Y");//for get current year ex.218
        $year_of_index_number = substr($year,2);//ex.18
        $input = $this->input->post('postApplyFor');//inform that post apply for ex:-probationary or senior lecture
        $category= substr($input, 0,2);//ex:-po or se

        //$rowcount_1 += $rowcount_1;
        $number_of_index_number = str_pad($rowcount_1, 3, '0', STR_PAD_LEFT);//180001
        $temporary_index_number ="$year_of_index_number"."$category"."$number_of_index_number";
        
        return $temporary_index_number;
    }

    /**
     * this funciton use for add applicants other details to database
     * such as 
     * EXPERIENCE_RELEVANT_TO_POST,
     * RESEARCH_AND_PUBLICATION_DETAILS
     * ANY_OTHER_INFORMATION
     * SUBMISSION_DATE
     */
    public function insertApplicatsMoreDetails($idNumber){
        $this->load->database();
        $data = array(
            'INDEX_NUMBER'                       =>$idNumber,
            'EXPERIENCE_RELEVANT_TO_POST'        =>$this->input->post('experience'),
            'RESEARCH_AND_PUBLICATION_DETAILS'   =>$this->input->post('research'),
            'ANY_OTHER_INFORMATION'              =>$this->input->post('other_details'),
            'SUBMISSION_DATE'                    =>$this->input->post('current_date')
        );
        $this->db->insert('applicats_more_details', $data);
    }




/**
 * this function use for update the temporaty index number 
 * substitute by for permenent index number 
 */
    public function updateTemporaryIdTable($idNumber){
        $this->load->database();

        $data = array( 
            'INDEX_NUMBER'	=> $idNumber 
        );
        $this->db->where('USERNAME', $this->input->post('personalEmail'));
        $this->db->update(' temporary_index_number_for_applicants', $data);
        
    }

    
    /**
     * this function is use for get basic personal details for edit application form
     */
    public function editFileBasicPersonalDetails(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('basic_personal_details');
        $this->db->where('INDEX_NUMBER',"19pr000");
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic secondary educational details for edit application form
     */
    public function editFileSecondaryEducationalDetails(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('secondary_educational_details');
        $this->db->where('INDEX_NUMBER',"19pr000");
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic higher educational details for edit application form
     */
    public function editFileHigherEducationalDetails(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('higher_educational_details');
        $this->db->where('INDEX_NUMBER',"19pr000");
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic any other qualificational details for edit application form
     */
    public function editFileOtherQuallificationalDetails(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('any_other_qualifications');
        $this->db->where('INDEX_NUMBER',"19pr000");
        $query = $this->db->get();
        return $query;
    }
}

?>

