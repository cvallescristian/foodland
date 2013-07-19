<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locales extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header_local');
			$this->load->view('pages/locales');
					
	}
}