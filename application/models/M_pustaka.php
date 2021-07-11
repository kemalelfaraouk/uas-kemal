<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pustaka extends CI_Model {

	public function semua_data(){
		return $this->db->order_by('KodePustaka','DESC')->get('pustaka');
	}	

	public function kode(){
		$query = $this->db->order_by('KodePustaka','DESC')->limit(1)->get('pustaka');

		$kode = 'PSKT';
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data = $row->KodePustaka;
			$pecah = explode("PSKT",$data);
			$pecah1 = $pecah[1];
			$gabung = $pecah1 + 1;
			$kode = "PSKT".$gabung;
		}else{
			$kode = 'PSKT1';
		}
		return $kode;
	}


	public function tambah($data){
        $this->db->insert('pustaka',$data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function hapus($KodePustaka){
        $this->db->where('KodePustaka',$KodePustaka)->delete('pustaka');
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function dapat_data($KodePustaka){
    	$this->db->where('KodePustaka',$KodePustaka);
    	return $this->db->get('pustaka');
    }
    public function edit($KodePustaka,$data){
    	$this->db->set($data);
    	$this->db->where('KodePustaka',$KodePustaka);
    	$this->db->update('pustaka');
    	return ($this->db->affected_rows() > 0) ? true : false;
    }

}

/* End of file M_pustaka.php */
/* Location: ./application/models/M_pustaka.php */