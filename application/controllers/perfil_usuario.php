<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_usuario extends CI_Controller {

	public function index()	{

			$this->load->view('pages/pefil/perfil_view');
	}

	public function cambiar_datos(){

			$this->load->view('pages/perfil/cambiar_datos_view');
	}

	public function amigos(){

			$this->load->view('pages/perfil/amigos_view');
	}
}