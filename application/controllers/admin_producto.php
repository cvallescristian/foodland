<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_producto extends CI_Controller {

	public function index()	{

	
		
			$this->load->view('templades/header_admin');
			$this->load->view('pages/admin_producto_view');
		
	}
	public function nuevo_producto(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$locales = $this->uum->get_local();
			$producto = $this->uum->get_producto();

			$data['locales'] = $locales; 
			$data['producto'] = $producto;		
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin_nuevo_producto_view',$data);
		}
		
	}
	public function nuevo_producto_agregar(){
		
		$data = array(
           'titulo_producto' => $this->input->post('inputTitulo'),
           'precio' =>$this->input->post('inputPrecio'),
           'descrip_producto' =>$this->input->post('inputDescripcion'),
           'id_local' => $this->input->post('inputLocal'),
           'id_tipo_producto' => $this->input->post('inputProducto')
    	);


		$this->load->model('admin_model','uum');
		$id_producto_nuevo= $this->uum->agregar_producto($data);
		 $root= base_url()."admin_producto";
  		echo "<script>location.href='$root';</script>";
    }

}
	