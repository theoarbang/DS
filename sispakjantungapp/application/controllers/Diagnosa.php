<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->library('session');
		if(!($this->session->userdata('logged_in') && $this->session->userdata('level')==0)){
			$this->session->unset_userdata('logged_in');
        	$this->session->unset_userdata('level');
			redirect('login','refresh');
		}
		$this->load->database();
		$this->load->model('diagnosa_model');
		$this->load->model('faktor_resiko_gejala_model');
		$this->load->model('jenis_resiko_gejala_model');
		$this->load->model('pasien_model');
		$this->load->model('admin_pakar_model');
		$this->load->model('paramedis_model');
		$this->load->model('prognosis_model');
		$this->load->model('tindakan_model');
		$this->load->model('rule_model');
		$this->load->model('kunjungan_model');
		$this->load->library('cdb');
	}
	public function index()
	{
			$input_gejala = $this->gejala($this->input->post('gejala'));
			if (count($input_gejala)<2) {
				echo "Gejala min 2";
			} else {
				$hitung = $this->hitungDensitas($input_gejala);
				unset($hitung["&theta;"]);
				arsort($hitung);
				print_r($hitung);

				$codes=array_keys($hitung);
				$sql="SELECT GROUP_CONCAT(nama_diagnosa) 
					FROM tb_diagnosa 
					WHERE id_diagnosa IN('{$codes[0]}')";
				$db = $this->cdb->db();
				$result=$db->query($sql);
				$row=$result->fetch_row();
				$data['diagnosa'] = $row[0];
				$data['densitas'] = round($hitung[$codes[0]]*100,2);
				
				$sql = "SELECT tb_tindakan.*, tb_tindakan_diagnosa.* FROM tb_tindakan_diagnosa INNER JOIN tb_tindakan ON tb_tindakan.id_tindakan = tb_tindakan_diagnosa.id_tindakan WHERE tb_tindakan_diagnosa.id_diagnosa = ".$codes[0];
				$query = $this->db->query($sql);
				$data['tindakan'] = $query->result();

				echo "Terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan ".round($hitung[$codes[0]]*100,2)."%";

			}

			//ambil data pasien berdasarkan id
			$id = $this->input->post('id');
			$query = $this->db->get('tb_pasien');
			$data['records'] = $query->result();
			$sql = "SELECT * FROM `tb_pasien` WHERE `id_pasien`=".$id;
			$query = $this->db->query($sql);
			$data['dataedit'] = $query->result();

			$sql = "SELECT * FROM `tb_faktor_resiko_gejala` WHERE id_faktor_resiko_gejala IN(".implode(',',$this->input->post('gejala')).")";
			$query_gejala = $this->db->query($sql);
			$data['records2'] = $query_gejala->result();
			$data_gejala = $query_gejala->result();

			//adddatabasekunjungan
			$iditem = $this->kunjungan_model->getidkunjungan();
			if ($iditem == NULL) {
				$iditem = 1;
			}
			
			$data2 = array(
				'id_diagnosa_kunjungan' => $iditem,
				'id_pasien' => $id,
				'id_diagnosa' => $codes[0],
				'densitas'  => $hitung[$codes[0]]
			);

			$this->session->set_userdata('id_pasien', $id);

			$this->kunjungan_model->addkunjungan($data2);

			//add item faktor resiko gejala
			
			foreach ($data_gejala as $r) {
				$data2 = array(
				'id_diagnosa_kunjungan' => $iditem,
				'id_faktor_resiko_gejala'  => $r->id_faktor_resiko_gejala	
				);
				$this->kunjungan_model->additemkunjungan($data2);
			}
			

			//ambil data tindakan
			$this->load->view('hasil_diagnosa',$data);

	}

	private function gejala($gejala){
		$sql = "SELECT GROUP_CONCAT(b.id_diagnosa), c.densitas
			FROM tb_keputusan a
			JOIN tb_diagnosa b ON a.id_diagnosa=b.id_diagnosa
			JOIN tb_faktor_resiko_gejala c ON a.id_faktor_resiko_gejala = c.id_faktor_resiko_gejala
			WHERE a.id_faktor_resiko_gejala IN(".implode(',',$gejala).") 
			GROUP BY a.id_faktor_resiko_gejala";
		$db = $this->cdb->db();
		$query=$db->query($sql);
		$evidence=array();
		while($result=$query->fetch_row()){
			$evidence[]=$result;
		}
		return $evidence;
	}

	private function fod(){
		$sql="SELECT GROUP_CONCAT(id_diagnosa) FROM tb_diagnosa";
		$db = $this->cdb->db();
		$query=$db->query($sql);
		$row=$query->fetch_row();
		return $fod=$row[0];
	}

	private function hitungDensitas($gejala){
		$fod = $this->fod();
		$densitas_baru=array();
		while(!empty($gejala)){
			$densitas1[0]=array_shift($gejala);
			$densitas1[1]=array($fod,1-$densitas1[0][1]);
				$densitas2=array();
				if(empty($densitas_baru)){
				$densitas2[0]=array_shift($gejala);
				}else{
					foreach($densitas_baru as $k=>$r){
				 		if($k!="&theta;"){
				 			$densitas2[]=array($k,$r);
				 		}
				 	}
			 	}
			 	
			$theta=1;
			foreach($densitas2 as $d) $theta-=$d[1];
			$densitas2[]=array($fod,$theta);
			$m=count($densitas2);
			$densitas_baru=array();

			for($y=0;$y<$m;$y++){
				for($x=0;$x<2;$x++){
					if(!($y==$m-1 && $x==1)){
						$v=explode(',',$densitas1[$x][0]);
						$w=explode(',',$densitas2[$y][0]);
						sort($v);
						sort($w);
						$vw=array_intersect($v,$w);
						if(empty($vw)){
							$k="&theta;";
						}else{
							$k=implode(',',$vw);
						}
						if(!isset($densitas_baru[$k])){
							$densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
						}else{
							$densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
						}
					}
				}
			}
			foreach($densitas_baru as $k=>$d){
				if($k!="&theta;"){
					$densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
				}
			}
			//print_r($densitas_baru);
		}
		return $densitas_baru;
	}
}

/* End of file Diagnosa.php */
/* Location: ./application/controllers/Diagnosa.php */