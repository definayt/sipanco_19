<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pelaporan extends AUTH_Controller {

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
		$this->load->model('M_lapor');
		$this->load->helper(array('url'));
	}
	public function index(){
		$data['userdata'] 		= $this->userdata;
		$data['pelaporan_antar_kota'] 	= $this->M_lapor->select_all_pelaporan_antar_kota();
		$this->load->view('pelaporan_dalam_negeri', $data);
	}

	public function dalam_negeri(){
		$data['userdata'] 		= $this->userdata;
		$data['pelaporan_antar_kota'] 	= $this->M_lapor->select_all_pelaporan_antar_kota();
		$this->load->view('pelaporan_dalam_negeri', $data);
	}

	public function luar_negeri(){
		$data['userdata'] 		= $this->userdata;
		$data['pelaporan_luar_negeri'] 	= $this->M_lapor->select_all_pelaporan_luar_negeri();
		$this->load->view('pelaporan_luar_negeri', $data);
	}

	public function hapus($input){
		$data['userdata'] 		= $this->userdata;		

		$data = explode('_', $input);
		
		$result = $this->M_lapor->delete($data['0']);
		
		if ($result > 0) {
			$this->session->set_flashdata('flash_message', 'Pelaporan Berhasil dihapus');
		} else {
			$this->session->set_flashdata('flash_message', show_err_msg('Pelaporan Gagal dihapus'));
		}

		if($data['1']=="Indonesia"){
			redirect('Pelaporan/dalam_negeri');
		}else{
			redirect('Pelaporan/luar_negeri');
		}
	}

}
