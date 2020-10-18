<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->join('penduduk','petugas.NIK=penduduk.NIK');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */