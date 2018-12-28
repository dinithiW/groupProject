<?php 

class TasksModel extends CI_Model{

	public function __construct() {
		parent::__construct();
		
	}

	public function getTasks($roleName){
		$this->load->database();
		$this->db->select("TASK_NAME");
		$this->db->from("tasks");
		$this->db->where("ASSIGNED_TO",$roleName);
		$query = $this->db->get(); 
        $rowcount = $query->num_rows();
        return $rowcount;

	}

?>