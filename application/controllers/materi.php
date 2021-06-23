<?php
class Materi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->model('m_materidelapan');
        $this->load->model('m_materisembilan');
        $this->load->model('model_login');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['materi'] = $this->m_materi->tampil_data()->result();
        $data['materidelapan'] = $this->m_materidelapan->tampil_data()->result();
        $data['materisembilan'] = $this->m_materisembilan->tampil_data()->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/daftar_materi', $data);
        $this->load->view('page/footer');
    }

    public function tambah_materi()
    {
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/tambah_materi');
        $this->load->view('page/footer');
    }

    public function tambah_materi8()
    {
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/tambah_materi8');
        $this->load->view('page/footer');
    }

    public function tambah_materi9()
    {
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/tambah_materi9');
        $this->load->view('page/footer');
    }

    public function tambah_aksi()
    {
        $judul = $this->input->post('judul_materi');
        $isi = $this->input->post('isi_materi');
        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
            # code...
        } else {
            $config['upload_path'] = './assets/dist/upload_file';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }



        $data = array(
            'judul_materi' => $judul,
            'isi_materi' => $isi,
            'gambar' => $gambar,
        );

        $this->m_materi->input_data($data, 'materi');
        redirect('materi/index');
    }

    public function tambah_aksi8()
    {
        $judul = $this->input->post('judul_materi');
        $isi = $this->input->post('isi_materi');
        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
            # code...
        } else {
            $config['upload_path'] = './assets/dist/upload_file';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }



        $data = array(
            'judul_materi' => $judul,
            'isi_materi' => $isi,
            'gambar' => $gambar,
        );

        $this->m_materidelapan->input_data($data, 'materidelapan');
        redirect('materi/index');
    }

    public function tambah_aksi9()
    {
        $judul = $this->input->post('judul_materi');
        $isi = $this->input->post('isi_materi');
        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
            # code...
        } else {
            $config['upload_path'] = './assets/dist/upload_file';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }



        $data = array(
            'judul_materi' => $judul,
            'isi_materi' => $isi,
            'gambar' => $gambar,
        );

        $this->m_materisembilan->input_data($data, 'materisembilan');
        redirect('materi/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_materi->hapus_data($where, 'materi');
        redirect('materi/index');
    }

    public function hapus8($id)
    {
        $where = array('id' => $id);
        $this->m_materidelapan->hapus_data($where, 'materidelapan');
        redirect('materi/index');
    }

    public function hapus9($id)
    {
        $where = array('id' => $id);
        $this->m_materisembilan->hapus_data($where, 'materisembilan');
        redirect('materi/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['materi'] = $this->m_materi->edit_data($where, 'materi')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/edit_materi', $data);
        $this->load->view('page/footer');
    }

    public function edit8($id)
    {
        $where = array('id' => $id);
        $data['materidelapan'] = $this->m_materidelapan->edit_data($where, 'materidelapan')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/edit_materi8', $data);
        $this->load->view('page/footer');
    }

    public function edit9($id)
    {
        $where = array('id' => $id);
        $data['materisembilan'] = $this->m_materisembilan->edit_data($where, 'materisembilan')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('page/header');
        $this->load->view('page/sidebar', $user);
        $this->load->view('materi/edit_materi9', $data);
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

    public function update8()
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

        $this->m_materidelapan->update_data($where, $data, 'materidelapan');
        redirect('materi/index');
    }

    public function update9()
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

        $this->m_materisembilan->update_data($where, $data, 'materisembilan');
        redirect('materi/index');
    }
}
