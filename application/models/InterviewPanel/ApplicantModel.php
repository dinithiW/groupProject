<?php

class ApplicantModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getApplicants(){
		$this->load->database();
	}
}

?>