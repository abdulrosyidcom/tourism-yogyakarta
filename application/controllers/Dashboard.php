<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         
        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar', $data);
        $this->load->view('backend/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('backend/footer');
    }

    // Users
    
    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         
        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar', $data);
        $this->load->view('backend/topbar', $data);
        $this->load->view('dashboard/user/profile', $data);
        $this->load->view('backend/footer');
    }
    
    public function edit_profile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/user/edit_profile', $data);
            $this->load->view('backend/footer');
        } else {
            
            // $this->Dashboard_model->updateProfile();

            $name  = $this->input->post('name', true);
            $email = $this->input->post('email', true);

            $upload_image = $_FILES['image']['name'];

            if( $upload_image ) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if( $this->upload->do_upload('image') ) {
                    $old_image = $data['user']['image'];
                    if( $old_image != 'default.jpg' ) {
                        unlink(FCPATH . 'assets/img/profile' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile berhasil diubah!</div>');
            redirect('dashboard/profile');
        }
    }

    public function change_password()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/user/change_password', $data);
            $this->load->view('backend/footer');
        } else {
            
            $current_password = $this->input->post('current_password');
            $new_password     = $this->input->post('new_password1');

            if( !password_verify($current_password, $data['user']['password']) ) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
                redirect('dashboard/change_password');
            } else {
                if( $current_password ==  $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password!</div>');
                    redirect('dashboard/change_password');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('dashboard/change_password');
                }
            }

        }
    }


    // article
    public function article()
    {
        $data['title'] = 'Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article')->result_array();
        
        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar', $data);
        $this->load->view('backend/topbar', $data);
        $this->load->view('dashboard/article/index', $data);
        $this->load->view('backend/footer');
    }

    public function add_article()
    {
        $data['title'] = 'Add Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('title', 'Judul', 'required|trim');
        $this->form_validation->set_rules('category', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('content', 'Konten', 'required|trim');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/article/add_article', $data);
            $this->load->view('backend/footer');
        } else {

            $data = [
                'title'        => $this->input->post('title'),
                'url_title'    => strtolower( url_title( $this->input->post('title') ) ),
                'category'     => $this->input->post('category'),
                'content'      => $this->input->post('content'),
                'author'       => $data['user']['email'],
                'date_created' => time(),
                'is_active'    => 'active'
            ];

            $image = $_FILES['image']['name'];

            if( $image ) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/img/article/';

                $this->load->library('upload', $config);

                if( $this->upload->do_upload('image') ) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);

                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('article', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel Baru Berhasil Ditambahkan!</div>');
            redirect('dashboard/article');

        }
    }

    public function update_article($id)
    {
        $data['title'] = 'Update Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['article'] = $this->db->get_where('article', ['id' => $id])->row_array();
        
        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar', $data);
        $this->load->view('backend/topbar', $data);
        $this->load->view('dashboard/article/update_article', $data);
        $this->load->view('backend/footer');
    }

    public function delete_article($id)
    {
        $this->db->delete('article', ['id' => $id]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel berhasil dihapus!</div>');
        redirect('dashboard/article');
    }

    public function category_article()
    {
        $data['title'] = 'Category';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('is_active','active', 'required');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/article/category', $data);
            $this->load->view('backend/footer');
        } else {

            $data = [
                'title' => $this->input->post('title'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('article_category', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">kategori Artikel berhasil dihapus!</div>');
            redirect('dashboard/category_article');
        }
    }

    public function update_category_article($id)
    {
        $data['title'] = 'Update Category';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['category'] = $this->db->get_where('article_category', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('is_active','active', 'required');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/article/update_category', $data);
            $this->load->view('backend/footer');
        } else {

            $data = [
                'title' => $this->input->post('title'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('article_category', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategory Berhasil Diupdate!</div>');
            redirect('dashboard/category_article');
        }
    }

    public function delete_category_article($id)
    {
        $this->db->delete('article_category', ['id' => $id]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori artikel berhasil dihapus!</div>');
        redirect('dashboard/category_article');
    }


    // Menu Management

    public function menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar', $data);
        $this->load->view('backend/topbar', $data);
        $this->load->view('dashboard/menu/index', $data);
        $this->load->view('backend/footer');
    }
    
    public function sub_menu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['submenu'] = $this->Dashboard_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if( $this->form_validation->run() == false ) {
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar', $data);
            $this->load->view('backend/topbar', $data);
            $this->load->view('dashboard/submenu/index', $data);
            $this->load->view('backend/footer');
        } else {

            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu baru berhasil ditambahkan!</div>');
            redirect('dashboard/sub_menu');

        }
    }




}