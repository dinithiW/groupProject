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
        $pass = md5($this->input->post('password'));
        $email= $this->checkdate($this->input->post('email'));
        echo"before  filterinf === $user<br>";
        echo"before filterinf ===$pass <br>";

        if(($user!=null)&&($pass=!null)){
         
            echo"after filterinf  ====$user<br>";
            echo"after filterinf =====$pass<br>";
            $this->load->database();
            
           $query="INSERT INTO `ruwan` VALUES ('$user','$pass','$email')";
           $result = $this->db->query($query);
           
           if($result){
                echo"ok data inserted";
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