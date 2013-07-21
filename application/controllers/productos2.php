<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos2 extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header_producto');
			$this->load->view('pages/productos2_view');
			$this->load->view('templades/footer');		
	}
}