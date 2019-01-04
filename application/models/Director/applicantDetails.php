<?php

class applicantDetails extends CI_Model{
    function __construct(){
        parent::__construct();

    }

    function index(){
        $this->load->database();
    }

    function getData(){
        $query = $this->db->get('basic_personal_details');

        return $query->result();
    }
}
?>