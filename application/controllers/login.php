<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = 'Login';
		$this->load->view('login', $data);
	}
}