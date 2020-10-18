<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	
	public function cekPemantauan($NIK)
	{
		$today = date('Y-m-d');
		$sql = "SELECT pelaporan.nama, country_name, provinsi, kota_kabupaten, tanggal_mulai, tanggal_selesai,abs(datediff(tanggal_mulai, '{$today}')) AS pemantauan, abs(datediff(tanggal_selesai, '{$today}')) AS sisa 
				FROM pelaporan 
				-- JOIN penduduk
				JOIN countries
				JOIN provinces
				JOIN regencies
				
				WHERE pelaporan.NIK='{$NIK}' 
				-- AND pelaporan.NIK = penduduk.NIK
				AND pelaporan.id_negara=countries.id
				AND pelaporan.id_provinsi=provinces.id
				AND pelaporan.id_kota=regencies.id
				
				ORDER BY id_pelaporan DESC 
				LIMIT 1";
		
		$data = $this->db->query($sql); 

		return $data->row();
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */