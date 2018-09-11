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
		$username = $this->testInput($_POST['username']);
		$password = $this->testInput($_POST['password']);

		if($username!= null && $password != null){
			$this->load->database();
			$this->db->select("PASSWORD");
			$this->db->select("USER_TYPE");
			$this->db->select("EMAIL");
			$this->db->from("users");
			$this->db->where("USERNAME", $username);
			$query = $this->db->get();

			//$numberOfRows = $query->num_rows();
			//if()
			foreach($query->result() as $row){
			if($row->PASSWORD == md5($password)){
				
				$this->load->library('session');
				
				$data = array(
			        'username'  => $username,
			        'email'     => $row->EMAIL,
			        'usertype' => $row->USER_TYPE,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($data);
				
				$usertype = $this->session->userdata('usertype');

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
