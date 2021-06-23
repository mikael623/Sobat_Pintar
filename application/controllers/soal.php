<?php
class Soal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
        $this->load->model('model_login');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['soal'] = $this->m_soal->tampil_data()->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('soal/daftar_soal', $data);
        $this->load->view('page/footer');
    }

    public function tambah_soal()
    {
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('soal/tambah_soal');
        $this->load->view('page/footer');
    }

    public function tambah_aksi()
    {
        $soal = $this->input->post('soal');
        $a = $this->input->post('a');
        $b = $this->input->post('b');
        $c = $this->input->post('c');
        $d = $this->input->post('d');
        $e = $this->input->post('e');
        $correct = $this->input->post('correct');

        $data = array(
            'soal' => $soal,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'correct' => $correct,
        );

        $this->m_soal->input_data($data, 'soal');
        redirect('soal/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_soal->hapus_data($where, 'soal');
        redirect('soal/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['soal'] = $this->m_soal->edit_data($where, 'soal')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('soal/edit_soal', $data);
        $this->load->view('page/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $soal = $this->input->post('soal');
        $a = $this->input->post('a');
        $b = $this->input->post('b');
        $c = $this->input->post('c');
        $d = $this->input->post('d');
        $e = $this->input->post('e');
        $correct = $this->input->post('correct');

        $data = array(
            'soal' => $soal,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'correct' => $correct,
        );

        $where = array(
            'id' => $id
        );

        $this->m_soal->update_data($where, $data, 'soal');
        redirect('soal/index');
    }
}
