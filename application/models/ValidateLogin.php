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

			$this->load->library('session');
			$this->session->set_userdata('age','colombo');
			
			if($rowcount==0){
				//////////////////////////////change these
				redirect(base_url()."ApplicantLogin/errorUsername");
			}
			else{
				
				foreach($query->result() as $row){
				if($row->PASSWORD == md5($password)){
					$this->load->library('session');

					$userdata = array(
	        			'username'  => $row->USERNAME,
	        			//'email'     => $row->EMAIL,
	        			'usertype'  => $row->USER_TYPE,
	        			'name'      => $row->NAME,
	        			'logged_in' => TRUE
					);
				
					$this->session->set_userdata($userdata);

					$this->load->view('includes/header');
					$this->load->view('MainDashboard');
					$this->load->view('includes/footer');
					//echo $_SESSION['username'];
				}else{
					///////////////////////change these
					redirect(base_url()."ApplicantLogin/wrongPassword");
				}
			break;
			}
			
		}
		//redirect(base_url()."?login=false", 'location');
		
	}else{
			//redirect or show appropriate message
			echo 'oopsieee';
		}
	}



}