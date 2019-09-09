<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pariwisata Yogyakarta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();
        $data['notes'] = $this->db->get('user_notes')->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/home_footer');
    }
}