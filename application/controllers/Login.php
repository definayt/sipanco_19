<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

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
		$this->load->model('M_login');
		$this->load->helper(array('url', 'my'));
	}

	public function index(){
		if ($this->session->userdata('status_login') == '') {
			$this->load->view('login');
		}else{
			redirect('Dashboard');	
		}
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$username = str_replace("'", "", htmlspecialchars($this->input->post('username'), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));

		$data = $this->M_login->login($username, $password);
		if ($this->form_validation->run() == TRUE){
			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('Login');
			} else {
				$session = [
					'userdata' => $data,
					'status_login' => "Loged in",
				];
				$this->session->set_userdata($session);
				redirect('Dashboard');
			}
		} else {
			$this->session->set_flashdata('error_msg', 'Username dan Password Tidak Boleh Kosong');
			redirect('Login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}

}
