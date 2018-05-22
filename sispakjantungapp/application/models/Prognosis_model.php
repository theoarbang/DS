<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prognosis_model extends CI_Model {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}

	public function updateprognosis($data, $id){
		$this->db->set($data);
		$this->db->where("id_prognosis", $id);
		$this->db->update('tb_prognosis', $data);
	}

	public function addprognosis($data){
		if($this->db->insert('tb_prognosis', $data)){
			return true;
		}
	}

	public function delprognosis($id){
		if($this->db->delete('tb_prognosis','id_prognosis ='.$id)){
			return true;
		}
	}	

}

/* End of file Prognosis_model.php */
/* Location: ./application/models/Prognosis_model.php */