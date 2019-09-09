<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Registration | Pariwisata Yogyakarta';

        $this->form_validation->set_rules('name', 'Nama', 'Required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terrigestrasi'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too shoort'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false ) {
            $this->load->view('auth/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/footer');
        } else {
            
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun baru berhasil ditambahkan!</div>');
            redirect('login');
        }
    }
}