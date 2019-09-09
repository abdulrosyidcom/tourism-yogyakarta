<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login | Pariwisata Yogyakarta';

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if( $this->form_validation->run() == false ) {
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            
            $email     = $this->input->post('email');
            $password  = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();
 
            if( $user ) {
                if( $user['is_active'] == 1 ) {
                    if( password_verify($password, $user['password'] ) ) {

                        $result = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                        ];

                        $this->session->set_userdata($result);
                        if( $user['role_id'] == 1 ) {
                            redirect('dashboard');
                        } else {
                            redirect('user');
                        }

                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                        redirect('login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum aktif!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diregistrasi!</div>');
                redirect('login');
            } 
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar!</div>');
        redirect();
    }
}