<?php

class Hello extends CI_Controller
{

    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('footer/footer');
        $this->load->view('index');
    }
}
