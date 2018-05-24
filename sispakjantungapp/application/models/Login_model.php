<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function checkLoginAdminPakar($username, $password, $admin){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('admin',$admin);
		$query = $this->db->get('tb_administrator');
		return $query->num_rows();
	}

	public function checkLoginParamedis($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('tb_paramedis');
		return $query->num_rows();
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */