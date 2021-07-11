<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pustakawan extends CI_Model {

	public function semua_data(){
		return $this->db->order_by('KodePustakawan','DESC')->get('pustakawan');
	}

	public function kode(){
		$query = $this->db->order_by('KodePustakawan','DESC')->limit(1)->get('pustakawan');

		$kode = 'PST 1';
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data = $row->KodePustakawan;
			$pecah = explode("PST",$data);
			$pecah1 = $pecah[1];
			$gabung = $pecah1 + 1;
			$kode = "PST".$gabung;
		}else{
			$kode = 'PST1';
		}
		return $kode;
	}

	public function tambah($data){
        $this->db->insert('pustakawan',$data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function hapus($KodePustakawan){
        $this->db->where('KodePustakawan',$KodePustakawan)->delete('pustakawan');
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function dapat_data($KodePustakawan){
    	$this->db->where('KodePustakawan',$KodePustakawan);
    	return $this->db->get('pustakawan');
    }
    public function edit($KodePustakawan,$data){
    	$this->db->set($data);
    	$this->db->where('KodePustakawan',$KodePustakawan);
    	$this->db->update('pustakawan');
    	return ($this->db->affected_rows() > 0) ? true : false;
    }

}

/* End of file M_pustakawan.php */
/* Location: ./application/models/M_pustakawan.php */