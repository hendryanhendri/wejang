<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_topics', 'getDataTopics');
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {
        $this->Model_security->getsecurity();
        $data['getDataArticle'] = $this->getDataTopics->getArticle()->result();
        
        $data['content']    = 'content/view_topic';

        $this->load->view('view_topics', $data);
        
    }

}

/* End of file Topics.php */
