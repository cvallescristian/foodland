<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_member extends CI_Controller {

	public function index()	{

	
			$this->load->model('admin_model','uum');
			$members= $this->uum->get_miembros();

			$data['members']=$members;
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin/admin_member_view',$data);
		
	}
	public function nuevo_member(){
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin/admin_nuevo_member_view');
		
	}
	public function nuevo_member_agregar(){

		$pass=md5($this->input->post('inputPass'));
		$data = array(
           'email' => $this->input->post('inputEmail'),
           'pass' => $pass
           
    	);
		$this->load->model('admin_model','uum');
		$this->uum->agregar_miembro($data);


		 $root= base_url()."admin_member";
  		echo "<script>location.href='$root';</script>";
	}
	public function borrar_miembro(){
		$id = $this->input->get('id');
    	$this->load->model('admin_model','uum');
    	$this->uum->borrar_miembro($id);
    	$root= base_url()."admin_member";
    	echo "<script>location.href='$root';</script>";
	}
}
	