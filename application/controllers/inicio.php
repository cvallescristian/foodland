<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function index()	{

			$this->load->view('pages/perfil/perfil_view');
	}
}