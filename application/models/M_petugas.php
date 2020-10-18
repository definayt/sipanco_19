<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
	public function select_all(){
		$sql = "SELECT * FROM petugas JOIN penduduk WHERE petugas.NIK=penduduk.NIK ORDER BY id, nama";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_by_id($id_petugas){
		$sql = "SELECT * FROM petugas JOIN penduduk WHERE petugas.NIK=penduduk.NIK AND  id = '".$id_petugas."'";
		$data = $this->db->query($sql); 

		return $data->row();
	}

	public function delete($id_petugas){
		$sql = "DELETE FROM petugas WHERE id = '".$id_petugas."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}	

	public function insert($data){
		$sql = "INSERT INTO petugas VALUES('','" .$data['username'] ."','" .$data['NIK'] ."','" .$data['pass'] ."','" .$data['role'] ."')";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function select_nik_petugas($id_petugas){
		$sql = "SELECT NIK FROM petugas  WHERE  id = '".$id_petugas."'";
		$data = $this->db->query($sql); 

		return $data->row();
	}

	public function cek_NIK($NIK){
		$sql = "SELECT penduduk.NIK, nama FROM petugas JOIN penduduk WHERE petugas.NIK=penduduk.NIK AND petugas.NIK = '".$NIK."'";
		$data = $this->db->query($sql); 

		return $data->row();
	}

	public function cek_username($username){
		$sql = "SELECT username FROM petugas WHERE username = '{$username}'";
		$data = $this->db->query($sql); 

		return $data->num_rows();
	}

	public function cek_NIK_edit($NIK, $id_petugas){
		$sql = "SELECT penduduk.NIK, nama FROM petugas JOIN penduduk WHERE petugas.NIK=penduduk.NIK AND id !='{$id_petugas}' AND petugas.NIK = '".$NIK."'";
		$data = $this->db->query($sql); 

		return $data->row();
	}

	public function cek_username_edit($username, $id_petugas){
		$sql = "SELECT username FROM petugas WHERE username = '{$username}' AND id !='{$id_petugas}'";
		$data = $this->db->query($sql); 

		return $data->num_rows();
	}

	public function reset($id_petugas, $password){
		$sql = "UPDATE petugas SET password = '{$password}' WHERE id = '".$id_petugas."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function edit($data){
		$sql = "UPDATE petugas SET NIK = '{$data["NIK"]}', username='{$data["username"]}', role='{$data["role"]}' WHERE id = '{$data['id']}'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */