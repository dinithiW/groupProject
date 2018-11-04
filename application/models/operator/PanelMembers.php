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

		$namesub = substr($fname,0,3);
		$nameid = strtolower($namesub);
		//echo "$nameid";

		$this->load->database();
		$this->db->select("ID");
		$this->db->from("interview_panel");
		$this->db->order_by("ID", "desc");
		$query = $this->db->get(); 
		$rowcount = $query->num_rows();
		
		$row = $query->row(); 
    	$ans = $row->ID;
    	$panelID = "$nameid"."$ans";
    	echo "$panelID";

    	if($address==" "){
    		$address = "-";
        }

		if($rowcount>0){
			$panelID = "$nameid"."$ans";
		}else{
			$panelID = "$nameid"."1";
		}

		$data = array(
            			'PANEL_ID' => $panelID,
            			'FNAME' => $fname,
            			'LNAME' => $lname,
            			'EMAIL' => $email,
            			'GENDER' => $gender,
            			'CONTACT_NUMBER' => $contact,
            			'DESIGNATION' => $designation,
            			'ADDRESS' => $address
        );

        $this->db->insert('interview_panel', $data);

       redirect(base_url()."OperatorDashboard/memberSuccess");
       
	}

}