<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_local extends CI_Controller {

	

	public function index()
	{
		
		$this->load->view('templades/header_admin');
		$this->load->view('pages/admin_local_view');
		$this->load->view('templades/footer_admin');
	}
}

