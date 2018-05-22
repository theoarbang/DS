<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                //Do your magic here
                $this->load->library('session');
                $this->load->helper(array('form', 'url'));
        }

        public function index(){

                if($this->session->userdata('login')){
                        redirect('dashboard','refresh');
                }


                
                $this->load->library('form_validation');
                $this->load->database();      
                $this->form_validation->set_rules('username', 'User name',  'callback_username_check');
                $this->form_validation->set_rules('password', 'Password', 'callback_password_check');

                $query = $this->db->get('user');
                $data = $query->result();

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('header');
                        $this->load->view('login');
                        $this->load->view('footer');
                }
                else
                {
                        $newdata = array(
                                'username'  => $this->input->post('username'),
                                'password'  => $this->input->post('password'),
                                'login'     => TRUE
                        );

                        $this->session->set_userdata($newdata);
                        redirect('dashboard','refresh');
                }
                
        }

        public function username_check($str)
        {
                $this->load->database();
                $query = $this->db->get('user');
                $data = $query->result();

                if ($str != $data[0]->user)
                {
                        $this->form_validation->set_message('username_check', '{field} yang anda masukkan salah!');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

        public function password_check($str)
        {
                $this->load->database();
                $query = $this->db->get('user');
                $data = $query->result();

                if ($str != $data[0]->password)
                {
                        $this->form_validation->set_message('password_check', '{field} yang anda masukkan salah!');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */