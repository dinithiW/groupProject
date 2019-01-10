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

    public function getSpecialization($sid){
        $this->db->select('*');
        $this->db->from('specializationarea');
        $this->db->where('AREA_ID',$sid);
        $query = $this->db->get();
        return $query->row();
    }

    public function getFileUpload($sid){
        $this->db->select('*');
        $this->db->from('file_upload_links');
        $this->db->where('LINK_ID',$sid);
        $query = $this->db->get();
        return $query->row();
    }


    function addNewS()
    {
        $this->load->view("includes/header");
        $this->load->view("users/operator/editApplicationForm/addSpecialization");
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
        $this->load->view("users/operator/editApplicationForm/addFileUploadLink");
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

    function editSpecialization($sid,$fname){
         $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Specialization','required|max_length[255]');
        $userInfoUsers = array('AREA_NAME'=> $fname);

        $this->db->trans_start();
        $this->db->where('AREA_ID', $sid);
        $this->db->update('specializationarea', $userInfoUsers); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
        if($rows>0){
            $this->session->set_flashdata('success', 'Specialization details updated successfully');
        }else{
            $this->session->set_flashdata('error', 'Specialization details update failed');
        }

        redirect('OperatorIndex/specialization');

    }

    function editFileUpload($sid,$fname){
         $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','File Upload Link','required|max_length[255]');
        $userInfoUsers = array('LINK_NAME'=> $fname);

        $this->db->trans_start();
        $this->db->where('LINK_ID', $sid);
        $this->db->update('file_upload_links', $userInfoUsers); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
        if($rows>0){
            $this->session->set_flashdata('success', 'User details updated successfully');
        }else{
            $this->session->set_flashdata('error', 'User details update failed');
        }

        redirect('OperatorIndex/fileUploads');

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