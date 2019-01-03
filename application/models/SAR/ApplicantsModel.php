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

	public function __construct() {
		parent::__construct();
	}

	public function getProbationaryApplicants(){
		$Members = [];
        $this->load->database();
        $this->db->select("APPLICANT_ID");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        $this->db->select("PERSONAL_EMAIL");
        $this->db->select("GENDER");
        $this->db->select("DATE_OF_BIRTH");
        $this->db->from("basic_personal_details");
        $this->db->where("POST_APPLY_FOR","PROBATIONARY LECTURER");
        $query = $this->db->get();
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