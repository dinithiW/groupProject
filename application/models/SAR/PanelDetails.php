<?php
class PanelDetails extends CI_model{

	private $email;
	private $fname;
	private $lname;

	public function __construct() {
		parent::__construct();
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function getFname(){
		return $this->fname;
	}

	public function setFname($fname){
		$this->fname=$fname;
	}
	public function getLname(){
		return $this->lname;
	}

	public function setLname($lname){
		$this->lname=$lname;
	}

//to get panel name and email
	public function getAllEmailAddresses(){
		$Members=[];

		$this->load->database();
		$this->db->select("EMAIL");
		$this->db->select("FNAME");
		$this->db->select("LNAME");
		$this->db->from("interview_panel");

		$query=$this->db->get();

		foreach ($query->result() as $row) {
			# code...
			$Member=new PanelDetails();
			$Member->setEmail($row->EMAIL);
			$Member->setEmail($row->FNAME);
			$Member->setEmail($row->LNAME);
			array_push($Members, $Member);
		}
		return $Members;

	}




}






?>