<?php

class VacanciesModel extends CI_Model{

	public $vacancyName;
	public $deadline;
	public $vacancyId;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function getVacancies(){
		$vacancies = [];
		$this->db->select('name');
		$this->db->select('dead_line');
		$this->db->select('id');
		$this->db->from('vacancies');
		$query = $this->db->get();

		foreach ($query->result() as $row) {
			$vacancy = new VacanciesModel();
			$vacancy->vacancyName = $row->name;
			$vacancy->deadline = $row->dead_line;
			$vacancy->vacancyId = $row->id;
			array_push($vacancies,$vacancy);
		}

		return $vacancies;
	}
}

?>