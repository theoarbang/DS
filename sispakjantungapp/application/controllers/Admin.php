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
		$this->load->model('admin_pakar_model');
		$this->load->model('paramedis_model');
		$this->load->model('prognosis_model');
		$this->load->model('tindakan_model');
		$this->load->model('rule_model');
	}

	public function index()
	{
		$this->load->view('beranda');
	}

//--------------------Berenda-------------------------------
	public function beranda(){
		$this->load->view('beranda');
	}
//--------------------admin-------------------------------
	public function admin(){
		$query = $this->db->get('tb_administrator');
		$data['records'] = $query->result();
		$this->load->view('admin',$data);
	}

	public function addpakar(){
		$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'telp' => $this->input->post('telp'),
				'alamat' => $this->input->post('alamat'),
				'admin' => $this->input->post('admin')
				);
		$this->admin_pakar_model->addpakar($data);
		redirect('admin/admin','refresh');
	}

	public function delpakar($id){
		$this->admin_pakar_model->delpakar($id);
		redirect('admin/admin',refresh);
	}

	public function editpakar($id){
		$query = $this->db->get('tb_administrator');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_administrator` WHERE id_administrator = ".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_admin',$data);
	}

	public function updatepakar(){
		$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'telp' => $this->input->post('telp'),
				'alamat' => $this->input->post('alamat'),
				'admin' => $this->input->post('admin')
				);
		$id = $this->input->post('id');
		$this->admin_pakar_model->updatepakar($data,$id);
		redirect('admin/admin','refresh');
	}
	
//--------------------paramedis-------------------------------
public function paramedis(){
		$query = $this->db->get('tb_paramedis');
		$data['records'] = $query->result();
		$this->load->view('paramedis',$data);
	}

	public function addparamedis(){
		$data = array(
				'nama_paramedis' => $this->input->post('nama_paramedis'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
		$this->paramedis_model->addparamedis($data);
		redirect('admin/paramedis','refresh');
	}

	public function delparamedis($id){
		$this->paramedis_model->delparamedis($id);
		redirect('admin/paramedis',refresh);
	}

	public function editparamedis($id){
		$query = $this->db->get('tb_paramedis');
		$data['records'] = $query->result();
		$sql = "SELECT * FROM `tb_paramedis` WHERE id_paramedis = ".$id;
		$query = $this->db->query($sql);
		$data['dataedit'] = $query->result();
		$this->load->view('edit_paramedis',$data);
	}

	public function updateparamedis(){
		$data = array(
				'nama_paramedis' => $this->input->post('nama_paramedis'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
		$id = $this->input->post('id');
		$this->paramedis_model->updateparamedis($data,$id);
		redirect('admin/paramedis','refresh');
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
		redirect('admin/tindakan','refresh');
	}

	public function deltindakan($id){
		$this->tindakan_model->deltindakan($id);
		redirect('admin/tindakan',refresh);
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
		redirect('admin/tindakan','refresh');
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
		redirect('admin/prognosis','refresh');
	}

	public function delprognosis($id){
		$this->prognosis_model->delprognosis($id);
		redirect('admin/prognosis','refresh');
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
		redirect('admin/prognosis','refresh');
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
		redirect('admin/pasien','refresh');
	}

	//----------------Berkunjung------------------------------------------------------------
	public function berkunjung($id){
		$sql = "SELECT * FROM `tb_pasien` WHERE `id_pasien`=".$id;
		$query = $this->db->query($sql);
		$temp = $query->result();
		$temp[0]->tgl_lahir_pasien;

		//hitung umur
		$from = new DateTime($temp[0]->tgl_lahir_pasien);
		$to   = new DateTime('today');
		$umur = $from->diff($to)->y;
		$data['dataedit'] = $temp;
		$data['umur'] = $umur;	
		$this->load->view('pasien_diagnosa',$data);
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
		redirect('admin/rule','refresh');
	}

	public function delrule($id){
		$this->rule_model->delrule($id);
		redirect('admin/rule','refresh');
	}

	public function updaterule(){
		$data = array(
				'id_faktor_resiko_gejala' => $this->input->post('faktor_resiko_gejala'),
				'id_diagnosa' => $this->input->post('diagnosa')
				);
		$id = $this->input->post('id');
		$this->rule_model->updaterule($data,$id);
		redirect('admin/rule','refresh');
	}

}