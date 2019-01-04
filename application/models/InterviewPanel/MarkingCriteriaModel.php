<?php
class MarkingCriteriaModel extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function getHeadings(){
			$this->load->database();
			$sql=$this->db->query("SELECT * FROM marking_field_heading");
			return $sql->result();
		}

		public function getDetailedHeadings(){
			$this->load->database();
			$sql=$this->db->query("SELECT * FROM marking_fields_heading where detailed=1");
			return $sql->result();
		}

		public function getDetailedCriteria(){
			$this->load->database();
			$sql=$this->db->query("SELECT * FROM marking_field");
			return $sql->result();
		}
	
}




?>