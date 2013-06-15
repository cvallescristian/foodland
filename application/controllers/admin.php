<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->library('session');
		$error=$this->input->get('error', TRUE);
		$exit= $this->input->get('exit', TRUE);
		if($error==1){
			echo "<script>alert('Usuario y/o pass invalido')</script>";
		}
		else if($exit==1){
			echo "<script>alert('Usuario deslogeado satisfactoriamente')</script>";
		}
		if($this->session->userdata('id')==""){
			$this->load->view('templades/header');
			$this->load->view('pages/admin_index_view');
		}else{
			$root= base_url()."admin_local";
			header("Location: $root");
		}
	}
	public function login(){
		$this->load->library('session');
		$email=	$this->input->post('inputEmail');
		$pass= $this->input->post('inputPassword');

		$this->load->model('admin_model','uum');
		$result= $this->uum->comprobar_login($email,$pass);

		if($result!=0){
			$root= base_url()."admin_local";
			$newdata = array(

			'id'  => $result,
			'email'     => $email,
			'logged_in' => TRUE
			); $this->session->set_userdata($newdata);
		}else{
			$root= base_url()."admin?error=1";
		
		}
			header("Location: $root");
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		$root= base_url()."admin?exit=1";
		header("Location: $root");
	}
}

