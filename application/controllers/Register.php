<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Model_register', 'getDataSignUp');
    }
    

    public function index()
    {
        $data['content']        = 'content/view_sign_up';
        $data['getIdUsers']     = $this->getDataSignUp->CreateId();
        $this->load->view('login_view', $data);
        
    }

    public function signUp(){
        $this->Model_security->getsecurity();
        $id         = $this->input->post('id_users', TRUE);
        $firstname  = $this->input->post('firstname', TRUE);
        $lastname   = $this->input->post('lastname', TRUE);
        $username   = $this->input->post('username', TRUE);
        $pass       = $this->input->post('password', TRUE);
        $this->getDataSignUp->getSaveRegisterData($id, $firstname, $lastname , $username, $pass);
        $id = $this->db->insert_id();
        
        redirect('login');
    }

}

/* End of file Register.php */
