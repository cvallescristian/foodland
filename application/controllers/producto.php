<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	

	public function index()
	{
		$id=$this->input->get('id');
		$this->load ->model('home_model','uum');
		$productos = $this->uum->get_producto_particular($id);
		$sector_entregas= $this->uum->get_sector_entrega_particular();

		$data['productos']= $productos;
		$this->load->view('templades/header_producto',$data);
		$this->load->view('pages/producto_view',$data);
		$this->load->view('templades/footer_producto',$data);
	}
}

