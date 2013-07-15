<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terminos extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header');
			$this->load->view('pages/terminos_cond_view');
			$this->load->view('templades/footer');		
	}
}