<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('CIPhoneNumber');
	}

	public function index()
	{
		$data = array();
		$this->load->view('ciphonenumber-example', $data);
	}

}
