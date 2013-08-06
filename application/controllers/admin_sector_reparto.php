<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_sector_reparto extends CI_Controller {

	public function index()	{
			$this->load->model('home_model','uum2');
			$sectores=$this->uum2->get_sector_entrega();
			$subsectores=$this->uum2->get_sub_sector_entrega();
			foreach ($subsectores as $sb) {
				foreach ($sectores as $s) {
					if($sb->id_sector_entrega == $s->id_sector_entrega){
						$sector_padre[]=$s->nombre_sector_entrega;
					}
				}

			}
			$data['sector_padre']=$sector_padre;
			$data['sectores']=$sectores;
			$data['subsectores']=$subsectores;

			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_sector_reparto_view',$data);
		
	}
	public function nuevo_sector(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$data['sector']="";
			$this->load->model('home_model','uum2');
			$sectores=$this->uum2->get_sector_entrega();

			$data['sectores']=$sectores;

			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_nuevo_sector_view',$data);
		}
	}
	public function nuevo_sector_agregar(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$data = array( 
	           'nombre_sector_entrega' => $this->input->post('inputNombre'),
	        );
			$this->load->model('admin_model','uum');
			$this->uum->agregar_sector($data);

			$root= base_url()."admin_local";
    		echo "<script>location.href='$root';</script>";
		}
	}
	 public function borrar_sector()
	{
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$this->uum->borrar_sector($id);

			$root= base_url()."admin_local";
    		echo "<script>location.href='$root';</script>";
		}
	}
	public function editar_sector(){

		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$sectores= $this->uum->get_sector_entrega_particular($id);
			$data['sector']=$sectores;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_sector_view',$data);
		}
	}

}
	