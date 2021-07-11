<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek($KodePustakawan,$Password){
		$this->db->where('KodePustakawan',$KodePustakawan);
		$this->db->where('Password',$Password);
		return $this->db->get('pustakawan');
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */