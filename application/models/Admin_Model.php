<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	function __construct() {
        // $this->tableName = 'table_keinginan';
        // $this->primaryKey = 'id';
    }

    public function wo_month($p_nama){
    	$tahun = date("Y");
    	$bulan = date("m");
    	$query = $this->db->query("SELECT * FROM tbl_project_wo JOIN tbl_teknisi_wo on tbl_project_wo.kode_teknisi = tbl_teknisi_wo.kode_teknisi JOIN tbl_schedule_wo ON tbl_project_wo.kode_jadwal = tbl_schedule_wo.kode_jadwal WHERE (tbl_teknisi_wo.teknisi1 = '$p_nama' || tbl_teknisi_wo.teknisi2 = '$p_nama' || tbl_teknisi_wo.teknisi3 = '$p_nama' || tbl_teknisi_wo.teknisi4 = '$p_nama' || tbl_teknisi_wo.pkl1 = '$p_nama' || tbl_teknisi_wo.pkl2 = '$p_nama' || tbl_teknisi_wo.pkl3 = '$p_nama') AND (MONTH(tbl_schedule_wo.tgl) = '$bulan' AND YEAR(tbl_schedule_wo.tgl) = '$tahun')");
    	return $query->result();
    }

    public function my_activity(){
    	$query = $this->db->query("SELECT * FROM tbl_aktivitas JOIN tbl_project_wo ON tbl_project_wo.wo_id = tbl_aktivitas.wo_id JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_aktivitas.nip");
    	return $query->result();
    }

}
