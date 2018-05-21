<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktor_resiko_gejala_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatefresikogejala($data, $id){
			$this->db->set($data);
			$this->db->where("id_faktor_resiko_gejala", $id);
			$this->db->update('tb_faktor_resiko_gejala', $data);
	}

	public function addfresikogejala($data){
		if($this->db->insert('tb_faktor_resiko_gejala', $data)){
			return true;
		}
	}

	public function delfresikogejala($id){
		if($this->db->delete('tb_faktor_resiko_gejala','id_faktor_resiko_gejala ='.$id)){
			return true;
		}
	}

}

/* End of file Faktor_resiko_gejala_model.php */
/* Location: ./application/models/Faktor_resiko_gejala_model.php */