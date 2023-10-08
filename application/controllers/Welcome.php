<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_m');
		$this->load->helper(array('form', 'url','download'));
	}

	public function index()
	{
		if (!$this->session->userdata('username')) 
		{		
		$this->load->view('head');
		$this->load->view('sidebar');
		$this->load->view('content');
		$this->load->view('footer');
		}
		else {
		redirect('');
		}

	}
	
}
