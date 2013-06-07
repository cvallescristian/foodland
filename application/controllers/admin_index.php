<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_index extends CI_Controller {

	

	public function index()
	{
		
		$this->load->view('templades/header');
		$this->load->view('pages/admin_index_view');
		$this->load->view('templades/footer');
	}
}

