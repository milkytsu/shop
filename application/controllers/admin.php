<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = '控制面板';
		$this->load->view('admin/admin', $data);
	}

	function orders()
	{
		$data['title'] = '订单管理';
		$this->load->view('admin/orders', $data);
	}

	function users()
	{
		$data['title'] = '用户管理';
		$this->load->view('admin/users', $data);
	}

	function edit_page()
	{
		$data['title'] = '编辑页面';
		$this->load->view('admin/edit_pages', $data);
	}

	function manage_product()
	{
		$data['title'] = '管理产品';
		$this->load->view('admin/manage_product', $data);
	}

	function manage_category()
	{
		$data['title'] = '管理分类';
		$this->load->view('admin/manage_category', $data);
	}

	function comments()
	{
		$data['title'] = '管理评论';
		$this->load->view('admin/comments', $data);
	}
}