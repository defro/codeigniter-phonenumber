<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CIPhoneNumberExample extends CI_Controller
{

	private $_data = array();

	public function __construct()
	{
		parent::__construct();

		// Very simple way to load the LIBRARY
		$this->load->library('CIPhoneNumber');

		// Be sure form helper is loaded
		$this->load->helper('form');

		// Very simple way to load the LIBRARY
		$this->load->helper('CIPhoneNumber');
	}

	public function index()
	{
		if ($this->input->method() === 'post')
			$this->_handleForm();

		// Some examples with few famous IT University
		$items = array(
				'bcit' => array(
						'label' => __("British Columbia Institute of Technology"),
						'phone' => '+1-604-434-5734'
				),
				'42' => array(
						'label' => __("École 42"),
						'phone' => '+33 9 17 12 46 24'
				),
				'mit' => array(
						'label' => __("Massachusetts Institute of Technology"),
						'phone' => '+1-617-253-1000'
				)
		);

		$this->_data['items'] = $items;

		// Load view example for demo
		$this->load->view('ciphonenumber-example', $this->_data);
	}

	private function _handleForm()
	{
		$this->load->library('form_validation');

		$this->load->library('CIPhoneNumber');

		$phones = $this->input->post('phones');
		$input = 'phones[' . key($phones) . ']';

		$this->form_validation->set_rules($input, 'Phone',
			array(
				'required',
				array($this->ciphonenumber, 'form_validation')
			)
		);

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
		}
		else
		{
			$this->session->set_flashdata('success', "Success");
		}
	}

}
