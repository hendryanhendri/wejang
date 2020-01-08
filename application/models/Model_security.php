<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_Model {
	public function getsecurity()
	{
		$this->load->library('Nativesession','nativesession');

		$username =  $this->nativesession->get('status');
		if(empty($username))
		{
			$this->nativesession->delete('status');
			redirect('login');
		}
	}

}
