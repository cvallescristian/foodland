<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_detalle_local extends CI_Controller {

	

	public function index()
	{
		$id=$this->input->get('id');
		if($this->session->userdata('id')=="" || $id==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{

			$this->load->model('admin_model','uum');
			$this->load->model('home_model','uum2');
			$locales= $this->uum->get_local();
			$sectores=$this->uum2->get_sector_entrega();
			$añadir_producto=$this->input->get('al');
			if($añadir_producto==1){
				echo "<script>alert('Local agregado satisfactoriamente')</script>";
			}
			$data['locales']=$locales;
			$data['sectores']=$sectores;
			$data['id']=$id;
	
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_local_view',$data);
		}
		
	}
	public function detalle_producto(){
		$id=$this->input->get('id');
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$producto = $this->uum->get_producto_id($id);
			$locales = $this->uum->get_local();
			$tipo_producto= $this->uum->get_tipo_producto();
			$data['producto'] = $producto;
			$data['locales'] = $locales; 
			$data['tipo_producto']=$tipo_producto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_producto_local_view',$data);
		}
	}
	public function borrar_local(){
    	if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id=$this->input->get('id');
			$this->load->model('admin_model','uum');
			$this->uum->borrar_local($id);
			$root= base_url()."admin_local?al=3&id".$id;
    		redirect($root);
		}
    }
}