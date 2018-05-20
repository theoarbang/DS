<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_resiko_gejala_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatejresikogejala($data, $id){
			$this->db->set($data);
			$this->db->where("id_jns_faktor_gejala", $id);
			$this->db->update('tb_jns_faktor_gejala', $data);
	}

	public function addjresikogejala($data){
		if($this->db->insert('tb_jns_faktor_gejala', $data)){
			return true;
		}
	}

	public function deljresikogejala($id){
		if($this->db->delete('tb_jns_faktor_gejala','id_jns_faktor_gejala ='.$id)){
			return true;
		}
	}

}

/* End of file Jenis_resiko_gejala_model.php */
/* Location: ./application/models/Jenis_resiko_gejala_model.php */