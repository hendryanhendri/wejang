<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getSaveRegisterData($id, $firstname, $lastname , $username, $pass){
        $data  = array(
            'id_users'      => $id,
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'username'      => $username,
            'password'      => md5($pass)
        );
        $this->db->insert('t_users', $data);
    }

    public function CreateId(){
        $this->db->select('RIGHT(t_users.id_users, 5) as kode', FALSE);
        $this->db->order_by('id_users', 'DESC');
        $this->db->limit(1);
        $query  = $this->db->get('t_users');
        if($query->num_rows()<>0){
          $data = $query->row();
          $kode = intval($data->kode)+1;
        }
        else {
          $kode = 5;
        }
        $kodemax  = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodejadi = "USR".$kodemax;
        $kodejadi = "USR".$kodemax;
        return $kodejadi;
      }
    

    

}

/* End of file Model_register.php */
