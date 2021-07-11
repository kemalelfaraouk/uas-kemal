<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true) {
			redirect('Login','refresh');
		}
	}

    public function index()
    {
    	$data['title'] = 'Home';
    	$this->template->load('template','home',$data);
        // $this->load->view('home');
    }

}

/* End of file Controllername.php */
