<?php

class Hello extends CI_Controller
{

    public function index()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('page/footer');
        $this->load->view('index');
        // $this->load->view('index');
    }

    // public function soal()
    // {
    //     $data['konten'] = "daftar_soal";
    //     $this->load->view('page/pages', $data);
    // }

    // public function tambah_soal()
    // {
    //     $data['konten'] = "tambah_soal";
    //     $this->load->view('page/pages', $data);
    // }

    // public function materi()
    // {
    //     $data['konten'] = "daftar_materi";
    //     $this->load->view('page/pages', $data);
    // }

    // public function tambah_materi()
    // {
    //     $data['konten'] = "tambah_materi";
    //     $this->load->view('page/pages', $data);
    // }
}
