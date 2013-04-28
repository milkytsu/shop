<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['test'] = 'abc';
		$this->load->view('index', $data);
	}
}