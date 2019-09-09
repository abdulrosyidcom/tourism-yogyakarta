<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'User Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();
        
        $this->load->view('users/templates/user_header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('users/templates/user_main');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('users/templates/user_footer');
    }


    public function edit_profile()
    {
        $data['title'] = 'Edit Profile Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();
        
        $this->load->view('users/templates/user_header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('users/templates/user_main');
        $this->load->view('users/edit_profile', $data);
        $this->load->view('templates/footer');
        $this->load->view('users/templates/user_footer');
    }
    
    
    public function notes()
    {
        $data['title'] = 'Dashboard | Notes User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $data['notes'] = $this->db->get('user_notes')->result_array();

        $this->form_validation->set_rules('notes', 'Catatan', 'required');
        
        if( $this->form_validation->run() == false ) {
            $this->load->view('users/templates/user_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('users/templates/user_main');
            $this->load->view('users/notes', $data);
            $this->load->view('templates/footer');
            $this->load->view('users/templates/user_footer');
        } else {
            
            $data = [
                'author'       => $data['user']['email'],
                'image'        => $data['user']['image'],
                'name'         => $data['user']['name'],
                'notes'        => $this->input->post('notes', true),
                'is_active'    => 'proccess',
                'date_created' => time()
            ];

            $this->db->insert('user_notes', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Catatan baru berhasil ditambahkan!</div>');
            redirect('user/notes');
        }
    }


    public function blocked()
    {
        $this->load->view('users/blocked');
    }
}