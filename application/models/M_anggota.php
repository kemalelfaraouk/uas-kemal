<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

	public function semua_data(){
		return $this->db->order_by('NomorAnggota','DESC')->get('anggota');
	}	

	public function kode(){
		$query = $this->db->order_by('NomorAnggota','DESC')->limit(1)->get('anggota');

		$kode = 'AGT';
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data = $row->NomorAnggota;
			$pecah = explode("AGT",$data);
			$pecah1 = $pecah[1];
			$gabung = $pecah1 + 1;
			$kode = "AGT".$gabung;
		}else{
			$kode = 'AGT1';
		}
		return $kode;
	}


	public function tambah($data){
        $this->db->insert('anggota',$data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function hapus($NomorAnggota){
        $this->db->where('NomorAnggota',$NomorAnggota)->delete('anggota');
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function dapat_data($NomorAnggota){
    	$this->db->where('NomorAnggota',$NomorAnggota);
    	return $this->db->get('anggota');
    }
    public function edit($NomorAnggota,$data){
    	$this->db->set($data);
    	$this->db->where('NomorAnggota',$NomorAnggota);
    	$this->db->update('anggota');
    	return ($this->db->affected_rows() > 0) ? true : false;
    }

}

/* End of file M_anggota.php */
/* Location: ./application/models/M_anggota.php */