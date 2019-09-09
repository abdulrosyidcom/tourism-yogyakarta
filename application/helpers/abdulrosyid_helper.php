<?php 

function is_logged_in()
{
    $abdulrosyid = get_instance();
    if(!$abdulrosyid->session->userdata('email')) {
        redirect('login');
    } else {
        $role_id = $abdulrosyid->session->userdata('role_id');
        $menu    = $abdulrosyid->uri->segment(1);

        $query_menu = $abdulrosyid->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id    = $query_menu['id'];

        $user_access = $abdulrosyid->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if( $user_access->num_rows() < 1 ) {
            redirect('user/blocked');
        }
    }
}