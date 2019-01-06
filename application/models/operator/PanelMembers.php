<?php 

class PanelMembers extends CI_Model{

	private $panelID;
	private $fname;
    private $lname;
    private $email;
    private $gender;
    private $contact;
    private $designation;
    private $address;


	public function __construct() {
		parent::__construct();
	}

    function checkEmailExists($username,$id=0)
    {

        /*$oldEmail = "";
        if($id!=0){
            $data = $this->getMember($id);
            $oldEmail = $data->EMAIL;
        }*/

        $this->load->database();
        $this->db->select("USERNAME");
        $this->db->from("users");
        
        /*if($id != 0){
            $this->db->where("USERNAME !=", $oldEmail);
        }else{*/
        $this->db->where("USERNAME", $username);
        //$this->db->where("") 
       /* }*/
        $query = $this->db->get();  
        //$this->db->where("isDeleted", 0);
        return $query->result();
    }

    //get details of all members
	public function getAllMembers(){
        $Members = [];
        $this->load->database();
        $this->db->select("PANEL_ID");
        $this->db->select("FNAME");
        $this->db->select("LNAME");
        $this->db->select("EMAIL");
        $this->db->select("GENDER");
        $this->db->select("CONTACT_NUMBER");
        $this->db->select("DESIGNATION");
        $this->db->select("ADDRESS");
        $this->db->from("interview_panel");

        $query = $this->db->get();

        foreach($query->result() as $row){
            $Member = new PanelMembers();
            $Member->setPanelID($row->PANEL_ID);
            $Member->setFname($row->FNAME);
            $Member->setLname($row->LNAME);
            $Member->setEmail($row->EMAIL);
            $Member->setGender($row->GENDER);
            $Member->setContact($row->CONTACT_NUMBER);
            $Member->setDesignation($row->DESIGNATION);
            $Member->setAddress($row->ADDRESS);
            array_push($Members, $Member);
        }
        return $Members;
    }

    //returns the details of a single member
    public function getMember($panelID){

        $this->db->select('*');
        $this->db->from('interview_panel');
        $this->db->where('PANEL_ID',$panelID);
        $query = $this->db->get();
        return $query->row();
    }

    public function setPanelID($id)
    {
        $this->panelID = $id;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }



    public function getPanelID()
    {
        return $this->panelID;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getDesignation()
    {
        return $this->designation;
    }

    public function getAddress()
    {
        return $this->address;
    }

	private function testInput($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

    function addNew()
    {
        $this->load->view("includes/header");
        $this->load->view("users/operator/addMember");
        $this->load->view("includes/footer");
        
    }

    function addNewUser(){
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','First Name','trim|required|max_length[255]');
        $this->form_validation->set_rules('lname','Last Name','trim|required|max_length[255]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('gender','Gender','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[255]');
        $this->form_validation->set_rules('designation','Designation','trim|required|max_length[255]');
        $this->form_validation->set_rules('address','Address','trim|required|max_length[255]');
        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $email = $this->input->post('email');
                $gender = $_POST['gender'];
                $designation = $this->input->post('designation');
                $address = $this->input->post('address');
                $mobile = $this->input->post('mobile');
                
                $namesub = substr($fname,0,3);
                $nameid = strtolower($namesub);

                $this->load->database();
                $this->db->select("ID");
                $this->db->from("interview_panel");
                $this->db->order_by("ID", "desc");
                $query = $this->db->get(); 
                $rowcount = $query->num_rows();
        
                if($rowcount>0){
                    $row = $query->row(); 
                    $ans = $row->ID;
                    $panelID = "$nameid"."$ans";
                }else{
                    $panelID = "$nameid"."1";
                }
                
                

                $userInfoPanel = array('PANEL_ID'=>$panelID,'FNAME'=>$fname,'LNAME'=>$lname,'EMAIL'=>$email,'GENDER'=>$gender ,'CONTACT_NUMBER'=>$mobile,'DESIGNATION'=>$designation,'ADDRESS'=>$address);

                $name = $fname." ".$lname;
                $usertype = "Panel";

                $userInfoUsers = array('USERNAME'=>$email, 'PASSWORD'=>md5("abc"), 'USER_TYPE'=>$usertype, 'NAME'=> $name);
                
                //$this->load->model('user_model');
                $result = $this->addUsers($userInfoUsers);
                
                if($result > 0)
                {
                    $result1 = $this->addPanelUsers($userInfoPanel);
                    if($result1>0){
                        $this->session->set_flashdata('success', 'New User created successfully');
                    }else{
                        $this->session->set_flashdata('error', 'User creation failed');
                    }
                    
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('OperatorIndex/addMember');
            }
    }
	//add member to interview panel
    public function addPanelUsers($userInfoPanel){

        $this->db->trans_start();
        $this->db->insert('interview_panel', $userInfoPanel);
       // $this->db->insert('interview_panel', $userInfo);
       $rows =  $this->db->affected_rows();
        $this->db->trans_complete();
       if($rows>0){
            return $rows;
        }else{
            return FALSE;
        }
        //echo"$hayhay";
        

    }

    //add member to the table users
    public function addUsers($userInfoUsers){

        echo"anybodyyyyyy?????";
        $this->db->trans_start();
        $this->db->insert('users', $userInfoUsers);
       $rows =  $this->db->affected_rows();
       $this->db->trans_complete();
        $this->db->trans_complete();
       if($rows>0){
            return $rows;
        }else{
            return FALSE;
        }

    }

    function edit()
    {
        $this->load->view("includes/header");
        $this->load->view("users/operator/editMember");
        $this->load->view("includes/footer");
        
    }
	
    function editMemberDetails($panelID){
        
        //echo"$panelID";
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','First Name','trim|required|max_length[255]');
        $this->form_validation->set_rules('lname','Last Name','trim|required|max_length[255]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('gender','Gender','trim|required');
        //$this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[255]');
        $this->form_validation->set_rules('designation','Designation','trim|required|max_length[255]');
        $this->form_validation->set_rules('address','Address','trim|required|max_length[255]');

            if($this->form_validation->run() == FALSE)
            {
                $this->edit();
            }
            else
            {
                $data = $this->getMember($panelID);
                $oldEmail = $data->EMAIL;
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $email = $this->input->post('email');
                $gender = $_POST['gender'];
                $designation = $this->input->post('designation');
                $address = $this->input->post('address');
                $mobile = $this->input->post('mobile');
                
                $userInfoPanel = array('FNAME'=>$fname,'LNAME'=>$lname,'GENDER'=>$gender ,'CONTACT_NUMBER'=>$mobile,'DESIGNATION'=>$designation,'ADDRESS'=>$address);

                $name = $fname." ".$lname;

                $userInfoUsers = array('NAME'=> $name);

                $result = $this->editUsers($userInfoUsers,$oldEmail);
                    if($result > 0){
                        $result1 = $this->editPanelUsers($userInfoPanel,$panelID);
                        if($result1>0){
                            $this->session->set_flashdata('success', 'User details updated successfully');
                        }else{
                            $this->session->set_flashdata('error', 'User details update failed');
                    }
                    
                }
                else
                {
                    $this->session->set_flashdata('error', 'User details update failed');
                }
                
                redirect('OperatorIndex/addPanelMember');
                //}
                
            }
    }
	
    //edit panel memeber details 
    public function editPanelUsers($userInfoPanel,$panelID){

        $this->db->trans_start();
        $this->db->where('PANEL_ID', $panelID);
        $this->db->update('interview_panel', $userInfoPanel); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
        if($rows>0){
            return $rows;
        }else{
            return FALSE;
        }
    }

    //add member to the table users
    public function editUsers($userInfoUsers,$email){

        $this->db->trans_start();
        $this->db->where('USERNAME', $email);
        $this->db->update('users', $userInfoUsers); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
        if($rows>0){
            return $rows;
        }else{
            return FALSE;
        }

    }
	
    //need to implement this
    public function deleteMember($panelID){
        
        $data = $this->getMember($panelID);
        $email = $data->EMAIL;
        $this->db->where('EMAIL',$email);
        $this -> db -> delete('interview_panel');

        $this -> db -> where('USERNAME', $email);
        $this -> db -> delete('users');
    }


}