<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatediagnosa($data, $id){
			$this->db->set($data);
			$this->db->where("id_diagnosa", $id);
			$this->db->update('tb_diagnosa', $data);
	}

	public function adddiagnosa($data){
		if($this->db->insert('tb_diagnosa', $data)){
			return true;
		}
	}

	public function deldiagnosa($id){
		if($this->db->delete('tb_diagnosa','id_diagnosa ='.$id)){
			return true;
		}
	}

}

/* End of file Diagnosa_model.php */
/* Location: ./application/models/Diagnosa_model.php */