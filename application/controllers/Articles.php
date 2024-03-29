<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Articles | Pariwisata Yogyakarta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $config['base_url'] = 'http://localhost/2019/pariwisata/articles/index';
        $config['total_rows'] = $this->db->get('article')->num_rows();
        $config['per_page'] = 3;

        // styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'page-link');






        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['articles'] = $this->Articles_model->getAllArticles($config['per_page'], $data['start']);

        $this->load->view('templates/articles_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('articles/index', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/articles_footer', $data);
    }

    public function read($url_title)
    {
        $data['article'] = $this->db->get_where('article', ['url_title' => $url_title])->row_array();
        
        $data['title'] = 'Pariwisata Yogyakarta ' . $data['article']['title'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['articles'] = $this->db->get('article', 3, 0)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $data['commentars'] = $this->db->get('article_commentar')->result_array();

        $this->form_validation->set_rules('commentar', 'Komentar', 'required');

        if( $this->form_validation->run() == false ) {
            $this->load->view('templates/articles_header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('articles/read', $data);
            $this->load->view('templates/footer', $data);
            $this->load->view('templates/articles_footer', $data);
        } else {
            
            $data = [
                'author'       => $data['user']['name'],
                'image'        => $data['user']['image'],
                'url_title'    => $url_title,
                'commentar'    => $this->input->post('commentar'),
                'date_created' => time(),
                'is_active'    => 'active'
            ];

            $this->db->insert('article_commentar', $data);
            redirect('articles/read/' . $url_title);
        }
    }
    
    public function category($category)
    {
        $data['title'] = 'Category Articles';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article_category'] = $this->db->get_where('article', ['category' => $category])->result_array();

        $data['articles'] = $this->db->get('article')->result_array();
        
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->load->view('templates/articles_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('articles/category', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/articles_footer', $data);

    }
}