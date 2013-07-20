<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header');
			$this->load->view('pages/sobre_nosotros_view');
			$this->load->view('templades/footer');		
	}
}