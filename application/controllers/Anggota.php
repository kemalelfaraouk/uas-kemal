<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('M_anggota');
	}

	public function index()
	{
		$data['title'] = 'Anggota';
		$data['load_js'] = 'anggota/js_anggota';
		$data['anggota'] = $this->M_anggota->semua_data();

		$this->template->load('template','anggota/v_anggota',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Anggota';
		$data['kode'] = $this->M_anggota->kode();

		$this->template->load('template','anggota/tambah',$data);
	}

	public function aksi_tambah(){
		if (isset($_POST['simpan'])) {

			$NomorAnggota = $this->input->post('NomorAnggota');
			$NamaAnggota = $this->input->post('NamaAnggota');
			$Alamat = $this->input->post('Alamat');
			$TanggalDaftar = $this->input->post('TanggalDaftar');
			$TanggalKedaluarsa = $this->input->post('TanggalKedaluarsa');

			$data = array(
				'NomorAnggota' => $NomorAnggota,
				'NamaAnggota' => $NamaAnggota,
				'Alamat' => $Alamat,
				'TanggalDaftar' => $TanggalDaftar,
				'TanggalKedaluarsa' => $TanggalKedaluarsa
			);

			$tambah = $this->M_anggota->tambah($data);
			if ($tambah > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menambahkan Data</div>');
				redirect('Anggota','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menambahkan Data</div>');
				redirect('Anggota/tambah','refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

	public function hapus($NomorAnggota=''){
		if ($NomorAnggota !='') {

			$hapus = $this->M_anggota->hapus($NomorAnggota);
    		// exit;
			if ($hapus > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Menghapus Data</div>');
				redirect('Anggota','refresh');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Menghapus Data</div>');
				redirect('Anggota','refresh');
			}
		}else{
			redirect('Anggota','refresh');
		}
	}

	public function edit($NomorAnggota='')
	{
		if ($NomorAnggota !='') {
			$data['title'] = 'Edit Anggota';
			$data['row'] = $this->M_anggota->dapat_data($NomorAnggota)->row();
			$this->template->load('template','anggota/edit',$data);
		}else{
			redirect('Anggota','refresh');
		}

	}

	public function aksi_edit($NomorAnggota=''){
		if (isset($_POST['simpan'])) {

			$NomorAnggota = $this->input->post('NomorAnggota');
			$NamaAnggota = $this->input->post('NamaAnggota');
			$Alamat = $this->input->post('Alamat');
			$TanggalDaftar = $this->input->post('TanggalDaftar');
			$TanggalKedaluarsa = $this->input->post('TanggalKedaluarsa');

			$data = array(
				'NamaAnggota' => $NamaAnggota,
				'Alamat' => $Alamat,
				'TanggalDaftar' => $TanggalDaftar,
				'TanggalKedaluarsa' => $TanggalKedaluarsa
			);

			$edit = $this->M_anggota->edit($NomorAnggota,$data);
			if ($edit > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Mengubah Data</div>');
				redirect('Anggota','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Mengubah Data</div>');
				redirect('Anggota/edit/'.$NomorAnggota,'refresh');
			}

		}else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */