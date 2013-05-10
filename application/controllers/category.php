<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = 'Category';

		$this->load->view('category', $data);
	}

	function sub_cate()
	{
		$cate_id = $this->input->get('cate_id', TRUE) ? $this->input->get('cate_id', TRUE) : 0;

		if (0 == $cate_id)
		{
			$this->index();
		}
		else
		{
			$data['title'] = $cate_id;
			
			$this->load->view('sub_cate', $data);
		}
	}
}