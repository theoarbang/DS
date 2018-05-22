<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_model extends CI_Model {
public function __construct()

{
	parent::__construct();
	//Do your magic here
}	

public function updatetindakan($data, $id){
		$this->db->set($data);
		$this->db->where("id_tindakan", $id);
		$this->db->update('tb_tindakan', $data);
}

public function addtindakan($data){
	if($this->db->insert('tb_tindakan', $data)){
		return true;
	}
}

public function deltindakan($id){
	if($this->db->delete('tb_tindakan','id_tindakan ='.$id)){
		return true;
	}
}
}
/* End of file Tindakan_model.php */
/* Location: ./application/models/Tindakan_model.php */