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
       $user = $this->input->post('username');
      // $pass = checkdate($this->input->post('password'));

       if($user!=null){
            $this->load->database();
            $this->db->select('username');
            $this->db->select('password');
            $this->db->select('email');
            $this->db->from('ruwan');
            $this->db->where('username',$user);

            $query = $this->db->get();

            if($query->num_rows()>0){
                foreach($query->result() as $r){
                    echo"+++++++++++$r->username</br>";
                    echo"+++++++++++$r->password</br>";
                    echo"+++++++++++$r->email</br>";
                    echo"---------------------------------------------------<br>";
                }
                
            }
       }
       else{
           echo"WARNING! check your fields!";
       }
    }
}

?>