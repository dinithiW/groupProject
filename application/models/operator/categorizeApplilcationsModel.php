
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

        //for insert areas into database
        function insertAreas($data){
            $this->load->database();
            $this->db->insert('specializationarea',$data);
            
        }

        //for delete areas from database
        function deleteAreas($id){
            $this->load->database();
            $this->db->where('AREA_ID',$id);
            $this->db->delete("specializationarea");
           
        }

        //for insert file uploding links into database
        function insertFileUploadLink($data){
            $this->load->database();
            $this->db->insert('file_upload_links',$data);
            
        }

        //for get data from database
        function fetchFileUploadLinks(){
            $this->load->database();
            $this->db->select('*');
            $this->db->from('file_upload_links');
            $query = $this->db->get();
            return $query;
        }


    }
?>