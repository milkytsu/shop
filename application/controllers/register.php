<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = 'register';
		$step = $this->input->get('step', TRUE);
		if ($step)
		{
			if ($step <= 2 && $step >= 1)
			{
				$data['step'] = $step;
				$data['width'] = intval(100 / 3 * intval($step));
			}
			else
			{
				$data['step'] = 1;
				$data['width'] = 33;
			}
		}
		else
		{
			$data['step'] = 1;
			$data['width'] = 33;
		}

		$this->load->view('register', $data);
	}
}