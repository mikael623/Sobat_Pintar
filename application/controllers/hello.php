<?php

class Hello extends CI_Controller
{

    public function index()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');

        $this->load->view('index');
        //$this->load->view('tentangkita');
        $this->load->view('page/footer');

        // $this->load->model('model_login');
        //	$this->model_login->keamanan();
    }

    public function admin()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');

        $this->load->view('profile/profile');
        $this->load->view('page/footer');
    }

    public function tentang()
    {
        $this->load->view('page/header');
        $this->load->view('page/sidebar');

        $this->load->view('tentangkita');
        $this->load->view('page/footer');
    }
}
