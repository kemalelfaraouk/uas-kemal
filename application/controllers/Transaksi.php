<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
		$this->load->model('M_transaksi');
	}

	public function index()
	{
		$data['title'] = 'Transaksi';
		$data['load_js'] = 'transaksi/js_transaksi';
		$data['transaksi'] = $this->M_transaksi->semua_data();

		$this->template->load('template','transaksi/v_transaksi',$data);
	}

	public function pinjam()
	{
		$data['title'] = 'Transaksi Pinjam';
		// $data['kode'] = $this->M_transaksi->kode();
		// $data['load_js'] = 'pinjam/js_transaksi';
		// $data['anggota'] = $this->M_transaksi->semua_data();

		$this->template->load('template','transaksi/pinjam',$data);
	}

	public function aksi_pinjam(){
		if (isset($_POST['simpan'])) {

			// $IdTransaksi = $this->input->post('IdTransaksi');
			$NomorAnggota = $this->input->post('NomorAnggota');
			$KodePustaka = $this->input->post('KodePustaka');
			$TanggalPinjam = $this->input->post('TanggalPinjam');
			$KodePustakawanPinjam = $this->session->userdata('KodePustakawan');

			$data = array(
				// 'IdTransaksi' => $IdTransaksi,
				'NomorAnggota' => $NomorAnggota,
				'KodePustaka' => $KodePustaka,
				'TanggalPinjam' => $TanggalPinjam,
				'KodePustakawanPinjam' => $KodePustakawanPinjam
			);

			$pinjam = $this->M_transaksi->pinjam($data);
			if ($pinjam > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Melakukan Transaksi</div>');
				redirect('Transaksi','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Melakukan Transaksi</div>');
				redirect('Transaksi/pinjam','refresh');
			}

		}else{
			redirect('Transaksi','refresh');
		}
	}

	public function kembalikan($IdTransaksi=''){
		if ($IdTransaksi !='') {

			$data = array(
				'KodePustakawanKembali' => $this->session->userdata('KodePustakawan'),
				'TanggalKembali' => date('Y-m-d'),
			);
			$update = $this->M_transaksi->kembalikan($IdTransaksi,$data);

			if ($update > 0) {

				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Melakukan Pengembalian</div>');
				redirect('Transaksi','refresh');

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Melakukan Pengembalian</div>');
				redirect('Transaksi','refresh');
			}


			// // $IdTransaksi = $this->input->post('IdTransaksi');
			// $NomorAnggota = $this->input->post('NomorAnggota');
			// $KodePustaka = $this->input->post('KodePustaka');
			// $TanggalPinjam = $this->input->post('TanggalPinjam');
			// $KodePustakawanPinjam = $this->session->userdata('KodePustakawan');

			// $data = array(
			// 	// 'IdTransaksi' => $IdTransaksi,
			// 	'NomorAnggota' => $NomorAnggota,
			// 	'KodePustaka' => $KodePustaka,
			// 	'TanggalPinjam' => $TanggalPinjam,
			// 	'KodePustakawanPinjam' => $KodePustakawanPinjam
			// );

			// $pinjam = $this->M_transaksi->pinjam($data);
			// if ($pinjam > 0) {

			// 	$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Berhasil Melakukan Transaksi</div>');
			// 	redirect('Transaksi','refresh');

			// }else{

			// 	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>Gagal Melakukan Transaksi</div>');
			// 	redirect('Transaksi/pinjam','refresh');
			// }

		}else{
			redirect('Transaksi','refresh');
		}
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */