<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('test_model');
        }

	public function index()
	{
		//$data['content'] = $this->test_model->get_stuff();

		$data['message'] = "OMGYAY";
		$this->load->view('hello', $data);
		//echo $data['content'];
	}
}
