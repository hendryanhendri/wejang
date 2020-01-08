<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home', 'getDataHome');
        $this->load->library('Nativesession','nativesession');
        date_default_timezone_set('Asia/Jakarta');
    }
    

    public function index()
    {
        $this->Model_security->getsecurity();

        $data['getDistictCategory'] = $this->getDataHome->getDataDistincArticle()->result();
        
        $this->load->view('view_home', $data);
        
    }

}

/* End of file Home.php */
