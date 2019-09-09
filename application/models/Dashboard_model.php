<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    // public function updateProfile()
    // {
    //       $name  = $this->input->post('name', true);
    //       $email = $this->input->post('email', true);

    //       $upload_image = $_FILES['image']['name'];

    //       if( $upload_image ) {
    //           $config['allowed_types'] = 'gif|jpg|png';
    //           $config['max_size'] = '2048';
    //           $config['upload_path'] = './assets/img/profile/';

    //           $this->load->library('upload', $config);

    //           if( $this->upload->do_upload('image') ) {
    //             $old_image = $data['user']['image'];
    //             if( $old_image != 'default.jpg' ) {
    //                 unlink(FCPATH . 'assets/img/profile' . $old_image);
    //             }

    //             $new_image = $this->upload->data('file_name');
    //             $this->db->set('image', $new_image);
    //           } else {
    //             echo $this->upload->display_errors();
    //           }
    //       }

    //       $this->db->set('name', $name);
    //       $this->db->where('email', $email);
    //       $this->db->update('user');
    // }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }


}