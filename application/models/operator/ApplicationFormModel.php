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

    public function getAllFileUploadsLinks(){
        $fileUploadsLinks = [];
        $this->load->database();
        $this->db->select('LINK_ID');
        $this->db->select('LINK_NAME');
        $this->db->from('file_upload_links');

        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $fileUploadsLink = new ApplicationFormModel();
            $fileUploadsLink->fileUploadID= $row->LINK_ID;
            $fileUploadsLink->fileUploadName= $row->LINK_NAME;
            array_push($fileUploadsLinks,$fileUploadsLink);
        }
        return $fileUploadsLinks;
    }

    //returns the details of a single member
    public function getMember($panelID){

        $this->db->select('*');
        $this->db->from('interview_panel');
        $this->db->where('PANEL_ID',$panelID);
        $query = $this->db->get();
        return $query->row();
    }

    


    function addNewS()
    {
        $this->load->view("includes/header");
        $this->load->view("users/operator/addSpecialization");
        $this->load->view("includes/footer");
        
    }

    function addNewSpecialization($sname){
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('sname','Specialization Name','trim|required|max_length[255]');
       
       if($this->form_validation->run() == FALSE)
            {
                $this->addNewS();
            }else{
                $userInfoUsers = array('AREA_NAME'=>$sname);

                $this->db->trans_start();
                $this->db->insert('specializationarea', $userInfoUsers);
                $rows =  $this->db->affected_rows();
                $this->db->trans_complete();
        
                if($rows>0){
                    $this->session->set_flashdata('success', 'New Specialization created successfully');
                 }else{
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                redirect('OperatorIndex/addSpecialization');
            }
    }
    
    function addNewF()
    {
        $this->load->view("includes/header");
        $this->load->view("users/operator/addFileUploadLink");
        $this->load->view("includes/footer");
        
    }

	function addNewFileUpload($fname){
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','File Link Name','trim|required|max_length[255]');
       
       if($this->form_validation->run() == FALSE)
            {
                $this->addNewF();
            }else{
                $userInfoUsers = array('LINK_NAME'=>$fname);

                $this->db->trans_start();
                $this->db->insert('file_upload_links', $userInfoUsers);
                $rows =  $this->db->affected_rows();
                $this->db->trans_complete();
        
                if($rows>0){
                    $this->session->set_flashdata('success', 'New Upload Link created successfully');
                 }else{
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                redirect('OperatorIndex/addUploadLink');
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

    public function deleteSpecialization($sID){
        //echo"teehee";
        $this -> db -> where('AREA_ID', $sID);
        $this -> db -> delete('specializationarea');
    }

    public function deleteFileUpload($sID){
        //echo"teehee";
        $this -> db -> where('LINK_ID', $sID);
        $this -> db -> delete('file_upload_links');
    }



}