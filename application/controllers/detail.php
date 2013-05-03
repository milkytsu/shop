<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = $this->input->get('pid', TRUE);
		$this->load->view('detail', $data);
	}
}