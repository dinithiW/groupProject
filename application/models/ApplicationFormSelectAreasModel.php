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
    
    public function insertData(){
        $user = $this->checkdate($this->input->post('username'));
        

        if(($user!=null)&&($pass=!null)){
            $this->load->database();
            $this->db->select('username');
            $this->db->select('password');
            $this->db->select('email');
            $this->db->from('ruwan');
            $this->db->where('username',$user);
            $query = $this->db->get();
            
            
           
           $rows = $query->num_rows();
           if($rows>0){
               foreach($query->result() as $r){
                    echo"*****$r->username<br>";
                    echo"*****$r->password<br>";
                    echo"*****$r->email<br>";
               }
                echo"ok datae  have";
           }
           else{
            echo"sorry cant apply";
           }
            
           
        }
        else{
            echo"fieds are empty";
        }
    }
    
}

?>