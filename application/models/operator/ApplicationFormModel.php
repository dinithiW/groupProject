<?php 

class ApplicationFormModel extends CI_Model{

    public $specializationID;
    public $specializationName;
    public $fileUploadID;
    public $fileUploadName;

	public function __construct() {
		parent::__construct();
	}

    public function getAllSpecializations(){
        $specializations = [];
        $this->load->database();
        $this->db->select('AREA_ID');
        $this->db->select('AREA_NAME');
        $this->db->from('specializationarea');

        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $specialization = new ApplicationFormModel();
            $specialization->specializationID= $row->AREA_ID;
            $specialization->specializationName= $row->AREA_NAME;
            array_push($specializations,$specialization);
        }
        return $specializations;

    }

    //returns the details of a single member
    public function getMember($panelID){

        $this->db->select('*');
        $this->db->from('interview_panel');
        $this->db->where('PANEL_ID',$panelID);
        $query = $this->db->get();
        return $query->row();
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
        $this -> db -> where('USERNAME', $email);
        $this -> db -> delete('users');
    }


}