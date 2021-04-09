<?php
class Materi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['materi'] = $this->m_materi->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('materi/daftar_materi', $data);
        $this->load->view('page/footer');
    }

    public function tambah_materi()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('materi/tambah_materi');
        $this->load->view('page/footer');
    }

    public function tambah_aksi()
    {
        $judul = $this->input->post('judul_materi');
        $isi = $this->input->post('isi_materi');

        $data = array(
            'judul_materi' => $judul,
            'isi_materi' => $isi,
            'gambar' => '',
        );

        $this->m_materi->input_data($data, 'materi');
        redirect('materi/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_materi->hapus_data($where, 'materi');
        redirect('materi/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['materi'] = $this->m_materi->edit_data($where, 'materi')->result();
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
}
