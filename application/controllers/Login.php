<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m');
		$this->load->model('Welcome');
		$this->load->helper(array('form', 'url', 'download'));
	}
	public function index()
	{
		if (!$this->session->userdata('username')) {
			redirect('Welcome');
		}

	}
	public function login()
	{
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function cekStatusLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array('username' => $username, 'logged_in' => TRUE);
		$this->session->set_userdata($data);
		$data['session'] = $this->session->all_userdata();
		$data['username']= $this->Login_m->getUserName($username);
		//Jika Login berhasil
		if ($this->Login_m->validasi($username, $password)) {
			redirect('DataArtikel');
		}
		//Jika tidak berhasil Login
		else {
			$data['error'] = '
	 <div class="alert alert-danger">
	 	<p align="center"><strong>Username atau Password Anda Tidak Sesuai.</strong></p>
	 </div>';
			$this->load->view('head');
			$this->load->view('login', $data);
			$this->load->view('footer');
		}
	}
}
?>
