<?php
class ApplicantApplicationFormModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }


    /**
     * this funciton is used for filter the form inputs
     * trim() is used for prevent the unnessasary whitespaces in the inputs
     * stripslashes() is used for the prevent the effect of symbols like '/' 
     */

    public function firlterFormInputs($input){
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }


    
    /**
     * this function is use for 
     * insert the basic personal details to database
     * insert secondary educational details to database
     */
    public function insertBasicPersonalDetailsModel(){
        $this->load->database();
        $idNumber = $this->makeApplicationId();

        $name1 = $this->firlterFormInputs($this->input->post('first_name'));
        $name2 = $this->firlterFormInputs($this->input->post('last_name'));
        $name3 = $this->firlterFormInputs($this->input->post('postal_address'));
        $name4 = $this->firlterFormInputs($this->input->post('permanent_address'));
        $name5 = $this->firlterFormInputs($this->input->post('driving_licence'));
        $name6 = $this->firlterFormInputs($this->input->post('applicant_citizenship'));
        $name7 = $this->firlterFormInputs($this->input->post('personalEmail'));
        $name8 = $this->firlterFormInputs($this->input->post('officeEmail'));
        $name9 = $this->firlterFormInputs($this->input->post('mobile_number'));
        $name10 =$this->firlterFormInputs($this->input->post('home_number'));
        $name11 =$this->firlterFormInputs($this->input->post('office_number'));
        $name12 =$this->input->post('selectGender');
        $name13 =$this->input->post('selectCivilStatus');
        $name14 =$this->input->post('selectCitizenship');
        $name15 =$this->input->post('birth_date');
        $name16 =$this->input->post('postApplyFor');
        //$name17 =$this->input->post('selectDegree');

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
            'POST_APPLY_FOR'     => $name16
            //'DEGREE'             => $name17
        );

       
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
    * use in fileuploading page
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
            'ROW_NUMBER'         => '1',
            'SCHOOL_NAME'        =>$this->firlterFormInputs($this->input->post('secondary_educational_school_name1')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('secondary_educational_from1')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('secondary_educational_to1')),
            'EXAMINATION_PASSED' =>$this->firlterFormInputs($this->input->post('secondary_educational_examination1')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('secondary_educational_year1'))
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_first_row);
        
        $secondary_educational_table_second_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '2',
            'SCHOOL_NAME'        =>$this->firlterFormInputs($this->input->post('secondary_educational_school_name2')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('secondary_educational_from2')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('secondary_educational_to2')),
            'EXAMINATION_PASSED' =>$this->firlterFormInputs($this->input->post('secondary_educational_examination2')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('secondary_educational_year2'))
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_second_row);

        $secondary_educational_table_third_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '3',
            'SCHOOL_NAME'        =>$this->firlterFormInputs($this->input->post('secondary_educational_school_name3')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('secondary_educational_from3')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('secondary_educational_to3')),
            'EXAMINATION_PASSED' =>$this->firlterFormInputs($this->input->post('secondary_educational_examination3')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('secondary_educational_year3'))
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_third_row);
   
        $secondary_educational_table_fourth_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '4',
            'SCHOOL_NAME'        =>$this->firlterFormInputs($this->input->post('secondary_educational_school_name4')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('secondary_educational_from4')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('secondary_educational_to4')),
            'EXAMINATION_PASSED' =>$this->firlterFormInputs($this->input->post('secondary_educational_examination4')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('secondary_educational_year4'))
        );
        $this->db->insert('secondary_educational_details', $secondary_educational_table_fourth_row);

    }

    public function insertHigherEducationalDetailsModel($idNumber){
    
        $this->load->database();
        $higher_educational_table_first_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '1',
            'UNIVERSITY'         =>$this->firlterFormInputs($this->input->post('heigher_educational_university1')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('heigher_educational_from1')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('heigher_educational_to1')),
            'DEGREE_OBTAINED'    =>$this->firlterFormInputs($this->input->post('heigher_educational_degree_obtained1')),
            'DURATION'           =>$this->firlterFormInputs($this->input->post('heigher_educational_duration1')),
            'CLASS'              =>$this->firlterFormInputs($this->input->post('heigher_educational_class1')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('heigher_educational_year1')),
            'INDEX_NO'           =>$this->firlterFormInputs($this->input->post('heigher_educational_year_no1')),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_first_row);

        $higher_educational_table_second_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '2',
            'UNIVERSITY'         =>$this->firlterFormInputs($this->input->post('heigher_educational_university2')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('heigher_educational_from2')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('heigher_educational_to2')),
            'DEGREE_OBTAINED'    =>$this->firlterFormInputs($this->input->post('heigher_educational_degree_obtained2')),
            'DURATION'           =>$this->firlterFormInputs($this->input->post('heigher_educational_duration2')),
            'CLASS'              =>$this->firlterFormInputs($this->input->post('heigher_educational_class2')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('heigher_educational_year2')),
            'INDEX_NO'           =>$this->firlterFormInputs($this->input->post('heigher_educational_year_no2')),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_second_row);

        $higher_educational_table_third_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '3',
            'UNIVERSITY'         =>$this->firlterFormInputs($this->input->post('heigher_educational_university3')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('heigher_educational_from3')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('heigher_educational_to3')),
            'DEGREE_OBTAINED'    =>$this->firlterFormInputs($this->input->post('heigher_educational_degree_obtained3')),
            'DURATION'           =>$this->firlterFormInputs($this->input->post('heigher_educational_duration3')),
            'CLASS'              =>$this->firlterFormInputs($this->input->post('heigher_educational_class3')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('heigher_educational_year3')),
            'INDEX_NO'           =>$this->firlterFormInputs($this->input->post('heigher_educational_year_no3')),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_third_row);

        $higher_educational_table_fourth_row = array(
            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '4',
            'UNIVERSITY'         =>$this->firlterFormInputs($this->input->post('heigher_educational_university4')),
            'FROM'               =>$this->firlterFormInputs($this->input->post('heigher_educational_from4')),
            'TO'                 =>$this->firlterFormInputs($this->input->post('heigher_educational_to4')),
            'DEGREE_OBTAINED'    =>$this->firlterFormInputs($this->input->post('heigher_educational_degree_obtained4')),
            'DURATION'           =>$this->firlterFormInputs($this->input->post('heigher_educational_duration4')),
            'CLASS'              =>$this->firlterFormInputs($this->input->post('heigher_educational_class4')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('heigher_educational_year4')),
            'INDEX_NO'           =>$this->firlterFormInputs($this->input->post('heigher_educational_year_no4')),
        );
        $this->db->insert('higher_educational_details', $higher_educational_table_fourth_row);
     
    }

    public function insertAnyOtherQualificationsModel($idNumber){
        
        $this->load->database();

        $any_other_qualifications_table_first_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '1',
            'INSTITUTION'        =>$this->firlterFormInputs($this->input->post('any_other_qualifications_university1')),
            'DEPLOMA'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_deploma1')),
            'DURAION'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_duration1')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('any_other_qualifications_year1'))
        );

        $this->db->set($any_other_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');
   

        $any_other_qualifications_table_second_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '2',
            'INSTITUTION'        =>$this->firlterFormInputs($this->input->post('any_other_qualifications_university2')),
            'DEPLOMA'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_deploma2')),
            'DURAION'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_duration2')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('any_other_qualifications_year2'))
        );

        $this->db->set($any_other_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');
        

        $any_other_qualifications_table_third_row = array(

            'INDEX_NUMBER'       =>$idNumber,
            'ROW_NUMBER'         => '3',
            'INSTITUTION'        =>$this->firlterFormInputs($this->input->post('any_other_qualifications_university3')),
            'DEPLOMA'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_deploma3')),
            'DURAION'            =>$this->firlterFormInputs($this->input->post('any_other_qualifications_duration3')),
            'YEAR'               =>$this->firlterFormInputs($this->input->post('any_other_qualifications_year3'))
        );

        $this->db->set($any_other_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'any_other_qualifications');

    }

    public function insertProfessionalQualificationsModel($idNumber){
        
        $this->load->database();
        $professional_qualifications_table_first_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'         => '1',
            'INSTITUTION'           =>$this->firlterFormInputs($this->input->post('professonal_qualifications_institution1')),
            'FROM'                  =>$this->firlterFormInputs($this->input->post('professonal_qualifications_from1')),
            'TO'                    =>$this->firlterFormInputs($this->input->post('professonal_qualifications_to1')),
            'DURATION'              =>$this->firlterFormInputs($this->input->post('professonal_qualifications_duration1')),
            'TYPE_OF_QUALIFICATION' =>$this->firlterFormInputs($this->input->post('professonal_qualifications_type_of_qualification1'))
        );

        $this->db->set($professional_qualifications_table_first_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');
        

        $professional_qualifications_table_second_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'         => '2',
            'INSTITUTION'           =>$this->firlterFormInputs($this->input->post('professonal_qualifications_institution2')),
            'FROM'                  =>$this->firlterFormInputs($this->input->post('professonal_qualifications_from2')),
            'TO'                    =>$this->firlterFormInputs($this->input->post('professonal_qualifications_to2')),
            'DURATION'              =>$this->firlterFormInputs($this->input->post('professonal_qualifications_duration2')),
            'TYPE_OF_QUALIFICATION' =>$this->firlterFormInputs($this->input->post('professonal_qualifications_type_of_qualification2'))
        );

        $this->db->set($professional_qualifications_table_second_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');
       

        $professional_qualifications_table_third_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'         => '3',
            'INSTITUTION'           =>$this->firlterFormInputs($this->input->post('professonal_qualifications_institution3')),
            'FROM'                  =>$this->firlterFormInputs($this->input->post('professonal_qualifications_from3')),
            'TO'                    =>$this->firlterFormInputs($this->input->post('professonal_qualifications_to3')),
            'DURATION'              =>$this->firlterFormInputs($this->input->post('professonal_qualifications_duration3')),
            'TYPE_OF_QUALIFICATION' =>$this->firlterFormInputs($this->input->post('professonal_qualifications_type_of_qualification3'))
        );

        $this->db->set($professional_qualifications_table_third_row);
        $this->db->insert($this->db->dbprefix.'professional_qualifications');

    }

    

    public function insertRefereeModel($idNumber){
        
        $this->load->database();

        $referee_table_first_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'            => '1',
            'NAME'                  =>$this->firlterFormInputs($this->input->post('referees_name1')),
            'DESIGNATION'           =>$this->firlterFormInputs($this->input->post('referees_designation1')),
            'ADDRESS'               =>$this->firlterFormInputs($this->input->post('referees_address1')),
            'EMAIL'                 =>$this->firlterFormInputs($this->input->post('referees_email1')),
            'CONTACT_NO'            =>$this->firlterFormInputs($this->input->post('referees_contact1'))
        );

        $this->db->set($referee_table_first_row);
        $this->db->insert($this->db->dbprefix.'referees');
        
        
        $referee_table_second_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'            => '2',
            'NAME'                  =>$this->firlterFormInputs($this->input->post('referees_name2')),
            'DESIGNATION'           =>$this->firlterFormInputs($this->input->post('referees_designation2')),
            'ADDRESS'               =>$this->firlterFormInputs($this->input->post('referees_address2')),
            'EMAIL'                 =>$this->firlterFormInputs($this->input->post('referees_email2')),
            'CONTACT_NO'            =>$this->firlterFormInputs($this->input->post('referees_contact2'))
        );

        $this->db->set($referee_table_second_row);
        $this->db->insert($this->db->dbprefix.'referees');
      

        $referee_table_third_row = array(

            'INDEX_NUMBER'          =>$idNumber,
            'ROW_NUMBER'            => '3',
            'NAME'                  =>$this->firlterFormInputs($this->input->post('referees_name3')),
            'DESIGNATION'           =>$this->firlterFormInputs($this->input->post('referees_designation3')),
            'ADDRESS'               =>$this->firlterFormInputs($this->input->post('referees_address3')),
            'EMAIL'                 =>$this->firlterFormInputs($this->input->post('referees_email3')),
            'CONTACT_NO'            =>$this->firlterFormInputs($this->input->post('referees_contact3'))
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
        
        $this->db->insert('language_proficiency', $language_proficiency);

    } 
    
    
    public function insertOtherFieldsModel(){
        
        $this->load->database();
        $other_fields_table_first_row = array(
            'APPLICANT_ID'       =>$idNumber,
            'EXPERIENCE'         =>$this->firlterFormInputs($this->input->post('experience')),
            'RESEARCH'           =>$this->firlterFormInputs($this->input->post('research')),
            'OTHER_INFORMS'      =>$this->firlterFormInputs($this->input->post('other_details')),
            'DATE'               =>$this->firlterFormInputs($this->input->post('current_date'))
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
            'EXPERIENCE_RELEVANT_TO_POST'        =>$this->firlterFormInputs($this->input->post('experience')),
            'RESEARCH_AND_PUBLICATION_DETAILS'   =>$this->firlterFormInputs($this->input->post('research')),
            'ANY_OTHER_INFORMATION'              =>$this->firlterFormInputs($this->input->post('other_details')),
            'SUBMISSION_DATE'                    =>date('y-m-d')//system find and insert the real date 
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
    public function editFileBasicPersonalDetails($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('basic_personal_details');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic secondary educational details for edit application form
     */
    public function editFileSecondaryEducationalDetails($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('secondary_educational_details');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic higher educational details for edit application form
     */
    public function editFileHigherEducationalDetails($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('higher_educational_details');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get basic any other qualificational details for edit application form
     */
    public function editFileOtherQuallificationalDetails($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('any_other_qualifications');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    

    /**
     * this function is use for get professional qualificational details for edit application form
     */
    public function editFileProfessionalQualifications($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('professional_qualifications');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    /**
     * this function is use for get language professioncy details for edit application form
     */
    public function editFileLauguageProficiency($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('language_proficiency');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    

    /**
     * this function is use for get other applicats_more_details for edit application form
     */
    public function editOtherInformations($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('applicats_more_details');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

   
    /**
     * this function is use for get other applicats_more_details for edit application form
     */
    public function editRefereesInformations($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('referees');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }

    
    /**
     * this function is use for get other specification area  for edit application form
     */
    public function editSpecificationAreas($index_number){
        $this->load->database();
        $this->db->select("*");
        $this->db->from('specialization_area_for_applicant');
        $this->db->where('INDEX_NUMBER',$index_number);
        $query = $this->db->get();
        return $query;
    }


    /**
     * this function is use for delete the alldetails of the applicant
     */
    
     public function deleteApplicantDetails($index_number){
      
        $this->deleteBasicPresonalDetails($index_number);
        $this->deleteSecondaryEducationalDetails($index_number); 
        $this->deleteHigherEducationalDetails($index_number); 
        $this->deleteSpecificationAreas($index_number); 
        $this->deleteAnyOtherQualification($index_number);
        $this->deleteProfessionalQualification($index_number); 
        $this->deleteLanguageProficiency($index_number); 
        $this->deleteApplicationMoreDetails($index_number); 
        $this->deleteRefereesDetails($index_number); 
    }

     /**
      * this function is used for delete the basic personal details 
      */
     public function deleteBasicPresonalDetails($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER', $index_number);
        $this->db->delete('basic_personal_details');
     }

     /**
      * this funciton is used for delete the secondary educational details
      */
     public function deleteSecondaryEducationalDetails($index_number){
         $this->load->database();
         $this->db->where('INDEX_NUMBER',$index_number);
         $this->db->delete('secondary_educational_details');
     }

     /**
      * this funciton is used for delete the higher educational details
      */
      public function deleteHigherEducationalDetails($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('higher_educational_details');
    }

    /**
      * this funciton is used for delete the specification areas
      */
      public function deleteSpecificationAreas($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('specialization_area_for_applicant');
    }

    /**
      * this funciton is used for delete the any_other_qualifications
      */
      public function deleteAnyOtherQualification($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('any_other_qualifications');
    }

    /**
      * this funciton is used for delete the professional_qualifications
      */
      public function deleteProfessionalQualification($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('professional_qualifications');
    }

    /**
      * this funciton is used for delete the language_proficiency
      */
      public function deleteLanguageProficiency($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('language_proficiency');
    }   

    /**
      * this funciton is used for delete the applicats_more_details
      */
      public function deleteApplicationMoreDetails($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('applicats_more_details');
    }

    /**
      * this funciton is used for delete the referees
      */
      public function deleteRefereesDetails($index_number){
        $this->load->database();
        $this->db->where('INDEX_NUMBER',$index_number);
        $this->db->delete('referees');
    }


    /**
     * this function is use for 
     * insert the basic personal details to database
     * insert secondary educational details to database
     */
    public function reInsertApplicantDetailsForUpdate($idNumber){
        $this->load->database();
        $name1 = $this->firlterFormInputs($this->input->post('first_name'));
        $name2 = $this->firlterFormInputs($this->input->post('last_name'));
        $name3 = $this->firlterFormInputs($this->input->post('postal_address'));
        $name4 = $this->firlterFormInputs($this->input->post('permanent_address'));
        $name5 = $this->firlterFormInputs($this->input->post('driving_licence'));
        $name6 = $this->firlterFormInputs($this->input->post('applicant_citizenship'));
        $name7 = $this->firlterFormInputs($this->input->post('personalEmail'));
        $name8 = $this->firlterFormInputs($this->input->post('officeEmail'));
        $name9 = $this->firlterFormInputs($this->input->post('mobile_number'));
        $name10 =$this->firlterFormInputs($this->input->post('home_number'));
        $name11 =$this->firlterFormInputs($this->input->post('office_number'));
        $name12 =$this->input->post('selectGender');
        $name13 =$this->input->post('selectCivilStatus');
        $name14 =$this->input->post('selectCitizenship');
        $name15 =$this->input->post('birth_date');
        $name16 =$this->input->post('postApplyFor');
       // $name17 =$this->input->post('selectDegree');

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
            //'DEGREE'             => $name17
        );

       
        $this->db->insert('basic_personal_details', $data);
        
        $this->insertSecondaryEducationalDetailsModel($idNumber);        
        $this->insertHigherEducationalDetailsModel($idNumber);
        $this->insertAnyOtherQualificationsModel($idNumber);
        $this->insertProfessionalQualificationsModel($idNumber);
        $this->insertRefereeModel($idNumber);
        $this->insertLanguageProficiencyModel($idNumber);
        $this->insertApplicatsMoreDetails($idNumber);
        $this->insertSpecificationAreas($idNumber);
        
    }

    

}

?>

