<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_login', 'getLoginModel');
		$this->load->library('Nativesession','nativesession');
	}
	function index(){
		$data['content']	= 'content/view_login';
		$this->load->view('login_view', $data);
	}

	
	function auth(){
		
		$username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);  

        $this->getLoginModel->getlogin($username,$password);
       
    }

	function logout(){
        $this->nativesession->delete('status');
        redirect('login');
    }
}
