<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_topics extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('Nativesession','nativesession');
    }
    
    public function getArticle(){
        $this->db->select('*');
        $this->db->from('view_article');
        $this->db->where('username', $this->nativesession->get('status'));
        $this->db->order_by('article_id', 'desc');
        return $this->db->get();
    }

    

}

/* End of file Model_topics.php */
