<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	public function select_all_negara(){
		$sql = "SELECT * FROM countries WHERE id != 102";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_all_provinsi(){
		$sql = "SELECT * FROM provinces WHERE provinsi != '-'";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_all_kabkota(){
		$sql = "SELECT * FROM regencies WHERE province_id='11'";
		$data = $this->db->query($sql); 

		return $data->result();
	}


	public function select_provinsi($id_provinsi){
		$sql = "SELECT * FROM provinces WHERE id = '{$id_provinsi}'";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_kabkota($id_kabkota){
		$sql = "SELECT * FROM regencies WHERE province_id='{$id_kabkota}'";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	function getProvinsi($searchTerm=""){

     // Fetch users
     $this->db->select('*');
     $this->db->where("provinsi like '%".$searchTerm."%' ");
     $this->db->where("provinsi != '-' ");
     $fetched_records = $this->db->get('provinces');
     $provinces = $fetched_records->result_array();

     // Initialize Array with fetched data
     $data = array();
     foreach($provinces as $provinsi){
        $data[] = array("id"=>$provinsi['id'], "text"=>$provinsi['provinsi']);
     }
     return $data;
  }

  function getKota($searchTerm="", $value=""){

     // Fetch users
     $this->db->select('id, kota_kabupaten');
     $this->db->where("kota_kabupaten like '%".$searchTerm."%' ");
     $this->db->where("kota_kabupaten != '-' ");
     $this->db->where("province_id = ".$value);
     $fetched_records = $this->db->get('regencies');
     $kota_kabupaten = $fetched_records->result_array();

     // Initialize Array with fetched data
     $data = array();
     foreach($kota_kabupaten as $kota){
        $data[] = array("id"=>$kota['id'], "text"=>$kota['kota_kabupaten']);
     }
     return $data;
  }

  function getNegara($searchTerm=""){

     // Fetch users
     $this->db->select('id, country_name');
     $this->db->where("country_name like '%".$searchTerm."%' ");
     $this->db->where("country_name != 'Indonesia' ");
     
     $fetched_records = $this->db->get('countries');
     $countries = $fetched_records->result_array();

     // Initialize Array with fetched data
     $data = array();
     foreach($countries as $negara){
        $data[] = array("id"=>$negara['id'], "text"=>$negara['country_name']);
     }
     return $data;
  }

  public function lapor($data){
  	$sql = "SELECT nama from penduduk where NIK = ".$data["NIK"];
	$nama = $this->db->query($sql);
	if($nama->num_rows()==0){
		$data['status']="2";
	}else{
		$data['status']="1";
		$data['nama']="";
	}

  	if($data['nama'] == ""){
  		$sql = "SELECT nama from penduduk where NIK = ".$data["NIK"];
		$nama = $this->db->query($sql)->row();
		$sql = "INSERT INTO pelaporan (NIK, nama, status, id_negara, id_provinsi, id_kota, tanggal_mulai)VALUES('" .$data['NIK'] ."','" .$nama->nama ."','" .$data['status'] ."','" .$data['negara'] ."','" .$data['provinsi'] ."','" .$data['kab_kota'] ."','" .$data['tanggal_mulai'] ."')";
	}else{
		$sql = "INSERT INTO pelaporan (NIK, nama, status, id_negara, id_provinsi, id_kota, tanggal_mulai)VALUES('" .$data['NIK'] ."','" .$data['nama'] ."','" .$data['status'] ."','" .$data['negara'] ."','" .$data['provinsi'] ."','" .$data['kab_kota'] ."','" .$data['tanggal_mulai'] ."')";

	}

	$this->db->query($sql);

	return $this->db->affected_rows();
  }

  public function select_all_pelaporan_antar_kota(){
		$today = date('Y-m-d');
		$sql = "SELECT id_pelaporan, nama, status, country_name, provinsi, kota_kabupaten, tanggal_mulai, tanggal_selesai, abs(datediff(tanggal_mulai, '{$today}')) AS pemantauan, abs(datediff(tanggal_selesai, '{$today}')) AS sisa
	 			FROM pelaporan 
	 			JOIN countries
	 			JOIN provinces
	 			JOIN regencies
				WHERE pelaporan.id_negara=countries.id
				AND pelaporan.id_negara = 102
	 			AND pelaporan.id_provinsi=provinces.id
				AND pelaporan.id_kota=regencies.id";
		$data = $this->db->query($sql);

		return $data->result();

	}

	public function select_all_pelaporan_luar_negeri(){
		$today = date('Y-m-d');
		$sql = "SELECT id_pelaporan, nama, status, country_name, provinsi, kota_kabupaten, tanggal_mulai, tanggal_selesai, abs(datediff(tanggal_mulai, '{$today}')) AS pemantauan, abs(datediff(tanggal_selesai, '{$today}')) AS sisa
	 			FROM pelaporan 
	 			JOIN countries
	 			JOIN provinces
	 			JOIN regencies
				WHERE pelaporan.id_negara=countries.id
				AND pelaporan.id_negara != 102
	 			AND pelaporan.id_provinsi=provinces.id
				AND pelaporan.id_kota=regencies.id";
		$data = $this->db->query($sql);

		return $data->result();

	}

	public function delete($id_pelaporan){
		$sql = "DELETE FROM pelaporan WHERE id_pelaporan = '".$id_pelaporan."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */