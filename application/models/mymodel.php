<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetMahasiswa($where=""){
		$data = $this->db->query('SELECT * FROM mahasiswa '.$where);
		return $data->result_array();
	}

	public function GetKategori($where=""){
		$data = $this->db->query('SELECT * FROM kategori '.$where);
		return $data;
	}

	public function GetKonten($where=""){
		$data = $this->db->query('SELECT * FROM konten '.$where);
		return $data;
	}

	public function insertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function updateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}

	public function deleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
}
