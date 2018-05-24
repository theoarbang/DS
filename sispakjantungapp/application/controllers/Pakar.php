<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		if(!($this->session->userdata('logged_in') && $this->session->userdata('level')==2)){
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
		$this->load->model('tindakan_diagnosa_model');
	}

	public function index()
	{
		$this->load->view('beranda');
	}

	//--------------------Berenda-------------------------------
	public function beranda(){
		$this->load->view('beranda');
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
		redirect('pakar/diagnosa','refresh');
	}

	public function deldiagnosa($id){
		$this->diagnosa_model->deldiagnosa($id);
		redirect('pakar/diagnosa',refresh);
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
		redirect('pakar/diagnosa','refresh');
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
		redirect('pakar/fresikogejala','refresh');
	}

	public function delfresikogejala($id){
		$this->faktor_resiko_gejala_model->delfresikogejala($id);
		redirect('pakar/fresikogejala','refresh');
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
		redirect('pakar/fresikogejala','refresh');
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
		redirect('pakar/jresikogejala','refresh');
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
		redirect('pakar/jresikogejala','refresh');
	}

	//--------------------tindakan-------------------------------
	public function tindakan(){
		$query = $this->db->get('tb_tindakan');
		$data['records'] = $query->result();
		$this->load->view('tindakan',$data);
	}

	public function addtindakan(){
		$data = array(
				'nama_tindakan' => $this->input->post('nama_tindakan'),
				'detail' => $this->input->post('detail')
				);
		$this->tindakan_model->addtindakan($data);
		redirect('pakar/tindakan','refresh');
	}

	public function deltindakan($id){
		$this->tindakan_model->deltindakan($id);
		redirect('pakar/tindakan',refresh);
	}

	public function edittindakan($id){
		$query = $this->db->get('tb_tindakan');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_tindakan` WHERE id_tindakan = ".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_tindakan',$data);
	}

	public function updatetindakan(){
		$data = array(
				'nama_tindakan' => $this->input->post('nama_tindakan'),
				'detail' => $this->input->post('detail')
				);
		$id = $this->input->post('id');
		$this->tindakan_model->updatetindakan($data,$id);
		redirect('pakar/tindakan','refresh');
	}

	//--------------------prognosis-------------------------------
	public function prognosis(){
		$query = $this->db->get('tb_prognosis');
		$data['records'] = $query->result();
		$this->load->view('prognosis',$data);
	}

	public function addprognosis(){
		$data = array(
				'nama_prognosis' => $this->input->post('nama_prognosis')
				);
		$this->prognosis_model->addprognosis($data);
		redirect('pakar/prognosis','refresh');
	}

	public function delprognosis($id){
		$this->prognosis_model->delprognosis($id);
		redirect('pakar/prognosis','refresh');
	}

	public function editprognosis($id){
		$query = $this->db->get('tb_prognosis');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_prognosis` WHERE `id_prognosis`=".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_prognosis',$data);
	}

	public function updateprognosis(){
		$data = array(
				'nama_prognosis' => $this->input->post('nama_prognosis')
				);
		$id = $this->input->post('id');
		$this->prognosis_model->updateprognosis($data,$id);
		redirect('pakar/prognosis','refresh');
	}
	

	//----------------Rule-------------------------------------------------------------------
	public function rule(){
		$sql = "SELECT `id_keputusan`, tb_faktor_resiko_gejala.nama_faktor_resiko_gejala, tb_diagnosa.nama_diagnosa, tb_faktor_resiko_gejala.densitas FROM `tb_keputusan`, tb_faktor_resiko_gejala, tb_diagnosa WHERE tb_faktor_resiko_gejala.id_faktor_resiko_gejala = tb_keputusan.id_faktor_resiko_gejala AND tb_keputusan.id_diagnosa = tb_diagnosa.id_diagnosa ORDER BY id_keputusan";
		$query = $this->db->query($sql);
		$query_gejala = $this->db->get('tb_faktor_resiko_gejala');
		$query_diagnosa = $this->db->get('tb_diagnosa');
		$data['records'] = $query->result();
		$data['records2'] = $query_gejala->result();
		$data['records3'] = $query_diagnosa->result();
		$this->load->view('rule',$data);
	}

	public function editrule($id){
		$sql = "SELECT `id_keputusan`, tb_faktor_resiko_gejala.nama_faktor_resiko_gejala, tb_diagnosa.nama_diagnosa, tb_faktor_resiko_gejala.densitas FROM `tb_keputusan`, tb_faktor_resiko_gejala, tb_diagnosa WHERE tb_faktor_resiko_gejala.id_faktor_resiko_gejala = tb_keputusan.id_faktor_resiko_gejala AND tb_keputusan.id_diagnosa = tb_diagnosa.id_diagnosa ORDER BY id_keputusan";
		$query = $this->db->query($sql);
		$query_gejala = $this->db->get('tb_faktor_resiko_gejala');
		$query_diagnosa = $this->db->get('tb_diagnosa');
		$data['records'] = $query->result();
		$data['records2'] = $query_gejala->result();
		$data['records3'] = $query_diagnosa->result();
		$sql_edit = "SELECT * FROM `tb_keputusan` WHERE id_keputusan = ".$id;
		$query_edit = $this->db->query($sql_edit);
		$data['dataedit'] = $query_edit->result();
		$this->load->view('edit_rule',$data);
	}

	public function addrule(){
		$data = array(
				'id_faktor_resiko_gejala' => $this->input->post('faktor_resiko_gejala'),
				'id_diagnosa' => $this->input->post('diagnosa')
				);
		$this->rule_model->addrule($data);
		redirect('pakar/rule','refresh');
	}

	public function delrule($id){
		$this->rule_model->delrule($id);
		redirect('pakar/rule','refresh');
	}

	public function updaterule(){
		$data = array(
				'id_faktor_resiko_gejala' => $this->input->post('faktor_resiko_gejala'),
				'id_diagnosa' => $this->input->post('diagnosa')
				);
		$id = $this->input->post('id');
		$this->rule_model->updaterule($data,$id);
		redirect('pakar/rule','refresh');
	}

	public function bantuan(){
		$this->load->view('bantuan');
	}

	//-----------------------------tindakan diagnosa--------------------------------------
	public function tindakandiagnosa(){
		$sql = "SELECT `id_diagnosa_tindakan`, tb_diagnosa.nama_diagnosa, tb_tindakan.nama_tindakan FROM `tb_tindakan_diagnosa`, tb_tindakan, tb_diagnosa WHERE tb_tindakan_diagnosa.id_tindakan = tb_tindakan.id_tindakan AND tb_tindakan_diagnosa.id_diagnosa = tb_diagnosa.id_diagnosa ORDER BY id_diagnosa_tindakan";
		$query = $this->db->query($sql);
		$query_diagnosa = $this->db->get('tb_diagnosa');
		$query_tindakan = $this->db->get('tb_tindakan');
		$data['records'] = $query->result();
		$data['records2'] = $query_diagnosa->result();
		$data['records3'] = $query_tindakan->result();
		$this->load->view('tindakan_diagnosa',$data);
	}

	public function edittindakandiagnosa($id){
		$sql = "SELECT `id_diagnosa_tindakan`, tb_diagnosa.nama_diagnosa, tb_tindakan.nama_tindakan FROM `tb_tindakan_diagnosa`, tb_tindakan, tb_diagnosa WHERE tb_tindakan_diagnosa.id_tindakan = tb_tindakan.id_tindakan AND tb_tindakan_diagnosa.id_diagnosa = tb_diagnosa.id_diagnosa ORDER BY id_diagnosa_tindakan";
		$query = $this->db->query($sql);
		$query_diagnosa = $this->db->get('tb_diagnosa');
		$query_tindakan = $this->db->get('tb_tindakan');
		$data['records'] = $query->result();
		$data['records2'] = $query_diagnosa->result();
		$data['records3'] = $query_tindakan->result();
		$sql_edit = "SELECT * FROM `tb_tindakan_diagnosa` WHERE id_diagnosa_tindakan = ".$id;
		$query_edit = $this->db->query($sql_edit);
		$data['dataedit'] = $query_edit->result();
		$this->load->view('edit_tindakan_diagnosa',$data);
	}

	public function addtindakandiagnosa(){
		$data = array(
				'id_diagnosa' => $this->input->post('diagnosa'),
				'id_tindakan' => $this->input->post('tindakan')
				);
		$this->tindakan_diagnosa_model->addtindakandiagnosa($data);
		redirect('pakar/tindakandiagnosa','refresh');
	}

	public function deltindakandiagnosa($id){
		$this->tindakan_diagnosa_model->deltindakandiagnosa($id);
		redirect('pakar/tindakandiagnosa','refresh');
	}

	public function updatetindakandiagnosa(){
		$data = array(
				'id_diagnosa' => $this->input->post('diagnosa'),
				'id_tindakan' => $this->input->post('tindakan')
				);
		$id = $this->input->post('id');
		$this->tindakan_diagnosa_model->updatetindakandiagnosa($data,$id);
		redirect('pakar/tindakandiagnosa','refresh');
	}

}

/* End of file Pakar */
/* Location: ./application/controllers/Pakar */