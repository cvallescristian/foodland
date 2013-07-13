<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	public function index()	{

			$this->load->view('templades/header_pag_footer');
			$this->load->view('pages/foodland_team_view');
			$this->load->view('templades/footer_pags');		
	}
}