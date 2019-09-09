<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Contact';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->load->view('templates/contact_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/contact_footer', $data);
    }
}