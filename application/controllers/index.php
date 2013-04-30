<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('test');
	}

	function test_index()
	{
		$this->load->view('index');
	}

	function test_view()
	{
		$this->load->view('header');
	}
}