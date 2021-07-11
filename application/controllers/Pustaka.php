<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustaka extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('M_pustaka');
	}

	public function index()
	{
		$data['title'] = 'Pustaka';
		$data['load_js'] = 'pustaka/js_pustaka';
		$data['pustaka'] = $this->M_pustaka->semua_data();

		$this->template->load('template','pustaka/v_pustaka',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Pustaka';
		$data['kode'] = $this->M_pustaka->kode();

		$this->template->load('template','pustaka/tambah',$data);
	}

	public function aksi_tambah(){
		if (isset($_POST['simpan'])) {

			$KodePustaka = $this->input->post('KodePustaka');
			$JudulPustaka = $this->input->post('JudulPustaka');
			$Pengarang = $this->input->post('Pengarang');
			$Penerbit = $this->input->post('Penerbit');
			$TahunTerbit = $this->input->post('TahunTerbit');

			$data = array(
				'KodePustaka' => $KodePustaka,
				'JudulPustaka' => $JudulPustaka,
				'Pengarang' => $Pengarang,
				'Penerbit' => $Penerbit,
				'TahunTerbit' => $TahunTerbit
			);

			$tambah = $this->M_pustaka->tambah($data);
			if ($tambah > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menambahkan Data</div>');
				redirect('Pustaka','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menambahkan Data</div>');
				redirect('Pustaka/tambah','refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

	public function hapus($KodePustaka=''){
		if ($KodePustaka !='') {

			$hapus = $this->M_pustaka->hapus($KodePustaka);
    		// exit;
			if ($hapus > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menghapus Data</div>');
				redirect('Pustaka','refresh');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menghapus Data</div>');
				redirect('Pustaka','refresh');
			}
		}else{
			redirect('Pustaka','refresh');
		}
	}

	public function edit($KodePustaka='')
	{
		if ($KodePustaka !='') {
			$data['title'] = 'Edit Pustaka';
			$data['row'] = $this->M_pustaka->dapat_data($KodePustaka)->row();
			$this->template->load('template','pustaka/edit',$data);
		}else{
			redirect('Pustaka','refresh');
		}

	}

	public function aksi_edit($NomorAnggota=''){
		if (isset($_POST['simpan'])) {

			$KodePustaka = $this->input->post('KodePustaka');
			$JudulPustaka = $this->input->post('JudulPustaka');
			$Pengarang = $this->input->post('Pengarang');
			$Penerbit = $this->input->post('Penerbit');
			$TahunTerbit = $this->input->post('TahunTerbit');

			$data = array(
				'KodePustaka' => $KodePustaka,
				'JudulPustaka' => $JudulPustaka,
				'Pengarang' => $Pengarang,
				'Penerbit' => $Penerbit,
				'TahunTerbit' => $TahunTerbit
			);
			
			$edit = $this->M_pustaka->edit($KodePustaka,$data);
			if ($edit > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Mengubah Data</div>');
				redirect('Pustaka','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Mengubah Data</div>');
				redirect('Pustaka/edit/'.$KodePustaka,'refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Pustaka.php */
/* Location: ./application/controllers/Pustaka.php */