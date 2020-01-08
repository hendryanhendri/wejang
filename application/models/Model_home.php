<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getDataDistincArticle(){
        return $this->db->get('view_distinc_category_article');
    }
    

    

}

/* End of file Model_home.php */
