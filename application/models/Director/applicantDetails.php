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