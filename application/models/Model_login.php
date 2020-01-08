<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Nativesession','nativesession');
	}

    public function getlogin($username,$password)
	{
		$pwd = md5($password);
		$this->db->where('username',$username);
		$this->db->where('password',$pwd);
		$query = $this->db->get('t_users');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				 $sess = array (
                    ' id_users'     => $row->id_users,
                    ' username'     => $row->username,
                    ' firstname'    => $row->firstname,
                    ' lastname'     => $row->lastname,
                    ' email'        => $row->email,
                    ' phone'        => $row->phone,
                    ' gender'       => $row->gender,
                    ' city'         => $row->city,
                    ' country'      => $row->country,
                    ' address'      => $row->address,
                    ' province'     => $row->province,
                    ' sub-distric'  => $row->subdistrict,
                    ' level'        => $row->level,
                    ' photo'        => $row->photo);

				 $this->nativesession->set('status', $row->username);
				 session_start();
				 redirect('Home');
			}
		}
		else
		{
			$this->session->set_flashdata('info1', 'Login Error, Sorry check your username and password');
			redirect('login');
		}
	}


    public function getlogout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('info1', 'Thanks, you already logout !');
		redirect('login',false);
	}
    

    

}

/* End of file Model_Login.php */
