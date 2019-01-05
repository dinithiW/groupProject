<?php 

class ValidateLogin extends CI_Model{

	public function __construct() {
		parent::__construct();
		
	}

	private function testInput($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public function validate(){
		
		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['password']);
		

		if($email!= null && $password != null){
			$this->load->database();
			$this->db->select("PASSWORD");
			$this->db->select("USERNAME");
			$this->db->select("USER_TYPE");
			$this->db->select("NAME");
			$this->db->from("users");
			$this->db->where("USERNAME", $email);

			$query = $this->db->get();
			$rowcount = $query->num_rows();

			//$this->load->library('session');
			//$this->session->set_userdata('age','colombo');
			
			//username / email does not exist
			if($rowcount==0){
				//////////////////////////////change these
				redirect(base_url()."Login/errorUsername");
			}
			else{
				
				foreach($query->result() as $row){
				if($row->PASSWORD == md5($password)){
					$this->load->library('session');


					// starting eidted by ruwan
					$index_number = "";
					if($row->USER_TYPE =="Applicant"){
						$email =$row->USERNAME;
						$index_number = $this->findTemporeryId($email);
					}

					// ending eidted by ruwan

					$userdata = array(
	        			'username'  => $row->USERNAME,
	        			'usertype'  => $row->USER_TYPE,
	        			'name'      => $row->NAME,
						'logged_in' => TRUE,
						'index_number' =>$index_number, 
						'application_form_filled' => "not"
						
					);
				
					$this->session->set_userdata($userdata);

					$this->load->view('includes/header');
					$this->load->view('MainDashboard');
					
					$this->load->view('includes/footer');
					
				//incorrect password
				}else{
					///////////////////////change these
					redirect(base_url()."Login/errorPassword");
				}
			break;
			}
			
		}
		//redirect(base_url()."?login=false", 'location');
		
	}else{
			//redirect or show appropriate message
			echo 'WARNING! validate Login line number 76';
		}
	}

	// starting eidted by ruwan


	/**
	 * this function is used for the get the temprorary id 
	 * this return the temporary id
	 * this add for the sesssion variable
	 */

	public function findTemporeryId($email){
 
		$this->load->database();
		$this->db->select('INDEX_NUMBER');
		$this->db->from('temporary_index_number_for_applicants');
		$this->db->where('USERNAME',$email);
		$temporyId = $this->db->get()->row()->INDEX_NUMBER;
		return $temporyId;
	}

	// ending eidted by ruwan


}