<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pakar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatepakar($data, $id){
		$this->db->set($data);
		$this->db->where("id_administrator", $id);
		$this->db->update('tb_administrator', $data);
	}

	public function addpakar($data){
		if($this->db->insert('tb_administrator', $data)){
			return true;
		}
	}

	public function delpakar($id){
		if($this->db->delete('tb_administrator','id_administrator ='.$id)){
			return true;
		}
	}

}

/* End of file Admin_pakar_model.php */
/* Location: ./application/models/Admin_pakar_model.php */