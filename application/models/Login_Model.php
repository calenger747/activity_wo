<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

    public function readBy($nip, $pass) {
    	$query = $this->db->query("SELECT * FROM tbl_user_lr JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_user_lr.nip WHERE nip = '$nip' AND password = '$pass' AND kode_approve = '1'");
    	// $query = $this->db->get_where('tbl_user_lr', array('nip'=>$nip, 'password'=>$pass, 'kode_approve'=>'1'));
			return $query->row();
    }

}