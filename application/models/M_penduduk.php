<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penduduk extends CI_Model {
	public function select_all_kk(){
		$sql = "SELECT * FROM kartu_keluarga JOIN penduduk WHERE kartu_keluarga.nik_kepala_keluarga=penduduk.NIK ORDER BY nama";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_all_penduduk(){
		$sql = "SELECT * FROM penduduk ORDER BY nama";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function select_penduduk_by_no_kk($no_kk){
		$sql = "SELECT * FROM penduduk WHERE no_kk='{$no_kk}' ORDER BY nama ";
		$data = $this->db->query($sql); 

		return $data->result_array();
	}

	public function insert($data){
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);

		$sql = "SELECT * FROM kartu_keluarga WHERE no_kk=" .$data['no_kk'];
		$result = $this->db->query($sql);

		if ($result->num_rows() != 0) {
			return FALSE;
		}

		$sql = "INSERT INTO kartu_keluarga VALUES('" .$data['no_kk'] ."','" .$data['nik_kk_1'] ."')";
		$this->db->query($sql);

		
		for($i=1; $i<= $data['jum_kk']+1; $i++){
			$query = "SELECT nama FROM penduduk WHERE NIK='{$data["nik_kk_{$i}"]}'";
			$result = $this->db->query($query);
			if ($result->num_rows() == 0) {
				$sql = "INSERT INTO penduduk VALUES('{$data["nik_kk_{$i}"]}','{$data["nama_kk_{$i}"]}','" .$data['no_kk'] ."')";
				$this->db->query($sql);
			}
			else{
				$sql = "UPDATE penduduk SET nama='{$data["nama_kk_{$i}"]}', no_kk= '{$data['no_kk']}' WHERE NIK='{$data["nik_kk_{$i}"]}'";
				$this->db->query($sql);
			}
		}

		$this->db->trans_complete();

		if ($this->db->trans_status()==FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		}
		else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function select_by_no_kk($no_kk){
		$sql = "SELECT * FROM kartu_keluarga JOIN penduduk WHERE penduduk.NIK=kartu_keluarga.nik_kepala_keluarga AND kartu_keluarga.no_kk='{$no_kk}'";
		$data = $this->db->query($sql); 

		return $data->row();
	}

	public function select_anggota_keluarga($no_kk){
		$sql = "SELECT * FROM penduduk WHERE NOT EXISTS ( 
												SELECT nik_kepala_keluarga
												FROM kartu_keluarga
												WHERE penduduk.NIK = kartu_keluarga.nik_kepala_keluarga )
										AND no_kk ='{$no_kk}'";
		$data = $this->db->query($sql); 

		return $data->result();
	}

	public function insert_new_anggota($data, $no_kk){
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);

		$query = "SELECT nama FROM penduduk WHERE NIK='{$data["nik_kk_new"]}'";
		$result = $this->db->query($query);
		if ($result->num_rows() == 0) {
			$sql = "INSERT INTO penduduk VALUES('{$data["nik_kk_new"]}','{$data["nama_kk_new"]}','" .$no_kk ."')";
			$this->db->query($sql);
		}
		else{
			$sql = "UPDATE penduduk SET nama='{$data["nama_kk_new"]}', no_kk= '{$no_kk}' WHERE NIK='{$data["nik_kk_new"]}'";
			$this->db->query($sql);
		}
		

		$this->db->trans_complete();

		if ($this->db->trans_status()==FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		}
		else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function edit_detail_kk($data){
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);

		$sql = "UPDATE kartu_keluarga SET nik_kepala_keluarga='{$data["nik_kk"]}' WHERE no_kk='{$data["no_kk"]}'";
		$this->db->query($sql);

		$query = "SELECT nama FROM penduduk WHERE NIK='{$data["nik_kk"]}'";
		$result = $this->db->query($query);
		if ($result->num_rows() == 0) {
			$sql = "INSERT INTO penduduk VALUES('{$data["nik_kk"]}','{$data["nama_kk"]}','" .$data["no_kk"] ."')";
			$this->db->query($sql);
		}
		else{
			$sql = "UPDATE penduduk SET nama='{$data["nama_kk"]}', no_kk= '{$data["no_kk"]}' WHERE NIK='{$data["nik_kk"]}'";
			$this->db->query($sql);
		}

		

		$this->db->trans_complete();

		if ($this->db->trans_status()==FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		}
		else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function hapus($no_kk){
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);

		$sql = "UPDATE penduduk SET no_kk= '' WHERE no_kk='{$no_kk}'";
		$this->db->query($sql);
		

		$sql = "DELETE FROM kartu_keluarga WHERE no_kk='{$no_kk}'";
		$this->db->query($sql);
		

		$this->db->trans_complete();

		if ($this->db->trans_status()==FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		}
		else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function hapus_anggota($NIK){
		$sql = "UPDATE penduduk SET no_kk= '' WHERE NIK='{$NIK}'";
		$this->db->query($sql);

		return $this->db->affected_rows();

	}

	public function hapus_penduduk($NIK){
		$sql = "DELETE FROM penduduk WHERE NIK='{$NIK}'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}
	
	public function update($data){
		$sql = "UPDATE penduduk SET nama = '{$data["nama"]}' WHERE NIK= '{$data["NIK"]}'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	function getAllPenduduk($searchTerm=""){

    	$this->db->select('NIK, nama');
	    $this->db->where("nama like '%".$searchTerm."%' ");
	    $fetched_records = $this->db->get('penduduk');
	    $penduduk_all = $fetched_records->result_array();

	     // Initialize Array with fetched data
	    $data = array();
	    foreach($penduduk_all as $penduduk){
	        $data[] = array("id"=>$penduduk['NIK'], "text"=>$penduduk['nama']);
	    }
	    return $data;
  	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */