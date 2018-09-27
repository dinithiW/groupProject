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

	public function updtitle() {   
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
	}
}

?>