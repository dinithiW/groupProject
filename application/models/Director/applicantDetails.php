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

    //Get data about selected applicants
    function getSelected(){
        $query = $this->db->query('SELECT * FROM basic_personal_details WHERE INDEX_NUMBER IN (SELECT INDEX_NUMBER FROM sl_selected)');

        return $query->result();
    }

    public function getApplicant($INDEX_NUMBER){

        $this->db->select('*');
        $this->db->from('basic_personal_details');
        $this->db->where('INDEX_NUMBER',$INDEX_NUMBER);
        $query = $this->db->get();
        return $query->row();
    }

    public function rejectSelectedApplicant($INDEX_NUMBER){
        $this->db->delete('sl_selected', array('INDEX_NUMBER' => $INDEX_NUMBER));
    }
}
?>