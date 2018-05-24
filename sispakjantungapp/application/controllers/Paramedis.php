<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramedis extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
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
	}

	public function index()
	{
		$this->load->view('beranda');
	}

	//--------------------Berenda-------------------------------
	public function beranda(){
		$this->load->view('beranda');
	}

	//--------------------data pasien-------------------------------
	public function pasien(){
		$query = $this->db->get('tb_pasien');
		$data['records'] = $query->result();
		$this->load->view('pasien',$data);
	}

	public function addpasien(){
		$data = array(
				'nama_pasien' => $this->input->post('nama_pasien'),
				'tgl_lahir_pasien' => $this->input->post('tgl_lahir_pasien'),
				'alamat_pasien' => $this->input->post('alamat_pasien'),
				'telp_pasien' => $this->input->post('telp_pasien'),
				'jk_pasien' => $this->input->post('jk_pasien'),
				'status' => $this->input->post('status')
				);
		$this->pasien_model->addpasien($data);
		redirect('paramedis/pasien','refresh');
	}

	public function delpasien($id){
		$this->pasien_model->delpasien($id);
		redirect('paramedis/pasien','refresh');
	}

	public function editpasien($id){
		$query = $this->db->get('tb_pasien');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_pasien` WHERE `id_pasien`=".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_pasien',$data);
	}

	public function updatepasien(){
		$data = array(
				'nama_pasien' => $this->input->post('nama_pasien'),
				'tgl_lahir_pasien' => $this->input->post('tgl_lahir_pasien'),
				'alamat_pasien' => $this->input->post('alamat_pasien'),
				'telp_pasien' => $this->input->post('telp_pasien'),
				'jk_pasien' => $this->input->post('jk_pasien'),
				'status' => $this->input->post('status')
				);
		$id = $this->input->post('id');
		$this->pasien_model->updatepasien($data,$id);
		redirect('paramedis/pasien','refresh');
	}

	//----------------Berkunjung------------------------------------------------------------
	public function berkunjung($idx){
		$newd = array(
			'id_pasien' => $idx
		);
		
		$this->session->set_userdata( $newd );
		$sql = "SELECT * FROM `tb_pasien` WHERE `id_pasien`=".$idx;
		$query = $this->db->query($sql);
		$temp = $query->result();
		$temp[0]->tgl_lahir_pasien;

		//hitung umur
		$from = new DateTime($temp[0]->tgl_lahir_pasien);
		$to   = new DateTime('today');
		$umur = $from->diff($to)->y;
		$data['dataedit'] = $temp;
		$data['umur'] = $umur;	

		//ambil data gejala
		$sql = "SELECT * FROM `tb_faktor_resiko_gejala` WHERE `id_jns_faktor_gejala` = 1";
		$query_faktor = $this->db->query($sql);
		$data['records1'] = $query_faktor->result();
		$sql = "SELECT * FROM `tb_faktor_resiko_gejala` WHERE `id_jns_faktor_gejala` = 2";
		$query_gejala = $this->db->query($sql);
		$data['records2'] = $query_gejala->result();
		$this->load->view('pasien_diagnosa',$data);		
	}

	public function hasildiagnosa($id){
		$sql = "SELECT a.*, a.densitas as densitas_kunjungan, b.*, c.*, d.*, e.*, f.*, g.* FROM `tb_diagnosa_kunjungan` a 
				INNER JOIN tb_pasien b ON a.id_pasien = b.id_pasien
				INNER JOIN tb_diagnosa c ON a.id_diagnosa = c.id_diagnosa
				INNER JOIN tb_item_diagnosa_kunjungan d ON a.id_diagnosa_kunjungan = d.id_diagnosa_kunjungan
				INNER JOIN tb_faktor_resiko_gejala e ON d.id_faktor_resiko_gejala = e.id_faktor_resiko_gejala
				Inner JOIN tb_tindakan_diagnosa f ON a.id_diagnosa = f.id_diagnosa
				INNER JOIN tb_tindakan g ON f.id_tindakan = g.id_tindakan
				WHERE a.id_diagnosa_kunjungan = ".$id;
		$query = $this->db->query($sql);
		$data['records'] = $query->result();
		$this->load->view('hasil_diagnosa_kunjungan',$data);
	}
	//----------------Kunjungan-------------------------------------------------------------
	public function kunjungan($id){
		$newd = array(
			'id_pasien' => $id
		);
		
		$this->session->set_userdata( $newd );
		
		$sql = "SELECT a.id_diagnosa_kunjungan, b.nama_diagnosa, a.densitas FROM `tb_diagnosa_kunjungan` a, tb_diagnosa b WHERE a.id_diagnosa = b.id_diagnosa AND `id_pasien` = ".$id;
		$query = $this->db->query($sql);
		$data['records'] = $query->result();
		$this->load->view('kunjungan',$data);
	}

	public function deldiagnosa($id){
		$this->kunjungan_model->delkunjungan($id);
		redirect('paramedis/pasien','refresh');
	}

	public function bantuan(){
		$this->load->view('bantuan');
	}

}

/* End of file Paramedis.php */
/* Location: ./application/controllers/Paramedis.php */