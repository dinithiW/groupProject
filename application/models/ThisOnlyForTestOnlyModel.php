<?php
    class ThisOnlyForTestOnlyModel extends CI_Controller{
        function __construct(){
            parent::__construct();

        }

        function fetch_datas(){
        
                $this->load->database();
                $this->db->select('*');
                $this->db->from('ruwan');
                $query = $this->db->get();

                return $query;
            
        }
    }
?>