<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lapor extends CI_Controller {

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
		$data["dataProvinsi"]=$this->M_lapor->select_all_provinsi();
		$data["dataKabupaten"]=$this->M_lapor->select_all_kabkota();
		$this->load->view('lapor_dalam_negeri', $data);
	}

	public function luar_negeri(){
		$data['dataNegara']=$this->M_lapor->select_all_negara();
		$this->load->view('lapor_luar_negeri', $data);
	}

	public function getNegara(){

      // Search term
      $searchTerm = $this->input->post('searchTerm');

      // Get users
      $response = $this->M_lapor->getNegara($searchTerm);

      echo json_encode($response);
   	}

	public function getProvinsi(){

      // Search term
      $searchTerm = $this->input->post('searchTerm');

      // Get users
      $response = $this->M_lapor->getProvinsi($searchTerm);

      echo json_encode($response);
   	}

   	public function getKota(){

      // Search term
      $searchTerm = $this->input->post('searchTerm');
      $id_provinsi = $searchTerm = $this->input->post('id_provinsi');

      if(empty($id_provinsi)){
      	$id_provinsi='11';
      }

      // Get users
      $response = $this->M_lapor->getKota($searchTerm, $id_provinsi);

      echo json_encode($response);
   	}

   	public function filter_provinsi($value){
   		$data["dataKabupaten"]=$this->M_lapor->select_kabkota($value);
		$this->load->view('filter_provinsi', $data);
   	}

	public function show_nama($value){
   		$data['id_status'] = $value;
   		$this->load->view("box_nama", $data);
	}

   	public function lapor(){
   		$data = $this->input->post();

   		$result = $this->M_lapor->lapor($data);
   		$data['hasil'] ="Gagal";
   		if ($result > 0) {
			$data['hasil'] ="Berhasil";
		}
		$this->load->view('lapor_done', $data);
   }

}
