<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }

    public function index(){
        //$this->load->view('includes/header');
        $this->load->view('login');
        //$this->load->view('includes/footer');
	}
	public function logout(){
	
			
				session_start();
				session_unset();
				session_destroy();
				redirect(base_url()."home");
				exit();

	
	}
	public function add(){
		$this->load->view('add');
	}

	



}

?>