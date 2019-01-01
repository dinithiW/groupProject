<?php

class AdvertisementModel extends CI_model{

	public function __construct(){
		parent::__construct();
	}

	public function setNotifyTo0(){
		$this->load->database();
		$this->db->query("update advertisement set notified=0 where adid=1");
	}

	public function getAdvertisement(){
		$this->load->database();
		$sql=$this->db->query("SELECT message FROM advertisement where adid=1 && confirmed=1");
		return $sql->result();
	}

	public function confirmAdvertisement(){
		$this->load->database();
		$this->db->query("update advertisement set confirmed=1 where adid=1");
	}




}