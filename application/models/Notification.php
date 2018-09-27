<?php
class Notification extends CI_Model{

	public function __construct() {
		parent::__construct();
	}

	private function testInput($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	/*public function updtitle() {   
    $data = array(
        'table_name' => 'comments', // pass the real table name
        'id' => $this->input->post('id'),
        'title' => $this->input->post('title')
    );

    $this->load->model('Updmodel'); // load the model first
    if($this->Updmodel->upddata($data)) // call the method from the model
    {
        // update successful
    }
    else
    {
        // update not successful
    }

}
	public function upddata($data) {
    extract($data);
    $this->db->where('COMMENT_STATUS', 0);
    $this->db->update($table_name, array('title' => $title));
    return true;
}

	public function showNotifications($to,$from){

		$this->load->database();
		$this->db->select("COMMENT_SUBJECT");
		$this->db->select("COMMENT_CONTENT");
		$this->db->from("comments");
		$this->db->where("EMAIL", $email);
			$query = $this->db->get();
	}*/

	public function add(){
		echo "lololool";
		$this->load->database();
		if(isset($_POST["subject"])){
 			
 			$subject =  $this->$_POST["subject"];
			 $comment = $this->$_POST["comment"];
			 $query = "
			 INSERT INTO comments(comment_subject, comment_text)
			 VALUES ('$subject', '$comment')";
			 mysqli_query($connect, $query);
		}	
	}

	public function view(){

//fetch.php;
	if(isset($_POST["view"]))
	{
	 include("connect.php");
	 if($_POST["view"] != '')
	 {
	  $update_query = "UPDATE comments SET comment_status=1 WHERE comment_status=0";
	  mysqli_query($connect, $update_query);
	 }
	 $query = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 5";
	 $result = mysqli_query($connect, $query);
	 $output = '';
	 
	 if(mysqli_num_rows($result) > 0)
	 {
	  while($row = mysqli_fetch_array($result))
	  {
	   $output .= '
	   <li>
	    <a href="#">
	     <strong>'.$row["comment_subject"].'</strong><br />
	     <small><em>'.$row["comment_text"].'</em></small>
	    </a>
	   </li>
	   <li class="divider"></li>
	   ';
	  }
	 }
	 else
	 {
	  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
	 }
	 
	 $query_1 = "SELECT * FROM comments WHERE comment_status=0";
	 $result_1 = mysqli_query($connect, $query_1);
	 $count = mysqli_num_rows($result_1);
	 $data = array(
	  'notification'   => $output,
	  'unseen_notification' => $count
	 );
	 echo json_encode($data);
	}


	}
}

?>