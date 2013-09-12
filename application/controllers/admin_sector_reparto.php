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
			$this->load->view('pages/admin/admin_sector_reparto_view',$data);
		
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
			$this->load->view('pages/admin/admin_nuevo_sector_view',$data);
		}
	}
	public function nuevo_sector_agregar(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			if($this->input->post('inputSectorPadre')==""){ //es un subsector
				$data = array( 
	           	'nombre_sector_entrega' => $this->input->post('inputNombre'),
				);
				$this->uum->agregar_sector($data);
			}else{
				$data = array( 
	           	'nombre_subsector_entrega' => $this->input->post('inputNombre'),
				'id_sector_entrega' => $this->input->post('inputSectorPadre')
				);
				$this->uum->agregar_subsector($data);
			}
			$root= base_url()."Admin_sector_reparto?inf=1";
    		redirect($root);
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
	 public function borrar_sub_sector()
	{
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$id= $this->input->get('id');
			$this->load->model('admin_model','uum');
			$this->uum->borrar_sub_sector($id);

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
			$tip= $this->input->get('tip');
			$this->load->model('admin_model','uum');
			$this->load->model('home_model','uum2');
			$sectores= $this->uum->get_sector_entrega_particular($id);
			$data['sector']=$sectores;
			if($tip == 2){
				$subsectores=$this->uum->get_sub_sector_entrega_particular($id);
				$data['subsectores']=$subsectores;
			}
			
			$sectores=$this->uum2->get_sector_entrega();

			$data['sectores']=$sectores;
			
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin/admin_editar_sector_view',$data);
		}
	}
	public function editar_sector_agregar(){
		$id= $this->input->get('id');
		$this->load->model('admin_model','uum');
		if($this->input->post('inputSectorPadre')==""){ //es un subsector
			$data = array( 
		   	'nombre_sector_entrega' => $this->input->post('inputNombre'),
			);
			$this->uum->editar_sector($data,$id);
		}else{
			$data = array( 
		   	'nombre_subsector_entrega' => $this->input->post('inputNombre'),
			'id_sector_entrega' => $this->input->post('inputSectorPadre')
			);
			$this->uum->editar_subsector($data,$id);
		}
		$root= base_url()."Admin_sector_reparto?inf=1";
		redirect($root);

	}

}
	