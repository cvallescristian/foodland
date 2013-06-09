<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	

	public function index()
	{
		
		$this->load->view('templades/header');
		$this->load->view('pages/producto_view');
		$this->load->view('templades/footer');
	}
}

