<?php

class ApplicantModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getApplicantsPL(){
		$this->load->database();
		$sql=$this->db->query("SELECT lpc.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM lp_category lpc,basic_personal_details bsd WHERE lpc.INDEX_NUMBER=bsd.INDEX_NUMBER && CATEGORY=1");
		return $sql->result();
	}

	public function getApplicantsSL1(){
		$this->load->database();
		$sql=$this->db->query("SELECT ssg.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM sl_selected_gradei ssg,basic_personal_details bsd WHERE ssg.INDEX_NUMBER=bsd.INDEX_NUMBER && SELECTED=1");
		return $sql->result();



	}

	public function getApplicantsSL2(){
		$this->load->database();
		$sql=$this->db->query('SELECT ssg.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM sl_selected ssg,basic_personal_details bsd WHERE ssg.INDEX_NUMBER=bsd.INDEX_NUMBER && SELECTED=1');
		return $sql->result();
	}
}

?>