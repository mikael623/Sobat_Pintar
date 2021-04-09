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

	public function Forgotpassword(){
		$this->load->view('Forgotpassword');
	}

	public function resetlink(){
		$email= $this->input->post('email');
		$result=$this->db->query("select * from login where email='".$email."'")->result_array();
		if(count($result)>0){
			$tokan= rand(1000,9999);

			$this->db->query("update login set password='".$tokan."'where email='".$email."'");

			$info="Please click on password reset link <br> <a href='".base_url('reset?tokan=').$tokan."'>Reset Password</a>";
			$this->Email($email,'Reset Password Link',$info);
		} else{
			$this->session->set_flashdata('info',"Email not registered");
			redirect(base_url('Forgotpassword'));
		}
	}

	public function reset(){
		$data['tokan']= $this->input->get('tokan');
		$_SESSION['tokan']=$data['tokan'];
		$this->load->view('resetpass');
	}

	public function updatepass(){
		$_SESSION['tokan'];
		$data=$this->input->post();
		if($data['password']==$data['cpassword']){
			$this->db->query("update login set password='".$data['password']."' where password='".$_SESSION['tokan']."'");
		}
	}

	public function logout()
	{
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('login');
	}
}
