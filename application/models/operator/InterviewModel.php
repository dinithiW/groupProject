<?php 

class ApplicationFormModel extends CI_Model{

    public $indexNo;
    public $idate;
    public $itime;

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

    public function getSpecialization($sid){
        $this->db->select('*');
        $this->db->from('specializationarea');
        $this->db->where('AREA_ID',$sid);
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
            $this->session->set_flashdata('success', 'User details updated successfully');
        }else{
            $this->session->set_flashdata('error', 'User details update failed');
        }

        redirect('OperatorIndex/specialization');

    }

    public function deleteSpecialization($sID){
        //echo"teehee";
        $this -> db -> where('AREA_ID', $sID);
        $this -> db -> delete('specializationarea');
    }

}

?>