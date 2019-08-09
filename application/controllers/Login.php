<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model', 'login');
    }

	public function index()
	{
        if($this->session->has_userdata('level_user') == false){
            $this->load->view('login');
        }
        else if($this->session->userdata('level_user') == 'ADMIN'){
                redirect('Admin');
        }
        else if($this->session->userdata('level_user') == 'USER'){
                redirect('Teknisi');
        }
	}

	public function auth_login()
	{
		try {

            $output = array('error' => false);

            $nip = $this->input->post('nip');
            $password = md5($this->input->post('pass'));
            $data = $this->login->readBy($nip, $password);

            if($data){
                $newdata = array(
                        'nip'  => $data->nip,
                        'nama'  => $data->nama,
                        'level_user' => $data->level_user,
                        'logged_in' => TRUE,
                        'id'  => $data->id,
                    );
                $this->session->set_userdata($newdata);
                $output['message'] = 'Welcome ' . $this->session->userdata('nama') . ', Please wait...' ;
            }
            else{
                $output['error'] = true;
                $output['message'] = 'Login Invalid. User not found';
            }

            echo json_encode($output);
		} catch(Exception $e) {
            redirect('Login');
        }
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('Login');
    }
}
