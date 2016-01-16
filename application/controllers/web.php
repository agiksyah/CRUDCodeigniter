<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index(){
		$data = array(
			"contents" => $this->mymodel->GetKonten()->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("content",$data,true),
			"sidebar" => $this->sidebar(),
			"footer" => $this->footer(),
			);
		$this->load->view("index",$comp);
	}

	public function category($id){
		$cek = $this->mymodel->GetKategori("WHERE kode_kategori = '$id'");
		if ($cek->num_rows() > 0) {
			$data = array(
			"contents" => $this->mymodel->GetKonten("WHERE kode_kategori = '$id'")->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("content",$data,true),
			"sidebar" => $this->sidebar(),
			"footer" => $this->footer(),
			);
		$this->load->view("index",$comp);
		}else {
			show_404();
		}
	}

	public function sidebar(){
		$data = array(
			"kategoris" => $this->mymodel->GetKategori()->result_array(),
			);
		return $this->load->view("sidebar",$data,true);
	}

	public function footer(){
		$data = array();
		return $this->load->view("footer",$data,true);
	}
}
