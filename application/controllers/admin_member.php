<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_member extends CI_Controller {

	public function index()	{

	
		
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_member_view');
		
	}
	public function nuevo_member(){
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_nuevo_member_view');
		
	}
}
	