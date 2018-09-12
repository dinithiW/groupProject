<?php 

class loginPanelValidation extends CI_Model{

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
			$this->db->select("USER_TYPE");
			$this->db->select("EMAIL");
			$this->db->from("users");
			$this->db->where("EMAIL", $email);
			$query = $this->db->get();

			//$numberOfRows = $query->num_rows();
			//if()
			foreach($query->result() as $row){
			if($row->PASSWORD == md5($password)){
				
				$this->load->library('session');
				
				$data = array(
			        'email'     => $row->EMAIL,
			        'usertype' => $row->USER_TYPE,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($data);
				
				$usertype = $this->session->userdata('usertype');

				redirect(base_url()."ApplicantLogin/applicant");

				if($usertype=='applicant'){
					redirect(base_url()."LoginPanelController/applicant");
					echo "ohh yeeeeeeeeahhhhhhh";
				}else if($usertype =='operator'){
					//yet to implement
				}
				
			}
			break;
		}
		//redirect(base_url()."?login=false", 'location');
		
	}else{
			//redirect or show appropriate message
			echo 'oopsieee';
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		//redirect(base_url()."?logout=true", 'location');
	}	

}
?>
