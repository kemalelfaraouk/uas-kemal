<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login(){
		if (isset($_POST['login'])) {
			
			// echo "<pre>";
			// print_r($_POST);
			// echo "</pre>";
			// exit;
			$KodePustakawan = $this->input->post('KodePustakawan');
			$Password = md5($this->input->post('Password'));
			$cek = $this->M_login->cek($KodePustakawan,$Password);

			if ($cek->num_rows() > 0) {
				
				$row = $cek->row();
				$data = array(
					'KodePustakawan' => $row->KodePustakawan,
					'NamaPustakawan' => $row->NamaPustakawan,
					'Password' => $row->Password,
					'NomorTelepon' => $row->NomorTelepon,
					'is_login' => true,
				);
				$this->session->set_userdata($data);
				redirect('Home');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>username / password salah</div>');
				redirect('Login');
			}

		}else{
			redirect('Login','refresh');
		}

		
	}

	public function keluar(){
		session_destroy();
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */