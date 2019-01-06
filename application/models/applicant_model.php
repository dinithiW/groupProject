<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class applicant_model extends CI_Model
{
   public $index;
   public $fname;
   public $lname;
   public $dob;
   public $age;
   public $eq;
   public $pq;
   public $oq;
   public $spe;
   public $email;

   public function getAll($vacancy="",$category = ""){

        $array = [];

        $this->load->database();
        $this->db->select("INDEX_NUMBER");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        //$this->db->select("DATE_OF_BIRTH");
        if($vacancy == "SENIOR LECTURE GR. II"){
            $this->db->where("POST_APPLY_FOR",$vacancy);
            $this->db->where("INDEX_NUMBER NOT IN(SELECT INDEX_NUMBER FROM sl_selected)");
        }

        if($vacancy=="SENIOR LECTURE GR. I"){
            $this->db->where("POST_APPLY_FOR",$vacancy);
            $this->db->where("INDEX_NUMBER NOT IN(SELECT INDEX_NUMBER FROM sl_selected_gradei)");
        }

        if($vacancy=="PROBATIONARY LECTURER"){
            //session_start();
           // $_SESSION["category"] = "";
            $this->db->where("POST_APPLY_FOR",$vacancy);
            $this->db->where("INDEX_NUMBER NOT IN(SELECT INDEX_NUMBER FROM lp_category)");
            if($category=="1"){
                $this->db->where("INDEX_NUMBER IN(SELECT DISTINCT INDEX_NUMBER FROM higher_educational_details WHERE  DEGREE_OBTAINED LIKE 'BSC Hons%' AND( CLASS LIKE 'FIRST CLAS%' OR CLASS LIKE 'SECOND UPPER%') )");
               // $_SESSION["category"] = "Category 1";
            }else if($category=="2"){
                $this->db->where("INDEX_NUMBER IN(SELECT DISTINCT INDEX_NUMBER FROM higher_educational_details WHERE  DEGREE_OBTAINED LIKE 'BSC Hons%' AND CLASS LIKE 'SECOND LOWER%' ) ");
            }else if($category == "3"){
               $this->db->where("INDEX_NUMBER IN(SELECT DISTINCT INDEX_NUMBER FROM higher_educational_details WHERE 
                    ((DEGREE_OBTAINED LIKE 'BSc%' AND DEGREE_OBTAINED NOT LIKE 'BSc Hons%')
                     OR (DEGREE_OBTAINED ='OTHER' AND CLASS LIKE 'SECOND UPPER%'))
                    AND (DEGREE_OBTAINED LIKE 'PhD%' OR(DEGREE_OBTAINED LIKE 'MSc%' AND DURATION >= 24))) ;
                    ");
            }else{

            }

        }
        $this->db->from("basic_personal_details");
        $query = $this->db->get();
        foreach($query->result() as $row){
            $a = new applicant_model();
            $a->eq = "";
            $a->pq = "";

            $a->index = $row->INDEX_NUMBER;
            $a->fname = $row->FIRST_NAME;
            $a->lname = $row->LAST_NAME;
            //$a->dob = $row->DATE_OF_BIRTH;

            $this->db->select("UNIVERSITY");
            $this->db->select("DEGREE_OBTAINED");
            $this->db->select("DURATION");
            $this->db->select("CLASS");
            $this->db->from("higher_educational_details");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query2 = $this->db->get();
            
            foreach($query2->result() as $row2){
                $a->eq .= "University: $row2->UNIVERSITY, <br>Degree: $row2->DEGREE_OBTAINED,<br>Duration: $row2->DURATION,<br>Class: $row2->CLASS<br><br>";
            }

            $this->db->select("INSTITUTION");
            $this->db->select("DURATION");
            $this->db->select("TYPE_OF_QUALIFICATION");
            $this->db->from("professional_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query3 = $this->db->get();
            
            foreach($query3->result() as $row3){
                $a->pq .= "Institution: $row3->INSTITUTION<br>Duration: $row3->DURATION<br>Qualification Type: $row3->TYPE_OF_QUALIFICATION<br><br>";
            }

            //my stuff
            $this->db->select("INSTITUTION");
            $this->db->select("DEPLOMA");
            $this->db->from("any_other_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query4 = $this->db->get();
            
            foreach($query4->result() as $row4){
                $a->oq .= "Institution: $row4->INSTITUTION,<br>Diploma: $row4->DEPLOMA<br><br>";
            } 

            $this->db->select("SPECIFICATION_AREA_NAME");
            $this->db->from("specialization_area_for_applicant");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query5 = $this->db->get();
            
            foreach($query5->result() as $row5){
                $a->spe .= "$row5->SPECIFICATION_AREA_NAME<br>";
            }    


            array_push($array, $a);
        }

        return $array;
   }

   public function selectedSL($applicantId,$tableName){
        $this->load->database();
        $data = array('INDEX_NUMBER'=>$applicantId,'SELECTED'=>1);
        $this->db->insert($tableName, $data);
        
   }

   public function notSelectedSL($applicantId,$tableName){
        $this->load->database();
        $data = array('INDEX_NUMBER'=>$applicantId,'SELECTED'=>0);
        $this->db->insert($tableName, $data);
        
   }

   public function selectedLP($applicantId,$category){
        $this->load->database();
        $data = array('INDEX_NUMBER'=>$applicantId,'CATEGORY'=>$category);
        $this->db->insert('lp_category', $data);
        
   }

   public function getAllCategorized($vacancy){

        $array = [];

        $this->load->database();
        $this->db->select("INDEX_NUMBER");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        $this->db->select("DATE_OF_BIRTH");
        if($vacancy == "Senior Lecturer Grade I selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 1)");
        }

        if($vacancy == "Senior Lecturer Grade I not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 0)");
        }

        if($vacancy == "Senior Lecturer Grade II selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 1)");
        }

        if($vacancy == "Senior Lecturer Grade II not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 0)");
        }

        if($vacancy == "Lecturer Probationary Category 1"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 1)");
        }

        if($vacancy == "Lecturer Probationary Category 2"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 2)");
        }

        if($vacancy == "Lecturer Probationary Category 3"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 3)");
        }

        if($vacancy == "Lecturer Probationary not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 0)");
        }
        
        $this->db->from("basic_personal_details");
        $query = $this->db->get();
        foreach($query->result() as $row){
            $a = new applicant_model();
            $a->eq = "";
            $a->pq = "";

            $a->index = $row->INDEX_NUMBER;
            $a->fname = $row->FIRST_NAME;
            $a->lname = $row->LAST_NAME;
            $a->dob = $row->DATE_OF_BIRTH;

            $this->db->select("UNIVERSITY");
            $this->db->select("DEGREE_OBTAINED");
            $this->db->select("DURATION");
            $this->db->select("CLASS");
            $this->db->from("higher_educational_details");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query2 = $this->db->get();
            
            foreach($query2->result() as $row2){
                $a->eq .= "University: $row2->UNIVERSITY, <br>Degree: $row2->DEGREE_OBTAINED,<br>Duration: $row2->DURATION,<br>Class: $row2->CLASS<br><br>";
            }

            $this->db->select("INSTITUTION");
            $this->db->select("DURATION");
            $this->db->select("TYPE_OF_QUALIFICATION");
            $this->db->from("professional_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query3 = $this->db->get();
            
            foreach($query3->result() as $row3){
                $a->pq .= "Institution: $row3->INSTITUTION<br>Duration: $row3->DURATION<br>Qualification Type: $row3->TYPE_OF_QUALIFICATION<br><br>";
            }

            //my stuff
            $this->db->select("INSTITUTION");
            $this->db->select("DEPLOMA");
            $this->db->from("any_other_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query4 = $this->db->get();
            
            foreach($query4->result() as $row4){
                $a->oq .= "Institution: $row4->INSTITUTION,<br>Diploma: $row4->DEPLOMA<br><br>";
            } 

            $this->db->select("SPECIFICATION_AREA_NAME");
            $this->db->from("specialization_area_for_applicant");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query5 = $this->db->get();
            
            foreach($query5->result() as $row5){
                $a->spe .= "$row5->SPECIFICATION_AREA_NAME<br>";
            }    


            array_push($array, $a);
        }

        return $array;
   }

   public function getSelectedCandidates($vacancy){
        $array = [];

        $this->load->database();
        $this->db->select("INDEX_NUMBER");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        $this->db->select("PERSONAL_EMAIL");

        if($vacancy == "Senior Lecturer Grade I selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 1)");
        }

        /*if($vacancy == "Senior Lecturer Grade I not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 0)");
        }*/

        if($vacancy == "Senior Lecturer Grade II selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 1)");
        }

        /*if($vacancy == "Senior Lecturer Grade II not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 0)");
        }*/

        if($vacancy == "Lecturer Probationary Category 1"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 1)");
        }

        if($vacancy == "Lecturer Probationary Category 2"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 2)");
        }

        if($vacancy == "Lecturer Probationary Category 3"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 3)");
        }

        /*if($vacancy == "Lecturer Probationary not selected"){
           $this->db->where("INDEX_NUMBER IN(SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 0)");
        }*/
        
        $this->db->from("basic_personal_details");
        $query = $this->db->get();
        foreach($query->result() as $row){
            $a = new applicant_model();

            $a->index = $row->INDEX_NUMBER;
            $a->fname = $row->FIRST_NAME;
            $a->lname = $row->LAST_NAME;
            $a->email = $row->PERSONAL_EMAIL;
  
            array_push($array, $a);
        }

        return $array;
   }
   
}

?>