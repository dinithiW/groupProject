<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class applicant_model extends CI_Model
{
    public $index;
   public $fname;
   public $lname;
   public $dob;
   public $age;
   public $eq;
   public $pq;
   public $pe;
   public $spe;

   public function getAll(){

        $array = [];

        $this->load->database();
        $this->db->select("INDEX_NUMBER");
        $this->db->select("FIRST_NAME");
        $this->db->select("LAST_NAME");
        //$this->db->select("DATE_OF_BIRTH");
        $this->db->from("basic_personal_details");
        $query = $this->db->get();
        foreach($query->result() as $row){
            $a = new applicant_model();
            $a->eq = "";
            $a->pq = "";

            $a->index = $row->INDEX_NUMBER;
            $a->fname = $row->FIRST_NAME;
            $a->lname = $row->LAST_NAME;
            //$a->dob = $row->DATE_OF_BIRTH;

            $this->db->select("UNIVERSITY");
            $this->db->select("DEGREE_OBTAINED");
            $this->db->select("DURATION");
            $this->db->select("CLASS");
            $this->db->from("higher_educational_details");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query2 = $this->db->get();
            
            foreach($query2->result() as $row2){
                $a->eq .= "University: $row2->UNIVERSITY, <br>Degree: $row2->DEGREE_OBTAINED,<br>Duration: $row2->DURATION,<br>Class: $row2->CLASS<br><br>";
            }

            $this->db->select("INSTITUTION");
            $this->db->select("INSTITUTION");
            $this->db->select("DURATION");
            $this->db->from("professional_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query3 = $this->db->get();
            
            foreach($query3->result() as $row3){
                $a->pq .= "$row3->INSTITUTION,$row3->INSTITUTION,$row2->DURATION<br>";
            }

            //my stuff
            /*$this->db->select("INSTITUTION");
            $this->db->select("INSTITUTION");
            $this->db->select("DURATION");
            $this->db->from("professional_qualifications");
            $this->db->where("INDEX_NUMBER",  $a->index);
            $query3 = $this->db->get();
            
            foreach($query3->result() as $row3){
                $a->pq .= "$row3->INSTITUTION,$row3->INSTITUTION,$row2->DURATION<br>";
            }   */


            array_push($array, $a);
        }

        return $array;
   }

}

  