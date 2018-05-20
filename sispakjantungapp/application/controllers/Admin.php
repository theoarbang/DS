<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		// if(!$this->session->userdata('login')){
		// 	redirect('login','refresh');
		// }
		$this->load->database();
		$this->load->model('diagnosa_model');
		$this->load->model('faktor_resiko_gejala_model');
		$this->load->model('jenis_resiko_gejala_model');
		$this->load->model('pasien_model');
	}

	public function index()
	{
		
	}

//--------------------Berenda-------------------------------
	public function beranda(){
		$this->load->view('beranda');
	}
//--------------------admin-------------------------------
	public function admin(){
		$this->load->view('admin');
	}
//--------------------paramedis-------------------------------
	public function paramedis(){
		$this->load->view('paramedis');
	}
//--------------------bantuan-------------------------------
	public function bantuan(){
		$this->load->view('bantuan');
	}

//----------------diagnosa------------------------------------------------------------
	public function diagnosa(){
		$query = $this->db->get('tb_diagnosa');
		$data['records'] = $query->result();
		$this->load->view('diagnosa',$data);
	}

	public function adddiagnosa(){
		$data = array(
				'nama_diagnosa' => $this->input->post('nama_diagnosa'),
				'inisial' => $this->input->post('inisial')
				);
		$this->diagnosa_model->adddiagnosa($data);
		redirect('admin/diagnosa','refresh');
	}

	public function deldiagnosa($id){
		$this->diagnosa_model->deldiagnosa($id);
		redirect('admin/diagnosa',refresh);
	}

	public function editdiagnosa($id){
		$query = $this->db->get('tb_diagnosa');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_diagnosa` WHERE id_diagnosa = ".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_diagnosa',$data);
	}

	public function updatediagnosa(){
		$data = array(
				'nama_diagnosa' => $this->input->post('nama_diagnosa'),
				'inisial' => $this->input->post('inisial')
				);
		$id = $this->input->post('id');
		$this->diagnosa_model->updatediagnosa($data,$id);
		redirect('admin/diagnosa','refresh');
	}

//--------------------Faktor Resiko Gejala-------------------------------
	public function fresikogejala(){
		$sql = "SELECT `id_faktor_resiko_gejala`,`nama_faktor_resiko_gejala`,tb_jns_faktor_gejala.nama_jns_faktor_gejala,`densitas` FROM `tb_faktor_resiko_gejala`, tb_jns_faktor_gejala WHERE tb_jns_faktor_gejala.id_jns_faktor_gejala = tb_faktor_resiko_gejala.id_jns_faktor_gejala ORDER BY id_faktor_resiko_gejala";
		$query = $this->db->query($sql);
		$data['records'] = $query->result();
		$query2 = $this->db->get('tb_jns_faktor_gejala');
		$data['records2'] = $query2->result();
		$this->load->view('faktor_resiko',$data);
	}

	public function addfresikogejala(){
		$data = array(
				'id_jns_faktor_gejala' => $this->input->post('jns_faktor'),
				'nama_faktor_resiko_gejala' => $this->input->post('nama_faktor'),
				'densitas' => $this->input->post('densitas')
				);
		$this->faktor_resiko_gejala_model->addfresikogejala($data);
		redirect('admin/fresikogejala','refresh');
	}

	public function delfresikogejala($id){
		$this->faktor_resiko_gejala_model->delfresikogejala($id);
		redirect('admin/fresikogejala','refresh');
	}

	public function editfresikogejala($id){
		$sql = "SELECT `id_faktor_resiko_gejala`,`nama_faktor_resiko_gejala`,tb_jns_faktor_gejala.nama_jns_faktor_gejala,`densitas` FROM `tb_faktor_resiko_gejala`, tb_jns_faktor_gejala WHERE tb_jns_faktor_gejala.id_jns_faktor_gejala = tb_faktor_resiko_gejala.id_jns_faktor_gejala ORDER BY id_faktor_resiko_gejala";
		$query = $this->db->query($sql);
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_faktor_resiko_gejala` WHERE id_faktor_resiko_gejala = ".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$query2 = $this->db->get('tb_jns_faktor_gejala');
		$data['records2'] = $query2->result();
		$this->load->view('edit_faktor_resiko',$data);
	}

	public function updatefresikogejala(){
		$data = array(
				'id_jns_faktor_gejala' => $this->input->post('jns_faktor'),
				'nama_faktor_resiko_gejala' => $this->input->post('nama_faktor'),
				'densitas' => $this->input->post('densitas')
				);
		$id = $this->input->post('no');
		$this->faktor_resiko_gejala_model->updatefresikogejala($data,$id);
		redirect('admin/fresikogejala','refresh');
	}

//--------------------Jenis Faktor Resiko Gejala-------------------------------
	public function jresikogejala(){
		$query = $this->db->get('tb_jns_faktor_gejala');
		$data['records'] = $query->result();
		$this->load->view('jenis_faktor',$data);
	}

	public function addjresikogejala(){
		$data = array(
				'nama_jns_faktor_gejala' => $this->input->post('nama_jns_faktor')
				);
		$this->jenis_resiko_gejala_model->addjresikogejala($data);
		redirect('admin/jresikogejala','refresh');
	}

	public function deljresikogejala($id){
		$this->jenis_resiko_gejala_model->deljresikogejala($id);
		redirect('admin/jresikogejala','refresh');
	}

	public function editjresikogejala($id){
		$query = $this->db->get('tb_jns_faktor_gejala');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_jns_faktor_gejala` WHERE `id_jns_faktor_gejala` =".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_jenis_faktor',$data);
	}

	public function updatejresikogejala(){
		$data = array(
				'nama_jns_faktor_gejala' => $this->input->post('nama_jns_faktor')
				);
		$id = $this->input->post('id');
		$this->jenis_resiko_gejala_model->updatejresikogejala($data,$id);
		redirect('admin/jresikogejala','refresh');
	}

	//--------------------tindakan-------------------------------
	public function tindakan(){
		$this->load->view('tindakan');
	}
	//--------------------prognosis-------------------------------
	public function prognosis(){
		$this->load->view('prognosis');
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
		redirect('admin/pasien','refresh');
	}

	public function delpasien($id){
		$this->pasien_model->delpasien($id);
		redirect('admin/pasien','refresh');
	}

	public function editpasien($id){
		$query = $this->db->get('tb_pasien');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_pasien` WHERE `id_pasien`=1".$id;
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
		$this->diagnosa_model->updatediagnosa($data,$id);
		redirect('admin/pasien','refresh');
	}
}
