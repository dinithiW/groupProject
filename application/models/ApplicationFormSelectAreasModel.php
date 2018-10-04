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
        $user = $this->checkdate($_POST['username']);
        $pass = $this->checkdate($_POST['password']);

        if(($user!=null)&&($pass=!null)){
            $this->load->database();
            $data = array(
                'username' => $user,
                'password' => $pass
            );

           $this->db->insert('ruwan',$data);
           
        }
        else{
            echo"fieds are empty";
        }
    }
    
}

?>