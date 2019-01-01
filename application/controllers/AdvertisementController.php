<?php

class AdvertisementController extends CI_controller{

	public function index(){
		$this->load->model('SAR/AdvertisementModel');
		$data['advertisement']=$this->load->AdvertisementModel->getConfirmedAdvertisement
	}
}