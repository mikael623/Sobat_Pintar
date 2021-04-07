<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('login_view');
	}

	public function ceklogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->ambillogin($username, $password);
	}

	public function logout()
	{
		$this->session->set_userdata('username', FALSE);
		$this->session->set_destroy();
		redirect('login');
	}
}
