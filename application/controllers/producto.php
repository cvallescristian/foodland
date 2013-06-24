<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	

	public function index()
	{
		$id=$this->input->get('id');
		if(is_numeric($id)){

			$this->load ->model('home_model','uum');
			$productos = $this->uum->get_producto_particular($id);
			$sector_entregas= $this->uum->get_sector_entrega();
			$sector_entregas_particular= $this->uum->get_sector_entrega_particular($id);
			$detalle_local=$this->uum->get_local_particular($id);
			$this->uum->agregar_contador($id);

			$data['productos']= $productos;
			$data['sector_entregas_particular']=$sector_entregas_particular;
			$data['sector_entregas']=$sector_entregas;
			$data['detalle_locales']=$detalle_local;
			$this->load->view('templades/header_producto',$data);
			$this->load->view('pages/producto_view',$data);
			$this->load->view('templades/footer_producto',$data);

		}else{
			echo "Error en la consulta SQL <br>";
		
			echo "<a href='".base_url()."'>Volver el home</a>";
		}
	}
}


