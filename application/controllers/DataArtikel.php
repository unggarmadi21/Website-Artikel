<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataArtikel extends CI_Controller {

		function __construct()
		{
		parent::__construct();
		$this->load->model('Welcome');
		$this->load->helper(array('form', 'url','download'));
		}
	public function index()
	{
	$data['session'] = $this->session->all_userdata();
	$data['data_artikel'] = $this->Welcome->getDataArtikel();
	$this->load->view('head');
	$this->load->view('data-artikel', $data);
	$this->load->view('footer');
	}
}

?>
