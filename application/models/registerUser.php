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
			$this->db->select("PASSWORD");
			$this->db->from("applicants");
			$this->db->where("EMAIL", $email);
			$query = $this->db->get();
			$rowcount = $query->num_rows();

			if($rowcount==0){

				if(md5($password)!= md5($repeat)){
					redirect(base_url()."ApplicantLogin/errorPassword");
				}else{
   
        			 $data = array(
            			'email' => $email,
            			'password' => md5($password),
        			);
       			$this->db->insert('applicants', $data);
    			redirect(base_url()."ApplicantLogin/success");
				}
			}else{
				redirect(base_url()."ApplicantLogin/errorUsername");
			}
			
		//redirect(base_url()."?login=false", 'location');
		
	}else{
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