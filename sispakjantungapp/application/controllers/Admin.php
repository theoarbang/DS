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
	}

	public function index()
	{
		
	}

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
}
