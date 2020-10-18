<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends AUTH_Controller {

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
		$this->load->model('M_profil');
		$this->load->helper(array('url'));
	}

	public function index(){
		$data['userdata'] 		= $this->userdata;
		
		$this->load->view('profil', $data);
	}

	public function editProfil(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$NIK = $this->userdata->NIK;
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {			

			$result = $this->M_profil->updateProfil($data, $NIK);
			if ($result == TRUE) {
				$this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah'));
				redirect('Profil');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
				redirect('Profil');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg("Username dan Nama Harus Diisi!"));
			redirect('Profil');
		}
	}

	public function editPassword(){
		$this->form_validation->set_rules('password_saat_ini', 'Password Saat Ini', 'trim|required');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			if (md5($this->input->post('password_saat_ini')) == $this->userdata->password) {
				if ($this->input->post('password_baru') != $this->input->post('konfirmasi_password')) {
					$this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
					redirect('Profil');
				} else {
					$data = [
						'password' => md5($this->input->post('password_baru'))
					];

					$result = $this->M_profil->updatePassword($data, $this->input->post('id'));
					if ($result > 0) {
						$this->updateProfil();
						$this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
						redirect('Profil');
					} else {
						$this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
						redirect('Profil');
					}
				}
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Password Salah'));
				redirect('Profil');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Profil');
		}
	}

}
