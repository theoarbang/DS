<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatepasien($data, $id){
			$this->db->set($data);
			$this->db->where("id_pasien", $id);
			$this->db->update('tb_pasien', $data);
	}

	public function addpasien($data){
		if($this->db->insert('tb_pasien', $data)){
			return true;
		}
	}

	public function delpasien($id){
		if($this->db->delete('tb_pasien','id_pasien ='.$id)){
			return true;
		}
	}

}

/* End of file Pasien_model.php */
/* Location: ./application/models/Pasien_model.php */