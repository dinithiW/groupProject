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
	
	//checking login credentials for applicants
	public function validateApplicant(){
		
		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['password']);
		echo"$email"."<br>";
		echo"$password"."<br>";

		if($email!= null && $password != null){
			$this->load->database();
			$this->db->select("PASSWORD");
			$this->db->select("EMAIL");
			$this->db->from("applicants");
			$this->db->where("EMAIL", $email);

			$query = $this->db->get();
			$rowcount = $query->num_rows();
			
			if($rowcount==0){
				//echo "we are her now";
				redirect(base_url()."ApplicantLogin/errorUsername");
			}
			else{

				foreach($query->result() as $row){
				if($row->PASSWORD == md5($password)){
				
				$this->load->library('session');

				$this->session->set_userdata('name', 'ruwanliyanage');
				
				$data = array(
			        'email'     => $row->EMAIL,
					'usertype' => $row->USER_TYPE,
					'id_number'=> '',
			        'logged_in' => TRUE
				);

				/* start */
				$sess = array(
					 'username'     => "ruwan",
					  'user_agent' => "liyanage",
					  'ip_address' => "galle",
				);
				
				  $this->session->set_userdata('ruwan', $sess);

				  $_SESSION['name'] = "ruwanliyagayanage";  


				/* end */


				//$this->session->set_userdata('data_array',$data);
				$usertype = $this->session->userdata('usertype');

				redirect(base_url()."ApplicantLogin/applicant");
				
			}else{
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

	//method to check whether an account exists already from that email. used in registration
	public function checkValidity(){

		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['psw']);
		$repeat = $this->testInput($_POST['psw-repeat']);

		if($email!= null && $password != null && $repeat!= null){

			$this->load->database();
			$this->db->select("EMAIL");
			$this->db->from("applicants");
			$this->db->where("EMAIL", $email);
			$query = $this->db->get();
			
			if($rowcount==0){
				/*register();*/
			}else{
				redirect(base_url()."ApplicantLogin/errorUsername");
				//echo "in herer";
				
			}	
	}
}

	public function verifyUser(){

		$username = $this->testInput($_POST['username']);
		$password = $this->testInput($_POST['password']);

		if($username!= null && $password != null){
			$this->load->database();
			$this->db->select("PASSWORD");
			$this->db->select("USERNAME");
			$this->db->from("users");
			$this->db->where("USERNAME", $username);
			$query = $this->db->get();

			$rowcount = $query->num_rows();
			
			if($rowcount ==0){
				redirect(base_url()."UsersLogin/errorUsername");
			}else{

			foreach($query->result() as $row){
			if($row->PASSWORD == md5($password)){
				
				$this->load->library('session');
				
				$data = array(
			        //'email'     => $row->EMAIL,
			        'username' => $row->USERNAME,
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($data);

				//redirect(base_url()."ApplicantLogin/applicant");

				if($username=='operator'){
					redirect(base_url()."OperatorDashboard");
					
				}else if($username =='SAR'){
					//yet to implement
				}else{

				}
				
			}else{
				//show error message
				redirect(base_url()."UsersLogin/errorPassword");
			}

			break;
		}
		//redirect(base_url()."?login=false", 'location');
			}
	}
	}
	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		//redirect(base_url()."?logout=true", 'location');
	}	

}
?>
