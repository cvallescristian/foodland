<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_local extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header-perfil-local');
			$this->load->view('pages/perfil-local_view');
					
	}
}