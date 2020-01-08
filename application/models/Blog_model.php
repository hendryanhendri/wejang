<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Nativesession','nativesession');
    }
    

    function publish_article($title, $content, $category, $users){
        $data  = array(
            'id_users'        => $users,
            'article_title'   => $title,
            'id_category'     => $category,
            'article_content' => $content
        );
        $this->db->insert('tbl_article', $data);
    }

    function get_article_by_id($id){
        $query = $this->db->get_where('tbl_article', array('article_id' => $id));
        return $query;
    }

    public function dataCategory(){
        return $this->db->get('t_category');
    }

    public function getUserId(){
        $this->db->select('id_users');
        $this->db->from('t_users');
        $this->db->where('username', $this->nativesession->get('status'));
        $this->db->limit(1);
        return $this->db->get();
    }

}