<?php 

class PanelMembers extends CI_Model{

	public function __construct() {
		parent::__construct();
	}

	private function testInput($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public function add(){

		$fname = $this->testInput($_POST['fname']);
		$lname = $this->testInput($_POST['lname']);
		$email = $this->testInput($_POST['email']);
		$gender = $_POST['gender'];
		$contact = $this->testInput($_POST['contact']);
		$designation = $this->testInput($_POST['designation']);
		$address = $this->testInput($_POST['address']);

		echo "$fname $gender $address";
	}

}