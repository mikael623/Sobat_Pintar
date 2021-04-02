<?php
class Soal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['soal'] = $this->m_soal->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('daftar_soal', $data);
        $this->load->view('page/footer');
    }

    public function tambah_soal()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('tambah_soal');
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
}
