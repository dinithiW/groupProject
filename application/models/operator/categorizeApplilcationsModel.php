
<?php
    class categorizeApplilcationsModel extends CI_Model{
        function __construct(){
            parent::__construct();

        }

        //for select areas from database
        function fetch_datas(){
            $this->load->database();
            $this->db->select('*');
            $this->db->from('specializationarea');
            $query = $this->db->get();
            return $query;
        }

        //for insert data into database
        function insertAreas($data){
            $this->load->database();
            $inserted = $this->db->insert("specializationarea",$data);
        }


    }
?>