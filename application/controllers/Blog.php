<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('Nativesession','nativesession');
        $this->load->model('Blog_model','blog_model');
    }

    function index(){
    $this->Model_security->getsecurity();   
    $data['content']        = 'content/blog_view';
    $data['getCategory']    = $this->blog_model->dataCategory()->result();
    $data['getId']          = $this->blog_model->getUserId()->result();
    
    $this->load->view('view_blog', $data);
    
    }

    // function publish article
    function publish(){
        $this->Model_security->getsecurity();

        $users      = $this->input->post('id_users', TRUE);
        $title      = $this->input->post('title',TRUE);
        $category   = $this->input->post('id_category', TRUE);
        $content    = $this->input->post('content',TRUE);

        $this->blog_model->publish_article($title, $content, $category, $users);
        $id = $this->db->insert_id();
        redirect('blog/show_article/'.$id);
    }
    
    // function show article
    function show_article(){
        $this->Model_security->getsecurity();

        $id = $this->uri->segment(3);
        $data = $this->blog_model->get_article_by_id($id);
        if($data->num_rows() > 0){
            $row = $data->row();
            $x['title']   = $row->article_title;
            $x['content'] = $row->article_content;
            $x['contentdata'] = 'content/view_blog_show';

            $this->load->view('blog_show_view', $x);
        }else{
            echo "ID Not Found.";
        }
    }
} 