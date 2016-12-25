<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller
{

	public function index()
	{
		//ptr(FCPATH . 'vendor/defro/codeigniter-phonenumber/src', 1);
		$this->load->library('LibPhoneNumber');
		//$phone = $this->libphonenumber->parse('0658831904', 'FR');
		//$isValid = $this->libphonenumber->isValidNumber($phone);
		//ptr( $this );

		$data = array();
		$this->load->view('example', $data);
	}

}
