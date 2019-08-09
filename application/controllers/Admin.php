<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model', 'admin');

        if($this->session->has_userdata('level_user') == false){
            redirect('Login');
        }
        else if($this->session->userdata('level_user') == 'USER'){
            redirect('Teknisi');
        }
    }

    private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('admin/template/head', array("title" => $title), true),
			"header" => $this->load->view('admin/template/header', false, true),
			"sidebar" => $this->load->view('admin/template/sidebar', false, true),
			"main_js" => $this->load->view('admin/template/main_js', false, true),
			"footer" => $this->load->view('admin/template/footer', false, true)
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
            ->view('admin/index', '', true)
           );

        $this
        ->load
        ->view('admin/template/admin_template', $data);
	}

	public function show_my_wo()
	{
		$nama = $this->session->userdata('nama');
		$list = $this->admin-> wo_month($nama);
		$newdata = array(
				'list_wo' => $list,
			);
		$path = "";
        $data = array(
            "page" => $this->load("Show My WO", $path) ,
            "content" => $this
            ->load
            ->view('admin/my-wo', $newdata, true)
           );

        $this
        ->load
        ->view('admin/template/admin_template', $data);
	}

	public function show_my_activity()
	{
		$nama = $this->session->userdata('nama');
		$list = $this->admin-> my_activity();
		$newdata = array(
				'list_wo' => $list,
			);
		$path = "";
        $data = array(
            "page" => $this->load("Show My Activity", $path) ,
            "content" => $this
            ->load
            ->view('admin/my-activity', $newdata, true)
           );

        $this
        ->load
        ->view('admin/template/admin_template', $data);
	}

}
