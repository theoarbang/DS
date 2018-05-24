<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
        //load the Login Model
        $this->load->model('login_model');
    }

    public function index() {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('logged_in');
        $level = $this->session->userdata('level');
        if($logged_in){
                switch ($level) {
                        case 1:
                                redirect('admin');
                                break;
                        case 2:
                                redirect('pakar');
                                break;
                        default:
                                redirect('paramedis');
                                break;
                }
        }
        //if not load the login page
        $this->load->view('login');
    }

    public function doLogin() {
        //get the input fields from login form
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        if ($level == 1) {
                $check_login = $this->login_model->checkLoginAdminPakar($username, $password, $level);
                //if the result is query result is 1 then valid user
                if ($check_login) {
                    //if yes then set the session 'loggin_in' as true
                    $this->session->set_userdata('logged_in', true);
                    $this->session->set_userdata('level', $level);
                    redirect('admin');
                } else {
                    //if no then set the session 'logged_in' as false
                    $this->session->set_userdata('logged_in', false);
                    //and redirect to login page with flashdata invalid msg
                    $this->session->set_flashdata('msg', 'Username / Password Invalid');
                    redirect('login');            
                }
        } else if ($level == 2) {
               $check_login = $this->login_model->checkLoginAdminPakar($username, $password, $level);
                //if the result is query result is 1 then valid user
                if ($check_login) {
                    //if yes then set the session 'loggin_in' as true
                    $this->session->set_userdata('logged_in', true);
                    $this->session->set_userdata('level', $level);
                    redirect('pakar');
                } else {
                    //if no then set the session 'logged_in' as false
                    $this->session->set_userdata('logged_in', false);
                    //and redirect to login page with flashdata invalid msg
                    $this->session->set_flashdata('msg', 'Username / Password Invalid');
                    redirect('login');            
                }
        }else {
                $check_login = $this->login_model->checkLoginParamedis($username, $password);
                //if the result is query result is 1 then valid user
                if ($check_login) {
                    //if yes then set the session 'loggin_in' as true
                    $this->session->set_userdata('logged_in', true);
                    $this->session->set_userdata('level', $level);
                    redirect('paramedis');
                } else {
                    //if no then set the session 'logged_in' as false
                    $this->session->set_userdata('logged_in', false);
                    //and redirect to login page with flashdata invalid msg
                    $this->session->set_flashdata('msg', 'Username / Password Invalid');
                    redirect('login');            
                }
        }
    }

    public function logout() {
        //unset the logged_in session and redirect to login page
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('level');
        redirect('login');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */