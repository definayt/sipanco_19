<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {
	public function updatePassword($data, $id_petugas){
		$sql = "UPDATE petugas SET password = '".$data['password']."' WHERE id = '".$id_petugas."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function updateProfil($data, $NIK){	
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);
		$id_petugas = $data["id"];
		$username = $data["username"];
		$nama = $data["nama"];
		$sql = "SELECT * FROM petugas WHERE username = '{$username}' AND id != '{$id_petugas}'";
		$data = $this->db->query($sql)->num_rows(); 

		if($data > 0){
			return FALSE;
		}

		$sql = "UPDATE penduduk SET nama = '".$nama."' WHERE NIK = '".$NIK."'";
		
		$data = $this->db->query($sql); 

		$sql = "UPDATE petugas SET username = '".$username."' WHERE id = '".$id_petugas."'";
		
		$data = $this->db->query($sql); 

		$this->db->trans_complete();

		if ($this->db->trans_status()==FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		}
		$this->db->trans_commit();
		return TRUE;
	}

	public function select_by_id_login($id_petugas){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->join('penduduk','petugas.NIK=penduduk.NIK');
		$this->db->where('id', $id_petugas);

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		}
		return false;
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */