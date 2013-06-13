<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_local extends CI_Controller {

	

	public function index()
	{
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$locales= $this->uum->get_local();

			$data['locales']=$locales;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_local_view',$data);
		}
		
	}
	public function nuevo_local(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_nuevo_local_view');
		}
	}
	public function nuevo_local_agregar(){
		
	}
}

