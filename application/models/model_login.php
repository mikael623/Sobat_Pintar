<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('login');
    }

    public function ambillogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password
                );
            }
            $this->session->get_userdata($sess);
            redirect('hello');
        } else {
            $this->session->set_flashdata('info', 'Maaf Username dan Password Anda salah!, Mohon diperiksa kembali');
            redirect('login');
        }
    }

    public function keamanan()
    {
        $username = $this->session->sess_destroy('username');
        if (!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
