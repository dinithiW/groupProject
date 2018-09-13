<?php 

class registerUser extends CI_Model{

	public function __construct() {
		parent::__construct();
	}

	private function testInput($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public function register(){
		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['psw']);
		$repeat = $this->testInput($_POST['psw-repeat']);

		if($email!= null && $password != null && $repeat!= null){

			$this->load->database();
			$this->db->select("EMAIL");
			$this->db->from("applicants");
			$this->db->where("EMAIL", $email);
			$query = $this->db->get();
			$rowcount = $query->num_rows();

			if($rowcount==0){

				if(md5($password)!= md5($repeat)){
				//show an error message
				//passwords do not match
				}else{

				}
			}else{
				//
			}
			
			

			foreach($query->result() as $row){
			if($row->PASSWORD == md5($password)){
				
				$this->load->library('session');
				
				$data = array(
			        'username'  => $username,
			        'email'     => $row->EMAIL,// MAY NOT NEED WE'LL SEE
			        'logged_in' => TRUE
				);

				$this->session->set_userdata($data);
				
				redirect(base_url()."LoginPanelController/toAdmin");
				echo "ohh yeeeeeeeeahhhhhhh";
			}
			break;
		}
		//redirect(base_url()."?login=false", 'location');
		
	}else{
			//redirect or show appropriate message
			echo 'oopsieee';
		}
	}

	public function checkValidity(){

		echo "checkValidity";
		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['psw']);
		$repeat = $this->testInput($_POST['psw-repeat']);

		if($email!= null && $password != null && $repeat!= null){

			$this->load->database();
			$this->db->select("EMAIL");
			$this->db->from("applicants");
			$this->db->where("EMAIL", $email);
			$query = $this->db->get();
			$rowcount = $query->num_rows();
			echo "$rowcount";
			if($rowcount==0){
				/*register();*/
			}else{
				redirect(base_url()."ApplicantLogin/errorUsername");

				echo "in herer";
				
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

<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
function JSalert(){
	swal("Congrats!", ", Your account is created!", "success");
}
</script>