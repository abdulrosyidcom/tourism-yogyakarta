<?php 

class offers extends CI_Controller 
{
    public function index()
    {
        $data['title'] = 'Offers | Pariwisata Yogyakarta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['offers'] = $this->db->get('offers')->result_array();

        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->load->view('templates/offers_header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('offers/index', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/offers_footer');
    }
    
    public function read($url_title)
    {
        $data['offer'] = $this->db->get_where('offers', ['url_title' => $url_title])->row_array();
        $data['title'] = 'Pariwisata Yogyakarta ' . $data['offer']['title'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['articles'] = $this->db->get('article', 4)->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->load->view('templates/offers_header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('offers/read', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/offers_footer');
    }
}