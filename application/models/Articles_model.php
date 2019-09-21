<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model
{
    public function getAllArticles($limit, $start)
    {
        $this->db->order_by('title', 'DESC');
        return $this->db->get('article', $limit, $start)->result_array();
    }
}