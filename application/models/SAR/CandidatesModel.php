<?php
 
 class CandidatesModel extends CI_model{
 	private $id;
 	private $fname;
 	private $lname;
 	private $gender;
 	private $email;
 	private $degree;
 	private $className;

 	public function __construct() {
		parent::__construct();
	}

	public function setID($id){
		$this->id=$id;
	}
	public function getID(){
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
	public function setGender($gender){
		$this->gender=$gender;
	}
	public function getGender(){
		return $this->gender;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setDegree($degree){
		$this->degree=$degree;
	}
	public function getDegree(){
		return $this->degree;
	}
	public function setclassName($className){
		$this->className=$className;
	}
	public function getclassName(){
		return $this->className;
	}

	public function getAll(){
		
	}
 	public function getallseniorlecturers(){
 		$Members=[];
 		$this->load->database();
 		$this->db->select('');

 	}

 	public function getallcategoryonelecturers(){


 	}

 	public function getallcategorytwolecturers(){

 	}

 	public function getallcategorythreelecturers(){

 	}





 }





?>
