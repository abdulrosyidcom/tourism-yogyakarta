<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model
{
    public function getAllArticles($limit, $start)
    {
        return $this->db->get('article', $limit, $start)->result_array();
    }

    public function countAllArticles()
    {
        return $this->db->get('article')->row_array();
    }
}