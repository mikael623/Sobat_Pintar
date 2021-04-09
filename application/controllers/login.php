<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('hello');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('login', ['username' => $username])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username']
					];
					$this->session->set_userdata($data);
					redirect('hello');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password Salah
		  			</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email Tidak Aktif
		  		</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Gagal
		  	</div>');
			redirect('login');
		}
	}

	// public function registrasi()
	// {
	// 	$this->form_validation->set_rules('username', 'Username', 'required|is_unique[login.username]', [
	// 		'is_unique' => 'Username Sudah Ada!'
	// 	]);
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login.email]', [
	// 		'is_unique' => 'Email Sudah Ada!'
	// 	]);
	// 	$this->form_validation->set_rules('password1', 'Password', 'required|min_length[3]|matches[password2]', [
	// 		'matches' => 'password dont match!',
	// 		'min_length' => 'Password too Short!'
	// 	]);
	// 	$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('registrasi');
	// 	} else {
	// 		$data = [
	// 			'username' => htmlspecialchars($this->input->post('username')),
	// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 			'email' => htmlspecialchars($this->input->post('email')),
	// 			'role' => '',
	// 			'is_active' => 1,
	// 		];

	// 		$this->db->insert('login', $data);
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	// 		Selamat, Anda berhasil daftar
	// 	  	</div>');
	// 		redirect('login');
	// 	}
	// }

	// public function ceklogin()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$this->load->model('model_login');
	// 	$this->model_login->ambillogin($username, $password);
	// }

	// public function Forgotpassword()
	// {
	// 	$this->load->view('Forgotpassword');
	// }

	// public function resetlink(){
	// 	$email= $this->input->post('email');
	// 	$result=$this->db->query("select * from login where email='".$email."'")->result_array();
	// 	if(count($result)>0){
	// 		$tokan= rand(1000,9999);

	// 		$this->db->query("update login set password='".$tokan."'where email='".$email."'");

	// 		$info="Please click on password reset link <br> <a href='".base_url('reset?tokan=').$tokan."'>Reset Password</a>";
	// 		$this->Email($email,'Reset Password Link',$info);
	// 	} else{
	// 		$this->session->set_flashdata('info',"Email not registered");
	// 		redirect(base_url('Forgotpassword'));
	// 	}
	// }

	// public function reset()
	// {
	// 	$data['tokan'] = $this->input->get('tokan');
	// 	$_SESSION['tokan'] = $data['tokan'];
	// 	$this->load->view('resetpass');
	// }

	// public function updatepass()
	// {
	// 	$_SESSION['tokan'];
	// 	$data = $this->input->post();
	// 	if ($data['password'] == $data['cpassword']) {
	// 		$this->db->query("update login set password='" . $data['password'] . "' where password='" . $_SESSION['tokan'] . "'");
	// 	}
	// }

	public function edit_profile($id)
	{
		$data['profil'] = $this->db->get_where('id', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('page/header');
		$this->load->view('page/sidebar');
		$this->load->view('materi/edit_materi', $data);
		$this->load->view('page/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul_materi');
		$isi = $this->input->post('isi_materi');
		$judul = $this->input->post('judul_materi');
		$isi = $this->input->post('isi_materi');
		$judul = $this->input->post('judul_materi');
		$isi = $this->input->post('isi_materi');

		$data = array(
			'judul_materi' => $judul,
			'isi_materi' => $isi,
			'gambar' => '',
		);

		$where = array(
			'id' => $id
		);

		$this->m_materi->update_data($where, $data, 'materi');
		redirect('materi/index');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Anda telah logout
		  	</div>');
		redirect('login');
	}
}
