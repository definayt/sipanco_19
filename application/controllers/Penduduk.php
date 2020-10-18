<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Penduduk extends AUTH_Controller {

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
		$this->load->model('M_penduduk');
		$this->load->helper(array('url'));
	}

	public function index(){
		$data['userdata'] 		= $this->userdata;
		$data['dataKK'] 	= $this->M_penduduk->select_all_kk();
		$this->load->view('penduduk_kk', $data);
	}

	public function kk(){
		$data['userdata'] 		= $this->userdata;
		$data['dataKK'] 	= $this->M_penduduk->select_all_kk();
		$this->load->view('penduduk_kk', $data);
	}
	
	public function all(){
		$data['userdata'] 		= $this->userdata;
		$data['dataPenduduk'] 	= $this->M_penduduk->select_all_penduduk();
		$this->load->view('penduduk_all', $data);
	}

	public function tambah(){
		$data['userdata'] 		= $this->userdata;
		$this->load->view('form_tambah_penduduk', $data);
	}

	public function proses_tambah_kk($value=''){
		// $this->form_validation->set_rules('no_kk', 'Nomor KK', 'trim|required');
		$data 	= $this->input->post();

		// if ($this->form_validation->run() == TRUE) {

			$result = $this->M_penduduk->insert($data);

			if ($result == TRUE) {
				$this->session->set_flashdata('msg', show_succ_msg('KK Berhasil Ditambahkan'));
				redirect('Penduduk');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('KK Gagal Ditambahkan'));
				redirect('Penduduk');
			}
		// }
	}

	public function lihat_detail_kk($no_kk){
		$data['userdata'] 		= $this->userdata;
		$data['dataKK'] = $this->M_penduduk->select_by_no_kk($no_kk);
		$data['dataAnggotaKeluarga'] = $this->M_penduduk->select_anggota_keluarga($no_kk);
		// $data['jum_anggota_kk'] = $this->M_penduduk->jumlah_anggota_keluarga($no_kk);
		$data['tab'] ='detail_kk';
		$this->load->view('detail_kk_penduduk', $data);
	}

	public function lihat_anggota_kk($no_kk){
		$data['userdata'] 		= $this->userdata;
		$data['dataKK'] = $this->M_penduduk->select_by_no_kk($no_kk);
		$data['dataAnggotaKeluarga'] = $this->M_penduduk->select_anggota_keluarga($no_kk);
		// $data['jum_anggota_kk'] = $this->M_penduduk->jumlah_anggota_keluarga($no_kk);
		$data['tab'] ='anggota_kk';
		$this->load->view('detail_kk_penduduk', $data);
	}

	public function tambah_anggota_kk_baru($no_kk){
		$data 	= $this->input->post();

		$result = $this->M_penduduk->insert_new_anggota($data, $no_kk);		

		if ($result == TRUE) {
			$this->session->set_flashdata('msg', show_succ_msg('Anggota Keluarga Berhasil Ditambahkan'));
			redirect('Penduduk/lihat_anggota_kk/'.$no_kk);
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Anggota Keluarga Gagal Ditambahkan'));
			redirect('Penduduk/lihat_anggota_kk/'.$no_kk);
		}
		
	}

	public function proses_edit_detail_kk(){
		$data 	= $this->input->post();

		$result = $this->M_penduduk->edit_detail_kk($data);		

		if ($result == TRUE) {
			$this->session->set_flashdata('msg', show_succ_msg('Detail KK Berhasil Diubah'));
			redirect('Penduduk/lihat_detail_kk/'.$data['no_kk']);
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Detail KK Gagal Diubah'));
			redirect('Penduduk/lihat_detail_kk/'.$data['no_kk']);
		}
	}

	public function hapus($input){
		$data['userdata'] 		= $this->userdata;		
		
		$result = $this->M_penduduk->hapus($input);
		
		if ($result == TRUE) {
			$this->session->set_flashdata('msg', show_succ_msg('KK Berhasil dihapus'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('KK Gagal dihapus'));
		}
		redirect('Penduduk/kk');
	}

	public function hapus_anggota($input){
		$data['userdata'] 		= $this->userdata;		

		$datainput = explode('_', $input);
		
		$result = $this->M_penduduk->hapus_anggota($datainput[0]);
		
		if ($result >0) {
			$this->session->set_flashdata('msg', show_succ_msg('Anggota Keluarga Berhasil dihapus'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Anggota Keluarga Gagal dihapus'));
		}
		redirect('Penduduk/lihat_anggota_kk/'.$datainput[1]);
	}

	public function hapus_penduduk($NIK){
		$data['userdata'] 		= $this->userdata;		
		
		$result = $this->M_penduduk->hapus_penduduk($NIK);
		
		if ($result >0) {
			$this->session->set_flashdata('msg', show_succ_msg('Penduduk Berhasil dihapus'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Penduduk Gagal dihapus'));
		}
		redirect('Penduduk/all');
	}

	public function update() {
		$data['userdata'] 	= $this->userdata;

		$data 	= $this->input->post();

		
		$result = $this->M_penduduk->update($data);
		
		if ($result >0) {
			$this->updateProfil();
			$this->session->set_flashdata('msg', show_succ_msg('Penduduk Berhasil diubah'));
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Penduduk Gagal diubah'));
		}
		redirect('Penduduk/all');
	}

	public function getAllPenduduk(){

      // Search term
      $searchTerm = $this->input->post('searchTerm');

      // Get users
      $response = $this->M_penduduk->getAllPenduduk($searchTerm);

      echo json_encode($response);
   	}
	
	public function pdf(){
		// pastikan error reporting mati, atau file pdf akan corrupt
        error_reporting(0);

        $parameters=array(
            'paper'=>'A4',
            'orientation'=>'portrait',
        );

        // load library extension class Cezpdf
        // lokasi: ./application/libraries/Pdf.php
        $this->load->library('Pdf', $parameters);

        // pastikan path font benar
        $this->pdf->selectFont(APPPATH.'/third_party/pdf-php/fonts/Helvetica.afm');

        // judul rekap
        $this->pdf->ezText("Data Warga RT 05/RW VII Kelurahan Genuk", 15, array('justification'=> 'centre'));

        // spasi judul dengan tabel
        $this->pdf->ezSetDy(-15);

        $this->pdf->ezSetCmMargins(3, 3, 3, 3);

        // jalankan query

        $data_kk = $this->M_penduduk->select_all_kk();
        $j=1;
        foreach ($data_kk as $kk) {
        	if($kk->no_kk != ''){
        		$this->pdf->ezText($j.".\t\tNomor KK \t\t\t\t\t\t\t\t\t\t:\t".$kk->no_kk,11,array('justification'=>'left','aleft'=>'70'));
	            $this->pdf->ezText("\t\t\t\t\tKepala Keluarga :\t".$kk->nama,11,array('justification'=>'left','aleft'=>'70'));
	            $this->pdf->ezSetDy(-8);          
	            
	            $query = $this->M_penduduk->select_penduduk_by_no_kk($kk->no_kk);

		        // persiapkan data (array) untuk tabel pdf
		        $no = 0;
		        $i = 0;
		        $data_penduduk=array();
		        foreach ($query as $key => $value) {
		            // jangan ganti urutan 3 baris ini, atau nomor tidak tampil
		            $data_penduduk[$key] = $value;
		            $data_penduduk[$i]['no']= ++$no;
		            $i++;
		        }

		        // header tabel pdf
		        $column_header=array(
		            'no' => 'No',
		            'NIK'=>'NIK',
		            'nama'=>'Nama',
		        );

		        // buat tabel pdf
		         $options=array(

			        'xPos'=>85,'xOrientation'=>'right'

			       );
		        $this->pdf->ezTable($data_penduduk, $column_header,$title='',$options);
		        $this->pdf->ezSetDy(-15);
		        $j++;
		        
        	}
            
        }
        

        $nama_file = 'Data Warga RT 05 RW VII Kelurahan Genuk.pdf';

        // force download, nama file sesuai dengan $nama_file
        $this->pdf->ezStream(array('Content-Disposition'=>$nama_file));
    
	}
}
