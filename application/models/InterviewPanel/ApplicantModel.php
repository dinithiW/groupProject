<?php

class ApplicantModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	  public function getApplicants($applicantType)
    {
        $this->load->database();
        if ($applicantType == "PROBATIONARY_LECTURER") {
            $sql = $this->db->query("SELECT lpc.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM lp_category lpc,basic_personal_details bsd where lpc.INDEX_NUMBER=bsd.INDEX_NUMBER && CATEGORY=1");
            return $sql->result();
        } else if ($applicantType == "SENIOR_LECTURE_GR.I") {
            $sql = $this->db->query("SELECT ssg.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM sl_selected_gradei ssg,basic_personal_details bsd where ssg.INDEX_NUMBER=bsd.INDEX_NUMBER && SELECTED=1");
            return $sql->result();
        } else if ($applicantType == "SENIOR_LECTURE_GR.II") {
            $sql = $this->db->query("SELECT ssg.INDEX_NUMBER,FIRST_NAME,LAST_NAME,PERSONAL_EMAIL FROM sl_selected ssg,basic_personal_details bsd where ssg.INDEX_NUMBER=bsd.INDEX_NUMBER && SELECTED=1");
            return $sql->result();
        }
    }
    public function submitApplicantMarks($applicantType)
    {
        $this->load->database();
        $val = explode('/', $this->input->post('txtTotal'));
        if ($applicantType == "PROBATIONARY_LECTURER") {
            $this->db->query("insert into lp_category_marks (INDEX_NUMBER,USERNAME,marks,comment) values (?,?,?,?)", array($this->input->post('txtId'), $_SESSION["username"], $val[0], $this->input->post('txtReport')));
        } else if ($applicantType == "SENIOR_LECTURE_GR.I") {
            $this->db->query("insert into sl_selected_gradei_marks (INDEX_NUMBER,USERNAME,marks,comment) values (?,?,?,?)", array($this->input->post('txtId'), $_SESSION["username"], $val[0], $this->input->post('txtReport')));
        } else if ($applicantType == "SENIOR_LECTURE_GR.II") {
            $this->db->query("insert into sl_selected_gradeii_marks (INDEX_NUMBER,USERNAME,marks,comment) values (?,?,?,?)", array($this->input->post('txtId'), $_SESSION["username"], $val[0], $this->input->post('txtReport')));
        }
    }
    public function getApplicantData($applicantType)
    {
        $this->load->database();
        if ($applicantType == "PROBATIONARY_LECTURER") {
            $sql = $this->db->query("SELECT * FROM lp_category_marks where INDEX_NUMBER=?", array($this->input->post('aid')));
            return $sql->result();
        } else if ($applicantType == "SENIOR_LECTURE_GR.I") {
            $sql = $this->db->query("SELECT * FROM sl_selected_gradei_marks where INDEX_NUMBER=?", array($this->input->post('aid')));
            return $sql->result();
        } else if ($applicantType == "SENIOR_LECTURE_GR.II") {
            $sql = $this->db->query("SELECT * FROM sl_selected_gradeii_marks where INDEX_NUMBER=?", array($this->input->post('aid')));
            return $sql->result();
        }
    }

	/*public function getApplicantsPL(){
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
	}*/

}

?>