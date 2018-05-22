<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramedis_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updateparamedis($data, $id){
		$this->db->set($data);
		$this->db->where("id_paramedis", $id);
		$this->db->update('tb_paramedis', $data);
	}

	public function addparamedis($data){
		if($this->db->insert('tb_paramedis', $data)){
			return true;
		}
	}

	public function delparamedis($id){
		if($this->db->delete('tb_paramedis','id_paramedis ='.$id)){
			return true;
		}
	}

}

/* End of file Paramedis_model.php */
/* Location: ./application/models/Paramedis_model.php */