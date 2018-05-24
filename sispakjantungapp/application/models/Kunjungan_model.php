<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	public function addkunjungan($data){
		if($this->db->insert('tb_diagnosa_kunjungan', $data)){
			return true;
		}
	}

	public function additemkunjungan($data){
		if($this->db->insert('tb_item_diagnosa_kunjungan', $data)){
			return true;
		}
	}

	public function delkunjungan($id){
		if($this->db->delete('tb_diagnosa_kunjungan', 'id_diagnosa_kunjungan ='.$id)){
			return true;
		}
	}

	public function getidkunjungan(){
		$sql = "SELECT id_diagnosa_kunjungan FROM tb_diagnosa_kunjungan ORDER BY id_diagnosa_kunjungan DESC LIMIT 1";
		$query = $this->db->query($sql);
		if($row=$query->result()){
			return $row[0]->id_diagnosa_kunjungan + 1;
		}else{
			return 0;
		}
	}
	

}

/* End of file Kunjungan_model.php */
/* Location: ./application/models/Kunjungan_model.php */