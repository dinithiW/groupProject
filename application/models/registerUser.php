<?php 

class RegisterUser extends CI_Model{

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
		$name = $this->testInput($_POST['fullname']);
		$email = $this->testInput($_POST['email']);
		$password = $this->testInput($_POST['psw']);
		$repeat = $this->testInput($_POST['pswRepeat']);

		if($name != null && $email!= null && $password != null && $repeat!= null){

			$this->load->database();
			$this->db->select("USERNAME");
			//$this->db->select("PASSWORD");
			$this->db->from("users");
			$this->db->where("USERNAME", $email);
			$query = $this->db->get();
			$rowcount = $query->num_rows();

			if($rowcount==0){

				if(md5($password)!= md5($repeat)){
					redirect(base_url()."registerUsers/errorPassword");
				}else{
   					
   					$this->load->library('session');
   					
        			 $insertData = array(
            			'USERNAME' => $email,
            			'PASSWORD' => md5($password),
            			'USER_TYPE' => 'Applicant',
            			'NAME' => $name
        			);

					$this->db->insert('users', $insertData);
					

					/**
					 * changed by ruwan
					 * start the user's temporary id making
					 * this part use for make a temporary id for the user
					 */

					$this->db->select("INDEX_NUMBER");
					$this->db->from("temporary_index_number_for_applicants");

					$query_1 = $this->db->get();
					$rowcount_1 = $query_1->num_rows();

					$year = date("Y");//for get current year ex.218
					$year_of_index_number = substr($year,2);//ex.18
					$rowcount_1_increment += $rowcount_1;
					$number_of_index_number = str_pad($rowcount_1_increment, 3, '0', STR_PAD_LEFT);//180001
					$temporary_index_number ="$year_of_index_number"."$number_of_index_number";
					
					$insert_index_number = array(
            			'INDEX_NUMBER' => $temporary_index_number,
            			'USERNAME' 	   => $email,
            			'FULL_NAME'    => $name
        			);

					$this->db->insert('temporary_index_number_for_applicants', $insert_index_number);


					/**
					 * changed by ruwan
					 * end the user's temporary id making
					 * this part use for make a temporary id for the user
					 */ 



        			 $userdata = array(
	        			'username'  => $email,
	        			//'email'     => $row->EMAIL,
	        			'usertype'  => 'Applicant',
	        			'name'      => $name,
	        			'logged_in' => TRUE
					);

        			
        			$this->session->set_userdata($userdata);

    			redirect(base_url()."registerUsers/success");
				}
			}else{
				redirect(base_url()."registerUsers/errorUsername");
			}
			
		//redirect(base_url()."?login=false", 'location');
		
	}else{
			echo 'oopsieee';
		}
	}

	/*public function checkValidity(){

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
				/*register();
			}else{
				redirect(base_url()."ApplicantLogin/errorUsername");

				echo "in herer";
				
			}	
	}
}*/
	





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