<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Dashboard extends AUTH_Controller {

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
		$this->load->model('M_dashboard');
		$this->load->helper(array('url'));
	}

	public function index(){
		$data['userdata'] 		= $this->userdata;
		$data['jumlah_kk'] 		= $this->M_dashboard->total_kk();
		$data['jumlah_warga'] 	= $this->M_dashboard->total_warga();
		$data['jumlah_pelaporan'] 	= $this->M_dashboard->total_pelaporan();
		$data['pelaporan_terbaru'] 	= $this->M_dashboard->pelaporan_terbaru();
		$this->load->view('dashboard', $data);
	}

}
