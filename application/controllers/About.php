<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$data['title'] = 'About';
		$this->template->load('template','about',$data);
	}
}

/* End of file About.php */
/* Location: ./application/controllers/About.php */