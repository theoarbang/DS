<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function updaterule($data, $id){
		$this->db->set($data);
		$this->db->where("id_keputusan", $id);
		$this->db->update('tb_keputusan', $data);
	}

	public function addrule($data){
		if($this->db->insert('tb_keputusan', $data)){
			return true;
		}
	}

	public function delrule($id){
		if($this->db->delete('tb_keputusan','id_keputusan ='.$id)){
			return true;
		}
	}

}

/* End of file Rule_model.php */
/* Location: ./application/models/Rule_model.php */