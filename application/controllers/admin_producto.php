<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_producto extends CI_Controller {

	

	public function index()
	{
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_producto_view');
		}
	
	}
}

