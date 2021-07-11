<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustakawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('M_pustakawan');
	}

	public function index()
	{

    	// echo $this->M_pustakawan->kode();
    	// exit;

		$data['title'] = 'Pustakawan';
		$data['load_js'] = 'pustakawan/js_pustakawan';
		$data['pustakawan'] = $this->M_pustakawan->semua_data();

		$this->template->load('template','pustakawan/v_pustakawan',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Pustakawan';
		$data['kode'] = $this->M_pustakawan->kode();
		$this->template->load('template','pustakawan/tambah',$data);
	}

	public function aksi_tambah(){
		if (isset($_POST['simpan'])) {

			$KodePustakawan = $this->input->post('KodePustakawan');
			$NamaPustakawan = $this->input->post('NamaPustakawan');
			$NomorTelepon = $this->input->post('NomorTelepon');
			$Password = md5($this->input->post('Password'));

			$data = array(
				'KodePustakawan' => $KodePustakawan,
				'NamaPustakawan' => $NamaPustakawan,
				'NomorTelepon' => $NomorTelepon,
				'Password' => $Password
			);

			$tambah = $this->M_pustakawan->tambah($data);
			if ($tambah > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menambahkan Data</div>');
				redirect('Pustakawan','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menambahkan Data</div>');
				redirect('Pustakawan/tambah','refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

	public function hapus($KodePustakawan=''){
		if ($KodePustakawan !='') {

			$hapus = $this->M_pustakawan->hapus($KodePustakawan);
    		// exit;
			if ($hapus > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menghapus Data</div>');
				redirect('Pustakawan','refresh');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menghapus Data</div>');
				redirect('Pustakawan','refresh');
			}
		}else{
			redirect('Pustakawan','refresh');
		}
	}

	public function edit($KodePustakawan='')
	{
		if ($KodePustakawan !='') {
			$data['title'] = 'Edit Pustakawan';
			$data['row'] = $this->M_pustakawan->dapat_data($KodePustakawan)->row();
			$this->template->load('template','pustakawan/edit',$data);
		}else{
			redirect('Pustakawan','refresh');
		}

	}

	public function aksi_edit(){
		if (isset($_POST['simpan'])) {

			$KodePustakawan = $this->input->post('KodePustakawan');
			$NamaPustakawan = $this->input->post('NamaPustakawan');
			$NomorTelepon = $this->input->post('NomorTelepon');
			$Password = md5($this->input->post('Password'));

			$data = array(
				'NamaPustakawan' => $NamaPustakawan,
				'NomorTelepon' => $NomorTelepon,
				'Password' => $Password
			);

			if ($this->input->post('Password') == '') {
				unset($data['Password']);
			}

			$edit = $this->M_pustakawan->edit($KodePustakawan,$data);
			if ($edit > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Mengubah Data</div>');
				redirect('Pustakawan','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Mengubah Data</div>');
				redirect('Pustakawan/edit/'.$KodePustakawan,'refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Pustakawan.php */
/* Location: ./application/controllers/Pustakawan.php */