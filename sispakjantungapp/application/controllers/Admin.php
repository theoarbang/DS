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
		$this->load->helper('url');
		$this->load->library('session');
		if(!($this->session->userdata('logged_in') && $this->session->userdata('level')==1)){
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

}