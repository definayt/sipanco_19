<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Petugas extends AUTH_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('M_petugas');
		$this->load->model('M_penduduk');
		$this->load->helper(array('url'));
	}
	public function index(){
		$data['userdata'] 		= $this->userdata;
		$data['dataPetugas'] 	= $this->M_petugas->select_all();
		$this->load->view('petugas', $data);
	}

	public function hapus($id_petugas){		
		$result = $this->M_petugas->delete($id_petugas);
		
		if ($result > 0) {
			$this->session->set_flashdata('msg', show_succ_msg('Petugas Berhasil dihapus'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Petugas Gagal dihapus'));
		}

		redirect('Petugas');
	}

	public function tambah(){
		$data["userdata"]	 = $this->userdata;
		$this->load->view('form_tambah_petugas', $data);
	}

	public function prosesTambah(){
		$data = $this->input->post();

		if($data['NIK'] != '' && $data['role'] != ''){
			if ($this->M_petugas->cek_username($data['username']) == 0) {
				$petugas = $this->M_petugas->cek_NIK($data['NIK']);
				if (!(empty($petugas))) {
					$this->session->set_flashdata('msg', show_err_msg($petugas->nama.' sudah terdaftar sebagai petugas'));
					redirect('Petugas/tambah');
				} else {
					$data['pass']=md5($data['NIK']);

					$result = $this->M_petugas->insert($data);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Petugas Berhasil ditambah'));
						redirect('Petugas');
					} else {
						$this->session->set_flashdata('msg', show_err_msg('Petugas Gagal ditambah'));
						redirect('Petugas');
					}
				}
			}
			else{
				$this->session->set_flashdata('msg', show_err_msg('Petugas dengan username "'.$data['username'].'" sudah ada Silakan gunakan username yang lain!'));
				redirect('Petugas/tambah');
			}
		}
		else{
			$this->session->set_flashdata('msg', show_err_msg('Formulir tambah petugas belum Anda lengkapi! Silakan isi kembali!'));
			redirect('Petugas/tambah');
		}		
		
	}	

	public function reset_password($id_petugas){		
		$password = md5($this->M_petugas->select_nik_petugas($id_petugas)->NIK);
		$result = $this->M_petugas->reset($id_petugas, $password);
		
		if ($result > 0) {
			$this->updateProfil();
			$this->session->set_flashdata('msg', show_succ_msg('Password Petugas Berhasil direset'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Password Petugas Gagal direset'));
		}

		redirect('Petugas');
	}

	public function edit($id_petugas){
		$data["userdata"]	 = $this->userdata;

		$data['dataPetugas'] =$this->M_petugas->select_by_id($id_petugas);

		$this->load->view('form_edit_petugas', $data);
	}

	public function prosesEdit(){
		$data = $this->input->post();

		if($data['NIK'] != '' && $data['role'] != ''){
			if ($this->M_petugas->cek_username_edit($data['username'], $data['id']) == 0) {
				$petugas = $this->M_petugas->cek_NIK_edit($data['NIK'], $data['id']);
				if (!(empty($petugas))) {
					$this->session->set_flashdata('msg', show_err_msg($petugas->nama.' sudah terdaftar sebagai petugas'));
					redirect('Petugas/edit/'.$data['id']);
				} else {
					$result = $this->M_petugas->edit($data);
					if ($result > 0) {
						$this->updateProfil();
						$this->session->set_flashdata('msg', show_succ_msg('Petugas Berhasil diubah'));
						redirect('Petugas');
					} else {
						$this->session->set_flashdata('msg', show_err_msg('Petugas Gagal diubah'));
						redirect('Petugas');
					}
				}
			}
			else{
				$this->session->set_flashdata('msg', show_err_msg('Petugas dengan username "'.$data['username'].'" sudah ada Silakan gunakan username yang lain!'));
				redirect('Petugas/edit/'.$data['id']);
			}
		}
		else{
			$this->session->set_flashdata('msg', show_err_msg('Formulir edit petugas belum Anda lengkapi! Silakan isi kembali!'));
			redirect('Petugas/edit/'.$data['id']);
		}		
		
	}

}
