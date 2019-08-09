<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Teknisi_Model', 'teknisi');

        if($this->session->has_userdata('level_user') == false){
            redirect('Login');
        }
        else if($this->session->userdata('level_user') == 'ADMIN'){
            redirect('Admin');
        }
    }

    private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('teknisi/template/head', array("title" => $title), true),
			"header" => $this->load->view('teknisi/template/header', false, true),
			"sidebar" => $this->load->view('teknisi/template/sidebar', false, true),
			"main_js" => $this->load->view('teknisi/template/main_js', false, true),
			"footer" => $this->load->view('teknisi/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('teknisi/index', '', true)
           );

        $this
        ->load
        ->view('teknisi/template/teknisi_template', $data);
	}
}
