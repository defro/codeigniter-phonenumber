<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CIPhoneNumberExample extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Very simple way to load the LIBRARY
		$this->load->library('CIPhoneNumber');

		// Be sure form helper is load
		$this->load->helper('form');

		// Very simple way to load the LIBRARY
		$this->load->helper('CIPhoneNumber');
	}

	public function index()
	{
		$phoneNumbers = array(
			'bcit' => '+1-604-434-5734'
		);

		$data = array(
				'phoneNumbers' => $phoneNumbers
		);

		// Load view example for demo
		$this->load->view('ciphonenumber-example', $data);
	}

}
