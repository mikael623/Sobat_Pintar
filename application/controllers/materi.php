<?php
class Materi extends CI_Controller
{
    public function index()
    {
        $data['materi'] = $this->m_materi->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('page/footer');
        $this->load->view('daftar_materi', $data);
    }

    public function tambah_materi()
    {
        $judul = $this->input->post('judul_materi');
        $isi = $this->input->post('isi_materi');

        $data = array(
            'judul_materi' => $judul,
            'isi_materi' => $isi,
            'gambar' => "",
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
}
