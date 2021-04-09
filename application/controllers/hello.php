<?php

class Hello extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');

        $this->load->view('index');
        //$this->load->view('tentangkita');
        $this->load->view('page/footer');

        // $this->load->model('model_login');
        // $this->model_login->keamanan();
    }

    public function admin()
    {
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('page/header', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('profile/profile', $data);
        $this->load->view('page/footer');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('page/header', $data);
            $this->load->view('page/sidebar', $data);
            $this->load->view('profile/profile', $data);
            $this->load->view('page/footer');
        } else {
            $username = $this->input->post('username');

            $data = [
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'gender' => $this->input->post('gender'),
                'telp' => $this->input->post('telp'),
                'role' => $this->input->post('role'),
                'alamat' => $this->input->post('alamat'),
            ];

            $this->db->set($data);
            $this->db->where('username', $username);
            $this->db->update('login');
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Selamat, Anda berhasil daftar
		  	</div>');
        redirect('hello/admin');
    }

    public function tentang()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');

        $this->load->view('tentangkita');
        $this->load->view('page/footer');
    }
}
