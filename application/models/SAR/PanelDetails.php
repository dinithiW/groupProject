<?php
class PanelDetails extends CI_model{

	private $email;

	public function __construct() {
		parent::__construct();
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function getAllEmailAddresses(){
		$Members=[];

		$this->load->database();
		$this->db->select("EMAIL");
		$this->db->from("interview_panel");

		$query=$this->db->get();

		foreach ($query->result() as $row) {
			# code...
			$Member=new PanelDetails();
			$Member->setEmail($row->EMAIL);
			array_push($Members, $Member);
		}
		return $Members;

	}




}






?>