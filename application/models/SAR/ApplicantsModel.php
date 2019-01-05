<?php

class ApplicantsModel extends CI_model{
	public $id;
	public $fname;
	public $lname;
	public $dob;
	public $email;
	public $degree;
	public $gender;
	public $class;
	public $eduqualifi;
	public $proqualifi;
	public $prevexp;
	public $actions;
	public $spe;

	public function __construct() {
		parent::__construct();
	}

	public function getAllApplicants($postapplied){
		$array  = [];

        $this->load->database();
        $this->db->select("INDEX_NUMBER");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        $this->db->select("PERSONAL_EMAIL");
        $this->db->select("GENDER");
       // $this->db->select("DATE_OF_BIRTH");
        $this->db->from("basic_personal_details");
        $this->db->where("POST_APPLY_FOR",$postapplied);
        $query = $this->db->get();

       	foreach($query->result() as $row){
       	 	$a = new ApplicantsModel();
            $a->eduqualifi = "";
            $a->proqualifi = "";
            $a->id = $row->INDEX_NUMBER;
            $a->fname = $row->FIRST_NAME;
            $a->lname = $row->LAST_NAME;
            $a->email=$row->PERSONAL_EMAIL;
            $a->gender=$row->GENDER;
            $this->db->select("UNIVERSITY");
            $this->db->select("DEGREE_OBTAINED");
            $this->db->select("DURATION");
            $this->db->select("CLASS");
            $this->db->from("higher_educational_details");
            $this->db->where("INDEX_NUMBER",  $a->id);
            $query2 = $this->db->get();

            foreach($query2->result() as $row2){
                $a->eduqualifi .= "University: $row2->UNIVERSITY, <br>Degree: $row2->DEGREE_OBTAINED,<br>Duration: $row2->DURATION,<br>Class: $row2->CLASS<br><br>";
            }

            $this->db->select("INSTITUTION");
            $this->db->select("DURATION");
            $this->db->select("TYPE_OF_QUALIFICATION");
            $this->db->from("professional_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->id);
            $query3 = $this->db->get();
            foreach($query3->result() as $row3){
                $a->proqualifi .= "Institution: $row3->INSTITUTION<br>Duration: $row3->DURATION<br>Qualification Type: $row3->TYPE_OF_QUALIFICATION<br><br>";
            }
            $this->db->select("SPECIFICATION_AREA_NAME");
            $this->db->from("specialization_area_for_applicant");
            $this->db->where("INDEX_NUMBER",$a->id);
            $query4=$this->db->get();
            foreach ($query4->result() as $row4) {
            	$a->spe.="$row4->SPECIFICATION_AREA_NAME<br>";
            	# code...
            }

            array_push($array, $a);
         }
         return $array;  
	}


	public function setID($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	public function setFname($fname){
		$this->fname=$fname;
	}
	public function getFname(){
		return $this->fname;
	}
	
	public function setLname($lname){
		$this->lname=$lname;
	}
	public function getLname(){
		return $this->lname;
	}
	
	public function setDOB($dob){
		$this->dob=$dob;
	}
	public function getDob(){
		return $this->dob;
	}
	
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){
		return $this->email;
	}
	
	public function setGender($gender){
		$this->gender=$gender;
	}
	public function getGender(){
		return $this->gender;
	}
	
	
	


}




?>