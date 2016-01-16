<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('tabel',array('data' => $data));
	}

	public function insert(){
		$res = $this->mymodel->insertData('mahasiswa',array(
			"nim" => "0101313",
			"nama" => "claudia",
			"alamat" => "brazil"));
		if($res >= 1){
			echo "<h2>Insert data sukses !</h2>";
		}else{
			echo "<h2>Insert data gagal !</h2>";
		}
	}

	public function update(){
		$res = $this->mymodel->updateData('mahasiswa',array(
			"alamat" => "rio de janiero, brazil"),array("nim" => "0101313"));
		if($res >= 1){
			echo "<h2>Update data sukses !</h2>";
		}else{
			echo "<h2>Update data gagal !</h2>";
		}
	}

	public function delete(){
		$res = $this->mymodel->deleteData('mahasiswa',array("nim" => "0101313"));
		if($res >= 1){
			echo "<h2>Delete data sukses !</h2>";
		}else{
			echo "<h2>Delete data gagal !</h2>";
		}
	}

	public function panggil(){
		$data = $this->db->query("SELECT * FROM mahasiswa");
		/*echo "<pre>";
			print_r($data);
		"</pre>";*/
		echo "Jumlah Data :".$data->num_rows()."<br />";
		$row = $data->row();
		echo "No Induk = ".$row->nim."<br />";
		echo "Nama = ".$row->nama."<br />";
		echo "Alamat = ".$row->alamat."<br />";
		/*foreach ($data->result_array() as $a) {
			echo "No Induk 		:".$a['nim']."<br />";
			echo "Nama 			:".$a['nama']."<br />";
			echo "Alamat 		:".$a['alamat']."<br />";
			echo "<hr />";
		}*/
	}
}
