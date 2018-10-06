<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class ApplicationFormSelectAreasModel extends CI_Controller{

    public function construct(){
        parent::__construct();
    }

    private function checkdate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    function fetch_datas(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from("ruwan");

        $query = $this->db->get();
        echo"this is the model";
        return $query;
    }


}
//ThisOnlyForTestOnly
?>