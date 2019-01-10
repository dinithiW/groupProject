<?php 

class InterviewModel extends CI_Model{

    public $indexNo;
    public $idate;
    public $itime;
    public $rdate;//shortened for real date for ease
    public $rtime;

	public function __construct() {
		parent::__construct();
	}

    //insert new interview groups
    public function insertInterview($selected,$idate,$itime){
        $userInfoUsers = array('INDEX_NUMBER'=>$selected,'INTERVIEW_DATE'=>$idate,
            'INTERVIEW_TIME'=>$itime);

        $this->db->trans_start();
        $this->db->insert('candidates_interviews', $userInfoUsers);
        $this->db->trans_complete();
    }


    public function getInterviewGroups(){
        $interviews = [];
        $this->load->database();
        $this->db->select('INTERVIEW_DATE');
        $this->db->select('INTERVIEW_TIME');
        $this->db->group_by('INTERVIEW_DATE','INTERVIEW_TIME'); 
        $this->db->from('candidates_interviews');

        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $interview = new InterviewModel();
            $date = date_create($row->INTERVIEW_DATE);
            $interview->idate = date_format($date, 'jS F Y');
            $interview->rdate = $row->INTERVIEW_DATE;
            $interview->rtime = $row->INTERVIEW_TIME;
            $interview->itime = $row->INTERVIEW_TIME;
            array_push($interviews,$interview);
        }

        return $interviews;
    }

    public function getEmails($date,$time,$description,$content){
        $this->load->database();
        $this->db->select('INDEX_NUMBER');
        $this->db->where("INTERVIEW_DATE",$date);
        $this->db->where("INTERVIEW_TIME",$time);
        $this->db->from('candidates_interviews');
        $this->load->model('operator/EmailModel');

        $query = $this->db->get();

        foreach ($query->result() as $row) {
            //echo $row1->;
            //$this->db->select('INDEX_NUMBER');
            $this->db->select('PERSONAL_EMAIL');
            $this->db->from('basic_personal_details as t1');
            $this->db->join('candidates_interviews as t2', 't1.INDEX_NUMBER = t2.INDEX_NUMBER', 'INNER');
            

            $query2 = $this->db->get();
            $i = 0;
            $emails = [];
            foreach ($query2->result() as $row2) {
                //echo $row2;
                $emails[$i] = $row2->PERSONAL_EMAIL;
                $i++;
                /*$email = new EmailController();
                $this->load->library('email');
                $email->send_mail3($this->email, $row2->PERSONAL_EMAIL, $content);*/
                //$this->EmailModel->singleEmail($row,$description,$content);
            }

        }
        $this->EmailModel->sendBulkEmail($emails);
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