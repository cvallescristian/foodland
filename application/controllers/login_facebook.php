<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_facebook extends CI_Controller {



	public function index()
	{
		
		$this->load->view('templades/header');
		$this->load->view('pages/facebook_view');
		$this->load->view('templades/footer');
	}
}

