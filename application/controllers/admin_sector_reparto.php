<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_sector_reparto extends CI_Controller {

	public function index()	{

	
			$this->load->model('admin_model','uum');
			$this->load->model('home_model','uum2');
			$sectores=$this->uum2->get_sector_entrega();
			
			$data['sectores']=$sectores;

			
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_sector_reparto_view',$data);
		
	}

}
	