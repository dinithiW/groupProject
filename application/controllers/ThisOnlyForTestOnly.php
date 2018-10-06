<?php
   defined('BASEPATH') OR exit('no direct script access allowed');

   class ThisOnlyForTestOnly extends CI_Controller{
       function __construct(){
           parent::__construct();
           $this->load->helper('url');
       }

       function add(){
           $this->load->view('ThisOnlyForTestOnlyView');
       }

       function index(){
           
           $this->load->model('ThisOnlyForTestOnlyModel');
           $data["fetch_data"] = $this->ThisOnlyForTestOnlyModel->fetch_datas();
           $this->load->view('applicant/applicationForm/ApplicationFormSelectAreas',$data);
           
        }
   }

?>