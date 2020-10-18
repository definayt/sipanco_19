<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	public function total_kk(){
		$sql = "SELECT * FROM kartu_keluarga where no_kk != ''";
		$data = $this->db->query($sql);

		return $data->num_rows();

	}

	public function total_warga(){
		$this->db->select('*');
		$this->db->from('penduduk');
		$data = $this->db->get();

		return $data->num_rows();

	}

	public function total_pelaporan(){
		$this->db->select('*');
		$this->db->from('pelaporan');
		$data = $this->db->get();

		return $data->num_rows();

	}

	public function pelaporan_terbaru(){
		$today = date('Y-m-d');
		$sql = "SELECT nama, status, country_name, provinsi, kota_kabupaten, tanggal_mulai, abs(datediff(tanggal_mulai, '{$today}')) AS pemantauan 
	 			FROM pelaporan 
	 			JOIN countries
	 			JOIN provinces
	 			JOIN regencies
				WHERE pelaporan.id_negara=countries.id
	 			AND pelaporan.id_provinsi=provinces.id
				AND pelaporan.id_kota=regencies.id
	 			ORDER BY id_pelaporan DESC 
	 			LIMIT 3";
		$data = $this->db->query($sql);

		return $data->result();

	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */