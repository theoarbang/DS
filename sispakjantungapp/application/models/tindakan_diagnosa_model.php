<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_diagnosa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updatetindakandiagnosa($data, $id){
		$this->db->set($data);
		$this->db->where("id_diagnosa_tindakan", $id);
		$this->db->update('tb_tindakan_diagnosa', $data);
	}

	public function addtindakandiagnosa($data){
		if($this->db->insert('tb_tindakan_diagnosa', $data)){
			return true;
		}
	}

	public function deltindakandiagnosa($id){
		if($this->db->delete('tb_tindakan_diagnosa','id_diagnosa_tindakan ='.$id)){
			return true;
		}
	}

}

/* End of file tindakan_diagnosa_model.php */
/* Location: ./application/models/tindakan_diagnosa_model.php */