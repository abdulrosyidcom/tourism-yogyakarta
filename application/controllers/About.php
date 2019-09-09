<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'About Us';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();
        
        $this->load->view('templates/about_header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('about/index');
        $this->load->view('templates/footer');
        $this->load->view('templates/about_footer');
    }
}