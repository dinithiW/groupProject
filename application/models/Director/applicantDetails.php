<?php

class applicantDetails extends CI_Model{
    function __construct(){
        parent::__construct();

    }

    function index(){
        $this->load->database();
    }

    //Get basic personal details of applicants
    function getData(){
        $query = $this->db->get('basic_personal_details');

        return $query->result();
    }

    //Get data about selected lecturer probationary
    function getSelected_l_p(){
        $selected_l_p = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM lp_category WHERE NOT CATEGORY = 0)';
        $query = $this->db->query($selected_l_p);

        return $query->result();
    }

    //Get data about not selected lecturer probationary
    function getNotSelected_l_p(){
        $notSelected_l_p = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM lp_category WHERE CATEGORY = 0)';
        $query = $this->db->query($notSelected_l_p);

        return $query->result();
    }

    //Get data about selected senior lecturer grade I
    function getSelected_s_l_i(){
        $selected_s_l_i = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 1)';
        $query = $this->db->query($selected_s_l_i);

        return $query->result();
    }

    //Get data about not selected senior lecturer grade I
    function getNotSelected_s_l_i(){
        $notSelected_s_l_i = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM sl_selected_gradei WHERE SELECTED = 0)';
        $query = $this->db->query($notSelected_s_l_i);

        return $query->result();
    }

    //Get data about selected senior lecturer grade II
    function getSelected_s_l_ii(){
        $selected_s_l_ii = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 1)';
        $query = $this->db->query($selected_s_l_ii);

        return $query->result();
    }

    //Get data about not selected senior lecturer grade II
    function getNotSelected_s_l_ii(){
        $notSelected_s_l_ii = 'SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM sl_selected WHERE SELECTED = 0)';
        $query = $this->db->query($notSelected_s_l_ii);

        return $query->result();
    }

    //Get data about lecturer probationary who takes higher marks for interview
    function getMarks_l_p(){
        $subquery = 'SELECT * FROM lp_category_marks ORDER BY marks DESC LIMIT 3';
        $query = $this->db->query($subquery);

        return $query->result();
    }

    //Get data about senior lecturer grade I who takes higher marks for interview
    function getMarks_s_l_i(){
        $subquery = 'SELECT * FROM sl_selected_gradei_marks ORDER BY marks DESC LIMIT 3';
        $query = $this->db->query($subquery);

        return $query->result();
    }

    //Get data about senior lecturer grade II who takes higher marks for interview
    function getMarks_s_l_ii(){
        $subquery = 'SELECT * FROM sl_selected_gradeii_marks ORDER BY marks DESC LIMIT 3';
        $query = $this->db->query($subquery);

        return $query->result();
    }

    //Get all fields of created ad table
    function getCreatedAd(){
        $subquery = 'SELECT * FROM created_ad ORDER BY id DESC';
        $query = $this->db->query($subquery);

        return $query->result();
    }

    //When click the approve botton is_approved colomn will be 1
    function setapprovel($id){
        // echo "here $id";
        // $subquery = 'UPDATE created_ad SET is_approved = 1 WHERE vacancy_id = "$id"';
        // echo "running";
        // $this->db->query($subquery);

        $this->db->trans_start();
        $this->db->set('is_approved', 1);
        $this->db->where('vacancy_id', $id);
        $this->db->update('created_ad'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
        if($rows>0){
            echo 'here...';
            // return $rows;
        }else{
            echo 'this is else part';
            // return FALSE;
        }
    }

    //this will update is_approved colomn to 0 in created_ad table
    function setRejectAd($id){
        $this->db->trans_start();
        $this->db->set('is_approved', 0);
        $this->db->where('vacancy_id', $id);
        $this->db->update('created_ad');
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    function findVacancyNeeded($id){

        // echo "Here";
        $this->db->select('name');
        $this->db->where('id',$id);
        $this->db->from('vacancies');
        //$subquery = 'SELECT name FROM vacancies WHERE id = $id';
        
        
        
        $query = $this->db->get();

        return $query->result();
    }

    //Director opinion about advertisment
    function setopinion($id, $cmt){
        $this->db->trans_start();
        $this->db->set('reject_reason', $cmt);
        $this->db->where('vacancy_id', $id);
        $this->db->update('created_ad'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Select the not selected applicant
    function setNotSelected($id){
        $this->db->trans_start();
        $this->db->set('CATEGORY', 4);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('lp_category'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Remove selected applicant
    function setSelected($id){
        $this->db->trans_start();
        $this->db->set('CATEGORY', 0);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('lp_category'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Selected the not selected(Senior Lecturer I)
    function setSelectedSEI($id){
        $this->db->trans_start();
        $this->db->set('SELECTED', 1);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('sl_selected_gradei'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Reject the selected applicants (Senior Lecturer I)
    function rejectSelectedSEI($id){
        $this->db->trans_start();
        $this->db->set('SELECTED', 0);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('sl_selected_gradei'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Selected the not selected(Senior Lecturer II)
    function setSelectedSEII($id){
        $this->db->trans_start();
        $this->db->set('SELECTED', 1);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('sl_selected'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //Reject the selected applicants (Senior Lecturer II)
    function rejectSelectedSEII($id){
        $this->db->trans_start();
        $this->db->set('SELECTED', 0);
        $this->db->where('INDEX_NUMBER', $id);
        $this->db->update('sl_selected'); //Change effect
        $rows =  $this->db->affected_rows();
         $this->db->trans_complete();
    }

    //
    public function getApplicant($INDEX_NUMBER){

        $this->db->select('*');
        $this->db->from('basic_personal_details');
        $this->db->where('INDEX_NUMBER',$INDEX_NUMBER);
        $query = $this->db->get();
        return $query->row();
    }

    //delete selected applicant
    public function rejectSelectedApplicant($INDEX_NUMBER){
        $this->db->delete('sl_selected', array('INDEX_NUMBER' => $INDEX_NUMBER));
    }
}
?>