<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$data['message'] = "OMGYAY";
		$this->load->view('hello', $data);
	}
}
