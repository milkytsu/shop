<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = 'Cart';
		$data['pid'] = $this->input->get('pid', TRUE);

		$this->load->view('cart', $data);
	}

	function check_order()
	{
		$data['title'] = 'Check Order Info';

		$this->load->view('check_order', $data);
	}
}