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
			$añadir_producto=$this->input->get('al');
			if($añadir_producto==1){
				echo "<script>alert('Local agregado satisfactoriamente')</script>";
			}
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
			$this->load->model('home_model','uum');
			$sector_reparto= $this->uum->get_sector_entrega();

			$data['sector_repartos']=$sector_reparto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_local_view',$data);
		}
	}
	public function nuevo_local_agregar(){
		
		$data = array(
           'nombre_local' => $this->input->post('inputNombre'),
           'direccion_local' =>$this->input->post('inputDireccion'),
           'telefono_local' =>$this->input->post('inputFono'),
           'email' => $this->input->post('inputEmail')
    	);
    	$config['upload_path'] = base_url()."img/locales/"; 
    	$config['allowed_types'] = 'gif|jpg|png'; 
    	$config['max_size'] = '100'; 
    	
    	
    	  echo 'Nombre: ' . $_FILES['userfile']['name'] . '<br/>';
		  echo 'Tipo: ' . $_FILES['userfile']['type'] . '<br/>';
		  echo 'Tamaño: ' . ($_FILES['userfile']['size'] / 1024) . ' Kb<br/>';
		  echo 'Guardado en: ' . $_FILES['userfile']['tmp_name'];

		$this->load->model('admin_model','uum');
		$id_local_nuevo= $this->uum->agregar_local($data);
  		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/$id_local_nuevo _logo.png");

  		$root= base_url()."admin_local?al=1";
  		echo "<script>location.href='$root';</script>";
    }
}

